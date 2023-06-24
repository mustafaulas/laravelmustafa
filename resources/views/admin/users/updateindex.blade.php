@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Update User</h3>
        @if(isset($user))
        <form method="post" action="{{ route("admin.users.updatepost") }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $user->id }}">
            <div class="row">
                <div class="col-12">
                    <label >
                        Name
                    <input class="form-control" type="text" name="name" id="name" required value="{{ $user->name }}"></label>
                </div>
                <div class="col-12">
                    <label >
                        email
                    <input class="form-control" type="email" name="email" id="email" required value="{{ $user->email }}"></label>
                </div>
                <div class="col-12">
                    <label >
                        Password
                    <input class="form-control" type="password" name="password" id="password" ></label>
                </div>

                <div class="col-12">
                    <label >
                        Photo
                        <input class="form-control" type="file" name="photo" id="photo"></label>
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
        @else
        bu kullanıcı yok
        @endif
    </div>
@endsection
