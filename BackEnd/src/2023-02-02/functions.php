<?php
function flat($array, $prefix = '')
{
    $result = array();

    foreach ($array as $key => $value) {
        $new_key = $prefix . (empty($prefix) ? '' : '.') . $key;

        if (is_array($value)) {
            $result = array_merge($result, flat($value, $new_key));
        } else {
            $result[$new_key] =  $value;
        }
    }

    return $result;
}