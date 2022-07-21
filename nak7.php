<?php
ob_start();
define('API_KEY',"API_TOKEN");
$admin = 'ADMIN_ID';
$met =file_get_contents("stat/channel_3.txt");
$kanalim = 'KANAL';
$adminuser = 'ADMIN_USER';
$botname = bot('getme',['bot'])->result->username;
function bot($method,$datas=[]){
$url = "https://api.telegram.org/bot".API_KEY."/$method";
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
$res = curl_exec($ch);
if(curl_error($ch)){
var_dump(curl_error($ch));
}else{
return json_decode($res);
}
}



$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$message = $update->message;
$cid = $message->chat->id;
$cidtyp = $message->chat->type;
$miid = $message->message_id;
$name = $message->chat->first_name;
$user1 = $message->from->username;
$tx = $message->text;
$callback = $update->callback_query;
$mmid = $callback->inline_message_id;
$mes = $callback->message;
$mid = $mes->message_id;
$cmtx = $mes->text;
$mmid = $callback->inline_message_id;
$idd = $callback->message->chat->id;
$cbid = $callback->from->id;
$cbuser = $callback->from->username;
$data = $callback->data;
$ida = $callback->id;
$cqid = $update->callback_query->id;
$cbins = $callback->chat_instance;
$cbchtyp = $callback->message->chat->type;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$mid = $message->message_id;
$msgs = json_decode(file_get_contents('msgs.json'),true);
$data = $update->callback_query->data;
$type = $message->chat->type;
$text = $message->text;
$cid = $message->chat->id;
$uid= $message->from->id;
$gname = $message->chat->title;
$left = $message->left_chat_member;
$new = $message->new_chat_member;
$name = $message->from->first_name;
$bio = $messenge->from->about;
$repid = $message->reply_to_message->from->id;
$repname = $message->reply_to_message->from->first_name;
$newid = $message->new_chat_member->id;
$leftid = $message->left_chat_member->id;
$newname = $message->new_chat_member->first_name;
$leftname = $message->left_chat_member->first_name;
$username = $message->from->username;
$callmid = $update->callback_query->message->message_id;
$cusername = $message->chat->username;
$repmid = $message->reply_to_message->message_id; 
$callcid = $update->callback_query->message->chat->id;
$cuid = $update->callback_query->message->from->id;
$tx = $message->text;
$text= $message->text;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$from_id = $update->message->from->id;
$edname = $editm ->from->first_name;
$message = $update->message;
$mesid = $message->message_id;
$mid = $message->message_id;
$chat_id = $message->chat->id;
if(file_get_contents("pul/$cid.pul")){
}else{file_put_contents("pul/$cid.pul","0");
}
if(file_get_contents("pul/$cid.ref")){
}else{file_put_contents("pul/$cid.ref","0");
}
$cid = $message->chat->id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$cid2 = $update->callback_query->message->chat->id; 
$cqid = $update->callback_query->id;
$clcid = $update->callback_query->message->chat->id;
$ch_user2 = $update->callback_query->message->chat->username;
$msgid = $update->callback_query->message->message_id;
$fadmin2 = $update->callback_query->from->id;
$fadmin = $message->from->id;
$cty = $message->chat->type;
$step = file_get_contents("step/$cid.step");
$mid = $message->message_id;
$tx = $message->text;
$id1 = $message->reply_to_message->from->id;   
$repmid = $message->reply_to_message->message_id; 
$repname = $message->reply_to_message->from->first_name;
$repuser = $message->reply_to_message->from->username;
$reply = $message->reply_to_message;
$sreply = $message->reply_to_message->text;
$name2 = $update->callback_query->from->first_name;
$username2 = $update->callback_query->from->username;
$about2 = $update->callback_query->from->about;
$lname2 = $update->callback_query->from->last_name;




$data = $update->callback_query->data;
$qid = $update->callback_query->id;
$callcid = $update->callback_query->message->chat->id;
$calltext = $update->callback_query->message->text;
$clid = $update->callback_query->from->id;
$callmid = $update->callback_query->message->message_id;
$gid = $update->callback_query->message->chat->id;
$cqid = $update->callback_query->id;
$chpost = $update->channel_post;
$chuser = $chpost->chat->username;
$chpmesid = $chpost->message_id;
$chcaption = $chpost->caption;
$orqa = '⬅️ Orqaga';
$step = file_get_contents("step/$cid.step");
$userlar = file_get_contents("stat/users.txt");
mkdir("bot");
mkdir("step");
mkdir("stat");
mkdir("pul") ;



$rek = "Reklama: @EditUz_Bot Sizham o'z botingizni quring";



$menu = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👤 Obunachi"],['text'=>"🔐 Mening hisobim"],],
[['text'=>"🔑Buyurtma xolati"],['text'=>"💵 Hisob to'ldirish"]],
[['text'=>"☎️  Administrator"]],
]
]);



$mem = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"👤 Telegram"],['text'=>"👤Instagram"]],
[['text'=>"$orqa"]],
]
]);

$pay = json_encode([
'inline_keyboard'=>[
[['text'=>"💳 Sotib olish",'callback_data'=>"buy"],['text'=>"🗣 Taklifnoma",'callback_data'=>"ref"]],
]
]);

if($text=="$orqa"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$dl,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$orqa qaytdik $dl",
'reply_markup'=>$menu,
])->result->message_id;
}

if(mb_stripos($text,"/start $cid")!==false){
mkdir("pul");
mkdir("ref");
bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"Siz botga o'zingizni taklif qila olmaysiz!",
      'parse_mode'=>'html',
      'reply_markup'=>$menu,
      ]);
}else{
$idref = "pul/$ex.db";
$idref2 = file_get_contents($idref);
$id = "$cid\n";
$handle = fopen($idref, 'a+');
fwrite($handle, $id);
fclose($handle);
if(mb_stripos($idref2,$cid) !== false ){
}else{
$pub=explode(" ",$text);
$ex=$pub[1];
file_put_contents("ref/$cid.txt", "$ex");
$pul = file_get_contents("pul/$ex.pul");
$a=$pul+0;
file_put_contents("pul/$ex.pul","$a");
$odam = file_get_contents("pul/$ex.ref");
$b=$odam+1;
file_put_contents("pul/$ex.ref","$b");
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"<b>Salom qaytadan /start bosing
<a href='tg://user?id=$ex'>$ex</a> referalingizga rubl berish uchun kanalimizga obuna boling</b>",
'parse_mode'=>'html',
]);
}
}


if($tx == "🛠 Kanalni sozlash" and $cid == $admin){
    bot('sendMessage',[
    'chat_id'=>$admin,
    'text'=>"<i>Majburiy a‘zolik kanallarini sozlash uchun pastagi tugmalar orqali kanalingizni ulang.

<b>Eslatma:</b> Majburiy a‘zolikga kiritilgan kanallaringizda ushbu botingiz admin bo‘lishi kerak aks holda bot ishlamaydi.</i>",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'keyboard'=>[
[['text'=>"1⃣ - Kanal"],['text'=>"2⃣ - Kanal"]],
[['text'=>"/start"],['text'=>"/panel"]],
    ]
    ])
    ]);
    }
     $step = file_get_contents("stat/$cid.step");
   if($tx=="1⃣ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>1-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>e‘tibor bering kanalingiz useriga @ belgisini</b> qo‘shmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_1");
} 

