
@include('admin.layouts.header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css" integrity="sha512-p4vIrJ1mDmOVghNMM4YsWxm0ELMJ/T0IkdEvrkNHIcgFsSzDi/fV7YxzTzb3mnMvFPawuIyIrHcpxClauEfpQg==" crossorigin="anonymous" />
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
            <input type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="name" placeholder="Enter Name" name="name" value="{{ old('name') }}">
            @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" placeholder="Enter email" name="email" value="{{ old('email') }}">
            @if ($errors->has('email'))
                      <span class="text-danger">{{ $errors->first('email') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="roles">Select Role</label>
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
          <small id="passwordHelpBlock" class="form-text text-muted">
            Password must contain at least 6 characters, numbers and both uppercase and lowercase letters and one Special Character.
          </small>
          @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
          @endif
          </div>
          <div class="form-group">
            <label for="confirmPassword">Confirm Password</label>
            <input type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="confirmPassword" placeholder="Confirm Password" name="confirm_password">
            
          </div>
          {{-- <div class="form-group">
        <label for="dob">Date Of Birth</label>
      <div class="input-group">
        <div class="input-group-prepend">
          <span class="input-group-text" id="dob">
            <i class="far fa-calendar-alt"></i>
          </span>
        </div>
           <input type="text" class="form-control {{ $errors->has('dob') ? 'is-invalid' : '' }}" 
           data-date-format="yyyy/mm/dd"
           data-provide="datepicker" placeholder="Date Of Birth"
           name="dob"
           autocomplete="off"
           >
           @if ($errors->has('dob'))
            <span class="text-danger">{{ $errors->first('dob') }}</span>
           @endif
      </div>
    </div> --}}




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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script>
  $('.datepicker').datepicker({
    language: 'NP'
  });
</script>