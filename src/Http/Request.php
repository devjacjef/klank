<?php

namespace Src\Http;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\UriInterface;
use Psr\Http\Message\StreamInterface;

use Src\Http\Uri;
use Src\Http\Stream;

class Request implements RequestInterface
{
    private UriInterface $uri;

    public function getRequestTarget(): string
    {
        return "";
    }

    public function withRequestTarget(string $requestTarget): RequestInterface
    {
        return new Request();
    }

    public function getMethod(): string
    {
        return "";
    }

    public function withMethod(string $method): RequestInterface
    {
        return new Request();
    }

    public function getUri(): UriInterface
    {
        return new Uri();
    }

    public function withUri(UriInterface $uri, bool $preserveHost = false): RequestInterface
    {

        return new Request();
    }

    public function getProtocolVersion(): string
    {
        return "";
    }

    public function withProtocolVersion(string $version): RequestInterface
    {
        return new Request();
    }

    public function getHeaders(): array
    {
        return [];
    }

    public function hasHeader(string $name): bool
    {
        return false;
    }

    public function getHeader(string $name): array
    {
        return [];
    }

    public function getHeaderLine(string $name): string
    {
        return "";
    }

    public function withHeader(string $name, $value): RequestInterface
    {
        return new Request();
    }

    public function withAddedHeader(string $name, $value): RequestInterface
    {
        return new Request();
    }

    public function withoutHeader(string $name): RequestInterface
    {
        return new Request();
    }

    public function getBody(): StreamInterface
    {
        return new Stream();
    }

    public function withBody(StreamInterface $body): RequestInterface
    {
        return new Request();
    }
}
