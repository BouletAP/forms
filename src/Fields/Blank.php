<?php namespace BouletAP\Forms\Fields;


class Blank extends \BouletAP\Forms\AbstractField {
    
    public function __construct($name = '', $attributes = array()) {
        parent::__construct($name, $attributes);
    }
    
    public function display() {        
        return "";
    }
}
