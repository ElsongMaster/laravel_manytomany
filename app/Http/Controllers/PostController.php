<?php

namespace App\Http\Controllers;

use App\Mail\Postmail;
use App\Models\Post;
use App\Models\PostTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $rq)
    {

        $post = new Post;

        $post->nom = $rq->nom; 
        $post->email = $rq->email; 
        $post->commentaire = $rq->commentaire;
        $post->save();
        $post_tag = new PostTag;
        $post_tag->post_id = $post->id;
        $post_tag->tag_id = $rq->tag_id;
        $post_tag->save();
        $dataPost = [
            "nom"=>$rq->nom,
            "email"=>$rq->email,
        ];

        
        Mail::to("dushimeelvis@gmail.com")->send(new Postmail($dataPost));
        return redirect()->back()->with('message','Votre post à bien été envoyé');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
