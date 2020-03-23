<?php
function get_paging($num_page, $page, $base_url = "")
{
    $str_paging = "<ul class=\"paging\">";
    if($page > 1){
        $page_prev = $page - 1;
        $str_paging .= "<li><a href='{$base_url}&page={$page_prev}'>Trước</a></li>";
    }
    for ($i = 1; $i <= $num_page; $i++) {
        $active = "";
        if($page == $i){
            $active = "class='active'";
        }
        $str_paging .= "<li {$active}><a href='{$base_url}&page={$i}'>{$i}</a></li>";
    }
    if($page < $num_page){
        $page_next = $page + 1;
        $str_paging .= "<li><a href='{$base_url}&page={$page_next}'>Sau</a></li>";
    }
    $str_paging .= "</ul>";
    return $str_paging;
}
?>
<!-- <ul class="paging">
    <li><a href="">Trước</a></li>
    <li class="active"><a href="?mod=users&act=main&page=1">1</a></li>
    <li><a href='?mod=users&act=main&page=2'>2</a></li>
    <li><a href="?mod=users&act=main&page=3">3</a></li>
    <li><a href="?mod=users&act=main&page=4">4</a></li>
    <li><a href="?mod=users&act=main&page=5">Sau</a></li>
</ul> -->