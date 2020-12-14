@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Guess Access </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open(['method' => 'GET', 'action' => 'GuessController@send'])}}
                        <h2>Please fill in this form</h2>
                        <div class="form-group row">
                            <label for="company_name" class="col-md-2 col-form-label text-md-right">Company Name</label>
                            {{Form::input('text', 'company_name', NULL, ['class' => 'form-control', 'style' => 'width: 30%;'])}}
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-md-2 col-form-label text-md-right">Email</label>
                            {{Form::email('mail', NULL,  ['class' => 'form-control', 'style' => 'width: 30%'])}}
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-2 col-form-label text-md-right">Student Name</label>
                            {{Form::select('name', $profiles, NULL, ['class' => 'form-control', 'style' => 'width: 30%'])}}
                        </div>
                        {{Form::submit('Access', ['class' => 'btn btn-danger'])}}
                    </div>

                    </form>
                </div>
                <!-- notification panel end -->
            </div>
        </div>
    </div>
</div>

</div>
@endsection
