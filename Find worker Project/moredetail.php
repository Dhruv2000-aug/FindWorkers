<?php
  include "db_connection.php";
    include "header.php";

    


    ?>
    <?php
     $f=$_GET['uname'];
     
     $x=mysqli_query($link,"select * from postjob where id='$f'");
     $row=mysqli_fetch_array($x);

    ?>
    <div class="hero-wrap hero-wrap-2" style="background-image: url();" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
          	<p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span class="mr-3"><a href="blog.html">Blog <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single</span></p>
            <h1 class="mb-3 bread">Single Blog</h1>
          </div>
        </div>
      </div>
    </div>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
            
            <p>
              <img src="<?php echo $row["img"]; ?>" style="height: 400px;width: 400px;"; alt="" class="img-fluid">
            </p>
            </div> <!-- .col-md-8 -->
          <div class="col-md-4 pl-md-5 sidebar ftco-animate">
            <div class="sidebar-box">
              <form action="#" class="search-form">
               
              </form>
            </div>
            <div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3 class="heading-3">Jobs</h3>
                <li><span>Name : </span><b><?php echo $row['name']; ?> </b></a></li>
                <li><span>Type : </span><b><?php echo $row['type']; ?></b></li>
                <li><span>Location : </span><b><?php echo $row['location']; ?></b></li>
                <li><span>Dicription : </span><b><?php echo $row['disc']; ?></b></li>
              </div>
            </div>
            <span>Mobile No:</span>
              <?php 
                        if(!isset($_SESSION["uname"]))
                        {
              ?>
                        <b>show mo no. require login</b>
              <?php
                        } 
                        else 
                        {
                echo $row['mobileno'];
                        }
               ?>


            
          </div>

        </div>
      </div>
    </section> <!-- .section -->
		
		

    <?php
      include "footer.php";
  ?>
