<?php

namespace Goteo\Util\Security;


class Input {
    
    public static function stripTags($input) {
        // Only clean valid types
        if (!is_array($input) && !is_string($input)) {
            return $input;
        }
        
        if (!is_array($input)) {
            return strip_tags($input);
        } else {
            // Pass by ref to change original array in-place
            foreach ($input as &$el) {
                $el = self::stripTags($el);
            }
            return $input;
        }  
    }
    
}