if($step=="chanel_1" and $cid==$admin){ 
file_put_contents("stat/chanel_1.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning birinchi kanalingiz @$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
$step = file_get_contents("stat/$cid.step");
if($tx=="2⃣ - Kanal" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>2-kanalni sozlash uchun kanalingiz usernamesini yuboring, <b>e‘tibor bering kanalingiz useriga @ belgisini</b> qo‘shmasdan yuboring.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_2");
} 
 
if($step=="chanel_2" and $cid==$admin){ 
file_put_contents("stat/chanel_2.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning ikkinchi kanalingiz @$tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}
  $step = file_get_contents("stat/$cid.step");
   if($tx=="🚀Api" and $cid==$admin){ 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Api kalitni  sozlash uchun yuboring, <b>uni ushbu saytdan olasiz @Apiseen_bot</b> ‼️.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
file_put_contents("stat/$cid.step","chanel_3");
} 

if($step=="chanel_3" and $cid==$admin){ 
file_put_contents("stat/chanel_3.txt",$tx); 
bot('sendMessage',[ 
'chat_id'=>$admin, 
'text'=>"<i>Sizning api kalitingiz $tx ga o‘zgartirildi.</i>", 
'parse_mode'=>'html', 
'reply_markup'=>$panel, 
]); 
unlink("stat/$cid.step"); 
}

if($tx=="/start" and $type=="private"){
$userlar = file_get_contents("stat/users.txt");
if(mb_stripos($userlar,"$cid")!==false){
}else{
file_put_contents("stat/users.txt","\n".$cid,FILE_APPEND);
}

$chanel_1 = file_get_contents("stat/chanel_1.txt");
$ret = bot("getChatMember",[
         "chat_id"=>"@$chanel_1",
         "user_id"=>$cid,
         ]);
$chanel_2 = file_get_contents("stat/chanel_2.txt");
$ret1 = bot("getChatMember",[
         "chat_id"=>"@$chanel_2",
         "user_id"=>$cid,
         ]);
$stat = $ret->result->status;
$stat1 = $ret1->result->status;
 if(($stat=="creator" or $stat=="administrator" or $stat=="member") and ($stat1=="creator" or $stat1=="administrator" or $stat1=="member")){
bot("sendMessage",[
         "chat_id"=>$cid,
'text'=>"
✋ Assalomu alaykum, @$botname Official-botiga xush kelibsiz!
🚀 Biz sizga Telegram, Instagram xizmatlarini taklif etamiz!
🌟 Sizning sahifalaringizni obunachilari professional darajada ko'paytirish uchun @$botname Official siz bilan birga!
🔽 Davom etish uchun quyidagi tugmalardan birini tanlang:
$reklama
👨‍💻Dasturchi: @$adminuser",
'parse_mode'=>'html',
'reply_markup'=>$menu,
]);  
$kele = file_get_contents("ref/$cid.txt");
bot('sendmessage',[
'chat_id'=>$kele,
'text'=>"Siz 1- ta referal chaqirdingiz va sizga 0.15₽ berildi",
]);
$refpuli = file_get_contents("pul/$kele.pul");
$ballplus = $refpuli + 0.15;
file_put_contents("pul/$kele.pul", "$ballplus");
unlink("ref/$cid.txt");
}
else{
     bot('sendmessage',[
'chat_id'=>$cid,
"text"=>"<b>Quyidagi kanalimizga obuna bo`lib qayta /start bosing⤵
1. @$chanel_1
2. @$chanel_2</b>",
"parse_mode"=>"html",
"reply_to_message_id"=>$message_id,
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([
'remove_keyboard'=>true,
]),
]);
return false;
}
}


$panel = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📝Userga Xabar"],['text'=>"📋Userga Forward"]],
[['text'=>"➕Rubl berish"],['text'=>"➖Rubl ayirish"]],
[['text'=>"🪙API Balans"],['text'=>"📊Statistika"]],
[['text'=>"🛠 Kanalni sozlash"]],
]
]);

$okstat=file_get_contents("status/$cid.status");
if($text=="🔑Buyurtma xolati"){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Buyurtma ID-raqamini kiriting",
]);
mkdir("status");
file_put_contents("status/$cid.status","1");
}
if($okstat==1){
if(is_numeric($tx)){
$orderstat=json_decode(file_get_contents("https://u4547.xvest5.ru/api/?kalit=$met&act=status&id=$zkq"),true);
if($orderstat['status'] !=null or $orderstat['remains'] !=null){
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
Buyurtma xolati: ".$orderstat['status']."
Buyurtma miqdori: ".$orderstat['remains']."",
]);unlink("status/$cid.status");
}else{
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>" Mavjud emas" ,
]);
}
}
}

