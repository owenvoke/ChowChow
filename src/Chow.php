<?php

namespace pxgamer\Chow;

class Chow
{
    private $chow;

    public function __construct()
    {
        $this->chow = $this->sniff()->chow;
    }

    public function bark()
    {
        echo '<pre>';
        foreach ($this->chow as $bodyPart) {
            echo $bodyPart . "\n";
        }
        echo '</pre>';
        return true;
    }

    public function paw()
    {
        return $this->chow;
    }

    public function sniff()
    {
        $tempChow = file_get_contents('chow.json');
        $jsonChow = json_decode($tempChow);

        return $jsonChow;
    }
}