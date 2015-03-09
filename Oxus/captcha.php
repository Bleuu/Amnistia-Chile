<?php
if(!defined('BASE'))
    define('BASE', '');
$options = array(
    0 => array(
        'name' => '¿Qué imagen es un candado? (*)',
        'value' => '<img src="'.BASE.'img/ico_1.png">'
    ),
    1 => array(
        'name' => '¿Qué imagen es una cámara fotográfica? (*)',
        'value' => '<img src="'.BASE.'img/ico_2.png">'
    ),
    2 => array(
        'name' => '¿Qué imagen es un globo terraqueo? (*)',
    'value' => '<img src="'.BASE.'img/ico_3.png">'
    ),
    3 => array(
        'name' => '¿Qué imagen es una lupa? (*)',
    'value' => '<img src="'.BASE.'img/ico_4.png">'
    ),
    4 => array(
        'name' => '¿Qué imagen es una llave? (*)',
        'value' => '<img src="'.BASE.'img/ico_5.png">'
    ),
    5 => array(
        'name' => '¿Qué imagen es un televisor? (*)',
        'value' => '<img src="'.BASE.'img/ico_6.png">'
    )
);
shuffle($options);
$random_options = array_slice($options, 0 , 3);
$rand = rand(0,2);
$impar = array(3,5,7,9);
$par = array(2,4,6,8);
echo '<p class="like_label">'.$random_options[$rand]['name'].'</p>';
foreach($random_options as $k => $option){
    echo '<label class="sel">';
    if($k == $rand){
        shuffle($par);
        $val = array_pop($par);
        echo '<input name="Captcha" id="data[Contact][captcha]" type="radio" class="captcha" value="'.$val.'">';
    }else{
        shuffle($impar);
        $val = array_pop($impar);
        echo '<input name="Captcha" id="data[Contact][captcha]" type="radio" class="captcha" value="'.$val.'">';
    }
    echo $option['value'];
    echo '</label>';
}
?>