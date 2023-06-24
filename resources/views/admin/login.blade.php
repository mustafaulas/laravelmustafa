@extends("layouts.app")
@section("content")
    <div class="container" style="min-height: 600px">
        <form method="post" action="{{ route("loginp") }}">
            @csrf
            <div class="row">
                <div class="col-12">
                    <label >
                        email

                    </label>
                    <input class="form-control" type="email" name="email" id="email">
                </div>

                <div class="col-12">
                    <label >
                        Password

                    </label>
                    <input class="form-control" type="password" name="password" id="password">
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
