<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 12px;
    }

    .current {
        margin-top: 100px;
        text-align: right;
        font-style: normal;
    }

    .title {
        text-align: center;
        font-style: normal;
    }

    .table1 {
        margin-left: 70px;
    }

    .ending {
        text-align: right;
        font-style: normal;
    }
    </style>
</head>

<body>
    <h2 class="title">ATTESTATION LETTER</h2>
    <h4 style="margin-left:70px; font-style: normal;">University of Science and Technology of Hanoi hereby certify that
    </h4>
    <table class="table1">
        <tr>
            <td>Name:</td>
            <td>{{$profile->fullName}}</td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>{{$profile->gender}}</td>
        </tr>
        <tr>
            <td>Date of birth:</td>
            <td>{{$profile->DOB}}</td>
        </tr>
        <tr>
            <td>Place of birth:</td>
            <td>{{$profile->POB}}</td>
        </tr>
        <tr>
            <td>Nationality:</td>
            <td>{{$profile->Nationality}}</td>
        </tr>
        <tr>
            <td>Degree:</td>
            <td>Bachelor (full-time)</td>
        </tr>
        <tr>
            <td>Major:</td>
            <td>{{$major->MajorName}}</td>
        </tr>
        <tr>
            <td>Grade:</td>
            <td>{{$diploma->ranking}}</td>
        </tr>
        <tr>
            <td>Year of graduation:</td>
            <td>{{$diploma->graduationYear}}</td>
        </tr>
        <tr>
            <td>Serial number:</td>
            <td>{{$diploma->diplomaNumber}}</td>
        </tr>
        <tr>
            <td>Reference number:</td>
            <td>{{$diploma->diplomaNote}}</td>
        </tr>
    </table>
    <h4 style="margin-left:70px; font-style: normal;">
        and English is the sole language of all courses and programs at University of Science and Technology of Hanoi.
    </h4>
    <h4 class="ending">P.P REACTOR</h4>
    <h4 class="ending">VICE DIRECTOR</h4>
    <br><br>
    <h4 class="ending">Nguyễn Hải Đăng
</body>

</html>
