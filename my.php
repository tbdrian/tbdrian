<?php

//TRIBES
define("TRIBE1","Roman"); 
define("TRIBE2","Teuton");
define("TRIBE3","Gaul"); 
define("TRIBE4","Hokage"); 
define("TRIBE5","Akatsuki");
define("TRIBE6","Monsters");


//MAIN MENU
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
define("LOGIN_WELCOME","Selamat Datang di ".SERVER_NAME." versi Beta.");
define("LOGIN_NO_JAVASCRIPT","anda telah mematikan JavaScript di pelayar anda. Untuk dapat bermain, anda perlu mengaktifkan JavaScript dalam pelayar anda semula.");
define("LOGIN_USERNAME","Nama Samaran");
define("LOGIN_PASSWORD","Kata Laluan");
define("LOGIN_LOWRES_OPTION","Editing for players");
define("LOGIN_LOWRES_DESC","With less bandwidth (speed less)");
define("LOGIN_LOWRES_NOTICE","(Note: All options may not edit map)");
define("LOGIN_PW_FORGOTTEN","Lupa kata laluan?");
define("LOGIN_PW_EMAIL","Email:");
define("LOGIN_PW_BTN","Kata laluan");
define("LOGIN_PW_REQUEST","We will send you a new password. Once you receive a confirmation code will be active.");
define("LOGIN_PW_SENT","Satu e-mel yang mengandungi kata laluan baru dihantar ke email anda");
define("LOGIN_SERVER_START","The game has not started yet. You are able to play in");
define("LOGIN_SERVER_START2","Menjadi.");
define("PW_GENERATE","All fields are mandatory");
define("EMAIL_NOT_VERIFIED","E-mel yang belum disahkan");
define("EMAIL_FOLLOW","Klik pada pautan ini untuk mengaktifkan akaun anda");
define("VERIFY_EMAIL","E-mel disahkan");
define("COOKIES","To enter, you must enable cookies. If your computer is shared with other people, you should exit the log (EXIT) button.");


//LOGOUT.php
define("LOGOUT_TITLE","Anda telah berjaya keluar");
define("LOGOUT_H4","Terima kasih untuk lawatan anda.");
define("LOGOUT_DESC","Jika orang lain juga menggunakan komputer ini, anda perlu memadam cookies anda untuk memperoleh keselamatan:");
define("LOGOUT_LINK","Cookies anda dipadam");


//REGISTER
define("REGISTER_USERINFO","Maklumat Pengguna");
define("REGISTER_USERNAME","Nama Samaran:");
define("REGISTER_EMAIL","Email:");
define("REGISTER_LOCATION","Lokasi");
define("REGISTER_RANDOM","Pilih secara rawak");
define("REGISTER_NW","Barat Laut");
define("REGISTER_NE","Timur Laut");
define("REGISTER_SW","Barat Daya");
define("REGISTER_SE","Tenggara");
define("ACCEPT_RULES"," Saya telah membaca dan bersetuju dengan peraturan yang ditetapkan.");
define("REGISTER_MOREINFO","Maklumat lanjut");
define("REGISTER_PASSWORD","Kata Laluan:");
define("REGISTER_SELECT_TRIBE","Pilih Puak");
define("BEFORE_REGISTER","Sebelum anda mendaftar, Sila ke pautan <a href='../anleitung.php' target='_blank'>BANTUAN</a> untuk membaca Kebaikan dan keburukan antara ketiga-tiga puak.");
define("REGISTER_STARTER","Jika anda pemain baru di TBDrian sila baca terlebih dahulu di laman <a href='../anleitung.php' target='_blank'>Bantuan</a>.");


//CONTACT.PHP
define("CONTACT_DESC","Anda boleh menggunakan borang di bawah untuk menghantar permintaan anda untuk menyokong. Sila jawab soalan-soalan pada borang tersebut dan masukkan butiran sebaik sahaja kami dapat membantu anda.");
define("CONTACT_CATEGORY","kategori");
define("CONTACT_SELECT_SUBJECT","Sila pilih");
define("CONTACT_SUBJECT1","soalan umum");
define("CONTACT_SUBJECT2","Saya tidak boleh masuk ke akaun saya.");
define("CONTACT_SUBJECT3","Saya tidak dapat mendaftar");
define("CONTACT_SUPPORT","sokongan pelayan");
define("CONTACT_USERNAME","Nama Pengguna");
define("CONTACT_USER_NOT_EXIST","Nama pengguna ini tidak berdaftar.");
define("CONTACT_EMAIL","E-mel");
define("CONTACT_MESSAGE","Mesej");
define("CONTACT_SEND","Hantar");
define("CONTACT_SENT","Berjaya dihantar.");


//ERRORS
define("USRNM_EMPTY","(Is empty)");
define("USRNM_TAKEN","(Is already in use.)");
define("USRNM_SHORT","(At least ".USRNM_MIN_LENGTH." Letter)");
define("USRNM_CHAR","(The wrong characters)");
define("PW_EMPTY","(Is empty)");
define("PW_SHORT","(At least ".PW_MIN_LENGTH." Letter)");
define("PW_INSECURE","(Invalid password, select a different password)");
define("EMAIL_EMPTY","(Is empty)");
define("EMAIL_INVALID","(Is wrong)");
define("EMAIL_NOTEXIST","This email does not exist.");
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


//BUILD.TPL
define("CUR_PROD","Pengeluaran Semasa");
define("NEXT_PROD","Pengeluaran Di­ ");
define("BUILDING_UPGRADING","Bangunan:");
define("HOURS","Jam");


//WARSIM.TPL
define("WARSIM","Combat Simulator");
define("WARSIM_ATTACKER","Attackers");
define("WARSIM_DEFENDER","Defender");
define("WARSIM_ETC","Etc.");

define("WARSIM_POP","The population of");
define("WARSIM_KATA","Target level of Catapult");
define("WARSIM_HEROPOWER","Hero (Markah Serangan)");
define("WARSIM_STONEMASON","Masonry");
define("WARSIM_PALACE","Rumah / Residence");

//BUILDINGS
define("B1","هیزم شکن");
define("B1_DESC","هیزم شکن چوب تولید میکند. هرچقدر که بیشتر ارتقا داده شود چوب بیشتری تولید میکند");
define("B2","آجر سازی");
define("B2_DESC","در اینجا آجر خام (خشت) ساخته می شود. هر قدر سطح این ساختمان بالاتر باشد تولید این محصول بیشتر خواهد شد.");
define("B3","معدن آهن");
define("B3_DESC","در اینجا معدنچیان، به تولید آهن می پردازند. هر قدر که سطح معدن بالاتر باشد، آهن بیشتری تولید خواهد شد.");
define("B4","گندمزار");
define("B4_DESC","غذای مصرفی مردم در اینجا تولید می شود که با وسعت دادنش توليد محصول بیشتر می شود");

//DORF1
define("LUMBER","Kayu");
define("CLAY","Tanah Liat");
define("IRON","Besi");
define("CROP","Tanaman");
define("LEVEL","Tahap­");
define("CROP_COM",CROP." مصرفی");
define("PER_HR","در ساعت");
define("PROD_HEADER","تولیدات");
define("MULTI_V_HEADER","دهکده ها");
define("ANNOUNCEMENT","اعلانات");
define("GO2MY_VILLAGE","بازگشت به دهکده");
define("VILLAGE_CENTER","مرکز دهکده");
define("FINISH_GOLD","آِیا میخواهید کارهای این دهکده را با 2طلا به اتمام برسانید؟");
define("WAITING_LOOP","(نوبت ساخت)");
define("HRS","(ساعت)");
define("DONE_AT","اتمام در");
define("CANCEL","انصراف");
define("LOYALTY","وفاداری:"); 
define("SEVER_TIME","زمان سرور:");
define("SIDEINFO_CHANGEVIL_BTN","ذخیره"); 
define("SIDEINFO_CHANGEVIL_LABEL","نام جدید دهکده:"); 
define("SIDEINFO_CHANGEVIL_TITLE","تغییر نام دهکده"); 
define("SIDEINFO_CHANGE_TITLE","برای تغییر نام دهکده دوبار کلیک (دوبل کلیک) کنید."); 
define("SIDEINFO_ADVENTURES","ماجراجویی"); 
define("SIDEINFO_AUCTIONS","حراجی"); 
define("SIDEINFO_PROFILE","پروفایل");
define("SIDEINFO_ALLIANCE","اتحاد");
define("SIDEINFO_ALLY_FORUM","فروم اتحاد");


//======================================================//
//================ UNITS - DO NOT EDIT! ================//
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

//INDEX.php
define("LOGIN","ورود");
define("PLAYERS","بازیکنان");
define("ONLINE","آنلاین");
define("TUTORIAL","آموزش");
define("PLAYER_STATISTICS","آمار بازیکنان");
define("TOTAL_PLAYERS","مجموع ".PLAYERS."");
define("ACTIVE_PLAYERS","بازیکنان فعال");
define("ONLINE_PLAYERS","".PLAYERS." آنلاین");
define("MP_STRATEGY_GAME","".SERVER_NAME." - بازی اینترنتی - رومی ها، گول ها و توتن ها");
define("WHAT_IS","".SERVER_NAME." is one of the most popular browser games in the world. As a player in ".SERVER_NAME.", you will build your own empire, recruit a mighty army, and fight with your allies for game world hegemony.");
define("REGISTER_FOR_FREE","رایگان عضو شوید");
define("LATEST_GAME_WORLD","آخرین جهان های بازی");
define("LATEST_GAME_WORLD2","در آخرین<br/>جهان بازی<br/>عضو شوید<br/>و تلاش کنید<br/>برای اول شدن.");
define("PLAY_NOW","بازی کردن ".SERVER_NAME."");
define("LEARN_MORE","اطلاعات بیشتر <br/>درباره ".SERVER_NAME."!");
define("COMUNITY","اجتماع");
define("NEWS","اخبار");
define("SCREENSHOTS","تصاویر");
define("LOGIN_TO","ورود به ". SERVER_NAME);
define("REGIN_TO","عضویت در ". SERVER_NAME);
define("P_ONLINE","بازیکنان آنلاین: ");
define("P_TOTAL","مجموع بازیکنان: ");
define("CHOOSE","لطفا یک سرور انتخاب کن");
define("STARTED"," این سرور ". round((time()-COMMENCE)/86400) ." روز قبل شروع شده است");


//ATTACKS ETC.
define("TROOP_MOVEMENTS","حرکت لشکریان:");
define("ARRIVING_REINF_TROOPS","رسیدن نیروی کمکی");
define("ARRIVING_REINF_TROOPS_SHORT","نیروی کمکی");
define("OWN_ATTACKING_TROOPS","حملات از دهکده");
define("ARRIVING_ATTACKING_TROOPS","حرکت نیروهای دشمن");
define("ATTACK","حمله");
define("OWN_REINFORCING_TROOPS","نیروی کمکی در دهکده");
define("TROOPS_DORF","لشکریان:");


//404.php
define("NOTHING_HERE","اینجا چیزی موجود نیست!");
define("WE_LOOKED","ما 404 بار نگاه کردیم اما هیچی پیدا نکردیم!");

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
