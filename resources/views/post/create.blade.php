@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>

<form method="post" action="{{ route('post.store') }}">
    @csrf
    <div class="form-group row">
        <label for="title" class="col-sm-2 col-form-label">Title</label>
        <div class="col-sm-10">
            <input type="text" name="title" class="form-control" id="title" placeholder="Title">
        </div>
    </div>
    <div class="form-group row">
        <label for="description_short" class="col-sm-2 col-form-label">Short description</label>
        <div class="col-sm-10">
            <input type="text" name="description_short" class="form-control" id="description_short" placeholder="Short description">
        </div>
    </div>
    <div class="form-group row">
        <label for="description" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
            <input type="text" name="description" class="form-control" id="description" placeholder="Description">
        </div>
    </div>
    <div class="form-group row">
        <label for="url" class="col-sm-2 col-form-label">Url</label>
        <div class="col-sm-10">
            <input type="text" name="url" class="form-control" id="url" placeholder="Url">
        </div>
    </div>
    <div class="form-group row">
        <label for="category" class="col-sm-2 col-form-label">Category</label>
        <div class="col-sm-10">
            <select class="custom-select" id="category" name="id_category">
                <option selected>Choose...</option>

                @foreach($categories as $categor)
                <option value={{ $categor->id ?? '' }}>{{ $categor->name ?? '' }}</option>
                @endforeach

            </select>

        </div>
    </div>
    <input class="btn btn-success" name='submit' type="submit" value='Save' />
</form>

@endsection