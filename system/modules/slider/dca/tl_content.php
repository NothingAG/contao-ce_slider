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
 * Add palette to tl_content
 */
$GLOBALS['TL_DCA']['tl_content']['palettes']['slider'] = '{type_legend},type,headline;{source_legend},multiSRC,sortBy;{protected_legend:hide},protected;{expert_legend:hide},code,guests,cssID,space;{invisible_legend:hide},invisible,start,stop';

// Make code field optional
$GLOBALS['TL_DCA']['tl_content']['fields']['code'] = array
(
  'label'                   => &$GLOBALS['TL_LANG']['tl_content']['code'],
  'exclude'                 => true,
  'search'                  => true,
  'inputType'               => 'textarea',
  'eval'                    => array('mandatory'=>false, 'preserveTags'=>true, 'decodeEntities'=>true, 'class'=>'monospace', 'rte'=>'codeMirror', 'helpwizard'=>true, 'tl_class'=>'clr'),
  'explanation'             => 'insertTags',
  'sql'                     => "text NULL"
);