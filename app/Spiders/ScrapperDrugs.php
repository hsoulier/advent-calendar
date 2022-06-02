<?php

namespace App\Spiders;

use Generator;
use RoachPHP\Downloader\Middleware\RequestDeduplicationMiddleware;
use RoachPHP\Extensions\LoggerExtension;
use RoachPHP\Extensions\StatsCollectorExtension;
use RoachPHP\Http\Response;
use RoachPHP\Spider\BasicSpider;
use RoachPHP\Spider\ParseResult;

class ScrapperDrugs extends BasicSpider {
    public array $startUrls = [
        "https://sante.journaldesfemmes.fr/quotidien/2698935-drogue-douce-dure-liste-noms-effets-secondaires-dependance/#drogue-dure-definition"
    ];

    public array $downloaderMiddleware = [
        RequestDeduplicationMiddleware::class,
    ];

    public array $spiderMiddleware = [
        //
    ];

    public array $itemProcessors = [
        //
    ];

    public array $extensions = [
        LoggerExtension::class,
        StatsCollectorExtension::class,
    ];

    public int $concurrency = 2;

    public int $requestDelay = 1;

    /**
     * @return Generator<ParseResult>
     */
    public function parse(Response $response): Generator {
        // $title = $response->filter('h1')->text();

        $title = $response
            ->filter('#liste-drogues')
            ->text();

        echo $title;

        yield $this->item([
            'title' => $title,
        ]);
    }
}
