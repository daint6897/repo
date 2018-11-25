<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\admin\userModel;
use App\Http\Requests\userRequest;
use Hash;
use DateTime,Auth;
class userController extends Controller
{
    public function getListUser()
    {
    	$data = userModel::select()->get()->toArray();
    	
    	return view('admin.user.list',['dataUser'=>$data]);
    }
    public function getAddUser()
    {
    	return view('admin.user.add');
    }
    public function postAddUser(userRequest $request)
    {
    	$data = new userModel;
    	$data ->username =$request->txtUser;
    	$data ->password =Hash::make($request->txtPass) ;
        $data ->level =$request->rdoLevel;
        $data ->remember_token ='';
        // $data->updated_at='';
        // $data->created_at='';
    	$data->save();
        if($data->save()){
            return redirect()->route('listUser')->with(['flash_level'=>'result_msg','flash_message'=>'them thanh cong ']);
        }else{
            return redirect()->route('addCategory')->with(['flash-level'=>'result_msg','flash_message'=>'them that bai ']);
        }
    }

    public function deleteUser($id)
    {
        $levelUserLoginEd = Auth::user()->level;
        $levelUserDelete = userModel::findOrFail($id)->level;
        echo $levelUserDelete;
        if($levelUserLoginEd < $levelUserDelete){
            userModel::findOrFail($id)->delete();
            return redirect()->route('listUser')->with(['flash_level'=>'result_msg','flash_message'=>'xoa thanh cong ']);
        }else{
            return redirect()->route('listUser')->with(['flash-level'=>'result_msg','flash_message'=>'xoa that bai-- khong du tham quyen de xoa user nay']);
        }
    }
    public function getEdit($id)
    {
        $data = userModel::findOrFail($id)->toArray();
        // echo "<pre>";
        // var_dump($data);
        // echo "</pre>";
        return view('admin.user.edit',['dataUserEdit'=>$data]);
    }
    public function postEdit(Request $request,$id)
    {
        $data =userModel::findOrFail($id);
        $data->username = $request ->txtUser ;
        if($request ->txtPass){
            $data->password = Hash::make($request ->txtPass);
        }
        

        $data->level = $request ->rdoLevel;
        $data->save();
        if($data->save()){
            return redirect()->route('listUser')->with(['flash_level'=>'result_msg','flash_message'=>'them thanh cong ']);
        }else{
            return redirect()->route('addCategory')->with(['flash-level'=>'result_msg','flash_message'=>'them that bai ']);
        }

    }
}
