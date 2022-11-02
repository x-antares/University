<?php

namespace university\core\helpers;

class Helper {
    static function getUrl()
    {
        if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";
        // Append the host(domain name, ip) to the URL.
        $url .= $_SERVER['HTTP_HOST'];

        // Append the requested resource location to the URL
        $url .= $_SERVER['REQUEST_URI'];

        return $url;
    }
    static function getRequest()
    {
        $query = parse_url(Helper::getUrl(), PHP_URL_QUERY);
        parse_str($query, $params);
        return $params;
    }
    static function split_char($text) {
        return preg_split('/(?<!^)(?!$)/u', mb_strtolower(preg_replace( "/[^\p{L}]/u", "", $text )));
    }
    static function toMainPage() {
        header('Location: /', true, 303);
        die();
    }
    private function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}