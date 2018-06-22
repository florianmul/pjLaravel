<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\DB;

use App\Slider;
use App\Image;

class SliderController extends Controller
{
    public function update(Request $request){
        $rules = [
            'titre'=> 'required',
        ];
        $validator = Validator::make($request->toArray(), $rules);

        // process the login
        if ($validator->fails()) {
            Session::flash('message','Echec de la modification');
        } else {
            // store
            $slider = Slider::find($request->id);
            $slider->titre= $request->titre;
            $slider->save();
            DB::table('image_slider')->where('slider_id',$slider->id)->delete();
            //$images=Image::wherein('id',$request->images);
            $slider->images()->attach($request->images);
            // redirect
            Session::flash('message', 'Modification validé');
            return Redirect::to('home');
        }
    }
    public function updateForm($id){
        $images = Image::all();
        $slider = Slider::find($id);
        return view('update',compact('images', 'slider'));
    }
    public function createform()
    {
        $images = Image::all();
        return view('create', compact('images')); 
    }
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
