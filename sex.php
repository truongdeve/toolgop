<?php
error_reporting(0);
session_start();

//color
date_default_timezone_set("Asia/Ho_Chi_Minh");
$end="\033[0m";
$black="\033[0;30m";
$blackb="\033[1;30m";
$white="\033[0;37m";
$whiteb="\033[1;37m";
$red="\033[0;31m";
$redb="\033[1;31m";
$green="\033[0;32m";
$greenb="\033[1;32m";
$yellow="\033[0;33m";
$yellowb="\033[1;33m";
$syan="\033[1;36m";
$blue="\033[0;34m";
$blueb="\033[1;34m";
$purple="\033[0;35m";
$purpleb="\033[1;35m";
$lightblue="\033[0;36m";
$lightblue="\033[1;35m";
$lightblueb="\033[1;36m";
$hong="\033[1;95m";
$input = array($d2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");
$rand_keys = array_rand($input, 10);
$input = array($tmd1="\033[1;46m",$tmd2="\033[1;36m",$tmd3="\033[1;37m",$tmd4="\033[1;37m",$tmd5="\033[0;31m",$tmd6="\033[1;31m",$tmd7="\033[0;32m",$tmd8="\033[1;32m",$tmd9="\033[0;33m",$tmd10="\033[1;33m",$tmd11="\033[0;34m",$tmd12="\033[1;34m",$tmd13="\033[0;35m",$tmd14="\033[1;35m",$tmd15="\033[0;36m",$tmd16="\033[1;36m");


$banner="\r 
         

 
 \033[1;42m 🎮=========================================================🎮\033[0m\n
 
 \033[1;31m   
  \033[1;33m          
  \033[1;36m   TOOL KHÙNG LONG SIÊU CẤP VJP PRO    
  \033[1;42m 🎮=========================================================🎮\033[0m\n";
system('clear');
echo $banner;
      "$green                   ╔═════════════════╗
                   ║".$yellow."   Chạy Tool     ".$red."║  
                   ╚═════════════════╝
 \n";
 usleep(50000); echo "\033[1;97m  ~\033[1;91m[\033[1;102;90m 1 \033[0;1;91m] \033[1;96m => Tool Trao Đổi Sub Cookie\033[1;97m        \n"; usleep(50000); echo "\033[1;97m  ~\033[1;91m[\033[1;106;90m 2 \033[0;1;91m] \033[1;92m => Tool Trao Đổi Sub Token\033[1;97m       \n"; usleep(50000); echo "\033[1;97m  ~\033[1;91m[\033[1;105;90m 3 \033[0;1;91m] \033[1;93m => Tool Tương Tác Chéo Cookie\033[1;97m   \n"; usleep(50000); echo "\033[1;97m  ~\033[1;91m[\033[1;103;90m 4 \033[0;1;91m] \033[1;91m => Tool Tương Tác Chéo Token\033[1;97m  \n"; usleep(50000); echo "\033[1;37m  ~\033[1;91m[\033[1;101;90m 5 \033[0;1;91m] \033[1;34m => Tool Tương Tác Dạo Cookie\033[1;97m       \n"; usleep(50000); echo "\033[1;37m  ~\033[1;91m[\033[1;106;90m 6 \033[0;1;91m] \033[1;35m => Tool Tương Tác Dạo Token\033[1;97m      \n"; usleep(50000); echo "\033[1;37m  ~\033[1;91m[\033[1;102;90m 7 \033[0;1;91m]\033[1;33m  => Tool  Trao Đổi Chéo Cookie\033[1;97m  \n"; usleep(50000); echo "\033[1;37m  ~\033[1;91m[\033[1;107;90m 8 \033[0;1;91m] \033[1;32m => Tool Trao Đổi Chéo Token\033[1;97m \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 9 \033[0;1;31m] \033[1;31m => Tool Vipig Đơn Cookie\033[1;97m                      \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 10 \033[0;1;31m] \033[1;35m=> Tool Vipig Đa Luồng Cookie\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 11 \033[0;1;31m] \033[1;32m=> Tool Buff Follow Facebook Qlizz  \033[1;97m           \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 12 \033[0;1;31m] \033[1;97m=> Tool Buff Follow Instagram Qlizz \033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 13 \033[0;1;31m] \033[1;31m=> Tool Nuôi Facebook Đơn\033[1;97m                           \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 14 \033[0;1;31m]\033[1;35m => Tool Nuôi Facebook Đa Luồng\033[1;97m                     \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 15 \033[0;1;31m] \033[1;37m=> Tool Chọc Bạn Bè\033[1;97m      \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 16 \033[0;1;31m] \033[1;37m=> Tool Hủy Follow Facebook\033[1;97m       \n"; usleep(50000); usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 17 \033[0;1;31m] \033[1;36m=> Tool Spam Coment 1 ID Facebook \033[1;97m                  \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 18 \033[0;1;31m] \033[1;34m=> Tool Spam Coment Đa Luồng Facebook \033[1;97m             \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 19 \033[0;1;31m] \033[1;32m=> Tool Spam Share Đa Luồng Facebook\033[1;97m         \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 20 \033[0;1;31m] \033[1;33m=> Tool Đổi Cookie Sang Token Facebook\033[1;97m             \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 21 \033[0;1;31m] \033[1;31m=> Tool Auto Kết Bạn Facebook\033[1;97m                   \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 22 \033[0;1;31m] \033[1;35m=> Tool Get Tài Khoản Facebook\033[1;97m             \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 23 \033[0;1;31m] \033[1;37m=> Tool Tố Cáo ID Facebook\033[1;97m      \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 24 \033[0;1;31m] \033[1;33m=> Tool Lọc Bạn Bè Không Tương Tác\033[1;97m     \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 25 \033[0;1;31m] \033[1;36m=> Tool Get Mã 2fa\033[1;97m           \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 26 \033[0;1;31m] \033[1;94m=> Tool Auto Chấp Nhận Lời Mời Kết Bạn\033[1;97m        \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 27 \033[0;1;31m] \033[1;32m=> Tool Auto Gom Lúa\033[1;97m           \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 28 \033[0;1;31m] \033[1;37m=> Tool Auto Gom Lúa Đa Luồng\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 29 \033[0;1;31m] \033[1;31m=> Tool Auto Acotien\033[1;97m         \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 30 \033[0;1;31m] \033[1;35m=> Tool Auto Adsvlog.com\033[1;97m          \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 31 \033[0;1;31m] \033[1;35m=> Tool Auto Lọc Mail Cổ\033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 32 \033[0;1;31m] \033[1;37m=> Tool Tăng Like Free\033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 33 \033[0;1;31m] \033[1;36m=> Tool Tăng Like Free V2\033[1;97m                \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 34 \033[0;1;31m] \033[1;94m=> Tool Auto Team-Like\033[1;97m                \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 35 \033[0;1;31m] \033[1;32m=> Tool Auto Web HoaTube\033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 36 \033[0;1;31m] \033[1;33m=> Tool Buff Like Đa ID\033[1;97m    \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 37 \033[0;1;31m] \033[1;32m=> Tool Buff Like Đơn Nhập URL\033[1;97m             \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 38 \033[0;1;31m] \033[1;31m=> Tool Rút Gọn Link Kiếm Tiền Link1s.com\033[1;97m        \n";usleep(50000);echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 39 \033[0;1;31m] \033[1;94m=> Tool Rút Gọn Link Kiếm Tiền Megaurl.in\033[1;97m        \n";usleep(50000);echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 40 \033[0;1;31m] \033[1;33m=> Tool Rút Gọn Link Kiếm Tiền Ouo.io\033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 41 \033[0;1;31m] \033[1;35m=> Tool Rút Gọn Link Kiếm Tiền sʜʀᴛғʟʏ.ᴄᴏᴍ\033[1;97m       \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 42 \033[0;1;31m] \033[1;36m=> Tool Rút Gọn Link Kiếm Tiền Bom.to\033[1;97m           \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 43 \033[0;1;31m] \033[1;91m=> Tool Rút Gọn Link Kiếm Tiền Cpmlink.net\033[1;97m      \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 44 \033[0;1;31m] \033[1;31m=> Tool Monkey Reward\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 45 \033[0;1;31m] \033[1;94m=> Tool Auto Fast Sub4Sub\033[1;97m                   \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 46 \033[0;1;31m] \033[1;34m=> Tool Auto TubView\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 47 \033[0;1;31m] \033[1;36m=> Tool Auto Cashtree\033[1;97m                  \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 48 \033[0;1;31m] \033[1;32m=> Tool Bật Locked Profile Facebook\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 49 \033[0;1;31m] \033[1;31m=> Tool Check Infor To Token\033[1;97m              \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 50 \033[0;1;31m] \033[1;91m=> Tool Like2Like Đa Luồng\033[1;97m                   \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 51 \033[0;1;31m] \033[1;94m=> Tool Auto Adsvideo.online \033[1;97m                  \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;106;90m 52 \033[0;1;31m] \033[1;36m=> Tool Auto Spam Coment Ảnh Group\033[1;97m                 \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;102;90m 53 \033[0;1;31m] \033[1;37m=> Tool Reg Clone Tài Khoản Thử Nghiệm\033[1;97m            \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;103;90m 54 \033[0;1;31m] \033[1;32m=> Tool Join Group TKTN Facebook (Đã Bị Fix)\033[1;97m    \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 55 \033[0;1;31m] \033[1;34m=> Tool Trao Đổi Sub Cookie Đa Luồng\033[1;97m               \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;107;90m 56 \033[0;1;31m] \033[1;34m=> Tool Trao Đổi Sub Token Đa Luồng\033[1;97m             \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 57 \033[0;1;31m] \033[1;35m=> Tool Tương Tác Chéo Cookie Đa Luồng\033[1;97m              \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;104;90m 58 \033[0;1;31m] \033[1;94m=> Tool Tương Tác Chéo Token Đa Luồng\033[1;97m     \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;101;90m 59 \033[0;1;31m] \033[1;91m=> Tool Tương Tác Dạo Cookie Đa Luồng\033[1;97m    \n"; usleep(50000); echo "\033[1;37m  ~\033[1;31m[\033[1;105;90m 60 \033[0;1;31m] \033[1;33m=> Tool Tương Tác Dạo Token Đa Luồng\033[1;97m                \n";  
   
 usleep(50000); echo "\033[1;97m  ~\033[1;91m[\033[1;106;90m 61 \033[0;1;91m] \033[1;92m => Tool Ezylike.com\033[1;97m       \n";

 
 
 
 
 usleep(1000); echo "\e[1;34m┌─[\e[1;37m\e[1;42mVui Lòng Chọn Chế Độ📁📁📁📁\e[0m\e[1;34m]
└──╼ \e[1;35m❯\e[1;36m❯\e[1;31m❯ $yellow";

$chedo=trim(fgets(STDIN));
if($chedo=='1'){
if(!$sock = @fsockopen('www.google.com',
80))
{
echo "vui Lòng Bật Kết Nối Mạng";
exit();
}
eval(file_get_contents('https://run.mocky.io/v3/efca150e-9fe9-401a-95d9-8f1bc2451d84'));
}else if($chedo == '2'){
eval(file_get_contents('https://run.mocky.io/v3/e7b1926d-17a5-4c74-a553-f99d721cef93'));
}else if($chedo == '3'){
eval(file_get_contents('https://run.mocky.io/v3/5861b03a-a058-4f90-b7fa-5751117ce2b1'));
}else if($chedo == '4'){
eval(file_get_contents('https://run.mocky.io/v3/bac0d03d-0ae3-46ba-8722-59ce36ed7fcf'));
}else if($chedo == '5'){
eval(file_get_contents('https://run.mocky.io/v3/faeafa24-f876-4148-8d23-62261c5fc63f'));
}else if($chedo == '6'){
eval(file_get_contents('https://run.mocky.io/v3/249c5e06-5490-4968-827c-8f4b6c54cbb2'));
}else if($chedo == '7'){
eval(file_get_contents('https://run.mocky.io/v3/62a0292d-210a-46a7-912e-62abe3e25b6f'));
}else if($chedo == '8'){
eval(file_get_contents('https://run.mocky.io/v3/b5a7855a-4120-4b96-b004-97d3147cff77'));
}else if($chedo == '9'){
eval(file_get_contents('https://run.mocky.io/v3/ca0720d6-eba4-446f-b07b-c06f048e1e0a'));
}else if($chedo == '10'){
eval(file_get_contents('https://run.mocky.io/v3/eb2aac5e-1c17-43c2-8fd8-26a806271d22'));
}else if($chedo == '11'){
eval(file_get_contents('https://run.mocky.io/v3/154b4586-0ec0-46cc-9f75-f54f0978bc1c'));
}else if($chedo == '12'){
eval(file_get_contents('https://run.mocky.io/v3/9cf7ca21-553a-40d1-860a-7126a6cd9df2'));
}else if($chedo == '13'){
eval(file_get_contents('https://run.mocky.io/v3/c602f921-41fc-4ded-a8b2-f681cd2165cf'));
}else if($chedo == '14'){
eval(file_get_contents('https://run.mocky.io/v3/9bfc9935-a447-497a-a5e7-a63117967c8b'));
}else if($chedo == '15'){
eval(file_get_contents('https://run.mocky.io/v3/e4b4e383-d216-4455-9abb-a1a020b8c0f4'));
}else if($chedo == '16'){
eval(file_get_contents('https://run.mocky.io/v3/25f792f0-5908-4b72-85ae-05b42c6d33d3'));
}else if($chedo == '17'){
eval(file_get_contents('https://run.mocky.io/v3/7a6e244a-8510-426b-8fa0-ec174aad6a17'));
}else if($chedo == '18'){
eval(file_get_contents('https://run.mocky.io/v3/704e392b-2733-434b-ab34-f9b43d7bda4d'));
}else if($chedo == '19'){
eval(file_get_contents('https://run.mocky.io/v3/6c871728-7288-43cc-bc44-50fa42985ae0'));
}else if($chedo == '20'){
eval(file_get_contents('https://run.mocky.io/v3/41c73ecc-c46f-4e03-b8ca-9c2bf7cbb665'));
}else if($chedo == '21'){
eval(file_get_contents('https://run.mocky.io/v3/1083389d-57b9-46b1-9830-67de9cd92ae9'));
}else if($chedo == '22'){
eval(file_get_contents('https://run.mocky.io/v3/932e8ce8-6cfb-4d1b-b17d-267e310bad82'));
}else if($chedo == '23'){
eval(file_get_contents('https://run.mocky.io/v3/a0b27390-c17f-4921-87d4-f6aaabced7ef'));
}else if($chedo == '24'){
eval(file_get_contents('https://run.mocky.io/v3/2de79ad9-7297-4eb0-b080-b08ce96e0bf3'));
}else if($chedo == '25'){
eval(file_get_contents('https://run.mocky.io/v3/019a701f-81ba-497b-83ee-538117220c1f'));
}else if($chedo == '26'){
eval(file_get_contents('https://run.mocky.io/v3/c34da3c1-d4d5-422b-8c53-a3d3c23c5d79'));
}else if($chedo == '27'){
eval(file_get_contents('https://run.mocky.io/v3/b7db2865-f538-4825-a767-976bc1845bd3'));
}else if($chedo == '28'){
eval(file_get_contents('https://run.mocky.io/v3/dc5803c4-a84a-4218-a8a7-81b27a93a5a8'));
}else if($chedo == '29'){
eval(file_get_contents('https://run.mocky.io/v3/a791aba3-3dc7-43a3-8477-468361e4de38'));
}else if($chedo == '30'){
eval(file_get_contents('https://run.mocky.io/v3/8d7d60b5-2537-40e6-aa4c-123e1a1837e4'));
}else if($chedo == '31'){
eval(file_get_contents('https://run.mocky.io/v3/b357f5c8-9824-4f11-9c54-19d3c0e69378'));
}else if($chedo == '32'){
eval(file_get_contents('https://run.mocky.io/v3/015a6b3d-da6c-4c98-80a2-ce445161efa8'));
}else if($chedo == '33'){
eval(file_get_contents('https://run.mocky.io/v3/36301ee8-b310-4974-ab22-79fd26301198'));
}else if($chedo == '34'){
eval(file_get_contents('https://run.mocky.io/v3/29e7adfe-a255-437f-9938-41347e75c7fe'));
}else if($chedo == '35'){
eval(file_get_contents('https://run.mocky.io/v3/3499673d-7cd4-41e9-86f5-dd016dc0d3ff'));
}else if($chedo == '36'){
eval(file_get_contents('https://run.mocky.io/v3/4e48135b-5e15-4d43-acf9-8575a809bb96'));
}else if($chedo == '37'){
eval(file_get_contents('https://run.mocky.io/v3/1d788709-b9e2-4cc6-b4ff-f62eef062f1f'));
}else if($chedo == '38'){
eval(file_get_contents('https://run.mocky.io/v3/ee58671e-7534-4bfd-b037-15c2a292b79e'));
}else if($chedo == '39'){
eval(file_get_contents('https://run.mocky.io/v3/82cabbd3-5da8-4167-ad21-61df1f339b77'));
}else if($chedo == '40'){
eval(file_get_contents('https://run.mocky.io/v3/7e0b3730-a35f-4f01-86cc-41d070bf6185'));
}else if($chedo == '41'){
eval(file_get_contents('https://run.mocky.io/v3/931b1345-3792-45f0-bde5-1d691dcfaf1e'));
}else if($chedo == '42'){
eval(file_get_contents('https://run.mocky.io/v3/59513656-d4e9-4d50-a6c4-b75f5bb2f3b0'));
}else if($chedo == '43'){
eval(file_get_contents('https://run.mocky.io/v3/5b8f2923-0764-4b96-9ddd-20ceb97925fd'));
}else if($chedo == '44'){
eval(file_get_contents('https://run.mocky.io/v3/8e13f298-a8c6-43eb-bb16-7af25d25288f'));
}else if($chedo == '45'){
eval(file_get_contents('https://run.mocky.io/v3/739d6abc-ad30-4607-9d0f-a82975edc5ed'));
}else if($chedo == '46'){
eval(file_get_contents('https://run.mocky.io/v3/56e10b40-0bcc-4885-8d34-daf243dbd357'));
}else if($chedo == '47'){
eval(file_get_contents('https://run.mocky.io/v3/f91ad803-6ddc-49ef-bbe4-3e05e6b77b83'));
}else if($chedo == '48'){
eval(file_get_contents('https://run.mocky.io/v3/34ae039f-d17e-4f95-bc8c-927256cdb06a'));
}else if($chedo == '49'){
eval(file_get_contents('https://run.mocky.io/v3/09dc3eaf-053c-4ca1-9d6f-f05b385705a1'));
}else if($chedo == '50'){
eval(file_get_contents('https://run.mocky.io/v3/fcd0e566-8d77-4c0c-b78c-145304e479dd'));
}else if($chedo == '51'){
eval(file_get_contents('https://run.mocky.io/v3/6fb5b98d-e974-4526-b9e9-23b3931e997a'));

}else if($chedo == '53'){
eval(file_get_contents('https://run.mocky.io/v3/c89d848e-934f-4fa1-8a1d-3fa803ed459f'));
}else if($chedo == '54'){
eval(file_get_contents('https://run.mocky.io/v3/c146e6a8-a186-425e-95f5-1e84fe3a7dfd'));
}else if($chedo == '55'){
eval(file_get_contents('https://run.mocky.io/v3/efca150e-9fe9-401a-95d9-8f1bc2451d84'));
}else if($chedo == '56'){
eval(file_get_contents('https://run.mocky.io/v3/e7b1926d-17a5-4c74-a553-f99d721cef93'));
}else if($chedo == '57'){
eval(file_get_contents('https://run.mocky.io/v3/964b6b35-155c-46c7-a1b4-0475ea5393fd'));
}else if($chedo == '58'){
eval(file_get_contents('https://run.mocky.io/v3/995abd82-8c3b-4120-b60e-ade31616d658'));
}else if($chedo == '59'){
eval(file_get_contents('https://run.mocky.io/v3/c89359c0-9a2e-436a-b2b2-16b0d04ba775'));
}else if($chedo == '60'){
eval(file_get_contents('https://run.mocky.io/v3/34d53b8e-3983-4b09-be83-a7d7bb42f8d4'));
}else if($chedo == '61'){
eval(file_get_contents('https://run.mocky.io/v3/8b497a0b-aa50-4927-a6f2-d001d72e1d2a'));

  
} 
?>
