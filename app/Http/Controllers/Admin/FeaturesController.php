<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Features;

class FeaturesController extends Controller
{
    public function index(){
        return view("admin.features.create");
    }

    
    public function featurespost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'disc' => 'required',
            'background_color' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);



            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $image_pat = $destinationPath.$profileImage;
            }

        $data = ['title' => $request->title,
                 'disc' => $request->disc,
                 'background_color' => $request->background_color,
                 'image' => $image_pat,
                ];

             
                Features::create($data);

                return back();
    }

    
    public function delete($id) {

        $team = Features::findOrFail($id);
        if (Features::exists($team->image)) {
            unlink($team->image);
        }
        Features::where('id',$id)->delete();
        return back();
    }

    public function fshow() {
        $data['test']=Features::all();
        
        return view('admin.features.show',$data);
    }
}
