@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">Search Result</span>Display searching information
                </h2>
                <div class="panel-body">
                    <div class="row">
                        <div class="table-responsive table-content">
                            @foreach($search_results as $search_result) <h1>Student Number {{$search_result->id}}</h1>
                            <table class="table table-bordered" border="1">
                                <caption>Personal Information</caption>
                                <thead>
                                    <tr class="success">
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
                                    <tr class="warning">
                                        <td>{{ $search_result->fullName }}</td>
                                        <td>{{ $search_result->fullName_v }}</td>
                                        <td>{{ $search_result->gender }}</td>
                                        <td>{{ $search_result->DOB }}</td>
                                        <td>{{ $search_result->DOB_v }}</td>
                                        <td>{{$search_result->POB }}</td>
                                        <td>{{ $search_result->POB_v }}</td>
                                        <td>{{ $search_result->Nationality }}</td>
                                        <td>{{ $search_result->Ethnicity }}</td>
                                        <td>{{ $search_result->Mail }}</td>
                                        <td>{{ $search_result->PhoneNumber }}</td>
                                        <td>{{ $search_result->MartialStatus }}</td>
                                        <td>{{ $search_result->Address }}</td>
                                        <td>{{ $search_result->City }}</td>
                                        <td>{{ $search_result->Country }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @if($search_result->student_code && $search_result->MajorName && $search_result->year)
                            <table class="table table-bordered" border="1">
                                <caption>Academic Information</caption>
                                <thead>
                                    <tr class="success">
                                        <th>Student Code</th>
                                        <th>Major</th>
                                        <th>Academic Year</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="warning">
                                        <td>{{ $search_result->student_code }}</td>
                                        <td>{{ $search_result->MajorName }}</td>
                                        <td>{{ $search_result->year }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                            @if($search_result->ranking && $search_result->ranking_v && $search_result->graduationYear
                            && $search_result->diplomaNumber && $search_result->diplomaNote )
                            <table class="table table-bordered" border="1">
                                <caption>Diploma Information</caption>
                                <thead>
                                    <tr class="success">
                                        <th>Ranking</th>
                                        <th>Ranking in Vietnamese</th>
                                        <th>Graduation Year</th>
                                        <th>Diploma Number</th>
                                        <th>Diploma Note</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="warning">
                                        <td>{{ $search_result->ranking }}</td>
                                        <td>{{ $search_result->ranking_v }}</td>
                                        <td>{{ $search_result->graduationYear }}</td>
                                        <td>{{ $search_result->diplomaNumber }}</td>
                                        <td>{{ $search_result->diplomaNote }}</td>
                                    </tr>
                                </tbody>
                            </table>
                            @endif
                        @endforeach
                        <br>
                        <h6>{{ $search_results->links() }}</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
