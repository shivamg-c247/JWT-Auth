<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\ContactUs;
use Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ContactUsController extends Controller{

    public function __construct() {
        // $this->middleware('auth:api', ['except' => ['login', 'register', 'contact-us']]);
        $this->middleware('auth:api');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create(Request $request){
    //     die('ff');
    //     die;
    //     $validator = Validator::make($request->all(), [
    //         'name'     => 'required|string|between:2,100',
    //         'email'    => 'required|string|email|max:100',
    //         'phone'    => 'required',
    //         'city'     => 'required',
    //         'state'    => 'required',
    //         'zip_code' => 'required',
    //     ]);

    //     if($validator->fails()){
    //         return response()->json($validator->errors()->toJson(), 400);
    //     }
    //     /* Image Upload */
    //     if ($files = $request->file('image')) {
    //        $destinationPath = public_path().'/uploads';
    //        $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
    //        $files->move($destinationPath, $fileName);
    //     }else{
    //         $fileName = "null";
    //     }

    //      $coach = ContactUs::create([
    //         'name'     => $request->input('name'),
    //         'email'    => $request->input('email'),
    //         'phone'    => $request->input('phone'),
    //         'image'    => $fileName,
    //         'city'     => $request->input('city'),
    //         'state'    => $request->input('state'),
    //         'zip_code' => $request->input('zip_code'),
          
    //     ]);

    //     return response()->json([
    //         'message' => 'Data insert successfully',
    //     ], 201);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
