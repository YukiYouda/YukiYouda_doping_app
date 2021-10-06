<div class="row">
    <div>
        <img src="{{ url($supplement->img_path) }}" class="square-img">
    </div>
    <div class="ml-5">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('supplements.show', $supplement) }}">{{ $supplement->name }}</a>
            </h3>
        </div>
        <div>
            <div class="mb-3">カテゴリー: {{ $supplement->category->name }}</div>
            <div class="mb-3">￥ {{ $supplement->price }}</div>
            <div>内容量: {{ $supplement->volume }}</div>
        </div>
    </div>
</div>
