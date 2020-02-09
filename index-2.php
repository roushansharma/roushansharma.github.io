<div class="page home-banner white-bg" id="home">
      <div class="container-fluid p-0">
        <div class="row no-gutters full-screen">
          <div class="col-lg-3 col-xl-4 blue-bg repo_none">
            <div class="d-flex align-items-end home-user-avtar v-center-box">
              <img src="static/img/user.png" title="" alt="">
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">
                <div class="v-center-box d-flex align-items-center">
                  <div class="home-text">
                    <!--h6 class="color-white theme-after">Hi</h6-->
                    <!--h1 class="dark-color blue-after">Roushan Kumar</h1-->
                    <!--p>I Design and Develop<span id="type-it"></span></p-->
                    <!--div class="btn-bar">
                      <a href="#" class="btn btn-theme">Download CV</a>
                    </div-->
          <h1 class="nm_text">Hello I’m Roushan Kumar. </h1>
          <p class="ux_text">Creative Graphic Designer & User Experience Desiger based in Website, I create digital Products a more Beautiful and usable place.</p>
          <p class="down">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Contact Me</a>
            <a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-lg">Hire Me</a>
          </p>
                  </div>
                  <ul class="social-icons">
                    <li><a class="linkedin" href="https://www.linkedin.com/in/roushankumar55/" target="_blank" title="roushan sharma linkdin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="linkedin" href="https://github.com/roushansharma" target="_blank" title="roushan sharma github"><i class="fab fa-github"></i></a></li>
                  </ul>
                </div>
               </div> 
             </div>
          </div>
        </div>
      </div>
    </div>

<?php
session_start();

if(isset($_POST['contact_in']) && !empty($_POST['contact_in']))
{
$name = $_POST['g_name'];
$email = $_POST['g_emial'];
$phone = $_POST['g_phone'];
$sub = $_POST['g_sub'];
$message = $_POST['g_msg'];
$to = "roushan7192@gmail.com";
$subject = "Contact Me ";
$_SESSION['name'] = $name;
$message = "
<html>
<head>
<title>Users Feedback</title>
<style>
table {
    border-collapse: collapse!important;
}
table {
    width: 100%;
    text-align: left;
    border: 1px solid #e8e6e6;
}
table thead {
    background: #f5f5f5;
}
table thead tr th {
    padding: 10px 5px;
    margin: 0px!important;
    border: 0px solid #000;
    font-family: sans-serif;
    font-size: 14px;
    font-weight: 700;
    color: #000000cf;
}
td {
    padding: 10px 7px;
    font-size: 14px;
    text-transform: capitalize;
    font-family: sans-serif;
}
td:last-child {
    text-align: justify;
    line-height: 20px;
}
</style>
</head>
<body>
<p>Rizingsun Contact Form</p>
<table >
<thead>
<tr>
<th>Name</th>
<th>Email</th>
<th>Phone</th>
<th>Subject</th>
<th>Message</th>
</tr>
</thead>
<tbody>
<tr>
<td>$name</td>
<td>$email</td>
<td>$phone</td>
<td>$sub</td>
<td>$message</td>
</tr>
<tbody>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <http://roushan.0fees.us/>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

 $send_mail = mail($to,$subject,$message,$headers);

 if($send_mail){
	 header('Location: thank-you.php');
	// window.location.href = '';
 }
 else{
	 header('Location: 404.php');
 }
}

?> 
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<title>Roushan - Personal Portfolio</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  
  <meta name="description" content="Hello,i'm Roushan kumar.....i design simple , usable and accessiable websites that gets results.. i pride my self on reliabe communication with my clints and i'm easy to work with , friendly guy. You can find out more about me. i've completed my study and lookung for a job in web designing and developing...">
<meta name="keywords" content="roushan kumar, roushan web portfolio, roushan web designer portfolio , web designer , web developer , roushan sharma">
<meta name="author" content="Roushan kumar">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="canonical" href="http://roushan.0fees.us" />
  <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

  <link href="static/plugin/font-awesome/css/fontawesome-all.min.css" rel="stylesheet">
  <link href="static/plugin/themify-icons/themify-icons.css" rel="stylesheet">
  
  <link href="static/plugin/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="static/plugin/owl-carousel/css/owl.carousel.min.css" rel="stylesheet">
  <link href="static/plugin/magnific/magnific-popup.css" rel="stylesheet">
  <link href="static/plugin/nav/css/component.css" rel="stylesheet" />
    <link href="static/css/styles.css" rel="stylesheet">
  <script src="static/plugin/nav/js/modernizr-custom.js"></script>
  <link rel="icon" href="img/fav.jpg" />
  <script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_TRACKING_ID"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124411741-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124411741-1');
