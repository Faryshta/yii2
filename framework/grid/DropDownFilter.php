<?php

namespace yii\grid;

use yii\helpers\Html;

class DropDownFilter extends ColumnFilter
{
    public $items = [];
    public function run()
    {
        return Html::activeDropDownList(
            $this->model,
            $this->attribute,
            $this->items,
            $this->options
        ) . $this->error;
    }
}
