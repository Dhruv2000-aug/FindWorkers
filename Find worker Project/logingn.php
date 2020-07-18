
<?php
    if(session_status()==PHP_SESSION_NONE)
    {
        session_start();
    }
    include "db_connection.php";
    include "header.php";

?>
<div style="height: 100px;width: 100%;background-color: blue;"></div>


<!-- ================ start banner area ================= -->
<section class="blog-banner-area" id="category">
    <div class="container h-100">
        <div class="blog-banner">
            <div class="text-center">
                <h1 style="color: blue">Find Workers Website</h1>
                
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
                        <h4>New to our website?</h4> 
                        <p>The Eassiest Way to Find Workers <br> & Get Work</p>
                        <a class="button button-account" href="signupp.php">Create an Account</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Log in to enter</h3>
                    <form class="row login_form" action="#/" id="contactForm" method="post" >
                        <div class="col-md-12 form-group">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Username[E-mail]" required="required" autofocus="autofocus">

                        </div>
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required="required">
                        </div>
                        <div class="col-md-12 form-group">

                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" name="login" class="button button-login w-100">Log In
                            </button>
                            
                        </div>
                            </form>
                            <?php
                                 if(isset($_POST["login"]))
                {
                    {
                        $count=0;
                        $pass=$_POST["password"];
                        $res=mysqli_query($link,"select * from user where email='$_POST[email]' && pass='$pass'");
                        $count=mysqli_num_rows($res);
                        if ($count > 0)
                        {
                            $_SESSION["uname"]=$_POST["email"];
                            ?>
                            <script>
                                window.location = "index.php";
                            </script>
                        <?php
                        }
                        else{
                        ?>
                            <script>
                                alert("password does not match or account is not active");
                            </script>
                            <?php
                        }

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