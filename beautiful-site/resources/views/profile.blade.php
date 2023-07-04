@extends("layout")
@section("title") Profile @endsection
@section("context")
    <center>
        <h3>Username: {{$user->username}}</h3>
        <h3>Email: {{$user->email}}</h3>
        <h3>Password: {{$user->password}}</h3>
        <h3>Money: {{$user->money}}</h3>
        <label>
            <form action="{{route("out")}}" method="post">@csrf<button type="submit">Out</button></form></label>
        <hr>
        <h2>Works: {{$user->work}} || Work Value: {{$user->workvalue}}$</h2>
        <form action="{{route("work")}}" method="post">
            @csrf
            <input type="text" name="des" placeholder="Enter Work Description" required>
            <input style="width: 40px" name="value" type="text" placeholder="Enter Work Value" required><br>
            <button type="submit">Update</button>
        </form>
    </center>

@endsection
