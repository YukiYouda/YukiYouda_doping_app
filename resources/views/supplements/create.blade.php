@extends('layouts.main')

@section('title', '新規登録画面')

@section('content')

    <h1>登録フォーム</h1>

    <form action="{{ route('supplements.store') }}" method="post">
        @csrf
        <div class="form-group">
            <p>
                <label for="name">サプリメント名</label>
                <input type="text" name="name" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="name">カテゴリー</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="price">金額</label>
                <input type="text" name="price" placeholder="数字を入力(例:1234)" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="volume">内容量</label>
                <input type="text" name="volume" placeholder="数字と単位を入力(例:1234㎏)" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="description">説明</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
            </p>
        </div>
        <div class="register mt-4 mb-3">
            <button type="submit" class="btn btn-primary">登録</button>
        </div>
    </form>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
