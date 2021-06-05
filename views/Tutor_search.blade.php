<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="js/tutor.js"></script>
    <script src="js/table.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Tutor_Search</title>

<style>

div.scrollmenu {
    background-color: #333;
    overflow: auto;
    white-space: nowrap;
}

div.scrollmenu a {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px;
    text-decoration: none;
}

div.scrollmenu a:hover {
    background-color: #777;
}

</style>


</head>
<body style="background-color: rgb(102, 102, 102)">



{{-------------------------------------------- Section - Header --------------------------------------}}  


<div class="container img-fluid " style="margin-bottom: 67px; ">
  <div class="row-12">
      <header >
          <nav class="navbar navbar-dark navbar-expand-sm bg-color border-bottom fixed-top" >
              <a class="navbar-brand" href="/"><img src="images/logo.png" height="42px" width="42px">&nbsp; &nbsp;Home Tutor</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
                      <span class="navbar-toggler-icon"></span>
                  </button>
           
              <div class="collapse navbar-collapse" id="navbar1">
                  <ul class="navbar-nav mr-auto ">
                      <br>
                      <li class="nav-item"><a style="margin-left: 17rem " class="nav-link" href="/tutor_home"><span class="fa fa-home fa-lg"></span>Registration</a></li>
                      <li class="nav-item active"><a class="nav-link" href="/search"><span class="fa fa-list fa-lg"></span>  &nbsp; &nbsp;Search</a></li>
                      <li class="nav-item"><a  class="nav-link" href="/dashboard"><span class="fa fa-address-card fa-lg"></span>  &nbsp;&nbsp;Dashboard</a></li>
                      <li class="nav-item"><a  class="nav-link" href="/update"><span class="fa fa-address-card fa-lg"></span>  &nbsp;&nbsp;Update</a></li>
                      <li class="nav-item" style="margin-right: 13rem"><a data-toggle="collapse" data-target="#alert" class="nav-link" href="#aboutus"><span class="fa fa-info fa-lg"></span>  &nbsp;&nbsp;Alert</a>
                          <div id="alert" class="collapse">
                                  <a class="nav-link" href="/time">Class Time</a>
                                  <a class="nav-link" href="/syllabus">Syllabus</a>
                                  <a class="nav-link" href="/marks">Marks</a>
                                  <a class="nav-link" href="/fees">Fee</a>  
                          </div>
                      </li>
                      <li class="nav-item" ><a data-toggle="collapse" data-target="#login-name" class="nav-link" href="#"><span class="fa fa-list fa-lg"></span > &nbsp;&nbsp;Login&nbsp;&nbsp;▼</a>
                      
                          <div id="login-name" class="collapse">
                              <a class="nav-link" href="/teacher">&nbsp;&nbsp;Logout</a>
                              <a class="nav-link" href="/change_password">&nbsp;&nbsp;Change Password</a>
                          </div>
                      </li>
                      </ul>  
                  </div>         
          </nav>
      </header>
  </div>
</div> 

{{------------------------------------------- Section - Header - END -------------------------------}}  
  





{{------------------------------------------- Search - body -----------------------------------------}}

<div class="container" style="margin-top: 150px">
        <div class="row">
            <div class="col-9">
                <input class="form-control" type="text" id="txt_search_input" name="txt_search_input" placeholder="Search By Student ID">
            </div>
            <div class="col-3">
              <button class="form-control btn-primary " onclick="search()">Search</button>
            </div>
        </div>

</div>

