<?php

namespace Donuts;

use Silex\Application;
use \Rtorrent\Client as RtorrentClient;

class Torrent
{
    function getTorrents(Application $app) {
        $client = new RtorrentClient($app["donuts.rpc_address"]);
        return $app->json($client->getAll());
    }
}
