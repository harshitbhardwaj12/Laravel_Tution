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
     
body {
    /* background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%); */
/* background-attachment: fixed; */
  background-repeat: no-repeat;
  /* background-size:cover; */
  float: right;
margin: 3%;
background-repeat:no-repeat;
            
  background-image:url("https://cdn.dribbble.com/users/846207/screenshots/9192312/media/c821e24ed3cc26b9e43e2decfdee20ce.gif");


    font-family: 'Vibur', cursive;
/*   the main font */
    font-family: 'Abel', sans-serif;
opacity: .95;
}
.form {
    box-shadow: -1px 17px 24px cadetblue;
    font-family:auto;
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    color:white;
    text-align:center;
    padding: 2%;
    background-image: linear-gradient(-225deg,  #300c53 55% ,#ffffff 50%);
}
button:hover {
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
    100% {
        transform: translateY(5px);
    }
}
 </style>
 </head>
 <body>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

<div class="container-lg-12-mb-6-sm-12" id="container1">


    <form class="form"action="" method="post">

      <center><h2 style="padding:20px;">STUDENT LOGIN</h2></center>

        <!-- Email input -->
      <div class="form-outline mb-4">
          <label class="form-label" for="form1Example1">Username</label>
           <input type="email" id="form1Example1" class="form-control"placeholder="Username" required>
      </div><br>

        <!-- Password input -->
        <div class="form-outline mb-4">
           <label class="form-label" for="form1Example2">Password</label>
           <input type="password" id="form1Example2" class="form-control"placeholder="Password" required>
        </div><br><br>
      
        <!-- Submit button -->
     <button type="submit" class="btn btn-primary btn-block" >Login</button>
  </form>
</div>

</body>

</html>