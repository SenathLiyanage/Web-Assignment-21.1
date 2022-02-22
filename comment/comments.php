<?php
  
  $sName = "localhost";
$uName = "senudu";
$pass = "2022";
$db_name = "sdg";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}
 ?>

<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Comeents SDG</title>

    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="comments.css">





	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


  <script type="text/javascript" src="comments.js"></script>
  <script type="text/javascript" src="bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</head>

<body>
<!-- Navbar-->
<header class="header">
    <nav class="navbar navbar-expand-lg fixed-top py-3">
        <div class="container"><a href="#" class="navbar-brand text-uppercase font-weight-bold">SDG Goals</a>
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars" aria-hidden="true"></i></button>
            
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="#" class="nav-link text-uppercase font-weight-bold">Home <span class="sr-only">(current)</span></a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Way of Destroy</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">Advers Effects</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">How to manage</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-uppercase font-weight-bold">User Comments</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>


<!-- For demo purpose -->
<div class="container">
    <div class="pt-5 text-white">
        <header class="py-5 mt-5">
            <h1 class="display-4">User Comments</h1>
            <p class="lead mb-0">Have you studied our web page? Then comment below the idea you feel.</p>
            
        </header>
        
            <div class="container">
<div class="be-comment-block">
  <h1 class="comments-title">Popular Comments</h1>
  <div class="be-comment" style="padding-bottom: 20px;">
    <div class="be-img-comment">  
      <a href="blog-detail-2.html">
        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="" class="be-ava-comment">
      </a>
    </div>
    <div class="be-comment-content">
      
        <span class="be-comment-name">
          <a href="blog-detail-2.html">Ravi Sah</a>
          </span>
        <span class="be-comment-time">
          <i class="fa fa-clock-o"></i>
          May 27, 2015 at 3:14am
        </span>

      <p class="be-comment-text">
        Pellentesque gravida tristique ultrices. 
        Sed blandit varius mauris, vel volutpat urna hendrerit id. 
        Curabitur rutrum dolor gravida turpis tristique efficitur.
      </p>
      <ul class="list-inline d-sm-flex my-0 ">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3 " style="color:blue;"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:red;"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:black;"></i>
                    Reply
                  </a>
                </li>
              </ul>
    </div>

  </div>
  <div class="be-comment" style="padding-bottom: 20px;">
    <div class="be-img-comment">  
      <a href="blog-detail-2.html">
        <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="" class="be-ava-comment">
      </a>
    </div>
    <div class="be-comment-content">
      <span class="be-comment-name">
        <a href="blog-detail-2.html">Phoenix, the Creative Studio</a>
      </span>
      <span class="be-comment-time">
        <i class="fa fa-clock-o"></i>
        May 27, 2015 at 3:14am
      </span>
      <p class="be-comment-text">
        Nunc ornare sed dolor sed mattis. In scelerisque dui a arcu mattis, at maximus eros commodo. Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant. Proin ut ornare lectus, vel eleifend est. Fusce hendrerit dui in turpis tristique blandit.
      </p>
        <ul class="list-inline d-sm-flex my-0 ">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3 " style="color:blue;"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:red;"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:black;"></i>
                    Reply
                  </a>
                </li>
              </ul>
    </div>
  </div>
  <div class="be-comment" style="padding-bottom: 20px;">
    <div class="be-img-comment">  
      <a href="blog-detail-2.html">
        <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="" class="be-ava-comment">
      </a>
    </div>
    <div class="be-comment-content">
      <span class="be-comment-name">
        <a href="blog-detail-2.html">Cüneyt ŞEN</a>
      </span>
      <span class="be-comment-time">
        <i class="fa fa-clock-o"></i>
        May 27, 2015 at 3:14am
      </span>
      <p class="be-comment-text">
        Cras magna nunc, cursus lobortis luctus at, sollicitudin vel neque. Duis eleifend lorem non ant
      </p>
        <ul class="list-inline d-sm-flex my-0 ">
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-up g-pos-rel g-top-1 g-mr-3 " style="color:blue;"></i>
                    178
                  </a>
                </li>
                <li class="list-inline-item g-mr-20">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-thumbs-down g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:red;"></i>
                    34
                  </a>
                </li>
                <li class="list-inline-item ml-auto">
                  <a class="u-link-v5 g-color-gray-dark-v4 g-color-primary--hover" href="#!">
                    <i class="fa fa-reply g-pos-rel g-top-1 g-mr-3 likeButton"  style="color:black;"></i>
                    Reply
                  </a>
                </li>
              </ul>
    </div>
  </div>
  <br><br>
   <p class="lead mb-0">Your
                
                    <b>Comments</b>
            </p>
            <br>
  <form class="form-block">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="form-group fl_icon">
          <div class="icon"><i class="fa fa-user"></i></div>
          <input class="form-input" type="text" placeholder="Your name" name="user">
        </div>
      </div>
      <div class="col-xs-12 col-sm-6 fl_icon">
        <div class="form-group fl_icon">
          <div class="icon"><i class="fa fa-envelope-o"></i></div>
          <input class="form-input" type="text" placeholder="Your email" name="email">
        </div>
      </div>
      
    </div>
    <div class="row">
      <div class="col-12">                 
        <div class="form-group">
          <textarea class="form-input" required="" placeholder="Your text" name="text"></textarea>
        </div>
      </div>
    </div>
    <a class="btn btn-primary pull-right">submit</a>
  </form>
</div>
</div>
      
        <div class="py-5">
           
        </div>
    </div>
</div>




</body>

<script type="text/javascript">
  $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10 ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});
</script>

</html>