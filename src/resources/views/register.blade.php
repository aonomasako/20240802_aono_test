@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('contact')
<div class="content-form__register">
    <div class="header">
        <h2>register</h2>
    </div>
    <div class="box">
        <form class="form" action="/register" method="post">
            <div class="form-group__title">
               <span class="form__label--item">お名前</span>
               <input type="text" name="name" placeholder="例:山田　太郎" value="{{ old('name') }}" />
            </div>
            <div class="form-group__title">
                <span class="form__label--item">メールアドレス</span>
                <input type="email" name="email" placeholder="例:text@example.com" value="{{ old('email') }}" />
            </div>
            <div class="form-group__title">
                <span class="form__label--item">パスワード</span>
                <input type="password" name="password" placeholder="例:coachtechno6" value="{{ old('password') }}" />
            </div>
            <div class="register__button">
                <button class=form__botton--submit name="submit">登録</button>
            </div>
        </form>
    </div>
</div>
@endsection