</script>
</head>
 
 <nav class="pages-nav">
    <div class="pages-nav__item"><a class="link link--page" href="#home">Home</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#about">About Us</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#resume">Resume</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#portfolio">Portfolio</a></div>
    <div class="pages-nav__item"><a class="link link--page" href="#contact">Contact Me</a></div>
  </nav>
 
  <div class="pages-stack">

    <div class="page home-banner white-bg" id="home">
      <div class="container-fluid p-0">
        <div class="row no-gutters full-screen">
          <div class="col-lg-3 col-xl-4 blue-bg repo_none">
            <div class="d-flex align-items-end home-user-avtar v-center-box">
              <img src="static/img/user.png" title="" alt="">
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">
                <div class="v-center-box d-flex align-items-center">
                  <div class="home-text">
                    <!--h6 class="color-white theme-after">Hi</h6-->
                    <!--h1 class="dark-color blue-after">Roushan Kumar</h1-->
                    <!--p>I Design and Develop<span id="type-it"></span></p-->
                    <!--div class="btn-bar">
                      <a href="#" class="btn btn-theme">Download CV</a>
                    </div-->
					<h1 class="nm_text">Hello I’m Roushan Kumar. </h1>
					<p class="ux_text">Creative Graphic Designer & User Experience Desiger based in Website, I create digital Products a more Beautiful and usable place.</p>
					<p class="down">
						<a href="javascript:void(0)" data-toggle="modal" data-target="#myModal">Contact Me</a>
						<a href="javascript:void(0)" data-toggle="modal" data-target=".bs-example-modal-lg">Hire Me</a>
					</p>
                  </div>
                  <ul class="social-icons">
                    <li><a class="linkedin" href="https://www.linkedin.com/in/roushankumar55/" target="_blank" title="roushan sharma linkdin"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a class="linkedin" href="https://github.com/roushansharma" target="_blank" title="roushan sharma github"><i class="fab fa-github"></i></a></li>
                  </ul>
                </div>
               </div> 
             </div>
          </div>
        </div>
      </div>
    </div>

   
    <div class="page about-section white-bg" id="about">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/title-1.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>About Me</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                <div class="section-titel"> 
                  <div class="st-title">
                    <h2 class="theme-after dark-color">ABOUT Me</h2>
                  </div>
                </div>

                
                <div class="row">
                  <!-- <div class="col-md-4">
                    <img src="static/img/my-pic.jpg" title="" alt="">
                  </div> -->
                  <div class="col-md-12 md-m-30px-t">
                    <div class="about-text">
                      <h3 class="dark-color">Hello, This is Roushan Kuamr</h3>
                      <p class="m-0px">To design is much more than simply to assemble, to order, or even to edit: it is to add value and meaning, to illuminate, to simplify, to clarify, to modify, to dignify, to dramatize, to persuade, and perhaps even to amuse. Mainly focused on building interactive thing with <b>HTML, CSS, Javascript, Bootstrap, jQuery, React, Illustrator and Photoshop</b>. I'm available for creative projects which need somen interface with solid front-end base, Solicitous over code quility, Design coherence and UX performances.<!-- <a href="#" class="rd_more">Read More</a> --></p>
                    </div>

                    <div class="row m-30px-t">
                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-ruler-pencil"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">UI/UX Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                          </div>
                        </div>
                      </div>

                       <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-brush-alt"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Web Design</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                          </div>
                        </div>
                      </div> 

                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-image"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Graphic</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                          </div>
                        </div>
                      </div> 

                     

                      <div class="col-md-6 col-sm-6 m-30px-b">
                        <div class="feature-box">
                          <i class="icon dark-color theme-after ti-mobile"></i>
                          <div class="feature-content">
                            <h5 class="dark-color">Development</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                          </div>
                        </div>
                      </div> 
                    </div> 

                    <div class="btn-bar">
                      <a href="#" class="btn btn-theme">Download CV</a>
                    </div>

                  </div>
                </div> 


                <div class="counter-row m-50px-t p-40px-t lg-m-35px-t lg-p-25px-t sm-p-15px-t">
                  <div class="row">
                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="100">
                            <i class="theme-color ti-face-smile"></i>
                            <div class="count dark-color">100 + </div>
                            <h6>Happy Clients</h6>
                        </div>
                      </div>
                    </div> 

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="345">
                            <i class="theme-color ti-headphone"></i>
                            <div class="count dark-color">345 </div>
                            <h6>Logo Design</h6>
                        </div>
                      </div>
                    </div> 

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                            <i class="theme-color ti-camera"></i>
                            <div class="count dark-color">375</div>
                            <h6>Develop Websites</h6>
                        </div>
                      </div>
                    </div>  

                    <div class="col-md-3 col-sm-6 md-m-15px-tb">
                      <div class="counter-col counter-box">
                        <div class="counter-data" data-count="375">
                            <i class="theme-color ti-thumb-up"></i>
                            <div class="count dark-color">375</div>
                            <h6>Projects</h6>
                        </div>
                      </div>
                    </div>  

                  </div>  
                </div>

                <div class="row row_accordian">
                  <h2 class="help_text">When you believe a thing, believe it all the way, implicitly and unquestionably.</h2>
                  <p class="hav_text">It is not enough that we build products that function, that are understandable and usable, we also need to build products that bring joy and excitement, pleasure and fun, and, yes, beauty to people’s lives. Creativity is to discover a question that has never been asked. If one brings up an idiosyncratic question, the answer he gives will necessarily be unique as well.<!-- <span>Let's talk.</span> --></p>


                  <h2 class="help_text">Where do new ideas come from? The answer is simple: differences.</h2>
                  <p class="hav_text">Good designers must always be avant-gardists, always one step ahead of the times. They should–and must–question everything generally thought to be obvious. They must have an intuition for people’s changing attitudes. For the reality in which they live, for their dreams, their desires, their worries, their needs, their living habits. They must also be able to assess realistically the opportunities and bounds of technology<!-- <span>Let's talk.</span> --></p>

                  <h2 class="hv_project">
                    Have a projecct in mind or wish to obtain more information on how we can help accelerate your business? Simply call or send us an <a href="mailto:roushan7192@gmail.com">Email.</a>
                  </h2>





                </div>

              </div>  
            </div> 
          </div>
        </div>  
      </div>
    </div>

   
    <div class="page resume-section white-bg" id="resume">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/title-2.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>My Resume</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

               
                <div class="section-titel">
                  <!-- <h6 class="theme-after dark-color">History</h6> -->
                  <div class="st-title">
                    <h2 class="theme-after dark-color">My Resume</h2>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after dark-color">Education</h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="dark-color">Arena Animation </span>
                            <label>June 2016 to Dec 2018</label>
                          </div>
                          <div class="r-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                          </div>
                        </li>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg fas fa-graduation-cap"></i>
                            <span class="dark-color">Maghadh University</span>
                            <label>2016 to 2019</label>
                          </div>
                          <div class="r-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div> 
                  <div class="col-md-6">
                    <div class="resume-row">
                      <h2 class="theme-after dark-color">Experience</h2>
                      <ul>
                        <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="dark-color">Immortal Technologies Pvt Ltd</span>
                            <label>25 Oct 2018 - Present</label>
                          </div>
                          <div class="r-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                          </div>
                        </li>
                       <!--  <li>
                          <div class="r-name">
                            <i class="theme-bg ti-briefcase"></i>
                            <span class="dark-color">Apple</span>
                            <label>OCT 2015 - JUNE 2016</label>
                          </div>
                          <div class="r-info">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                          </div>
                        </li> -->
                      </ul>
                    </div>
                  </div> 
                  
                </div> 

                <div class="skill-row m-30px-t sm-m-20px-t">
                    <div class="sub-title m-30px-b">
                      <h2 class="dark-color theme-after">My Skills</h2>
                    </div>

                    <div class="row">
                      <div class="col-md-6 p-30px-l sm-p-15px-l sm-m-30px-t">
                        <h3 class="dark-color">Coding Skills</h3>
                        <div class="skills">
                          <div class="progress-lt">
                            <h6>HTML5</h6>
                            <span class="theme-bg">90%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 90%;">
                              </div>
                            </div>
                          </div>
                          <div class="progress-lt">
                            <h6>CSS3</h6>
                            <span class="theme-bg">90%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 90%;">
                              </div> 
                            </div>
                          </div>
                          <div class="progress-lt">
                            <h6>Javascript</h6>
                            <span class="theme-bg">60%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                          <div class="progress-lt">
                            <h6>Jquery</h6>
                            <span class="theme-bg">60%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                          <div class="progress-lt">
                            <h6>Bootstrap</h6>
                            <span class="theme-bg">70%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 80%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6 p-30px-r sm-p-15px-r">
                        <h3 class="dark-color">Design Skills</h3>
                        <div class="skills"> 
                          <div class="progress-lt">
                            <h6>Photoshop</h6>
                            <span class="theme-bg">60%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                          <div class="progress-lt">
                            <h6>Illustrator</h6>
                            <span class="theme-bg">60%</span>
                            <div class="progress">
                              <div class="progress-bar" style="width: 60%;">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>

                    </div>
                </div>

              </div>
            </div> 
          </div>
        </div> 
      </div>
    </div>

    
    <div class="page white-bg" id="portfolio">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/title-3.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>My Projects</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

               
                <div class="section-titel"> 
                  <div class="st-title">
                    <h2 class="theme-after dark-color">My Projects</h2>
                  </div>
                </div>

                
                <div class="portfolio-section">
                  <div class="portfolio-filter m-10px-b">
                    <ul class="filter text-left">
                      <li class="active theme-after" data-filter="*">All</li>
                      <li class="theme-after" data-filter=".photoshop">Graphic Design</li>
                      <li class="theme-after" data-filter=".website">Website</li>
                      <li class="theme-after" data-filter=".apps">Logo</li>
                    </ul>
                  </div> 

                  <div class="portfolio-content">
                    <ul class="portfolio-cols portfolio-cols-3">
                      <li class="portfolio-item website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-1.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-1.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 

                      <li class="portfolio-item apps">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-2.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-2.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 

                      <li class="portfolio-item photoshop apps">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-3.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-3.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 

                      <li class="portfolio-item photoshop website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-4.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-4.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 

                      <li class="portfolio-item photoshop apps">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-5.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-5.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 

                      <li class="portfolio-item app website">
                        <div class="portfolio-col portfolio-hover-01">
                          <div class="portfolio-img">
                            <a href="#">
                              <img src="static/img/portfolio-6.jpg" title="" alt="">
                            </a>
                            <div class="hover">
                                <div class="action-btn">
                                  
                                  <a class="lightbox-gallery theme-color" href="static/img/portfolio-6.jpg" title="Lightbox gallery image title...">
                                    <i class="fas fa-expand"></i>
                                  </a>
                                  <a href="#" class="theme-color">
                                    <i class="fa fa-link"></i>
                                  </a>
                                </div> <!-- Video Btn -->
                            </div> <!-- Hover -->
                          </div>

                          <div class="portfolio-info">
                            <h5>Portpolio Template</h5>
                            <span>Resent Work</span>
                          </div>
                        </div> <!-- Portfolio -->
                      </li> 


                    </ul> 
                  </div> <!-- portfolio content -->
                </div>

                

              </div>
            </div> 
          </div>
        </div> 
      </div>
    </div>

    <!-- 
    ====================
    Contact us
    ====================
     -->
    <div class="page white-bg" id="contact">
      <div class="container-fluid p-0">
        <div class="row no-gutters">
          <div class="col-lg-3 col-xl-4 page-title" style="background-image: url(static/img/title-4.jpg); ">
            <div class="v-center-box d-flex align-items-end">
              <h2>Contact Me</h2>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8">
            <div class="page-scroll">
              <div class="page-content">

                
                <div class="section-titel"> 
                  <div class="st-title">
                    <h2 class="theme-after dark-color">Contact Me</h2>
                  </div>
                </div>

                 
                <div class="row">
                  <div class="col-lg-12 m-30px-b sm-m-15px-b">
                    <div class="contact-form">
                        <h4 class="dark-color font-alt m-20px-b">We Love to hear from you!</h4>
                        <form action="thank-you.php" class="contactform" method="post">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Name" class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="email" placeholder="Email Id"  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Phone No."  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Subject"  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>



                                <div class="col-md-12">
                                <div class="form-group">
                                  <textarea  placeholder="Your Comment"  class="form-control" required=""></textarea>
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                               </div>
                                <div class="col-md-12">
                                  <div class="send">
                                     <button class="btn btn-theme" type="submit" name="send"> send message</button>
                                  </div>
                                  <span class="output_message"></span>
                                </div>
                              </div>
                        </form>
                    </div>
                  </div> 
                </div>

                <div class="row">
                  <div class="col-md-4 m-15px-tb">
                    <div class="contact-info">
                        <i class="theme-color ti-location-pin"></i>
                        <h6 class="dark-color font-alt">Address</h6>
                        <p>Sultanpur, New Delhi 110030</p>
                    </div>
                  </div>
                  <div class="col-md-4 m-15px-tb">
                    <div class="contact-info">
                      <i class="theme-color ti-mobile"></i>
                      <h6 class="dark-color font-alt">Phone</h6>
                      <p><a href="tel:917291877603">( +91 ) 7291 - 877 - 603</a></p>
                    </div>
                  </div>
                  <div class="col-md-4 m-15px-tb sm-m-0px-b">
                    <div class="contact-info">
                        <i class="theme-color ti-email"></i>
                        <h6 class="dark-color font-alt">Email</h6>
                        <p><a href="mailto:roushan7192@gmail.com">Roushan7192@gmail.com</a></p>
                    </div>
                  </div>
                </div>

              </div>
            </div> 
          </div>
        </div> 
      </div>  
    </div>

  
  </div>


