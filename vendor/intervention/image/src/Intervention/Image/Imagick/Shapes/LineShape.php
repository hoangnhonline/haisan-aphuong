<?php

namespace Intervention\Image\Imagick\Shapes;

use Intervention\Image\Image;
use Intervention\Image\Imagick\Color;

class LineShape extends \Intervention\Image\AbstractShape
{
    /**
     * Starting point x-coordinate of line
     *
     * @var integer
     */
    public $x = 0;

    /**
     * Starting point y-coordinate of line
     *
     * @var integer
     */
    public $y = 0;

    /**
     * Color of line
     *
     * @var string
     */
    public $color = '#FFF';

    /**
     * Width of line in pixels
     *
     * @var integer
     */
    public $width = 1;

    /**
     * Create new line shape instance
     *
     * @param integer $x
     * @param integer $y
     */
    public function __construct($x = null, $y = null)
    {
        $this->x = is_numeric($x) ? intval($x) : $this->x;
        $this->y = is_numeric($y) ? intval($y) : $this->y;
    }

    /**
     * Set current line color
     *
     * @param  string $color
     * @return void
     */
    public function color($color)
    {
        $this->color = $color;
    }

    /**
     * Set current line width in pixels
     *
     * @param  integer $width
     * @return void
     */
    public function width($width)
    {
        $this->width = $width;
    }

    /**
     * Draw current instance of line to given endpoint on given image
     *
     * @param  Image   $image
     * @param  integer $x
     * @param  integer $y
     * @return boolean
     */
    public function applyToImage(Image $image, $x = 0, $y = 0)
    {
        $line = new \ImagickDraw;

        $color = new Color($this->color);
        $line->setStrokeColor($color->getPixel());
        $line->setStrokeWidth($this->width);

        $line->line($this->x, $this->y, $x, $y);
        $image->getCore()->drawImage($line);

        return true;
    }
}
