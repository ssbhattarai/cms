<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
<div class="content-wrapper">
    <div class="container">
        <div class="card m-1 mb-2">
            <div class="card-header">
                <h1 class="text-center font-weight-bold">COllege Name</h1>
                <h4 class="text-center font-weight-normal">Imadol-4, Lalitpur</h4>
                <div class="table-responsive mt-3">
                <table class="table table-striped">
                    <tbody>
                      <tr>
                        <th scope="row">Full Name </th>
                        <td>{{ $student->name }}</td>
                      </tr>
                      </tr>
                      <tr>
                        <th scope="row">Email </th>
                        <td>{{ $student->email }}</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">Symbol Number </th>
                        <td>{{ $student->roll_number }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Gender </th>
                        <td>{{ $student->gender}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Religion </th>
                        <td>{{ $student->religion}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Caste</th>
                        <td>{{ $student->cast }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Permanent Address</th>
                        <td>{{ $student->permanent_full_address }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Current Address</th>
                        <td>{{ $student->current_full_address }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Phone Number</th>
                        <td>{{ $student->phone_number }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Admission Date</th>
                        <td>{{ $student->admission_date }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Previous College Name</th>
                        <td>{{ $student->passed_college_name }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Passed Year</th>
                        <td>{{ $student->passed_year }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Marks Obtained (in %)</th>
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






