<?php
namespace App\NewsFeed;

use App\Services\NewsService;

class NewYorkTimesNewsApiFeeder {
    protected $newsService;

    public function __construct(NewsService $newsService) {
        $this->newsService = $newsService;
    }

    public static function init(NewsService $newsService) {
        return new self($newsService);
    }

    public function fetch() {
        $newsServiceResponse = $this->newsService->getFromNyTimes();
    }
}