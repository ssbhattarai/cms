@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page">Users</li>
        </ol>
      </nav>

      <div class="card m-3">
          <div class="card-header">
            <i class="fa fa-users"></i> All Users
            <h4 class="text-center">User List</h4>
          <a href="{{ route('users.create') }}">
            <button class="btn btn-success float-right">
                Create &nbsp; <i class="fa fa-plus" aria-hidden="true"></i>
            </button></a>
          </div>
      </div>
    <div class="container mt-5">
        <div class="table-responsive">
        <table class="table table-striped table-bordered mr-3" id="table" style="width:100%">
            <thead>
                <tr class="">
                    <th class="font-weignt-bold">#</th>
                    <th class="font-weignt-bold">Name</th>
                    <th class="font-weignt-bold">Email</th>
                    <th class="font-weignt-bold">Created At</th>
                    <th class="font-weignt-bold">Role</th>
                    <th class="font-weignt-bold">Actions</th>
                    

                </tr>
            </thead>
            <tbody>
                @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td> {{ $item->email }} </td>
                    <td>
                        <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Disable" {{ $item->status ? 'checked' : '' }}>
                     </td>
                    <td>
                        @if(!empty($item->getRoleNames()))
                        @foreach($item->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </td> 
                    
                    <td>
                        {{-- <button class="edit-modal btn btn-info"
            data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$item->id}},{{$item->first_name}},{{$item->last_name}},{{$item->email}},{{$item->gender}},{{$item->country}},{{$item->salary}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button> --}}

                <button class="btn btn-info"> <i class="fa fa-edit"></i></button>
       
        {{-- @if ( $role = Auth::user()->roles->pluck('name')) --}}
                {{-- @if ($role[0] == 'admin') --}}
                    <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>
                    {{-- @endif --}}
                {{-- @endif --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
        </div>
        </div>
</div>

@include('admin.layouts.footer')



<script>
    $(document).ready(function() {
      $('#table').DataTable({
        "columnDefs": [
            { "searchable": false, "targets": 4 },
            { "orderable": false, "targets": 4 }
        ]
      });
  } );


  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         
        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route('user.status')}}',
            data: {'status': status, 'user_id': user_id},
            success: function(data){
              console.log(data.success)
            }
        });
    })
  })
   </script>