<?php

class Option extends AppModel {
    public $hasMany = array(
        'Cat_opt_presta' => array(
            'className' => 'Cat_opt_presta',
            'foreignKey' => 'option_id'
        )
    );
}