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
            
            background-image:url("https://cdn.dribbble.com/users/1657566/screenshots/12131401/media/1d1eb538136fa73adb5f699602c0e5db.gif");
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
            color:white;
            padding: 20pt;
            
        
        }
        button {
            border-radius: 5pt;
            padding: 10pt 14pt;
            background: white;
            border: 1px solid violet;
            font-size: 14pt;
            margin: 20pt;
        }
        button:hover {
            background:#e3fcf4;
            
 }
        }
    
     
     body {
         
     background-attachment: fixed;
       background-repeat: no-repeat;
    
         font-family: 'Vibur', cursive;
     
         font-family: 'Abel', sans-serif;
     opacity: .95;
     
     }
     
     
     
     .form-container {
  
    font-family:auto;
    
    
   
}
            
    </style>
</head>
<body>
<div class="container-sm-12">
@if (session('status'))
         <div class="alert alert-success" id="message"style="background: seashell;
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
         <div class="alert alert-success" id="message" style="background: seashell;
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
    <form class="form-container" action="api/mail" method="POST">
    @csrf
    <div>
        <h2>Forgot Password?</h2>
        </div>
        <input name="email" style="border-color: violet;box-shadow: 1px 8px 20px cadetblue;"placeholder="Enter email" required >
        <p>note: * please enter registered email id*</p>
     
        

        <button type="submit">Submit</button>
      
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