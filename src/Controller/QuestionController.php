<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage()
    {
        return $this->render('questions/homepage.html.twig');
    }

    /**
     * @Route("/questions/{slug}", name="app_questions_show")
     *
     * @param [type] $slug
     * @return void
     */
    public function show($slug, MarkdownParserInterface $markdownParser)
    {
        $answers = [
            'Make sure your cat is sitting `purrrfectly` still 🤣',
            'Honestly, I like furry shoes better than MY cat',
            'Maybe... try saying the spell backwards?',
        ];

        $questionText = "I've been turned into a cat, any thoughts on how to turn back? While I'm **adorable**, I don't really care for cat food.";
        $parsedQuestionText = $markdownParser->transformMarkdown($questionText);

        return $this->render('questions/show.html.twig', [
            'question' => ucwords(str_replace('-', ' ', $slug)),
            'answers' => $answers,
            'questionText' => $parsedQuestionText
        ]);
    }
}
