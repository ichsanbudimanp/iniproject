<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\New_;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = DB::table('posts')->get();
        
        $view_post = [
            'posts' => $posts
        ];
        
        return view('posts.index', $view_post);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $konten = $request->input('konten');

        DB::table('posts')->insert([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'konten' => $konten,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $posts = DB::table('posts')
        ->where('id', $id)
        ->get()
        ->first();

        $view_post = [
            'post' => $posts
        ];

        return view('posts.detail', $view_post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = DB::table('posts')
        ->where('id', $id)
        ->get()
        ->first();

        $view_post = [
            'post' => $posts
        ];
        return view('posts.edit', $view_post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $judul = $request->input('judul');
        $deskripsi = $request->input('deskripsi');
        $konten = $request->input('konten');

        DB::table('posts')
        ->where('id', $id)
        ->update([
            'judul' => $judul,
            'deskripsi' => $deskripsi,
            'konten' => $konten,
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('posts')
        ->where('id', $id)
        ->delete();

        return redirect('posts');
    }
}
