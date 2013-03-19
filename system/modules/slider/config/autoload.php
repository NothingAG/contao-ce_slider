<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2013 Leo Feyer
 * 
 * @package Comments
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

/**
 * ContentSlider
 *
 * @copyright  Nothing interactive 2013  <https://www.nothing.ch/>
 * @author     Patrick Fiaux <nodz@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Elements
	'Contao\ContentSlider'     => 'system/modules/slider/elements/ContentSlider.php',

));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'ce_slider'      => 'system/modules/slider/templates',
	'gallery_slider'      => 'system/modules/slider/templates',
));
