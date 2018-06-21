<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use App\Slider;

class SliderController extends Controller
{
    function displaySlider($id) {
        $slider = Slider::find($id);
        return view('displaySlider', compact('slider'));
    }
    public function delete($id)
    {
        $slider = Sliders::find($id);
        $slider->delete();
        return Redirect::route('home');
    }
    /*public function add(Request $request) {
        $slider = Sliders::create([

        ]);
        $post->content = $request->slide_content;
        $post->save();
        return redirect('slider');
    }*/
/*
    public function fileUpload(Request $request) {

        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);
        $this->postImage->add($input);
        return back()->with('success','Image chargée avec succès ! 
        ');
    }
*/
}
