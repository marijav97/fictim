<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;

class FrontendController extends OsnovniController
{
    private $userModel;
    private $roleModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel = new User();
        $this->roleModel=new Role();
    }

    public function loginForm(){
        return view('pages.main.login',$this->data);
    }
    public function registerForm(){
        $this->data['roles']=$this->roleModel->getAll();
        return view('pages.main.register',$this->data);
    }
    public function logout(Request $request){
        $request->session()->remove("user");
        return redirect()->route("home");
    }
    public function login(LoginRequest $request)
    {
        $email = $request->input("email");
        $password = md5($request->input("password"));

        try {
            $user = DB::table("users")
                ->join("roles", "users.role_id", "=", "roles.id")
                ->where("email", "=", $email)
                ->where("password", "=", $password)
                ->select("users.*","roles.id as roleId")
                ->first();

            $user->IsAdmin = $user->roleId == 1;

            if ($user) {
                $request->session()->put("user", $user);
                return redirect()->route("posts");
            }

            return redirect()->route("register-form");

        } catch (\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->route("error");
        }
    }
    public function register(RegisterRequest $request){
        try{
            $query = $this->userModel->doRegister($request);
            if($query){
                return redirect('login-form');
            }
        }
        catch(\PDOException $ex){
            return $ex->getMessage();
        }
    }
    public function author(){
        return view('pages.main.author');
    }
}
