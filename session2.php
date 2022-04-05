<!doctype html>
<html lang="en">
  <head>
    <title>Feedback </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body class="bg-dark">
      <div class="container bg-secondary mt-3">
<?php

if(isset($_GET['n'])){
$name = $_GET['n'];
$food = $_GET['f'];
$service = $_GET['s'];

if($service == "Best"){
  $color="success";

}elseif($service == "Good"){
  $color="primary";
}else{
  $color="warning";
}


if($food == "Best"){
?>
<!-- //Best  -->
<div class="alert alert-<?php echo $color ?> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Thanks <?php  echo $name ?></strong> Your Coments are Appreciated.,
      </div>

<?php
}elseif($food == "Good"){
  ?>
<!-- //Good -->
<div class="alert alert-<?php echo $color ?> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Thanks <?php  echo $name ?></strong> Hope You like are food, will be better for the next time
      </div>

  <?php
}else{
  ?>
<!-- //Fine -->
<div class="alert alert-<?php echo $color ?> alert-dismissible fade show" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Thanks <?php  echo $name ?></strong> We are very sorry, will be better for the next time
      </div>
      

  <?php
  
}


}

?>
      

      <script>
        $(".alert").alert();
      </script>

        <form action="session2.php" class="mt-4" method="post">

        <div class="form-group">
          <label for="">Enter Your Name :</label>
          <input type="text"
            class="form-control" name="name" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
        <div class="form-group">
          <label for="">Enter Your Age :</label>
          <input type="text"
            class="form-control" name="age" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div>
    <div class="form-group">
      <label for="">Food</label>
      <select class="form-control" name="food" id="">
        <option value="Best" >Best</option>
        <option value="Good" >Good</option>
        <option value="fine" >fine</option>
      </select>
    </div>
  
    <div class="form-group">
      <label for="">Service</label>
      <select class="form-control" name="service" id="">
        <option value="Best" >Best</option>
        <option value="Good" >Good</option>
        <option value="fine" >fine</option>
      </select>
    </div>
  
    <input name="feedback" id="" class="btn btn-primary float-right "  type="submit" value="Submit">
</form>

      </div>
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

<?php

if(isset($_POST['feedback'])){

    $name = $_POST['name'];
    $age = $_POST['age'];
    $food = $_POST['food'];
    $service = $_POST['service'];

    //echo $name,$age,$food,$service;

    if($age < 18){

      $noun = "Kiddo";

    }else{
      $noun = "Sir";
    }
    header("location:session2.php?n=$noun&f=$food&s=$service");
    




}




?>