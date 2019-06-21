<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\View;
class PhotoController extends Controller
{
    public function image($fileName){
        $path = public_path('/signature_img/') .  '/' .$fileName;
        return Response::download($path);
    }
}
