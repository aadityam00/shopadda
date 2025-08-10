<?php

function emailvaidat($email)
{
    return filter_var($email,FILTER_VALIDATE_EMAIL) != false;

}
function datetime(){
    return date("Y-m-d H:i:s");
}
?>