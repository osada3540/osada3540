<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFollowController extends Controller
{
    //
    public function __construct()
    {
        
        $this->middleware('auth');
    }
    
    public function store(Request $request, $id)
    {
        \Auth::user()->follow($id);
        return back();
    }
    
    public function destroy($id)
    {
        \Auth::user()->unfollow($id);
        return back();
    }
}
