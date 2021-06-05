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
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:ital,wght@1,200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200;400&family=Mulish:ital,wght@1,200&display=swap" rel="stylesheet">
    <title>Tutor_home</title>
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
                      <li class="nav-item"><a class="nav-link" href="/search"><span class="fa fa-list fa-lg"></span>  &nbsp; &nbsp;Search</a></li>
                      <li class="nav-item"><a  class="nav-link" href="/dashboard"><span class="fa fa-address-card fa-lg"></span>  &nbsp;&nbsp;Dashboard</a></li>
                      <li class="nav-item active"><a  class="nav-link" href="/update"><span class="fa fa-address-card fa-lg"></span>  &nbsp;&nbsp;Update</a></li>
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
  
    





{{------------------------------------------- Section - registration ---------------------------------------}}
<div class="container">

        <br><br>

    <div class="row" >
        
            

           
         
        <!--Grid column-->
        <div class=col-3>
     
                <p class="font-weight-bold">Update</p>
            <div class="card">
                <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a id="show0" style="color: black" class="nav-link" href="#basic"><b> Basic Details</b> </a></li>
                <li class="list-group-item"> 
                    <a id = "show1" style="color: black"class="nav-link" href="#course"><b>Course Details</b> </a></li> 
            </ul>
          </div>
       
        </div>
      
        <!--Grid column-->
        
        <!--Grid column-->
        <div class="col-9" style="color: white ; ">
        
          <div class="card">
                <div class="card-header regis" id="reg">
                Update Students Details Here.

            </div >
            <div class="card-header error" id="error" style ="display: none">
                
            </div >

        
{{--------------------------------- Basic --------------------------------------------}}
<div  class="basic" style=" font-size:14px; display: none; font-family: 'Libre Baskerville', serif; background-color: rgb(90, 90, 90);">
  <center><br><h2>Basic Details</h2></center><br>
    {{-- <form action="/basic" method="POST"> --}}
      @csrf

      <div class="cantainer-sm">
          <div class="form-group row" style="margin-top:20px; ">
              <label class="col-sm-2" for="sname" >&nbsp;&nbsp;Student ID</label>
              <div  style="margin-left:50px;" class="col-sm-8 form-holder">
                  <input type="text" class="form-control put" id = "id" name ="id" placeholder="Enter Student ID Here." required onblur="id_info()"> 
                  <span class="" id="tag-sname">&nbsp;</span>
              </div>
          </div>
      </div>
      <div class="cantainer-sm">
        <div class="form-group row" style="margin-top:20px; ">
            <label class="col-sm-2" for="sname" >&nbsp;&nbsp;Student Name</label>
            <div  style="margin-right:50px;" class="col-sm-3 form-holder">
                <input type="text" class="form-control put" id = "txt_sname" name ="txt_sname" placeholder="" required > 
                <span class="" id="tag-sname">&nbsp;</span>
            </div>
            <label class="col-sm-2" for="lname">Father Name</label>
            <div class="col-sm-3 form-holder" style="margin-right: 0px">
                <input type="text" class="form-control put" id = "txt_fname" name ="txt_fname" placeholder="" required> 
                <span class="" id="tag-fname">&nbsp;</span>
            </div>
        </div>
    </div>
    <div class="cantainer-sm">
        <div class="form-group row " style="margin-top:20px;">
            <label class="col-sm-2" for="email">&nbsp;&nbsp;E-Mail</label>
            <div style="margin-right:50px;" class="col-sm-3 form-holder">
                  <input type="text" class="form-control put " id = "txt_email" name ="txt_email" placeholder="" onblur="valid_email()" required>
                  <span id="tag-email" >&nbsp;</span>
                  <span id="tag-email2" >&nbsp;</span> 
            </div>
            <label class="col-sm-2" for="number" style="margin-right: 0px">Contact No</label>
            <div class="col-sm-3 form-holder">
                <input type="number" class="form-control put " id = "num_s_no" max= "9999999999" name ="num_s_no" placeholder="XXXXXXXXXX" onblur="" required>
                <span id=tag-s-no></span> 
            </div>
        </div>
    </div>
    <div class="cantainer-sm">
      <div class="form-group row" style="margin-top:20px;">
          <label class="col-sm-2" for="pass">&nbsp;&nbsp;Parent contact</label>
          <div style="margin-right:50px;" class="col-sm-3 form-holder">
              <input type="number" class="form-control put " id = "num_p_no" max = "9999999999" name ="num_p_no"placeholder="XXXXXXXXXX" onblur="" required>
              <span class="" id="tag-p-no">&nbsp;</span> 
          </div>
          <label class="col-sm-2" for="cpass" style="margin-right: 0px">School Name</label>
          <div class="col-sm-3 form-holder">
              <input type="text" class="form-control put " id = "txt_school" name ="txt_school"placeholder="" onblur="" required> 
              <span class="" id="tag-school">&nbsp;</span>
          </div>
      </div>
  </div>
    <div class="cantainer-sm">
        <div class="form-group row" style="margin-top:20px;">
            <label class="col-sm-2" for="pass">&nbsp;&nbsp;Password</label>
            <div style="margin-right:50px;" class="col-sm-3 form-holder">
                <input type="text" class="form-control " id = "txt_pass" name ="txt_pass"placeholder="" onblur="" readonly>
                <span class="" id="tag-pass">&nbsp;</span> 
            </div>
            <label class="col-sm-2" for="cpass" style="margin-right: 0px">Password Again</label>
            <div class="col-sm-3 form-holder">
                <input type="text" class="form-control  " id = "txt_cpass" name ="txt_cpass"placeholder="" onblur="" readonly> 
                <span class="" id="tag-cpass">&nbsp;</span>
            </div>
        </div>
    </div>
    <div class="cantainer-sm">
      <div class="form-group row" style="margin-top:20px;">
          <label class="col-sm-2" for="age" >&nbsp;&nbsp;Age</label>
          <div  class="col-sm-3 form-holder" style="margin-right:50px;" >
              <input type="number" class="form-control put " placeholder="" name ="txt_age" id ="txt_age" > 
              <span class="" id="tag-age">&nbsp;</span>
          </div>
          <label class="col-sm-2" for="title" style="margin-right: 0px">Select Timings</label>
          <div class="col-sm-3 form-holder">
              <select class="form-control put " name="opt_time" id="opt_time" class="form-control put ">
                  <option value="9-12"class="option" selected>9:00 AM To 12:00 PM</option>
                  <option value="1-3" class="option">1:00 PM To 3:00 PM</option>
                  <option value="4-6" class="option">4:00 PM To 6:00 PM</option>
                  <option value="6-9" class="option">6:00 PM To 9:00 PM</option>
              </select>
              <span class="" id="tag-time">&nbsp;</span>
          </div>  
      </div>
  </div>
  
  <div class="cantainer-sm">
      <div class="form-group row" style="margin-top:20px;">
            <label class="col-sm-2" for="gender">&nbsp;&nbsp;Gender</label>
            <div style="margin-right:50px;" class="col-sm-3 form-holder">
                <select class="form-control put " name="opt_gender" id="opt_gender" class="form-control put ">
                    <option value="Male" class="option" selected>Male</option>
                    <option value="Female" class="option">Female</option>
                    <option value="NA" class="option">Not defined</option>
                </select>
                <span class="" id="tag-gender">&nbsp;</span>
            </div>
            <label class="col-sm-2" for="add">Area PIN</label>
                <div class="col-sm-3 form-holder">
                  <input type="text" class="form-control put " id = "txt_add" name ="txt_add"placeholder=""> 
                    <span class="" id="tag-add">&nbsp;</span>
                </div>
        </div>
    </div>
    <div class="cantainer-sm">
      <div class="form-group row" style="margin-top:20px;">
          <label class="col-sm-2" for="State">&nbsp;&nbsp;State</label>
          <div style="margin-right:50px;" class="col-sm-3 form-holder">
            <select class="form-control put " id="countrySelect" size="1" onchange="makeSubmenu(this.value)">
              <option value="none" selected>Choose State</option>
              <option value="Odisha">Odisha</option>
              <option value="Maharashtra">Maharashtra</option>
              <option value="Kerala">Kerala</option>
              </select>
              <span class="" id="tag-state">&nbsp;</span> 
          </div>
          <label class="col-sm-2" for="city" style="margin-right: 0px">City</label>
          <div class="col-sm-3 form-holder">
            <select  class="form-control put " id="citySelect" size="1" >
              <option selected>Choose City</option>
              <option></option>
              </select>
              <span class="" id="tag-city">&nbsp;</span>
          </div>
      </div>
  </div>
    <div class= "container-sm">
        <div class="form-group row">
            <br><br>
            <div class="col-11">
              <center><input type="submit" id="save" type="submit" value="Save" class="btn btn-primary" onclick="update_basic()"></center>  
            </div>
        </div>
    </div>
  {{-- </form> ---}}
