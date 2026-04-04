<?php
/**
 * Store functions in one central place.
 *
 * @author : Lahiru Jayakody
 * Project : PEO PHP CRUD
 */

/**
 * Dump and die() given param.
 *
 * @param $value
 * @return void
 */
function dd($value) {
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

/**
 * Return current url.
 *
 * @return mixed
 */
function currentUrl()
{
    return  $_SERVER['REQUEST_URI'];

}