<?php

use Contao\ArrayUtil;

/*
 * This file is part of Oveleon DeveloperBundle.
 *
 * (c) https://www.oveleon.de/
 */

ArrayUtil::arrayInsert($GLOBALS['TL_CTE'], 1, [
    'wrapper' => [
        'wrapperStart' => '\\Oveleon\\ContaoDeveloperBundle\\ContentWrapperStart',
        'wrapperStop'  => '\\Oveleon\\ContaoDeveloperBundle\\ContentWrapperStop'
    ]
]);

$GLOBALS['TL_WRAPPERS']['start'][] = 'wrapperStart';
$GLOBALS['TL_WRAPPERS']['stop'][]  = 'wrapperStop';

$GLOBALS['TL_HOOKS']['replaceInsertTags'][] = ['Oveleon\ContaoDeveloperBundle\InsertTags', 'replaceGetInsertTags'];
