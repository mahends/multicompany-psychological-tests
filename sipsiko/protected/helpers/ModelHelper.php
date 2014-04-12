<?php

class ModelHelper {

    public static function getListTestVariable($data) {
        $list = '';
        $sum = 0;
        foreach ($data as $row) {
            $sum += $row->value;
        }
        foreach ($data as $row) {
            $list .= CHtml::tag('li', array(), $row->variable->name . ' (' . round($row->value / $sum * 100, 2) . ')%');
        }
        return CHtml::tag('ul', array(), $list);
    }

    public static function getBooleanLabel($data) {
        if ($data) {
            return CHtml::tag('span', array('class' => 'label label-success'), 'Yes');
        } else {
            return CHtml::tag('span', array('class' => 'label label-danger'), 'No');
        }
    }

}

?>