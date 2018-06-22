@extends('layouts.app')

@section('content')
    <div class="container bg-white">

                {!! Form::open(['url'=>'/modify'])!!}
                {!! Form::hidden('id',$slider->id)!!}
                {!! Form::text('titre',$slider->titre)!!}
                @foreach($images as $image)
                    {{$in=false}}
                    @foreach($slider->images as $sliderImage)
                        @if($image->id==$sliderImage->id)
                            {{$in=true}}
                        @endif
                    @endforeach
                    @if($in==true)
                        {!! Form::checkbox('images[]',$image->id,true)!!}
                    @else
                        {!! Form::checkbox('images[]',$image->id)!!}
                    @endif
                @endforeach
                {!! Form::submit() !!}
                {!! Form::close() !!}
    </div>
@endsection