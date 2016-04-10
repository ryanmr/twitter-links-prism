@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if($user->connected())
                      <div>
                        {{$user->details->name}}, {{$user->details->nickname}}, you are logged into Prism and Twitter.
                        <br>
                        Congratulations!
                      </div>
                    @else
                      <div>
                        You are logged into Prism, but not yet logged into Twitter.
                        <br>
                        <a href="{{route('twitter.redirect')}}">Log Into Twitter</a>
                      </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
