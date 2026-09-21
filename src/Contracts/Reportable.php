<?php

namespace App\Contracts;

interface Reportable
{
    public function getSummary(): string;
}