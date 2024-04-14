<?php
$my_name = htmlspecialchars($_POST['my_name'], ENT_QUOTES);
print "私の名前は、" . $my_name;
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
print "ご希望の商品は、" . $choices;
$number = htmlspecialchars($_POST['number'], ENT_QUOTES);
print "注文数は" . $number;
