<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 7 PDF Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
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
                        <td>{{ $user->name }}</td>
                      </tr>
                      <tr>
                        <th scope="row"> Role </th>
                        <td><span class="badge badge-info">{{ $user->roles->pluck('name')->first() }}</span></td>
                      </tr>
                      <tr>
                        <th scope="row"> Status </th>
                       <td>
                        @if ($user->status == true)
                        <span class="badge badge-success">Active</span>
                    @else
                        <span class="badge badge-success">Disable</span>
                    @endif
                </td> 
                      </tr>
                      <tr>
                        <th scope="row">Email </th>
                        <td>{{ $user->email }}</td>
                      </tr>
                      
                      <tr>
                        <th scope="row">Phone Number </th>
                        <td>{{ $user->mobile_number }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Date Of Birth </th>
                        <td>{{ \Carbon\CarbonImmutable::parse($user->dob)->isoFormat('Do MMMM YYYY') }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Joined date </th>
                        <td>{{ $user->date_of_join }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Last Loged in </th>
                        <td>{{ \Carbon\CarbonImmutable::parse($user->login_date)->isoFormat('Do MMMM YYYY')}}</td>
                      </tr>
                      <tr>
                        <th scope="row">Last Loged in </th>
                        <td>{{ $user->last_login_ip }}</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/app.js') }}" type="text/js"></script>
</body>

</html>






