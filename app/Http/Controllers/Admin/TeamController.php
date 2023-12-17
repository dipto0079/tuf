<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;


// creatting team
class TeamController extends Controller
{
   public function index(){
       return view("admin.team.add-edit");
   }




   public function postTeam(Request $request)
{
    $request->validate([
        'name' => 'required',
        'title' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required',
    ]);



        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image_pat = $destinationPath.$profileImage;
        }

    $data = ['name' => $request->name,
             'title' => $request->title,
             'facebook_url' => $request->facebook_url,
             'twitter_url' => $request->twitter_url,
             'linked_in_url' => $request->linked_in_url,
             'other_url' => $request->other_url,
             'image' => $image_pat,
             'status' => $request->status,
            ];

        Team::create($data);

        return redirect()->route('teamList')
                        ->with('success','Team created successfully.');
}


// Team list show


    public function show() {
        $data['test']=Team::all();
        return view('admin.team.teamlist',$data);
    }

// Team delete

    public function delete($id) {

        $team = Team::findOrFail($id);
        // dd($image_pat);
        if (Team::exists($team->image)) {
            unlink($team->image);
        }
        Team::where('id',$id)->delete();
        return back();
    }

    public function teamedit($id) {

        $data['test']=Team::where('id',$id)->first();

        return view('admin.team.edit',$data);
    }

    public function teamUpdate(Request $request){
        // Find the team by ID
       $id=$request->id;
        $team = Team::findOrFail($id);
        $image_pat="";
        // Check if a new image is provided in the request
        if($request->hasFile('image')){
            $path = 'image/';
            $file_old = $team->image;
            unlink($file_old);
            $image=$request->image;
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image_pat = $destinationPath.$profileImage;

        }else{
            $image_pat = $team->image;
        }

        // Update other specified fields
        $data = [
            'name' => $request->name,
            'title' => $request->title,
            'facebook_url' => $request->facebook_url,
            'twitter_url' => $request->twitter_url,
            'linked_in_url' => $request->linked_in_url,
            'other_url' => $request->other_url,

            'image' => $image_pat,
            'status' => $request->status,
        ];

        // Update team data in the database
        Team::where(['id' => $request->id])->update($data);

        // Redirect back to the previous page
        return redirect()->route('teamList')->with('success', 'Team information updated successfully.');
    }





    // public function update(Request $reqeuest)  {


        // $image_pat ="";
        ///image asa ke na ??filehash
        //image jode taka ta hola dell (model taka find kora image pat anta hoba)$team = Team::findOrFail($id);
        //image add hoba

        // $image_pat =$team->image;


        // if ($image = $request->file('image')) { 3
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $image_pat = $destinationPath.$profileImage;
        // }

        // $data = ['name' => $request->name,
        //      'title' => $request->title,
        //      'facebook_url' => $request->facebook_url,
        //      'twitter_url' => $request->twitter_url,
        //      'linked_in_url' => $request->linked_in_url,
        //      'other_url' => $request->other_url,
        //      'image' => $image_pat,
        //      'status' => $request->status,
        //     ];
        // Team::where(['id'=>$reqeuest->id])->update($data);
        // return redirect('admin.team.teamlist',$data);

    //  }



}


