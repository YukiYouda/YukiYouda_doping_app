@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.supplement')

    <table class="table-bordered mt-3">
        <colgroup span="1" style="width:100px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>商品名:</th>
                <td>
                    <p>{{ $supplement->name }}</p>
                </td>
            </tr>
            <tr>
                <th>カテゴリー:</th>
                <td>
                    <p>{{ $supplement->category->name }}</p>
                </td>
            </tr>
            <tr>
                <th>値段:</th>
                <td>
                    <p>￥{{ $supplement->price }}</p>
                </td>
            </tr>
            <tr>
                <th>内容量:</th>
                <td>
                    <p>{{ $supplement->volume }}</p>
                </td>
            </tr>
            <tr>
                <th>説明:</th>
                <td>
                    <p>{{ $supplement->description }}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="d-flex mt-2 mb-5">
        <a href="{{ route('supplements.edit', $supplement) }}">編集</a>
        <div class="ml-2">
            <form action="{{ route('supplements.destroy', $supplement) }}" method="post" name="form1">
                @csrf
                @method('delete')
                <button type="submit" onclick="if(!confirm('削除していいですか?')){return false}">削除する</button>
            </form>
        </div>
    </div>


    @if (!empty($reviews))
        <div>
            ユーザーレビュー
        </div>
        @foreach ($reviews as $review)
            <table class="table-bordered mb-2 mt-4">
                <colgroup span="1" style="width:100px;background-color:#efefef;"></colgroup>
                <tbody>
                    <tr>
                        <th>評価:</th>
                        <td>
                            <p>{{ $review->score }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>タイトル:</th>
                        <td>
                            <p>{{ $review->title }}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>コメント:</th>
                        <td>
                            <p>{{ $review->description }}</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <a href="{{ route('supplements.reviews.edit', [$review, $supplement]) }}">編集</a>
        @endforeach
    @endif
    <div class="mt-4 mb-4">
        <a href="{{ route('supplements.reviews.create', $supplement) }}"><button type="button">新規登録</button></a>
    </div>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection
