<?php

declare(strict_types=1);

use OwenVoke\Chow\Chow;

require __DIR__.'/../vendor/autoload.php';

echo (new Chow())->bark();
