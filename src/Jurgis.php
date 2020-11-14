<?php

namespace App;

class Jurgis
{
    public function responds(string $message): string
    {
        return $this->getResponse($message);
    }

    private function getResponse(string $message): string
    {
        if (strpos($message, '?') !== false) {
            $response = 'Okis.';
        } elseif (strpos($message, '!') !== false) {
            $response = 'Oi oi, atvėsk!';
        } elseif (!$message) {
            $response = 'Alio! Kuku?';
        } else {
            $response = 'Aha gerai.';
        }

        return $response;
    }
}
