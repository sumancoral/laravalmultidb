<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Database\DbOnTheFly;

class UserController extends Controller {
	
   public function dydb($dbname)
   {
	    $otf = new DbOnTheFly(['database' => $dbname]);
		return $otf;
   }
   public function index(){
      
	  $dydb =$this->dydb('testdbnew');
	  $items = $dydb->getConnection()->table('otherusers')->get();
	  $users = DB::table('users')->get();
	 // print_r($users);
      return view('user.index',compact('users','items'));
   }
   public function create(){
      echo 'create';
   }
   public function store(Request $request){
      echo 'store';
   }
   public function show($id){
      echo 'show';
   }
   public function edit($id){
      echo 'edit';
   }
   public function update(Request $request, $id){
      echo 'update';
   }
   public function destroy($id){
      echo 'destroy';
   }
}

?>