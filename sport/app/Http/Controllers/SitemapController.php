<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitemapController extends Controller
{
    public function index(Request $request)
    {
        $query = trim((string) $request->input('q', ''));

        $pages = [
            [
                'title' => 'Accueil',
                'description' => 'Découvre le point d’entrée du site et les trois parcours principaux.',
                'url' => route('home.index'),
            ],
            [
                'title' => 'Callisthénie',
                'description' => 'Travaille le contrôle du corps, la mobilité et la progression au poids du corps.',
                'url' => route('calisthenics.index'),
            ],
            [
                'title' => 'Musculation',
                'description' => 'Organise des séances claires pour gagner en force et en structure.',
                'url' => route('musculation.index'),
            ],
            [
                'title' => 'Nutrition',
                'description' => 'Adapte ton alimentation pour soutenir ton énergie et ta récupération.',
                'url' => route('diet.index'),
            ],
            [
                'title' => 'Accessibilité',
                'description' => 'Retrouve les engagements et les repères de navigation du site.',
                'url' => route('accessibilite.index'),
            ],
        ];

        if ($query !== '') {
            $pages = array_values(array_filter($pages, function (array $page) use ($query) {
                return str_contains(mb_strtolower($page['title'] . ' ' . $page['description']), mb_strtolower($query));
            }));
        }

        return view('sitemap.index', [
            'pages' => $pages,
            'query' => $query,
        ]);
    }
}
