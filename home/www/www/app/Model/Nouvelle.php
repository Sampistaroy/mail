<?php

class Nouvelle extends AppModel {
    public $belongsTo = array(
        'Structure', 'User'
    );
}
