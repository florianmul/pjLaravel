@extends('layouts.app')

@section('content')
    <div class="container bg-white">

                {!! Form::open(['url'=>'/modify','class' => 'form'])!!}
                {!! Form::hidden('id',$slider->id)!!}
                <div class="form-group">
                    {!! Form::label('titre','Titre') !!}
                    {!! Form::text('titre',$slider->titre,['class' => 'form-control'])!!}
                </div>
                <div class="form-control">
                @foreach($images as $image)
                    <?php $in=false; ?>
                    @foreach($slider->images as $sliderImage)
                        @if($image->id==$sliderImage->id)
                                <?php $in=true; ?>
                        @endif
                    @endforeach
                    @if($in==true)
                        {!! Form::checkbox('images[]', $image->id ,true) !!} <img class="imgform" src="{{ URL::to('/') }}/images/{{ $image->file }}">
                    @else
                        {!! Form::checkbox('images[]', $image->id ,false) !!} <img class="imgform" src="{{ URL::to('/') }}/images/{{ $image->file }}">
                    @endif
                @endforeach
                </div>
                {!! Form::submit('Enregistrer',['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
    </div>
@endsection