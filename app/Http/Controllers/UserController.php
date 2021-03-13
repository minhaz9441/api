<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Profile;
use App\Product;
use Validator;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user_id = Auth::user()->id;
        $userdata = User::where('id', $user_id)->first();
        return view('user.profile', compact('userdata'));
    }
    public function editProfile($id)
    {
        
    }
    public function index()
    {
        return redirect()->route('user.dashboard');
    }

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $recent_products = Product::where('user_id', $user_id)->orderBy('created_at', 'desc')->take(3)->get();
        
        return view('user.dashboard', compact('recent_products'));
    }

    public function settings()
    {
        return view('user.settings');
    }

    public function update_password(Request $request)
    {
        // echo 'update password';exit();
        Validator::make($request->all(),[
            'currentPassword' => 'required',
            'password' => 'required|confirmed',
        ],[
            'currentPassword.required' => 'Current Password is required',
            'password.required' => 'New Password is required',
        ])->validate();

        $current_password = Auth::User()->password;
        if(Hash::check($request->currentPassword, $current_password))
        {
            $new_password = Hash::make($request->password);
            $update = Auth::User()->update(['password' => $new_password]);
            return back()->with('message','Password updated successfully');
        }
        else{
            return back()->with('error','Invalid current password');
        }
        
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
