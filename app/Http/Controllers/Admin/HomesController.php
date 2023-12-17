<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homes;

class HomesController extends Controller
{
    public function index(){
        return view("admin.homes.create");
    }

    public function postHomes(Request $request)
    {
        $request->validate([
            'text_1' => 'required',
            'text_2' => 'required',
            'text_3' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $image_pat = $destinationPath.$profileImage;
            }

        $data = ['text_1' => $request->text_1,
                 'text_2' => $request->text_2,
                 'text_3' => $request->text_3,
                 'image' => $image_pat,
                ];

                Homes::create($data);

                return redirect()->route('show')
                ->with('success','Team created successfully.');
    }

    public function delete($id) {

        $team = Homes::findOrFail($id);
        if (Homes::exists($team->image)) {
            unlink($team->image);
        }
        Homes::where('id',$id)->delete();
        return back();
    }


     // post list show
     public function show() {
        $data['test']=Homes::all();
        return view('admin.homes.show',$data);
    }
    public function edit($id) {
        $data['test']=Homes::findOrFail($id);
        return view('admin.homes.edit',$data);
    }

    public function pUpdate(Request $request){
         // Find the team by ID
       $id=$request->id;
        $post = Homes::findOrFail($id);
        $image_pat="";
        // Check if a new image is provided in the request
        if($request->hasFile('image')){
            $path = 'image/';
            $file_old = $post->image;
            unlink($file_old);
            $image=$request->image;
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $image_pat = $destinationPath.$profileImage;

        }else{
            $image_pat = $post->image;
        }

    //     // Update other specified fields

    $data = ['text_1' => $request->text_1,
    'text_2' => $request->text_2,
    'text_3' => $request->text_3,
    'image' => $image_pat,
   ];

    //     // Update team data in the database
    Homes::where(['id' => $request->id])->update($data);

    //     // Redirect back to the previous page
        return redirect()->route('show')->with('success', 'Team information updated successfully.');
    }

}

