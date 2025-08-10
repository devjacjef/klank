<?php

namespace Src\Http;

class Request
{
    private string $uri;
    private string $method;
    private array $headers = [];
    private Stream $body;

    public function withHeader() {}

    public function getTargetUrl() {}

    public function getMethod() {}
}
