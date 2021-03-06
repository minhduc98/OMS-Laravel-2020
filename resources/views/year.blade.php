@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Year</span>Display list of years</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($years as $year)
                                    <tr class="warning">
                                        <td>
                                            <a href="/year_edit/{{$year->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/year_delete/{{$year->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $year->year}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/year_edit/new" class="btn btn-success">Add new year</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
