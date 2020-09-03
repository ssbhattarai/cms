@include('frontend.layouts.header')
@include('frontend.layouts.nav')


<div class="mt-20">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container">
          <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
        </ol>
    </nav>
    <div class="container mt-5">
      <div class="row">
        <div class="offset-1 col-sm-5">
          <h2 class="text-center font-weight-bold">Get in Touch</h2>
          <div class="aerrow mb-3"></div>
          @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

         

          <form method="POST" action="" id="contact_us">
            <span id="errors" style="color: red;" class="font-weight-bold"></span>
            @csrf
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="email" name="email">
              @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="fullname">Full Name</label>
              <input type="text" class="form-control @error('full_name') is-invalid @enderror" id="fullname" name="full_name">
              @if ($errors->has('full_name'))
                <span class="text-danger">{{  $errors->first('full_name') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="Phonenumber">Phone Number</label>
              <input type="number" class="form-control @error('phone_no') is-invalid @enderror" id="Phonenumber" name="phone_no">
              @if ($errors->has('phone_no'))
                  <span class="text-danger">{{ $errors->first('phone_no') }}</span>
              @endif
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea class="form-control @error('message') is-invalid @enderror"" id="message" rows="3" name="message"></textarea>
              @if ($errors->has('message'))
                  <span class="text-danger">{{ $errors->first('message') }}</span>
              @endif
            </div>
            
            <button type="submit" class="btn btn-primary text-center" id="send_form">Submit</button>
          </form>
        </div>
        <div class="offset-1 col-sm-5 mt-5 text-center">
          <strong>College name</strong> <br>
          <p>Imadol Lalitput</p>
          <p>981234567,&nbsp; 123456789</p>
          <p>nascentsurya@gmail.com</p>
        </div>
      </div>
    </div>
</div>

@include('frontend.layouts.footer')


<script>
  $(document).ready(function(){
    $('#send_form').click(function(e){
      e.preventDefault();
      console.log("you clicled me");

      $('#send_form').html('sending...');

      $.ajax({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        url: "{{ url('contact/form') }}",
        method: 'post',
        data: $('#contact_us').serialize(),
        success: function(response ) {
            $('#send_form').html('Submitted');
            $("#send_form").attr("disabled", true);
            document.getElementById("contact_us").reset();
        },
        error: function (data) {
                var errors = data.responseJSON;
                $('#errors').html("Validation Error !!");
                $('#send_form').html('Submit');
            }
      });
    });
  });



</script>