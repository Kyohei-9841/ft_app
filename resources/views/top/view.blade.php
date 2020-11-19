@extends('base.app')
@section('content')
    <div style="text-align:center;">
        <h1>以下コンテンツ</h1>
    </div>
    <div>
        <a href="{{route('login')}}" class="login-button">ログイン</a>
        <a href="{{route('entry')}}" class="entry-button">エントリー</a>
    </div>
@endsection