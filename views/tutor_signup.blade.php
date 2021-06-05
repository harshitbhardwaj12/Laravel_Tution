<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->
    <title>Tutor_registration</title>
</head>
<style>
.register{
    background: -webkit-linear-gradient(left, #3e3e3f, #b4b4b4);
    margin-top: 3%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 10%;
}
.btnRegister{
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #000000;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #000000;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #000000;
    border: 2px solid #000000;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}
</style>
<body style="background: -webkit-linear-gradient(left, #b4b4b4, #3e3e3f);">
<div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://creazilla-store.fra1.digitaloceanspaces.com/cliparts/37315/male-teacher-clipart-xl.png" alt=""/>
                        <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <a href="teacher"><input type="submit" name="" value="Login" /></a><br/>
                    </div>
                    <div class="col-md-9 register-right">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3><b><div id="error" style="color : red ;margin-top:20px; margin-left:14rem; display:none;"></b></h3></div>
                                <h3 id="heading" class="register-heading">Apply as a Tutor</h3>
                                <form action="/tutor_reg" method="POST">
                                    @csrf
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" name="txt_name" required >
                                          
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" name="txt_lname" required >
                                        
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *"  id="txt_pass" name=" txt_pass" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control"  placeholder="Confirm Password *" id="txt_cpass" name="txt_cpass" onblur="pass_conf()" required>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="opt_gender" value="Male" checked>
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="opt_gender" value="Female">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Your Email *" id="txt_email" name="txt_email" onblur="email_check()" required/>
                                           
                                        </div>
                                        <div class="form-group">
                                            <input type="number" minlength="10" maxlength="10" class="form-control" placeholder="Your Phone *" name="num_phone" required />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="opt_qns">
                                                <option class="hidden" value="null"  selected>Please select your Sequrity Question</option>
                                                <option value="What is your Birthdate?">What is your Birthdate?</option>
                                                <option value="What is Your old Phone Number">What is Your old Phone Number</option>
                                                <option value="What is your Pet Name?">What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" name="txt_ans" required/>
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register" onclick="validate()"/>
                                        
                                    </div>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

<script>

function pass_conf(){
    var b = document.getElementById("txt_pass").value;
    var a = document.getElementById("txt_cpass").value;
    if(a == b){
       
        $('#heading').css('margin-top', ' 8%');
      $('#error').text("");
    }
    else{
        $('#error').css('display', 'block'); 
        $('#heading').css('margin-top', ' 3%'); 
      $('#error').text(" Confirm Password Not Matched ");
    }
   }

   function email_check(){
    var email = document.getElementById("txt_email").value;
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
       $.ajax({
          type:'POST',
          url:'/check_email',
          data:{email:email},
          success:function(data){

            if(data == false){
                $('#heading').css('margin-top', ' 8%');
      $('#error').text("");
            }
            else{
                $('#error').css('display', 'block'); 
        $('#heading').css('margin-top', ' 3%'); 
        $('#error').css('margin-left', ' 16rem');
      $('#error').text(" Email already exsist");
            }
          }
   });
}
</script>
</body>
</html>