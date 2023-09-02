<?php include('header.php') ?>

<body>





  <!-- Navbar -->
  <nav class="navbar navbar-expand-sm" style="background-color:#00338e;">

    <div class="container-fluid">
      <a class="navbar-brand" href="#"><img src="logos\logo.jpg" alt="" width="50" height="50"></a>


      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-light"></i>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item "><a href="#" class="nav-link text-light">Home</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">About Us</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Academic</a></li>
          <li class="nav-item"><a href="#" class="nav-link text-light">Contact Us</a></li>
        </ul>


        <ul class="navbar-nav ml-auto ">
          <li class="nav-item dropdown text-center mx-2 mx-lg-1">
            <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
              aria-expanded="false">
              <div><i class="fa fa-user fa-lg text-light "></i></div>
              Login
            </a>

            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="user/login.php">User login</a></li>
              <li><a class="dropdown-item" href="admin/login.php">Admin login</a></li>


            </ul>
          </li>
        </ul>

      </div>
    </div>
  </nav>


  <!-- scrolling text -->
  <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <marquee direction="left" scrolldelay="200" onmouseover="this.stop();" onmouseout="this.start();"
        scrollamount="12">
        National Apprenticeship Training Scheme - <a href="http://portal.mhrdnats.gov.in/students" target="_blank">Click
          here for Registration </a>, <a
          href="https://cooperativecollegejsr.ac.in/images/nats/NATS_Student-Enroll_User_manual.pdf"
          target="_blank">Click here for NATS_Student-Enroll_User_manual</a>&nbsp;<img src="logos/new.gif" width="60px">
        &nbsp;|&nbsp;
        <a href="doc/Register in National Academic Bank of Credits 2023.pdf" target="_blank">Register in National
          Academic Bank of Credits 02-02-2023</a>&nbsp;<img src="logos/new.gif" width="60px"> &nbsp;|&nbsp;
      </marquee>
    </div>
  </div>
  </div>

<section>
  <div id="carouselExampleCaptions" class="carousel slide carousel-fade shadow" data-mdb-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-mdb-target="#carouselExampleCaptions" data-mdb-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-flex shadow">

          <div class="row">
            <div class="col-lg-4 my-auto">
              <h1 class="display-3 font-weight-bold">Jamshedpur Cooperative College</h1>
              <a href="" class="btn btn-lg btn-primary">Register</a>
            </div>
          </div>

        </div>

      </div>
      <div class="carousel-item" style="height:400px;">
        <img src="logos\157814-dngaqrvkqw-1618826763.jpg" class="d-block w-100" alt="Camera" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item" style="height:400px;">
        <img src="logos\img100.jpg" class="d-block w-100" alt="Exotic Fruits" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-mdb-target="#carouselExampleCaptions"
      data-mdb-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  </section>
  <section>
  <div class="container">
    <div class="section-content">
      <div class="row">
        <div class="col-md-4 shadow">
          <table class="table table-bordered">
            <tr>
              <td class="text-center font-16 font-weight-600 text-white" style="background-color:#ff131b;" colspan="4">General Notice
                Board</td>
            </tr>
          </table>
          <marquee direction="up" height="200px" scrolldelay="200" onmouseover="this.stop();"
            onmouseout="this.start();">
            <div class="opening-hours">
              <ul class="list-border">
                <span id="lblscrolling">
                  <li class='clearfix' style='color:#000000;'>
                    <span>Important notice </span>
                    <div class="value pull-right"> welcome to the jamshedpur coperative college</div>
                  </li>
                  <li class='clearfix' style='color:#000000;'>
                    <span>Important notice </span>
                    <div class="value pull-right"> welcome to the jamshedpur coperative college</div>
                  </li>
                </span>

              </ul>
            </div>
          </marquee>
        </div>

        <div class="col-md-4 shadow">
          <table class="table table-bordered">
            <tr>
              <td class="text-center font-16 font-weight-600 text-white"style="background-color:#ff131b;" colspan="4">Event Notice Board</td>
            </tr>
          </table>
          <marquee direction="up" height="200px" scrolldelay="200" onmouseover="this.stop();"
            onmouseout="this.start();">
            <div class="opening-hours">
              <ul class="list-border">
                <span id="lblscrolling">
                  <li class='clearfix' style='color:#000000;'>
                    <span>Important notice </span>
                    <div class="value pull-right"> welcome to the jamshedpur coperative college</div>
                  </li>
                </span>

              </ul>
            </div>
          </marquee>
        </div>

        <div class="col-md-4 shadow">
          <table class="table table-bordered">
            <tr>
              <td class="text-center font-16 font-weight-600 text-white"style="background-color:#ff131b;" colspan="4">Exam Notice Board</td>
            </tr>
          </table>
          <marquee direction="up" height="200px" scrolldelay="200" onmouseover="this.stop();"
            onmouseout="this.start();">
            <div class="opening-hours">
              <ul class="list-border">
                <span id="lblscrolling">
                  <li class='clearfix' style='color:#000000;'>
                    <span>Important notice </span>
                    <div class="value pull-right"> welcome to the jamshedpur coperative college</div>
                  </li>
                </span>

              </ul>
            </div>
          </marquee>
        </div>
      </div>
    </div>
  </div>