<div class="container">
  <div class="row">
    <div class="col-3">
           <div class="border-bottom" style="margin-top: 48px">
              <center> <a class="alink" href= "#filter" data-toggle="collapse" data-target="#filter">Filters</a></center>
            </div>
    
      <div class=" collapse" id="filter" style="color:white">
          <div  style="margin-top: 35px">
            
              <div>
                  <input class="form-control" type="button" value="Basic Details" data-toggle="collapse" data-target="#basic_filter">
                  <div id="basic_filter" class="container collapse"><br>
                    <ul>
                      <li>
                        <button  type="button" class="btn btn-link" style="color: white" href="#school" data-toggle="collapse" data-target="#school">School Name</button>
                        <select  class=" collapse form-control put " id="school" class="form-control put" onchange="filter('school')">
                          <option value="GNA University"class="option">GNA University</option>
                          <option value="School2" class="option">School 2</option>
                          <option value="School3" class="option">School 3</option>
                          <option value="School4" class="option">School 4</option>
                      </select>
                      </li>
                      <li>
                        <button id= "Male" value="Male" type="button" class="btn btn-link" onclick="filter('Male')">Male</button>
                      </li>
                      <li>
                        <button id="Female" value="Female" type="button" class="btn btn-link" onclick="filter('Female')">Female</button>
                      </li>
          
                    </ul>
                  </div>
              </div>
            

          </div>
          <div style="margin-top: 15px">
              <div >
                  <input class="form-control" type="button" value="Course Details" data-toggle="collapse" data-target="#course_filter">
                  <div class="collapse" id="course_filter"><br>
                    <ul>
                      <li>
                        <button id= "recived" value="recived" type="button" class="btn btn-link" onclick="filter('recived')">Fee recived</button>
                      </li>
                      <li>
                        <button id="left" value="left" type="button" class="btn btn-link" onclick="filter('left')">Fee Left</button>
                      </li>
                    </ul>
                  </div>
              </div>   
          </div>
      </div>
    </div>

      <div class="col-9 border-top table table-striped scrollmenu " style="margin-top: 6rem">
        <div class="container ">
          <div class="row" >
            <div >
              <table class ="t1" style="color: white" id="excelDataTable" border="1">
              </table>
            </div>
          </div>
        </div>
      </div>

  </div>
</div>

{{------------------------------------------- Search - body - END ------------------------------------}}  





{{------------------------------------------- Section - Footer ---------------------------------------}}
<div class=" border-top" style="margin-bottom: 0px ; margin-top: 350px ; background-color:  rgb(28, 28, 29); font-family: 'Mulish', sans-serif; color: white;">
  <footer >
     
    <div class="container-fluid text-center text-md-left">
  
      <!-- Grid row -->
      <div class="row" style="margin-top: 20px">
          <br>
  
        <!-- Grid column -->
        <div class="col-md-6 mt-md-0 mt-3" >
  
          <!-- Content --><br><br>
          <h5 class="text-uppercase">Home TUTOR</h5>
          <p>Learn Anywhere Anytime.</p>
  
        </div>
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Social Media</h5>
  
          <ul class="list-unstyled">
            <li style="display: inline"><a href="#">
              <img src="images/twitter.png" width="32" height="30">
            </a>
            </li>
            <li style="display: inline"><a href="#">
              <img src="images/insta.png" width="30" height="">
            </a>
            </li>
            <li style="display: inline">
              <a href="#">
              <img src="images/facebook.png" width="35" height="32">
              </a>
            </li>
            <li style="display: inline">
              <a href="#">
              <img src="images/linkedin.png" width="31" height="28">
              </a>
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">
  
          <!-- Links -->
          <h5 class="text-uppercase">Address and contact</h5>
  
          <ul class="list-unstyled">
            <li>
              Sector:64, Mohali
            </li>
            <li>
              985, 1st floor
            </li>
            <li>
              E-MAil: IKTSS@gmail.com
            </li>
            <li>
              Phone: 9877769078
            </li>
          </ul>
  
        </div>
        <!-- Grid column -->
  
      </div>
      <!-- Grid row -->
  
    </div>
    <!-- Footer Links -->
  
    <!-- Copyright -->
    <div  class="footer-copyright text-center py-3">
        
      <p style="font-size: 10px">© 2021 Copyright: HOME TUTOR.com</p>
      <p style="font-size: 10px"> ~ Designed by IKTSS Team</p>
    </div>
    <!-- Copyright -->
  
  </footer>
</div>
{{------------------------------------------- Section - Footer - END ---------------------------------}} 

</body>
</html>