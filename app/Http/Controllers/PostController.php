<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $post) #Post $post → $post = new post　$postをclass Postでインスタンス化
    {
       
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    public function show(Post $post)
    {
        return view('posts/show')->with(['post' => $post]);

    }
    
    public function create (){
        return view('posts/create');
    }
    
    public function store(Post $post, Request $request){
        $input = $request['post'];
        $post -> fill($input) -> save();
        return redirect('/posts/' . $post->id);
    }
}


/*

view関数はviewsフォルダの中のファイルを指定してそのファイルの中身を見せる関数
別のどのファイルから指定しても飛べる、現にHttpの中のPostControllerから飛んでいる

withの'posts'は配列でdd($post->getPaginateByLimit(2));で調べ、itemsを見ると分かるが、
App\postが入っている。これがデータベースで作った中身。ちなみに2個しかないよ。

そして右側$postが、3行上で自分で作成したindex関数の中の$post
index関数内のPost関数はPost.phpで定めたクラス=postというクラスを参照してね、ということ、
つまりpost.phpでみれるpostクラスをインスタンス化し、$postとした。
その結果、getPaginateByLimitを使えるようになった。

index.blade.php内の$postsはPostControllerの'posts'と対応

基本、web.phpでhttp~(固定部分＝あらかじめ決まっている部分),~(自分で決める部分)の「自分で決める部分」を自分で決めている。
それが/としている。
*/

?>
