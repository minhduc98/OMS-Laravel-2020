@extends('layouts.app')

@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color:#337ab7">Edit Course Information </h1>
                <div class="panel-body">
                    <div class="row">
                        {{Form::open()}}
                        @if($id !='new')
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Course Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'course_name', $course->courseName, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Course Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'course_name_v', $course->courseName_v, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Course Code</th>
                                    <th>{{Form::input('text', 'course_code', $course->courseCode, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Summary</th>
                                    <th>{{Form::input('text', 'course_summary', $course->summary, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Total Hour</th>
                                    <th>{{Form::input('text', 'course_totalHour', $course->totalHour, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Lecture Hour</th>
                                    <th>{{Form::input('text', 'course_lectureHour', $course->lectureHour, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Lab Hour</th>
                                    <th>{{Form::input('text', 'course_labHour', $course->labHour, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>ECTS</th>
                                    <th>{{Form::input('text', 'ECTS', $course->ECTS, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <div style="margin-left: 100px">
                                {{Form::submit('Update Course', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                        @else
                        <div class='table-responsive'>
                            <table class="table table-bordered" border="1" style="width: 75%; margin-left: 100px">
                                <tr>
                                    <th>Year</th>
                                    <th>{{Form::select('year_id', $years, NULL, ['class' => 'form-control', 'id' => 'year', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Major</th>
                                    <th>
                                        <select class="form-control" id="major" name="major">

                                        </select>
                                    </th>
                                </tr>
                                <tr>
                                    <th>Course Name</th>
                                    <th>{{Form::hidden('text', $id)}}{{Form::input('text', 'course_name', NULL, ['class' => 'form-control', 'style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Course Name in Vietnamese </th>
                                    <th>{{Form::input('text', 'course_name_v', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Course Code</th>
                                    <th>{{Form::input('text', 'course_code', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Summary</th>
                                    <th>{{Form::input('text', 'course_summary', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Total Hour</th>
                                    <th>{{Form::input('text', 'course_totalHour', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Lecture Hour</th>
                                    <th>{{Form::input('text', 'course_lectureHour', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>Lab Hour</th>
                                    <th>{{Form::input('text', 'course_labHour', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                                <tr>
                                    <th>ECTS</th>
                                    <th>{{Form::input('text', 'ECTS', NULL, ['class' => 'form-control','style' => 'width: 100%;'])}}
                                    </th>
                                </tr>
                            </table>
                            <script src="{{ url('js/dependent_selection.js') }}"></script>

                            <div style="margin-left: 100px">
                                {{Form::submit('Register Course', ['class' => 'btn btn-primary'])}}
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
