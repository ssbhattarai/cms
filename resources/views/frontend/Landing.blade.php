@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main role="main" class="mt-20">

    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
          @foreach ($SliderImages as $key => $slider)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
        <img src="{{ asset('frontend/imageslider') }}/{{ $slider->filename }}" class="d-block w-100" alt="SLider Image" style="height: 250px;">
          </div>
          @endforeach
          {{-- <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 250px;">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 250px;">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 250px;">
          </div> --}}
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>


    <div>
      <div class="card mt-4 text-white event-bg" >
          <div class="row m-3">
            <div class="col-4">
              <div class="list-group list-group-flush" id="list-tab" role="tablist">
                <button type="button" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="fas fa-sticky-note"></i> &nbsp; Notices</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"> <i class="fas fa-sticky-note"></i> &nbsp;Exam Notice</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages"> <i class="fas fa-sticky-note"></i> &nbsp;College Notice</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"> <i class="fas fa-calendar-week"></i>  &nbsp;Events</button>
              </div>
            </div>
            <div class="col-8">
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                  i am homei am homei am homei am homei am homei am homei am homei am homei am homei am homei am home
                </div>
                <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">i am profile</div>
                <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">Messages</div>
                <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list">Setting</div>
              </div>
            </div>
          </div>
      </div>
      
      <h6 class="mt-4 text-center text-uppercase">Programms</h6>
      <div style="border-bottom: 2px solid rgb(7, 6, 6); margin-left: 48%;margin-right: 48%;"></div>
      <div id="accordion" class="m-3">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0 float-left">
              <button class="btn btn-info text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Bachelor in Computer Engineering <i class="fas fa-caret-down"></i>


              </button>
            </h5>
            <h5 class="mb-0 float-right">
              <p>Duraion: 4 Years</p>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              <br>
              <button class="btn btn-secondary float-right m-2"> view more</button>
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0 float-left">
              <button class="btn btn-info text-white" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bachelor in Civil Engineering <i class="fas fa-caret-down"></i>
              </button>
            </h5>
            <h5 class="mb-0 float-right">
              <p>Duraion: 4 Years</p>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              <br>
              <button class="btn btn-secondary float-right m-2"> view more</button>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0 float-left">
              <button class="btn btn-info text-white collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Bachelor in computer Application <i class="fas fa-caret-down"></i>
              </button>
            </h5>
            <h5 class="mb-0 float-right">
              <p>Duraion: 4 Years</p>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. 
              Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              <br>
              <button class="btn btn-secondary float-right m-2"> view more</button>
            </div>
          </div>
        </div>
      </div>

      <div class="card m-5" style="background-image: linear-gradient(45deg, #47843c 50%, #c6d8a3 50%);">
        <div class="card-header">
          <h6 class="text-center text-upper">Testimonials</h6>
          <div style="border-bottom: 2px solid rgb(7, 6, 6); margin-left: 47%;margin-right: 47%;"></div>
        </div>
        <div class="card-body">
          <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">

                <div class="row">
                  <div class="offset-sm-2 col-sm-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Pierre-Person.jpg" alt="test" style="border-radius: 30%; height: 25em;"/>
                  </div>
                  <div class="offset-sm-1 col-sm-5">
                    <p class="text-center mt-3"><strong class="text-black-600 font-weight-bold">" This is title of the testo "</strong></p> <br>
                    <p>
                      this is the explaination of the person side
                      this is the explaination of the person sidethis is the explaination of the person sidethis is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                    </p>
                    <div class="mt-5">
                      <div class="dropdown-divider"></div>
                      <p class="font-weight-bold text-center">Shyam sundar</p>
                      <p class="text-center text-center">CEO</p>
                      <p class="text-center text-center">Test Organization</p>
                    </div>
                  </div>
                </div>
                
              </div>
              <div class="carousel-item">

                <div class="row">
                  <div class="offset-sm-2 col-sm-4">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Pierre-Person.jpg" alt="test" style="border-radius: 30%; height: 25em;"/>
                  </div>
                  <div class="offset-sm-1 col-sm-5">
                    
                    <p class="text-center mt-3"><strong class="text-blue-600 font-weight-bold">" This is title of the testo "</strong></p> <br>
                    <p>
                      this is the explaination of the person side
                      this is the explaination of the person sidethis is the explaination of the person sidethis is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                    </p>
                    <div class="mt-5">
                      <div class="dropdown-divider"></div>
                      <p class="font-weight-bold text-center">Shyam sundar</p>
                      <p class="text-center text-center">CEO</p>
                      <p class="text-center text-center">Test Organization</p>
                    </div>

                  </div>
                </div>

              </div>
              <div class="carousel-item">
                
                <div class="row">
                  <div class="offset-sm-2 col-sm-5">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a0/Pierre-Person.jpg" alt="test" style="border-radius: 30%; height: 25em;"/>
                  </div>
                  <div class="col-sm-5">
                    <p class="text-center mt-3"><strong class="text-blue-600 font-weight-bold">" This is title of the testo "</strong></p> <br>
                    <p>
                      this is the explaination of the person side
                      this is the explaination of the person sidethis is the explaination of the person sidethis is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                      this is the explaination of the person side
                    </p>
                    <div class="mt-5">
                      <div class="dropdown-divider"></div>
                      <p class="font-weight-bold text-center">Shyam sundar</p>
                      <p class="text-center text-center">CEO</p>
                      <p class="text-center text-center">Test Organization</p>
                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      
</main>

@include('frontend.layouts.sidebar')
@include('frontend.layouts.footer')