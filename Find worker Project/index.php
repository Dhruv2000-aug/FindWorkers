<?php
    include "header.php";
    if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
?>
        
<div class="hero-wrap img" style="background-image: url(images/bg_1.jpg);">
    <div class="overlay"></div>
    <div class="container">
        <div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-10 d-flex align-items-center ftco-animate">
                <div class="text text-center pt-5 mt-md-5">
                    <h1 class="mb-5">The Eassiest Way to Find Workers <br> & Get Work</h1>

                </div>
            </div>
                    <div class="ftco-search my-md-5">
                        <div class="row">
                            <div class="col-md-12 nav-link-wrap">
                                <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find Worker</a>

                                    

                                </div>
                            </div>
                            <div class="col-md-12 tab-wrap">

                                <div class="tab-content p-4" id="v-pills-tabContent">

                                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                                        <form action="/worker/search.php" class="search-job" method="get">
                                            <div class="row no-gutters">
                                                <div class="col-md mr-md-3">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-briefcase"></span></div>
                                                            <select name="search" id="" class="form-control">
                                                                     <?php 
        $wcategory = mysqli_query($link,"select * from postjob"); ?>
                                                                 <?php while($row=mysqli_fetch_array($wcategory)) { ?>
                                                                    <option value="<?php echo $row['type'] ?>"><?php echo $row['type']; ?></option>
                                                                <?php } ?>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-md mr-md-2">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <div class="select-wrap">
                                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                                <select name="" id="" class="form-control">
                                                                    <option value="">Time</option>
                                                                    <option value="">Day</option>
                                                                    <option value="">Night</option>
                                                                    <option value="">Day and Night</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> -->
                                                <div class="col-md mr-md-3">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                            <div class="icon"><span class="icon-map-marker"></span></div>
                                                           <select name="location" id="" class="form-control">
                                                                 <?php 
        $wcategory = mysqli_query($link,"select * from postjob"); ?>
                                                                 <?php while($row=mysqli_fetch_array($wcategory)) { ?>
                                                                    <option value="<?php echo $row['location'] ?>"><?php echo $row['location']; ?></option>
                                                                <?php } ?>
                                                                <!-- <option value="">Anywere</option> -->
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md">
                                                    <div class="form-group">
                                                        <div class="form-field">
                                                          <!-- <a href="search.php" class="form-control btn btn-primary"s>Search</a> -->
                                                          <button type="submit" class="form-control btn btn-primary">Search</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
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


<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-0">Job Categories</h2>
            </div>
        </div>

        
       
        
        
        <?php

        $wcategory = mysqli_query($link,"select * from postjob");
        while($row=mysqli_fetch_array($wcategory)) 
          { 
         ?>
                    <ul class="category text-center">
                    <li><a href="worker.php?type=<?php echo $row['type'] ?>"><?php echo $row['type']; ?><br><span class="number"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul>
            
          
        
            <?php  } ?>
            
            
        </div>
    </div>
</section>
<?php
    include "footer.php";
?>