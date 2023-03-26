@extends('dashboard.layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center my-3">
    <div class="col-lg-8">
      <h2>{{ $post->title }}</h2>

      <div class="">
        <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left" class="align-text-bottom"></span> Back to all my posts</a>
        <a href="" class="btn btn-warning"><span data-feather="edit" class="align-text-bottom"></span> Edit</a>
        <a href="" class="btn btn-danger"><span data-feather="x-circle" class="align-text-bottom"></span> Delete</a>
      </div>

      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3" alt="...">
      <article class="my-3">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>
@endsection