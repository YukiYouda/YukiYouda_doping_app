@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')
    <h1>登録フォーム</h1>
    <form action="{{ route('supplements.reviews.store', $supplement) }}" method="post">
        @csrf
        <p>
            <label for="score">評価</label>
            <input type="text" name="score">
        </p>
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="description">コメント</label>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </p>
        <input type="hidden" name="supplement_id" value="">
        
        <input type="submit" value="登録">
    </form>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
