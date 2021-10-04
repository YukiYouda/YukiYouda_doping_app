@extends('layouts.main')

@section('title', '詳細画面')

@section('content')
    @include('partial.supplement')
    <table class="table-bordered mb-5 mt-3">
        <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
        <tbody>
            <tr>
                <th>商品名:</th>
                <td>
                    <p>{{ $supplement->name }}</p>
                </td>
            </tr>
            <tr>
                <th>値段:</th>
                <td>
                    <p>￥{{ $supplement->price}}</p>
                </td>
            </tr>
            <tr>
                <th>内容量:</th>
                <td>
                    <p>{{ $supplement->volume}}</p>
                </td>
            </tr>
            <tr>
                <th>説明:</th>
                <td>
                    <p>{{ $supplement->description}}</p>
                </td>
            </tr>
        </tbody>
    </table>
    <a href="{{ route('supplements.index') }}">戻る</a>
@endsection