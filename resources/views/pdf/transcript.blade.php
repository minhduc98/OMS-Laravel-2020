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
        text-align: right;
    }

    .title {
        text-align: center;
    }

    .title1 {
        text-align: center;
        margin-left: 100px;
    }

    .table1 {
        border: 1px solid black;
        border-collapse: collapse;
    }

    .tb1 {
        font-size: larger;
    }


    .ending {
        text-align: right;
    }
    </style>
</head>

<body>
    <table>
        <tr>
            <td class="title">
                <p class="title">VIETNAM ACADEMY OF SCIENCE AND TECHNOLOGY</p>
                <p class="title">UNIVERSITY OF SCIENCE AND TECHNOLOGY OF HANOI</p>
                <p class="title">VIỆN HÀN LÂM KHOA HỌC VÀ CÔNG NGHỆ VIỆT NAM</p>
                <p class="title">TRƯỜNG ĐẠI HỌC KHOA HỌC VÀ CÔNG NGHỆ HÀ NỘI</p>
                <p class="title">_________***_________</p>
            </td>
            <td class="title1">
                <p class="title">SOCIALIST REPUBLIC OF VIETNAM</p>
                <p class="title">Independence - Freedom - Happiness</p>
                <p class="title">CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</p>
                <p class="title">Độc lập - Tự do - Hạnh phúc</p>
                <p class="title">_________***_________</p>
            </td>
        </tr>
    </table>
    <h1 class="title">ACADEMIC TRANSCRIPT</h1>
    <h2 class="title">CHỨNG NHẬN KẾT QUẢ HỌC TẬP</h2>
    <table>
        <tr>
            <td class="tb1"><b>Full name (Họ và tên)</b></td>
            <td class="tb1">{{$profile->fullName_v}}</td>
        </tr>
        <tr>
            <td class="tb1"><b>Student ID (Mã sinh viên)</b></td>
            <td class="tb1">{{$student->student_code}}</td>
        </tr>
        <tr>
            <td class="tb1"><b>Date of birth (Ngày, tháng, năm sinh)</b></td>
            <td class="tb1">{{$profile->DOB_v}}</td>
        </tr>
        <tr>
            <td class="tb1"><b>Type of training (Loại hình đào tạo)</b></td>
            <td class="tb1">Full - time of Bachelor (Cử nhân chính quy)</td>
        </tr>
        <tr>
            <td class="tb1"><b>Major (Ngành học)</b></td>
            <td class="tb1">{{$major->MajorName}} ({{$major->MajorName_v}})</td>
        </tr>
        <tr>
            <td class="tb1"><b>Academic Year (Năm học)</b></td>
            <td class="tb1">{{$year->year}}</td>
        </tr>
        <tr>
            <td class="tb1"><b>Language of Training (Ngôn ngữ đào tạo)</b></td>
            <td class="tb1">English (Tiếng Anh)</td>
        </tr>
    </table>
    <table class="table1" style="width:100%;">
        <thead class="table1">
            <tr class="table1">
                <td class="table1"><b>STT / No.</b></td>
                <td class="table1"><b>Mã học phần / Course code</b></td>
                <td class="table1"><b>Tên học phần / Courses</b></td>
                <td class="table1"><b>Số tín chỉ / ECTS credit</b></td>
                <td class="table1"><b>Thang điểm USTH / USTH Grade</b></td>
                <td class="table1"><b>Thang điểm ECTS / ECTS Grade</b></td>
                <td class="table1"><b>Hoàn thành / Validation</b></td>
            </tr>
        </thead>
        @for ($i=0; $i<$count; $i++)
        <tr class="table1">
            <td class="table1">{{$courses[$i]->id}}</td>
            <td class="table1">{{$courses[$i]->courseCode}}</td>
            <td class="table1">{{$courses[$i]->courseName}} ({{$courses[$i]->courseName_v}})</td>
            <td class="table1">{{$courses[$i]->ECTS}}</td>
            <td class="table1">{{$courses[$i]->final}}</td>
            <td class="table1">{{$ECTSgrades[$i]}}</td>
            <td class="table1">{{$completes[$i]}}</td>
        </tr>
        @endfor
        <tr class="table1">
            <td></td>
            <td></td>
            <td></td>
            <td><b>Summary</b></td>
            <td></td>
            <td class="table1"><b>{{$totalECTS}}</b></td>
            <td class="table1"><b>{{$average}}</b></td>
        </tr>;
    </table>
    <h4 class="current">Hanoi, {{$currentDate}}</h4>
    <h4 class="ending">P.P REACTOR / KT. HIỆU TRƯỞNG</h4>
    <h4 class="ending">VICE RECTOR / PHÓ HIỆU TRƯỞNG</h4>
    <h6 class="ending"> (Signature and full name/ Ký và ghi rõ họ tên)</h6>
    <br><br>
    <h4 class="ending">Nguyễn Hải Đăng </h4>
</body>
