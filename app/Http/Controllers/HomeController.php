<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index(){
        $no=1;
      $user= DB::table('users')->get();
    //  $title="Halaman Home";
          return view('home/index',['users'=>$user]);
         // return view('home/index',compact('users','title'));
    }
    public function show($id) {

       $user=DB::table('users')->whereId($id)->first();
       return view ('home/detail', ['user'=>$user]);


    //     //insert data
    //    DB::table('users')->insert([
    //        ['username'=>'Rori', 'password'=>'123'],
    //        ['username'=>'Roi', 'password'=>'123'],
    //        ['username'=>'Ria', 'password'=>'123']
    //    ]);
    //     //update data
    //    DB::table('users')->where('username','rosid')->update([
    //     'username'=>'rosid', 'password'=>'012',
    // ]);
        //hapus data
       DB::table('users')->where('id','>=',4)->delete();
       //get user
       // $user = DB::table('users')->where('username','like','r%')->get();
       // dd($user);
       return view ('home/detail', ['users'=>$user]);


    }
    public function create(){
        return view ('home.form');
    }
    public function store(Request $request) {
        $data=[
            'username'=> $request->username,
            'password'=> $request->password
        ];
        DB::table('users')->insert($data);
        return redirect('/home');
    }
    public function edit($id) {
        $user=DB::table('users')->whereId($id)->first();
        if($user==null) {
            return abort(404);
        }
        return view('home.edit',['user'=>$user]);
    }

    public function update(Request $request, $id) {


        $user=DB::table('users')->whereId($id)->update([
            'username' => $request->username,
            'password' => $request->password
        ]);
        return redirect()->route('halaman-utama');

    }

    public function destroy($id){

        DB::table('users')->whereId($id)->delete();
        return redirect('/home');
    }
}


