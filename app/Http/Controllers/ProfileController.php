<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class ProfileController extends Controller
{
    //
   public function index(){
        $profiles = Profile::paginate(20);
        return view('profile.index', compact('profiles'));
    }
    
   public function details($id){
        $profiles=Profile::whereId($id)->first();
        return view('profile.details',compact('profiles'));
    } 
       public function edit($id){
        $profiles=Profile::whereId($id)->first();
        return view('profile.details',compact('profiles'));
    } 
    
    public function dashboard(){

        return view('home');
    }
    
    public function create(){

        return view('profile.create');
    }
    
    public function store(Request $request){

        $filename = $request->file('profile_image')->getClientOriginalName();

        $file=pathinfo($filename,PATHINFO_FILENAME);

        $ext =$request->file('profile_image')->getClientOriginalExtension();


        $tostore=$file . "_" . time() . "." . $ext;

        $path =$request->file('profile_image')->storeAs('public/upload', $tostore);



// this the modelname Profile

       $profiles=new Profile;
            $profiles->name=$request->input('name');
            $profiles->dob=$request->input('dob');
            $profiles->area=$request->input('area');
            $profiles->gender=$request->input('gender');
            $profiles->age=$request->input('age');
            $profiles->overall=$request->input('overall');
            $profiles->bio=$request->input('bio');
            $profiles->country=$request->input('country');
            $profiles->profile_image=$tostore;

        $profiles->save();
        return redirect('profile/index')->with('success', 'Profile Updated');;


    }
    
    public function manage(){
        $profiles = Profile::all();
        return view('profile/manage', compact('profiles'));
    }
    
     public function delete($id)
          {

              $profiles = Profile::find( $id );
              $profiles->delete();
              return redirect()->back();
}
    public function search(Request $request){
        
        $keyword = $request->input('search'); 
       $profiles = Profile::where('name', 'LIKE', '%'.$keyword.'%')->orWhere('area', 'LIKE', '%'.$keyword.'%')->orWhere('age', 'LIKE', '%'.$keyword.'%')->orWhere('gender', 'LIKE', '%'.$keyword.'%')->orWhere('overall', 'LIKE', '%'.$keyword.'%')->orWhere('age', 'LIKE', '%'.$keyword.'%')->get();
        return view('profile.search', compact('profiles'));
    }

}