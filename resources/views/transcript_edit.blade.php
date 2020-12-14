@extends('layouts.app')

@section('content')
<script src="{{ url('js/dependent_selection.js') }}"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Transcript Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <thead>
                                    <tr class="success">
                                        <th>{{Form::hidden('text', $id)}}Course Name</th>
                                        <th>USTH Grade</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<$count; $i++) <tr class="warning">
                                        <td>{{Form::hidden('course_id[]', $courses[$i]->id)}}{{ $courses[$i]->courseName }}
                                        </td>
                                        <td>{{Form::input('text', 'final[]', $courses[$i]->final, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                        </td>
                                        </tr>
                                        @endfor
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Transcript', ['class' => 'btn btn-primary'])}}
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
