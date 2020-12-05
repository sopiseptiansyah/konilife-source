<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //

    public function post(Request $request){
        $posts = Post::orderBy('published', 'desc')
                ->orderBy('created_at', 'desc')
                ->paginate(10);
        $published = $request->published;

        if($request->published != null){
            $published = (int)$published;
            // dd($published);
            $posts = Post::where('published', $published)
                    ->orderBy('created_at', 'desc')
                    ->paginate(10);
            $posts->appends(request()->query());
            return view('admin.page.post', compact('posts', 'published'));
        }

       
        return view('admin.page.post', compact('posts', 'published'));
    }

    public function newPost(){
        return view('admin.page.new-post');
    }

    private function uploadFoto($request)
    {
        $source = json_decode($request->image);
        $maxFileSize = 3 * 1024 * 1024;

        if (!Str::contains($source->input->type, 'image')) {
            return 
                redirect()
                ->back()
                ->withErrors(['image' => 'File yang diupload harus gambar']);
        }

        if ($source->input->size > $maxFileSize) {
            redirect()
                ->back()
                ->withErrors(['image' => 'File harus dibawah 3MB']);
        }

        $extArr = explode('.', $source->input->name);
        $ext = end($extArr);
        $file_name = uniqid() . '_' . Str::slug($request->title)  .  '.' . $ext;
        $path = 'artikel/' . $file_name;

        $img = Image::make($source->output->image);
        $encode = $img->encode('jpg');

        Storage::put(
            'public/' . $path,
            $encode->__toString()
        );

        return $file_name;
    }

    private function generateThumbnail($image){
        
        $thumbnail = Image::make(storage_path('app/public/artikel/' . $image))
            ->fit(398, 326);

        $imageName = 'thumbnail_' . $image;

        $path = 'thumbnail/' . $imageName;
        $encode = $thumbnail->encode('jpg');
        
        Storage::put(
            'public/' . $path,
            $encode->__toString()
        );

        return $imageName;
    }

    public function addPost(Request $request){
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published' => 'required',
            'image' => 'required' 
        ]);

        $image = $this->uploadFoto($request);
        $thumbnail = $this->generateThumbnail($image);
        
        // dd($validatedData);

        $post = Post::create([
            'title' => $validatedData['title'],
            'image' => $image,
            'thumbnail' => $thumbnail,
            'content' => $validatedData['content'],
            'published' => $validatedData['published'],
        ]);
        
        return redirect()->route('admin.posts')->with(['add.success' =>'Artikel berhasil ditambahkan']);;
    }

    public function editPost($id, Request $request){
       $post = Post::findOrFail($id);
       return view('admin.page.edit-post', compact('post'));
    }

    public function updatePost($id, Request $request){
       $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'published' => 'required',
        ]);
        
        if($request['image'] != null){
            $image = $this->uploadFoto($request);
            $thumbnail = $this->generateThumbnail($image);
            $post = Post::where('id', $id)
                    ->update([
                        'title' => $validatedData['title'],
                        'image' => $image,
                        'thumbnail' => $thumbnail,
                        'content' => $validatedData['content'],
                        'published' => $validatedData['published'],
            ]);

            return redirect()->route('admin.posts')->with(['edit.success' =>'Artikel berhasil diperbarui']);;
        }

        $post = Post::where('id', $id)
                ->update([
                    'title' => $validatedData['title'],
                    'content' => $validatedData['content'],
                    'published' => $validatedData['published'],
        ]);
        
        return redirect()->route('admin.posts')->with(['edit.success' =>'Artikel berhasil diperbarui']);;
    }
    public function dropPost($id){
        $post = Post::findOrFail($id);
        $post->delete();
        
        return redirect()->route('admin.posts')->with(['delete.success' =>'Artikel berhasil dihapus']);
    }
}
