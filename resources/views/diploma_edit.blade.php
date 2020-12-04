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
                                    <th>Major Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'major_name', $major->MajorName, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Major Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'major_name_v', $major->MajorName_v, ['class' => 'form-control','style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Short Name</th>
                                    <th>{{Form::input('text', 'major_shortName', $major->shortName, ['class' => 'form-control','style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Program Name</th>
                                    <th>{{Form::select('program_id', $programs, old('program_id', optional($major)->program_id ?? ''), ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Department Name</th>
                                    <th>{{Form::select('department_id', $departments, old('department_id', optional($major)->department_id ?? ''), ['class' => 'form-control','style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years, old('year_id', optional($major)->year_id ?? ''), ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
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
                                    <th>Major Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'major_name', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Major Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'major_name_v', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Short Name</th>
                                    <th>{{Form::input('text', 'major_shortName', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Program Name</th>
                                    <th>{{Form::select('program_id', $programs,  NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Department Name</th>
                                    <th>{{Form::select('department_id', $departments, NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years,  NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
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
