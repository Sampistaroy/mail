<?php

class Cat_opt_presta extends AppModel {
    public $belongsTo = array(
        'Cat_opt' => array(
            'dependent' => true
            ),
        'Option' => array(
            'dependent' => true
            ),
        'Prestation' => array(
            'dependent' => true
            )
    );
    public $validate = array(
    'option_id' => array(
        'rule'    => array('isUnique', array('structure_id', 'option_id', 'prestation_id','cat_opt_id'), false),
        'message' => 'Cette combinaise Prestation option & categorie existe déjà.'
    )
);
}
