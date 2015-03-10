<?php

namespace models;

use collections\Developers;

class App extends Item {
    
    private $developers = null;
    
    public function getDevelopers() {
        
        if ($this->developers === null) {
            //
            $developers = new Developers();
            $this->developers = $developers->getByAppId($this->getId());
        }

        return $this->developers;
    }

    public function setDevelopers($developers) {
        $this->developers = $developers;
    }
    
}