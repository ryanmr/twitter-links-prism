@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Error</div>

                <div class="panel-body">
                    <p>
                      Sorry. Twitter rejected you for some reason.
                      <br>
                      Try again later, sometime.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
