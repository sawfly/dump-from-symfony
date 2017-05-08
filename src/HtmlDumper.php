<?php

namespace Sawfly\YiiDump;

use Symfony\Component\VarDumper\Dumper\HtmlDumper as SymfonyHtmlDumper;

class HtmlDumper extends SymfonyHtmlDumper
{
    /**
     * Colour definitions for output.
     *
     * @var array
     */
    protected $styles = [
        'default' => 'background-color:#ddd; color:#111; line-height:1.2em; font-weight:normal; font:12px Monaco, Consolas, monospace; word-wrap: break-word; white-space: pre-wrap; position:relative; z-index:100000',
        'num' => 'color:#1d3ad2',
        'const' => 'color:#fd0000',
        'str' => 'color:#2a377d',
        'cchr' => 'color:#111',
        'note' => 'color:#1d3ad2',
        'ref' => 'color:#6d6d6d',
        'public' => 'color:#fd0000',
        'protected' => 'color:#fd0000',
        'private' => 'color:#fd0000',
        'meta' => 'color:#5629d9',
        'key' => 'color:#2a377d',
        'index' => 'color:#1d3ad2',
    ];
}