if($text == "/panel" and $cid==$admin ){
	bot('sendmessage',[
	'chat_id'=>$cid,
	'text'=>"<b>Assalamu alaykum <a href='tg://user?id=$uid'>Admin</a></b>\n\n<i>Kerakli boʻlimni tanlang!!</i>",
	'parse_mode'=>"html",
	'reply_markup'=>$panel,
]);
}

if($text=="🪙API Balans" and $cid==$admin){
$api_balance = json_decode(file_get_contents("https://u4547.xvest5.ru/api/?kalit=$met&act=hisob"),true);
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Sizning API Balansingizda
".$api_balance['hisob']." So'm",
'reply_markup'=>$panel,
]);
}

if($text=="📊Statistika" && $cid==$admin){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
@$botname statistikasi
Bot azolari ".substr_count($userlar,"\n")." ta ",
'reply_markup'=>$panel,
]);
}

function send($c,$m,$p){
bot('sendMessage',[
'chat_id'=>$c,
'text'=>$m,
'parse_mode'=>$p,
]);
}
function reyting(){
    $text = "🏆 <b>TOP 5 ta eng koʻp pul ishlagan foydalanuvchilar:</b>\n\n";
    $daten = [];
    $rev = [];
    $fayllar = glob("./pul/*.*");
    foreach($fayllar as $file){
        if(mb_stripos($file,".pul")!==false){
        $value = file_get_contents($file);
        $id = str_replace(["./pul/",".pul"],["",""],$file);
        $daten[$value] = $id;
        $rev[$id] = $value;
        }
        echo $file;
    }

    asort($rev);
    $reversed = array_reverse($rev);
    for($i=0;$i<5;$i+=1){
        $order = $i+1;
        $id = $daten["$reversed[$i]"];
        $text.= "<b>{$order}</b>. <a href='tg://user?id={$id}'>{$id}</a> - "."<code>".$reversed[$i]."</code>"." <b>rubl</b>"."\n";
    }
    return $text;
}
if($text=="/reyting"){
$y = reyting();
bot('sendMessage',[
'chat_id'=>$admin,
'text'=>$y,
'parse_mode'=>html,
]);
}

    if($text == "📝Userga Xabar" and $cid == $admin){
      bot('sendMessage',[
      'chat_id'=>$cid,
      'text'=>"<b>Userlarga yuboriladigan habarni kiriting!!</b>",
      'parse_mode'=>"html",
      'reply_markup'=>$panel,
      ]);
      file_put_contents("step/$cid.step","user");
    }

    if($step == "user" and $cid == $admin){
      if($text == "/cancel"){
      unlink("stat/$chat_id.step");
      }else{ 
      $idszs=explode("\n",$userlar);
      foreach($idszs as $idlat){
     $userr = bot('sendMessage',[
      'chat_id'=>$idlat,
      'text'=>"<b>$text</b>",
      'parse_mode'=>'html',
      'disable_web_page_preview' => true,
      ]);  unlink("step/$cid.step");
      }
        if($userr){
          bot('sendmessage',[
          'chat_id'=>$admin,
          'text'=>"Habar Barcha Userlarga yuborildi!",
          ]);      
      unlink("step/$cid.step");
        }
      }
    }
     


if($text == "📋Userga Forward" and $cid == $admin){
 bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"✅ *Userlarga forward qilinadigan xabarni kiriting!
Bakor qilish uchun /cancel ni bosing*",
'parse_mode'=>'markdown',
]);
file_put_contents("step/$cid.step","forward");
}

if($step == "forward" and $cid == $admin){
if($text == "/cancel"){
unlink("stat/$chat_id.step");
}else{ 
$ids=explode("\n",$userlar);
foreach($ids as $id){
$user = bot('forwardMessage', [
'chat_id'=>$id,
'from_chat_id'=>$admin,
'message_id'=>$mid,
]);unlink("step/$cid.step");
}

if($user){
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"✅ Xabar yetkazildi!",
'parse_mode'=>"markdown",
]);     
unlink("step/$cid.step");
}
}
}   

