@extends("layouts.app")
@section("content")
    <div class="container" style="min-height: 600px">
            <div style="padding: 10px; margin: 10px; border: 1px solid #9ca3af ">
                <div>
                    <h3>
                        {{ $post->name }}
                    </h3>
                </div>
                <div>
                    <p>
                        <b>{{ $post->summary }}</b>
                    </p>
                </div>
                <div>
                    <p>
                        {!! $post->content !!}
                    </p>
                </div>
                <div>
                    <a class="btn btn-primary" href="{{ route("home") }}">
                        geri
                    </a>
                </div>
            </div>

    </div>
@endsection
