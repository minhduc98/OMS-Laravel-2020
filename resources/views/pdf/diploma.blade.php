<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    body {
        font-family: DejaVu Sans, sans-serif;
        font-size: 12px;
    }

    #watermark {
        position: fixed;
        top: 0px;
        left: 0px;
        width: 700px;
        height: 1050px;
        opacity: 0.6;
    }

    .table1 {
        margin-top: 580px;
        margin-left: 70px;
    }

    .note1 {
        margin-left: 120px;
    }

    .note2 {
        margin-left: 180px;
    }

    .QRcode {
        margin-top: 7px;
        margin-left: 70px;
    }
    </style>
</head>

<body>
    <!-- <div id="watermark"><img src="{{ url('/img/abc.jpg') }}" height="100%" width="100%"></div> -->
    <img src="data:image/png;base64, {!! $image !!}" id="watermark">
    <table class="table1">
        <tr>
            <td>Ngành</td>
            <td><b>{{ $major->MajorName }}</b></td>
        </tr>
        <tr>
            <td>In</td>
            <td><b>{{ $major->MajorName_v }}</b></td>
        </tr>
        <tr>
            <td>Xếp loại</td>
            <td><b>{{ $diploma->ranking_v }}</b></td>
        </tr>
        <tr>
            <td>Grade</td>
            <td><b>{{ $diploma->ranking }}</b></td>
        </tr>
        <tr>
            <td>Cho</td>
            <td><b>{{ $profile->fullName_v}}</b></td>
        </tr>
        <tr>
            <td>To</td>
            <td><b>{{ $profile->fullName}}</b></td>
        </tr>
        <tr>
            <td>Sinh ngày</td>
            <td><b>{{ $profile->DOB_v}}</b></td>
        </tr>
        <tr>
            <td>Born on</td>
            <td><b>{{ $profile->DOB}}</b></td>
        </tr>
        <tr>
            <td>Nơi sinh</td>
            <td><b>{{ $profile->POB_v}}</b></td>
        </tr>
        <tr>
            <td>Birthplace</td>
            <td><b>{{ $profile->POB}}</b></td>
        </tr>
        <tr>
            <td>Năm tốt nghiệp</td>
            <td><b>{{ $diploma->graduationYear}}</b></td>
        </tr>
        <tr>
            <td>Graduation Year</td>
            <td><b>{{ $diploma->graduationYear}}</b></td>
        </tr>
    </table>
    </div>
    <img src="data:image/png;base64, {!! $qrCode !!}" class="QRcode">
    <p class="note1"><b>{{ $diploma->diplomaNumber}}</b></p>
    <p class="note2"><b>{{ $diploma->diplomaNote}}</b></p>
</body>

</html>
