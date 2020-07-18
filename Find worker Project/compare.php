<?php
    include "db_connection.php";
    $id1=$_GET["email"];
    $x=mysqli_query($link,"select email from user");
    
    while($row =mysqli_fetch_array($x)) 
    {
        $name1 = $row['email'];
        
        if($id1 == $name1)
        {
            
            echo "alrady exists";
        
        }
    }

?>