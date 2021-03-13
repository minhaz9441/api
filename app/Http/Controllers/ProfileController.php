<?php

namespace App\Http\Controllers;

use App\Profile;
use Auth;
use App\User;
use Validator;
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
        $user_id = Auth::user()->id;
        $userdata = User::where('id', $user_id)->first();
        return view('user.profile.index', compact('userdata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        abort(404);
    }

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
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        return view('user.profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Profile $profile)
    {
        
        Validator::make($request->all(),[
            'thumbnail'=> 'mimes:jpeg,png,bmp|max:2048',
            'firstname'=> 'required',
            'lastname'=> 'required',
            'phone'=> 'required',
            'address'=> 'required',
            'city'=> 'required',
            'state'=> 'required',
            'pincode'=> 'required',
            'country'=> 'required'
        ])->validate();
        
        if($request->hasFile('thumbnail')){
           
            $extension = ".".$request->thumbnail->getClientOriginalExtension();
            $name = basename($request->thumbnail->getClientOriginalName(), $extension).time();
            $profile_image_name = $name.$extension;
            $path = $request->thumbnail->storeAs('public', $profile_image_name);
            $profile_image = array(
                'thumbnail' => $profile_image_name,
            );
            $update_image = Profile::where('user_id', auth()->user()->id)->update($profile_image);
            return redirect()->route('user.profile.index')->with("message","Profile has been updated success...!");
        }
        $profile = array(
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
            'address' => $request->address,
            'street' => $request->street,
            'city' => $request->city,
            'state' => $request->state,
            'pincode' => $request->pincode,
            'country' => $request->country,
        );
        
        $update = Profile::where('user_id', auth()->user()->id)->update($profile);
        return redirect()->route('user.profile.index')->with("message","Profile has been updated success...!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy(Profile $profile)
    {
        //
    }
}
