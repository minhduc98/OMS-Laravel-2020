@extends('layouts.app')

@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['corechart']
    });
    google.charts.setOnLoadCallback(drawPieChart);
    google.charts.setOnLoadCallback(drawBarChart);

    function drawPieChart() {

         /* Prepare data for Pie chart */
        var data_pob = {!! json_encode($category_POB) !!}

        var array1 = [];

        for (var i = 0; i < data_pob.length; i++) {
            array1[i] = data_pob[i];
        }

        var num = {!! json_encode($time_POB) !!}

        var array2 = [];

        for (var i = 0; i < num.length; i++) {
            array2[i] = num[i];
        }

        var dataArray = [
            ['Place of Birth', 'Number of Students']
        ];

        for (let i = 0; i < array2.length; i++) {
            dataArray.push([array1[i], array2[i]]);
        }

        var data = google.visualization.arrayToDataTable(dataArray);

        var options = {
            title: 'Place of birth of bachelor students in USTH',
            titleTextStyle: {
                color: '#008000',
                fontName: 'Arial',
                fontSize: 18
            },
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
    }

    function drawBarChart() {

        /* Prepare data for bar chart */

        var data_ranking = {!! json_encode($category_ranking) !!}

        var array1 = [];

        for (var i = 0; i < data_ranking.length; i++) {
            array1[i] = data_ranking[i];
        }

        var num = {!! json_encode($time_ranking) !!}

        var array2 = [];

        for (var i = 0; i < num.length; i++) {
            array2[i] = num[i];
        }

        var dataArray = [
            ['Ranking', 'Number of Students']
        ];

        for (let i = 0; i < array2.length; i++) {
            dataArray.push([array1[i], array2[i]]);
        }

        var data = google.visualization.arrayToDataTable(dataArray);

        var options = {
            title: 'Ranking of students in USTH',
            titleTextStyle: {
                color: '#008000',
                fontName: 'Arial',
                fontSize: 18
            },
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart1'));
        chart.draw(data, options);
    }
</script>
<div id="page-wrapper">
    <div class="container-fluid">

        <div class="row">

            <div class="col-lg-12">
                <h2 class="page-header" style="color:#337ab7; padding-right: 20px; font-size: 18px;"><span
                        style="margin-right: 50px; font-size: 28px;">USTH Home Dashboard</span>Statistics</h2>
                <div class="panel-body">
                    <div class="row" style="display: flex;">
                        <div id="piechart" style="width: 900px; height: 500px;"></div>
                        <div id="piechart1" style="width: 900px; height: 500px;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
