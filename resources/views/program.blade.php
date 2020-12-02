@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Program</span>Display list of programs</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Program Name</th>
                                        <th>Program Name in Vietnamese </th>
                                        <th>Short Name</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($programs as $program)
                                    <tr class="warning">
                                        <td>
                                            <a href="/program_edit/{{$program->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/program_delete/{{$program->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $program->programName }}</td>
                                        <td>{{ $program->programName_v }}</td>
                                        <td>{{ $program->shortName }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/program_edit/new" class="btn btn-success">Add new program</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
