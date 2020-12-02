@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Major</span>Display list of majors</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Major Name</th>
                                        <th>Major Name in Vietnamese </th>
                                        <th>Short Name</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<$count; $i++)
                                    <tr class="warning">
                                        <td>
                                            <a href="/major_edit/{{$majors[$i]->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/major_delete/{{$majors[$i]->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $majors[$i]->MajorName }}</td>
                                        <td>{{ $majors[$i]->MajorName_v }}</td>
                                        <td>{{ $majors[$i]->shortName }}</td>
                                        <td>{{ $years[$i]}}</td>
                                    </tr>
                                    @endfor
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/major_edit/new" class="btn btn-success">Add new major</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
