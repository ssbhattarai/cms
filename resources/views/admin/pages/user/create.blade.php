
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
    <form class="mt-3">
        <div class="row m-3">
            <div class=" offset-sm-1 col-sm-5">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" class="form-control" id="name"placeholder="Enter Name" name="name">
                </div>
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div> 
            </div>
            <div class="col-sm-6">
                <div class="form-group">
                    <label for="email">Password</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div> 
                  <div class="form-group">
                    <label for="email">Confirm Password address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                  </div>      
            </div>
        </div>
        <div class="form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


@include('admin.layouts.footer')
