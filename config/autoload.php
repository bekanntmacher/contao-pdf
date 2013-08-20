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
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'Contao',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentPdfLink'          => 'system/modules/pdf/elements/ContentPdfLink.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_pdflink'        => 'system/modules/pdf/templates',
));