if($text=="🔐 Mening hisobim"){

$dost = file_get_contents("pul/$cid.ref");
$soat=date('H:i:s',strtotime('0 hour'));
$sana=date("d-M-y",strtotime("0 hour"));
$hisob  = file_get_contents("pul/$cid.pul");
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
‍‍┌Sizning hisobingiz haqida:
├Mijoz: ".$message->from->first_name."
├Xisob raqam <code>$cid</code>
├Botdagi vazifa: Foydalanuvchi
├Do'stlaringiz: $dost ta
├Asosiy xisob: $hisob ₽

$rek",
'parse_mode'=>"HTML",
'reply_markup'=>$pay,
])->result->message_id;

}

if($text=="💵 Hisob to'ldirish"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"‍Marhamat, quyidagi menyudagi hisob to'ldirish usullardan birini tanlang: 

🗣 Taklifnoma: Siz ushbu bo'limdan foydalanib o'zingizning havolangizni olasiz va boshqalarga yuborish orqali tanga yig'asiz.

💳 Sotib olish: Siz ushbu bo'limdan tangalarni sotib olish va robotdan hech qanday muammosiz va ozgina pul to'lash orqali foydalanishingiz mumkin.‌‌

$rek
",
'reply_markup'=>$pay,
])->result->message_id;
}

if($data=="card"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>⬇Quyidagi karta raqamiga tolov qiling va administratorga yozing</b>

💳Karta: <code>Lichkada</code>
💸Minimal tolov: 1000 so'm

<b>📊 Botdagi rubl kursi: 1 ₽ - 145 so'm</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Administrator",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($data=="qiwi"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"<b>🥝 QIWI to'lov tizimi orqali yuborilgan pullaringiz bir necha daqiqada 
avtomatik ravishda hisobingizga tushadi.</b>

💳 QIWI: <code>Lichkada</code>
📝 Izoh: <code>$callcid</code>

<b>Diqqat! izoh kiritishni unutsangiz yoki noto'g'ri kiritsangiz hisobingizga pul tushmaydi! 
Bu kabi holatlarda, biz bilan bog'lanishingiz mumkin.</b>",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🧑‍💻Administrator",'url'=>"https://t.me/$adminuser"]],
]]),]);}

if($text=="⬅Orqaga"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
exit();
}

$step = file_get_contents("step/$cid.step");
$hisob = file_get_contents("pul/$cid.pul");
$types = file_get_contents("step/$cid.turi");
if($text== "👤 Telegram"){
$status = file_get_contents("status.txt");
if($status== "off"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"obunachi qoshish vaxtincha admin tomonidan ochirilgan",
]);
}else{
mkdir("data");
mkdir("data/zakaz");
bot("deleteMessage",[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot("sendMessage",[
'chat_id'=>$cid,
'text'=>"
👤 Telegram obunachi bolimidasiz
👤 Telegram kanalingiz manzilini yuboring

Namuna: https://t.me/edituz_bot
Obunachi narxi: 50 Rubl
Minimal: 100-ta
Maksimal: 10000-ta",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅Orqaga"],],
]
]),
]);
file_put_contents("step/$cid.turi","telegram_url");
file_put_contents("step/$cid.step","tg_url");
}
}
if($step=="tg_url" and $types=="telegram_url"){
$miqdor1 = $hisob / 0.05;
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$text 
Kanal manzili saqlandi endi obunachi miqdorni kiriting
Sizning hisobingizda: $hisob rubl
Minimal: 100-ta
Maksimal: 10000-ta
Sizning hisobingiz $miqdor1 ta obunachi ga yetadi
Moqdorni kiriting",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅Orqaga"],],
]
]),
]);
unlink("step/$cid.turi");
unlink("step/$cid.step");
file_put_contents("step/$cid.step","tg_pm");
file_put_contents("step/$cid.turi","telegram_pm");
file_put_contents("data/zakaz/$cid.kan","$text");
}

