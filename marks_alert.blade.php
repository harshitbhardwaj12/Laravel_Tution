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
	<style>
	body
	{
		background-size:cover;
		background-repeat: no-repeat;
		background-image:url("https://webartdevelopers.com/blog/wp-content/uploads/2019/02/Animated-Ripples-Background-HTML-CSS.gif")
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
    background-image: linear-gradient(-225deg, skyblue 55% ,white 50%);
	float: right;
margin: 50px;
color:black
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
		
        <form action="/marks" method="post" class="form">
        @csrf
		<h1>MARKS  ALERT </h1>

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

 echo'<select onblur="course_marks()" name="name" id="name1"  style="color:black;">
 <option selected>Select      Student      Name</option> ' ;
 $sqli = "SELECT * FROM dropdown1";
$result7 = mysqli_query($con, $sqli);
while ($row = mysqli_fetch_array($result7)) {
	?>

<option value="<?php echo $row['id'];?>" style="">  <?php echo $row['name'];?></option>


	<?php
      
}
echo '</select>';
?>
</div>

<br>

			
		<div class="form-outline mb-4">
					<label>Student Email</label>
					<input readonly type='text' name="s_email"
						id='s_email' class='form-control'
						placeholder='Student Email'
						onblur="" value="" required>
				</div>
				<br>
		
				<div class="form-outline mb-4">
					<label>Parent Email</label>
					<input  readonly type='text' name="p1_email"
						id='p_email' class='form-control'
						placeholder='Parent Email'
						onblur="" value="">
				</div>
			
				<br>
		
				<div class="form-outline mb-4">
					<label>Teacher Email</label>
					<input readonly type='text' name="t1_email"
						id='t_email' class='form-control'
						placeholder='Teacher Email'
						onblur="" value="">
				</div>
			
			
		
				
				<br>
				<div class="form-outline mb-4">
					<label>Total Marks</label>
					<input  readonly type="text"
						id="total" class="form-control"
						placeholder='Total Marks'
						value="" onblur="">
				</div>
			
				<br>
				<div class="form-outline mb-4">
					<label>Marks Gain </label>
					<input readonly type="text" name="remaining"
						id="gain" class="form-control"
						placeholder='Total Marks Gain'
						value="" onblur="">
				</div>
			
				<br>
				<div class="form-outline mb-4">
					<label>Grade </label>
					<input readonly type="text" name="remaining"
						id="grade" class="form-control"
						placeholder='Total Grade'
						value="" onblur="">
				</div>
			<br><br>
				<button class="btn btn-primary btn-block" type="submit">Send</button>
        
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
          url:'/ajax2',
          data:{id:id},
		//   dataType: 'JSON',
          success:function(data){
			//   alert(JSON.stringify(data));
			$("#s_email").attr("value", data[0]);
            $("#p_email").attr("value", data[1]);
            $("#t_email").attr("value", data[2]); 
			
            $("#total").attr("value", data[3]);
            $("#gain").attr("value", data[4]); 
			$("#grade").attr("value", data[5]);           
          }
       });
 
          
      
}

setTimeout(function() {
    $('#message').fadeOut('fast');
}, 4000); // <-- time in milliseconds
	</script>
</body>
</html>
