<?php
App::uses('BaseAuthorize', 'Controller/Component/Auth');

class SampAuthorize extends BaseAuthorize {
    public function authorize($user, CakeRequest $request) {
    	return false;
    }
}