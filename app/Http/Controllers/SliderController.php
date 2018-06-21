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
        $slider = Slider::find($id);
        $slider->images()->detach();
        $slider->delete();
        
        return redirect()->back()->with('messageSuppression', 'Suppression réussie');
    }
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
    public function add(Request $request) {
		$post = new Sliders;
		$post->content = $request->slide_content;
		$post->save();
		return redirect('slider');
    }*/
}
