@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('header')
  <ul class="top-header__nav">
    <li class="top-header__nav-list">
      <a href="/"></a>ホーム</li>
    <li class="top-header__nav-list"><a href="">
    </a>日付一覧</li>
    <li class="top-header__nav-list">
        <a href="/logout"></a>ログアウト</li>
  </ul>
@endsection

@section('content')
  <form action="/" class="form" method="post">
    @csrf
    <div class="stamp-form">
      <div class="stamp-form__inputs">
        <div class="stamp-form__attend">
          <div class="stamp-form__input">
            <input type="submit" class="stamp-form__btn" value="勤務開始">
          </div>
          <div class="stamp-form__input">
            <input type="submit" class="stamp-form__btn" value="勤務終了">
          </div>
        </div>


        <div class="stamp-form__break">
          <div class="stamp-form__input">
            <input type="submit" class="stamp-form__btn" value="休憩開始">
          </div>
          <div class="stamp-form__input">
            <input type="submit" class="stamp-form__btn" value="休憩終了">
          </div>
        </div>
      </div>
    </div>
  </form>
@endsection