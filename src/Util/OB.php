<?php

class PHPUnit_Util_OB
{
    static $iow_ob_contents_buffer = [];
    static $iow_ob_level = 0;

    public static function my_ob_get_contents()
    {
        if (isset(self::$iow_ob_contents_buffer[self::$iow_ob_level]))
        {
            return self::$iow_ob_contents_buffer[self::$iow_ob_level];
        }
        else
        {
            return '';
        }
    }
    public static function my_ob_start()
    {
        self::$iow_ob_level++;
        self::$iow_ob_contents_buffer[self::$iow_ob_level] = '';
    }
    public static function my_ob_get_level()
    {
        return self::$iow_ob_level;
    }
    public static function my_ob_end_clean()
    {
        self::$iow_ob_contents_buffer[self::$iow_ob_level] = '';
        self::$iow_ob_level--;
    }
    public static function my_print($contents)
    {
        print($contents);
        // self::$iow_ob_contents_buffer[self::$iow_ob_level] .= $contents;
    }
    public static function my_flush()
    {
        print(self::$iow_ob_contents_buffer[self::$iow_ob_level]);
        self::$iow_ob_contents_buffer[self::$iow_ob_level] = '';
        self::$iow_ob_level--;
    }
}
