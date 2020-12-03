@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<ul>
    @foreach($posts as $post)

        <li>
            <h3>{{ $post->title ?? '' }}</h3>
            <p>{{ $post->description_short ?? '' }}</p>
        </li>
    @endforeach
</ul>
@endsection
