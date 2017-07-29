<?php

namespace App\Adapter;

class YouTubeAdapter implements YoutubeAdapterInterface
{
    protected $client;

    public function __construct(Youtube $client)
    {
        $this->client = $client;
    }

    public function getViews($id)
    {
        return $this->client->getViewCount($id);
    }
}