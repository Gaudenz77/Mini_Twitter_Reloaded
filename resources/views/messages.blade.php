<!--extend layout master.blade.php -->
@extends('layouts.master')

<!--sets value for section title to "Mini Twitter" (section title is used as yield in messages.blade.php) -->
@section('title', 'Mini Twitter Reloaded with LARAVEL Breeze')

<!--starts section content, defines the title for the section and also defines some html for section content
(html is between section... and endsection) section content is used as yield in messages.blade.php) -->
@section('content')

@if (Route::has('login'))
    <div class="col-sm-2">
        @auth
        <p style="line-height: 50px">Logged in as: <b>{{ Auth::user()->name}}</b> </p>
            <a href="{{ url('/dashboard') }}">Dashboard</a>
            <form class="text-center" action="{{ route('logout') }}" method="POST" class="inline">
                @csrf
                <br><button type="submit" class="btn btn-circlesmall mt-3"><i class="fa-solid fa-right-from-bracket fa-2x fa-flip" style="--fa-animation-iteration-count: 1;"></i></button>
            </form>
            
@else
            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{-- Log in --}}</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{-- Register --}}</a>
@endif
        @endauth
    </div>
@endif

<div class="col-sm-4">
    
    @if (Auth::check())
    <h2 style="line-height: 50px">Create new message: </h2>
    {{-- <p>Logged in as: {{ Auth::user()->name }}</p> --}}
    <form action="/create" method="post">
        <div class="form-group mb-3">
            <input type="text" class="form-control" id="floatingInput" name="title" placeholder="Title" id="floatingInput" required>
            
        </div>
       <div class="form-group">
        <textarea class="form-control" name="content" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" required></textarea>
        
        <input type="hidden" value="0" name="like_count">
        <input type="hidden" value="0" name="dislike_count">
       </div>
       <!-- this blade directive is necessary for all form posts somewhere in between the form tags -->
    @csrf
       <div class="sender text-center">
        <button type="submit" class="btn btn-circle mt-3 text-center"><i class="fa-brands fa-twitter fa-3x fa-flip" style="--fa-animation-duration: 30s; --fa-animation-iteration-count: 1;"></i></button></div>
    </form>
    @else
        <h4>Please <a href="{{ route('login') }}">login</a> or <a href="{{ route('register') }}">register</a><br>to post a message.</h4>
    @endif
</div>
<!-- Display each message -->
<div class="col-sm-6">
    <h2 style="line-height: 50px">Recent messages:</h2>
    <ul>
    <!-- loops through the $messages, that this blade template
       gets from MessageController.php. for each element of the loop which
       we call $message we print the properties (title, content
       and created_at in an <li> element -->
    @forelse($messagesList as $message)
        <li class="messagesList {{-- bg-info mb-3 --}}mt-2">
            <b><a href="/message/{{$message->id}}">{{$message->title}}:</a></b><br>
            <p>{{ $message->content }}</p>
            {{-- <p>{{ $message->parentId }}</p> --}}
            
            <div class="form-icons mx-2 md-mx-auto">
                <form action="/message/{{$message->id}}/like" method="POST" class="">
                @csrf
                    <input type="hidden" name="message_id" value="{{$message->id}}">
                    <input type="hidden" value="0" name="like_count">
                    <button type="submit" class="transparent-btn-up" ><i class="fas fa-thumbs-up"></i></button>
                </form>
                    {{$message->like_count}}
                <form action="/message/{{$message->id}}/dislike" method="POST" class="">
                    @csrf
                    <input type="hidden" name="message_id" value="{{$message->id}}">
                    <input type="hidden" value="0" name="dislike_count">
                    <button type="submit" class="transparent-btn-down" style="margin-left: 15px;"><i class="fas fa-thumbs-down"></i></button>
                </form>
                    {{$message->dislike_count}}     
            </div>
<!-- comment display start-->
<!-- link to comment page-->
<b><a href="/message/{{$message->id}}">Comments:</a></b><br>
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
            <div class="editor mb-2 py-3">
                @if ($message->user)
                <p class="createdAt">By: <b>{{ $message->user->name }}</b> , {{$message->created_at->diffForHumans()}}</p>
                @endif
            </div>
        </li>
    @empty
        <li class="messagesList">No messages yet.</li>
    @endforelse 
    </ul>
    <div class="text-end"><b class="text-end">Date: {{date('d.m.Y')}}</b></div>
</div>

@endsection