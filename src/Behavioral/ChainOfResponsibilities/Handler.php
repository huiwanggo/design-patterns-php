<?php

namespace DesignPatterns\Behavioral\ChainOfResponsibilities;

use Psr\Http\Message\RequestInterface;

abstract class Handler
{
    private ?Handler $successor = null;

    public function __construct(?Handler $successor = null)
    {
        $this->successor = $successor;
    }

    public function handle(RequestInterface $request): ?string
    {
        $processed = $this->processing($request);
        if (null === $processed && null !== $this->successor) {
            return $this->successor->processing($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request): ?string;
}
