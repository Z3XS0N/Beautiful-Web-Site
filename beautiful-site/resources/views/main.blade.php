@extends("layout")
@section("title") Main @endsection

@section("context")
    <h1><center>
            Main Page<br>
            @foreach(@$users as $user)
                {{$user->username}}<br>
            @endforeach
        </center></h1>
@endsection
