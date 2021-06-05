<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class update extends Controller
{
   

    public function updateInfo(Request $request)
    {
        $input = request()->all();
        $id    =  request() ->  id;

        $sql = DB::select("SELECT * FROM basic_details WHERE Student_ID = ? ", [$id]);
        
        $data = array($sql[0] -> S_Name, $sql[0] -> F_Name, $sql[0] -> S_Email, $sql[0] -> S_No, $sql[0] -> P_No, $sql[0] -> School_Name, $sql[0] -> S_Pass, $sql[0] -> S_Age, $sql[0] -> S_Address);

         return $data ;
    }

    public function update(Request $request)
    {

        $input    =  request() ->  all();
        $id       =  request() ->  id;
        $sname    =  request() ->  sname;
        $fname    =  request() ->  fname;
        $email    =  request() ->  email;
        $sno      =  request() ->  s_no;
        $fno      =  request() ->  p_no;
        $school   =  request() ->  age;
        $time     =  request() ->  time;
        $age      =  request() ->  age;
        $gender   =  request() ->  gender;
        $add      =  request() ->  add;

        try{
        $sql = DB::UPDATE("UPDATE `basic_details` SET `S_Name`= ?,`F_Name`= ?,`S_Email`= ?,`S_No`= ?,`P_No`= ?,`School_Name`= ? ,`S_Time`= ? ,`S_Age`= ?, `S_Address`= ?,`S_gender`= ? WHERE Student_ID = ?", [$sname, $fname, $email, $sno, $fno, $school, $time, $age, $add, $gender, $id]);
        $sql0 = DB::select("SELECT Student_ID FROM basic_details WHERE S_Email = ? ", [$email]);
        $sql2 = DB::select("SELECT S_Email FROM basic_details WHERE S_Email = ? ", [$email]);
    }catch(\Exception $exception)
    {

        return false;
    }

        $a = $sql0[0] -> Student_ID;
        $b = $sql2[0] -> S_Email;
        
        $data = array($a,$sql,$b);

        return $data;

    }

    

}