</div>
{{--------------------------------- Course --------------------------------------------}}

          <div class="course" style="font-size:12px; display: none; background-color:rgb(102, 102, 102);  font-family: 'Libre Baskerville', serif; ">
            <center><br><h2>Course Details</h2></center><br>
            
          <form action="course" method="post">
              @csrf
            <div class="cantainer-sm">
                <div class="form-group row" style="margin-top:20px;">
                    <label style="margin-right:40px;" class="col-sm-2" id="s_id1" >&nbsp;&nbsp; <b>Student ID</b></label>
                    <div  class="col-sm-8 form-holder">
                        <input type="text" class="form-control put " id = "txt_s_id" name ="txt_s_id" placeholder="Enter Student ID Here"  > 
                        <span class="" id="tag-s_id">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class="container-sm">
                <div class="form-group row" style="margin-top:30px;">
                    <label class="col-sm-2" for="age">Course Name</label>
                    <div style="margin-right:50px;" class="col-sm-3 form-holder">
                        <select class="form-control put " name="opt_course" id="opt_course" class="form-control put " onchange="course_fee()" required>
                            <option value="NULL" class="option" selected>Select</option>
                            <option value="math"class="option">Math</option>
                            <option value="science" class="option">Science</option>
                            <option value="english" class="option">English</option>
                        </select>
                        <span class="" id="tag-time">&nbsp;</span>
                    </div>
                    <label class="col-sm-2" for="title">Course Fee</label>
                    <div style="margin-right:0%;" class="col-sm-3 form-holder">
                        <input type="text" class="form-control " placeholder="  /-" name ="txt_fee" id ="txt_fee" onblur="" readonly > 
                        <span class="" id="tag-age">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class= "container-sm">
                <div class="form-group row" style="margin-top:30px;">
                    <label class="col-sm-2" for="title">Course ID</label>
                    <div style="margin-right:50px;" class="col-sm-3 form-holder">
                        <input type="text" class="form-control " placeholder= "ENG1" name ="txt_course_id" id ="txt_course_id" onblur="" readonly > 
                        <span class="" id="tag-title">&nbsp;</span>
                    </div>
                    <label class="col-sm-2" for="tech">Fee Recived</label>
                        <div class="col-sm-3 form-holder">
                            <input type="number" class="form-control put" placeholder= "  /-" max = "" name ="txt_recived" id ="txt_recived" onblur="fee_left()" > 
                            <span class="" id="tag-tech">&nbsp;</span>
                        </div>
                </div>
            </div>
            <div class= "container-sm">
                <div class="form-group row" style="margin-top:30px;">
                    <label class="col-sm-2" for="tech">Fee Left</label>
                        <div style="margin-right:50px;" class="col-sm-3 form-holder">
                            <input type="text" class="form-control " placeholder= "  /-" name ="txt_left" id ="txt_left" onblur="" readonly> 
                            <span class="" id="tag-tech">&nbsp;</span>
                        </div>
                    <label class="col-sm-2" for="tech">Upload Syllabus</label>
                    <div class="col-sm-3 form-holder">
                        <input type="file" class="form-control put " accept="application\pdf" placeholder= "Upload" name ="file_slybus" id ="file_slybus"  > 
                        <span class="" id="tag-tech">&nbsp;</span>
                    </div>
                </div>
            </div>
            <div class= "container-sm">
                <div class="form-group row">
                    <div class="col-sm-11">
                        <center><button  type="submit" class="btn btn-primary">Save</button></center>
                    </div>
                </div>
            </div>
          
        </div>

    </form>
    <div class="test bg0" style="height: 350px" >  
    </div>
