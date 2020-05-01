<?php

use Transprime\Configured\Configured;

if (! function_exists('configured')) {
    /**
     * New up a Configured
     *
     * @param $data
     * @return Configured
     */
    function configured($data) {
        return new Configured($data);
    }
}