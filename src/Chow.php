<?php

namespace OwenVoke\Chow;

class Chow
{
    /** @var array<int, string> $chow */
    private readonly array $chow;

    public function __construct()
    {
        $this->chow = $this->sniff()['chow'];
    }

    public function bark(): string
    {
        $chow = '<pre>';

        foreach ($this->chow as $bodyPart) {
            $chow .= $bodyPart . "\n";
        }

        $chow .= '</pre>';

        return $chow;
    }

    public function paw(): string
    {
        $chow = '';

        foreach ($this->chow as $bodyPart) {
            $chow .= $bodyPart . "\n";
        }

        return $chow;
    }

    public function sniff(): array
    {
        $tempChow = file_get_contents(__DIR__.'/../resources/chow.json');

        return json_decode($tempChow, true, 512, JSON_THROW_ON_ERROR);
    }
}
