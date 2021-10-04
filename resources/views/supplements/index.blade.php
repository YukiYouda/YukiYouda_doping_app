@extends('layouts.main')

@section('title', '一覧画面')

@section('content')
    @if (!empty($supplements))
        <ul>
            @foreach ($supplements as $supplement)
                <li class="list-unstyled border mb-5 pl-3 shadow">
                    @include('partial.supplement')
                </li>
            @endforeach
        </ul>
        <div class="d-flex justify-content-center">
            {{ $supplements->links() }}
        </div>
    @endif
@endsection
