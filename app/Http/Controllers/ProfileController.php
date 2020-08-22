<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Handle File Upload
        if ($request->hasFile('profile_image')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('profile_image')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('profile_image')->storeAs('public/profile',$fileNameToStore);
        
        } else {
            $fileNameToStore = 'no_image';
        }
        $auth = app('firebase.auth');
        $user = $request->input('uid');
        $properties = [
            'photoUrl' => $fileNameToStore
        ];

        $updatedUser = $auth->updateUser($user, $properties);
        return view('camp')->with('userId',$updatedUser->uid)->with('user',$updatedUser)->with('token','null')->with('Account Created Successfully!');
        //return response()->json($updatedUser);
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
