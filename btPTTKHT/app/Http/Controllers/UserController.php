<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use App\Model\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('userLogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(registerRequest $request)
    {
        // $data=[
        //     'userName'=>$request->userName,
        //     'pass'=>$request->userName,
        //     'userName'=>$request->userName,
        //     'userName'=>$request->userName,
        // ]
        $user = new User();
        $data = [
            'userName'=>$request->userName,
            'pass'=>bcrypt($request->userName),
            'diaChi'=>$request->diaChi,
            'email'=>$request->email,
            'soDienThoai'=>$request->soDienThoai,
            'level'=>$request->level
        ];
        $user->create($data);
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
