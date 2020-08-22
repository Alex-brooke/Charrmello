<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Auth;

class FirebaseAuth extends Controller
{
    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function login()
    {
        $signInResult = $auth->signInWithEmailAndPassword("test@test.com", "12345678");

        return response()->json($signInResult);
    }
}
