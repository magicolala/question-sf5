<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('My first page');
    }

    /**
     * @Route("/question/{slug}")
     *
     * @param [type] $slug
     * @return void
     */
    public function show($slug)
    {
        return new Response('Future page to show a question');
    }
}