if($step=="tg_pm" and $types=="telegram_pm"){
$min = "100";
$max = "10000";
if($text=="⬅Orqaga"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
exit();
}
if(is_numeric($text)){
if($text>=$min and $text<=$max){
$zakchan = file_get_contents("data/zakaz/$cid.kan");
file_put_contents("data/zakaz/$cid.son","$text");
file_put_contents("step/$cid.step","none");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>" 👤 $text obunachi buyurtmoqchimisiz?

📢Kanalingiz: $zakchan
",
    'parse_mode'=>"html",
'reply_markup'=>json_encode([
"inline_keyboard"=>[
[["text"=>"✅ Tasdiqlash","callback_data"=>"ha"],["text"=>"❌ Bekor qilish","callback_data"=>"noo"],],
]
]),
]);
file_put_contents("step/$cid.tur","tgok");
}else{
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"❌Xatolik
Minimal: $min
Maksimal: $max",
    'parse_mode'=>"html",
'reply_markup'=>$bekor,
]);
}
}
}
$ctypes = file_get_contents("step/$cid.tur");
if($data=="noo" and $ctypes=="tgok"){
unlink("step/$callcid.step");
unlink("data/type/$callcid.txt");
unlink("data/zakaz/$callcid.kan");
unlink("data/zakaz/$callcid.son");

bot('sendmessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"🚫 Bekor qilindi",
'reply_markup'=>$nakr,
]);

}

$ctypes = file_get_contents("step/$cid.tur");
$data = $update->callback_query->data;
if($data=="ha"){
$narxi = 20;
$sumid =  file_get_contents("pul/$callcid.pul");
$max = $sumid * $narxi;
$maxmember = floor($max);
$czakchan = file_get_contents("data/zakaz/$callcid.kan");
$czakson = file_get_contents("data/zakaz/$callcid.son");
$czakid = file_get_contents("data/zakaz/$callcid.rid");
if($maxmember>=$czakson){
$zakazcount = file_get_contents("zakaz.txt");
$zakidq = $zakazcount + 1;
file_put_contents("zakaz.txt","$zakidq");
$pluscoin = $czakson / $narxi;
$coinplus = $sumid - $pluscoin;
file_put_contents("pul/$callcid.pul","$coinplus");
$zkq = file_get_contents("https://u4547.xvest5.ru/api/?kalit=$met&act=obunachi&id=2&manzil=$czakchan&miqdor=$czakson");
bot("deleteMessage",[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('sendMessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"🔒 <b>Buyurtma qabul qilindi!</b>
🆔 <b>Buyurtma ID: $zkq</b>
🏷️ <b>Buyurtma holati: Bajarilmoqda...</b>
<b>📡Kanalingiz manzili:</b> <b>$czakchan</b>
<b>🔢Buyurtma soni:</b> <b>$czakson</b>
<b>🔢Buyurtma bajarilish vaqti:</b> <b>24-soat</b>
",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
unlink("step/$callcid.step");
}else{
unlink("step/$callcid.step");
unlink("data/zakaz/$callcid.kan");
unlink("data/zakaz/$callcid.son");
bot("deleteMessage",[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
$miqdor2= $sumid / 0.05;
bot('sendmessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"❗️Balans yetarli emas ".$miqdor2." ta obunachi qilishiz mumkin",
'reply_markup'=>$nakr,
]);
}
}

$step = file_get_contents("step/$cid.step");
$hisob = file_get_contents("pul/$cid.pul");
$types = file_get_contents("step/$cid.turi");
if($text== "👤Instagram"){
$status = file_get_contents("status.txt");
if($status== "off"){
bot('sendmessage',[
'chat_id'=>$cid,
'text'=>"obunachi qoshish vaxtincha admin tomonidan ochirilgan",
]);
}else{
mkdir("data");
mkdir("data/zakaz");
bot("deleteMessage",[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot("sendMessage",[
'chat_id'=>$cid,
'text'=>"
👤Instagram obunachi bolimidasiz
👤Instagram kanalingiz manzilini yuboring

Namuna: https://instagram.com/gh.dizayner

Minimal: 100-ta
Maksimal: 20000-ta",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅Orqaga"],],
]
]),
]);
file_put_contents("step/$cid.turi","instagram_url");
file_put_contents("step/$cid.step","ins_url");
}
}
if($step=="ins_url" and $types=="instagram_url"){
$miqdor1 = $hisob / 0.05;
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"$text 
Kanal manzili saqlandi endi obunachi miqdorni kiriting
Sizning hisobingizda: $hisob rubl
Minimal: 100-ta
Maksimal: 20000-ta
Sizning hisobingiz $miqdor1 ta obunachi ga yetadi
Moqdorni kiriting",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"⬅Orqaga"],],
]
]),
]);
unlink("step/$cid.turi");
unlink("step/$cid.step");
file_put_contents("step/$cid.step","ins_pm");
file_put_contents("step/$cid.turi","instagram_pm");
file_put_contents("data/zakaz/$cid.kan","$text");
}

