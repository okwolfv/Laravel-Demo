@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">USER</div>

                <div class="panel-body">
                    <form action="{{ URL::route('user.update', array('id' => Auth::user()->id)) }}" method="post">
                        <strong>Height:</strong>
                        <input type="text" name="height" value="{{ $user->height }}">

                        <br>
                        <strong>Weight:</strong>
                        <input type="text" name="weight" value="{{ $user->weight }}">

                        <br>
                        <strong>DOB:</strong>
                        <input type="text" name="dob" value="{{ $user->dob }}">

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
