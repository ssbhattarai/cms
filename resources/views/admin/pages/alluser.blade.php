@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container mt-5">
        <table class="table table-striped table-bordered mr-3" id="table" style="width:100%">
            <thead>
                <tr>
                    <th class="font-weignt-bold">#</th>
                    <th class="font-weignt-bold">Name</th>
                    <th class="font-weignt-bold">Email</th>
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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->name }}</td>
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

@include('admin.layouts.footer')



<script>
    $(document).ready(function() {
      $('#table').DataTable();
  } );
   </script>