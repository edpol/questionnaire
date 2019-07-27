@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <form action="/question" method="post">
                    @csrf
                    <div class="row">

{{--                        <div class="col-md-2 mt-2">--}}
{{--                            <label for="order">Order:</label>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-10 mt-2">--}}
{{--                            <input id="order" name="order" type="text">--}}
{{--                        </div>--}}

                        <div class="col-md-2 mt-2">
                            <label for="heading">Heading:</label>
                        </div>
                        <div class="col-md-9 mt-2">
                            <input id="heading" name="heading_id" type="text">
                        </div>

                        <div class="col-md-2 mt-2">
                            <label for="question">Question:</label>
                        </div>
                        <div class="col-md-9 mt-2">
                            <input id="question" name="question" type="text">
                        </div>

                        <div class="col-md-2 mt-2">
                            <label for="type">Type: </label>
                        </div>
                        <div class="col-md-9 mt-2">
                            <select id="type" name="type">
                                <option value='choose' disabled selected="selected">choose</option>
                                <option value='checkbox'>checkbox</option>
                                <option value='radio'>radio</option>
                                <option value='option'>option</option>
                            </select>
                        </div>
                    </div>
            </form>

            </div>
        </div>
    </div>
@endsection
