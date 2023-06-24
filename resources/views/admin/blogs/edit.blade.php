@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Update Blog</h3>
        @if(isset($blog))
            <form method="post" action="{{ route("admin.blogs.update") }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $blog->id }}">
                <div class="row">
                    <div class="col-12">
                        <img src="{{ asset("Blogs/Photos/".$blog->photo) }}" width="250" alt="{{  $blog->name }}">
                    </div>
                    <div class="col-12">
                        <label >
                            Photo
                            <input class="form-control" type="file" name="photo" id="photo">
                        </label>
                    </div>
                    <div class="col-12">
                        <label >
                            Name
                            <input class="form-control" type="text" name="name" id="name" required value="{{ $blog->name }}">
                        </label>
                    </div>
                    <div class="col-12">
                        <label >
                            Summary
                            <input class="form-control" type="text" name="summary" id="summary" required value="{{ $blog->summary }}">
                        </label>
                    </div>
                    <div class="col-12">
                        <label >
                            Contents

                            <textarea class="form-control" name="contents" id="contents">{{ $blog->content }}</textarea>
                        </label>
                    </div>

                    <div class="col-12">
                        <input class="btn btn-primary" type="submit" value="gonder" name="submit" id="submit">
                    </div>
            </form>
        @else
            bu kullanıcı yok
        @endif
    </div>
@endsection
