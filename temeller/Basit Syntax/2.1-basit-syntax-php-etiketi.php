<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2.1 - Basit Yazım Kuralları (Syntax) - PHP Etiketi</title>
</head>
<body>
<?php
// 1. PHP Tag (PHP Etiketi)
/**
 * 1.1 PHP Etiketi Nedir ve Kullanımı
 *
 * Apache serverimiz php dosyalarını compile ederken php dosyalarında kodları görebilmesi için php etiketlerini arar.
 * Bu etiketler <?php ?> şu şekildedir.
 * <?php : Bu etkiketi php yorumlayıcı tarafından başlangıç olarak kabul edilir. PHP kodlarımızı yazmadan önce bu etiketi kullanmalıyız.
 * ?> : Bu etiketi php yorumlayıcı tarafından bitiş olarak kabul edilir. Bu yüzden PHP kodlarımız bittikten sonra bu etiketi kullanmalıyız.
 *
 * Örnek kullanım;
 *
 * <?php
 *  echo "Merhaba Dünya";
 * ?>
 *
 * 1.2 Kısa PHP Etiketi
 * Html dosyalarının içinde de php etiketi kullanabiliyoruz. Bu dosyayı okuyanlar zaten bu duruma şahit olacaktır. :)
 * Kısa PHP Etiketi şu şekilde kullanılır: <? ?>
 * Evet gördüğünüz gibi baya kısa html dosyalarında çok faydası olacaktır. Lakin bunu kullanabilmek için
 * php ayarlarınızdan "short_open_tag" bunu aktif hale getirmeniz gerekmektedir.
 * Aktif hale getirebilmek için php.ini dosyasından "short_open_tag" bu değeri aratıp şöyle ayarlayın;
 * short_open_tag = On
 *
 * Örnek kullanım
 * <?
 *  echo "Merhaba Dünya"
 * ?>
 *
 * 1.3 PHP Etiketi Hakkında Püf Noktalar
 * Eğer saf bir php dosyanız varsa, php kapatma etiketi (?>) kullanmayabilirsiniz.
 * Bunun bir çok nedeni vardır bunlar sırasıyla;
 * 1. Her saf php penceresi başına 1 satırlık kazanç elde edebilirsiniz. Buda dosya boyutu açısından iyidir.
 * 2. Etiketi kapattıktan sonra eğer bir boşluk olursa sistem bunu html olarak görecektir ve sayfanıza yanlışlıkla
 * boşluk filan ekleyebilir.
 *
 * Not: Php etiketi açıldıktan sonra etiketi kapatmadan tekrardan etiket açamazsanız;
 * Örnek Yanlış Kullanım
 * <?php
 * <?php
 * ?>
 * ?>
 *
 * Örnek doğru kullanım
 * <?php
 * ?>
 * <?php
 * ?>
 *
 * Aşağıya bakarak canlı kullanım örneklerini görebilirsiniz.
 */
?>

<b>PHP Etiket Örneği</b><br />
<?php
echo "Merhaba Dünya";
?>
<br /><br />
<b>PHP Kısa Etiket Örneği</b><br />
<?
echo "Merhaba Dünya"
?>
<br /><br />
<b>PHP Etiket İçinde Etiket Açma Örneği</b><br/>
<?php
echo "Merhaba ";
?>
<?php
echo "Dünya";
?>
</body>
</html>