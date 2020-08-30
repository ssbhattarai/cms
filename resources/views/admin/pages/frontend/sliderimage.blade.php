@include('admin.layouts.header')
@include('admin.layouts.navbar')
@include('admin.layouts.sidebar')


<div class="content-wrapper">
    <div class="container">
        <h2> These Images are upload in the file automatically</h2><br/>
        <form method="post" action="{{ route('sliderimage.store') }}" enctype="multipart/form-data"
          class="dropzone" id="dropzone">
        @csrf
        </form>

    </div>

    <div class="m-3" style="display: inline-flex">
            @foreach ($allImages as $image)
                <div class="">
                    <img src="{{url('/frontend/imageslider/')}}/{{ $image->filename }}" alt="image-slider"  class="img-fluid" width="50%">
                </div>
            
            @endforeach
    </div>
</div>




@include('admin.layouts.footer')
<script type="text/javascript">
    Dropzone.options.dropzone =
     {
        maxFilesize: 10,
        renameFile: function(file) {
            var dt = new Date();
            var time = dt.getTime();
           return time+file.name;
        },
        acceptedFiles: ".jpeg,.jpg,.png",
        addRemoveLinks: true,
        timeout: 50000,
        removedfile: function(file) 
        {
            var name = file.upload.filename;
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                type: 'POST',
                url: '{{ route("sliderimage.delete") }}',
                data: {filename: name},
                success: function (data){
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }});
                var fileRef;
                return (fileRef = file.previewElement) != null ? 
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
   
        success: function(file, response) 
        {
            console.log(response);
        },
        error: function(file, response)
        {
           return false;
        }
};
</script>