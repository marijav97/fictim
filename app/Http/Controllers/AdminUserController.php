<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AdminUserController extends OsnovniController
{
    private $userModel;
    private $roleModel;

    public function __construct()
    {
        parent::__construct();
        $this->userModel=new User();
        $this->roleModel=new Role();
    }

    public function index(Request $request)
    {
        $this->data['users']=$this->userModel->getAll();
        return view('admin.users.index',$this->data);
    }

    public function create()
    {
        $this->data['users']=$this->userModel->getAll();
        $this->data['roles']=$this->roleModel->getAll();
        return view('admin.users.create',$this->data);
    }

    public function store(RegisterRequest $request)
    {
        try{
            $query = $this->userModel->doRegister($request);
            if($query){
                return redirect()->route("users.index");
            }
        }
        catch(\PDOException $ex){
            return $ex->getMessage();
        }
    }

    public function show($id)
    {
        //
    }

    public function edit(User $user)
    {
        $this->data['user']=$user;
        $this->data['roles']=$this->roleModel->getAll();
        return view('admin.users.edit',$this->data);
    }

    public function update(Request $request, $id)
    {
        try {
            $user=$this->userModel->find($id);
            $user->update([
                'name' => $request['name'],
                'email' => $request['email'],
                'password' => $request['password'],
                'role_id' => $request['role_id'],
            ]);

            DB::commit();

            return redirect()->route("users.index")->with("success", "Item successfully edited.");
        }catch(\Exception $e) {
            \Log::error($e->getMessage());
            return redirect()->back()->with("error", "There was an error updating your item.");
        }
    }

    public function destroy($id)
    {
        try {
            $this->userModel->deleteU($id);

            return response()->redirectToRoute("users.index");

        }catch (\Exception $ex) {
            dd($ex->getMessage());
            Log::error($ex->getMessage());
            return response()->redirectToRoute("error");
        }
    }
}
