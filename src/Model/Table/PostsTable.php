<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class PostsTable extends Table
{
    public function initialize(array $config)
    {
//        $this->displayField('body');
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator)
    {
        $validator
            ->requirePresence('title')
            ->notEmpty('title', __('You need to provide a title'))
            ->add('title', [
                'minLength' => [
                    'rule' => ['minLength', 5],
                    'message' => 'Titles need to be at least 5 characters long'
                ],
                'validFormat' => [
                    'rule' => 'email',
                    'message' => 'E-mail must be valid'
                ]

            ])
            ->add('title', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'The title is not unique enough'
            ]);

//            ->requirePresence('body')
//            ->notEmpty('body', __('You need to provide a body'));


        return $validator;
    }
}