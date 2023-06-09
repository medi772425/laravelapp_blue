<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    // NOTE メソッドインジェクションという機能で、Request, Responseクラスのインスタンスが引数に渡される
    // NOTE web.php にパラメータを書いてない
    //     public function index(Request $request, Response $response)
    //     {
    //         $html = <<<EOF
    // <html>
    // <head>
    // <title>Hello/Index</title>
    // <style>
    // body {font-size:16pt; color:#999; }
    // h1 { font-size:120pt; text-align:right; color:#fafafa;
    //   margin:-50px 0px -120px 0px; }
    // </style>
    // </head>
    // <body>
    //   <h1>Hello</h1>
    //   <h3>Request</h3>
    //   <pre>{$request}</pre>
    //   <h3>Response</h3>
    //   <pre>{$response}</pre>
    // </body>
    // </html>
    // EOF;∂
    //         $response->setContent($html);
    //         return $response;
    //     }

    // public function index()
    // {
    //     return view('hello.index', ['message' => 'Hello!']);
    // }

    // NOTE middlewareを使うことにより、$reauestが取得できる.HelloMiddleware でセットしたdataを使用できる。
    public function index(Request $request)
    {
        // return view('hello.index', ['data' => $request->data]);
        return view('hello.index');
    }
}
