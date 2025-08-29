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

    private function buildauthority($host = '') {
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

        $this->builduserinfo($parts['user'] ?? '', $parts['pass'] ?? null);

        if (isset($parts['host'])) {
            $this->host = $parts['host'];
        }

        if (isset($parts['port'])) {
            $this->port = $parts['port'];
        }

        $this->buildauthority($parts['host'] ?? '');

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
        return $this->scheme ?? '';
    }

    public function getAuthority(): string
    {
        return $this->authority ?? '';
    }

    public function getUserinfo(): string
    {
        return $this->userInfo ?? '';
    }

    public function getHost(): string
    {
        return $this->host ?? '';
    }

    public function getPort(): ?int
    {
        return $this->port ?? null;
    }

    public function getPath(): string
    {
        return $this->path ?? '';
    }

    public function getQuery(): string
    {
        return $this->query ?? '';
    }

    public function getFragment(): string
    {
        return $this->fragment ?? '';
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
