@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Program Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 50%; margin-left: 100px">
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'year', $year->year, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Program', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 50%; margin-left: 100px">
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'year', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Program', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @endif
                        {{Form::close()}}
                    </div>
                    <!-- notification panel end -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
