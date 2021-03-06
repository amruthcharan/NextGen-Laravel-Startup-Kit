<div class="product">
    <div class="section-header">
        <h3>Related Articles</h3>
    </div>

    <div class="row align-items-center">
        @foreach($related as $post)
        <div class="col-lg-4">
            <div class="product-item">
                <div class="product-image">
                    <a href="{{ route('page', $post->slug) }}">
                        <img src="{{ image($post->image) }}" alt="{{ $post->title }}">
                    </a>
                </div>
                <div class="product-title">
                    <a href="{{ route('page', $post->slug) }}">{{ $post->title }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
