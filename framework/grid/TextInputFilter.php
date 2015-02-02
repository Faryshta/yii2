<?php

namespace yii\grid;

use yii\helpers\Html;

class TextInputFilter extends ColumnFilter
{
    public function run()
    {
        return Html::activeTextInput(
            $this->model,
            $this->attribute,
            $this->options
        ) . $this->error;
    }
}
