@extends("layouts.app")
@section("content")
<div class="container" style="min-height: 600px;">
    @foreach($posts as $post)
        <div style="padding: 10px; margin: 10px; border: 1px solid #9ca3af " class="col-12">
            <div class="card bg-dark text-white" style="max-width: 400px;">
                <img src="{{ asset("Blogs/Photos/".$post->photo) }}" class="card-img" alt="{{ $post->name }}" width="400" height="250"/>
                <div class="card-img-overlay" style="background-color: rgba(0, 0, 0, 0.3)">
                    <h5 class="card-title">{{ $post->name }}</h5>
                    <p class="card-text">
                        {{ $post->summary }}
                    </p>
                    <p class="card-text">{{ $post->create_at }}</p>
                </div>
            </div>
            <div>
                <a class="btn btn-primary" href="{{ route("show",$post->id) }}">
                    Detay
                </a>
            </div>
        </div>
    @endforeach

</div>
@endsection
