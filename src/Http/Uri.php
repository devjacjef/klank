<?php

namespace Src\Http;

use Psr\Http\Message\UriInterface;


class Uri implements UriInterface
{
    private $scheme;
    private $authority;
    private $userInfo;
    private $host;
    private $port;
    private $path;
    private $query;
    private $fragment;

    private function buildUserInfo($user = '', $pass = null) {
        $this->userInfo = $user;
        if (isset($pass) && $this->userInfo !== '') {
            $this->userInfo .= ':' . $pass;
        }
    }

    private function buildAuthority($host = '') {
        if ($host) {
            $this->authority = ($this->userInfo ? $this->userInfo . '@' : '') . $host;
            if ($this->port) {
                $this->authority .= ':' . $this->port;
            }
        }
    }

    public function __construct($uri)
    {
        $parts = parse_url($uri);

        if (isset($parts['scheme'])) {
            $this->scheme = $parts['scheme'];
        }

        $this->buildUserInfo($parts['user'] ?? '', $parts['pass'] ?? null);

        if (isset($parts['host'])) {
            $this->host = $parts['host'];
        }

        if (isset($parts['port'])) {
            $this->port = $parts['port'];
        }

        $this->buildAuthority($parts['host']);

        if (isset($parts['path'])) {
            $this->path = $parts['path'];
        }

        if (isset($parts['query'])) {
            $this->query = $parts['query'];
        }

        if (isset($parts['fragment'])) {
            $this->fragment = $parts['fragment'];
        }
    }

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
        $clone = clone $this;
        return $clone;
    }

    public function withUserInfo(string $user, ?string $password = null): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function withHost(string $host): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function withPort(?int $port): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function withPath(string $path): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function withQuery(string $query): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function withFragment(string $fragment): UriInterface
    {
        $clone = clone $this;
        return $clone;
    }

    public function __toString(): string
    {
        return "";
    }
}
