<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Http\Concerns\InteractsWithInput;
use Illuminate\Support\Facades\Validator;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //insert
        // $blog=new Blog();
        // $blog->title='Hallo Bekasi';
        // $blog->descriptions="hanya mencoba kedua";
        // $blog->save();
        // $blogs=Blog::all();
        // return view ('blog.index',compact('blogs'));
        //insert mass asigment
        // Blog::create([
        //     'title' => 'Hallo mekah',
        //     'descriptions' => 'Tegal laka-laka deh',
        //     'created_at' => '2020-02-18',
        //     'updated_at'=> now(),
        //     ]);
        //firstrcreared untuk nambah data... bisa buat deteksi data ganda ato tidak
            //

        //update or insert bisa buat tampuilkan objek///


        // $blogs=Blog::updateOrCreate([
        //     'title'=>"halao jakarta",
        //     'descriptions' =>"ini isi dari halo jakarta ya"
        // ],[
        //     'title'=>'halo cek'
        // ]);


        //update
        // $blogs=Blog::where('title','Hallo Bekasi')->first();
        // $blogs->title="Hallo Rosid";
        // $blogs->descriptions="isi halo rosid";
        // $blogs->save();

        //delete
        Blog::where('title','halo cek')->delete();
        //destroy
        Blog::destroy([7]);
        //mass asignen update
        // Blog::where('title','Hallo Rosid')->update([
        //     'title'=>'Halo semarang',
        //     'descriptions'=>'halo indonesia semarang'
        // ]);



        $blogs=Blog::paginate(2);
        return view ('blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    $rules=[
        'title' => 'required||min:5',
        'descriptions' =>'required|min:10'
    ];
    $message=[
        'required' =>':attribute wajib diisi',
        'title.min'   =>':attribute minimal 5 karakter :min',
        'descriptions.min'   =>':attribute minimal :min'
    ];

        $validation=Validator::make($request->all(), $rules,$message);
        if($validation->fails()) {
            return redirect()->route('create-blog')
            ->withErrors($validation)
            ->WithInput();
        }
        $blog= new Blog();
        $blog->title=$request->title;
        $blog->descriptions=$request->descriptions;
        $blog->save();

        return redirect ()->route('halaman-blog')->with(['message'=>"data berhasil disimpan"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $blogs=Blog::find($id);

        return view ('blog.detail',compact('blogs'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog=Blog::findOrFail($id);
        return view('blog.edit',compact('blog'));
    }


    public function update(Request $request, $id)
    {
        //

        // $data=[
        //     'title' => $request->title,
        //     'descriptios' =>$request->descriptions
        // ];
        // Blog::find

        $rules=[
            'title' => 'required||min:5',
            'descriptions' =>'required|min:10'
        ];
        $message=[
            'required' =>':attribute wajib diisi',
            'title.min'   =>':attribute minimal 5 karakter :min',
            'descriptions.min'   =>':attribute minimal :min'
        ];

            $validation=Validator::make($request->all(), $rules,$message);
            if($validation->fails()) {
                return redirect()->route('edit-blog',['id'=>$id])
                ->withErrors($validation)
                ->WithInput();
            }


        $blog=Blog::find($id);

        $blog->title=$request->title;
        $blog->descriptions=$request->descriptions;
        $blog->save();
        return redirect()->route('halaman-blog')->with([
            'message' => 'Blog berhasil di perbaharui'

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       Blog::destroy($id);
        return redirect()->route('halaman-blog')->with([
            'message' => 'Blog berhasil dihapus'
        ]);
    }
}
