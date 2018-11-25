<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\cateRequest;
use App\Models\admin\category;
use DateTime;
use Illuminate\Support\Str;
class categoryController extends Controller
{
    public function getAdd()
    {
    	$data = category::select('id','name','parent_id')->get()->toArray();
    	
    	return view('admin.category.add',['dataCate'=>$data]);
    }
    public function postAdd(cateRequest $request)
    {
    	$data = new category;
    	$data->name = $request->txtCateName;
    	$data->slug = str_slug($request->txtCateName,'-');
    	$data->parent_id = $request->sltCate;
    	$data->created_at= new DateTime();
    	$data->save();
    	// echo $data->save();
    	if($data->save()){
    		return redirect()->route('addCategory')->with(['flash_level'=>'result_msg','flash_message'=>'them thanh cong ']);
    	}else{
    		return redirect()->route('addCategory')->with(['flash-level'=>'result_msg','flash_message'=>'them that bai ']);
    	}
    	

    }
    public function list()
    {
    	$data = category::select('id','name','parent_id')->get()->toArray();
    	return view('admin.category.list',['data'=>$data]);
    }
    public function cateDelete($id)
    {
    	
    	$parent = category::where('parent_id',$id)->count();
    	if($parent ==0){
    		$category = category::find($id);
    		$category->delete($id);
    		return redirect()->route('listCate')->with(['flash_level'=>'result_msg','flash_message'=>'xoa thanh cong ']);
    	}
    }
    public function cateEdit($id)
    {
        $parent = category::findOrFail($id)->toArray();
        $data = category::select('id','name','parent_id')->get()->toArray();
        return view('admin.category.edit',['dataCateEdit'=>$data,'dataParent'=>$parent]);
    }
    public function cateEditPost(cateRequest $request,$id)
    {
        $data = category::find($id);
        $data->name = $request->txtCateName;
        $data->slug = str_slug($request->txtCateName,'-');
        $data->parent_id = $request->sltCate;
        $data->created_at= new DateTime();
        $data->save();
        // echo $data->save();
        if($data->save()){
            return redirect()->route('listCate')->with(['flash_level'=>'result_msg','flash_message'=>'them thanh cong ']);
        }else{
            return redirect()->route('addCategory')->with(['flash-level'=>'result_msg','flash_message'=>'them that bai ']);
            
        }
      
    }
}
