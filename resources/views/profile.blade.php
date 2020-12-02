@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Profile</span>Display list of profiles</h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            <table class="table table-bordered" border="1">
                                <thead>
                                    <tr class="success">
                                        <th>Operations</th>
                                        <th>Full Name</th>
                                        <th>Full Name in Vietnamese </th>
                                        <th>Gender</th>
                                        <th>DOB</th>
                                        <th>DOB in Vietnamese </th>
                                        <th>POB</th>
                                        <th>POB in Vietnamese</th>
                                        <th>Nationality </th>
                                        <th>Ethnicity</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Martial Status</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($profiles as $profile)
                                    <tr class="warning">
                                        <td>
                                            <a href="/profile_edit/{{$profile->id}}">
                                                <i class="fa fa-edit"></i>Edit
                                            </a>
                                            <br>
                                            <a href="/profile_delete/{{$profile->id}}">
                                                <i class="fa fa-remove"></i>Delete
                                            </a>
                                        <td>{{ $profile->fullName }}</td>
                                        <td>{{ $profile->fullName_v }}</td>
                                        <td>{{ $profile->gender }}</td>
                                        <td>{{ $profile->DOB }}</td>
                                        <td>{{ $profile->DOB_v }}</td>
                                        <td>{{$profile->POB }}</td>
                                        <td>{{ $profile->POB_v }}</td>
                                        <td>{{ $profile->Nationality }}</td>
                                        <td>{{ $profile->Ethnicity }}</td>
                                        <td>{{ $profile->Mail }}</td>
                                        <td>{{ $profile->PhoneNumber }}</td>
                                        <td>{{ $profile->MartialStatus }}</td>
                                        <td>{{ $profile->Address }}</td>
                                        <td>{{ $profile->City }}</td>
                                        <td>{{ $profile->Country }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>
                                <a href="/home" class="btn btn-primary">Return</a>
                                <a href="/profile_edit/new" class="btn btn-success">Add new profile</a>
                                <a href="/profile_import_excel" class="btn btn-warning">Import Excel file</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
