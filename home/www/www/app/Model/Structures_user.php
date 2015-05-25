<?php

class Structures_user extends AppModel {
    public $belongsTo = array(
        'Structure', 'User'
    );
}