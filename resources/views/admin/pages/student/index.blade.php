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
        <table>
          <tr>
            <td>
              <input type='text' class="form-control" id='searchByName' placeholder='Enter name'>
            </td>
            <td>
              <select id='searchByGender' class="form-control">
                <option value=''>-- Select Gender--</option>
                <option value='Male'>Male</option>
                <option value='Female'>Female</option>
                <option value='Other'>Others</option>
              </select>
            </td>
          </tr>
        </table>
     
        <div class="table-responsive">
        <table class="table table-striped table-bordered mr-3" id="table" style="width:100%">
            <thead>
                <tr class="">
                    <th class="font-weignt-bold">#</th>
                    <th class="font-weignt-bold">Name</th>
                    <th class="font-weignt-bold">Email</th>
                    <th class="font-weignt-bold">Symbol No.</th>
                    <th class="font-weignt-bold">P Address</th>
                    <th class="font-weignt-bold">C Address</th>
                    <th class="font-weignt-bold">Phone</th>
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
                    <td> {{ substr($item->permanent_full_address, 0,  10)."..." }} </td>
                    <td> {{ substr($item->current_full_address, 0, 10)."..." }} </td>
                    <td> {{ $item->phone_number }} </td>
                    
                    
              <td>
                   
                <a href="{{route('students.show', $item->id)}}"> 
                    <button type="button" class="btn btn-primary">
                    <i class="fas fa-eye"></i>
                    </button>
                </a>
    <a href="#"><button class="btn btn-info"> <i class="fa fa-edit"></i></button> </a> 
       
        {{-- @if ( $role = Auth::user()->roles->pluck('name')) --}}
                {{-- @if ($role[0] == 'admin') --}}
                    <button class="btn btn-danger"> <i class="fa fa-trash"></i></button>
            <a class="btn btn-secondary" href="{{ route('students.pdf', $item->id)}}"> <i class="fas fa-file-pdf"></i></a>

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
                    <th>Symbol No.</th>
                    <th>P Address</th>
                    <th>C Address</th>
                    <th>Phone</th>
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

        // dom: 'Pfrtip',
      $('#table').DataTable({

        "columnDefs": [
            { "searchable": false, "targets": 7 },
            { "orderable": false, "targets": 7 },
            { "width": "21%", "targets": 7 }
        ]
       });

  } );

   </script>