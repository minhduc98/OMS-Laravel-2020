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
                        {{Form::open(['method' => 'post', 'action' => 'TranscriptController@saveNewTranscript' ]) }}
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <caption>Transcript Detail Information</caption>
                                <thead>
                                    <tr class="success">
                                        <th>{{Form::hidden('id', $transcript_detail->id)}}Course Name</th>
                                        <th>USTH Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($courses as $course)
                                    <tr class="warning">
                                        <td>{{Form::hidden('course_id[]', $course->id)}}{{ $course->courseName }}
                                        </td>
                                        <td>{{Form::input('text', 'final[]', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                        </td>
                                    </tr>
                                    @endforeach
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Transcript', ['class' => 'btn btn-primary'])}}
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
