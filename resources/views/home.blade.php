@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                           {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
                <div class="card-body">
                    <example-component></example-component>
                </div>
                <div class="card-body">
                    <a href="/question/create" class="btn btn-primary">
                        Add a Question
                    </a>
                    <a href="/heading/create" class="btn btn-primary">
                        Add a Heading
                    </a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