if($step=="ins_pm" and $types=="instagram_pm"){
$min = "100";
$max = "20000";
if($text=="⬅Orqaga"){
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"Bekor qilindi!",
    'parse_mode'=>"html",
'reply_markup'=>$mem,
]);
unlink("step/$cid.step");
unlink("step/$cid.turi");
unlink("step/$cid.step");
exit();
}
if(is_numeric($text)){
if($text>=$min and $text<=$max){
$zakchan = file_get_contents("data/zakaz/$cid.kan");
file_put_contents("data/zakaz/$cid.son","$text");
file_put_contents("step/$cid.step","none");
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>" 👤 $text obunachi buyurtmoqchimisiz?

📢Kanalingiz: $zakchan
",
    'parse_mode'=>"html",
'reply_markup'=>json_encode([
"inline_keyboard"=>[
[["text"=>"✅ Tasdiqlash","callback_data"=>"hains"],["text"=>"❌ Bekor qilish","callback_data"=>"nooins"],],
]
]),
]);
file_put_contents("step/$cid.tur","insok");
}else{
bot('sendmessage',[
    'chat_id'=>$cid,
    'text'=>"❌Xatolik
Minimal: $min
Maksimal: $max",
    'parse_mode'=>"html",
'reply_markup'=>$bekor,
]);
}
}
}
$ctypes = file_get_contents("step/$cid.tur");
if($data=="nooins" and $ctypes=="insok"){
unlink("step/$callcid.step");
unlink("data/type/$callcid.txt");
unlink("data/zakaz/$callcid.kan");
unlink("data/zakaz/$callcid.son");

bot('sendmessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"🚫 Bekor qilindi",
'reply_markup'=>$nakr,
]);

}

$ctypes = file_get_contents("step/$cid.tur");
$data = $update->callback_query->data;
if($data=="hains"){
$narxi = 20;
$sumid =  file_get_contents("pul/$callcid.pul");
$max = $sumid * $narxi;
$maxmember = floor($max);
$czakchan = file_get_contents("data/zakaz/$callcid.kan");
$czakson = file_get_contents("data/zakaz/$callcid.son");
$czakid = file_get_contents("data/zakaz/$callcid.rid");
if($maxmember>=$czakson){
$zakazcount = file_get_contents("zakaz.txt");
$zakidq = $zakazcount + 1;
file_put_contents("zakaz.txt","$zakidq");
$pluscoin = $czakson / $narxi;
$coinplus = $sumid - $pluscoin;
file_put_contents("pul/$callcid.pul","$coinplus");
$zkq = file_get_contents("https://u4547.xvest5.ru/api/?kalit=$met&act=obunachi&id=1&manzil=$zakchan&miqdor=$czakson");
bot("deleteMessage",[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
bot('sendMessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"🔒 <b>Buyurtma qabul qilindi!</b>
🆔 <b>Buyurtma ID: $zkq</b>
🏷️ <b>Buyurtma holati: Bajarilmoqda...</b>
<b>📡Kanalingiz manzili:</b> <b>$czakchan</b>
<b>🔢Buyurtma soni:</b> <b>$czakson</b>
<b>🔢Buyurtma bajarilish vaqti:</b> <b>24-soat</b>
",
'parse_mode'=>"html",
'reply_markup'=>$menu,
]);
unlink("step/$callcid.step");
}else{
unlink("step/$callcid.step");
unlink("data/zakaz/$callcid.kan");
unlink("data/zakaz/$callcid.son");
bot("deleteMessage",[
'chat_id'=>$callcid,
'message_id'=>$callmid,
]);
$miqdor2= $sumid / 0.05;
bot('sendmessage',[
                'chat_id'=>$callcid,
     'message_id'=>$callmid,
 'text'=>"❗️Balans yetarli emas ".$miqdor2." ta obunachi qilishiz mumkin",
'reply_markup'=>$nakr,
]);
}
}


if($text=="☎️  Administrator"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
$dl = bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"
🔰 Bizga savollaringiz yoki muammolaringiz bo'lsa, iltimos, bizning qo'llab-quvvatlash jamoamiz bilan bog'laning.
Admin: @$adminuser",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"☎️  Administrator","url"=>"https://t.me/adminuser"]],
]]),])->result->message_id;}

