<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\dataAkuns;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Foundation\Auth\dataAkun as AuthDataAkun;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\dataAkunAuth;
use Illuminate\Support\Facades\Hash;
use Termwind\Components\Dd;
use Illuminate\Support\Facades\Session;


class DataAkun extends Controller
{
    public function signUp()
    {
        $data['title'] = 'Sign Up';
        return view('/signUp',$data);
    }
    public function signUp_action(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'nomor_identitas' =>'required',
            'alamat' =>'required',
            'no_telpon' =>'required',
            'tanggal_lahir' =>'required'
        ]);
        $dataakun = new dataAkuns([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' =>$request->password,
            'nomor_identitas' => $request->nomor_identitas,
            'alamat' => $request->alamat,
            'no_telpon'=>$request->no_telpon,
            'tanggal_lahir' =>$request->tanggal_lahir

        ]);

        $dataakun->save();
        return redirect()->route('signIn')->with('success','Registration Success. Please Login!');
    }

    public function signIn()
    {
        $data['title'] = 'Sign In';
        return view('/signIn',$data);
    }

    public function signIn_action(Request $request)
    {
        
        Session::flash('email',$request->email);
        $request->validate([
            
            'email' => 'required',
            'password' => 'required',
            

        ]);
        // $credential = ($request=>'email');
        $credentials = [
            'email'=>$request->email,
            'password'=>$request->password
        ];
        if(Auth::attempt($credentials))
        {
            // $request->session()->regenerate();
            // return redirect()->route('home')->with('success','Registration Success. Please Login!');
            return redirect()->intended('dashboard_admin')->withSuccess('You have successfully logged in!');
            
        }
        return redirect()->route('signIn')->with('error','wrong email or password');
        // return back()->withErrors(['email'=>'wrong Email or Password'])->onlyInput('email');
        
        // return redirect()->route('/')->with('success','Thank you!');
       
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('dashboard');
        }
        
        return redirect()->route('signIn')
            ->withErrors([
            'email' => 'Please login to access the dashboard.',
        ])->onlyInput('email');
    } 
    
    // public function home_page()
    // {
    //     $data['title'] = 'Home Page';
    //     return view('/',$data);
    // }
}
