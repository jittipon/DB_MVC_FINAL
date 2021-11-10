<?php
if(isset($_GET['controller'])&&isset($_GET['action']))
{
  $controller = $_GET['controller'];
  $action = $_GET['action'];
}
else
{
  $controller = 'pages';
  $action = 'home';
}
?>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="style.php"/>


  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>



  <div class = "container">
   <?php //echo "controller = ".$controller.",action = ".$action;?>

    
   <br>
      <div class="d-flex justify-content-center">
        <a class="btn btn-primary mr-2" href="?controller=pages&action=home" role="button">Home</a>
        <a class="btn btn-outline-warning mr-2" href="?controller=station&action=index" role="button">STATION </a>
        <a class="btn btn-outline-info" href="?controller=stationDate&action=index" role="button">STATION DATE </a>
      </div>
        
   <br>

    <div class="d-flex justify-content-center">

          <?php echo "controller = ".$controller.",action = ".$action;?>
    </div>

        <?php require_once("routes.php");?>



        <a href="http://158.108.207.4/db21/" class="float">
            <!-- <p class="fa fa-plus my-float">I</p> -->
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="fa fa-plus my-float bi bi-stack" viewBox="0 0 16 16">
              <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
              <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
            </svg>
        </a>



   

        


  </div>


  <!-- <div class="test-box">

    <p>CSS stylesheet test</p>

      


  </div> -->

   
</body>
<footer class="footer">
	<p>Copyright &copy; Jittipon Kumurai 6220504623</p>
</footer>
</html> 
