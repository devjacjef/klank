<?php

namespace Src\Http;

// TODO: Handle Pagination
// TODO: Handle Rate Limits

class Response {
    // NOTE: These are just going to store the result.
    private $status;
    private $statusText  = [];
    private $rateLimit;
    private $errors = [];

    public function __construct() {
        
    }

    public function json() {}

    public function isJson() {}

    public function xml() {}

    public function isXml() {}
}
