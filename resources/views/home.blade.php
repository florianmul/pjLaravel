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
        </div>
    </div>
</div>

<div class="container bg-white">
    <h1 id="titre">Liste des sliders</h1>
    <div class="row">
        <div class="col-md-12">
            <a id="btnajout" href="{{ route('createform') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Créer un nouveau slider</a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            @if(session()->has('message'))
                <div class="alert alert-success alert-dismissible">
                    {{ session()->get('message') }}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                    <tr>
                        <td>
                            <a href="{{ route('displaySlider', ['id' => $slider->id]) }}">
                                {{ $slider->titre }}
                            </a>
                        </td>
                        <td>
                            {{ $slider->auteur }}
                        </td>
                        <td>
                            <a class="btn btn-info" href="{{ route('updateform', [$slider->id]) }}">
                                <span class="fas fa-edit"></span>
                            </a>
                            <a class="btn btn-danger" href="{{ route('delete', [$slider->id]) }}">
                                <span class="fas fa-trash"></span>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection
