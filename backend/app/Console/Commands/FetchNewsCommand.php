<?php

namespace App\Console\Commands;

use App\NewsFeed\NewYorkTimesNewsApiFeeder;
use App\NewsFeed\NewsApiFeeder;
use App\NewsFeed\TheGuardianNewsApiFeeder;
use Illuminate\Console\Command;
use App\Services\NewsService;
use App\Repositories\NewsRepository;
use App\ApiClient\ApiClient;

class FetchNewsCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'news:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch news from given sources and store in local database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $newsRepository = new NewsRepository();
        $apiClient = new ApiClient();
        $newsService = new NewsService($newsRepository, $apiClient);
        $sources = [
            'news api'          => NewsApiFeeder::class,
            'the guardian'      => TheGuardianNewsApiFeeder::class,
            'new york times'    => NewYorkTimesNewsApiFeeder::class,
        ];
        foreach($sources as $source => $feeder){
            $this->info("Fetching data from ${source} and saving to local database");
            $fetchCommand = $feeder::init($newsService)->fetch();
        }
        $this->info("Done");
    }
}
