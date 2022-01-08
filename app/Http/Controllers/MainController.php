<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class MainController extends Controller
{




    public function index()
    {

        // $dogs = Dog::all();

        $dogs = Dog::orderBy('age')->get();
        return view('home', compact('dogs'));
    }


    public function create()
    {


        return view('create');
    }
    public function itemDetail($id)
    {



        $item = new Dog;
        return view('item-details', ['dogs' => $item->find($id)]);
    }



    public function edit($id)
    {


        $edit = new Dog;

        return view('edit', ['dogs' => $edit->find($id)]);
    }

    public function delete($id)
    {

        Dog::find($id)->delete();
        return redirect()->route('home')->with('success');
    }

    public function updateSave($id, Request $request)
    {



        $file = $request->file('image');
        $picName = $file->getClientOriginalName();
        $picName = uniqid() . '_' . $picName;
        $path = 'uploads' . DIRECTORY_SEPARATOR;
        $destinationPath = public_path($path); // upload path

        $request->file('image')->move($destinationPath, $picName);

        // full filename
        $fullfilename = $destinationPath . DIRECTORY_SEPARATOR . $picName;
        // get extension
        $ext = pathinfo($fullfilename, PATHINFO_EXTENSION);

        $thumbpicName = $picName;
        $thumbpath = 'uploads' . DIRECTORY_SEPARATOR;

        $thumbfullname = public_path($thumbpath . $thumbpicName);

        if ($ext == 'jpg') {
            $image = imagecreatefromjpeg($fullfilename);
            $imgResized = imagescale($image, 600, 600); // width=600 and height=600
            //  $imgResized is our final product
            imagejpeg($imgResized, $thumbfullname); //for jpeg
        } else if ($ext == 'png') {
            $image = imagecreatefrompng($fullfilename);
            $imgResized = imagescale($image, 600, 600); // width=600 and height=600
            //  $imgResized is our final product
            imagepng($imgResized, $thumbfullname); //for jpeg			
        } else {
            echo 'unsupported image type: not png or jpg';
            exit;
        }


        $dog = Dog::find($id);




        $dog->name = $request->input('name');
        $dog->age = $request->input('age');
        $dog->breed = $request->input('breed');
        $dog->thumbnail = $thumbpath . $thumbpicName;
        $dog->save();


        return redirect()->route('itemDetail', $id)->with('success', 'Information has been updated');
    }
}
