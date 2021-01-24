<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>Navbar</title>
  <style>
  .row {
    margin: 0.5rem 1rem;
}

.m-card{
    margin-bottom: 1.5rem;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Orange_logo.svg/766px-Orange_logo.svg.png" class="rounded float-end" alt="..." style="width: 50px; height: 50px;"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
         <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
             <?php
                function Navbar($name,$link) {
                echo  ' <li class="nav-item active mr-2 "><a class="nav-link text-light" href='.$link.'>'.$name.'<span class="sr-only"></span></a> </li>';
                }
                $name = array("Home", "Attendance Report", "Dashboard", "Academy Gallery");
                $link=array("index.php","attend.php","dash.php","gallery.php");
                array_map("Navbar", $name,$link);
             ?>
            </ul>
         </div>
  </div>
</nav>

<?php include "data.php"?>


<h1 style="text-align: center; margin-top:3.5rem; margin-bottom: 3.5rem; text-shadow: 1px 1px 1px #000;">Coding Academy Trainees</h1>

<div class="row">
      


<!-- <div class="card" style="width: 18rem;"> -->

<?php 

// function Card(){
    //     echo ' <img src='. $val['image'] .' class="card-img-top" alt="...">
    //     <div class="card-body">
    //     <h5 class="card-title">'. $val['name'].' </h5>
    //     <a href="#" class="btn btn-primary">View</a>
    //     </div> ';
    
    
    //     $all=array($val["name"],$val["image"]);
    //     array_map("Card", $all);
    
    // }
    
    foreach($data as $val){
        
        echo " <div class='col-md-3 m-card'>
        <div class='card' style='width: 18rem;'>
        <img src=". $val['image'] ." class='card-img-top' alt='...'>
        <div class='card-body'>";
        echo "<h5 class='card-title'>".$val['name']."</h5>
        <p class='card-title'>ID no: " .$val['id']."</p>
        <p class='card-title'>Birth: ".$val['birthday']."</p>
        <a href='#' class='btn btn-dark'>View</a>
        </div></div>
        </div>";
        //  echo "id: ". $val['id']."<br/>"; 
        //  echo  "name: ". $val['name']."<br/>"; 
    //  echo "birthday: ". $val['birthday']."<br/>"; 
    //  echo "github account: ". $val['github account']."<br/>"; 
    //  echo "linkedin: ". $val['linkedin']."<br/>"; 
    //  echo "image: ". $val['image']."<br/>"; 
 
//      foreach ($val['projects'] as $key => $projects) {
//          echo "project name: ". $projects['project_name']."<br/>";
//          echo "is compleated: ". $projects['is_compleated']."<br/>";
//          echo "<hr>";
//    }
 
//    foreach ($val['attendance'] as $keyy => $attendance) {
//      echo "check_in: ". $attendance['check_in']."<br/>";
//      echo "check_out: ". $attendance['check_ out']."<br/>"; 
//  }
 }
 

?>
</div>


<!-- <div class="card" style="width: 18rem;">
  <img src=". $val['image']." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">". $val['name']."</h5>
    <a href="#" class="btn btn-primary">View</a>
  </div> -->

</body>
