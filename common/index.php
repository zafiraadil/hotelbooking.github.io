<?php 
include("../config/connection.php");


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Hotel Booking</title>
  </head>
  <?php 
  include("header.php");
  ?>
 

    <!--Hero-->

      <div class="hero">
        <div class="container-fluid">
            <div class="row h-100">
              <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner w-100">
                  <div class="carousel-item active">
                    <img src="Media/full-slider-1.jpg" class="d-block w-100 h-100" alt="...">

                    <div class="carousel-caption d-none d-md-block">
                      <h5>BOOK YOUR ROOM NOW</h5>
                      <p>Enjoy your holidays</p>

                      <form action="hotellists.php" method="POST" class="form-horizontal">
                      <div class="slider-btn bg-light d-flex justify-content-center">
                        <input type="datetime-local" name="date1" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkin"><span><i class="bx bxl-calendar"></i></span>
                        <input type="datetime-local" name="date2" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkout">
                        
                         
                          <select name="guests" id="" value="Guests" class="hero-btn btn outline-btn-dark">Guests 
                            <option value="">Guests</option>
                            <option value="1">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                      
                        <button type="submit" id="availability" class="hero-btn availability-btn">Check availability</button>

                
                      </form>

                     </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Media/full-slider-2.jpg" class="d-block w-100 h-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>LUXURY EXPERIENCE</h5>
                      <p>Have a wonderful time</p>
                      <form action="hotellists.php" method="POST" class="form-horizontal">
                      <div class="slider-btn bg-light d-flex justify-content-center">
                        <input type="datetime-local" name="date1" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkin"><span><i class="bx bxl-calendar"></i></span>
                        <input type="datetime-local" name="date2" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkout">
                        
                         
                          <select name="guests" id="" value="Guests" class="hero-btn btn outline-btn-dark">Guests 
                            <option value="">Guests</option>
                            <option value="1">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                      
                        <button type="submit" id="availability" class="hero-btn availability-btn">Check availability</button>

                
                      </form>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="Media/full-slider-3.jpg" class="d-block w-100 h-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>MODERN AND SPACIOUS ROOMS</h5>
                      <p>Rooms starts at 100AED</p>
                      <form action="hotellists.php" method="POST" class="form-horizontal">
                      <div class="slider-btn bg-light d-flex justify-content-center">
                        <input type="datetime-local" name="date1" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkin"><span><i class="bx bxl-calendar"></i></span>
                        <input type="datetime-local" name="date2" class="hero-input border border-1 border-dark text-center text-dark" name="checkin" 
                        id="calendar" placeholder="checkout">
                        
                         
                          <select name="guests" id="" value="Guests" class="hero-btn btn outline-btn-dark">Guests 
                            <option value="">Guests</option>
                            <option value="1">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                          </select>
                      
                        <button type="submit" id="availability" class="hero-btn availability-btn">Check availability</button>

                
                      </form>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              
                <!-- <div class="col-lg-7 mx-auto text-center">
                    <h2 class="display-4 text-white">Build robust landing pages now</h2>
                    <p class="my-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed finibus libero. Nullam et interdum diam. Sed mollis risus sit amet nibh sodales accumsan</p>
                    <div class=" btn d-flex p-3 align-items-center bg-white">
                     <div class="hero-btn btn btn-outline-dark me-1 d-flex p-0">
                      <a href="#" class="hero-btn btn btn-outline-dark">checkin</a>
                      <a href="#" class="hero-btn btn btn-outline-dark">checkout</a>
                     </div>
                    <a href="#" class="hero-btn btn btn-outline-dark me-3">Guests</a>
                    <a href="#" class=" hero-btn btn primary-btn ms-3">Check availability</a>
                    </div>
                </div> -->
            </div>
        </div>
      </div> 

     
    <!--/Hero-->

    <!--Services-->
      <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center">
                    <h6 class="heading-color">SERVICES</h6>
                    <h1>Our Services</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc sed finibus libero. Nullam et interdum diam. Sed mollis risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat diam, et faucibus nulla facilisis ac</p>
                </div>
            </div>
            <div class="row g-4 my-5">
                    <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="heading-color my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>

                     <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="heading-color my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>

                     <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="heading-color my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>

                     <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="text-primary my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>

                     <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="text-primary my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>

                     <div class="col-lg-4 col-sm-6">
                        <div class="service card-effect">
                            <div class="icon-box">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <h5 class="heading-color my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Nunc sed finibus libero</p>
                        </div>
                     </div>
            </div>
        </div>
      </section>
    <!--/Services-->

    <!--features-->
      <section class="row w-100" id="features">
        <div class="col-lg-6 col-img">

        </div>
        <div class="col-lg-6">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">
                    <h6 class="heading-color">WHY TO CHOOSE US?</h6>
                    <h1>Best solution for your business</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit </p>
                        <div class="features d-flex mt-3">
                            <div class="icon-box me-3">
                                <i class="bx bxs-comment-detail"></i>
                            </div>
                            <div>
                            <h5 class="heading-color my-3">Service</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Nunc sed finibus libero</p>
                            </div>
                        </div>  

                        <div class="features d-flex">
                          <div class="icon-box me-3">
                              <i class="bx bxs-comment-detail"></i>
                          </div>
                          <div>
                          <h5 class="heading-color my-3">Service</h5>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                          Nunc sed finibus libero</p>
                          </div>
                      </div>  

                      <div class="features d-flex ">
                        <div class="icon-box me-3">
                            <i class="bx bxs-comment-detail"></i>
                        </div>
                        <div>
                        <h5 class="heading-color my-3">Service</h5>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Nunc sed finibus libero</p>
                        </div>
                    </div>
                    
                    
                    </div>
                </div>
            </div>
        </div>
      </section>
    <!--/features-->

    <!--Projects-->
      <section id="projects">
        <div class="container-fluid">
          <div class="row mb-5">
            <div class="col-md-8 mx-auto text-center">
              <h5 class="heading-color">ROOMS</h5>
              <h1>Our ROOMS</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                 Nunc sed finibus libero. Nullam et interdum diam. Sed mollis 
                 risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat 
                 diam, et faucibus nulla facilisis ac</p>
            </div>
          </div>
          <div class="row g-4">
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/1-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Marriot</h4>
                  <h6 class="text-white">Jumeira</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/2-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Anantara</h4>
                  <h6 class="text-white">creek</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/3-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Continental</h4>
                  <h6 class="text-white">JVC</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/4-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Blooma Ava</h4>
                  <h6 class="text-white">Downtown</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/5-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Blooms</h4>
                  <h6 class="text-white">Downtown</h6>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-6">
              <div class="projects">
                <img src="Media/Gallary/family-1170x680.jpg" alt="project1">
                <div class="overlay">
                  <div>
                  <h4 class="text-white">Continental</h4>
                  <h6 class="text-white">JVC</h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    
    <!--?Projects-->

    <!--pricing-->
      <section id="pricing" class="bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="heading-color">PRICING</h6>
              <h1>Our Pricing</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc sed finibus libero. Nullam et interdum diam. Sed mollis 
                risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat 
                diam, et faucibus nulla facilisis ac</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 col-sm-6">
              <div class="pricing card-effect">
                <h6>STARTER</h6>
                <h1>$99</h1>
                <hr>
                <ul class="list-unstyled mb-4">
                  <li><i class="bx bxs-check-circle"></i>1 room</li>
                  <li><i class="bx bxs-check-circle"></i>candlelightdinner</li>
                  <li><i class="bx bxs-check-circle"></i></li>
                  <li><i class="bx bxs-check-circle"></i>Wifi connection</li>
                  <li><i class="bx bxs-check-circle"></i>Wordpress plugins</li>
                </ul>
                <button class="btn primary-btn">Get Started</button>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing card-effect">
                <h6>STARTER</h6>
                <h1>$99</h1>
                <hr>
                <ul class="list-unstyled mb-4">
                  <li><i class="bx bxs-check-circle"></i>Premium support</li>
                  <li><i class="bx bxs-check-circle"></i>30+ web masters</li>
                  <li><i class="bx bxs-check-circle"></i>Drag & drop builder</li>
                  <li><i class="bx bxs-check-circle"></i>Ecommerce store</li>
                  <li><i class="bx bxs-check-circle"></i>Wordpress plugins</li>
                </ul>
                <button class="btn primary-btn">Get Started</button>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing card-effect">
                <h6>STARTER</h6>
                <h1>$99</h1>
                <hr>
                <ul class="list-unstyled mb-4">
                  <li><i class="bx bxs-check-circle"></i>Premium support</li>
                  <li><i class="bx bxs-check-circle"></i>30+ web masters</li>
                  <li><i class="bx bxs-check-circle"></i>Drag & drop builder</li>
                  <li><i class="bx bxs-check-circle"></i>Ecommerce store</li>
                  <li><i class="bx bxs-check-circle"></i>Wordpress plugins</li>
                </ul>
                <button class="btn primary-btn">Get Started</button>
              </div>
            </div>
            <div class="col-md-3 col-sm-6">
              <div class="pricing card-effect text-center">
                <h6>STARTER</h6>
                <h1>$99</h1>
                <hr>
                <ul class="list-unstyled mb-4">
                  <li><i class="bx bxs-check-circle"></i>Premium support</li>
                  <li><i class="bx bxs-check-circle"></i>30+ web masters</li>
                  <li><i class="bx bxs-check-circle"></i>Drag & drop builder</li>
                  <li><i class="bx bxs-check-circle"></i>Ecommerce store</li>
                  <li><i class="bx bxs-check-circle"></i>Wordpress plugins</li>
                </ul>
                <button class="btn primary-btn">Get Started</button>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!--/pricing-->
    <!--Team-->
      <section id="team">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="heading-color">TEAM</h6>
              <h1>Our Team</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc sed finibus libero. Nullam et interdum diam. Sed mollis 
                risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat 
                diam, et faucibus nulla facilisis ac</p>    
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <div class="team card-effect text-center">
                <img src="img/team1.jpg" alt="">
                <h5 class="mb-0 mt-4">Piyush Rao</h5>
                <p>Web developer</p>
                <div class="social-icons">
                  <a href=""><i class="bx bxl-facebook"></i></a>
                  <a href=""><i class="bx bxl-twitter"></i></a>
                  <a href=""><i class="bx bxl-instagram"></i></a>
               </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="team card-effect text-center">
                <img src="img/team2.jpg" alt="">
                <h5 class="mb-0 mt-4">Piyush Rao</h5>
                <p>Web developer</p>
                <div class="social-icons">
                  <a href=""><i class="bx bxl-facebook"></i></a>
                  <a href=""><i class="bx bxl-twitter"></i></a>
                  <a href=""><i class="bx bxl-instagram"></i></a>
               </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="team card-effect text-center">
                <img src="img/team3.jpg" alt="">
                <h5 class="mb-0 mt-4">Don CP</h5>
                <p>Web developer</p>
                <div class="social-icons">
                  <a href=""><i class="bx bxl-facebook"></i></a>
                  <a href=""><i class="bx bxl-twitter"></i></a>
                  <a href=""><i class="bx bxl-instagram"></i></a>
               </div>
              </div>
            </div>

            <div class="col-md-3">
              <div class="team card-effect text-center">
                <img src="img/team4.jpg" alt="">
                <h5 class="mb-0 mt-4">Adil Mohd</h5>
                <p>Web developer</p>
                <div class="social-icons">
                  <a href=""><i class="bx bxl-facebook"></i></a>
                  <a href=""><i class="bx bxl-twitter"></i></a>
                  <a href=""><i class="bx bxl-instagram"></i></a>
               </div>
              </div>
            </div>

          </div>
        </div>
      </section>
    <!--/Team-->
    <!--Blog-->
      <section id="blog">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="text-primary">BLOG</h6>
              <h1>Our Blog</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc sed finibus libero. Nullam et interdum diam. Sed mollis 
                risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat 
                diam, et faucibus nulla facilisis ac</p>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="blog card-effect">
                <img src="Media/Blog/blog_post1.jpg" alt="">
                <h6 class="pt-4"><a href="#">ipsum dolor sit amet</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed finibus libero.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog card-effect">
                <img src="Media/Blog/blog_post5.jpg" alt="">
                <h6 class="pt-4"><a href="#">ipsum dolor sit amet</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed finibus libero.</p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="blog card-effect">
                <img src="Media/Blog/zante-in-pictures-1170x650.jpg" alt="">
                <h6 class="pt-4"><a href="#">ipsum dolor sit amet</a></h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                  Nunc sed finibus libero.</p>
              </div>
            </div>

          </div>
        </div>
      </section>
    <!--/Blog-->
    <!--form-->
      <section id="form">
        <div class="container">
          <div class="row">
            <div class="col-md-8 mx-auto text-center">
              <h6 class="heading-color">FORM</h6>
              <h1>Contact Us</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Nunc sed finibus libero. Nullam et interdum diam. Sed mollis 
                risus sit amet nibh sodales accumsan. Curabitur aliquet feugiat 
                diam, et faucibus nulla facilisis ac</p>
            </div>
          </div>
          <form action="#" class="row g-4 justify-content-center">
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter Name">
            </div>
            <div class="col-md-5">
              <input type="text" class="form-control" placeholder="Enter Email">
            </div>
            <div class="col-md-10">
              <input type="text" class="form-control" placeholder="Enter Subject">
            </div>
            <div class="col-md-10">
              <textarea cols="30" rows="5" class="form-control" placeholder="Enter address"></textarea>
            </div>
            <div class="col-md-10 d-grid ">
              <button class="btn primary-btn">Contact us</button>
            </div>
          </form>
        </div>
      </section>
    <!--/form-->
    <!--footer-->
    <footer>
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <img class="logo" src="Media/logo_footer-2.png" alt="">
            </div>
            <div class="col-md-2">
              <h5 class="text-white mb-3">Brand</h5>
              <ul class="list-unstyled">
                <li><a href="#">About us</a></li>
                <li><a href="#">Careers</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Pricing</a></li>
              </ul>
          </div>
          <div class="col-md-2">
          <h5 class="text-white mb-3">More</h5>
          <ul class="list-unstyled">
            <li><a href="#">FAQ's</a></li>
            <li><a href="#">Privacy & Policy</a></li>
            <li><a href="#">Warranty</a></li>
            <li><a href="#">Shipment</a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <h5 class="text-white mb-3">Address</h5>
          <ul class="list-unstyled">
            <li>Address:2715,Ash DR. San Dacota 83574 </li>
            <li><Email:zafirakv8@gmail.com</li>
            <li>Phone:+971 569477079</li>
          </ul>
      </div>
    
        </div>
      </div>
    </div>
    <div class="footer-bottom mt-5">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <p>All copyrights reserved</p>
          </div>
          <div class="col-md-6">
            <div class="social-icons">
              <a href=""><i class="bx bxl-facebook"></i></a>
              <a href=""><i class="bx bxl-twitter"></i></a>
              <a href=""><i class="bx bxl-instagram"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer> 
  
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script>
      flatpickr("input[type=datetime-local",{});
      flatpickr("input[type=datetime-local",{});

    </script>
  </body>
</html>