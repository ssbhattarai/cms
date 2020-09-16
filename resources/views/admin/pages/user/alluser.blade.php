@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <nav aria-label="breadcrumb" class="m-3">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/admin"> <img src="{{ asset('icons/dashboard.png') }}" alt="dashboard-icon">&nbsp; Dashboard</a></li>
          <li class="breadcrumb-item active" aria-current="page"> <i class="fa fa-users"></i> &nbsp;Users</li>
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
            <div class="btn-group" role="group">
                <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Export
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                  <a class="dropdown-item" href="{{ route('users.exportexcel') }}">
                    <i class="far fa-file-excel"></i>
                    &nbsp;
                    Excel Export</a>
                  <a class="dropdown-item" href="{{ route('users.exportcsv')}}">
                    <i class="fas fa-file-csv"></i>
                    &nbsp;
                      CSV
                    </a>

                    {{-- <a class="dropdown-item" href="#">
                        <i class="far fa-file-pdf"></i>
                        &nbsp;
                          PDF
                    </a> --}}
                </div>
              </div>
          </div>
      </div>
    <div class="container mt-5">
      @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
      </div>
        @endif
        <div class="table-responsive">
        <table class="table table-striped table-bordered mr-3" id="table" style="width:100%">
            <thead>
                <tr class="">
                    <th class="font-weignt-bold">#</th>
                    <th class="font-weignt-bold">Name</th>
                    <th class="font-weignt-bold">Email</th>
                    <th class="font-weignt-bold">Status</th>
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
                        <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="Disable" {{ $item->status ? 'checked' : '' }} data-size="small">
                     </td>
                    <td>
                        @if(!empty($item->getRoleNames()))
                        @foreach($item->getRoleNames() as $v)
                        <label class="badge badge-success">{{ $v }}</label>
                        @endforeach
                        @endif
                    </td> 
                    
                    <td>
                    <a href="{{ route('users.show', $item->id) }}">
                      <button type="button" class="btn btn-primary  btn-sm">
                        <i class="fas fa-eye"></i>
                      </button>
                  </a>
                
                <a class="btn btn-secondary btn-sm" href="{{ route('users.pdf', $item->id) }}"> 
                  <i class="fas fa-file-pdf"></i>
                </a>
        @if ( $role = Auth::user()->roles->pluck('name'))
                @if ($role[0] == 'Admin')
                <a href="{{route('users.edit', $item->id)}}">
                  <button class="btn btn-info  btn-sm">
                     <i class="fa fa-edit"></i>
                  </button> 
                </a> 
                       <button class="btn btn-danger btn-flat btn-sm remove-user" data-id="{{ $item->id }}" data-action="{{ route('users.delete',$item->id) }}"> 
                        <i class="fa fa-trash"></i>
                      </button>

                

                    @endif
                @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Status</th>
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
        // $('#table').DataTable();

      $('#table').DataTable({
        "columnDefs": [
            { "searchable": false, "targets": 5 },
            { "searchable": false, "targets": 3 },
            { "orderable": false, "targets": 5}
        ]
       });
  } );


  $(function() {
    $('.toggle-class').change(function() {
        var status = $(this).prop('checked') == true ? 1 : 0; 
        var user_id = $(this).data('id'); 
         console.log(status);
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

  $("body").on("click",".remove-user",function(){
    var current_object = $(this);

    Swal.fire({
      title: 'Are you sure?',
      text: "You won't be able to revert this!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
      if (result.isConfirmed) {
        if (result) {
            var action = current_object.attr('data-action');
            var token = jQuery('meta[name="csrf-token"]').attr('content');
            var id = current_object.attr('data-id');

            $('body').html("<form class='form-inline remove-form' method='post' action='"+action+"'></form>");
            $('body').find('.remove-form').append('<input name="_method" type="hidden" value="delete">');
            $('body').find('.remove-form').append('<input name="_token" type="hidden" value="'+token+'">');
            $('body').find('.remove-form').append('<input name="id" type="hidden" value="'+id+'">');
            $('body').find('.remove-form').submit();
        }
        Swal.fire(
          'Deleted!',
          'Your file has been deleted.',
          'success'
        )
      }
    })
});
   </script>