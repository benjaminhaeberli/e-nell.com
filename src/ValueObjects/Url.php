<?php

namespace BenjaminHaeberli\Portfolio\ValueObjects;

final class Url implements \Stringable
{
    final public function __construct(protected string $url)
    {
        $this->url = filter_var($url, FILTER_VALIDATE_URL) && curl_init($url) !== false ? $url : '';
    }

    public function __toString(): string
    {
        return $this->url;
    }
}
