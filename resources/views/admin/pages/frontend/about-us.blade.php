@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')

<div class="content-wrapper">
    <div class="container mt-5">
        <nav aria-label="breadcrumb" class="m-3">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
          </nav>
          
        <h4 class="text-center mt-3">About us</h4>

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
    <form method="post" action = "{{ route('aboutus.store')}}">
        @csrf
            <textarea id="mytextarea" name="about_us">
                {{ $getAboutus->about_us }}
            </textarea>
            <button type="submit" class="btn btn-primary btn-lg mt-3 align-content-center" style="border-radius: 20px;">Create <i class="fa fa-plus"></i></button>
        </form>
    </div>
</div>




@include('admin.layouts.footer')


<script>
    tinymce.init({
      selector: '#mytextarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
  </script>