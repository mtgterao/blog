<?php
/**
* Localeのmoファイル生成用の定義
*  タイムゾーン系統一覧
*/

/* 一旦他の他言語化が終わるまでコメントアウト

// 大項目
__('Africa');
__('America');
__('Antarctica');
__('Arctic');
__('Asia');
__('Atlantic');
__('Australia');
__('Europe');
__('Indian');
__('Pacific');
__('UTC');

// 各首都一覧
__('Abidjan');
__('Accra');
__('Addis_Ababa');
__('Algiers');
__('Asmara');
__('Bamako');
__('Bangui');
__('Banjul');
__('Bissau');
__('Blantyre');
__('Brazzaville');
__('Bujumbura');
__('Cairo');
__('Casablanca');
__('Ceuta');
__('Conakry');
__('Dakar');
__('Dar_es_Salaam');
__('Djibouti');
__('Douala');
__('El_Aaiun');
__('Freetown');
__('Gaborone');
__('Harare');
__('Johannesburg');
__('Juba');
__('Kampala');
__('Khartoum');
__('Kigali');
__('Kinshasa');
__('Lagos');
__('Libreville');
__('Lome');
__('Luanda');
__('Lubumbashi');
__('Lusaka');
__('Malabo');
__('Maputo');
__('Maseru');
__('Mbabane');
__('Mogadishu');
__('Monrovia');
__('Nairobi');
__('Ndjamena');
__('Niamey');
__('Nouakchott');
__('Ouagadougou');
__('Porto-Novo');
__('Sao_Tome');
__('Tripoli');
__('Tunis');
__('Windhoek');
__('Adak');
__('Anchorage');
__('Anguilla');
__('Antigua');
__('Araguaina');
__('Argentina Buenos_Aires');
__('Argentina Catamarca');
__('Argentina Cordoba');
__('Argentina Jujuy');
__('Argentina La_Rioja');
__('Argentina Mendoza');
__('Argentina Rio_Gallegos');
__('Argentina Salta');
__('Argentina San_Juan');
__('Argentina San_Luis');
__('Argentina Tucuman');
__('Argentina Ushuaia');
__('Aruba');
__('Asuncion');
__('Atikokan');
__('Bahia');
__('Bahia_Banderas');
__('Barbados');
__('Belem');
__('Belize');
__('Blanc-Sablon');
__('Boa_Vista');
__('Bogota');
__('Boise');
__('Cambridge_Bay');
__('Campo_Grande');
__('Cancun');
__('Caracas');
__('Cayenne');
__('Cayman');
__('Chicago');
__('Chihuahua');
__('Costa_Rica');
__('Creston');
__('Cuiaba');
__('Curacao');
__('Danmarkshavn');
__('Dawson');
__('Dawson_Creek');
__('Denver');
__('Detroit');
__('Dominica');
__('Edmonton');
__('Eirunepe');
__('El_Salvador');
__('Fortaleza');
__('Glace_Bay');
__('Godthab');
__('Goose_Bay');
__('Grand_Turk');
__('Grenada');
__('Guadeloupe');
__('Guatemala');
__('Guayaquil');
__('Guyana');
__('Halifax');
__('Havana');
__('Hermosillo');
__('Indiana Indianapolis');
__('Indiana Knox');
__('Indiana Marengo');
__('Indiana Petersburg');
__('Indiana Tell_City');
__('Indiana Vevay');
__('Indiana Vincennes');
__('Indiana Winamac');
__('Inuvik');
__('Iqaluit');
__('Jamaica');
__('Juneau');
__('Kentucky Louisville');
__('Kentucky Monticello');
__('Kralendijk');
__('La_Paz');
__('Lima');
__('Los_Angeles');
__('Lower_Princes');
__('Maceio');
__('Managua');
__('Manaus');
__('Marigot');
__('Martinique');
__('Matamoros');
__('Mazatlan');
__('Menominee');
__('Merida');
__('Metlakatla');
__('Mexico_City');
__('Miquelon');
__('Moncton');
__('Monterrey');
__('Montevideo');
__('Montreal');
__('Montserrat');
__('Nassau');
__('New_York');
__('Nipigon');
__('Nome');
__('Noronha');
__('North_Dakota Beulah');
__('North_Dakota Center');
__('North_Dakota New_Salem');
__('Ojinaga');
__('Panama');
__('Pangnirtung');
__('Paramaribo');
__('Phoenix');
__('Port-au-Prince');
__('Port_of_Spain');
__('Porto_Velho');
__('Puerto_Rico');
__('Rainy_River');
__('Rankin_Inlet');
__('Recife');
__('Regina');
__('Resolute');
__('Rio_Branco');
__('Santa_Isabel');
__('Santarem');
__('Santiago');
__('Santo_Domingo');
__('Sao_Paulo');
__('Scoresbysund');
__('Shiprock');
__('Sitka');
__('St_Barthelemy');
__('St_Johns');
__('St_Kitts');
__('St_Lucia');
__('St_Thomas');
__('St_Vincent');
__('Swift_Current');
__('Tegucigalpa');
__('Thule');
__('Thunder_Bay');
__('Tijuana');
__('Toronto');
__('Tortola');
__('Vancouver');
__('Whitehorse');
__('Winnipeg');
__('Yakutat');
__('Yellowknife');
__('Casey');
__('Davis');
__('DumontDUrville');
__('Macquarie');
__('Mawson');
__('McMurdo');
__('Palmer');
__('Rothera');
__('South_Pole');
__('Syowa');
__('Vostok');
__('Longyearbyen');
__('Aden');
__('Almaty');
__('Amman');
__('Anadyr');
__('Aqtau');
__('Aqtobe');
__('Ashgabat');
__('Baghdad');
__('Bahrain');
__('Baku');
__('Bangkok');
__('Beirut');
__('Bishkek');
__('Brunei');
__('Choibalsan');
__('Chongqing');
__('Colombo');
__('Damascus');
__('Dhaka');
__('Dili');
__('Dubai');
__('Dushanbe');
__('Gaza');
__('Harbin');
__('Hebron');
__('Ho_Chi_Minh');
__('Hong_Kong');
__('Hovd');
__('Irkutsk');
__('Jakarta');
__('Jayapura');
__('Jerusalem');
__('Kabul');
__('Kamchatka');
__('Karachi');
__('Kashgar');
__('Kathmandu');
__('Kolkata');
__('Krasnoyarsk');
__('Kuala_Lumpur');
__('Kuching');
__('Kuwait');
__('Macau');
__('Magadan');
__('Makassar');
__('Manila');
__('Muscat');
__('Nicosia');
__('Novokuznetsk');
__('Novosibirsk');
__('Omsk');
__('Oral');
__('Phnom_Penh');
__('Pontianak');
__('Pyongyang');
__('Qatar');
__('Qyzylorda');
__('Rangoon');
__('Riyadh');
__('Sakhalin');
__('Samarkand');
__('Seoul');
__('Shanghai');
__('Singapore');
__('Taipei');
__('Tashkent');
__('Tbilisi');
__('Tehran');
__('Thimphu');
__('Tokyo');
__('Ulaanbaatar');
__('Urumqi');
__('Vientiane');
__('Vladivostok');
__('Yakutsk');
__('Yekaterinburg');
__('Yerevan');
__('Azores');
__('Bermuda');
__('Canary');
__('Cape_Verde');
__('Faroe');
__('Madeira');
__('Reykjavik');
__('South_Georgia');
__('St_Helena');
__('Stanley');
__('Adelaide');
__('Brisbane');
__('Broken_Hill');
__('Currie');
__('Darwin');
__('Eucla');
__('Hobart');
__('Lindeman');
__('Lord_Howe');
__('Melbourne');
__('Perth');
__('Sydney');
__('Amsterdam');
__('Andorra');
__('Athens');
__('Belgrade');
__('Berlin');
__('Bratislava');
__('Brussels');
__('Bucharest');
__('Budapest');
__('Chisinau');
__('Copenhagen');
__('Dublin');
__('Gibraltar');
__('Guernsey');
__('Helsinki');
__('Isle_of_Man');
__('Istanbul');
__('Jersey');
__('Kaliningrad');
__('Kiev');
__('Lisbon');
__('Ljubljana');
__('London');
__('Luxembourg');
__('Madrid');
__('Malta');
__('Mariehamn');
__('Minsk');
__('Monaco');
__('Moscow');
__('Oslo');
__('Paris');
__('Podgorica');
__('Prague');
__('Riga');
__('Rome');
__('Samara');
__('San_Marino');
__('Sarajevo');
__('Simferopol');
__('Skopje');
__('Sofia');
__('Stockholm');
__('Tallinn');
__('Tirane');
__('Uzhgorod');
__('Vaduz');
__('Vatican');
__('Vienna');
__('Vilnius');
__('Volgograd');
__('Warsaw');
__('Zagreb');
__('Zaporozhye');
__('Zurich');
__('Antananarivo');
__('Chagos');
__('Christmas');
__('Cocos');
__('Comoro');
__('Kerguelen');
__('Mahe');
__('Maldives');
__('Mauritius');
__('Mayotte');
__('Reunion');
__('Apia');
__('Auckland');
__('Chatham');
__('Chuuk');
__('Easter');
__('Efate');
__('Enderbury');
__('Fakaofo');
__('Fiji');
__('Funafuti');
__('Galapagos');
__('Gambier');
__('Guadalcanal');
__('Guam');
__('Honolulu');
__('Johnston');
__('Kiritimati');
__('Kosrae');
__('Kwajalein');
__('Majuro');
__('Marquesas');
__('Midway');
__('Nauru');
__('Niue');
__('Norfolk');
__('Noumea');
__('Pago_Pago');
__('Palau');
__('Pitcairn');
__('Pohnpei');
__('Port_Moresby');
__('Rarotonga');
__('Saipan');
__('Tahiti');
__('Tarawa');
__('Tongatapu');
__('Wake');
__('Wallis');
__('UTC');

*/
