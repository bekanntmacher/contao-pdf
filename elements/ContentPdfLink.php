<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   Pdf
 * @author    Simon Wohler
 * @license   LGPL
 * @copyright bekanntmacher 2013 http://www.bekanntmacher.ch
 */

/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class ContentPdflink
 *
 * Front end content element "pdflink"
 */
class ContentPdfLink extends \ContentElement
{

	/**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_pdflink';


	/**
	 * Generate the content element
	 */
	protected function compile()
	{
		global $objPage;

        $request = $this->getIndexFreeRequest(true);

        $this->Template->href = $request . ((strpos($request, '?') !== false) ? '&amp;' : '?') . 'pdf=' . $this->pid;
        $this->Template->pdfTitle = specialchars($GLOBALS['TL_LANG']['MSC']['printAsPdf']);
	}
}
