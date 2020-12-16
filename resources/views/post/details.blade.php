@extends('layouts.app')

@section('content')
<img src="<?php echo $post->url; ?>" class="card-img-top" alt="...">
<h3>{{ $post->title }}</h3>

@endsection