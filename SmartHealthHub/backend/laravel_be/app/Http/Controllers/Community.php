<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PatientCommunity ;
use App\Models\PatientCommunityComment;

class Community extends Controller
{
    //
    public function patientIndex(){
        $posts =  PatientCommunity::where('type', 'patient')->get();
        for ($i=0; $i < count($posts); $i++) { 
            $comments = PatientCommunityComment::where('article', $posts[$i]->id)->get();
            $posts[$i]->comments = $comments;
        }

        return $posts;

    }
    public function healthProvider(){
        $posts =  PatientCommunity::where('type', 'healthProvider')->get();
        for ($i=0; $i < count($posts); $i++) { 
            $comments = PatientCommunityComment::where('article', $posts[$i]->id)->get();
            $posts[$i]->comments = $comments;
        }

        return $posts;

    }

    public function patientCreate(Request $request)
    {
        $community = new PatientCommunity;
        $community->title = $request->title;
        $community->content = $request->content;
        $community->author = $request->author;
        $community->type = $request->type;
        $community->timestamps = false;
        $community->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $community
        ]);
    }

    public function patientCreateComment(Request $request)
    {
        $comment = new PatientCommunityComment;
        $comment->article = $request->article;
        $comment->comment = $request->comment;
        $comment->author = $request->author;
        $comment->timestamps = false;
        $comment->save();

        return response()->json([
            'message' => 'Create Success',
            'data' => $comment
        ]);
    }
}
