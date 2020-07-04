<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class questionsModel{
  public static function get_all(){
    $questions = DB::table('questions')->get();
    return $questions;
  }

  public static function save($data){
    $new_question = DB::table('questions')->insert($data);
    return $new_question;
  }

  public static function get_question_by_id($id){
    $question = DB::table('questions')->where('id', $id)->get();
    return $question;
  }

  public static function update($id, $data){
    $ques = DB::table('questions')->where('id', $id)->update($data);
    return $ques;
  }

  public static function hapus($id){
    $delete = DB::table('questions')->where('id', $id)->delete();
    return $delete;
  }

}

 ?>
