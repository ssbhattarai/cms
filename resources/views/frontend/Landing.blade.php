@include('frontend.layouts.header')
@include('frontend.layouts.nav')

<main role="main" class="mt-20">

    <div id="carouselExampleIndicators" class="carousel slide container" data-ride="carousel" >
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 200px;">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 200px;">
          </div>
          <div class="carousel-item">
            <img src="https://images.unsplash.com/photo-1534840641466-b1cdb8fb155e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" class="d-block w-100" alt="..." style="height: 200px;">
          </div>
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

      <div class="card mt-4 text-white bg-green-500" >
          <div class="row m-3">
            <div class="col-4">
              <div class="list-group list-group-flush" id="list-tab" role="tablist">
                <button type="button" class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Notices</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Exam Notice</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">College Notice</button>
                <button type="button" class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings">Events</button>
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
      <div class="card m-3" style="background-image: linear-gradient(45deg, #47843c 50%, #c6d8a3 50%);">
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