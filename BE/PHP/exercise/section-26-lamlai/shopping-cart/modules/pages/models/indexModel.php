<?php

function get_page_by_id($id)
{
    $page = db_fetch_row("SELECT * FROM `tbl_pages` WHERE `id` = {$id}");
    return $page;
}
