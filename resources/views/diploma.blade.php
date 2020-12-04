@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;">
                    <span style="margin-right: 50px; font-size: 28px;">Diploma</span>
                    Export diploma
                </h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>PDF output</th>
                                        <th>Student Code</th>
                                        <th>Ranking </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @for ($i=0; $i<$count; $i++) <tr class="warning">
                                        <td>
                                            <a href="/diploma_edit/{{$diplomas[$i]->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/diploma_delete/{{$diplomas[$i]->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/diploma/{{$diplomas[$i]->id}}">
                                                <i class="fa fa-arrow-right"></i>Export PDF
                                            </a>
                                        <td>{{ $student_codes[$i] }}</td>
                                        <td>{{ $diplomas[$i]->ranking }}</td>
                                        </tr>
                                        @endfor
                                </tbody>
                            </table>
                        </div>
                        <div>
                            <a href="/home" class="btn btn-primary">Return</a>
                            <a href="/diploma_edit/new" class="btn btn-success">Add new diploma</a>
                            <a href="/profile_import_excel" class="btn btn-warning">Import Excel file</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
