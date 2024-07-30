@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<form action="/register" class="register-form" method="post">
  @csrf
  <div class="register-form">
    <div class="register-form__inner">
      <h2 class="register-form__heading" register__heading>
      会員登録</h2>
    </div>


    <div class="register-form__inputs">
      <input type="text" class="register-form__input" name="name" placeholder="名前" value="{{ old('name') }}">
    </div>

    <div class="register-form__inputs">
      <input type="email" class="register-form__input" name="email" placeholder="メールアドレス" value="{{ old('email') }}" >
    </div>

    <div class="register-form__inputs">
      <input type="password" class="register-form__input" name="password"  placeholder="パスワード">
    </div>

    <div class="register-form__inputs">
      <input type="password" class="register-form__input" name="confirmation" placeholder="確認用パスワード">
    </div>

    <div class="register-form__inputs">
      <input type="submit" class="register-form__btn" value="会員登録">
    </div>

    <div class="login-form">
      <p class="login">アカウントをお持ちの方はこちらから</p>
      <a href="/login" class="login__btn">ログイン</a>
    </div>
  </div>
</form>
@endsection