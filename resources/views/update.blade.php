@extends('layouts.app')

@section('content')
    <div class="container bg-white">

                {!! Form::open(['action' => 'SliderController@update'])!!}
                {!! Form::text('titre',$slider->titre)!!}
                @foreach($images as $image)
                    {{$in=false}}
                    @foreach($slider->images as $sliderImage)
                        @if($image->id==$sliderImage->id)
                            {{$in=true}}
                        @endif
                    @endforeach
                    @if($in==true)
                        {!! Form::checkbox('image',$image->id,true)!!}
                    @else
                        {!! Form::checkbox('image',$image->id)!!}
                    @endif
                @endforeach
                {!! Form::close() !!}
    </div>
@endsection