@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"><a href="/admin/user">Users</a></li>
        <li class="breadcrumb-item active" aria-current="page">{{ $user->name }}</li>
        </ol>
      </nav>
    <div class="container">
        <div class="card m-1 mb-2">
            <div class="card-header">
              <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-primary" href="{{ route('users.pdf', $user->id) }}">Export to PDF</a>
            </div>
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

@include('admin.layouts.footer')








