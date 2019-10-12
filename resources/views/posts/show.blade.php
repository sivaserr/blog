@extends('layouts.app')

@section('content')
<a href="/post" class="btn btn-default">Go back</a>
<div class="card bg-light p-3">
<h1>{{$post->title}}</h1>
<div>
{{$post->body}}
</div>
<hr>
<small>Written on{{$post->created_at}}</small>
</div>

@endsection