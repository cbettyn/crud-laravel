<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\questionsModel;
use App\Models\answersModel;

class PertanyaanController extends Controller
{
    public function index(){
      $questions = questionsModel::get_all();
      return view('pertanyaan.daftar', compact('questions'));
    }

    public function create(){
      return view('pertanyaan.form');
    }

    public function store(Request $request){
      $data = ['judul' => $request->judul,
                'isi' => $request->isi,
                'created_at' => now(),
                'updated_at' => now()
              ];
      $question = questionsModel::save($data);
      if($question){
        $questions = questionsModel::get_all();
        return view('pertanyaan.daftar', compact('questions'));
      }
    }

    public function detail($id){
      $get_ques = questionsModel::get_question_by_id($id);
      $get_ans = answersModel::find_by_ques_id($id);
      return view('pertanyaan.detail', compact('get_ques', 'get_ans'));
    }

    public function ubah($id){
      $get_ques = questionsModel::get_question_by_id($id);
      return view('pertanyaan.edit', compact('get_ques'));
    }

    public function update($id, Request $request){
      $data = ['judul' => $request->judul,
                'isi' => $request->isi,
                'updated_at' => now()
              ];
      $ques = questionsModel::update($id, $data);
      if($ques){
        $questions = questionsModel::get_all();
        return redirect('/pertanyaan/'.$id);
      }
    }

    public function hapus($id){
      $delete = questionsModel::hapus($id);
      return redirect('/pertanyaan');
    }
}
