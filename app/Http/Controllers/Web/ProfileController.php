<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

     // Register New User
    public function store(RegisterRequest $request)
    {
        $image_name = null;
        try{
            if ($request->hasFile('avatar')) {
                $image = $request->file('avatar');
                $image_name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images/upload');
                $image->move($destinationPath, $image_name);
            }
            $user = new User();
            $user->username = $request->username;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->fullname = $request->fullname;
            $user->birthday = $request->birthday;
            $user->phone = $request->phone;
            $user->avatar = $image_name;
            $user->gender = $request->gender;
            $user->facebook = $request->facebook;
            $user->role = 0;
            $user->save();
        }
        catch(Exception $ex)
        {
            $ex->getmessage();
            Session::flash('error_signup',  trans('master.message.error_signup') . '<br/>' . $ex->getmessage());
            return redirect()->back();
        }
        
        Session::flash('success_signup', trans('master.message.success_signup'));
        Auth::login($user);
        return redirect()->back();
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
