<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\answersModel;

class JawabanController extends Controller
{
  public function index($id){
    $jawaban = answersModel::find_by_ques_id($id);
    return view('jawaban.daftar', compact('jawaban'));
  }

  public function store(Request $request, $id){
    $data = ['isi' => $request->isi_jawaban,
              'questions_id' => $id,
              'created_at' => now(),
              'updated_at' => now()
            ];
    $answers = answersModel::save($data);
    if($answers){
      $jawaban = answersModel::find_by_ques_id($id);
      return view('jawaban.daftar', compact('jawaban'));
    }
  }
}
