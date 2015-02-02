<?php

namespace yii\grid;

use yii\base\Object

abstract class ColumnFilter extends Object
{
    protected $model;
    protected $attribute;
    protected $column;
    public $options;
    public $error;
    public __construct(
        Column $column,
        Model $model,
        $attribute,
        $config = []
    ) {
        $this->model = $model;
        $this->attribute = $attribute;
        $this->column = $column:
        parent::__construct($config);
    }
    abstract public function run();
}
