<?php
class RGB
{
    private $color; //#ff0000
    private $red;
    private $green;
    private $blue;
    public function __construct($colorCode = '')
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    public function getColor()
    {
        return $this->color; //ff0000
       // echo $this->color; //ff0000
    }
    public function getRGBColor()
    {
        return array($this->red, $this->green, $this->blue);  // 0==255 1==0 2==0
    }
    public function readRGBColor()
    {
        echo "Red = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}";
    }
    public function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }
    private function parseColor()
    {
        if ($this->color) {
            list($this->red, $this->green, $this->blue) = sscanf($this->color, '%02x%02x%02x');
        } else {
            list($this->red, $this->green, $this->blue) = array(0, 0, 0);
        }
    }
    public function getRed()
    {
        return $this->red;
    }
    public function getGreen()
    {
        return $this->green;
    }
    public function getBlue()
    {
        return $this->blue;
    }
}
$myColor = new RGB("#ff0000");
//$myColor->setColor("#f2f1f0");
echo $myColor->getColor();
echo $myColor->readRGBColor();


