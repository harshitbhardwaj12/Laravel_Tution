<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Forgot</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #f1f1f1;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .full-height {
            height: 100vh;
        }
        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }
        .position-ref {
            position: relative;
        }
        input {
            padding: 10pt;
            width: 60%;
            font-size: 15pt;
            border-radius: 5pt;
            border: 1px solid lightgray;
            margin: 10pt;
        }
        .form-container {
            display: flex;
            flex-direction: column;
            width: 60%;
            align-items: center;
            margin: 20pt;
            border: 1px solid lightgray;
            padding: 20pt;
            border-radius: 5pt;
            background: white;
        }
        button {
            border-radius: 5pt;
            padding: 10pt 14pt;
            background: lightblue;
            border: 1px solid violet;
            font-size: 14pt;
            margin: 20pt;
            color: #fff;
background-color: #007bff;
border-color: #007bff;
        }
        button:hover
        {
            background-color:blue;
        }
     
     body {
         
     background-attachment: fixed;
       background-repeat: no-repeat;
     
         font-family: 'Vibur', cursive;
     /*   the main font */
         font-family: 'Abel', sans-serif;
     opacity: .95;
     /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
     }
     
     
     
     .form-container {
    box-shadow: -1px 17px 24px cadetblue;
    font-family:auto;
    color:black;
    
    background-image: linear-gradient(-225deg, #E3FDF5 50%, white 50%);
}
body
{
    background:url("https://flevix.com/wp-content/uploads/2019/12/Live-Background-1.svg");
}

            
    </style>
</head>
<body>

<div class="container-sm-12">
@if (session('status'))
         <div class="alert alert-success"id="message" style="background: seashell;
    text-align: center;
    font-size: 20px;
    margin: 20px;
    /* width: 20%; */
    padding: 10px;
    border-bottom-style: solid;
    border-top: solid;
    /* border-radius: 12px; */
    box-shadow: 19px 16px 33px darkgrey;color:green;">
              {{ session('status') }}
        </div>
        @endif


        @if (session('status2'))
         <div class="alert alert-success" id="message"style="background: seashell;
    text-align: center;
    font-size: 20px;
    margin: 20px;
    /* width: 20%; */
    padding: 10px;
    border-bottom-style: solid;
    border-top: solid;
    /* border-radius: 12px; */
    box-shadow: 19px 16px 33px darkgrey;color:red;">
              {{ session('status2') }}
        </div>
        @endif
 <div class="flex-center position-ref full-height">
    <form class="form-container" action="/change" method="POST">
    @csrf
        <h2>Change Password?</h2>
        <br>
        <label for="newpass">Email</label>
        
        <input name="email" style="border-color: violet;box-shadow: 1px 8px 20px cadetblue;"placeholder="Enter email" required >
        
        <label for="newpass">Password</label>
       
        <input name="password" type="password" style="border-color: violet;box-shadow: 1px 8px 20px cadetblue;"placeholder="Enter old password" required >
<label for="newpass">New Password</label>
        <input name="pass" type="password" style="border-color: violet;box-shadow: 1px 8px 20px cadetblue;"placeholder="Enter new password" required >
        <p>note: * please enter old password and new password with regesterd email id *</p>
     
        

        <button type="submit">Change Password</button>
      
      </form>
 </div>
</div>
<script>
            setTimeout(function() {
    $('#message').fadeOut('fast');
}, 4000); // <-- time in milliseconds
            </script>
</body>
</html>