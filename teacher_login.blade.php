<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
 <style> 
    body
    {
    /* background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
    background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%); */
    background-attachment: fixed;
    background-repeat: no-repeat;
    font-family: 'Vibur', cursive;
    font-family: 'Abel', sans-serif;
    opacity: .95;
    background-repeat:no-repeat;
            background-size:cover;
    background-size:unset;
    background-image:url("https://i.graphicmama.com/blog/wp-content/uploads/2018/06/18081138/Flat-Design-Character-business-woman.gif");
    }
 .form 
 {
    box-shadow: -1px 17px 24px cadetblue;
    font-family:auto;
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    padding: 2%;
    
    float: right;
    float: 20px right;
    text-align: center;
    margin: 5%;
    color:white;
    background-image: linear-gradient(-225deg, teal 55%, white 50%);
}
 }
 button:hover 
 {
    transform: translatey(3px);
    box-shadow: none;
 }
 /* buttons hover Animation */
 button:hover {
    animation: ani9 0.4s ease-in-out infinite alternate;
 }
 @keyframes ani9 {
    0% {
        transform: translateY(3px);
    }
    100%
     {
        transform: translateY(5px);
    }
 }
 

 }
 </style>
 </head>
 <body>
 
         @if (session('status2'))
         <div class="alert alert-danger" id="message" style="background: seashell;
    text-align: center;
    font-size: 20px;
    margin: 20px;
    /* width: 20%; */
    padding: 2px;
    border-style: solid;
    border-top: solid;opacity:0.8">
              {{ session('status2') }}
        </div>
        @endif
      <div class="container-lg-12-mb-6-sm-12" id="container1">
            <form class="form" action="/teacher_login" method="post">
                 @csrf
                <center><h2 style="padding:20px;">TEACHER LOGIN</h2></center>
                <!-- Email input -->
               <div class="form-outline mb-4">
                 <label class="form-label" for="form1Example1">Username</label>
                 <input name="email" type="email" id="form1Example1" class="form-control"placeholder="Username" required>
               </div><br>

                <!-- Password input -->
               <div class="form-outline mb-4" id="box">
                 <label class="form-label" for="form1Example1">Password</label>
                 <input name="pass" type="password" id="form1Example1" class="form-control"placeholder="Password"required >
               </div><br>

               <!-- Submit button -->
               <button name="submit" type="submit" class="btn btn-primary btn-block">Sign in</button><br>

               <!-- Forgot password -->
               <div class="col-sm-6">
                 <!-- Simple link -->
                 <a href="forgot">Forgot password?</a>
               </div>
            </form>  
            <script>
            setTimeout(function() {
    $('#message').fadeOut('fast');
}, 4000); // <-- time in milliseconds
            </script>
       </div>  
    </body>
</html>