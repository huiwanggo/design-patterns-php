<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    private array $data;

    public function __construct(array $data, ?Handler $successor = null)
    {
        $this->data = $data;

        parent::__construct($successor);
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ('GET' == $request->getMethod() && isset($this->data[$key])) {
            return $this->data[$key];
        }

        return null;
    }
}
