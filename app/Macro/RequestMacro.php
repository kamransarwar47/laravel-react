<?php

namespace App\Macro;

class RequestMacro
{
    public function username()
    {
        return function () {
            return $this->username ?? "Default";
        };
    }
}
