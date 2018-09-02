<?php

namespace Goteo\Util\Security;


class Output {
    
    public static function encode($input) {
        // Strip whitespace chars (not including \s) 
        $input = preg_replace('/[\t\n\r]/', '', $input);
        // Now strip javascript protocol handler
        $input = str_ireplace('javascript:', '', $input);
        // Convert to entities (including all quotes)
        return htmlentities($input, ENT_QUOTES);
    }
    
}