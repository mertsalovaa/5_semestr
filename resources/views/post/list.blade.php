@extends('layouts.app')

@section('content')

@section('content')
<div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
        <h1>{{$title}}</h1>
        <ul>
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{ route('post.details', $post->id) }}">
                    <h2 class="post-title">

                        {{ $post->title ?? '' }}
                    </h2>
                </a>
                <div>
                    {!! $post->description ?? '' !!}
                </div>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">Start Bootstrap</a>
                    on {{ date('F d, Y', strtotime($post->created_at ?? '')) }}</p>
            </div>
            <hr>
            {{-- <li>--}}
            {{-- <h3>{{ $post->title ?? '' }}</h3>--}}
            {{-- <p>{{ $post->description_short ?? '' }}</p>--}}
            {{-- </li>--}}
            @endforeach
        </ul>
    </div>
</div>
@endsection