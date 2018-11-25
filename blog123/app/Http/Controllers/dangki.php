<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\DangKirequest;
use App\Models\daint;
// use Validator;
class dangki extends Controller
{
	public function them(DangKirequest $request)
	{
		

		$des ='public/upload/images';
		$img = $request->file('imgUpload')->getClientOriginalName();
		$request->file('imgUpload')->move($des,$img);

		$data = new daint;
		$data->hoten = $request->ten;
		$data->sodienthoai = $request->pass;
		$data->image = $img;
		$data->save();
		return redirect('form/dangKi');
	}
}