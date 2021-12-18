<?php
function counTing($a)
{
    switch (strlen($a)) {
        case 1:
            echo '0' . $a;
            break;
        default:
            echo $a;
            break;
    }
}