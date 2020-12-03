@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit User Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>User Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'user_name', $user->username, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>User Type</th>
                                    <th>{{ Form::select('user_type', ['student' => 'student', 'admin' => 'admin'], $user->userType, ['class' => 'form-control']) }}
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <th>{{Form::password('password', ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update User', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>User Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'user_name', NULL , ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>User Type</th>
                                    <th>{{ Form::select('user_type', ['student' => 'student', 'admin' => 'admin'], NULL, ['class' => 'form-control']) }}
                                </tr>
                                <tr>
                                    <th>Password</th>
                                    <th>{{Form::password('password', ['class' => 'form-control', 'style' => 'width: 100%;'])}}</th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Register User', ['class' => 'btn btn-primary'])}}
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
