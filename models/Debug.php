<?php
namespace Models;

class Debug
{
    public static function showWithDetails(...$args)
    {
        $info = $args;

        if (count($args) === 1) {
            $info = $args[0];
        }

        echo "<pre class='debug-info'>";
        var_dump($info);
        echo "</pre>";
    }
}
