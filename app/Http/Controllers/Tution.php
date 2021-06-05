<?php

namespace App\Http\Controllers;
use DB;
use session;
use Illuminate\Http\Request;

class Tution extends Controller
{
    public function student_login()
    {
       return view('student_login');
    }

    public function teacher_login()
    {
       return view('teacher_login');
    }
//---------------------------------------LOGIN PAGE SELECT USERNAME AND PASSWORD FUNCTION-----------------------------------------------------
   
public function login(request $request)
    {
       $username = $request->input('email');
       $password =$request->input('pass');
       $request->session()->get('user',$request->input('email'));

       $sql=DB::select("select E_mail,Pass from tutor_details where E_mail='$username' && pass='$password'");
       if($sql==true)
       {
       return view("/Tutor_home");
       }
       else
       {
        return back()->with('status2', " Id or may be password incorrect");
       }
    }
//---------------------------------------FORGOT MAIL SEND  FUNCTION-----------------------------------------------------

    public function forgot_mail(request $request)
    {
        $email=$request->input('email');
        
        $result=DB::select("select pass from tutor_details where E_mail= ? ", [ $email] );
        if(sizeof($result)>0)
        {
            $return_password=$result[0]->pass;
            if(isset($return_password) && $return_password !="")
            {
                $details = [
                                'title' => $return_password,            
                            ];
                           
                           
                            \Mail::to($email)->send(new \App\Mail\sendmail($details));
                            return back()->with('status', 'Password Is Send To Your Mail Id');
            }
        }
        else
        {
            return back()->with('status2', 'The Mail That You Enter Is Incorrect Please Check And Try Again!');
        }
   }
//---------------------------------------CHANGE PASSWORD/UPDATE FUNCTION-----------------------------------------------------
   
public function change_password(request $request)
   {
       $password=$request->input('password');
       $email=$request->input('email');
       $password1=$request->input('pass');

    

       $sql1=DB::select("select pass from tutor_details where E_mail='$email' ");
       
  
       if($password==$sql1[0] -> pass)
       {
        DB::select("UPDATE tutor_details SET pass = '$password1' WHERE E_mail = '$email'");
        return back()->with('status', ' Password Change Succesfully');              
       }
       else
       {
        return back()->with('status2', ' Old  password incorrect');
       }
   }
//---------------------------------------FEES AUTOCOMPLETE FIELD FUNCTION-----------------------------------------------------
   
public function fees(request $request)
   {  
        $input = request()->all();
        $id =  request() -> id;
         $sql=DB::select("select * from dropdown1");
    // $connection=DB::getPdo();
       $sql=DB::select("SELECT username,p_username,t_username,fees,remaining,paid FROM dropdown1 WHERE id='$id'");
       $data = array( $sql[0] ->username , $sql[0] ->p_username , $sql[0] ->t_username  ,$sql[0] -> fees, $sql[0] -> remaining , $sql[0] -> paid);
if($data==true){
       return $data ; 
       // return json_encode($sql); 
    }           
    else{return"the id that you filled is incorrect ";}       
   }

   //---------------------------------------FEES MAIL SEND  FUNCTION-----------------------------------------------------
   
   public function fees_alert(request $request)
   {
    $s_email=$request->input('s_email');
    $p_email=$request->input('p_email');
    $t_email=$request->input('t_email');
    

    $result=DB::select("select name,fees,remaining,paid from dropdown1 where username='$s_email' &&  p_username='$p_email' && t_username='$t_email' ",);
    
    if(sizeof($result)>0)
    {
        $return_email=$result[0]->name;
        $return_email2=$result[0]->fees;
        $return_email3=$result[0]->paid;
        $return_email4=$result[0]->remaining;
        // if(isset($return_email) && $return_email !="")
        // {
            $email_details = [
                            'title' => $return_email,  
                            'title2' => $return_email2,   
                            'title3' => $return_email3,
                            'title4' => $return_email4,       
                        ];
                       
                       
             \Mail::to($s_email)->cc($p_email)->bcc($t_email)->send(new \App\Mail\sendmail2($email_details));
              return back()->with('status1', 'Alert Mail Send ');
    
        // }
    }
    else
    {
        return back()->with('status2', 'The Mail-Id That You Enter Is Incorrect Please Check And Try Again!');
    }
   }
//---------------------------------------AUTOFILLED MARKS FIELLD FUNCTION-----------------------------------------------------
   
public function marks(request $request)
   {
    $input = request()->all();
    $id =  request() -> id;
    // $sql=DB::select("select * from dropdown1");
    // $connection=DB::getPdo();
   $sql=DB::select("SELECT username,p_username,t_username,t_marks,g_marks,grade FROM dropdown1 WHERE id='$id'");
   $data = array($sql[0] ->username ,$sql[0] ->p_username , $sql[0] ->t_username  ,$sql[0] -> t_marks, $sql[0] -> g_marks , $sql[0] -> grade);

     return $data ; 
      // return json_encode($sql); 
   }
 //---------------------------------------MARKS MAIL SEND  FUNCTION-----------------------------------------------------
   
