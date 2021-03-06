@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Department</span>Display list of departments</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Department Name</th>
                                        <th>Department Name in Vietnamese </th>
                                        <th>Short Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($departments as $department)
                                    <tr class="warning">
                                        <td>
                                            <a href="/department_edit/{{$department->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/department_delete/{{$department->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $department->departmentName }}</td>
                                        <td>{{ $department->departmentName_v }}</td>
                                        <td>{{ $department->shortName }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/department_edit/new" class="btn btn-success">Add new department</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
