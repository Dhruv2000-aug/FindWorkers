<?php
    include "db_connection.php";

?>


<?php
    include "header.php";
?>

<div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-start">
            <div class="col-md-12 ftco-animate text-center mb-5">
                <p class="breadcrumbs mb-0"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Job Post</span></p>
                <h1 class="mb-3 bread">Post A Job</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">

            <div class="col-md-12 col-lg-8 mb-5">

                <form  class="p-5 bg-white" method="post" enctype="multipart/form-data">

                    <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Upload Image</label>
                            <input type="file" name="img" required>
                        </div>
                    </div>

                    <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="fullname">Name</label>
                            <input type="text" id="fullname" name="name" class="form-control" placeholder="eg.patel solin " required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12 mb-3 mb-md-0">

                            <lable>Type</lable>
                            <select class="form-control" name="category" required>
                                <option>Teacher</option>
                                <option>Carpenter</option>
                                <option>Labour</option>
                                <option>Washerman</option>
                                <option>Driver</option>
                                <option>Electrition</option>
                                <option>Plumber</option>
                                <option>Other</option>
                            </select>


                        </div>
                    </div>
                   



                    <div class="row form-group ">
                        <div class="col-md-12 mb-3 mb-md-0">
                            <label class="font-weight-bold" for="mobileno">Moblie No.</label>
                            <input type="tel" class="form-control" name="mobileno" placeholder="eg. 987654321" required maxlength="10" pattern="\d{10}" onkeypress="return onlyNumberKey(event)">
                        </div>
                    </div>


                    <div class="row form-group mb-4">
                        <div class="col-md-12"><h3>Location</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <input type="text" class="form-control" name="location" placeholder="eg. kalavad ,Rajkot" required="required" required>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-md-12"><h3>Work Description</h3></div>
                        <div class="col-md-12 mb-3 mb-md-0">
                            <textarea class="form-control" name="disc"  cols="30" rows="5" required></textarea>
                        </div>
                    </div>

                    

                    <div class="col-md-12 form-group">
                            <button type="submit" value="submit" name="postjob" class="button button-login w-100 btn btn-primary" >Post job
                            </button>
                            
                    </div>
                    


                </form>
                          <?php
               
                if(isset($_POST["postjob"]) && isset($_SESSION["uname"]))
                {
                    $fnm = $_FILES["img"]["name"];
                    $extp = substr($fnm, strlen($fnm) -3, 3);
                
                    if ($extp == "jpg" || $extp == "png")
                    {
                        $dst = "employ/". $fnm;
                        // $dst2 = "employ/". $fnm; 
                        move_uploaded_file($_FILES["img"]["tmp_name"], $dst);
                    } else {
                        echo "upload only pdf files";
                    }

                mysqli_query($link, "insert into postjob values(NULL ,'$dst','$_POST[name]','$_POST[category]','$_POST[mobileno]','$_POST[location]','$_POST[disc]')");
          }
                  else{          
                ?>
                <script>
                    alert('For post job login is required');
                </script>
            <?php } ?>
            </div>

            
        </div>
    </div>
</section>

<script>
     function onlyNumberKey(evt) {

        // Only ASCII charactar in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }   
</script>
<?Php
    include "footer.php";
?>