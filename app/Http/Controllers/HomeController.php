<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use App\Database\DbOnTheFly;

use DB;
use Session;


class HomeController extends Controller {

   public function dydb($dbname)
   {
	    $otf = new DbOnTheFly(['database' => $dbname]);
		  return $otf;
   }

   public function showLogin()
   {
		return view('login.index');
   }

   public function doLogin(Request $request)
   {
			$db_name=$request->input('nickname');
			$username=$request->input('username');
			$password=$request->input('password');
			$pass_md5=md5($password);
			$dydb =$this->dydb($db_name);
		  $CUTDB = $dydb->getConnection();
			if(DB::connection($db_name))
			{
				$response = $CUTDB->table('user_login')
									->where('user_name', '=' ,$username)->where('user_password', '=', $pass_md5)
									->get()
									->count();
				if($response==1){
					session(['DBNAME' => $db_name]);
					session(['USERNAME' => $username]);
					return redirect('/dashboard');
				} else {
					return redirect('/login');
				}
			}
			else {
				{
					return redirect('/login');
				}
			}
   }

   public function showDashboard()
   {
	   return view('dashboard.index');
   }

   public function getLogout()
   {
	  Session::flush ();
	  return redirect('/login');
   }



}
