<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserPoints;

class UserPointsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = UserPoints::latest()->paginate(10);
        return [
            "status" => 1,
            "data" => $blogs
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserPoints  $userpoints
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
//        return [
//            "id" =>$id
//        ];

       return [
           'status' => 1,
           'data' => UserPoints::findOrFail($id)
       ];
    }
}
