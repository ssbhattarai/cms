
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
    <div class="row m-3">
      <div class="col-lg-12 margin-tb">
      {{-- <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div> --}}
      </div>
      </div>
  
      <form method="POST" action="{{ route('users.store') }}">
        @csrf
      <div class="row m-3">
        <div class="offset-sm-1 col-sm-5">
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Enter Name" name="name">
            @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="email" placeholder="Enter email" name="email">
            @if ($errors->has('name'))
                      <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="roles">Example multiple select</label>
            <select multiple class="form-control {{ $errors->has('roles') ? 'is-invalid' : '' }}" id="roles" name="roles">
              @foreach ($roles as $role)
                <option>{{ $role }}</option>
              @endforeach
            </select>
            @if ($errors->has('roles'))
          <span class="text-danger">{{ $errors->first('roles') }}</span>
            @endif
          </div>
        </div>
        <div class="offset-sm-1 col-sm-5">
          <div class="form-group">
            <label for="password">Password</label>
          <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" placeholder="Enter Password" name="password">
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="confirmPassword" placeholder="Confirm Password" name="confirm_password">
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="status" name="status">
            <label class="form-check-label" for="status"> User Status</label>
          </div>
        </div>
      </div>
        <button type="submit" class="btn btn-primary ml-10 btn-lg mb-4" style="margin-left: 41%;">Submit</button>
      </form>
      </div>
</div>


@include('admin.layouts.footer')
