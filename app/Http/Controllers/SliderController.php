<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
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
