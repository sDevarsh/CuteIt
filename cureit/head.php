
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="webs">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style type="text/css">
    body
    {
      width:100%;
    }
    .edit
    { 
       color: white !important;
      padding: 15px;
      padding-top: 10px !important;
      padding-bottom: 10px !important;
      border-radius: 6px;
    }
    .edit:hover
    {
      background: #e12464;
     color: white !important;
      box-shadow: 0 0 15px #e12464;
      transition: 0.4s; 

    }
    .navbar
    {
      padding: 0;
    }
  
  </style>
</head>
<body >

<nav class="navbar navbar-expand-sm bg-dark navbar-dark" >
  <div class="container-fluid mx-3">
    <a class="navbar-brand" href="#"><img src="heart.png" height="70px" width="70px" class="logo"></a>
     <a class="navbar-brand" href="#" style="font-size: 40px !important;"><b>CureIT</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mx-5">
       &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <li class="nav-item ">
          <a class="nav-link edit" href="#">&nbsp&nbspHome&nbsp&nbsp</a>
        </li>&nbsp&nbsp
        <li class="nav-item ">
          <a class="nav-link edit" href="#foot">&nbsp&nbspAboutUs&nbsp&nbsp </a>
        </li>&nbsp&nbsp
        <li class="nav-item ">
          <a class="nav-link edit" href="#foot">&nbsp&nbspContactUs&nbsp&nbsp</a>
        </li> &nbsp&nbsp
        <li class="nav-item ">
          <a class="nav-link edit" href="my_appoint.php">&nbsp&nbspApponitment&nbsp&nbsp</a>
        </li> &nbsp&nbsp
      </ul>
 
    </div>
    
  </nav>
  
</body>
</html>


