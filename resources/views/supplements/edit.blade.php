@extends('layouts.main')

@section('title', '編集画面')

@section('content')

    <h1>更新フォーム</h1>

    <form action="{{ route('supplements.update', $supplement) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <p>
                <label for="name">サプリメント名</label>
                <input type="text" name="name" value="{{ $supplement->name }}" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="name">カテゴリー</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" @if( $supplement->category_id  == $category->id) selected @endif>{{ $category->name }}</option>
                    @endforeach
                </select>
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="price">金額</label>
                <input type="text" name="price" value="{{ $supplement->price }}" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="volume">内容量</label>
                <input type="text" name="volume" value="{{ $supplement->volume }}" class="form-control">
            </p>
        </div>
        <div class="form-group">
            <p>
                <label for="description">説明</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $supplement->description }}</textarea>
            </p>
        </div>
        <input type="hidden" name="category_id" value="{{ $supplement->category_id }}">
        <input type="hidden" name="img_path" value="{{ $supplement->img_path }}">

        <div class="register mt-4 mb-3">
            <button type="submit" class="btn btn-primary">更新</button>
        </div>
    </form>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
