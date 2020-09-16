@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin"><a href="/admin"><img src="{{ asset('icons/dashboard.png') }}" alt="dashboard-icon">&nbsp;Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/admin/students">Students</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $student->name }}</li>
        </ol>
      </nav>
    <div class="container">
        <div class="card m-1 mb-2">
            <div class="card-header">
              <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="{{ route('students.pdf', $student->id) }}"> <i class="fas fa-file-pdf"></i> &nbsp; Export to PDF</a>
            </div>
            <h2 class="text-center font-weight-bold" style="color: cadetblue">College Of Information Technology and Engineering</h2>
            <h4 class="text-center font-weight-normal" style="color: cadetblue">Tinkune, Lalitpur</h4>
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

@include('admin.layouts.footer')








