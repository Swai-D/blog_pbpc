<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class IndexController extends Controller
{

  //Main content  View
  
  public function pbpc_Main_content_1()
  {
    $data_main_1 = Post::where([['post_position','=','post_main_section'],['post_position_number', '=','1']])->get();
    // dd($data_main_1);
     return view('index.pbpc_Main_content_1', compact('data_main_1'));
  }


  public function pbpc_Main_content_2()
  {
    $data_main_2 = Post::where([['post_position','=','post_main_section'],['post_position_number', '=','2']])->get();

    return view('index.pbpc_Main_content_2',compact('data_main_2'));
  }


  public function pbpc_Main_content_3()
  {
    $data_main_3 = Post::where([['post_position','=','post_main_section'],['post_position_number', '=','3']])->get();
    return view('index.pbpc_Main_content_3',compact('data_main_3'));
  }


 //Sub-Main View
  public function pbpc_Sub_content_1()
  {
    $data_sub_main_1 = Post::where([['post_position','=','post_sub_section'],['post_position_number', '=','1']])->get(); 
    // dd($data_sub_main_1);
    return view('index.pbpc_Sub_content_1', compact('data_sub_main_1'));
  }

  public function pbpc_Sub_content_2()
  {
    $data_sub_main_2 = Post::where([['post_position','=','post_sub_section'],['post_position_number', '=','2']])->get(); 
    return view('index.pbpc_Sub_content_2', compact('data_sub_main_2'));
  }

  public function pbpc_Sub_content_3()
  {
    $data_sub_main_3 = Post::where([['post_position','=','post_sub_section'],['post_position_number', '=','3']])->get(); 
    return view('index.pbpc_Sub_content_3', compact('data_sub_main_3'));
  }

  public function pbpc_Sub_content_4()
  {
    $data_sub_main_4 = Post::where([['post_position','=','post_sub_section'],['post_position_number', '=','4']])->get(); 
    return view('index.pbpc_Sub_content_4', compact('data_sub_main_4'));
  }

  //Min-Main View
  public function pbpc_Min_content_1()
  {
    $data_mini_main_1 = Post::where([['post_position','=','post_min_section'],['post_position_number', '=','1']])->get(); 
    // dd($data_mini_main_1);
    return view('index.pbpc_Min_content_1');
  }

  public function pbpc_Min_content_2()
  {
    $data_mini_main_2 = Post::where([['post_position','=','post_min_section'],['post_position_number', '=','2']])->get(); 
    return view('index.pbpc_Min_content_2',compact('data_mini_main_2'));
  }

  public function pbpc_Min_content_3()
  {
    $data_mini_main_3 = Post::where([['post_position','=','post_min_section'],['post_position_number', '=','3']])->get(); 
    return view('index.pbpc_Min_content_3',compact('data_mini_main_3'));
  }

  public function pbpc_Min_content_4()
  {
    $data_mini_main_4 = Post::where([['post_position','=','post_min_section'],['post_position_number', '=','4']])->get(); 
    return view('index.pbpc_Min_content_4', compact('data_mini_main_4'));
  }

  public function pbpc_Min_content_5()
  {
    $data_mini_main_5 = Post::where([['post_position','=','post_min_section'],['post_position_number', '=','5']])->get(); 
    return view('index.pbpc_Min_content_5', compact('data_mini_main_5'));
  }

  public function author()
  {
    return view('index.author');
  }





}
