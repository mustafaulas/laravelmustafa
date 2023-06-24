@extends("layouts.app")
@section("content")
<div class="container" style="min-height: 600px">
    @foreach($posts as $post)
        <div style="padding: 10px; margin: 10px; border: 1px solid #9ca3af ">
            <div>
                <h3>
                    {{ $post->name }}
                </h3>
            </div>
            <div>
                <p>
                    {{ $post->summary }}
                </p>
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
