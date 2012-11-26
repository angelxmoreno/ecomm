<?php

App::uses('EcommAppModel', 'Ecomm.Model');

/**
 * ProductCategory Model
 *
 * @property ProductCategory $ParentProductCategory
 * @property ProductCategory $ChildProductCategory
 * @property Product $Product
 */
class ProductCategory extends EcommAppModel {
    public $actsAs = array('Tree');
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
     * belongsTo associations
     *
     * @var array
     */
    public $_belongsTo_ = array(
        'ParentProductCategory' => array(
            'className' => 'Ecomm.ProductCategory',
            'foreignKey' => 'parent_id',
            'conditions' => '',
            'fields' => '',
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $_hasMany_ = array(
        'ChildCategory' => array(
            'className' => 'Ecomm.ProductCategory',
            'foreignKey' => 'parent_id',
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
        'Product' => array(
            'className' => 'Ecomm.Product',
            'joinTable' => 'products_product_categories',
            'foreignKey' => 'product_category_id',
            'associationForeignKey' => 'product_id',
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
