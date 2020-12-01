@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Profile Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 50%; margin-left: 100px">
                                <tr>
                                    <th>ID</th>
                                    <th>{{Form::input('text', 'profile_id', $profile->id)}}</th>
                                </tr>
                                <tr>
                                    <th>Full Name</th>
                                    <th>{{Form::input('text', 'profile_name', $profile->fullName)}}</th>
                                </tr>
                                <tr>
                                    <th>Full Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'profile_name_v', $profile->fullName_v)}}</th>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <th>{{ Form::select('gender', ['male' => 'male', 'female' => 'female'], $profile->gender) }}
                                    </th>
                                </tr>
                                <tr>
                                    <th>DOB</th>
                                    <th>{{Form::input('text', 'profile_dob', $profile->DOB, ['placeholder' => 'Enter like January 1 1999'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>DOB in Vietnamese </th>
                                    <th>{{Form::input('text', 'profile_dob_v', $profile->DOB_v, ['placeholder' => 'Enter like Ngày 1 tháng 1 năm 1999'])}}
                                    </th>
                                <tr>
                                    <th>POB</th>
                                    <th>{{Form::input('text', 'profile_pob', $profile->POB)}}</th>
                                <tr>
                                    <th>POB in Vietnamese</th>
                                    <th>{{Form::input('text', 'profile_pob_v', $profile->POB_v)}}</th>
                                <tr>
                                <tr>
                                    <th>Nationality </th>
                                    <th>{{Form::input('text', 'profile_nationality', $profile->Nationality)}}</th>
                                <tr>
                                <tr>
                                    <th>Ethnicity</th>
                                    <th>{{Form::input('text', 'profile_ethnicity', $profile->Ethnicity)}}</th>
                                <tr>
                                <tr>
                                    <th>Email</th>
                                    <th>{{Form::input('text', 'profile_email', $profile->Mail)}}</th>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <th>{{Form::input('text', 'profile_phoneNumber', $profile->PhoneNumber)}}</th>
                                </tr>
                                <tr>
                                    <th>Martial Status</th>
                                    <th>{{ Form::select('martialStatus', ['single' => 'single', 'married' => 'married'], $profile->MartialStatus) }}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <th>{{Form::input('text', 'profile_address', $profile->Address)}}</th>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <th>{{Form::input('text', 'profile_city', $profile->City)}}</th>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <th>{{Form::input('text', 'profile_country', $profile->Country)}}</th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Profile', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 50%; margin-left: 100px">
                                <tr>
                                    <th>Full Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'profile_name', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>Full Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'profile_name_v', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>Gender</th>
                                    <th>{{ Form::select('gender', ['male' => 'male', 'female' => 'female'], 'male') }}
                                    </th>
                                </tr>
                                <tr>
                                    <th>DOB</th>
                                    <th>{{Form::input('text', 'profile_dob', NULL, ['placeholder' => 'Enter like January 1 1999'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>DOB in Vietnamese </th>
                                    <th>{{Form::input('text', 'profile_dob_v', NULL, ['placeholder' => 'Enter like Ngày 1 tháng 1 năm 1999'])}}
                                    </th>
                                <tr>
                                    <th>POB</th>
                                    <th>{{Form::input('text', 'profile_pob', NULL)}}</th>
                                <tr>
                                    <th>POB in Vietnamese</th>
                                    <th>{{Form::input('text', 'profile_pob_v', NULL)}}</th>
                                <tr>
                                <tr>
                                    <th>Nationality </th>
                                    <th>{{Form::input('text', 'profile_nationality', NULL)}}</th>
                                <tr>
                                <tr>
                                    <th>Ethnicity</th>
                                    <th>{{Form::input('text', 'profile_ethnicity', NULL)}}</th>
                                <tr>
                                <tr>
                                    <th>Email</th>
                                    <th>{{Form::input('text', 'profile_email', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <th>{{Form::input('text', 'profile_phoneNumber', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>Martial Status</th>
                                    <th>{{ Form::select('martialStatus', ['single' => 'single', 'married' => 'married'], 'single') }}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Address</th>
                                    <th>{{Form::input('text', 'profile_address', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>City</th>
                                    <th>{{Form::input('text', 'profile_city', NULL)}}</th>
                                </tr>
                                <tr>
                                    <th>Country</th>
                                    <th>{{Form::input('text', 'profile_country', NULL)}}</th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register Profile', ['class' => 'btn btn-primary'])}}
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
