<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package Core
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Contao;


/**
 * Class ContentSlider
 *
 * Front end content element "slider".
 *
 * @copyright  Nothing interactive 2013  <https://www.nothing.ch/>
 * @author     Patrick Fiaux <nodz@nothing.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 */
class ContentSlider extends \ContentGallery {

  /**
   * Template
   *
   * @var string
   */
  protected $strTemplate = 'ce_slider';



  /**
   * Return if there are no files
   * @return string
   */
  public function generate()
  {
    if (TL_MODE == 'BE') {
      // Load back end styles so images display inline.
      $GLOBALS['TL_CSS'][] = 'system/modules/slider/assets/slider_be.css';
    } else {
      // Only load slider for front end
      $GLOBALS['TL_JAVASCRIPT'][] = 'assets/responsiveslides/responsiveslides.min.js';
      $GLOBALS['TL_JAVASCRIPT'][] = 'system/modules/slider/assets/init_slider.js';
      $GLOBALS['TL_CSS'][] = 'assets/responsiveslides/responsiveslides.css';
    }

    return parent::generate();
  }

  /**
   * Make this display custom gallery
   */
  protected function compile() {

    // Use custom gallery
    $this->galleryTpl = 'gallery_slider';

    //TODO add things to handle config code section if valid json
    // Validate code to be at least valid json! shouldn't be able to do much harm if it's valid.
    if ($this->code != null and $this->code != '') {
      json_decode($this->code);

      // If it doesn't parse without errors it's shady, not loading it.
      if (json_last_error() == JSON_ERROR_NONE) {
        $this->Template->printCode = true;
      } else {
        $this->Template->printCode = false;
        //$this->Template->code = '';
      }
    }

    return parent::compile();
  }


}
