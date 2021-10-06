@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
    <a href="{{ route('supplements.create') }}"><button type="button">新規登録</button></a>
    @if (!empty($supplements))
        <ul>
            @foreach ($supplements as $supplement)
                <li class="list-unstyled border mt-4 mb-5 pl-3 shadow">
                    @include('partial.supplement')
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {{ $supplements->links() }}
        </div>
    @endif
@endsection
