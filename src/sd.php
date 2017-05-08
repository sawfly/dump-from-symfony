<?php

require 'Dumper.php';
require 'HtmlDumper.php';

use Sawfly\YiiDump\Dumper;

if (!function_exists('sd')) {
    /**
     * Dump the passed variables and end the script.
     *
     * @param  mixed
     * @return void
     */
    function sd()
    {
        array_map(function ($x) {
            (new Dumper)->dump($x);
        }, func_get_args());

        die(1);
    }
}
