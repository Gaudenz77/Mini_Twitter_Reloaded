<!--extend layout master.blade.php -->
@extends('layouts.master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')

<h2>Message Details:</h2>

@section('content')
<h2>Message Details:</h2>

<h4><b>{{$message->title}}</b></h4>
<h3>{{$message->content}}</h3>
<p>By: <b>{{ $message->user->name }}</b></p>
<div><b>Date: {{date('d.m.Y')}}</b></div>

<form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-circlesmall mt-3 text-center"><i class="fa-solid fa-trash-can fa-2x fa-flip" style="--fa-animation-duration: 30s; --fa-animation-iteration-count: 1;"></i></button></div>
  </form>
@endsection
