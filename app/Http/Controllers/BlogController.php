<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all(); 
        return view('blogs.list', compact('blogs')); 
    }

    public function create()
    {
        return view('blogs.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'isi' => 'required',
            'pembuat' => 'required|max:255',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        if ($request->hasFile('foto')) {
            $validated['foto'] = $request->file('foto')->store('uploads', 'public');
        }


        Blog::create($validated);

        return redirect('/blogs')->with('success', 'Blog berhasil ditambahkan!');
    }

    public function edit($id)
{
    $blog = Blog::findOrFail($id);
    return view('blogs.edit', compact('blog'));
}

public function up()
{
    Schema::table('blogs', function (Blueprint $table) {
        $table->string('foto')->nullable(); 
    });
}


public function update(Request $request, $id)
{
    $blog = Blog::findOrFail($id);

    $validated = $request->validate([
        'judul' => 'required|max:255',
        'isi' => 'required',
        'pembuat' => 'required|max:255',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
    ]);

    if ($request->hasFile('foto')) {
        $fileName = time() . '.' . $request->foto->extension();
        $request->foto->move(public_path('images'), $fileName);
        $blog->foto = $fileName;
    }

    $blog->save();

    return redirect('/blogs')->with('success', 'Blog berhasil dibuat!');

    $blog->update($validated);

    return redirect('/blogs')->with('success', 'Blog berhasil diperbarui!');
}

public function destroy($id)
{

    $blog = Blog::findOrFail($id);


    if ($blog->foto && Storage::disk('public')->exists($blog->foto)) {
        Storage::disk('public')->delete($blog->foto);
    }

    $blog->delete();

    return redirect('/blogs')->with('success', 'Blog berhasil dihapus!');
}


}
