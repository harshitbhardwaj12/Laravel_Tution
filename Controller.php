<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use DB;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        return view("Home");
    }


    public function basic_Insert(Request $request){

        $sname    =  $request ->  input("txt_sname");
        $fname    =  $request ->  input("txt_fname");
        $email    =  $request ->  input("txt_email");
        $sno      =  $request ->  input("num_s_no");
        $fno      =  $request ->  input("num_p_no");
        $school   =  $request ->  input("txt_school");
        $time     =  $request ->  input("opt_time");
        $age      =  $request ->  input("txt_age");
        $gender   =  $request ->  input("opt_gender");
        $pass     =  $request ->  input("txt_pass");
        $add      =  $request ->  input("txt_add");
     
         //dd($sname ." ". $fname ." ". $email ." ".  $sno." ".$fno." ". $school ." ".$time ." ".$age ." ".$gender." ". $pass ." ".$add);
        try{

        $sql1 = DB::Insert("insert into basic_details (S_Name, F_Name, S_Email, S_No, P_No, School_Name, S_Pass, S_Age, S_Time, S_Address, S_gender) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$sname, $fname, $email, $sno, $fno, $school, $pass,  $age, $time, $add, $gender ]);
                
        } catch(\Exception $exception)
        {
    
            return view("error");
        }
    
            if($sql1 == true)
            {

                return redirect("/tutor_home#course");
    
            }
        
    }

    public function course_Insert(Request $request){

        

        $std_id         =  $request ->  input("txt_s_id");
        $Course         =  $request ->  input("opt_course");
        $fee            =  $request ->  input("txt_fee");
        $course_id      =  $request ->  input("txt_course_id");
        $fee_recived    =  $request ->  input("txt_recived");
        $fee_left       =  $request ->  input("txt_left");
        $slybus         =  $request ->  input("file_slybus");

       

        // dd($std_id  ." ". $Course ." ". $fee ." ". $course_id." ". $fee_recived." ". $fee_left." ". $slybus);

        try{

            $sql1 = DB::Insert("insert into student_course (Student_ID, Course_Name, Course_Fee, Course_ID, Fee_Recived, Fee_Left, Syllabus) values(?, ?, ?, ?, ?, ?, ?)", [ $std_id, $Course , $fee, $course_id, $fee_recived, $fee_left, $slybus]);
                    
            } catch(\Exception $exception)
            {
        
                return view("error");
            }
        
                if($sql1 == true)
                {
    
                    echo "<script>setTimeout(function(){ window.location.href = '/tutor_home'; }, 3000);</script>";
                    return view('succes');
        
                }
    }

    
    public function insert_basic(Request $request){

        $input = request()->all();
        $sname    =  request() ->  sname;
        $fname    =  request() ->  fname;
        $email    =  request() ->  email;
        $sno      =  request() ->  s_no;
        $fno      =  request() ->  p_no;
        $school   =  request() ->  age;
        $time     =  request() ->  time;
        $age      =  request() ->  age;
        $gender   =  request() ->  gender;
        $pass     =  request() ->  pass;
        $add      =  request() ->  add;
        $state      =  request() ->  state;
        $city      =  request() ->  city;

        try{
        $sql1 = DB::Insert("INSERT INTO basic_details (S_Name, F_Name, S_Email, S_No, P_No, School_Name, S_Pass, S_Age, S_Time, S_Address, S_gender, `state`, city) values( ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)", [$sname, $fname, $email, $sno, $fno, $school, $pass,  $age, $time, $add, $gender, $state, $city ]);
        $sql0 = DB::select("SELECT Student_ID FROM basic_details WHERE S_Email = ? ", [$email]);
        $sql2 = DB::select("SELECT S_Email FROM basic_details WHERE S_Email = ? ", [$email]);
    }catch(\Exception $exception)
    {

        return false;
    }

        $a = $sql0[0] -> Student_ID;
        $b = $sql2[0] -> S_Email;
        
        $data = array($a,$sql1,$b);

        return $data;

    }

    public function course_details(Request $request){

        $input = request()->all();
        $course =  request() -> course_name;
        $sql = DB::select("SELECT * FROM course_details WHERE Course_Name = ? ", [$course]);

        $data = array( $sql[0] -> Course_Fee,$sql[0] -> Course_ID );

        return $data ;


    }


    public function contact(Request $request){

        $name =    $request-> txt_name;
        $email =   $request-> txt_email ;
        $sub =     $request-> txt_subject ;
        $msg =     $request-> txt_msg;

        $sql1 = DB::Insert("INSERT INTO contact(Name, Email, Subject, msg) VALUE(?, ?, ?, ?)", [$name, $email, $sub, $msg] );
        if($sql1 == true)
        {
            echo "<script>alert('Message Sent Succesfully');</script>";
            return redirect()->back()->with('message', 'Contact You Soon!');
        }

        else{
            echo "<script>alert('Server Error');</script>";
            return redirect()->back()->with('message', 'Server Error!');
        }
    }



    public function emailCheck(Request $request)
    {
 
    $input = request()->all();
    $a =  request() -> email;
 
    $sql1 = DB::select("SELECT s_email from register_user where s_email = ?", [$a]);

     if (isset($sql1[0]->s_email)){
         if ($sql1[0]->s_email == $a )
     { 
         return true;
     }

     }
    }

    public function tutor_reg(Request $request)
    {
 
        $fname    =  $request ->  input("txt_name");
        $lname    =  $request ->  input("txt_lname");
        $email    =  $request ->  input("txt_email");
        $tno      =  $request ->  input("num_phone");
        $qns     =  $request ->  input("opt_qns");
        $ans     =  $request ->  input("txt_ans");
        $gender   =  $request ->  input("opt_gender");
        $pass     =  $request ->  input("txt_pass");
        $cpass     =  $request ->  input("txt_cpass");
      
       // dd($fname ." ". $lname  ." ". $email ." ".  $tno ." ".  $qns ." ".  $ans ." ".  $gender ." ".  $pass  ." ". $cpass);

       $sql = DB::insert("INSERT INTO `tutor_details` (`F_name`, `L_name`, `E_mail`, `Pass`, `C_pass`, `P_number`, `ans`, `qns`, `gender`) VALUES ( ?,?,?,?,?,?,?,?,?)", [$fname, $lname, $email,$pass ,$cpass, $tno, $ans, $qns, $gender ]);
        
       if($sql == true){
        echo "<script>setTimeout(function(){ window.location.href = '/teacher'; }, 4000);</script>";
        return view('tutor_succes');
       }
       else{
           return "Server Error Please Try Again Later";
       }
    }

    public function tutor_email()
    {
 
        $input = request()->all();
        $e    =  request() ->  email;

        $sql = DB::select("SELECT E_mail from tutor_details where E_mail = ?", [$e]);
        
        if (isset($sql[0]->E_mail)){
            if ($sql[0]->E_mail == $e )
        { 
            return true;
        }
   
        }
   

    }
}