if($data=="ref"){
bot('editMessagetext',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
🎉 @$botname
✅ Telegram  va  Instagram sahifalarga obunachi qo'shish,
👥 Referal va sotib olish,
🔆 24/7 qo'llab-quvvatlash,
🔐 Qulay va 🚚Avto tolov(🥝QIWI),
💸 Tezkor o'tkazma qilish imkoniyati.
🇺🇿 O'zbek tilidagi boshqaruv.
👇 Hoziroq sinab ko'ring! Linkni bosing!

👉🏻 https://telegram.me/$botname?start=$callcid
👉🏻 tg://resolve?domain=$botname&start=$callcid
$reklama",
]);
bot('sendMessage',[
'chat_id'=>$callcid,
'text'=>"Yuqoridagi xabarni tarqating va xar bir referalingiz uchun 0.15P oling ",
]);
}


if($data=="buy"){
bot('editMessageText',[
'chat_id'=>$callcid,
'message_id'=>$callmid,
'text'=>"
💵 Qaysi to'lov usulida hisobingizni toldirmoqchisiz?
Karta va qiwi orqali toʻlovlar qilish tavsiya etiladi.
👇 Tugmalardan tanlang:",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💴Karta orqali",'callback_data'=>"card"],['text'=>"🥝QIWI Orqali(avto)",'callback_data'=>"qiwi"]],
]
]),
]);
}                            

if($text=="👤 Obunachi"){
bot('deleteMessage',[
'chat_id'=>$cid,
'message_id'=>$mid,
]);
bot('sendMessage',[
'chat_id'=>$cid,
'text'=>"Siz obunachilar bo'limidasiz. Qaysi platforma uchun obunachi yig'moqchisiz?
Tugmalardan tanlang👇:

$rek
",
'reply_markup'=>$mem,
]);
}

$ss=file_get_contents("admin.txt");
if($text=="➕Rubl berish" and $cid==$admin){
file_put_contents("admin.txt","coin");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobini nechi pulga toʻldirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay");
 }


if($ss=="pay" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.pul");
$jami = $sum + $summa;
file_put_contents("pul/$text.pul","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingiz admin tomonidan $summa so'mga toʻldirildi!

Hozirgi hisobingiz: $jami rubl",
]);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansi toʻldirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}
////////
$ss=file_get_contents("admin.txt");
if($text=="➖Rubl ayirish" and $cid==$admin){
file_put_contents("admin.txt","coin1");
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi hisobidan qancha rubl ayirmoqchisiz:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
}

if($ss=="coin1" and $cid==$admin){
file_put_contents("adminpul.coin",$text);
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"Foydalanuvchi ID raqamini kiriting:",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
file_put_contents("admin.txt","pay1");
 }


if($ss=="pay1" and $cid==$admin){
$summa = file_get_contents("adminpul.coin");
$sum =  file_get_contents("pul/$text.pul");
$jami = $sum - $summa;
$okminus=file_put_contents("pul/$text.pul","$jami");
bot("sendMessage",[
   "chat_id"=>$text,
          "text"=>"
💰 Sizning hisobingizdan admin tomonidan $summa rubl ayirildi!

Hozirgi hisobingiz: $jami rubl",
]);
}
if($okminus){
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"✅ Foydalanuvchi balansidan $summa rubl ayirildi!",
"parse_mode"=>"html",
"reply_markup"=>$panel,
]);
unlink("admin.txt");
unlink("adminpul.txt");
}