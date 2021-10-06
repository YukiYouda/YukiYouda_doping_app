@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')

    <h1>登録フォーム</h1>

    <form action="{{ route('supplements.reviews.store', $supplement) }}" method="post">
        @csrf
        <div class="form-group">
            <p>
                <label for="score">評価</label>
                <input type="text" name="score" class="form-control" placeholder="1~5の整数を入力してください">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="title">タイトル</label>
                <input type="text" name="title" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="description">コメント</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </p>
        </div>
        <input type="hidden" name="supplement_id" value="{{ $supplement_id }}">
        <div class="register mt-4 mb-3">
            <button type="submit" class="btn btn-primary">登録</button>
        </div>
    </form>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
