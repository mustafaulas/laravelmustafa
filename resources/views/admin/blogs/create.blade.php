@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Add Blog</h3>
        <form method="post" action="{{ route("admin.blogs.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label >
                        Photo
                        <input class="form-control" type="file" name="photo" id="photo">
                    </label>
                </div>
                <div class="col-12">
                    <label >
                        Name
                    <input class="form-control" type="text" name="name" id="name" required>
                    </label>
                </div>
                <div class="col-12">
                    <label >
                        Summary
                        <input class="form-control" type="text" name="summary" id="summary" required>
                    </label>
                </div>
                <div class="col-12">
                    <label >
                        Content
                        <textarea name="content" id="content" class="form-control">

                        </textarea>
                    </label>
                </div>

                <div class="col-12">
                    <input class="btn btn-primary" type="submit" value="gonder" name="submit" id="submit">
                </div>
                @if($errors->any() )
                    <div class="col-12">
                        <label class="bg-danger">{{ $errors->first() }}</label>
                    </div>
                @endif
            </div>
        </form>


    </div>
@endsection
