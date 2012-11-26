<?php

App::uses('EcommAppModel', 'Ecomm.Model');

/**
 * CartItem Model
 *
 * @property Cart $Cart
 * @property Product $Product
 */
class CartItem extends EcommAppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'cart_id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'product_id' => array(
            'uuid' => array(
                'rule' => array('uuid'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
        'quantity' => array(
            'numeric' => array(
                'rule' => array('numeric'),
            //'message' => 'Your custom message here',
            //'allowEmpty' => false,
            //'required' => false,
            //'last' => false, // Stop validation after this rule
            //'on' => 'create', // Limit validation to 'create' or 'update' operations
            ),
        ),
    );

    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Cart' => array(
            'className' => 'Ecomm.Cart',
            'foreignKey' => 'cart_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        ),
        'Product' => array(
            'className' => 'Ecomm.Product',
            'foreignKey' => 'product_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

}
