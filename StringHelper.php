<?php

namespace php\helpers;

class StringHelper
{
    /**
     * @param string $string
     * @param string $encoding
     * @return string
     */
    public static function ucFirst($string, $encoding = 'UTF-8')
    {
        return mb_convert_case($string, MB_CASE_TITLE, $encoding);
    }

    /**
     * @param string $string
     * @param string $encoding
     * @return string
     */
    public static function toLowerCase($string, $encoding = 'UTF-8') {
        return mb_strtolower($string, $encoding);
    }

    /**
     * @param string $string
     * @param string $encoding
     * @return string
     */
    public static function toUpperCase($string, $encoding = 'UTF-8') {
        return mb_strtoupper($string, $encoding);
    }

    /**
     * @param string $string
     * @param int $start
     * @param int|null $length
     * @param string $encoding
     * @return string
     */
    public static function substr($string, $start, $length = null, $encoding = 'UTF-8') {
        return mb_substr($string, $start, $length, $encoding);
    }

    /**
     * @param string $string
     * @param string $substring
     * @param int $offset
     * @param string $encoding
     * @return false|int
     */
    public static function strpos($string, $substring, $offset = 0, $encoding = 'UTF-8') {
        return mb_strpos($string, $substring, $offset, $encoding);
    }
}