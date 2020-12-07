@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Import Diploma Information </h1>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    {{Form::open(['files' => true])}}
                                    <i style="color:#337ab7" class="fa fa-group fa-fw"></i>Choose an excel file to import
                                    {{Form::file('file', ['class' => 'disnon', 'id' => 'input-file-xlsx', 'accept' => '.xlsx'])}}
                                    <br>
                                    <div>
                                        {{Form::submit('Import File', ['class' => 'btn btn-primary'])}}
                                    </div>
                                    {{Form::close()}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('/js/import_csv.js') }}"></script>
@endsection
