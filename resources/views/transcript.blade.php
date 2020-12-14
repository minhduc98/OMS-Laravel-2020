@extends('layouts.app')

@section('content')
<script src="{{ url('js/dependent_selection.js') }}"></script>
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Transcript</span>Display list of transcripts</h2>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open(['method' => 'post', 'name' => 'transcript', 'action' => 'TranscriptController@pdf'])}}
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <caption>Export Transcript</caption>
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
                        </div>
                        <div style="margin-left: 100px">
                            {{Form::submit('Export Transcript', ['class' => 'btn btn-primary'])}}
                        </div>
                        {{Form::close()}}
                        <!-- notification panel end -->
                    </div>
                    <br>
                    <br>
                    <div class='table-responsive table-content'>
                        <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                            <caption>Transcript Management</caption>
                            <thead>
                                <tr class="success">
                                    <th>Operations</th>
                                    <th>Student Code</th>
                                    <th>Year </th>
                                </tr>
                            </thead>
                            <tbody>
                                @for ($i=0; $i<$count; $i++) <tr class="warning">
                                    <td>
                                        <a href="/transcript_edit/{{$transcripts[$i]->id}}">
                                            <i class="fa fa-edit"></i>Edit
                                        </a>
                                        <br>
                                        <a href="/transcript_delete/{{$transcripts[$i]->id}}">
                                            <i class="fa fa-remove"></i>Delete
                                        </a>
                                    </td>
                                    <td>{{ $student_codes[$i] }}</td>
                                    <td>{{ $years_year[$i] }}</td>
                                    </tr>
                                    @endfor
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <a href="/transcript/new" class="btn btn-success" style="margin-left: 100px">Add new transcript</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    @endsection
