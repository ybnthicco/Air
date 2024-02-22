<?php function permalink($var)
{
    $var = preg_replace("#([\W_]+)#", " ", $var);
    $var = str_replace(" ", "-", $var);
    $var = strtolower($var);
    $var = rtrim($var, "-");
    return $var;
}
function cleartitle($var)
{
    $var = str_replace("-", " ", $var);
    return $var;
} ?>
