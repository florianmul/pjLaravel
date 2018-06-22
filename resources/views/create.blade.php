@extends('layouts.app')

@section('content')
<div class="container bg-white">
    {!! Form::open(['route' => 'store', 'class' => 'form', 'files' => true]) !!}
        <div class="form-group">
            {!! Form::label('titre','Titre') !!}
            {!! Form::text('titre',null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('auteur','Auteur') !!}
        </div>
        <div class="form-control">
            
            @foreach($images as $image)
                {!! Form::label('images','Images') !!}
                {!! Form::checkbox('images[]', $image->id , ['class' => 'form-control']) !!} <img class="imgform" src="{{ URL::to('/') }}/images/{{ $image->file }}">
            @endforeach
            <br><br>
            {!! Form::file('imageadded') !!}
        </div>
            {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
        <br>
    {!! Form::close() !!}
</div>
@endsection