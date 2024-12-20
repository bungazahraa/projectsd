<?php

namespace App\Http\Controllers;

use id;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       // Mengambil semua data berita terbaru
       $news = News::latest()->get();
       // Mengirim data $news ke view 'news.index'
       return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $validatedData = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Maksimal 2MB
            'nama' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'content' => 'required|string',            
        ]);

         // Buat instance model berita baru
         $news = new News();
         $news->nama = $request->nama;
         $news->title = $request->title;
         $news->content = $request->content;

        // Simpan gambar ke folder public/storage/images
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('img', 'public');
        }

        // Simpan data ke database
        $news = new News();
        $news->image_url = $imagePath ?? null; // Menyimpan path gambar
        $news->title = $validatedData['title'];
        $news->content = $validatedData['content'];
        $news->nama = $validatedData['nama'];
        
        $news->save();

        return redirect()->route('news.index')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        
        return view('news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'nama' => 'required|string|max:100',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($news->image);
            $news->image = $request->file('image')->store('news_images', 'public');
        }

        $news->update([
            'image_path' => $news->image ?? $news->image,
            'nama' => $request->nama,
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('news.index')->with('success', 'News updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        $news->delete();
        return redirect()->route('news.index')->with('success', 'Berita berhasil dihapus.');

    }
}
