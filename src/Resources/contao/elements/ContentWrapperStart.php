<?php

/*
 * This file is part of Oveleon developer bundle.
 *
 * (c) https://www.oveleon.de/
 */

namespace Oveleon\ContaoDeveloperBundle;

/**
 * Front end content element "wrapper start".
 *
 * @author Fabian Ekert <fabian@oveleon.de>
 */
class ContentWrapperStart extends \ContentElement
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
		if (TL_MODE == 'BE')
		{
			$this->strTemplate = 'be_wildcard';
			$this->Template = new \BackendTemplate($this->strTemplate);
			$this->Template->title = 'Wrapper Start';
		}
	}
}
