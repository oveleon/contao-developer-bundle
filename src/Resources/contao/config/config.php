<?php

/*
 * This file is part of Oveleon DeveloperBundle.
 *
 * (c) https://www.oveleon.de/
 */

array_insert($GLOBALS['TL_CTE'], 1, array
(
    'wrapper' => array
    (
        'wrapperStart' => '\\Oveleon\\ContaoDeveloperBundle\\ContentWrapperStart',
        'wrapperStop'  => '\\Oveleon\\ContaoDeveloperBundle\\ContentWrapperStop'
    )
));

$GLOBALS['TL_WRAPPERS']['start'][] = 'wrapperStart';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'wrapperStop';