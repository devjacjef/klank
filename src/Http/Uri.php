<?php

namespace Src\Http;

use Psr\Http\Message\UriInterface;


class Uri implements UriInterface
{

    public function getScheme(): string
    {
        return "";
    }

    public function getAuthority(): string
    {
        return "";
    }

    public function getUserInfo(): string
    {
        return "";
    }

    public function getHost(): string
    {
        return "";
    }

    public function getPort(): ?int
    {
        return 0;
    }

    public function getPath(): string
    {
        return "";
    }

    public function getQuery(): string
    {
        return "";
    }

    public function getFragment(): string
    {
        return "";
    }

    public function withScheme(string $scheme): UriInterface
    {
        return new Uri();
    }

    public function withUserInfo(string $user, ?string $password = null): UriInterface
    {
        return new Uri();
    }

    public function withHost(string $host): UriInterface
    {
        return new Uri();
    }

    public function withPort(?int $port): UriInterface
    {
        return new Uri();
    }

    public function withPath(string $path): UriInterface
    {
        return new Uri();
    }

    public function withQuery(string $query): UriInterface
    {
        return new Uri();
    }

    public function withFragment(string $fragment): UriInterface
    {
        return new Uri();
    }

    public function __toString(): string
    {
        return "";
    }
}
