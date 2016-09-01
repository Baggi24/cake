<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CategoriesTable extends Table
{
    public function initialize(array $config)
    {
//        $this->addBehavior('Tree');
        $this->addBehavior('Timestamp');
        $this->hasMany('Posts', [
//            'foreignKey' => 'category_id',
            'dependent' => true
        ]);
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('title')
            ->notEmpty('title', __('You need to provide a title'))
            ->add('title', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'The title is not unique enough'
            ]);
        return $validator;
    }
}