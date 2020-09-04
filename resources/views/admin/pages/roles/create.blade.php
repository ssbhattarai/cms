@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container">
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/admin/roles">Roles</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Rple</li>
            </ol>
          </nav>
    
          <div class="card m-3">
              <div class="card-header">
                <h4 class="text-center">Create New Role</h4>
              </div>
          </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
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
                {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
            <div class="row">
            <div class="offset-sm-1 col-sm-5">

            <div class="form-group">
                <strong>Role Name:</strong>
                {!! Form::text('name', null, array('placeholder' => 'Enter New Role','class' => 'form-control')) !!}
            </div>

            </div>
            {{-- DONT DELETE IT --}}

            {{-- IN Here We can Fetch give the user permissions --}}
            {{-- <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
            <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
            {{ $value->name }}</label>
            <br/>
            @endforeach
            </div>
            </div> --}}

            {{-- DONT DELETE IT --}}

            <div class="offset-sm-1 col-sm-6">
            <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </div>
            {!! Form::close() !!}
    </div>
</div>

@include('admin.layouts.footer')
