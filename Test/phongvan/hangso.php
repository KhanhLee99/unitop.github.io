<?php
//Hằng: Hằng số có thể truy cập bất cứ ở đâu mà không giới hạn phạm vị như biến
//C1: define
define("FIRSTWEEKDAY", 'MONDAY');
echo FIRSTWEEKDAY;         //Lấy hằng số bằng cách chỉ ra tên
echo "\n";
$firstweek = 'FIRSTWEEKDAY';
echo $firstweek; //FIRSTWEEKDAY
echo constant($firstweek), PHP_EOL; // Lấy hằng số có tên lưu trong biến $firstweek

//C2: const
const MONDAY = "THỨ HAI"; //neu dinh nghia them const MONDAY hoac define('MONDAY', 'kahsk') se loi
echo MONDAY, PHP_EOL;
const DAYOFWEEK = [
    'CHỦ NHẬT', 'THỨ HAI', 'THỨ BA', 'THỨ TƯ', 'THỨ NĂM', 'THỨ SAU', 'THỨ BẢY',
];
echo DAYOFWEEK[6]."\n"; //THỨ BẢY
//Các hằng số đặc biệt (Magic Constant) trong PHP
echo __LINE__."\n"; //Dòng hiện tại của php file.
echo __FILE__."\n"; //Tên file đầy đủ của script đang thi hành.
echo __DIR__."\n"; //Tên thư mục đầy đủ của file PHP
echo __FUNCTION__."\n"; //Lấy tên của hàm đang chạy
echo __CLASS__."\n"; //Tên của lớp đang chạy
echo __METHOD__."\n"; //	Lấy tên mothod của lớp
echo __NAMESPACE__."\n"; //Lấy tên namspace

//Các hằng số định nghĩa trước trong PHP
$allConst = get_defined_constants(true);
print_r($allConst);