@include('admin.layouts.header')
<link rel="stylesheet" href="{{ asset('css/formValidation.css') }}">

@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container">
        <h4>this is edit page of user</h4>
        <div class="form-container">

            <form id="form1" novalidate method="Post">
               @csrf
               <div class="form-group">
                   <label>Username (required)</label>
                   <input type="text" required data-pristine-required-message="Please choose a username" class="form-control"/>
               </div>
              
               <div class="form-group">
                   <label>ZIP code</label>
                   <input type="text" data-pristine-pattern="/^[0-9]{5}(?:-[0-9]{4})?$/" data-pristine-pattern-message="Invalid ZIP code" class="form-control" value="123"/>
               </div>
               
               <div class="form-group">
                   <label>Your age (required, min. 14)</label>
                   <input type="number" min="14" data-pristine-min-message="You must be at least 14-years-old" required class="form-control" value="10" />
               </div>
               <div class="form-group">
                   <label>Password (required)</label>
                   <input type="password" id="pwd"  data-pristine-pattern="/^[0-9]{5}(?:-[0-9]{4})?$/" required data-pristine-required-message="Please choose a password" data-pristine-pattern= "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9]).{8,}$/" data-pristine-pattern-message="Minimum 8 characters, at least one uppercase letter, one lowercase letter and one number" class="form-control" />
                 (see <a href="https://stackoverflow.com/questions/19605150" target="_blank">here</a> other password patterns.)
               </div>
               <div class="form-group">
                   <label>Retype password</label>
                   <input type="password" data-pristine-equals="#pwd" data-pristine-equals-message="Passwords don't match" class="form-control" />
               </div>
               <div class="form-group inline-label">
                   <input id="ch1" type="checkbox" name="future" required data-pristine-required-message="You must accept the terms and conditions"/>
                   <label for="ch1">I accept the terms  and conditions (required)</label><br/>
               </div>
               <div class="form-group">
                   <input type="submit" value="Submit" class="btn"/>
               </div>
            </form>
         </div>
    </div>
</div>




@include('admin.layouts.footer')



<script>
    var pristine;
window.onload = function () {

   var form = document.getElementById("form1");

   pristine = new Pristine(form);

   form.addEventListener('submit', function (e) {
      e.preventDefault();
      var valid = pristine.validate();
      //alert('Form is valid: ' + valid);

   });


};
</script>
