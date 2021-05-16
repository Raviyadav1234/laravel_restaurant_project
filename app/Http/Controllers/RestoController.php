<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restorent;
use App\User;
use Crypt;

class RestoController extends Controller
{
    //
    public function index(){
    	return view('home');
    }


    public function show(){
    	$data=Restorent::all();
    	return view('show',['data'=>$data]);
    }

    public function store(Request $request){
    	
    	$resto = new Restorent;
    	$resto->name = $request->input('name');
    	$resto->email = $request->input('email');
    	$resto->address = $request->input('address');
    	$resto->created_at = $request->input('created_at');
    	$resto->save();
        
        $request->session()->flash('status','Restorent Submitted Successfully');
    	return redirect('/show');
    }


    public function delete(Request $request,$id){
    	Restorent::find($id)->delete();

    	 $request->session()->flash('status','Restorent Deleted Successfully');
    	return redirect('/show');
    }


   public function edit($id){
   	$data = Restorent::find($id);
   	//return view('edit',['data'=>$data]);
   	return view('edit',compact('data',$data));
   }

    public function update(Request $request){
    	
    	$resto = Restorent::find($request->input('id'));
    	$resto->name = $request->input('name');
    	$resto->email = $request->input('email');
    	$resto->address = $request->input('address');
    	$resto->created_at = $request->input('created_at');
    	$resto->save();
        
        $request->session()->flash('status','Restorent Updated Successfully');
    	return redirect('/show');
    }

     public function register(Request $request){

    	$user = new User;
    	$user->name = $request->input('name');
    	$user->email = $request->input('email');
    	$user->password =Crypt::encrypt($request->input('password'));
    	$user->contact = $request->input('contact');
    	$user->save();
        
        $request->session()->put('user',$request->input('name'));
    	return redirect('/home');
    }


    public function login(Request $request){

    	$user = User::where('email',$request->input('email'))->get();
    	if(Crypt::decrypt($user[0]->password)==$request->input('password')){

        $request->session()->put('user',$user[0]->name);
    	return redirect('/home');
         
    	}

    }


}
















