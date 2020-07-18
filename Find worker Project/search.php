  <?php
  include "db_connection.php";
    include "header.php";

    include ("pagination/function.php");


    ?>

    <link href="pagination/css/pagination.css" rel="stylesheet" type="text/css" />
    <link href="pagination/css/A_green.css" rel="stylesheet" type="text/css" />
<?php

  $page = (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
  $limit =8;
  $startpoint = ($page * $limit) - $limit;
  //to make pagination
  $type=$_GET['search'];
  $location=$_GET['location'];
  $statement = "postjob";
  $x=mysqli_query($link,"select * from {$statement} where type='$type' and location='$location' LIMIT {$startpoint} , {$limit}");
  



?>

    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
          <div class="col-md-12 ftco-animate text-center mb-5">
            <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span><?php echo $type; ?></span></p>
            <h1 class="mb-3 bread"><?php echo $type; ?></h1>
          </div>
        </div>
      </div>
    </div>
    

        <section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <?php
          while ($row=mysqli_fetch_array($x)) 
          {
          ?>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="moredetail.php?uname=<?php echo $row['id']; ?>" class="block-20" style="background-image: url(<?php echo $row["img"]; ?>); width: 250px;">
              </a>
              <div class="text mt-2">
                <div class="meta mb-2">
                  <div><a href="#">August 28, 2019</a></div>
                  <div><h2><?php echo $row["name"]; ?></h2></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                
              </div>
            </div>
          </div>
          
              <?php
            }
            ?>
              
          
        </div>
        
      </div>
    </section>
      </div>
        <?php

              echo "<div id='pagingg'>";
              echo pagination($statement,$limit,$page,$link);
              echo "</div>";
              
        ?>           
      </div>
        
    
    <?php
    include "footer.php";
?>
