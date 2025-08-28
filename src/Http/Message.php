<?php

namespace Src\Http;

use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

use Src\Http\Stream;

class Message implements MessageInterface {

    private $protocolVersion;
    private array $headers = [];
    private StreamInterface $body;

    public function getProtocolVersion(): string {
        return "";
    }

    public function withProtocolVersion(string $version): MessageInterface {
        return new Message();
    }

    public function getHeaders(): array {
        return [];
    }

    public function hasHeader(string $name): bool {
        return false;
    }

    public function getHeader(string $name): array {
        return [];
    }

    public function getHeaderLine(string $name): string {
        return "";
    }

    public function withHeader(string $name, $value): MessageInterface {
        return new Message();
    }

    public function withAddedHeader(string $name, $value): MessageInterface {
        return new Message();
    }

    public function withoutHeader(string $name): MessageInterface {
        return new Message();
    }

    public function getBody(): StreamInterface {
        return new Stream();
    }

    public function withBody(StreamInterface $body): MessageInterface {
        return new Message();
    }
}
