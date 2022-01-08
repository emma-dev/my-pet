<?php

namespace App\Http\Controllers;

use App\Models\Dog;
use Illuminate\Http\Request;

class ItemController extends Controller
{
	public function create(Request $request)
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



		$dogs = new \App\Models\Dog;

		$dogs->name = $request->name;
		$dogs->age = $request->age;
		$dogs->breed = $request->breed;
		$dogs->thumbnail = $thumbpath . $thumbpicName;
		$dogs->save();

		return redirect()->route('home')->with('success', 'Information has been added');
	}
}
