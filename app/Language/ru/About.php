<?php
/**
 * Help/about page messages for the CodeIgniter website
 * The text blocks use markdown format.
 */
$wiseMenIntro = <<<'EOS'
Проект CodeIgniter имеет помощь от нескольких разработчиков, чтобы контролировать дальнейшее развитие CodeIgniter 3 и выдвинуть фреймворк на следующий уровень, CodeIgniter 4.
EOS;


$hatsOffToThese = <<<'EOS'
Мы благодарны за прошлые вклады сообщества.

Совет: Андреас Пфотенхауэр (Германия), Давид Возница (Германия) и 
Йоханнес Гамперль (Германия).

Фонд: Альберт Леао (США), Брайан Готье (США), Дэйв Френд, Парадинайт, 
Пертти Суман, php_rocs и sv3tli0 (Болгария)

Логотип: Филипп Люсидарм (Франция)

Безопасность: Дебас Моханти (Новая Зеландия)

Вебсайт: Лонни Эзелл (США), Михал Снятала (Польша) и Раймонд Кинг (США).

Спасибо, а также, всем членам сообщества, которые внесли конструктивные предложения по улучшению дизайна и удобства использования сайта и тем, кто сообщил об уязвимостях !
EOS;

return [
	'title'		 => 'О CodeIgniter',
	'wiseTitle'	 => 'Разработчики',
	'wiseText'	 => $wiseMenIntro,
	'ackTitle'	 => 'Выражение благодарности',
	'ackText'	 => $hatsOffToThese,
];
