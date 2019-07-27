@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <form action="/heading" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-md-2 mt-2">
                            <label for="heading">New Heading:</label>
                        </div>
                        <div class="col-md-10 mt-2">
                            <input class="col-12" id="heading" name="heading" type="text">
                        </div>
                    </div>
                </form>
                <div class="w-100"></div>

                    @foreach($headings as $heading)
                        <div class="row">
                            <div class="col-md-1 mt-2">
                                {{ $heading->id }}
                            </div>
                            <div class="col-md-11 mt-2">
                                {{ $heading->heading }}
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection
