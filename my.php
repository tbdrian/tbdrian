<?php

//TRIBES - edit wanbotak
define("TRIBE1","Roman"); 
define("TRIBE2","Teuton");
define("TRIBE3","Gaul"); 
define("TRIBE4","Hokage"); 
define("TRIBE5","Akatsuki");
define("TRIBE6","Monsters");


//MAIN MENU - edit wanbotak
define("HOME","Laman Utama");
define("LOGIN","Masuk");
define("REG","Daftar");
define("FORUM","Forum");
define("SUPPORT","Bantuan");
define("LOGOUT","Keluar");
define("HEADER_DORF1","Sumber");
define("HEADER_DORF2","Bangunan");
define("HEADER_MAP","Peta");
define("HEADER_STATS","Statistik");
define("HEADER_NOTICES","Laporan");
define("HEADER_NOTICES_NEW","Laporan Baru");
define("HEADER_MESSAGES","Mesej");
define("HEADER_MESSAGES_NEW","Mesej Baru");


//LOGIN.php
define("LOGIN_WELCOME","Selamat Datang".SERVER_NAME." Kepada Semua.!");
define("LOGIN_NO_JAVASCRIPT","در مرورگر شما JavaScript غیرفعال می‌باشد. برای اینکه قادر به بازی باشید باید از تنظیمات مرورگر خود JavaScript را فعال کنید.");
define("LOGIN_USERNAME","نام اکانت");
define("LOGIN_PASSWORD","رمز عبور");
define("LOGIN_LOWRES_OPTION","ویرایش برای بازیکن");
define("LOGIN_LOWRES_DESC","با پهنای باند کمتر (سرعت اینترنت کمتر)");
define("LOGIN_LOWRES_NOTICE","(توجه: این ویرایش نقشه تمامی امکان‌های ممکن را ندارد)");
define("LOGIN_PW_FORGOTTEN","رمز عبور را فراموش کردید؟");
define("LOGIN_PW_EMAIL","ایمیل:");
define("LOGIN_PW_BTN","درخواست رمز عبور");
define("LOGIN_PW_REQUEST","ما برای شما رمز جدیدی ارسال خواهیم کرد. به محض اینکه دریافت نامه را تایید کنید رمز فعال خواهد شد.");
define("LOGIN_PW_SENT","یک ایمیل حاوی رمز عبور جدید به ایمیل شما فرستاده شد");
define("LOGIN_SERVER_START","بازی هنوز شروع نشده است. شما قادر به بازی کردن در");
define("LOGIN_SERVER_START2","می باشید.");
define("PW_GENERATE","همه قسمت ها الزامی است");
define("EMAIL_NOT_VERIFIED","ایمیل تایید نشده");
define("EMAIL_FOLLOW","برای فعالسازی اکانت خود روی این لینک کلیک کنید");
define("VERIFY_EMAIL","ایمیل تایید شد");
define("COOKIES","برای ورود، باید کوکی را فعال کنید. در صورتی که شما کامپیوتر را مشتركاً با اشخاص دیگری استفاده می کنید، باید به هنگام خروج، لاگ اوت (خروج) را بزنید.");


//LOGOUT.php
define("LOGOUT_TITLE","خروج موفقیت آمیز");
define("LOGOUT_H4","با تشکر از بازديد شما.");
define("LOGOUT_DESC","اگر افراد دیگری نیز از این کامپیوتر استفاده می کنند، شما باید کوکی ها را برای امنیت بیشتر خود پاک کنید:");
define("LOGOUT_LINK","پاک کردن کوکی ها");


//REGISTER edit ~ujang
define("REGISTER_USERINFO","Maklumat Penggunaر");
define("REGISTER_USERNAME","Username :");
define("REGISTER_EMAIL","Email:");
define("REGISTER_LOCATION","Location :");
define("REGISTER_RANDOM","Random selection");
define("REGISTER_NW","Barat Laut");
define("REGISTER_NE","Timur Laut");
define("REGISTER_SW","Barat Daya");
define("REGISTER_SE","Tenggara");
define("ACCEPT_RULES"," Saya telah membaca dan bersetuju dengan peraturan yan ditetapkan ");
define("REGISTER_MOREINFO","Maklumat Lanjutر");
define("REGISTER_PASSWORD","Password : ");
define("REGISTER_SELECT_TRIBE","Pilih Bahasa");
define("BEFORE_REGISTER","Sebelum anda mendaftar.sila ke link <a href='../anleitung.php' target='_blank'>PERTOLONGAN</a> untuk membaca Kebaikan dan keburukan antara ketiga-tiga Pihak ( PUAK )");
define("REGISTER_STARTER","JIKA ANDA PEMAIN BARU TravianTBD Sila membaca terlebih dahulu sebelum menjadi KEBODOHAN");


//CONTACT.PHP
define("CONTACT_DESC","شما می توانید از فرم زیر درخواست خود را به پشتیبانی ارسال کنید. لطفاً با دقت پاسخ سوالات فرم را با جزیئات وارد کنید تا در اسرع وقت قادر به راهنمایی شما باشیم.");
define("CONTACT_CATEGORY","دسته");
define("CONTACT_SELECT_SUBJECT","لطفاً انتخاب کنید");
define("CONTACT_SUBJECT1","سوال عمومی");
define("CONTACT_SUBJECT2","نمی توانم وارد اکانت شوم");
define("CONTACT_SUBJECT3","نمی توانم ثبت نام کنم");
define("CONTACT_SUPPORT","پشتیبانی سرور");
define("CONTACT_USERNAME","نام کاربری");
define("CONTACT_USER_NOT_EXIST","این نام کاربری ثبت نشده.");
define("CONTACT_EMAIL","ایمیل");
define("CONTACT_MESSAGE","پیام");
define("CONTACT_SEND","ارسال");
define("CONTACT_SENT","با موفقیت ارسال شد.");


//ERRORS
define("USRNM_EMPTY","(خالی است)");
define("USRNM_TAKEN","(قبلا استفاده شده)");
define("USRNM_SHORT","(حداقل ".USRNM_MIN_LENGTH." حرف)");
define("USRNM_CHAR","(کاراکترهای اشتباه)");
define("PW_EMPTY","(خالی است)");
define("PW_SHORT","(حداقل ".PW_MIN_LENGTH." حرف)");
define("PW_INSECURE","(رمز نامعتبر است، یک رمز دیگر انتخاب کنید)");
define("EMAIL_EMPTY","(خالی است)");
define("EMAIL_INVALID","(اشتباه است)");
define("EMAIL_NOTEXIST","این ایمیل وجود ندارد.");
define("EMAIL_TAKEN","(قبلا استفاده شده)");
define("TRIBE_EMPTY","<li>لطفا نژاد را انتخاب کنید</li>");
define("AGREE_ERROR","<li>باید قوانین بازی را خوانده و قبول کنید</li>");
define("LOGIN_USR_EMPTY","نام را وارد کنید");
define("LOGIN_PASS_EMPTY","رمز عبور را وارد کنید");
define("EMAIL_ERROR","ایمیل وارد شده معتبر نیست");
define("PASS_MISMATCH","رمز عبور هماهنگ نیست");
define("ALLI_OWNER","لطفا قبل از حذف یک جانشین انتخاب کنید");
define("SIT_ERROR","این جانشین قبلا انتخاب شده");
define("USR_NT_FOUND","این نام وجود ندارد");
define("USR_BAN","اکانت شما بازداشت شده");
define("LOGIN_PW_ERROR","رمز عبور اشتباه است");
define("WEL_TOPIC","توضیحات و اطلاعات ");
define("ATAG_EMPTY","علامت خالی است");
define("ANAME_EMPTY","نام خالی است");
define("ATAG_EXIST","قبلا ثبت شده");
define("ANAME_EXIST","قبلا ثبت شده");


//BUILD.TPL edit ~ujang
define("CUR_PROD","Product Semasa");
define("NEXT_PROD","Pengeluaran Di");
define("BUILDING_UPGRADING","Bangunan");
define("HOURS","Masa");


//WARSIM.TPL
define("WARSIM","شبیه ساز جنگی");
define("WARSIM_ATTACKER","حمله کننده");
define("WARSIM_DEFENDER","مدافع");
define("WARSIM_ETC","غیره");

define("WARSIM_POP","جمعیت");
define("WARSIM_KATA","سطح هدف منجنیق");
define("WARSIM_HEROPOWER","قهرمان (امتیاز حمله)");
define("WARSIM_STONEMASON","سنگ تراشی");
define("WARSIM_PALACE","قصر / اقامتگاه");

//BUILDINGS
define("B1","هیزم شکن");
define("B1_DESC","هیزم شکن چوب تولید میکند. هرچقدر که بیشتر ارتقا داده شود چوب بیشتری تولید میکند");
define("B2","آجر سازی");
define("B2_DESC","در اینجا آجر خام (خشت) ساخته می شود. هر قدر سطح این ساختمان بالاتر باشد تولید این محصول بیشتر خواهد شد.");
define("B3","معدن آهن");
define("B3_DESC","در اینجا معدنچیان، به تولید آهن می پردازند. هر قدر که سطح معدن بالاتر باشد، آهن بیشتری تولید خواهد شد.");
define("B4","گندمزار");
define("B4_DESC","غذای مصرفی مردم در اینجا تولید می شود که با وسعت دادنش توليد محصول بیشتر می شود");

//DORF1 ~whcool
define("LUMBER","Kayu");
define("CLAY","Bata");
define("IRON","Besi");
define("CROP","Tanaman");
define("LEVEL","Level");
define("CROP_COM",CROP." Habis");
define("PER_HR","Sejam");
define("PROD_HEADER","Pengeluaran");
define("MULTI_V_HEADER","Kampung");
define("ANNOUNCEMENT","Pengumuman");
define("GO2MY_VILLAGE","Kembali ke Kampung");
define("VILLAGE_CENTER","Village Center");
define("FINISH_GOLD","Adakah anda ingin bekerja dengan dua penamat emas memberi Kampung ini ?");
define("WAITING_LOOP","(menunggu giliran)");
define("HRS","(masa)");
define("DONE_AT","Siap pada");
define("CANCEL","Membatalkan");
define("LOYALTY","Kesetiaan:"); 
define("SEVER_TIME","Waktu pelayan:");
define("SIDEINFO_CHANGEVIL_BTN","Kedai"); 
define("SIDEINFO_CHANGEVIL_LABEL","Nama baru kampung:"); 
define("SIDEINFO_CHANGEVIL_TITLE","Menukar nama kampung"); 
define("SIDEINFO_CHANGE_TITLE","Klik dua kali untuk menukar nama kampung."); 
define("SIDEINFO_ADVENTURES","Pengembaraan"); 
define("SIDEINFO_AUCTIONS","Pelelong"); 
define("SIDEINFO_PROFILE","Profil");
define("SIDEINFO_ALLIANCE","Persatuan");
define("SIDEINFO_ALLY_FORUM","Forum persatuan");


//======================================================//
//================ UNITS  ================//
//======================================================//

//HERO
define("U0","HERO");

//ROMAN UNITS
define("U1","Legionnaire");
define("U2","Praetorian");
define("U3","Imperian");
define("U4","Equites Legati");
define("U5","Equites Imperatoris");
define("U6","Equites Caesaris");
define("U7","Battering Ram");
define("U8","Fire Catapult");
define("U9","Senator");
define("U10","Settler");

//TEUTON UNITS
define("U11","Clubswinger");
define("U12","Spearman");
define("U13","Axeman");
define("U14","Scout");
define("U15","Paladin");
define("U16","Teutonic Knight");
define("U17","Ram");
define("U18","Catapult");
define("U19","Chief");
define("U20","Settler");

//GAUL UNITS
define("U21","Phalanx");
define("U22","Swordsman");
define("U23","Pathfinder");
define("U24","Theutates Thunder");
define("U25","Druidrider");
define("U26","Haeduan");
define("U27","Ram");
define("U28","Trebuchet");
define("U29","Chieftain");
define("U30","Settler");

//HOKAGE UNITS
define("U31","Hashirama Senju");
define("U32","Tobirama Senju");
define("U33","Hiruzen Sarutobi");
define("U34","Minato Namikaze");
define("U35","Tsunade");
define("U36","Danzō Shimura");
define("U37","Kizashi Haruno");
define("U38","Kakashi Hatake");
define("U39","Naruto Uzumaki");
define("U40","Jiraiya");

//AKATSUKI UNITS
define("U41","Pain");
define("U42","Deidara");
define("U43","Konan");
define("U44","Itachi Uchiha");
define("U45","Zetsu");
define("U46","Orochimaru");
define("U47","Kisame Hoshigaki");
define("U48","Kakuzu");
define("U49","Sasori");
define("U50","Uchiha Madara");

//INDEX.php ~ edit Ujang
define("LOGIN","Masuk");
define("PLAYERS","Pemain);
define("ONLINE","Onlineن");
define("TUTORIAL","Panduan");
define("PLAYER_STATISTICS","Player statistics");
define("TOTAL_PLAYERS","JUMLAH ".PLAYERS."");
define("ACTIVE_PLAYERS","Pemain Aktif");
define("ONLINE_PLAYERS","".PLAYERS." Online");
define("MP_STRATEGY_GAME","".SERVER_NAME." - the multiplayer strategy game");
define("WHAT_IS","".SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","Register here for free!");
define("LATEST_GAME_WORLD","Latest game world");
define("LATEST_GAME_WORLD2","Register on the latest<br/>game world and enjoy<br/>the advantages of<br/>being one of the<br/>first players.");
define("PLAY_NOW","PLAY NOW".SERVER_NAME."");
define("LEARN_MORE","Learn more <br/>about ".SERVER_NAME."!");;
define("COMUNITY","Komuniti");
define("NEWS","Beritaر");
define("SCREENSHOTS","Screenshots");
define("LOGIN_TO","Log in to ". SERVER_NAME);
define("REGIN_TO","Register in ". SERVER_NAME);
define("P_ONLINE","Players online: ");
define("P_TOTAL","Players in total: ");
define("CHOOSE","Please choose a server.");
define("STARTED"," The server started ". round((time()-COMMENCE)/86400) ." days ago.");


//ATTACKS ETC. edit ~ujang
define("TROOP_MOVEMENTS","Menghantar Askar:");
define("ARRIVING_REINF_TROOPS","Ketibaan Pengukuhan Tentera");
define("ARRIVING_REINF_TROOPS_SHORT","Membantu");
define("OWN_ATTACKING_TROOPS","Menyerang kampung-kampungه");
define("ARRIVING_ATTACKING_TROOPS","Pergerakan tentera musuh.");
define("ATTACK","حمله");
define("OWN_REINFORCING_TROOPS","Membantu Kampung");
define("TROOPS_DORF","Askar :");


//404.php
define("NOTHING_HERE","Hoi Cari apa kat sini!");
define("WE_LOOKED","Tiada apa-apa kat sini 404 bilik MAYAT JE ada .");

//HEADER.TPL
define("SERVER_TIME","زمان سرور:");
define("HEADER_DAY","روز");
define("HEADER_NIGHT","شب");
define("HEADER_GOLD","سکۀ طلای تراوین");
define("HEADER_SILVER","سکۀ نقرۀ تراوین");
define("HEADER_PLUS","پلاس");
define("HEADER_PLUSMENU","منوی پلاس");
define("HEADER_ADMIN","مدیریت");

//NOTICES
define("REPORT_SUBJECT","موضوع:");
define("REPORT_ATTACKER","مهاجم");
define("REPORT_DEFENDER","مدافع");
define("REPORT_RESOURCES","منابع");
define("REPORT_FROM_VIL","از دهکده‌ی");
define("REPORT_FROM_ALLY","از اتحاد");
define("REPORT_SENT","فرستاده شده");
define("REPORT_SENDER","فرستنده");
define("REPORT_RECEIVER","گیرنده");
define("REPORT_AT","در");
define("REPORT_TO","به");
define("REPORT_SEND_RES","منابع می‌فرستد");
define("REPORT_DEL_BTN","حذف گزارش");
define("REPORT_DEL_QST","واقعاً گزارش حذف شود؟");
define("REPORT_WARSIM","شبیه ساز جنگی");
define("REPORT_ATK_AGAIN","تکرار حمله");
define("REPORT_TROOPS","لشکریان");
define("REPORT_REINF","نیروی کمکی");
define("REPORT_CASUALTIES","تلفات");
define("REPORT_INFORMATION","اطلاعات");
define("REPORT_BOUNTY","غنائم");
define("REPORT_CLOCK","مدت زمان");
define("REPORT_UPKEEP","غذای مصرفی");
define("REPORT_PER_HOURS","در ساعت");
define("REPORT_SEND_REINF_TO","نیروی کمکی ارسال کرد به");

//MASSMESSAGE.php
define("MASS","متن پیغام");
define("MASS_SUBJECT","موضوع:");
define("MASS_COLOR","رنگ:");
define("MASS_REQUIRED","همه قسمت ها الزامی است");
define("MASS_UNITS","Images (units):");
define("MASS_SHOWHIDE","Show/Hide");
define("MASS_READ","Read this: after adding smilie, you have to add left or right after number otherwise image will won't work");
define("MASS_CONFIRM","تایید");
define("MASS_REALLY","آیا میخواهید ارسال کنید");
define("MASS_ABORT","ارسال نشد");
define("MASS_SENT","ارسال شد");


?>
