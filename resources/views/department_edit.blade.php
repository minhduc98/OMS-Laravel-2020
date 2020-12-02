@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Department Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Department Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'department_name', $department->departmentName, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Department Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'department_name_v', $department->departmentName_v, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Short Name</th>
                                    <th>{{Form::input('text', 'department_shortName', $department->shortName, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Department', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                            <tr>
                                    <th>Department Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'department_name', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Department Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'department_name_v', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                                <tr>
                                    <th>Short Name</th>
                                    <th>{{Form::input('text', 'department_shortName', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Department', ['class' => 'btn btn-primary'])}}
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
