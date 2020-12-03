@extends('layouts.app')

@section('content')
<script src="{{ url('js/dependent_selection.js') }}"></script>
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Student Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years, old('year_id', optional($major)->year_id ?? ''), ['class' => 'form-control', 'id' => 'year', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Major</th>
                                    <th>{{Form::select('major', $majors, old('major', optional($major)->id ?? ''), ['class' => 'form-control', 'id' => 'major', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Student Code</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'student_code', $student->student_code, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Profile Name</th>
                                    <th>{{Form::select('profile_id', $profiles, old('profile_id', optional($student)->profile_id ?? ''), ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <th>{{Form::select('user_id', $users, old('user_id', optional($student)->user_id ?? ''), ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Major', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                            <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years, NULL, ['class' => 'form-control', 'id' => 'year', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Major</th>
                                    <th>
                                        <select class="form-control" id="major" name="major">

                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Student Code</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'student_code', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Profile Name</th>
                                    <th>{{Form::select('profile_id', $profiles, NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Username</th>
                                    <th>{{Form::select('user_id', $users, NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Major', ['class' => 'btn btn-primary'])}}
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
