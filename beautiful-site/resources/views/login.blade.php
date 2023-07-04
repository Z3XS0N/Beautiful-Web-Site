@extends("layout")
@section("title") Login @endsection

@section("context")
    <br><br>
<center>
    @if(@$err)
        <p class="err">{{$err}}</p>
    @endif
    <form action="{{route("login")}}" method="post">
        @csrf
        <input type="text" name="username" placeholder="Enter Username" required><br>
        <input type="email" name="email" placeholder="Enter Email" required><br>
        <input type="password" name="passwd" placeholder="Enter Password" required><br>
        <button type="submit">Send</button>
    </form>
</center>
@endsection
