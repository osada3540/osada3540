@extends('layouts.app')
@section('content')
@include('post.posts', ['posts' => $posts])
@endsection