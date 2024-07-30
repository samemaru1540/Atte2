@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/attend.css') }}">
@endsection

@section('content')
  <form action="/attendance" class="attendance-form" method="post">
    @csrf

  </form>
@endsection