</section>

  <section class="py-5 bg-light">
    <div>
      <h2 class="text-center">Our Courses</h2>
    </div>
    <ul class="nav nav-tabs nav-fill mb-3" id="ex1" role="tablist">
      <li class="nav-item" role="presentation">
        <a class="nav-link active" id="ex2-tab-1" data-mdb-toggle="tab" href="#ex2-tabs-1" role="tab"
          aria-controls="ex2-tabs-1" aria-selected="true">Vocational courses</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ex2-tab-2" data-mdb-toggle="tab" href="#ex2-tabs-2" role="tab"
          aria-controls="ex2-tabs-2" aria-selected="false">Under-Graduate</a>
      </li>
      <li class="nav-item" role="presentation">
        <a class="nav-link" id="ex2-tab-3" data-mdb-toggle="tab" href="#ex2-tabs-3" role="tab"
          aria-controls="ex2-tabs-3" aria-selected="false">post-Graduate</a>
      </li>
    </ul>
    <!-- Tabs navs -->

    <!-- Tabs content -->
    <div class="tab-content" id="ex2-content">
      <div class="tab-pane fade show active" id="ex2-tabs-1" role="tabpanel" aria-labelledby="ex2-tab-1">
        <div class="container">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BCA-01.webp" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BCA (Bachelor in computer Application)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\bsc-it-full-form.png" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">B.sc(information technology)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BBA-Course-Landing.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BBA (bachelor in business Administration)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="ex2-tabs-2" role="tabpanel" aria-labelledby="ex2-tab-2">
      <div class="container">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BCA-01.webp" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BCA (Bachelor in computer Application)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\bsc-it-full-form.png" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">B.sc(information technology)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BBA-Course-Landing.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BBA (bachelor in business Administration)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade" id="ex2-tabs-3" role="tabpanel" aria-labelledby="ex2-tab-3">
      <div class="container">
          <div class="d-flex justify-content-center">
            <div class="row">
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BCA-01.webp" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BCA (Bachelor in computer Application)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\bsc-it-full-form.png" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">B.sc(information technology)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="card">
                  <img src="logos\BBA-Course-Landing.jpg" class="card-img-top" alt="Fissure in Sandstone" />
                  <div class="card-body">
                    <h5 class="card-title">BBA (bachelor in business Administration)</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                      card's content.</p>
                    <a href="#!" class="btn btn-primary">Apply Now</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>

  <section class="py-5">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Faculty</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati
        facilis nulla</p>
    </div>

    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < 3; $i++) { ?>
          <div class="col-lg-4 my-5">
            <div class="card">
              <div class="col-6 position-absolute" style="top:-50px">
                <img src="logos\M-FEJMZ0_400x400.jpg" alt="" class="mw-100 border rounded-circle">
              </div>
              <div class="card-body pt-5 mt-4">
                <h5 class="card-title mb-0">Teacher's Name</h5>
                <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i
                    class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i
                    class="fa fa-star text-warning"></i></p>
                <p class="card-text">
                  <b>Courses: </b> 5 <br>
                  <b>Ratings: </b>
                </p>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>

    <!-- Carousel wrapper -->

    <!-- Carousel wrapper -->

  </section>
  <footer style="background:url(./assets/images/still-life-851328_1280.jpg) center/cover no-repeat">
    <div class="py-5 text-white" style="background:#000000bb">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h5>Useful Links</h5>

            <ul class="fa-ul ml-4">
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Home</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>About Us</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Courses</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Terms & Conditions</a></li>
              <li><a href="" class="text-light"><i class="fa-li fa fa-angle-right"></i>Privacy Policy</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h5>Social Presence</h5>

            <div>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-facebook-f fa-stack-1x fa-inverse text-dark"></i>
              </span>

              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-twitter fa-stack-1x fa-inverse text-dark"></i>
              </span>
              <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fab fa-linkedin fa-stack-1x fa-inverse text-dark"></i>
              </span>
            </div>
          </div>
          <div class="col-lg-3">
            <h5>Subscribe Now</h5>
            <form action="">
              <!-- Material input -->
              <div class="form-group">
                <input type="email" id="email-s" class="form-control" placeholder="Your Email">
              </div>
              <button class="btn btn-secondary btn-sm btn-block">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <section class="py-2 bg-dark text-light">
    <div class="container-fluid">
      Copyright 2020-2020 All Rights Reseved. <a href="#" class="text-light">School Management System</a>
    </div>
  </section>



  <?php include('footer.php') ?>