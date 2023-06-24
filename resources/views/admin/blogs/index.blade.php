@extends("layoutsadmin.adminapp")
@section("content")
    <div class="container" style="min-height: 600px">
        <h3>Blogs</h3>
        <div class="col-12">
            <table id="blogstable" class="table table-hover">
                <thead>
                <tr>
                    <td>id</td>
                    <td>name</td>
                    <td>summary</td>
                    <td>photo</td>
                    <td>işlemler</td>
                </tr>
                </thead>
                <a class="btn btn-primary" href="{{ route("admin.blogs.create") }}">Yeni Ekle</a>

                @foreach($blogs as $blog)
                    <tr>
                        <td>{{  $blog->id }}</td>
                        <td> {{  $blog->name }}</td>
                        <td> {{  $blog->summary }}</td>
                        <td>
                            <img src="{{ asset("Blogs/Photos/".$blog->photo) }}" width="50" alt="{{  $blog->name }}">
                        </td>
                        <td>
                            <a class="btn btn-warning" href="{{ route("admin.users.update", $blog->id ) }}">Güncelle</a>
                            <a class="btn btn-danger" href="{{ route("admin.users.delete", $blog->id ) }}">Sil</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
