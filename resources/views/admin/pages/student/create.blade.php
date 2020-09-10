
@include('admin.layouts.header')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.standalone.min.css" integrity="sha512-p4vIrJ1mDmOVghNMM4YsWxm0ELMJ/T0IkdEvrkNHIcgFsSzDi/fV7YxzTzb3mnMvFPawuIyIrHcpxClauEfpQg==" crossorigin="anonymous" />
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container">
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item"><a href="/admin/students">Students</a></li>
              <li class="breadcrumb-item active" aria-current="page">Create Student</li>
            </ol>
          </nav>
    
          <div class="card m-3">
              <div class="card-header">
                <h4 class="text-center">Student Create</h4>
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
    @if (count($users) > 0)
        
      <form method="POST" action="{{ route('students.store') }}">
        @csrf
      <div class="row m-3">
        <div class="offset-sm-1 col-sm-5">
            <div class="form-group">
                <label for="rollNumber">Roll Number</label>
                <input type="text" class="form-control {{ $errors->has('roll_number') ? 'is-invalid' : '' }}" id="rollNumber" placeholder="Roll Number" name="roll_number">
                @if ($errors->has('roll_number'))
                <span class="text-danger">{{ $errors->first('roll_number') }}</span>
                @endif
              </div>

              
            <div class="form-group">
                <label for="names">Student Name</label>
            <select class="js-example-basic-single form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" name="name" style="width: 100%">
                  <option value>Select Name</option>
                    @foreach ($users as $user)
                    <option>{{ $user->name }}</option>
                  @endforeach
                  </select>
                <small class="form-text text-muted">You Must Create a Student Login ID First</small>
                @if ($errors->has('name'))
              <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="email">Email address</label>
                <select class="js-example-basic-single form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" name="email" style="width: 100%">
                  <option value>Select Name</option>
                    @foreach ($users as $user)
                    <option>{{ $user->email }}</option>
                  @endforeach
                </select>
                <small class="form-text text-muted">You Must Create a Student Login ID First</small>
    
                @if ($errors->has('email'))
                          <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
              <div class="form-group">
                <label for="phone">Phone Number</label>
              <input type="text" class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}" id="phone" placeholder="Enter Phone" name="phone_number">
        
              @if ($errors->has('phone_number'))
                <span class="text-danger">{{ $errors->first('permanent_full_address') }}</span>
              @endif
        </div>

              <div class="form-group">
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
            </div>
              <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control {{ $errors->has('gender') ? 'is-invalid' : '' }}" id="gedner" name="gender">
                      <option value> Select Gender </option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                  </select>
    
                @if ($errors->has('gender'))
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="peraddress">Permanent Address</label>
              <input type="text" class="form-control {{ $errors->has('permanent_full_address') ? 'is-invalid' : '' }}" id="peraddress" placeholder="Enter Full Address" name="permanent_full_address">
        
              @if ($errors->has('permanent_full_address'))
                <span class="text-danger">{{ $errors->first('permanent_full_address') }}</span>
              @endif
        </div>
   </div>

        

          
        <div class="offset-sm-1 col-sm-5">
    <div class="form-group">
        <label for="curaddress">Current Address</label>
      <input type="text" class="form-control {{ $errors->has('current_full_address') ? 'is-invalid' : '' }}" id="curaddress" placeholder="Enter Full Address" name="current_full_address">

      @if ($errors->has('current_full_address'))
        <span class="text-danger">{{ $errors->first('current_full_address') }}</span>
      @endif
</div>
            <div class="form-group">
                <label for="religion">Religion</label>
                <select class="js-example-basic-single form-control {{ $errors->has('religion') ? 'is-invalid' : '' }}" name="religion" style="width: 100%">
                  <option value>Select religion</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddhist">Buddhist</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Others">Others</option>
                  </select>
                @if ($errors->has('religion'))
              <span class="text-danger">{{ $errors->first('religion') }}</span>
                @endif
              </div>

              <div class="form-group">
                <label for="caste">Caste</label>
                <select class="js-example-basic-single form-control {{ $errors->has('cast') ? 'is-invalid' : '' }}" name="cast" style="width: 100%">
                  <option value>Select cast</option>
                    <option value="Brahmin">Brahmin</option>
                    <option value="Chhetri">Chhetri</option>
                    <option value="Janajati">Janajati</option>
                    <option value="Others">Others</option>
                  </select>
                @if ($errors->has('cast'))
              <span class="text-danger">{{ $errors->first('cast') }}</span>
                @endif
            </div>
            <div class="form-group">
              <label for="college_name">Previous College Name</label>
              <input type="text" class="form-control {{ $errors->has('passed_college_name') ? 'is-invalid' : '' }}" id="college_name" placeholder="Enter College Name" name="passed_college_name">
      
              @if ($errors->has('passed_college_name'))
                <span class="text-danger">{{ $errors->first('passed_college_name') }}</span>
              @endif
          </div>
          <div class="form-group">
            <label for="passedyear">Passed Year</label>
            <input type="text" class="form-control {{ $errors->has('passed_year') ? 'is-invalid' : '' }}" id="passedyear" placeholder="Passed Year" name="passed_year">
    
            @if ($errors->has('passed_year'))
              <span class="text-danger">{{ $errors->first('passed_year') }}</span>
            @endif
        </div>

        <div class="form-group">
          <label for="obtainedMarks">Marks Obtained (in %)</label>
          <input type="text" class="form-control {{ $errors->has('marks_obtain') ? 'is-invalid' : '' }}" id="obtainedMarks" placeholder="Enter Marks" name="marks_obtain">
  
          @if ($errors->has('marks_obtain'))
            <span class="text-danger">{{ $errors->first('marks_obtain') }}</span>
          @endif
      </div>
            

          
          




         
        </div>
      </div>
      
        <button type="submit" class="btn btn-primary ml-10 btn-lg mb-4" style="margin-left: 41%;">Submit</button>
      </form>
    @endif
      {{-- @foreach ($users as $user) --}}
          @if ( count($users) <= 0 )
              <h6 class="text-warning m-3" > You Must Create a User Login For Student Student To create a new Student Details</h6>
          @endif
      {{-- @endforeach --}}
      </div>
</div>


@include('admin.layouts.footer')

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous"></script>
<script>
  $('.datepicker').datepicker({
    language: 'NP'
  });

  $(document).ready(function() {
    $('.js-example-basic-single').select2();
});
</script>