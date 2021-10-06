@extends('layouts.main')

@section('title', '編集画面')

@section('content')
    <h1>登録フォーム</h1>
    {{-- <form action="{{ route('reviews.update') }}" method="post"> --}}
        <p>
            <label for="">評価</label>
            <input type="text" name="score" value="{{ $review->score }}">
        </p>
        <p>
            <label for="">タイトル</label>
            <input type="text" name="title" value="{{ $review->title }}">
        </p>
        <p>
            <label for="">コメント</label>
            <textarea name="description" id="description" cols="30" rows="10">{{ $review->description }}</textarea>
        </p>
        <input type="hidden" name="supplement_id" value="{{ $review->supplement_id }}">
    </form>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection