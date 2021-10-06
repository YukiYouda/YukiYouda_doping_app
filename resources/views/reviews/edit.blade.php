@extends('layouts.main')

@section('title', '編集画面')

@section('content')

    <h1>更新フォーム</h1>

    <form action="/supplements/{{ $supplement->id }}/reviews/{{ $review->id }}" method="post">
        @csrf
        @method('PATCH')
        <div class="foem-group">
            <p>
                <label for="">評価</label>
                <input type="text" name="score" value="{{ $review->score }}" class="form-control">
            </p>
        </div>
        <div class="foem-group">
            <p>
                <label for="">タイトル</label>
                <input type="text" name="title" value="{{ $review->title }}" class="form-control">
            </p>
        </div>
        <div class="foem-group">
            <p>
                <label for="">コメント</label>
                <textarea name="description" id="description" cols="30" rows="10"
                    class="form-control">{{ $review->description }}</textarea>
            </p>
        </div>
        <input type="hidden" name="supplement_id" value="{{ $review->supplement_id }}">
        <div class="register mt-4 mb-3">
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </form>

    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
