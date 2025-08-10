<?php

namespace Src\Http;

class Stream
{

    protected $resource;

    /**
     * @param int $length Amount of bytes to read.
     *
     * @return string|false Returns the string or false on failure.
     */
    public function read(int $length): string|false {
        return fread($this->resource, $length);
    }

    /**
     * @param string $data Data to be written.
     *
     * @return int Amout of bytes written.
     */
    public function write(string $data, int $length = null): int|false
    {
        if ($length === null) {
            return fwrite($this->resource, $data);
        }

        return fwrite($this->resource, $data, $length);
    }

    /**
     * TODO: Doc this
     */
    public function open(string $path, string $mode, int $options, ?string &$opened_path): bool
    {

        $this->resource = fopen($path, $mode, false, null);

        if (($options & STREAM_USE_PATH) && $this->resource !== false) {
            $opened_path = realpath($path) ?: $path;
        }

        return $this->resource !== false;
    }

    public function close() {}

    public function eof() {}
}
