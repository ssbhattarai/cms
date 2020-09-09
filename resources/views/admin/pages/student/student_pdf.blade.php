<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="content-wrapper">
        <div class="card mb-2">
            <div class="card-header">
                <h2 class="text-center font-weight-bold" style="color: cadetblue">College Of Information Technology and Engineering</h2>
                <h4 class="text-center font-weight-normal" style="color: cadetblue">Tinkune, Lalitpur</h4>
                <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th scope="row">Full Name&nbsp;&nbsp;</th>
                        <td>{{ $student->name }}</td>
                      </tr>
                      </tr>
                      <tr>
                        <th scope="row">Email&nbsp;&nbsp;</th>
                        <td>{{ $student->email }}</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">Symbol Number&nbsp;&nbsp;</th>
                        <td>{{ $student->roll_number }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Gender&nbsp;&nbsp;</th>
                        <td>{{ $student->gender}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Religion&nbsp;&nbsp;</th>
                        <td>{{ $student->religion}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Caste&nbsp;&nbsp;</th>
                        <td>{{ $student->cast }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Permanent Address&nbsp;&nbsp;</th>
                        <td>{{ $student->permanent_full_address }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Current Address&nbsp;&nbsp;</th>
                        <td>{{ $student->current_full_address }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Phone Number&nbsp;&nbsp;</th>
                        <td>{{ $student->phone_number }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Admission Date&nbsp;&nbsp;</th>
                        <td>{{ $student->admission_date }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Previous College Name&nbsp;&nbsp;</th>
                        <td>{{ $student->passed_college_name }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Passed Year&nbsp;&nbsp;</th>
                        <td>{{ $student->passed_year }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Marks Obtained (%)&nbsp;&nbsp;</th>
                        <td>{{ $student->marks_obtain }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>






