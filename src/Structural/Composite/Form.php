<?php

namespace DesignPatterns\Structural\Composite;

class Form implements Renderable
{
    /**
     * @var Renderable[]
     */
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';

        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }

        return $formCode.'</form>';
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}
