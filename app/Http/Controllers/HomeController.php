<?php

namespace App\Http\Controllers;

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

use PDF;

class HomeController extends Controller
{

    public function index(){
        return view('rss.index');
    }

    public function parseRss(Request $request) {
        //https://www.yahoo.com/news/rss
        $data = $request->all();
        $request->validate([
            'url' => 'required|url',
        ]);

        if(isset($data['url'])){
          $content = file_get_contents($data['url']);
          $flux = new \SimpleXMLElement($content);


        $pdf = PDF::loadView('rss.rss', ['rss'=>$flux]);
        return $pdf->setPaper('a4', 'landscape')->download('rss.pdf');
        }
    }
}
