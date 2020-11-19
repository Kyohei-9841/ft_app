@extends('base.app')
@section('content')
    <div style="text-align:center;">
        <h1>エントリー</h1>
    </div>
    <div>
        <form action="{{ route('entry-submit')}}" method="post">
            {{ csrf_field() }}
            <div class="entry-form-item">
                <label class="form-label" for="name">名前</label>
                <input class="form-input" type="text" id="name" name="name">
            </div>
            <div class="entry-form-item">
                <label class="form-label" for="email">メールアドレス</label>
                <input class="form-input" type="mail" id="email" name="email">
            </div>
            <div class="entry-form-item">
                <label class="form-label" for="adress">住所</label>
                <input class="form-input" type="text" id="adress" name="adress">
            </div>
            <div class="entry-form-item">
                <label class="form-label" for="password">パスワード</label>
                <input class="form-input" type="password" id="password" name="password">
            </div>
            <div class="entry-form-submit">
                <input type="submit" value="送信する">
            </div>
        </form>
    </div>
@endsection