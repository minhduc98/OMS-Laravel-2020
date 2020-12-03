@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Course</span>Display list of courses</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Year</th>
                                        <th>Major</th>
                                        <th>Course Name</th>
                                        <th>Course Name in Vietnamese</th>
                                        <th>Course Code</th>
                                        <th>Summary</th>
                                        <th>Total Hour</th>
                                        <th>Lecture Hour</th>
                                        <th>Lab Hour</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<$count; $i++)
                                    <tr class="warning">
                                        <td>
                                            <a href="/course_edit/{{$courses[$i]->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/course_delete/{{$courses[$i]->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $years[$i] }}</td>
                                        <td>{{ $majors[$i]}}</td>
                                        <td>{{ $courses[$i]->courseName }}</td>
                                        <td>{{ $courses[$i]->courseName_v }}</td>
                                        <td>{{ $courses[$i]->courseCode }}</td>
                                        <td>{{ $courses[$i]->summary }}</td>
                                        <td>{{ $courses[$i]->totalHour }}</td>
                                        <td>{{ $courses[$i]->lectureHour }}</td>
                                        <td>{{ $courses[$i]->labHour }}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                            <h6>{{ $courses->links() }}</h6>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/course_edit/new" class="btn btn-success">Add new course</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
