<?php

class Cat_opt extends AppModel {
    public $hasMany = array(
        'Cat_opt_presta' => array(
            'className' => 'Cat_opt_presta',
            'foreignKey' => 'cat_opt_id'
        )
    );
}
