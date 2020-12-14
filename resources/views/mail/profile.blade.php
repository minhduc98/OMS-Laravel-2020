<p>Dear  {{ $details['company_name']}}</p>
<p>We would like to give you some information about the student</p>
<table>
    <tr>
        <td>Full name</td>
        <td>{{ $details['fullName']}}</td>
    </tr>
    <tr>
        <td>Student ID</td>
        <td>{{ $details['student_code']}}</td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>{{ $details['gender']}}</td>
    </tr>
    <tr>
        <td>Date of birth</td>
        <td>{{ $details['DOB']}}</td>
    </tr>
    <tr>
        <td>Place of birth</td>
        <td>{{ $details['POB']}}</td>
    </tr>
    <tr>
        <td>Nationality</td>
        <td>{{ $details['Nationality']}}</td>
    </tr>
    <tr>
        <td>Ethnicity</td>
        <td>{{ $details['Ethnicity']}}</td>
    </tr>
    <tr>
        <td>Student email</td>
        <td>{{ $details['Mail']}}</td>
    </tr>
    <tr>
        <td>Phone Number</td>
        <td>{{ $details['PhoneNumber']}}</td>
    </tr>
    <tr>
        <td>Martial Status</td>
        <td>{{ $details['MartialStatus']}}</td>
    </tr>
    <tr>
        <td>Address</td>
        <td>{{ $details['Address']}}</td>
    </tr>
</table>

<p>Thank you and best regard</p>
