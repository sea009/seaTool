<?php


namespace Tool;


class Tool
{


    public function test(){
        echo 'test';
        echo 'test api';
    }

    public static function imgToUrl($img, $isHttps = false)
    {
        if (empty($img)) {
            return '';
        }

        $img = str_replace('\\', '/', $img);
        if (false !== strpos($img, 'http://')) {
            if ($isHttps) {
                $img = str_replace('http:', 'https:', $img);
            }

            return $img;
        }

        if (false !== strpos($img, 'https://')) {
            if ($isHttps === false) {
                $img = str_replace('https:', 'http:', $img);
            }

            return $img;
        }

        $http = $isHttps ? 'https://' : 'http://';
        return $http . $_SERVER['HTTP_HOST'] . $img;
    }

}