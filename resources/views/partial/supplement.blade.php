<div class="row">
    <div>
        <img src="{{ url($supplement->img_path) }}" class="square-img">
    </div>
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <h3>
                <a href="{{ route('supplements.show', $supplement) }}">{{ $supplement->name }}</a>
            </h3>
        </div>
        <div>
            <div>カテゴリー: {{ $supplement->category->name }}</div>
            <div>￥ {{ $supplement->price }}</div>
            <div>内容量: {{ $supplement->volume }}</div>
        </div>
    </div>
</div>
