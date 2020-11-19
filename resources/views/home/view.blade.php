@extends('base.app')
@section('content')
    <div style="text-align:center;">
        <h1>ユーザー画面</h1>
    </div>
    <div>
        <p>こんにちは{{ $user->name }}さん</p>
        <a href="{{route('upload', ['id' => $user->id])}}" class="login-button">アップロード</a>
    </div>
@endsection