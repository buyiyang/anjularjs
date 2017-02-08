
<?php 
// $a=array('Name'=>'Bill','Age'=>'60','Country'=>'USA');
// print_r(json_encode($a));
  $cars=array("Name" => "菜鸟教程",
"Url" => "www.runoob.com",
"Country" => "CN");

$fruits = array ( "sites" => array($cars,$cars,$cars));

print_r(json_encode($fruits));

// {
//     "sites": [
//         {
//             "Name": "菜鸟教程",
//             "Url": "www.runoob.com",
//             "Country": "CN"
//         },
//         {
//             "Name": "Google",
//             "Url": "www.google.com",
//             "Country": "USA"
//         },
//         {
//             "Name": "Facebook",
//             "Url": "www.facebook.com",
//             "Country": "USA"
//         },
//         {
//             "Name": "微博",
//             "Url": "www.weibo.com",
//             "Country": "CN"
//         }
//     ]
// }



