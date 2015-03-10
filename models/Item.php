<?php

namespace models;

use collections\Collection;
use collections\Photos;

abstract class Item {

    private $collection = null;
    private $photos = null;

    /**
     * @return Collection Obiect de tip collection
     */
    public function getCollection() {
        return $this->collection;
    }

    /**
     * @return int Primary Key Value from collection's table
     */
    public function getId() {
        
    }


    public function getPhotos() {
        
        if ($this->photos === null) {
            //
            $photos = new Photos();
            $this->photos = $photos->getByTypeAndId($this->getCollection()->getTableName(), $this->getId());
        }

        return $this->photos;
    }

    public function setPhotos($photos) {
        $this->photos = $photos;
    }

}
