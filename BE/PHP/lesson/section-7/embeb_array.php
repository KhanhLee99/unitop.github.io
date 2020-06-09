<?php
$list_prime = array(2, 3, 5, 7);

$list_users = array(
    1 => array('id' => 1, 'fullname' => 'NVA', 'phone' => '123456'),
    2 => array('id' => 2, 'fullname' => 'NVB', 'phone' => '345678'),
    3 => array('id' => 3, 'fullname' => 'NVC', 'phone' => '987654')
);
?>

<html>
    <header>
        <title></title>
    </header>
</html>
<body>
    <table border="1">
        
       <?php
            if(!empty($list_users)){
                
       ?>
        <thead>
            <tr>
                <td width = "50" align = "center">STT</td>
                <td width = "50" align = "center">ID</td>
                <td width = "150" align = "center">Fullname</td>
                <td width = "150" align = "center">Phone</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0;
            foreach ($list_users as $key => $item) {
                $temp++;
                ?>
                <tr>
                    <td align = "center"><?php echo $key; ?></td>
                    <td align = "center"><?php echo $item['id']; ?></td>
                    <td align = "center"><?php echo $item['fullname']; ?></td>
                    <td align = "center"><?php echo $item['phone']; ?></td>
                </tr>

                <?php
            }
            ?>
        </tbody>
<?php
            }
            else{
?>
        <p>Ko co du lieu</p>
        <?php
            }
           
?>
    </table>

</body>

