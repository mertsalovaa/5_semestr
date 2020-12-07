@extends('layouts.app')

@section('content')
<h1>{{$title}}</h1>
<div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="title" placeholder="Title">
    </div>
</div>
<div class="form-group row">
    <label for="description_short" class="col-sm-2 col-form-label">Short description</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="description_short" placeholder="Short description">
    </div>
</div>
<div class="form-group row">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="description" placeholder="Description">
    </div>
</div>
<div class="form-group row">
    <label for="url" class="col-sm-2 col-form-label">Url</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="url" placeholder="Url">
    </div>
</div>
<div class="form-group row">
    <label for="category" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-10">
        <select class="custom-select" id="category">
            <option selected>Choose...</option>
            <?php

            use App\Models\Category;

            $categories = Category::query()->get();
            echo "$categories";
            // foreach ($categories as $categ) {
            //     echo "<option value='{$categ->name}'>$cate->name</option>";
            //     echo "$categ->name";
            // }
            ?>
        </select>

    </div>
</div>

@endsection