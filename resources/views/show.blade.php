@extends('layout')

@section('title')
Wall
@endsection

@section('content')
<div class="title m-b-md">
	Wall
</div>
@if ($search !==false)
recherche:{{ $search }}
@endif

{!! Form::open(['url'=>'write'])!!}
{!! Form::text('post_content')!!}
{!! Form::submit('write on the wall !')!!}
{!! Form::close() !!}
<br><br>
<ul>
	@foreach($posts as $post)
	<li>
		<b>{{$post->user->name}}</b> says : <em>{{$post->content}}</em>
	</li>
	@endforeach
</ul>
@endsection