<?php

namespace I95dev\TestProxies\Model;

class SlowLoading
{
    public function __construct()
    {
        echo "Slowloading";
    }

    public function getValue()
    {
        return "Slowloading";
    }
}


