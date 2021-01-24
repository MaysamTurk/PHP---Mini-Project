<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
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
                $link=array("index.php","report.php","dash.php","gallery.php");
                array_map("Navbar", $name,$link);
             ?>
            </ul>
         </div>
  </div>
</nav>

<!-- ------------------------------------------------- -->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">check In</th>
      <th scope="col">check Out</th>
    
    </tr>
  </thead>
  <tbody>
    
    <?php include "data.php"?>
<?php 
    foreach($data as $val){
        foreach ($val['attendance'] as $keyy => $attendance) {
            // echo "check_in: ". $attendance['check_in']."<br/>";
            // echo "check_out: ". $attendance['check_ out']."<br/>"; 
        }
        
    echo "<tr><td>". $val['id']. "</td>
          <td>" .$val['name']."</td>
          <td>". $attendance['check_in']. "</td>
          <td>" .$attendance['check_ out']."</td></tr>";
    
 
 }
 

?>


      
    
  </tbody>
</table>


</body>
</html>