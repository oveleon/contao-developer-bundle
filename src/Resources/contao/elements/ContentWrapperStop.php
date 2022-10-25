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
 * Front end content element "wrapper stop".
 *
 * @author Fabian Ekert <fabian@oveleon.de>
 */
class ContentWrapperStop extends ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_wrapperStop';

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
        }
	}
}
