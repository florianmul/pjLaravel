<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Storage;
use File;
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
                //
                //$filename = 'img'.$image->id. '.' .$ext;
                //$path = public_path('images/' . $filename);
                //Image::make($image->getRealPath())->resize(800, 500)->save($path);
        /*
                $name = 'img'.$image->id.'.'.$ext;
                $destinationPath = public_path('/images');
                $image->file->move($destinationPath, $name);*/

                $ext = File::extension($image->file);
                Storage::disk('public')->put('img'.$image->id.'.'.$ext, $image->file);
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
