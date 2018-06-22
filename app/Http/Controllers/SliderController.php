<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Http\Request;
use Storage;
use File;
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
            return redirect()->to('createform')
            ->withInput()
            ->withErrors($validator);

        }
        else {
            $slider = new Slider;
            
            $slider->titre = Input::get('titre');
            $slider->auteur = Input::get('auteur');
            $slider->save();
            $images = Input::get('images');
            Session::flash('message', implode(' ', $images));
            $slider->images()->attach($images);
            if(Input::get('imageadded') != null) {
                
                $image = new Image;
                $image->file = Input::get('imageadded');
                $image->save();
                $ext = File::extension($image->file);
                Storage::disk('public_uploads')->put('img'.$image->id.'.'.$ext, $image);
            }                
           
            Session::flash('message', 'Création réussie !');
            return Redirect::to('home');
        }
        
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
