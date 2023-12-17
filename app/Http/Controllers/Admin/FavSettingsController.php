<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FavSettings;

class FavSettingsController extends Controller
{
    public function index(){
        return view("admin.favsettings.create");
    }

    public function favsettingspost(Request $request)
    {
        $request->validate([
            'icon' => 'required',
            'title' => 'required',
            'disc' => 'required',
        ]);

        $data = [
            'icon' => $request->icon,
                 'title' => $request->title,
                 'disc' => $request->disc,
                ];

               
                FavSettings::create($data);

                return back();
    }

    public function delete($id) {
        FavSettings::where('id',$id)->delete();
        return back();
    }

    public function show() {
        $data['test']=FavSettings::all();
        return view('admin.favsettings.show',$data);
    }

}
