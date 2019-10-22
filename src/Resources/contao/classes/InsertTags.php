<?php

/*
 * This file is part of Oveleon developer bundle.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoDeveloperBundle;

/**
 * Replace insert tag "get" with a get parameter
 *
 * @param string  $strTag
 *
 * @return string
 */
class InsertTags extends \Frontend
{
    public function replaceGetInsertTags($strTag)
    {
        $arrSplit = explode('::', $strTag);

        if ($arrSplit[0] != 'get')
        {
            return false;
        }

        if (isset($arrSplit[1]))
        {
            return \Input::get($arrSplit[1]);
        }
    }
}