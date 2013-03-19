# CONTAO EXTENSION: SLIDER
A content element in Contao that allows quickly selecting several images and making a slidehow. It works similar to the Gallery content element
but is focussed on simplicity and is responsive.

## SETUP AND USAGE
### Prerequisites
 * Contao 3.0.x
 * [ResponsiveSlides.js](http://responsive-slides.viljamis.com/) v1.53+

### Installation
1. Download the [ResponsiveSlides.js](http://responsive-slides.viljamis.com/) package and place it in TL_ROOT/assets/responsiveslides (at least responsiveslides.min.js and responsiveslides.css)
2. Copy the _system_ folder into the root folder from Contao
3. Update the database (e.g. with the _Extension manager_)

### How to use
1. Add a content element
2. Select 'Slider' from the media section of the element type.
3. Under files and folders hit Change selection and pick your images.

To add a caption: edit the image meta data via the file manager:
1. Click the drive icon next to 'Source files'
2. Navigate to the image you want to edit
3. Hit edit and set the caption/title/...

### Advanced: Change settings
expert fields > code
You must enter VALID encoded json that PHP could decode, if it doesn't decode it's judged invalid and will not be loaded.

### Known Issues / To Dos
Make edit page display files as images like gallery.
* might need to override FileTree.php and update line 106 which checks for record type == gallery
* https://github.com/leofeyer/autoloader

Update/improve the validation to check the code against the responsive slide options API.
* check the keys
* check the types of variables per key (optional)

Settings don't work with multiple sliders on the same page,
* use a counter or something and make them not share the settings.
* also make sure the load code get included from here and not some random place.

## VERSION HISTORY

### 0.1.0 (2013-03-14)
* Initial release

## LICENSE
* Author:	  	Nothing Interactive, Switzerland
* Website: 		[https://www.nothing.ch/](https://www.nothing.ch/)
* Version: 		0.1.0
* Date: 		  2013-03-14
* License: 		[GNU Lesser General Public License (LGPL)](http://www.gnu.org/licenses/lgpl.html)