<!-- contact me model -->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog cus_mod">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="mod_hd"> 
        <h2>Get Awesome Local Deals Now</h2>

      </div>
      <div class="mod_pad">
     <form class="contactform" method="post">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Name" name="g_name" class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="email" placeholder="Email Id" name="g_emial" class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Phone No." name="g_phone"  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Subject" name="g_sub" class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>



                                <div class="col-md-12">
                                <div class="form-group">
                                  <textarea  placeholder="Your Comment" name="g_msg" class="form-control" required=""></textarea>
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                               </div>
                                <div class="col-md-12">
                                  <div class="send">
                                     <button class="btn btn-theme" type="submit" name="contact_in" value="contact_in"> send message</button>
                                  </div>
                                  <span class="output_message"></span>
                                </div>
                              </div>
                        </form>

                       </div> 
                       <p class="close_text"><span data-dismiss="modal">close</span></p>
    
    </div>

  </div>
</div>



<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="PodcastModal" aria-hidden="true">
   <div class="modal-dialog modal-lg">
      <ddiv class="modal-content">
      <div class="mod_hd"> 
        <h2>Hire Me </h2>

      </div>
      <div class="mod_pad">
     <form action="thank-you.php" class="contactform" method="post">
                            <div class="row">
                              <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Name" class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="email" placeholder="Email Id"  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Website"  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>

                                <div class="col-md-6">
                                <div class="form-group">
                                  <input  type="text" placeholder="Position "  class="  form-control" required="">
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                                </div>



                                <div class="col-md-12">
                                <div class="form-group">
                                  <textarea  placeholder="Discription"  class="form-control" required=""></textarea>
                                  <span class="input-focus-effect theme-bg"></span>
                                </div>
                               </div>

                                <div class="col-md-6">
                                  <div class="send">

                                     <button class="btn btn-theme" type="submit" name="send"> Submit</button>
                                  </div>
                                  <span class="output_message"></span>
                                </div>
                              </div>
                        </form>

                       </div> 
                       <p class="close_text"><span data-dismiss="modal">close</span></p>
    
    </div>
   </div>
