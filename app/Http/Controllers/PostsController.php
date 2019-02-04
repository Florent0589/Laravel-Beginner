<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Post;

class PostsController extends Controller
{

     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$post = Post::all();
        $post = DB::select('SELECT * FROM posts');
        $post = Post::where('title', 'New App')->get();
        $post = Post::orderBy('title', 'asc')->take(1)->get();*/
        $post = Post::orderBy('created_at', 'desc')->paginate(4); 

        // return post index
        return view('posts.index')->with('posts',$post);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return create vuew
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the data
        $this->validate($request, array(

            'title' => 'required',
            'body'  => 'required',
            'post_image' => 'image|nullable|max:1999'
        ));

        // handle post image
        if($request->hasFile('post_image')){

            $fileNameWithExt = $request->file('post_image')->getClientOriginalName();

            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get file extension
            $fileextension = $request->file('post_image')->getClientOriginalExtension();

            // file name to stor
            $fileNameToStore = $filename."_".time().".".$fileextension;

            // upload file to system
            $path = $request->file('post_image')->storeAs('public/post-images', $fileNameToStore);

        }
        else{

            $fileNameToStore = 'noimage.jpg';
        }

        //create post
        $post        = new Post;
        $post->title = $request->input('title');
        $post->body  = $request->input('body');
        $post->user_id = Auth()->user()->id;
        $post->post_image  = $fileNameToStore;
        $post->save();

        // redirect to post
        return redirect('/posts')->with('success', 'Post Successfully Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //find post
        $post =  Post::find($id);
         
        // return view
        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //find post
        $post =  Post::find($id);

        // check if correct user
        if(auth()->user()->id !== $post->user_id){

            return redirect('/posts')->with('error', 'Unauthorised Page');
        }
         
        // return edit
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //validate the data
        $this->validate($request, array(

            'title' => 'required',
            'body'  => 'required',
            'post_image' => 'image|nullable|max:1999'
        ));

        // handle post image
        if($request->hasFile('post_image')){

            $fileNameWithExt = $request->file('post_image')->getClientOriginalName();

            // get file name
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);

            // get file extension
            $fileextension = $request->file('post_image')->getClientOriginalExtension();

            // file name to stor
            $fileNameToStore = $filename."_".time().".".$fileextension;

            // upload file to system
            $path = $request->file('post_image')->storeAs('public/post-images', $fileNameToStore);

        }

        //create post
        $post        =  Post::find($id);
        $post->title = $request->input('title');
        $post->body  = $request->input('body');

        if($request->hasFile('post_image')){

            $post->post_image  = $fileNameToStore;
        }
        
        $post->save();

        // redirect to post
        return redirect('/posts')->with('success', 'Post Successfully Edited!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete post
        $post        =  Post::find($id);

        // check if correct user
        if(auth()->user()->id !== $post->user_id){

            return redirect('/posts')->with('error', 'Unauthorised Page');
        }

        // check image if not defualt
        if($post->post_image != 'noimage.jpg'){

            Storage::delete('public/post-images/'.$post->post_image);
        }

        $post->delete();

        // redirect to post
        return redirect('/posts')->with('success', 'Post Successfully Deleted!');
    }
}
