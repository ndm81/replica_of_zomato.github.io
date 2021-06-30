<?php
  
  $con=mysqli_connect('localhost', 'root', '', 'zomato');

  if($con)
  {
    ?>
          <script>
            alert("Connection Successfull");
          </script>
    <?php 

  } else {

          ?>
          <script>
            alert("Connection not Successfull");
          </script>
    <?php 


  }
  

  ?>