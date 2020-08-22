<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Session;
class MediaController extends Controller
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
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);
         //Handle File Upload
         if ($request->hasFile('uploadAudio')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('uploadAudio')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('uploadAudio')->getClientOriginalExtension();
            //File to store
            $AudiofileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('uploadAudio')->storeAs('public/media',$AudiofileNameToStore);
        
        } else {
            $AudiofileNameToStore = 'no_file';
        }
         //Handle File Upload
         if ($request->hasFile('cover')) {
            //Get Filename with Ext
            $fileNameWithExt = $request->file('cover')->getClientOriginalName();
            //Get just Filename
            $fileName = pathinfo($fileNameWithExt , PATHINFO_FILENAME );
            //Get just extension
            $extension = $request->file('cover')->getClientOriginalExtension();
            //File to store
            $fileNameToStore = $fileName.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('cover')->storeAs('public/cover',$fileNameToStore);
        
        } else {
            $fileNameToStore = 'no_cover';
        }

        $title = $request->input('title');
        $description = $request->input('description');
        $media = $AudiofileNameToStore;
        $cover = $fileNameToStore;

        try {
            
            $database = app('firebase.database');
            $newPostKey = $database->getReference('media')->push()->getKey();

            $uid = Session::get('userId_charrmello');
            $postData = [
                'title' => $title,
                'description' => $description,
                'media' => $media,
                'cover' => $cover,
                'user'=>$uid,
                'listens'=>0
            ];

            // Create a key for a new post
            $postRef = $database->getReference('media')->push($postData);
            $postKey = $postRef->getKey();

            $post = $database->getReference('media')
                // order the reference's children by their key in ascending order
                ->orderByKey()
                ->equalTo($postKey)
                ->getSnapshot();
            $auth = app('firebase.auth');
            $user = $auth->getUser($uid);

            return redirect('/camp')->with('success','Media added successfully');
            //return view('camp')->with('user',$user)->with('success','Media added successfully');

        } catch (\Kreait\Firebase\Database $e) {

            $msg = 'Failed to add!';
            return back()->with('success',$msg);

        }
    
    }

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {        
        $auth = app('firebase.auth');
        $uid = Session::get('userId_charrmello');

        $database = app('firebase.database');
        $result = $database->getReference('media')
            // order the reference's children by the values in the field 'height'
            ->orderByChild('user')
            // returns all persons being exactly 1.98 (meters) tall
            ->equalTo($uid)
            ->getValue();

        foreach ($result as $key => $value) {
            if($id==$key)
            {
                return $value;
            }
        }

        return null;
    }

    public function updateMedia(Request $request)
    {
        $key = $request->input('mkey');
        $description = $request->input('description');
        
        $updates = [
            'media/'.$key.'/description' => $description,
        ];
        $database = app('firebase.database');

        $database->getReference()->update($updates);

        return redirect('/camp')->with('success','Media updated successfully');
    }

    public function deleteMedia($id)
    {
        $database = app('firebase.database');
        $database->getReference('media/'.$id)->remove();
        return redirect('/camp')->with('success','Media deleted successfully');
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
        
    }
}