</div>     
        </div>

          </div>
        </div>
    </div>   
        </div>
    </div>
</div>


{{------------------------------------------- Section - registration - END -------------------------------}}  







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
    function id_info(){

        

        var id  = document.getElementById("id").value;
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
       $.ajax({
          type:'POST',
          url:'/info',
          data:{id:id},
          success:function(data){

            $("#txt_sname").attr("value", data[0]);
            $("#txt_fname").attr("value", data[1]);
            $("#txt_email").attr("value", data[2]);
            $("#num_s_no").attr("value", data[3]);
            $("#num_p_no").attr("value", data[4]);
            $("#txt_school").attr("value", data[5]);
            $("#txt_age").attr("value", data[7]);
            $("#txt_pass").attr("value", data[6]);
            $("#txt_cpass").attr("value", data[6]);
            $("#txt_add").attr("value", data[8]);
          }
       });

    }

function update_basic(){

    var id   =   $("#id").val();
    var sname   =   $("#txt_sname").val();
    var fname   =   $("#txt_fname").val();
    var email   =   $("#txt_email").val();
    var s_no    =   $("#num_s_no").val();
    var p_no    =   $("#num_p_no").val();
    var age     =   $("#txt_age").val();
    var time    =   $("#opt_time").val();
    var add     =   $("#txt_add").val();
    var gender  =   $("#opt_gender").val();
    var school  =   $("#txt_school").val();

    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
       $.ajax({
          type:'POST',
          url:'/update',
          data:{email:email, sname:sname, fname:fname, s_no:s_no, p_no:p_no, age:age, time:time,add:add, gender:gender, school:school, id:id},
          success:function(data){
          

          if(data[1] == true){
            $("#reg").show();
            $('#reg').css('background-color', '#90ee90 ');
            $("#reg").text("✓ Basic Details Update Succesfully!");
            $("#txt_s_id").attr("value", data[0]);
            $(".error").hide();

          }

          else
          {
           
            if(vadd.length < 1 ){
              $("#reg").show();
              $("#reg").text("🛑  Student Address Required");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vage.length < 1 ){
              $("#reg").show();
              $("#reg").text("🛑  Student Age Required");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vcpass != vpass){
              $("#reg").show();
              $("#reg").text("🛑  Password Didn't Matched With Confirm Password");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vcpass.length < 1 && vcpass == vpass){
              $("#reg").show();
              $("#reg").text("🛑  Confirm Password Required");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vpass.length < 1 ){
              $("#reg").show();
              $("#reg").text("🛑  Password Required ");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vschool.length < 1 ){
              $("#reg").show();
              $("#reg").text("🛑  School Name Required ");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vp_no.length < 10  || vp_no.length > 10){
              $("#reg").show();
              $("#reg").text("🛑  Valid Parent's Phone Number Required");
              $('#reg').css('background-color', '#DC143C'); 

            }
            if(vs_no.length < 10 || vs_no.length > 10){
              $("#reg").show();
              $("#reg").text("🛑  Valid Student Phone Number Required ");
              $('#reg').css('background-color', '#DC143C'); 
              }
            
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){
              $("#reg").show();
              $("#reg").text("🛑  Valid E-mail Address Required ");
              $('#reg').css('background-color', '#DC143C'); 
            
            }
            
            if(vfname.length < 1){
              $("#reg").show();
              $("#reg").text("🛑  Father Name Required");
              $('#reg').css('background-color', '#DC143C'); 
            }
            if(vsname.length < 1){
              $("#reg").show();
              $("#reg").text("🛑  Student Name Required");
              $('#reg').css('background-color', '#DC143C'); 
               
            }
          }
          }
       });

       var vsname  = document.getElementById("txt_sname").value;
       var vfname  = document.getElementById("txt_fname").value;
       var x       = document.getElementById("txt_email").value;
       var vs_no   = document.getElementById("num_s_no").value;
       var vcpass  = document.getElementById("txt_cpass").value;
       var vschool = document.getElementById("txt_school").value;
       var vadd    = document.getElementById("txt_add").value;
       var vp_no   = document.getElementById("num_p_no").value;
       var vage    = document.getElementById("txt_age").value;
       var vpass   = document.getElementById("txt_pass").value;
       var atposition=x.indexOf("@");  
       var dotposition=x.lastIndexOf(".");
    
  
}
</script>

</body>
</html>