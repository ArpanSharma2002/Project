<div class="banner-container">
    @php $banner = $banners->first(); @endphp
    <img src="{{ asset('assets/images/' . $banner->image) }}" alt="{{ $banner->title }}">
    <div class="banner-caption">
        <h5>{{ $banner->title }}</h5>
        <p>{{ $banner->description }}</p>
    </div>
</div>
