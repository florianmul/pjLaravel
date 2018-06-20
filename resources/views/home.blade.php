@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-12">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        Bienvenue !
        </div>
    </div>
</div>
<div class="container">
    <div class="row justify-content-center">
        <button class="btn btn-primary">Créer un nouveau slider</button>
        <table>
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Auteur</th>
                    <th>Images</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                <tr>
                    <td>
                        <a href="{{ url('home/slider/' . $slider->id) }}">
                            {{ $slider->titre }}
                        </a>
                    </td>
                    <td>
                        {{ $slider->auteur }}
                    </td>
                    <td>
                        {{ $slider->images }}
                    </td>
                    <td>
                        <a class="btn btn-info" href="{{URL::to('/update/'.$slider->id) }}">
                            <span class="glyphicon glyphicon-pencil"></span>
                        </a>
                        <a class="btn btn-danger" href="{{URL::to('/delete/'.$slider->id) }}">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
