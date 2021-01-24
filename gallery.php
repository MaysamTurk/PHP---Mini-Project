<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Gallery</title>
    <style>
.row {
    margin: 1rem 1rem;
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

<h1 style="text-align: center; margin-top:3.5rem; margin-bottom: 3.5rem; text-shadow: 1px 1px 1px #000;">Photo Gallery of Coding Academy by Orange</h1>
<div class="row">
            <?php 
                function gallery($img) {
                    echo " <div class='col-md-3 m-card'>
                    <div style='width: 20rem; box-shadow: 3px 5px 2px 2px  #000;'>
                    <img src=". $img ." class='card-img-top' alt='OCA'>";
                    echo "
                    </div>
                    </div>";
                    }

                $img = array(
                    "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dM0bXBfEzWoXPibo2cvXGFC9B4K2zxHXNQ&usqp=CAU",
                    "https://www.psut.edu.jo/sites/default/files/IMG_0063_1.JPG",
                   "https://pbs.twimg.com/media/ERJVeIWWsAEGlpp.jpg",
                   "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTwEgLmE_YAsUmRp3SMi83I1S7_sdA9sLhlrQ&usqp=CAU",
                   "https://pbs.twimg.com/media/D0LZMVxWoAclj1k.jpg",
                   "https://pbs.twimg.com/media/D-DSAuNWkAAStbu.jpg",
                   "https://pbs.twimg.com/media/EGXgfBSXUAA0i8a.jpg",
                   "https://www.akhbarna.net/assets/2019-11-30/large/48084_1_1575121240.jpg",
                   "https://www.anbaalwatan.com/uploads/cc52b2dded1658fa0e0fb53675b6b84b.JPG",
                   "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dM0bXBfEzWoXPibo2cvXGFC9B4K2zxHXNQ&usqp=CAU",
                   "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT3dM0bXBfEzWoXPibo2cvXGFC9B4K2zxHXNQ&usqp=CAU",
                   "https://www.psut.edu.jo/sites/default/files/IMG_0063_1.JPG"
                );
                array_map("gallery", $img)
            ?>
    </div>
</body>
</html>