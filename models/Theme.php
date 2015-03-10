<?php

namespace models;

use collections\Fonts;

class Theme extends Item {

    private $fonts = null;
    
    public function getFonts() {
        
        if ($this->fonts === null) {
            //
            $fonts = new Fonts();
            $this->fonts = $fonts->getByThemeId($this->getId());
        }

        return $this->fonts;
    }

    public function setFonts($fonts) {
        $this->fonts = $fonts;
    }

}
