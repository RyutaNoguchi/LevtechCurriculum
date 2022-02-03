<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Post一覧を表示する
     *
     * @param Post Postモデル
     * @return array Post Postモデルリスト
     *//
     public function index(Post $post)
     {
        return $post->get();
     }
}
