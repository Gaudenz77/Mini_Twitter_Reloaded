<!--extend layout master.blade.php -->
@extends('layouts.master')

<!--sets value for section title to "Mini Twitter" (section title is used in messages.blade.php) -->
@section('title', 'Mini Twitter')

<!--starts section content, defines some html for section content and end section content
ts value for section title to "Mini Twitter" (section content is used in messages.blade.php) -->
@section('content')

@section('content')
<h2>Message Details:</h2>

<h4><b>{{$message->title}}</b></h4>
<h3>{{$message->content}}</h3>
<p><a href="#" class="reply-btn" data-message-id="{{ $message->id }}">Reply</a></p>

@if ($message->user)
<p> <b>Created by: {{ $message->user->name }}</b></p>
@endif    

<!-- reply form start-->
<input type="hidden" id="{{$message->id}}" value="0">
<div id="reply-container" style="display: none;">
    <form id="reply-form" action="{{ route('messages.reply', ['id' => $message->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="parent_id" id="parent-id">
        <div class="form-group mb-3">
            <input type="text" class="form-control mb-3" id="floatingInput" name="title" placeholder="Title" id="floatingInput" required>
            <textarea name="content" class="form-control" rows="3" placeholder="Enter your reply"></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Reply</button>
        <button type="button" class="btn btn-outline-secondary" id="cancel-btn">Cancel</button>
    </form>
</div>
<!-- reply form end-->

<form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-circlesmall mt-3 text-center"><i class="fa-solid fa-trash-can fa-2x fa-flip" style="--fa-animation-duration: 30s; --fa-animation-iteration-count: 1;"></i></button>
  </form>
@endsection

