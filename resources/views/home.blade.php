@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container" style="margin-top:70px;">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              <div class="alert alert-success" role="alert">
A simple success alert—check it out!
</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
