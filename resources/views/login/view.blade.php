@extends('base.app')
@section('content')
    <div style="text-align:center;">
        <h1>ログイン</h1>
    </div>
    <div>
        <form action="{{ route('login-submit')}}" method="post">
            {{ csrf_field() }}
            <div class="login-form-item">
                <label class="form-label" for="email">メールアドレス</label>
                <input class="form-input" type="mail" id="email" name="email">
            </div>
            <div class="login-form-item">
                <label class="form-label" for="password">パスワード</label>
                <input class="form-input" type="password" id="password" name="password">
            </div>
            <div class="login-form-submit">
                <input type="submit" value="ログイン">
            </div>
        </form>
    </div>
@endsection