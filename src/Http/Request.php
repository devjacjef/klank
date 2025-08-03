<?php

namespace Src\Http;

class Request
{
    // These are going to store a built up request
    private $url;
    private $headers = [];
    private $body;

    public function __construct()
    {
        $this->url = $url;
        $this->headers = $headers;
        $this->body = $body;
    }
}
