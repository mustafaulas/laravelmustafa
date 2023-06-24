@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Add User</h3>
        <form method="post" action="{{ route("admin.users.addpost") }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label >
                        Name

                    </label>
                    <input class="form-control" type="text" name="name" id="name" required>
                </div>
                <div class="col-12">
                    <label >
                        email

                    </label>
                    <input class="form-control" type="email" name="email" id="email" required>
                </div>
                <div class="col-12">
                    <label >
                        Password

                    </label>
                    <input class="form-control" type="password" name="password" id="password"required>
                </div>
                <div class="col-12">
                    <label >
                        Photo

                    </label>
                    <input class="form-control" type="file" name="photo" id="photo">
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
