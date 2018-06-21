@extends('layouts.app')

@section('content')
<form>
  <div class="form-group">
    <label for="titre">Titre</label>
    <input type="text" class="form-control" id="titre" placeholder="Saisissez un titre">
  </div>
  <div class="form-group">
    <label for="auteur">Password</label>
    <input type="text" class="form-control" id="auteur" placeholder="Saisissez un auteur">
  </div>
  <select class="form-control">
      @foreach($images as $image)
        <option>{{ $image->file }}</option>
      @endforeach
    </select>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection