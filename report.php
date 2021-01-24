<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Document</title>
    <style>
.content-info {
    padding: 40px 0;
    background-size: cover !important;
    background-position: top center !important;
    background-repeat: no-repeat !important;
    position: relative;
    padding-bottom: 100px
}

table {
    width: 100%;
    background: #fff;
    border: 1px solid #dedede
}

table thead tr th {
    padding: 20px;
    border: 1px solid #dedede;
    color: #000
}

table.table-striped tbody tr:nth-of-type(odd) {
    background: #f9f9f9
}

table.result-point tr td.number {
    width: 100px;
    position: relative
}

.text-left {
    text-align: left !important
}

table tr td {
    padding: 10px 20px;
    border: 1px solid #dedede
}

table.result-point tr td .fa.fa-caret-up {
    color: green
}

table.result-point tr td .fa {
    font-size: 20px;
    position: absolute;
    right: 20px
}

table tr td {
    padding: 10px 40px;
    border: 1px solid #dedede
}

table tr td img {
    max-width: 32px;
    float: left;
    margin-right: 11px;
    margin-top: 1px;
    border: 1px solid #dedede
}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c8/Orange_logo.svg/766px-Orange_logo.svg.png" class="rounded float-end" alt="..." style="width: 50px; height: 50px;"></a>
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

<!-- ------------------------------------------------ -->
<section class="content-info">
    <div class="container paddings-mini">
        <div class="row">
            <div class="col-lg-12">
                <table class="table-striped table-responsive table-hover result-point">
                    <thead class="point-table-head">
                        <tr>
                            <th class="text-left">ID No.</th>
                            <th class="text-left">Name</th>
                            <th class="text-left">Check in</th>
                            <th class="text-left">Check out</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
<tr>

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

</tr>
</tbody>

                </table>
            </div>
        </div>
    </div>
</section>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>