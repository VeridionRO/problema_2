<?php

namespace collections;

class Photos extends Collection {
    
    /**
     * @return array Array of Type Item
     * @param string $type
     * @param int $id
     */
    public function getByTypeAndId($type, $id) {
        // aici se va face un query in database care va lua pozele 
    }
}
