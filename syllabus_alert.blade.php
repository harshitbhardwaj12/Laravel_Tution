<html>

<head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

	<script src=
		"https://code.jquery.com/jquery-3.2.1.min.js">
	</script>

	<script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
		type="text/javascript">
	</script>
	
	<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
	</script>
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
		background-size:cover;
		background-repeat: no-repeat;
		background-image:url("images/pexels-ann-h-1930381.jpg")
	}

	.form {
    box-shadow: -1px 17px 24px cadetblue;
    font-family:auto;
    width: 450px;
    min-height: 500px;
    height: auto;
    border-radius: 5px;
    margin: 2% auto;
    color:black;
    text-align:center;
    padding: 2%;
    /* background-image: linear-gradient(-225deg, pink 55% ,blue 50%); */
	font-size:medium;
	float:right;
	margin:20px;
	border: 1px solid azure;
	}
	input
	{
		font-size:15px;
	}
	#name1
	{
		width: 100%;
height: 33px;
	}
	</style>
</head>

<body>
@if (session('status1'))
         <div class="alert alert-success" id="message" style="background: seashell;
    text-align: center;
    font-size: 20px;
    margin: 20px;
    /* width: 20%; */
    padding: 2px;
    border-style: solid;
    border-top: solid;opacity:0.8">
              {{ session('status1') }}
        </div>
        @endif
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
		<div class="container-lg-12-mb-6-sm-12">
		
        <form action="/syllabus" method="post" class="form">
        @csrf
		<h1>SYLLABUS  ALERT </h1>
		<BR>

		<div class="form-outline mb-4">
				
<?php
$server="db4free.net";
$userid ="tutionmaster";
$Password = "tutionmaster";
$myDB = "tutionmaster";$con = mysqli_connect($server,$userid,$Password,$myDB);
if (mysqli_connect_errno()) 
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<div class="form-outline mb-4">
<label >Student name</label>
<br>

<?php

 echo'<select onblur="course_marks()" name="name" id="name1">
<option>Select</option>';
 $sqli = "SELECT * FROM dropdown1";
$result = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result)) {
	?>

<option value="<?php echo $row['id'];?>">  <?php echo $row['name'];?></option>


	<?php
      
}
echo '</select>';
?>
		
			
				

		<div class="form-outline mb-4">
					<label>Student Email</label>
					<input type='text' name="s_email"
						id='s_email' class='form-control'
						placeholder='Enter Student Email'
						onblur="" value="" required style="font-size:15px;" > 
				</div>
				
		
				<div class="form-outline mb-4">
					<label>Parent Email</label>
					<input readonly type='text' name="p1_email"
						id='p_email' class='form-control'
						placeholder='Enter Parent Email'
						onblur="" value="" style="font-size:15px;">
				</div>
			
				<!-- <br> -->
		
				<div class="form-outline mb-4">
					<label>Teacher Email</label>
					<input readonly type='text' name="t1_email"
						id='t_email' class='form-control'
						placeholder='Enter Teacher Email'
						onblur="" value="" style="font-size:15px;">
				</div>
			
				<!-- <br> -->
		
				
			
				<!-- <br> -->
				<div class="form-outline mb-4">
					<label>Course</label>
					<input   readonly type="text"
						id="course" class="form-control"
						placeholder='English'
						value="" onblur="" style="font-size:15px;">
				</div>
			
				<!-- <br> -->
				<div class="form-outline mb-4">
					<label>Course Id</label>
					<input readonly type="text" name="remaining"
						id="course_id" class="form-control"
						placeholder='EDC-402'
						value="" onblur="" style="font-size:15px;">
				</div>
			
				

           
			<br>
				<button class="btn btn-primary btn-block" type="submit" style="font-size:15px;">Send</button>
        
	</div>
    </form>
	<script>
function course_marks() {

 
   

    var id  = document.getElementById("name1").value;
	// alert(id);
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
       $.ajax({
          type:'POST',
          url:'/ajax4',
          data:{id:id},
          success:function(data){
					
            $("#s_email").attr("value", data[0]);
            $("#p_email").attr("value", data[1]);
            $("#t_email").attr("value", data[2]); 			     
			$("#course").attr("value", data[3]); 
			$("#course_id").attr("value", data[4]);       
          }
       });
                
	  
      
}

setTimeout(function() {
    $('#message').fadeOut('fast');
}, 4000); // <-- time in milliseconds

	</script>
</body>
</html>
