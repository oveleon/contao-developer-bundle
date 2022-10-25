<?php

/*
 * This file is part of Oveleon developer bundle.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoDeveloperBundle;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\System;

/**
 * Front end content element "wrapper start".
 *
 * @author Fabian Ekert <fabian@oveleon.de>
 */
class ContentWrapperStart extends ContentElement
{
	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_wrapperStart';

	/**
	 * Generate the content element
	 */
	protected function compile()
	{
        $request = System::getContainer()->get('request_stack')->getCurrentRequest();

        if ($request && System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest($request))
        {
            $this->strTemplate = 'be_wildcard';

            $this->Template = new BackendTemplate($this->strTemplate);
            $this->Template->title = ($this->cssID[0] != '' ? '#'.$this->cssID[0].': ' : '') . ($this->cssID[1] != '' ? '.'.str_replace(' ', ' .', $this->cssID[1]) : '');
        }
	}
}
