<?php

namespace Donuts\Torrent;

use Silex\Application;
use \Rtorrent\Client as RtorrentClient;


function getTorrents(Application $app) {
    $client = new RtorrentClient($app["donuts.rpc_address"]);
    return $app->json($client->getAll());
}
