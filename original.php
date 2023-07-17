<?php

$conn = mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

if (isset($_POST['send'])) {

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');

   if (mysqli_num_rows($select_message) > 0) {
      $message[] = 'message sent already!';
   } else {
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Personal Portfolio Website Design</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">


   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>

<body>

   <?php

   if (isset($message)) {
      foreach ($message as $message) {
         echo '
      <div class="message" data-aos="zoom-out">
         <span>' . $message . '</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
      }
   }

   ?>

   <!-- header section starts  -->

   <header class="header">

      <div id="menu-btn" class="fas fa-bars"></div>

      <a href="#home" class="logo">Portfolio</a>

      <nav class="navbar">
         <a href="#home" class="active">home</a>
         <a href="#about">about</a>
         <a href="#skills">skills</a>
         <a href="#portfolio">portfolio</a>
         <a href="#contact">contact</a>
      </nav>

      <div class="follow">
         <!-- <a href="#" class="fab fa-facebook-f"></a>
         <a href="#" class="fab fa-twitter"></a> -->
         <a href="https://www.instagram.com/nilayaltinay/" class="fab fa-instagram"></a>
         <a href="https://www.linkedin.com/in/nilayaltinay/" class="fab fa-linkedin"></a>
         <a href="https://github.com/nilayaltinay" class="fab fa-github"></a>
      </div>

   </header>

   <!-- header section ends -->

   <!-- home section starts  -->

   <section class="home" id="home">

      <div class="image" data-aos="fade-right">
         <img src="./images/user1.jpg" alt="">
      </div>

      <div class="content">
         <h3 data-aos="fade-up">hi, i am Nilay Altinay</h3>
         <span data-aos="fade-up">web designer & developer</span>
         <p data-aos="fade-up" style="text-align: justify;">
            As a creative and motivated software engineer with a passion for UI/UX design,
            I excel at developing innovative solutions that improve user experiences.
            With a proven track record of delivering successful projects on time and within budget,
            I possess strong analytical thinking skills and thrive in collaborative environments.
            My expertise in designing and developing UI and CX for web-based applications,
            such as university websites and dashboards, enables me to create intuitive and
            user-friendly interfaces that meet the needs of all users.
            Overall, I am committed to delivering high-quality work that exceeds
            expectations and drives business growth.
         </p>
         <a data-aos="fade-up" href="#about" class="btn">about me</a>
      </div>

   </section>

   <!-- home section ends -->

   <!-- about section starts  -->

   <section class="about" id="about">

      <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

      <div class="biography">
         <div class="row" style="align-content: space-between;">
            <div class="col-6 box-container" style="padding-right: 25px;">
               <div class="box" data-aos="fade-right">
                  <p style="text-align: justify;">
                     I began my career in development back in 2016 when I joined a company working on a project that tracked the process of a product from purchase to in-store delivery. This experience exposed me to user-friendly application development and process workflows. In 2017, I moved to Sydney where I pursued a Master's degree in Web Design and Development. I specialized in Software Engineering (cloud computing) at Torrens University and completed my degree in May 2023.
                  </p>
               </div>
            </div>

            <div class="col-6 box-container" style="padding-left: 25px;">
               <div class="box" data-aos="fade-left">
                  <p style="text-align: justify;">
                     During my studies, I had the opportunity to work as a junior developer in the service design department, where I actively utilized HTML, CSS, JS, PHP, and Smarty Template. I thoroughly enjoyed generating new ideas and implementing them, constantly learning in the process. The satisfaction of overcoming challenging tasks and the desire to keep learning continue to fuel my motivation in this field. Transforming concepts into visuals feels like solving a puzzle to me.
                  </p>
               </div>
            </div>

         </div>

         <!-- <div class="bio">
            <h3 data-aos="zoom-in"> <span>name : </span> Nilay Altinay </h3>
            <h3 data-aos="zoom-in"> <span>email : </span> nilayaltnay@gmail.com </h3>
            <h3 data-aos="zoom-in"> <span>address : </span> Sydney, Australia </h3>
            <h3 data-aos="zoom-in"> <span>phone : </span> 0450106091 </h3>
            <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
            <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
         </div> -->

         <!-- <a href="#" class="btn" data-aos="fade-up">download CV</a> -->

      </div>

      <div class="edu-exp" style="margin-top: 100px;">

         <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

         <div class="row">

            <div class="box-container">

               <h3 class="title" data-aos="fade-right">education</h3>

               <div class="box" data-aos="fade-right">
                  <span>2021 - 2023</span>
                  <h3>Master of Software Engineering. (Cloud Computing, Adv.) </h3>
                  <p>Torrens University Australia – Sydney, NSW</p>
               </div>

               <!-- <div class="box" data-aos="fade-right">
               <span>2021 - 2022</span>
               <h3>graphic designer</h3>
               <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quaerat assumenda, eaque sequi repellat natus quia.</p>
            </div> -->

               <div class="box" data-aos="fade-right">
                  <span>2009 - 2015</span>
                  <h3>Bachelor’s Degree in Engineering</h3>
                  <p>Uludag University – Bursa Turkey</p>
               </div>

            </div>

            <div class="box-container">

               <h3 class="title" data-aos="fade-left">experience</h3>

               <div class="box" data-aos="fade-left">
                  <span>2022 - present</span>
                  <h3>Junior Product Developer </h3>
                  <p>Torrens University Australia - Sydney Australia</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>2022 - present</span>
                  <h3>Education and Visa Counsellor </h3>
                  <p>Hub Education - Sydney Australia</p>
               </div>

               <div class="box" data-aos="fade-left">
                  <span>( 2018 - 2022 )</span>
                  <h3>Junior Brand Manager </h3>
                  <p>Y-London – Sydney Australia</p>
               </div>

            </div>

         </div>

      </div>

   </section>

   <!-- about section ends -->

   <!-- services section starts  -->

   <section class="skills" id="skills">

      <h1 class="heading" data-aos="fade-up"> <span>skills</span> </h1>

      <div class="box-container">

         <div class="box" data-aos="zoom-in">
            <!-- <i class="fas fa-code"></i> -->
            <i class="fab fa-brands fa-html5"></i>
            <h3>HTML</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-brands fa-css3-alt"></i>
            <h3>CSS</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-bootstrap"></i>
            <h3>bootstrap</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-brands fa-js"></i>
            <h3>JS</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-brands fa-php"></i>
            <h3>PHP</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fab fa-brands fa-python"></i>
            <h3>PYTHON</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>
         <div class="box" data-aos="zoom-in">
            <i class="fab fa-brands fa-git-alt"></i>
            <h3>GIT</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>
         <div class="box" data-aos="zoom-in">
            <img src="./images/mysql.jpg" alt="mysql" style="width: 59px;">
            <h3>MYSQL</h3>
            <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, placeat veritatis accusantium nostrum rem ipsa.</p> -->
         </div>

      </div>

   </section>

   <!-- services section ends -->

   <!-- portfolio section starts -->

   <section class="portfolio" id="portfolio">
      <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>


      <div class="container">

         <div class="col-12">


            <div class="filters">
               <div class="button-group filters-button-group" data-filter-group="location" style="padding: 10px;display: flex;justify-content: center;align-items: center;flex-wrap: wrap;align-content: center;">
                  <button class="button is-checked" data-filter="*">All</button>
                  <button class="button" data-filter=".Slider">Slider</button>
                  <button class="button" data-filter=".Calander">Calander</button>
                  <button class="button" data-filter=".Data-Visualisation">Data-Visualisation</button>
                  <button class="button" data-filter=".To-Do-List">To-Do-List</button>
               </div>
            </div>
         </div>
         <!--CARDS-->
         <div class="col-12">

            <div class="grid-sizer col-12 col-md-6 col-lg-3">&nbsp;</div>
            <div class="row portfolio-wrap">

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item Slider">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;"> -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Slider</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">This project has been developed by using a slider to divide a page with a lot of content into sections and to reflect the event flow.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel" style="font-size:3rem; margin-left:20px;">Slider</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;display: flex;text-align: justify;padding: 20px;">
                                       While developing the page, cards were used to show the content better.
                                       The paths to be followed by a student at the graduation stage were shown step by step.</p>


                                    <img src="./images/graduate.jpg" alt="" class="d-block w-100">

                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->

               <!--START CARD -->

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item Slider">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;"> -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Slider</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">This project has been developed by using a slider to divide a page with a lot of content into sections and to reflect the event flow.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">Details</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel" style="font-size:3rem; margin-left:20px;">Slider</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;display: flex;text-align: justify;padding: 20px;">
                                       While developing the page, cards were used to show the content better.
                                       The paths to be followed by a student at the graduation stage were shown step by step.</p>


                                    <img src="./images/graduate.jpg" alt="" class="d-block w-100">

                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item Calander">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;"> -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Timetable</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">This timetable is designed for the student dashboard. HTML, CSS, JS, PHP, Smarty Template were used in its development.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#2">Details</a>
                        <div class="modal fade" id="2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel" style="font-size:3rem; margin-left:20px;">Timetable</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;display: flex;text-align: justify;padding: 20px;">
                                       Weekly and monthly display is designed for students in timetable design.
                                       While the view can be changed with a single click,
                                       it also allows navigation between months and weeks.
                                       In addition, there is an event display.
                                       When the user clicks on the event,
                                       the modal opens and the events of the day are displayed in the modal.
                                       For mobile design, the monthly display is designed differently.
                                       However, the use was made with the same approach.</p>


                                    <div id="carouselExampleDark" class="carousel carousel-dark slide" style="position: relative;padding: 50px;background-color: #FF3CAC;background-image: linear-gradient(225deg, #FF3CAC 0%, #784BA0 50%, #2B86C5 100%); border: solid 2px black;">
                                       <div class="carousel-inner" style="filter: drop-shadow(0px 10px 40px rgba(0,0,0,0.55));">
                                          <div class="carousel-item active">
                                             <img src="./images/timetable.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                             <img src="./images/timetable1.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                             <img src="./images/timetable2.jpg" class="d-block w-100" alt="...">
                                          </div>
                                          <div class="carousel-item">
                                             <img src="./images/timetable3.jpg" class="d-block w-100" alt="...">
                                          </div>
                                       </div>
                                       <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Previous</span>
                                       </button>
                                       <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                          <span class="visually-hidden">Next</span>
                                       </button>
                                    </div>

                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item Data-Visualisation">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;">  -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Card title</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#3">Details</a>
                        <div class="modal fade" id="3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel">Test-3</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;  display: flex;">
                                       Test3</p>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item Data-Visualisation">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;">  -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Card title</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#3">Details</a>
                        <div class="modal fade" id="3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel">Test-3</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;  display: flex;">
                                       Test3</p>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->

               <div class="col-12 col-md-6 col-lg-3 mb-5 event-item To-Do-List">
                  <div class="card h-100 mb-3" style="border: var(--border-light);border-radius: 15px;">
                     <!-- <img src="images/img-1.jpg" class="card-img-top" alt="..." style="border-radius: 15px 15px 0 0;width: auto;"> -->
                     <div class="card-body">
                        <div class="card-title" style="font-size: 2rem;padding: 1.5rem;border-bottom: solid 1px;">
                           <h2>Card title</h2>
                        </div>
                        <div class="card-text" style="margin-top: 15px;">
                           <p style="font-size: 1.7rem;">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <a href="#" class="btn" data-bs-toggle="modal" data-bs-target="#4">Details</a>
                        <div class="modal fade" id="4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="--bs-modal-width: 900px;">
                           <div class="modal-dialog">
                              <div class="modal-content">
                                 <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel">Test-4</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="font-size: 2rem;"></button>
                                 </div>
                                 <div class="modal-body">
                                    <p style="font-size: 1.7rem;  display: flex;">
                                       Test4</p>
                                 </div>
                                 <div class="modal-footer">
                                    <button type="button" class="btn" data-bs-dismiss="modal">Close</button>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- END CARD -->


            </div>
         </div>

      </div>
      </div>



      <!-- other option -->

   </section>


   <!-- portfolio section ends -->

   <!-- contact section starts  -->

   <section class="contact" id="contact">

      <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

      <form action="" method="post">
         <div class="flex">
            <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
            <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
         </div>
         <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
         <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
         <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
      </form>

      <div class="box-container">

         <!-- <div class="box" data-aos="zoom-in">
            <i class="fas fa-phone"></i>
            <h3>Phone</h3>
            <p>0450106091</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-envelope"></i>
            <h3>Email</h3>
            <p>nilayaltnay@gmail.com</p>
         </div>

         <div class="box" data-aos="zoom-in">
            <i class="fas fa-map-marker-alt"></i>
            <h3>Address</h3>
            <p>Sydney, Australia</p>
         </div> -->

      </div>
      <form action="?" method="POST">
         <div id="html_element"></div>
         <br>
         <input type="submit" value="Submit">
      </form>
      <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer>
      </script>


   </section>

   <!-- contact section ends -->


   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Nilay Altinay</span> </div>









   <!-- isotope js link  -->

   <script src="//npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>


   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <!-- aos js link  -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>



   <script>
      AOS.init({
         duration: 800,
         delay: 200
      });
   </script>

   <script>
      const myModal = document.getElementById('myModal');
      const myInput = document.getElementById('myInput');
      // const carousel = new bootstrap.Carousel('#myCarousel');


      // myModal.addEventListener('shown.bs.modal', () => {
      //    myInput.focus()
      // });
   </script>

   <script type="text/javascript">
      var onloadCallback = function() {
         grecaptcha.render('html_element', {
            'sitekey': 'your_site_key'
         });
      };
   </script>

</body>

</html>