<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class answersModel{

  public static function get_question($id){
    $questions = DB::table('questions')->where('id', $id)->get();
    return $questions;
  }

  public static function find_by_ques_id($id){
    $jawaban = DB::table('answers')->where('questions_id', $id)->get();
    return $jawaban;
  }

  public static function save($data){
    $new_answers = DB::table('answers')->insert($data);
    return $new_answers;
  }

}

 ?>
