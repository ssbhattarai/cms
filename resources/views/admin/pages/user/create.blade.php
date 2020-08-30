
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
      <div class="pull-left">
      <h2>Create New User</h2>
      </div>
      <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
      </div>
      </div>
      </div>
      @if (count($errors) > 0)
      <div class="alert alert-danger">
      <strong>Whoops!</strong> There were some problems with your input.<br><br>
      <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
      </ul>
      </div>
      @endif
      {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
      <div class="row m-3">
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Name:</strong>
      {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Email:</strong>
      {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Password:</strong>
      {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Confirm Password:</strong>
      {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
      <strong>Role:</strong>
      {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
      </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </div>
      {!! Form::close() !!}
      <p class="text-center text-primary"><small>Tutorial by rscoder.com</small></p>
</div>


@include('admin.layouts.footer')
