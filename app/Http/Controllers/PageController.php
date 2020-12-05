<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Regency;
use App\Models\Store;
use Instagram\Api;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class PageController extends Controller
{
    //
    public function index(){
        $posts = Post::where('published', 1)
                ->orderBy('created_at', 'desc')
                ->paginate(8);
        $media = [];
        // $cachePool = new FilesystemAdapter('Instagram', 0, __DIR__ . '/../cache');
        // $api = new Api($cachePool);

        // $api->login('sopiseptiansyah', 'Bav279ao75'); // mandatory
        // $profile = $api->getProfile('konilife_official');
        // sleep(1);
        // $username = $profile->getUserName();
        // $name = $profile->getFullName();
        // $media = $profile->getMedias();

        return view('landing', compact('posts', 'media'));
    }
}
