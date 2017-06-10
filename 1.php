<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VideoController extends Controller
{
    public function index()
    {
    	$files=glob(public_path().'/videos/*.*');
    	$src=[];
    	foreach ($files as $f) 
    	{
    		$s=substr($f,strrpos($f,'videos'));
    		$src[]=$s;
    	}
    	return view ('video.index',['files'=>$src]);
    }
    public function show(Request $request)
    {
    	$src=$request->vfile;
    	return view('video.show',['src'=>$src]);
    }
}
