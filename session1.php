<!-- <?php
// $name = "Shaffay Bajwa";
// $a = 10 ;
// $b = 20 ;
// $a = 50;
// $c = $a + $b;
// echo $c ;
// echo $a + $b;
//echo $a,$b,$name;
//echo "<h1>".$name."</h1>";
?> -->
<!-- <h1><?php //echo $name ?></h1> -->

<!-- <form action="session1.php" method="POST" >

Whats Your Name :
<input type="text" name="fullname" >

<input type="submit" name="submit" value="Enter" >

</form>


<?php

// if(isset($_POST['submit'])){

//     $name = $_POST['fullname'];

//     echo "Hello ,".$name;
    
// }


?> -->

<!doctype html>
<html lang="en">
  <head>
    <title> Calculator </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

      <div class="container">
      <form action="file/calculator.php" method="post">


        <div class="form-group">
            <label for="">First Number</label>
            <input type="number" name="num1" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>
        
        <div class="form-group">
            <label for="">Second Number</label>
            <input type="number" name="num2" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <small id="helpId" class="text-muted">Help text</small>
        </div>

    <input type="submit" class="btn btn-primary" name="submit" value="Add" >

</form>

      </form>
      
      </div>

  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>