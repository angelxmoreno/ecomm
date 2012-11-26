<?php

App::uses('EcommAppModel', 'Ecomm.Model');

/**
 * Product Model
 *
 * @property CartItem $CartItem
 * @property Order $Order
 * @property ProductCategory $ProductCategory
 */
class Product extends EcommAppModel {

    /**
     * Validation rules
     *
     * @var array
     */
    public $validate = array(
        'name' => array(
            'notempty' => array(
                'rule' => array('notempty'),
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
     * hasMany associations
     *
     * @var array
     */
    public $_hasMany_ = array(
        'CartItem' => array(
            'className' => 'CartItem',
            'foreignKey' => 'product_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

    /**
     * hasAndBelongsToMany associations
     *
     * @var array
     */
    public $hasAndBelongsToMany = array(
        'Order' => array(
            'className' => 'Ecomm.Order',
            'joinTable' => 'order_products',
            'foreignKey' => 'product_id',
            'associationForeignKey' => 'order_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        ),
        'ProductCategory' => array(
            'className' => 'Ecomm.ProductCategory',
            'joinTable' => 'products_product_categories',
            'foreignKey' => 'product_id',
            'associationForeignKey' => 'product_category_id',
            'unique' => 'keepExisting',
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'finderQuery' => '',
            'deleteQuery' => '',
            'insertQuery' => ''
        )
    );

}
