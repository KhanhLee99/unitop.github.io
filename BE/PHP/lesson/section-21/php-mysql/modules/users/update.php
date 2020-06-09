
<?php
get_header();
?>
<?php
 $id= (int) $_GET['id'];
?>
<?php
if(isset($_POST['btn_update'])){
    $error = array();
    $alert = array();
    //fullname
    if(empty($_POST['fullname'])){
        $error['fullname'] = "Không được để trống fullname";
    }
    else{
        $fullname = $_POST['fullname'];
    }

    //Kết luận
    if(empty($error)){
    $sql = "UPDATE `tbl_user` SET fullname = '{$fullname}' WHERE `user_id` = $id";
        if(mysqli_query($conn,$sql)){
            $alert['success'] =  "Đã cập nhật dữ liệu thành công";
        }
        else{
            echo "Lỗi: ".mysqli_error($conn);
        }
    }
}
$sql = "SELECT * FROM `tbl_user` WHERE `user_id` = {$id}";
$result = mysqli_query($conn,$sql);
$item = mysqli_fetch_assoc($result);
show_array($item);
?>
<style>
.register{
    width: 330px;
    padding: 0 70px;
    background: #202123;
    margin: 3px auto;
    border-radius: 2px; 
}
input.fullname, input.username, input.password, input.email{
    width: 100%;
    padding-bottom: 9px;
    border: none;
    background: #202123;
    border-bottom: 5px solid white;
    margin-bottom: 22px;
    font-size: 14px;
    color: white;
    padding-left: 13px;
}
input.button{
    width: 100%;
    padding: 11px 0;
    font-size: 16px;
    background: #3970B0;
    color: white;
    border:none;
    border-radius: 3px;
    margin-bottom: 45px;
}
h1{
    color: white;
    font-size: 59px;
    padding: 14px 0;
    font-weight: 500;
}
</style>
<div class="content">
    <div class="register">
        <h1>Cập nhật</h1>
        <?php if(!empty($alert)) echo "<p style='color: #9CDCFE; padding-bottom: 10px;'>{$alert['success']}</p>" ?>
        <form action="" method="POST">
            <!-- <label for="fullname">Họ tên</label> -->
            <input type="text" name="fullname" class="fullname" id="fullname" value="<?php if(!empty($item['fullname'])){echo $item['fullname'];} ?>" placeholder="Fullname">
            <p style="color: red; margin-bottom: 18px;"><?php if(isset($_POST['btn_update'])){echo check_empty('fullname');} ?></p>
                        
            <input type="submit" name="btn_update" class="button" value="Cập nhật">
        </form>
     </div> <!--het register -->
</div> <!--het content -->
<?php
get_footer();
?>