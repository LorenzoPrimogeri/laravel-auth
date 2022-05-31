@extends('layouts   .app')

@section('content')
<div class="container">
    <div class="row justfy-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{__('Dashboard')}}
                </div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{session('status')}}
                    </div>
                    {{__('You are logged in')}}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection