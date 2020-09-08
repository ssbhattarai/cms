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
                        <th scope="row">Joined date </th>
                        <td>{{ $user->date_of_join }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Last Loged in </th>
                        <td>{{ $user->login_date }}</td>
                      </tr>
                      <tr>
                        <th scope="row">Last Loged ip </th>
                        <td>{{ $user->last_login_ip }}</td>
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






