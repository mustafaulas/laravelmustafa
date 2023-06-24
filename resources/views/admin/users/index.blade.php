@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Users</h3>
        <div class="col-12">
            <table id="usertable" class="table table-hover">
                <thead>
                    <tr>
                        <td>id</td>
                        <td>name</td>
                        <td>email</td>
                        <td>photo</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <a class="btn btn-primary" href="{{ route("admin.users.add") }}">Yeni Ekle</a>

            @foreach($users as $user)
                    <tr>
                        <td>{{  $user->id }}</td>
                        <td> {{  $user->name }}</td>
                        <td> {{  $user->email }}</td>
                        <td>
                            <img src="{{ asset("Users/Photos/".$user->photo) }}" width="50" alt="{{  $user->name }}">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route("admin.users.update", $user->id ) }}">Güncelle</a>
                            <a class="btn btn-danger" href="{{ route("admin.users.delete", $user->id ) }}">Sil</a>
                        </td>
                    </tr>
            @endforeach
                </table>
        </div>
    </div>
@endsection
