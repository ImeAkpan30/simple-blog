<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Iphone;
use App\User;
use Illuminate\Support\Facades\Auth;
use\Illuminate\Support\Facades\Hash;


class IphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function iphone()
    {
        $iphone = Iphone::all();
        return view('iphone');
        
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


    public function database(Request $id)
    {
        $iphone = Iphone::all();
        return view('database', compact('iphone'));
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
            'name'=>'required|string',
            'title'=>'required|string',
            'body'=>'required',
        ]);

        $iphone = new Iphone();
        $iphone->name = $request->name;
        $iphone->title = $request->title;
        $iphone->body = $request->body;
        $iphone->save();
        session()->flash('success','Post created successfully');
        return redirect()->back();
        // Iphone::create($request->all());
        // return redirect()->route('')->with('success','Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $iphone = Iphone::find($id);
        return view('show', compact('iphone'));
    }

    public function auth()
    {
        return view('auth');
    }

    public function register(Request $request)
    {
        // dd($request);
        $this->validate($request,[
            'first_name'=>'required|string',
            'last_name'=>'required|string',
            'email'=>'required',
            'password'=>'required|min:6',
        ]);
        $user = new User();
        // dd($user);
        $user->first_name = $request->first_name;

        // dd($user->first_name);

        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        // dd($request);
        $user->save();
        // dd($user);
        auth::login($user);
        // dd(auth::login($user));
            session()->flash('success', 'User Successfully Registered!!');
        
        return redirect('/iphone');
    }

    public function login(Request $request)
    {
        $credentials = collect($request)->only('email','password');

        Auth::attempt([
            'email'=>$credentials['email'],
            'password'=>$credentials['password'],
        ]);
        if (!auth()->user() && auth()->user() == null){
            session()->flash('message', 'Invalid login details!!');
            return redirect('/');
            
        }else{
            return redirect('/iphone');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /** 
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $iphone = Iphone::find($id);
        return view('edit', compact('iphone'));
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
        $iphone = Iphone::where('id',$id)->first();
        $iphone->name = $request->name;
        $iphone->title = $request->title;
        $iphone->body = $request->body;
        $iphone->save();
        session()->flash('success', 'Post updated successfully');
        return redirect('/iphone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $iphone = Iphone::find($id);
        $iphone->delete($id);
        session()->flash('success','Post deleted successfully!!');
        return redirect()->back();
    }
}
