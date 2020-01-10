<?php

namespace CodeBot;

use GuzzleHttp\Client;

class CallSendApi
{
    const URL = 'https://graph.facebook.com/v5.0/me/messenger_profile?access_token=EAAGYtfIpM0YBALzjCehuZCIZAFfALzopI9s52vHSX3nQp4qLq1AAd4LFVaF0MltMQA0J7zL1Wtgn2k3oMeTMcb9Qlb7ZAbCdnKPkVA9gsNoq5BbWpa6WWFgb0vZBAfXLAXuFuXM76QsvUWBs2SudZCA7LBD5mJhMjuNBG7I7D9gZDZD';
    private $pageAccessToken;

    public function __construct(string $pageAccessToken)
    {
        $this->pageAccessToken = $pageAccessToken;
    }

    public function make(array $message, string $url = null, $method = 'POST') :string
    {
        $client = new Client;
        $url = $url ?? CallSendApi::URL;

        $response = $client->request($method, $url, [
            'json' => $method,
            'query' => ['access_token' => $this->pageAccessToken]
        ]);

        return (string)$response->getBody();
    }
}