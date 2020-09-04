@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Roles</li>
        </ol>
      </nav>
      <div class="card m-3">
        <div class="card-header">
            <i class="fab fa-critical-role"></i> Roles
          <h4 class="text-center">Roles List</h4>

        <a href="{{ route('roles.create') }}">
          <button class="btn btn-success float-right">
              Create &nbsp; <i class="fa fa-plus" aria-hidden="true"></i>
          </button></a>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
            <h2>Role Management</h2>
            </div>
            <div class="pull-right">
            @can('role-create')
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            @endcan
            </div>
            </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
            <p>{{ $message }}</p>
            </div>
            @endif
            <table class="table table-bordered">
            <tr>
            <th>No</th>
            <th>Name</th>
            <th width="280px">Action</th>
            </tr>
            @foreach ($roles as $key => $role)
            <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $role->name }}</td>
            <td>
            {{-- <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a> --}}
            @can('role-edit')
            <a class="btn btn-primary" href="#">Edit</a>
            @endcan
            @can('role-delete')
            {{-- {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!} --}}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
            @endcan
            </td>
            </tr>
            @endforeach
            </table>
            {!! $roles->render() !!}
    </div>
</div>

@include('admin.layouts.footer')
