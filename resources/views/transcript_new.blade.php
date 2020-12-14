@extends('layouts.app')

@section('content')
<script src="{{ url('js/dependent_selection.js') }}"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Create new Transcript </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open(['method' => 'post', 'action' => 'TranscriptController@find_course' ])}}
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <caption>Transcript General Information</caption>
                                <tr>
                                    <th>Student</th>
                                    <th>{{Form::select('student_id', $students, NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years, NULL, ['class' => 'form-control', 'id' => 'year', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Major</th>
                                    <th>{{Form::select('major_id', $majors, NULL, ['class' => 'form-control', 'id' => 'major', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Year Position</th>
                                    <th>{{Form::select('year_position', ['1.' => 'Bachelor 1', '2.' => 'Bachelor 2', '3.' => 'Bachelor 3'], NULL, ['class' => 'form-control', 'id' => 'year_position', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Find Course with that major', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        {{Form::close()}}
                    </div>
                    <!-- notification panel end -->
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
