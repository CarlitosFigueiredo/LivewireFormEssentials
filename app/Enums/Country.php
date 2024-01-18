<?php

namespace App\Enums;

enum Country: string
{
    case United_States = 'US';
    case Canada = 'CA';
    case Mexico = 'MX';
    case Brazil = 'BR';
    case Argentina = 'AR';
    case Germany = 'DE';
    case France = 'FR';
    case Italy = 'IT';
    case United_Kingdom = 'GB';

    public function label()
    {
        return (string) str($this->name)->replace('_', ' ');
    }
}