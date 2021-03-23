<?php

namespace App\Models;

use App\Http\Requests\RegisterRequest;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "password", 'role_id'];

    public function getAll(){
        return DB::table('users')
            ->join("roles", "users.role_id", "=", "roles.id")
            ->select('users.*','roles.name as roleName')
            ->get();
    }

    public function doRegister(RegisterRequest $request)
    {
        $name = $request->input("name");
        $email = $request->input("email");
        $password = $request->input("password");
        $role_id = $request->input("role_id");

        $query = DB::table('users');
        $query=$query ->insert(
            [   "name" => $name,
                "email" => $email,
                "password" => md5($password),
                "role_id" => $role_id
            ]
        );
        return $query;
    }
    public function deleteU($id) {
        DB::table("users")->where("id", '=', $id)->delete();
    }
    public static function findU($id){
        return DB::table("users")->where("id", '=', $id)->first();
    }
}
