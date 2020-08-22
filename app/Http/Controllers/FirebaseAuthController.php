<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth;
use Kreait\Firebase\Factory;
use Session;

class FirebaseAuthController extends Controller
{
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_user(Auth $auth, Request $request)
    {
        $this->validate($request,[
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->input('email');
        $password = $request->input('password');
        
        $auth = app('firebase.auth');
        
        try {
            
            $signInResult = $auth->signInWithEmailAndPassword($email, $password);
            //return response()->json($signInResult->data());
            $token = $signInResult->idToken(); 
            $userId = $signInResult->firebaseUserId(); 

            Session::put('auth_charrmello', true);
            Session::put('token_charrmello', $token);
            Session::put('userId_charrmello', $userId);
            Session::put('timeout', time());

            $user = $auth->getUser($userId);
            if($user->photoUrl == null)
            {
                return view('profile-update')->with('uid',$userId);
            }
            else
            {
                return redirect('/camp')->with('token',$token)->with('userId',$userId)->with('user',$user)->with('success','User logged in successfully!');
            }

        } catch (\Kreait\Firebase\Auth\SignIn\FailedToSignIn $e) {

            $msg = 'Failed to signin, Please check your credentails!';
            return back()->with('success',$msg);

        }
    }

    public function index(Request $request)
    {
        
    }

    public function logout_user()
    {
        Session::flush();
        return view('auth.logout');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
        
        // This is equivalent to:
        
        // $request = \Kreait\Auth\Request\CreateUser::new()
        //     ->withUnverifiedEmail('user@example.com')
        //     ->withPhoneNumber('+15555550100')
        //     ->withClearTextPassword('secretPassword')
        //     ->withDisplayName('John Doe')
        //     ->withPhotoUrl('http://www.example.com/12345678/photo.png');
        
        // $createdUser = $auth->createUser($request);
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
            'email' => 'required',
            'p1' => 'required',
            'p2' => 'required',
            'fname' => 'required',
            'username' => 'required',
        ]);

        $auth = app('firebase.auth');
        
        if($request->input('p1')==$request->input('p2'))
        {
            $userProperties = [
                'email' => $request->input('email'),
                'emailVerified' => false,
                'username' =>$request->input('username'),
                'password' => $request->input('p1'),
                'displayName' => $request->input('fname'),
                'userType' => $request->input('utype'),
                'disabled' => false,
            ];
    
            try {
    
                // Your code to sign in a user
                $createdUser = $auth->createUser($userProperties);
                return view('profile-update')->with('uid',$createdUser->uid)->with("success","Account created Successfully, Please update profile to continue!");
                //return response()->json($createdUser);
    
            } catch (\Kreait\Firebase\Exception\Auth\EmailExists $e) {
    
                // Your code to handle when the credentials were not found
                $msg = 'Failed to signup, Email Already exists!';
                return back()->with("success","Failed to signup, Email Already exists!");
                //return response()->json($msg);
            }
        }
        else
        {
            return back()->with('success','Password match failed');
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
