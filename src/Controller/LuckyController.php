<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number(): Response
    {
        $intNumber = random_int(0, 100);
        return new Response('<html><body>LuckyNumber: ' . $intNumber . '</body></html>');
    }
}