 public function marks_alert(request $request)
   {
    $s1_email=$request->input('s_email');
    $p1_email=$request->input('p1_email');
    $t1_email=$request->input('t1_email');

    $result1=DB::select("select name,t_marks,g_marks,grade from dropdown1 where username='$s1_email' &&  p_username='$p1_email' && t_username='$t1_email' ",);
    
  
    if(sizeof($result1)>0)
    {
        $return_email=$result1[0]->name;
        $return_email2=$result1[0]->t_marks;
        $return_email3=$result1[0]->g_marks;
        $return_email4=$result1[0]->grade;
        // if(isset($return_email2,) && $return_email2 !="")
        // {
            $email_details = [
                            'title' => $return_email,  
                            'title2' => $return_email2,   
                            'title3' => $return_email3,
                            'title4' => $return_email4,       
                        ];
                        $basic  = new \Nexmo\Client\Credentials\Basic('d9c6da48', 'J0PVvJDOJhzlrcL0');
                        $client = new \Nexmo\Client($basic);
                 
                        $message = $client->message()->send([
                            'to' => '918427889407',
                            'from' => '918427889407',
                          'text' => " student marks text sms",
                        ]);
                       
             \Mail::to($s1_email)->cc($p1_email)->bcc($t1_email)->send(new \App\Mail\sendmail3($email_details));
              return back()->with('status1', 'Alert Mail Send');
     // dd("send mail");
        // }
    }
    else
    {
        return back()->with('status2', 'The Mail-Id That You Enter Is Incorrect Please Check And Try Again!');
    }
    
 }
 public function timing(request $request)
   {
    $input = request()->all();
    $id =  request() -> id;
   $sql=DB::select("SELECT username,p_username,t_username,course,course_id,d_t FROM dropdown1 WHERE id='$id'");
   $data = array($sql[0] ->username ,$sql[0] ->p_username , $sql[0] ->t_username ,  $sql[0] -> course, $sql[0] -> course_id , $sql[0] -> d_t);

   return $data ;  
   }

   public function timing_alert(request $request)
   {
    $s1_email=$request->input('s_email');
    $p1_email=$request->input('p1_email');
    $t1_email=$request->input('t1_email');

    $result1=DB::select("select name,course,course_id,d_t from dropdown1 where username='$s1_email' &&  p_username='$p1_email' && t_username='$t1_email' ",);
    // dd($result1);
  
    if(sizeof($result1)>0)
    {
        $return_email=$result1[0]->name;
        $return_email2=$result1[0]->course;
        $return_email3=$result1[0]->course_id;
        $return_email4=$result1[0]->d_t;
        // if(isset($return_email2,) && $return_email2 !="")
        // {
            $email_details = [
                            'title' => $return_email,  
                            'title2' => $return_email2,   
                            'title3' => $return_email3,
                            'title4' => $return_email4,       
                        ];
                        $basic  = new \Nexmo\Client\Credentials\Basic('d9c6da48', 'J0PVvJDOJhzlrcL0');
                        $client = new \Nexmo\Client($basic);
                 
                        $message = $client->message()->send([
                            'to' => '918427889407',
                            'from' => '918427889407',
                          'text' => " student class timing text sms",
                        ]);
                       
             \Mail::to($s1_email)->cc($p1_email)->bcc($t1_email)->send(new \App\Mail\sendmail4($email_details));
              return back()->with('status1', 'Alert Mail Send');
    // dd("send mail");
        // }
    }
    else
    {
        return back()->with('status2', 'The Mail-Id That You Enter Is Incorrect Please Check And Try Again!');
    }
   }

  public function syllabus(request $request)
   {
    $input = request()->all();
    $id =  request() ->id;

   $sql=DB::select("SELECT username, p_username,t_username,course,course_id FROM dropdown1 WHERE id='$id'");

   $data = array($sql[0] ->username ,$sql[0] ->p_username , $sql[0] ->t_username ,$sql[0] -> course, $sql[0] -> course_id);

   return $data ;  
   }

  function syllabus_alert(request $request)
   {
    $s1_email=$request->input('s_email');
    $p1_email=$request->input('p1_email');
    $t1_email=$request->input('t1_email');

    

    $result1=DB::select("select name,course,course_id FROM  dropdown1 where username='$s1_email' &&  p_username='$p1_email' && t_username='$t1_email' ",);
    // dd($result1);
  
    if(sizeof($result1)>0)
    {
        $return_email=$result1[0]->name;
        $return_email2=$result1[0]->course;
        $return_email3=$result1[0]->course_id;
        // $return_email3=$result1[0]->syllabus;
            $email_details = [
                            'title' => $return_email,  
                            'title2' => $return_email2,   
                            'title3' => $return_email3,
                            // 'return_value'=>$return_email3,
                                  
                        ];
                       
                        $basic  = new \Nexmo\Client\Credentials\Basic('d9c6da48', 'J0PVvJDOJhzlrcL0');
                        $client = new \Nexmo\Client($basic);
                 
                        $message = $client->message()->send([
                            'to' => '918427889407',
                            'from' => '918427889407',
                          'text' => " student syllabus text sms",
                        ]);
                 
             \Mail::to($s1_email)->cc($p1_email)->bcc($t1_email)->send(new \App\Mail\sendmail5($email_details));
              return back()->with('status1', 'Alert Mail Send');

              
             
    }
    else
    {
        return back()->with('status2', 'The Mail-Id That You Enter Is Incorrect Please Check And Try Again!');
    }

}

public function index()
    {
        $basic  = new \Nexmo\Client\Credentials\Basic('key', 'secret');
        $client = new \Nexmo\Client($basic);
 
        $message = $client->message()->send([
            'to' => '9181600*****',
            'from' => 'Nexmo',
            'text' => 'A text message sent using the Nexmo SMS API'
        ]);
 
        dd('message send successfully');
    }
}
