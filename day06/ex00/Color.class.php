!/usr/bin/php
<?php
class Color
{
    public static $verbose = False;



    public $red = 0;
    public $green = 0;
    public $blue = 0;


    private $color_mix = array();


    private function to_hexacdemical($color_string)
    {
        $color = intval($color_string);

        $color = dechex($color);

        if (strlen($color_string) != 6)
        {
            $rgb = array(0,0,0);
        }
        for ($x = 0; $x < 3;$x++)
            $rgb[$x] = hexdec(substr($color_string,(2*$x),2));
        $i = 0;
        $rgb2['red'] = $rgb[0];
        $rgb2['green'] = $rgb[1];
        $rgb2['blue'] = $rgb[2];

        return $rgb2;
    }



    public function add ( $color) 
    {

        return (new Color( array( 'red' => $color->red + $this->red, 'green' => $color->green + $this->green, 'blue' => $color->blue + $this->blue )));
    }

    public function sub( $color)
    {
        return (new Color( array( 'red' => $this->red - $color->red, 'green' => $this->green - $color->green, 'blue' => $$this->blue - $color->blue)));
    }

    public function mult ($color)
    {
    
        return (new Color( array( 'red' => $color->red * $this->red, 'green' => $color->green * $this->green, 'blue' => $color->blue * $this->blue )));
    }

    public function __toString()
    {
        $color_str = 'Color( red: ' . sprintf("%3s", $this->red) .', green: ' . sprintf("%3s", $this->green) . ', blue: '. sprintf("%3s", $this->blue) .' )';
        return $color_str;
    }

    static function doc()
    {
        $str = file_get_contents('Color.doc.txt');
        return $str;    
    }

    public function __construct(array $input)
    {

        if (array_key_exists('rgb', $input))
        {
            $color_mix = $this->to_hexacdemical($input['rgb']);
            $this->green = $color_mix['green'];
            $this->red = $color_mix['red'];
            $this->blue = $color_mix['blue'];

        }
        else if (array_key_exists('red', $input) && array_key_exists('green', $input) && array_key_exists('blue', $input))
        {

            $this->red = intval($input['red']);
            $this->green = intval($input['green']);
            $this->blue = intval($input['blue']);
        }
        if ($this->red < 0)
            $this->red = 0;
        if ($this->green < 0)
            $this->green = 0;
        if ($this->blue < 0)
            $this->blue = 0;
        if ($this->red > 255)
            $this->red = 255;
        if ($this->green > 255)
            $this->green = 255;
        if ($this->blue > 255)
            $this->blue = 255;

        if (self::$verbose === True)
            {
            print('Color( red: '.sprintf("%3s",$this->red).', green: '.sprintf("%3s",$this->green).', blue: '.sprintf("%3s", $this->blue).' ) constructed.'.PHP_EOL);
            }

    }

    public function __destruct()
    {
            if (self::$verbose === True)
            {
                print('Color( red: '.sprintf("%3s", $this->red).', green: '.sprintf("%3s", $this->green).', blue: '.sprintf("%3s", $this->blue).' ) destructed.'.PHP_EOL);
            }
    }

}

?>