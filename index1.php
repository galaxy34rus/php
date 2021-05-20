<?php
   header('Content-Type: text/html; charset=utf-8');
   $a =  "fifth suspect has been arrested in connection with the audacious heist in which around 100 of Europe's most priceless treasures were stolen from the Green Vault at Dresden Castle in Germany.
A 22-year-old man was arrested Monday evening at an apartment in Berlin, according to Jürgen Schmidt, senior public prosecutor and spokesman for the Dresden public prosecutor's office.
The suspect could face charges of aggravated gang theft and arson, the Dresden public prosecutor's office said.
He has been publicly wanted since November 17, 2020 and is the fifth and final suspect police were searching for in connection to the heist, although the investigation remains ongoing.
Three arrested in connection with elaborate Dresden treasure heist
Around 100 items were stolen in November 2019 when thieves gained access to the Green Vault, which houses one of the largest collections of masterpieces on the continent.";

   $link = "https://edition.cnn.com/style/article/fifth-arrest-dresden-heist-scli-intl-grm/index.html";

   echo $a;
   echo "<br />"; echo "<br />";

   $a_cut = mb_substr($a, 0 , 180); //сокращаем строку до 180 символов
   $a_cut = $a_cut."..."; // добавляем к строке многточие
   echo "<br />"; echo "<br />";
   echo "<br />"; echo "<br />";
   // для того, что сделать последние два слова и многоточие кликабельным, выделим необходимую нам часть текста, преобразуем в гиперссылку, а затем заменим в исходной строке.
   $array = explode(" ", $a_cut); // разделяем строку на массив, каждый элемент которого является одним словом из строки
   $count = count($array); // считаем сколько получилось элементов
   $cutted_str = $array[$count-3]." ".$array[$count-2]." ".$array[$count-1]; // создаём строку, состоящую из последних двух слов и многоточия для преобразования в гиперссылку
   $count_two_words = strlen($cutted_str); // считаем сколько символов необходимо удалить из обрезанной до 180 символов строки a_cut
   $a_cut = mb_substr($a_cut, 0, 183-$count_two_words); // удаляем требуемое количество символов из строки a_cut
   $b = $a_cut.'<a href=".$link.">'.$cutted_str.'</a>'; // объединяем строку /в которой убрали последние два слова и многотичие/ и гиперссылку.
   echo "$b"; // выводим на экран.
   /*
   Проблемы: возникают проблемы при сокращении строки до 180 символов, если используется кириллица.
   */
?>