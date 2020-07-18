<?php
    include "db_connection.php";
    if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
    include "header.php";

?>




<script>
  
    function kishan()
    {
        var s =document.getElementById("email").value;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML = this.responseText;

            }
        };
        xhttp.open("GET","compare.php?email="+s, true);
        xhttp.send();
    }

    function onlyNumberKey(evt) {

        // Only ASCII charactar in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
</script>




<div style="height: 100px;width: 100%;background-color: blue;"></div>
    

<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1>Login / Register</h1>
                <nav aria-label="breadcrumb" class="banner-breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Login/Register</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Home</li>
                    </ol>
                </nav>  
            </div>
        </div>
    </div>
</section>
<!-- ================ end banner area ================= -->

<!--================Login Box Area =================-->
<section class="login_box_area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>I am already member</h4>
                        
                        <a class="button button-account" href="logingn.php">Sign in</a>
                    </div>
                </div>
            </div>
            

            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>sign up </h3>
                    <form class="row login_form" action="" method="post" >
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" autofocus="autofocus" required="required" >                            
                        </div>

                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="mobileno"  placeholder="Mobile No"  required="required" maxlength="10" pattern="\d{10}" onkeypress="return onlyNumberKey(event)">                            
                        </div>

                        <div id="demo" style="color: red;margin-left: 20px;" ></div>
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" name="email" id="email"  placeholder="E-mail" required="required" onkeyup="kishan()">
                            
                        </div>
                        

                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="password"  placeholder="password" required="required">
                            
                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" name="repassword"  placeholder="Re-Password" required>
                             
                        </div>
                       
                         <div class="col-md-12 form-group">
                            <button type="submit" value="submit" name="signup" class="button button-login w-100 btn btn-primary" >Sign up
                            </button>
                            
                        </div>
                    
                            </form> 
                            <?php   
                          
                           if(isset($_POST["signup"]))
                           {
                            $count=0;
                             $x=mysqli_query($link,"select email from user where email='$_POST[email]'");
                            $count=mysqli_num_rows($x);
        
                            if($count==0)
                            {
                               if ($_POST["repassword"] == $_POST["password"]) 
                               {


                                 mysqli_query($link, "insert into user values(NULL ,'$_POST[name]','$_POST[mobileno]','$_POST[email]','$_POST[password]')");
                                     $_SESSION['uname']=$_POST['email'];
                                     ?>  
                                     <script type="text/javascript">
                                         
                                         window.location="index.php";                                      
                                     </script>
                                     <?php
                                }
                                else       
                                {
                                ?>
                                <script>
                                alert("password not match");
                                </script>
                                <?php
                                }
                            }
                            else
                            {
                                ?>
                                <script type="text/javascript">
                                    alert('user already exit');
                                </script>
                             <?php
                            }
                            }
                                 ?>
                             

                        
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Login Box Area =================-->



<?php
    include "footer.php";
?>