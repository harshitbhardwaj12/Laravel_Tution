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
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.1.0/dist/chart.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Dashboard</title>

  <style>
  
.border-10{
border-style:solid;
 border-width: 4px;
 border-color: rgba(0, 0, 0, 0.589);
 border-radius: 1rem;
}
  </style>
</head>
<body style="background-color: #ffffff">
    
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
                      <li class="nav-item "><a style="margin-left: 17rem " class="nav-link" href="/tutor_home"><span class="fa fa-home fa-lg"></span>Registration</a></li>
                      <li class="nav-item"><a class="nav-link" href="/search"><span class="fa fa-list fa-lg"></span>  &nbsp; &nbsp;Search</a></li>
                      <li class="nav-item active"><a  class="nav-link" href="/dashboard"><span class="fa fa-address-card fa-lg"></span>  &nbsp;&nbsp;Dashboard</a></li>
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
                              <a class="nav-link" href="/teacher">&nbsp;&nbsp;Logout </a>
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








{{------------------------------------------- Section - Menu ---------------------------------------}}  

<div class="container-fluid" style="margin-top: 8rem">
<div class="row">
<div class="col-3">
<div class="card">
    <ul class="list-group list-group-flush">
    <li class="list-group-item">
        <a id = "show2" style="color: black" class="nav-link" href="#" data-toggle="collapse" data-target="#dash-board"><b>Domain1</b></a>
        <div class="card collapse" id="dash-board">
            <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <a id = "a" style="color: black" class="nav-link" href="#" onclick="gender()"><b>Gender</b></a></li>
            <li class="list-group-item">
                <a id="b" style="color: black" class="nav-link" href="#" onclick="fee_status()"><b> Fee Status</b> </a></li>
            <li class="list-group-item"> 
                <a id = "c" style="color: black"class="nav-link" href="#" onclick="item3()"><b>New Registrations</b> </a></li> 
        </ul>
      </div>
    </li>
    <li class="list-group-item">
        <a id="show0" style="color: black" class="nav-link" href="#"><b> Domain2</b> </a></li>
    <li class="list-group-item"> 
        <a id = "show1" style="color: black"class="nav-link" href="#"><b>Domain3</b> </a></li> 
</ul>
</div>
</div>

{{------------------------------------------- Section - Dashboard ------------------------------------}}  
<div class="col-9 border-10 rounded " style="color:rgb(2, 2, 2); ">
    <div class="container">
    <div class="row">
        <div><h3 id="title">Please click on left menu to interact with dashboard.</h3></div>
      <img  class="img-fluid" src="../images/analytic.gif" alt="BG-IMG" style="display: block" id="home10"/>
        <div id="gender" style="display: none" class="col-6 up"><canvas id="myChart4" width="400" height="400"></canvas></div>
        <div id="fee" style="display: none" class="col-6 up"><canvas id="myChart2" width="400" height="400"></canvas></div>
    </div>
    <div class="row">
        <div id="item1" style="display: none" class="col-6 up"><canvas id="myChart3" width="400" height="400"></canvas></div>
        <div id="item2" style="display: none" class="col-6 up"><canvas id="myChart" width="400" height="400"></canvas></div>
        
    </div>
    </div>
</div>

{{------------------------------------------- Section - Dashboard - END -------------------------------}}  

</div>
</div>
{{------------------------------------------- Section - Menu - END -------------------------------}}  










{{------------------------------------------- Section - Footer ---------------------------------------}}
<div class=" border-top" style="margin-bottom: 0px ; margin-top: 200px ; background-color:  rgb(28, 28, 29); font-family: 'Mulish', sans-serif; color: white;">
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

<script>

function gender(){


$('#title').text('No of male and female students');
  $('#home10').css('display', 'none');
  $('#fee').css('display', 'none');
  $('#gender').css('display', 'block');
  $('#item1').css('display', 'none');
  $('#item2').css('display', 'none');
$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$.ajax({
          type:'get',
          url:'/visual',
          data:{},
          success:function(data){
            var val = data;


            var ctx = document.getElementById('myChart4').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ['Male', 'Female'],
                    datasets: [{
                        label: '# Male And Female',
                        data: val,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                       
                    }
                }
            });
         
          
          }
       });

}

function fee_status(){

$('#title').text('Current Fee status of your students');
  $('#home10').css('display', 'none');
  $('#gender').css('display', 'none');
  $('#fee').css('display', 'block');
  $('#item1').css('display', 'none');
  $('#item2').css('display', 'none');

$.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});

$.ajax({
          type:'get',
          url:'/fee_status',
          data:{},
          success:function(data){
            var val = data;

            
            var ctx = document.getElementById('myChart2').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['left', 'recived'],
                    datasets: [{
                        label: 'No Of Students With Fee Left And Recived',
                        data: val,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    scales: {
                        
                    }
                }
            });
         
          
          }
       });

}


function item3(){

$('#title').text('New students registered per month');
$('#home10').css('display', 'none');
$('#fee').css('display', 'none');
$('#item2').css('display', 'block');
$('#gender').css('display', 'none');
$('#item1').css('display', 'none');

var ctx = document.getElementById('myChart').getContext('2d');

var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
        datasets: [{
            label: 'No of Students',
            data: [12, 19, 9, 12, 8, 13],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
 


}
</script>
          
</body>
</html>