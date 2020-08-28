
@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container">
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/admin/user">Users</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create user</li>
            </ol>
          </nav>
    
          <div class="card m-3">
              <div class="card-header">
                <h4 class="text-center">User Create</h4>
              </div>
          </div>
    </div>
</div>


@include('admin.layouts.footer')
