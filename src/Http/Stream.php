<?php

namespace Src\Http;

use Psr\Http\Message\StreamInterface;

class Stream implements StreamInterface
{

    private $stream; // Should be a resource
    private $size;
    private $seekable;
    private $writeable;
    private $readable;

    public function __construct($stream) {

    }

    public function __destruct() {
        $this->close();
    }

    public function __toString(): string {
        return "";
    }

    public function close(): void {
        
    }

    public function detach() {
        
    }

    public function getSize(): ?int {
        return 0;
    }

    public function tell(): int {
        return 0;
    }

    public function eof(): bool {
        return false;
    }

    public function isSeekable(): bool {
        return false;
    }

    public function seek(int $offset, int $whence = SEEK_SET): void {
    
    }

    public function rewind(): void {
        
    }

    public function isWritable(): bool {
        return false;
    }

    public function write(string $string): int {
        return 0;
    }

    public function isReadable(): bool {
        return false;
    }

    public function read(int $length): string {
        return "";
    }

    public function getContents(): string {
        return "";
    }

    public function getMetadata(?string $key = null) {
        
    }

}
