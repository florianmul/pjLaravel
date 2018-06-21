<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;

use App\Slider;
use App\Image;

class SliderController extends Controller
{
    public function createform()
    {
        $images = Image::all();
        return view('create', compact('images')); 
    }
    public function store() {
        $slider = array(
            'titre' => 'required',
            'auteur' => 'required',
        );
        $validator = Validator::make(Input::all(), $slider);

        if($validator->fails()) {
            return Redirect::to('create')
                ->withErrors($validator);
        }
        else {
            $slider = new Slider;
            $slider->titre = Input::get('titre');
            $slider->auteur = Input::get('auteur');
            $slider->save();
            if(Input::get('imageadded') != null) {
                $image = new Image;
                $image->file = Input::get('imageadded');
                $image->save();

            }
            
            //partie pivot
            var_dump(Input::get('images[]'));
            /*
            foreach(Input::get('images[]') as $i) {
                $slider->pivot->slider_id = $slider->id;
                $slider->pivot->image_id = $i->id;
                $slider->pivot->save();
            }*/
        }

        Session::flash('message', 'Création réussie !');
        return Redirect::to('home');
        
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
        
        return redirect()->back()->with('message', 'Suppression réussie');
    } 
    
}
