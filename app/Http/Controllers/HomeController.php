<?php 
namespace App\Http\Controllers;

use Caremi\Http\Response;

class HomeController 
{
    public function index(): Response
    {
        $content = '<h1>Hello World</h1>';

        return new Response($content);
    }

    public function show(int $id): Response
    {
        $content = "This is post $id";

        return new Response($content);
    }
}