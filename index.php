<?php include('header.php') ?>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light ">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Navbar brand -->
    <a class="navbar-brand" href="#"><img src="logos\logo.jpg" alt="" width ="50"height ="50"></a>

    <!-- Toggle button -->
    <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <i class="fas fa-bars text-light"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left links -->
      <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link active" aria-current="page" href="#!">
            <div>
              <i class="fas fa-home fa-lg mb-1"></i>
            </div>
            Home
          </a>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" href="#!">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
             
            </div>
            About
          </a>
        </li>
        
        <li class="nav-item dropdown text-center mx-2 mx-lg-1">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown"
            aria-expanded="false">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
             
            </div>
            Academic
          </a>
          <!-- Dropdown menu -->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li>
              <a class="dropdown-item" href="#">Something else here</a>
            </li>
          </ul>
        </li>
        <li class="nav-item text-center mx-2 mx-lg-1">
          <a class="nav-link" aria-disabled="true" href="#!">
            <div>
              <i class="far fa-envelope fa-lg mb-1"></i>
             
            </div>
            contact us
          </a>
        </li>
      </ul>
      <!-- Left links -->

      <!-- Right links -->
      <ul class="nav-item text-center mx-2 mx-lg-1">
      
          <a href="user/login.php" class="nav-link">
          <div><i class="fa fa-user fa-lg "></i></div>  
          User login</a>
        
        </ul>
     <ul>   
       
          <a href="admin/login.php" class="nav-link">
          <div><i class="fa fa-user fa-lg mb-1"></i></div>  
          Admin login</a>
          </ul>
      </div>
    </div>
      <!-- Right links -->

  
     
    </div>
    <!-- Collapsible wrapper -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->
    <!-- MDB -->


    <!-- scrolling text -->
    <div class="row">
    <div class="col-lg-12 col-sm-12 col-md-12">
      <marquee direction="left" scrolldelay="200" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="12">
          National Apprenticeship Training Scheme - <a href="http://portal.mhrdnats.gov.in/students" target="_blank">Click here for Registration </a>, <a href="https://cooperativecollegejsr.ac.in/images/nats/NATS_Student-Enroll_User_manual.pdf" target="_blank">Click here for NATS_Student-Enroll_User_manual</a>&nbsp;<img src="logos/new.gif" width="60px"> &nbsp;|&nbsp;
          <a href="doc/Register in National Academic Bank of Credits 2023.pdf" target="_blank">Register in National Academic Bank of Credits 02-02-2023</a>&nbsp;<img src="logos/new.gif" width="60px"> &nbsp;|&nbsp;      
              </marquee>
           </div>
            </div>
             </div>
     </div>   
    <div class="d-flex shadow" style = "height:400px;background:linear-gradient(-45deg,navy 50%,transparent 50%)">
      <div class="container-fluid my-auto">
        <div class="row">
          <div class="col-lg-6 my-auto">
            <h1 class="display-3 font-weight-bold">Jamshedpur Cooperative College</h1>
            <a href="" class ="btn btn-lg btn-primary">Register</a>
          </div>

            <!--<div class="col-lg-6">
             <div class="col-lg-8 mx-auto p-2 card">
               <div class="card-body">
                  <h4>Addmission Form</h4>
                   <form action="" method="post">
              
                        <div class="md-form p-2">
                      <div class="form-outline">
                     <input type="text" id="typeText" class="form-control" />
                     <label class="form-label" for="typeText">Your Name</label>
                       </div>
                      </div>
                      <div class="md-form p-2">
                 <div class="form-outline">
                     <input type="text" id="typeText" class="form-control" />
                     <label class="form-label" for="typeText">Courses</label>
                       </div>
                      </div>
                      <div class="md-form p-2">
                 <div class="form-outline">
                     <input type="email" id="email" class="form-control" />
                     <label class="form-label" for="email">Your Email</label>
                       </div>
                      </div>
                      <div class="md-form p-2">
                 <div class="form-outline">
                     <input type="text" id="mobile" class="form-control" />
                     <label class="form-label" for="mobile">Mobile No.</label>
                       </div>
                      </div>
                      <button class="btn btn-primary btn-block">Submit Form</button>
              </form>
               </div>
            </div>-->
        </div>
     </div>
</div>
</div>
</div>



       <section class ="py-5">
        <div>
          <h2 class ="text-center">Our Courses</h2>
        </div>
        <div class="container">
          <div class="row">
            <?php for ($i=0;$i<12;$i++){?>
              <div class="col-lg-3 mb-4">
              <div class="card">
                <div> <img src="logos\bca-admission-2021.jpeg" alt="" class ="img-fluid rounded-top"></div>
                <div class="card-body">
                      Bachelor in computer Application(BCA)
                      <button class="btn btn-block btn-primary btn-sm"> Apply Now</button>
                </div>
              </div>
            </div>
               
            <?php } ?>
            
          </div>
        </div>
          
       </section>

       <section class="py-5">
    <div class="text-center mb-5">
      <h2 class="font-weight-bold">Our Faculty</h2>
      <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus perspiciatis obcaecati facilis nulla</p>
    </div>

    <div class="container">
      <div class="row">
        <?php for ($i = 0; $i < 3; $i++){ ?>
        <div class="col-lg-4 my-5">
          <div class="card">
            <div class="col-6 position-absolute" style="top:-50px">
              <img src="logos\M-FEJMZ0_400x400.jpg" alt="" class="mw-100 border rounded-circle">
            </div>
            <div class="card-body pt-5 mt-4">
              <h5 class="card-title mb-0">Teacher's Name</h5>
              <p><i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i> <i class="fa fa-star text-warning"></i></p>
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
<div
  id="carouselBasicExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="0"
      class="active"
      aria-current="true"
      aria-label="Slide 1"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="1"
      aria-label="Slide 2"
    ></button>
    <button
      type="button"
      data-mdb-target="#carouselBasicExample"
      data-mdb-slide-to="2"
      aria-label="Slide 3"
    ></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img
        src="logos/bg3.jpg"
        class="d-block w-100"
        
      />
      
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="logos/bg1.jpg"
        class="d-block w-100"
        
      />
     
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="logos/bg2.jpg"
        cl
        
        ass="d-block w-100"
        
      />
      
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <button
    class="carousel-control-prev"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button
    class="carousel-control-next"
    type="button"
    data-mdb-target="#carouselBasicExample"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- Carousel wrapper -->
    
  </section>
  <footer style="background:url(./assets/images/still-life-851328_1280.jpg) center/cover no-repeat">
    <div  class="py-5 text-white" style="background:#000000bb"> 
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
       

 