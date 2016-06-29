@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">USER</div>

                <div class="panel-body">
                    <select id="measurement">
                        <option>US</option>
                        <option>Metric</option>
                    </select>
                    <br />
                    <br />

                    <strong>Height:</strong> {{ $user->height }}
                    <br><strong>Weight:</strong> {{ $user->weight }}
                    <br><strong>DOB:</strong> {{ $user->dob }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
