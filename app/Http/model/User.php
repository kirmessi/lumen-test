<?php
namespace App\http\model;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
   public function get() 
   {
   	return $users = DB::select("SELECT * FROM users");
   }
   
}