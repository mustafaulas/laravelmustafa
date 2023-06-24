@extends("layouts.app")
@section("content")
<div class="container" style="min-height: 600px;">
    @foreach($posts as $post)
        <div class="row">
            <div style="padding: 10px; margin: 10px; border: 1px solid #e2e8f0 " class="col-sm">
                <img src="{{ asset("Blogs/Photos/".$post->photo) }}" class="card-img" alt="{{ $post->name }}" width="400" height="250"/>
            </div>
            <div style="padding: 10px; margin: 10px; border: 1px solid #e2e8f0 " class="col-8">
                <h3>{{ $post->name }}</h3>
                <p>{{ $post->summary }}</p>
                <div>
                    <p class="card-text">{{ $post->created_at->day }} / {{ $post->created_at->month }} / {{ $post->created_at->year }}</p>
                    <a class="btn btn-primary" href="{{ route("show",$post->id) }}">
                        Detay
                    </a>
                </div>
            </div>
        </div>
    @endforeach

</div>
@endsection
