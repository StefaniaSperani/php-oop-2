<?php

function multiplication($int)
{
    if (!is_int($int)) {
        throw new Exception('Non è un numero!!');
    }
    return $int * 10;
}

?>