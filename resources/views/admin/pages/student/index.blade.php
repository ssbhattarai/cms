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
            <i class="fa fa-graduation-cap" aria-hidden="true"></i> All Students
            <h4 class="text-center">Student List</h4>
          <a href="{{ route('students.create') }}">
            <button class="btn btn-success float-right">
                Create &nbsp; <i class="fa fa-plus" aria-hidden="true"></i>
            </button></a>
          </div>
      </div>
  
    <div class="container mt-5">


      @if ($message = Session::get('success'))
          <div class="alert alert-success">
            <p>{{ $message }}</p>
      </div>
        @endif
        <div class="row">
          <div class="col-md-4 m-3">
            <form action="{{ route('users.search') }}" method="GET" class="form-inline">
              <div class="form-group">
                <input type="text" class="form-control" name="search" placeholder="Search ALL Fields" required value="{{  old('search') }}"> <br>
                <button class="btn btn-outline-info ml-1" type="submit">Search <i class="fa fa-search" aria-hidden="true"></i>
                </button>
                <a href="{{route('students.index')}}">
                 <button class="btn btn-light ml-1" type="button">Clear Search <i class="fas fa-times" syle="color: darkcyan;"></i> </button>
                </a>
              </div>
            </form>
          </div>
        </div>
        <div class="table-responsive">
        <table class="table table-striped table-bordered nowrap mr-3" id="example" style="width:100%">
            <thead>
                <tr class="">
                    <th class="font-weignt-bold">#</th>
                    <th class="font-weignt-bold">Name</th>
                    <th class="font-weignt-bold">Email</th>
                    <th class="font-weignt-bold">Symbol No.</th>
                    <th class="font-weignt-bold">Phone</th>
                    <th class="font-weignt-bold">Gender</th>
                    <th class="font-weignt-bold">P Address</th>
                    <th class="font-weignt-bold">C Address</th>
                    <th class="font-weignt-bold">Religion</th>
                    <th class="font-weignt-bold">Caste</th>
                    <th class="font-weignt-bold">Privious College Name</th>
                    <th class="font-weignt-bold">Passed Year</th>
                    <th class="font-weignt-bold">Marks (%)</th>
                    <th class="font-weignt-bold">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($students as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td> {{ $item->email }} </td>
                    <td> {{ $item->roll_number }} </td>
                    <td> {{ $item->phone_number }} </td>
                    <td> {{ $item->gender }} </td>
                    <td> {{ $item->permanent_full_address }}</td>
                    <td> {{ $item->current_full_address }} </td>
                    <td> {{ $item->religion }} </td>
                    <td> {{ $item->cast }} </td>
                    <td> {{ $item->passed_college_name }} </td>
                    <td> {{ $item->passed_year }} </td>
                    <td> {{ $item->marks_obtain }} </td>
                    
                    
              <td>
                   
                <a href="{{ route('students.show', $item->id )}}"> 
                    <button type="button" class="btn btn-primary btn-sm">
                    <i class="fas fa-eye"></i>
                    </button>
                </a>
              <a href="{{ route('students.edit', $item->id) }}">
                  <button class="btn btn-info btn-sm"> 
                    <i class="fa fa-edit"></i>
                  </button> 
                </a> 
       
        {{-- @if ( $role = Auth::user()->roles->pluck('name')) --}}
                {{-- @if ($role[0] == 'admin') --}}
                    <button class="btn btn-danger btn-flat btn-sm remove-student" data-id="{{ $item->id }}" data-action="{{ route('students.delete',$item->id) }}"> 
                      <i class="fa fa-trash"></i>
                    </button>
            <a class="btn btn-secondary btn-sm" href="{{ route('students.pdf', $item->id)}}"> <i class="fas fa-file-pdf"></i></a>

                    {{-- @endif --}}
                {{-- @endif --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                  <th class="font-weignt-bold">#</th>
                  <th class="font-weignt-bold">Name</th>
                  <th class="font-weignt-bold">Email</th>
                  <th class="font-weignt-bold">Symbol No.</th>
                  <th class="font-weignt-bold">Phone</th>
                  <th class="font-weignt-bold">Gender</th>
                  <th class="font-weignt-bold">P Address</th>
                  <th class="font-weignt-bold">C Address</th>
                  <th class="font-weignt-bold">Religion</th>
                  <th class="font-weignt-bold">Caste</th>
                  <th class="font-weignt-bold">Privious College Name</th>
                  <th class="font-weignt-bold">Passed Year</th>
                  <th class="font-weignt-bold">Marks (%)</th>
                  <th class="font-weignt-bold">Actions</th>
                </tr>
            </tfoot>
        </table>
        </div>
        </div>
</div>

@include('admin.layouts.footer')



<script>
    $(document).ready(function() {
      $('#example').DataTable({
        responsive: true,
        fixedHeader: true,
        dom: 'Bfrtip',
        lengthChange: false,

        buttons: [
           {
                extend: 'excel',
                title: 'Students Information',
                filename: 'Students',
                messageTop: 'COllege Of Information Technology And Engineering'
          },
       ],
        fixedHeader: {
        header: true,
        footer: false
    },
      scrollY:        "300px",
      scrollX:        true,
      scrollCollapse: true,
      paging:         true,
      fixedColumns:   {
          leftColumns: 2,
          rightColumns: 1
      },
      "columnDefs": [
            { "searchable": false, "targets": 7 },
            { "orderable": false, "targets": 7 },
            { "width": "18%", "targets": 7 }
        ]
       });
      //  table.buttons().container()
      //   .appendTo( '#example_wrapper .col-md-6:eq(1)' );
        
  } );


  $("body").on("click",".remove-student",function(){
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