<?php
function redirect_to($file)
{
    if (!empty($file))
        header("location: $file");
    else
        return false;
}
