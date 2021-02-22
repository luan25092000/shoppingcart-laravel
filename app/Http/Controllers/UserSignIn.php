<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Socialite;
use App\User;
class UserSignIn extends Controller
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
        return view('sign-in');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Form validation
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        if(($request->input('email') == 'admin@gmail.com' && $request->input('password') == 'admin123') || ($request->input('email') == 'nguyenhuuluan17@gmail.com' && $request->input('password') == 'hailua123') || ($request->input('email') == 'hyquynh123@gmail.com' && $request->input('password') == 'hyquynh233')){
            return redirect()->route('dashboard');
        }
        elseif(Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            if(Session::has('user')){
                Session::forget('user');
                Session::put('user',Auth::user());
            }else{
                Session::put('user',Auth::user());
            }
            return view('profile');
        }
        else{
            return back()->with("invalid","Username or password is invalid!");
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

    public function getProfile(){
        return view('profile');
    }

    public function getLogOut(){
        Auth::logout();
        return back();
    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }

    public function handleCallbackFacebook(){
        $user = Socialite::driver('facebook')->user();
        $this->loginUser($user);
        return redirect()->route('user.profile');
    }

    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }

    public function handleCallbackGoogle(){
        $user = Socialite::driver('google')->user();   
    }

    public function loginUser($data){
        $user = User::where('email', '=', $data->email)->first();
        if($user === null){
            $name = explode(" ",$data->name);
            //  Store data in database
            $user = new User([
                'firstname' => $name[0],
                'lastname' => $name[1],
                'email' => $data->email,
                'password' => null
            ]);
            $user->save();
        }
        if(Session::has('user')){
            Session::forget('user');
            Session::put('user',$user);
        }else{
            Session::put('user',$user);
        }
        Auth::login($user);
    }
}