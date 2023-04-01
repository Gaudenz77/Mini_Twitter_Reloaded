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
<p><a href="#" class="reply-btn" data-message-id="{{ $message->id }}">Comment</a></p>

@if ($message->user)
<p> <b>Created by: {{ $message->user->name }}</b></p>
@endif    

<!-- Comment form start-->
<input type="hidden" id="{{$message->id}}" value="0">
<div id="reply-container" style="display: none;">
    @if (Auth::check())
    <form id="reply-form" action="{{ route('comments.store', ['messageId' => $message->id]) }}" method="POST">
        @csrf
        <input type="hidden" name="parent_id" id="parent-id">
        <div class="form-group col-4 mb-3">
        <label for="content">Comment:</label>
        <textarea name="content" id="content" class="form-control" rows="3" placeholder="Enter your comment" required></textarea>
        </div>
        <button type="submit" class="btn btn-outline-primary">Comment</button>
        <button type="button" class="btn btn-outline-secondary" id="cancel-btn">Cancel</button>
    </form>
</div>
@forelse ($message->comments as $comment)
    <div class="comment">
        <div class="comment-info">
            <span class="comment-author">{{ $comment->user->name }}</span>
            <span class="comment-date">{{ $comment->created_at->diffForHumans() }}</span>
        </div>
        <div class="comment-content">
            {{ $comment->comment }}
        </div>
    </div>
    @empty
    <p>No comments yet!</p>
@endforelse
@endforelse
<!-- reply form end-->

<form action="/message/{{$message->id}}" method="post">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-circlesmall mt-3 text-center"><i class="fa-solid fa-trash-can fa-2x fa-flip" style="--fa-animation-duration: 30s; --fa-animation-iteration-count: 1;"></i></button>
  </form>
@endsection

