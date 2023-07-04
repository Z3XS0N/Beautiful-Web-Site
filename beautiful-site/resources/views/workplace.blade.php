@extends("layout")
@section("title") Work Palace @endsection

@section("context")
<center>{{@$err}}</center>
@if(@$works)
        <h3 class="money">{{@$moneydb}}$</h3>
    <center>
        @foreach($works as $work)
            @if($work->work != null)
                <h3 style="color: #007bff">Employer's Name: <label style="color: red">{{$work->username}}</label></h3>
                <h3 style="color: #007bff">Her Job: <label style="color: black">{{$work->work}}</label> <label
                        style="color: black; font: bold">||</label> Provision: <label
                        style="color: black">{{$work->workvalue}}$</label>
                    <a href="{{ route('buy', ['username'=>$work->username,'money' => $work->workvalue]) }}">Buy</a>
                </h3>
                <hr>
            @endif
        @endforeach
    </center>
@endif
@endsection
