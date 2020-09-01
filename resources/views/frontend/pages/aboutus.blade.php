@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<div class="mt-20">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container">
          <li class="breadcrumb-item"><a class="text-decoration-none" href="/">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">About Us</li>
        </ol>
      </nav>

    <img src="https://i.pinimg.com/originals/12/fa/6b/12fa6b786a4638e4f382f8b45435a1a0.jpg" class="img-fluid" alt="about-banner" width="100%" style="height:15em">
    <div class="container">
        <div class="card" style="margin-top: -5%;">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <h2 class="text-center">About US</h2>
                            <div class="aerrow"></div>
                            <div class="mt-4">
                            @if ($aboutus)
                                {!! $aboutus->about_us !!}
                            @else
                                <h2  class="font-weight-bold" style="color: rgb(117, 39, 39)"> {{ "There is no data" }}</h2>
                            @endif
                            
                        </div>
                        </div>
                        <div class="col-sm-4 mt-3">
                            <img src="https://cit.edu.np/uploads/pages/1584031442-b1.jpg" alt="college-banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.layouts.footer');