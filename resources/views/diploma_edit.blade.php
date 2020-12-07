@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Major Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Student Code</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::select('student_id', $students, old('student_id', optional($diploma)->student_id ?? ''), ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ranking </th>
                                    <th>{{Form::input('text', 'ranking', $diploma->ranking, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ranking in Vietnamese</th>
                                    <th>{{Form::input('text', 'ranking_v', $diploma->ranking_v, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Graduation Year</th>
                                    <th>{{Form::input('text', 'graduationYear', $diploma->graduationYear, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Diploma Number</th>
                                    <th>{{Form::input('text', 'diplomaNumber', $diploma->diplomaNumber, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Diploma Note</th>
                                    <th>{{Form::input('text', 'diplomaNote', $diploma->diplomaNote, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Diploma', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Student Code</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::select('student_id', $students, NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ranking </th>
                                    <th>{{Form::input('text', 'ranking', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Ranking in Vietnamese</th>
                                    <th>{{Form::input('text', 'ranking_v', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Graduation Year</th>
                                    <th>{{Form::input('text', 'graduationYear', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Diploma Number</th>
                                    <th>{{Form::input('text', 'diplomaNumber', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Diploma Note</th>
                                    <th>{{Form::input('text', 'diplomaNote', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Diploma', ['class' => 'btn btn-primary'])}}
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
