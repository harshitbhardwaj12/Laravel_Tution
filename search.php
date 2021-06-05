<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class search extends Controller
{
    public function search()
    {
        return view("Tutor_search");
    }

    public function search_By_Id(Request $request)
    {
        // $id = $request -> input("txt_search_input");


        $input = request()->all();
        $id    = request() -> id;

        $sql0 = DB::select("SELECT * FROM basic_details INNER JOIN fees ON basic_details.Student_ID = fees.Student_ID WHERE basic_details.Student_ID = ? ", [$id]);
        
        if(sizeof($sql0) < 1){

            $sql1 = DB::select("SELECT * FROM basic_details where Student_ID = ? ", [$id]);
            return json_encode($sql1);

        }
       
        else{

            return json_encode($sql0);
        }
    }

    public function filter(Request $request)
    {

        $value  = request() -> opt1;

        if($value == "left"){
            $sql = DB::select("SELECT * FROM basic_details INNER JOIN fees ON basic_details.Student_ID = fees.Student_ID WHERE fees.Fee_left > 0");
            return json_encode($sql);
        }
        if($value == "recived"){
            $sql = DB::select("SELECT * FROM basic_details INNER JOIN fees ON basic_details.Student_ID = fees.Student_ID WHERE fees.Total_Fee = fees.Fee_Recived");
            return json_encode($sql);
        }
        else{

            $sql = DB::select("SELECT * FROM basic_details WHERE S_gender = ? OR School_Name = ? " , [$value, $value]);
            return json_encode($sql);

        }
    }

    public function gender(){

        $Male = DB::select("select count(S_gender ) as M from basic_details WHERE S_gender = 'Male'");
        $Female = DB::select("select count(S_gender ) as F from basic_details WHERE S_gender = 'Female'");
           
        $data = array($Male[0] -> M, $Female[0] -> F);
         return $data;   
        }

        public function fee_status(){

            $left = DB::select("SELECT count(*) as `left` FROM student_course WHERE Fee_left > 0");
            $recived = DB::select("SELECT count(*) as recived FROM student_course WHERE Course_Fee = Fee_Recived");
               
            $data = array($left[0] -> left, $recived[0] -> recived);
             return $data;   
            }
}