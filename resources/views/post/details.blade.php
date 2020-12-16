@extends('layouts.app')

@section('content')

<img src="<?php echo $post->url; ?>" width="150"  alt="">
<h3>{{ $post->title }}</h3>


@endsection
