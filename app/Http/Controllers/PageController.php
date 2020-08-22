<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class PageController extends Controller
{
    
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function about()
    {
        if(Session::get('userId_charrmello')!=null)
        {
            return view('about')->with('user',Session::get('userId_charrmello'));
        }
        else
        {
            return view('about');
        }
        
    }
    public function premium()
    {
        return view('premium');
    }
    public function storychiefs()
    {
        $uid = Session::get('userId_charrmello');
        if($uid)
        {    
            $user = "true";
            return view('story-chiefs')->with('user',$user);
        }
        else
        {
            return view('story-chiefs');
        }
        
    }

    public function camp()
    {
        $auth = app('firebase.auth');
        $uid = Session::get('userId_charrmello');

        if($uid)
        {        
        $database = app('firebase.database');
        $result = $database->getReference('media')
            // order the reference's children by the values in the field 'height'
            ->orderByChild('user')
            // returns all persons being exactly 1.98 (meters) tall
            ->equalTo($uid)
            ->getSnapshot()
            ->getValue();
        
        $user = $auth->getUser($uid);

        return view('camp')->with('user',$user)->with('data',$result);
        }
        {
            return view('auth.login');
        }
    }

    public function upload()
    {
        return view('camp.create');
    }

    public function profileupdate()
    {
        return view('profile-update');
    }

    public function getMedia()
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

        return $result;         
    }

}