</div>

  <!-- 
    ====================
    Header
    ====================
  -->
  <header class="header">
    <!-- <div class="logo">ROUSHAN</div> -->
    <div class="menu-toggle">
        <button class="menu-button"><span>Menu</span></button>
    </div>
  </header>

  <!-- jQuery -->
  <script src="static/js/jquery-3.3.1.slim.min.js"></script>

  <!-- Plugins -->
  <script src="static/plugin/bootstrap/js/popper.min.js"></script>
  <script src="static/plugin/bootstrap/js/bootstrap.min.js"></script>
  <script src="static/plugin/owl-carousel/js/owl.carousel.min.js"></script>
  <script src="static/plugin/typeit-master/typeit.min.js"></script>
  <script src="static/plugin/isotope/isotope.pkgd.min.js"></script>
  <script src="static/plugin/magnific/jquery.magnific-popup.min.js"></script>
  <script src="static/plugin/nav/js/classie.js"></script>
  <script src="static/plugin/nav/js/main.js"></script>
  <script src="static/js/custom.js"></script>
  
  <script>
	jQuery(document).ready(function(){
  jQuery(function() {
        jQuery(this).bind("contextmenu", function(event) {
            event.preventDefault();
            // alert('Right click disable in this site!!')
        });
    });
});


document.onkeydown = function(e) {
    if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 ||     e.keyCode === 117 || e.keycode === 17 || e.keycode === 85)) {//ctrl+u Alt+c, Alt+v will also be disabled sadly.
        // alert('not allowed');
    }
    return false;
};
 

  </script>
</body>
</html>
