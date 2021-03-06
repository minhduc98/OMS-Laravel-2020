@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Student</span>Display list of students</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Student Code</th>
                                        <th>Major</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<$count; $i++)
                                    <tr class="warning">
                                        <td>
                                            <a href="/student_edit/{{$students[$i]->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            @if(Auth::user()->userType == 'admin')
                                            <br>
                                            <a href="/student_delete/{{$students[$i]->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                            @endif
                                        <td>{{ $students[$i]->student_code }}</td>
                                        <td>{{ $majors[$i]}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/student_edit/new" class="btn btn-success">Add new student</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
