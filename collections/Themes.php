<?php

namespace collections;

class Themes extends Collection {
    
    /**
     * Metoda care returneaza toate temele care contin in nume paramtrul name
     * @param string $name
     * @return array of type Theme
     */
    public function getWhereNameLike($name) {
        
    }
    
    /**
     * Metoda care returneaza toate temele care contin in package_name paramtrul name
     * @param string $name
     * @return array of type Theme
     */
    public function getByPackageName($name) {
        
    }
    
    /**
     * Metoda care returneaza toate temele care au launcher id-ul x
     * @param int $launcher_id
     * @return array of type Theme
     */
    public function getByLauncherId($launcher_id) {
        
    }
    
}