<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Response;
use SimpleXMLElement;
use DOMDocument;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $xml = new SimpleXMLElement(
            '<?xml version="1.0" encoding="UTF-8"?>
            <urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>'
        );

        // الصفحة الرئيسية
        $home = $xml->addChild('url');
        $home->addChild('loc', url('/'));
        $home->addChild('changefreq', 'daily');
        $home->addChild('priority', '1.0');
        $home->addChild('lastmod', now()->toAtomString());

        // المقالات المنشورة
        $posts = Post::query()
            ->where('is_published', true)
            ->latest('updated_at')
            ->get();

        foreach ($posts as $post) {

            $url = $xml->addChild('url');

            // عدل اسم الروت لو مختلف عندك
            $url->addChild(
                'loc',
                route('posts.show', $post->slug)
            );

            $url->addChild(
                'lastmod',
                optional($post->updated_at)->toAtomString()
            );

            $url->addChild('changefreq', 'weekly');
            $url->addChild('priority', '0.8');
        }

        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->preserveWhiteSpace = false;
        $dom->formatOutput = true;
        $dom->loadXML($xml->asXML());

        return response(
            $dom->saveXML(),
            200,
            [
                'Content-Type' => 'application/xml',
            ]
        );
    }
}