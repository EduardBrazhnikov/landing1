<?php
if((isset($_POST['telephone']) && !empty($_POST['telephone']))){
$to = "edikbrazhnikov@gmail.com";
$from = 'klient@com.ua';
$subject = "Заказ звонка";
$message = 'Телефон: '.$_POST['telephone'].';';
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <klient@com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);
    if ($result){ 
         $otvet = json_encode(array('text' => 'Спасибо! Мы свяжемся с вами.'));
		 echo $otvet;
    }
    else{
         $otvet = json_encode(array('text' => 'Возникла ошибка при отправке данных'));
        echo $otvet;
    }
	}
elseif ((isset($_POST['name1']) && !empty($_POST['name1']))
	&& (isset($_POST['telephone1']) && !empty($_POST['telephone1']))
	&& (isset($_POST['idProdukt1']) && !empty($_POST['idProdukt1']))) {
$to = "edikbrazhnikov@gmail.com";
$from = 'klient@com.ua';
$subject = "Заказ товара";
$message = 'Имя - ' . $_POST['name1'] . '<br>' . 'Телефон: ' . $_POST['telephone1'] . '<br>' . 'Товар - ' . $_POST['idProdukt1'] . '<br>' . 'Комментарий - ' . $_POST['coment1'];
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <klient@com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);
    if ($result){ 
         $otvet = json_encode(array('text1' => 'Спасибо! Мы свяжемся с вами.'));
		 echo $otvet;
    }
    else{
         $otvet = json_encode(array( 'text1' => 'Возникла ошибка при отправке данных'));
        echo $otvet;
    }
	}
elseif ((isset($_POST['name2']) && !empty($_POST['name2']))
	&& (isset($_POST['telephone2']) && !empty($_POST['telephone2']))
	&& (isset($_POST['idProdukt2']) && !empty($_POST['idProdukt2']))) {
$to = "edikbrazhnikov@gmail.com";
$from = 'klient@com.ua';
$subject = "Заказ товара";
$message = 'Имя - ' . $_POST['name2'] . '<br>' . 'Телефон: ' . $_POST['telephone2'] . '<br>' . 'Товар - ' . $_POST['idProdukt2'] . '<br>' . 'Комментарий - ' . $_POST['coment2'];
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <klient@com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);
    if ($result){ 
         $otvet = json_encode(array('text2' => 'Спасибо! Мы свяжемся с вами.'));
		 echo $otvet;
    }
    else{
         $otvet = json_encode(array( 'text2' => 'Возникла ошибка при отправке данных'));
        echo $otvet;
    }
	}
elseif ((isset($_POST['name3']) && !empty($_POST['name3']))
	&& (isset($_POST['telephone3']) && !empty($_POST['telephone3']))
	&& (isset($_POST['idProdukt3']) && !empty($_POST['idProdukt3']))) {
$to = "edikbrazhnikov@gmail.com";
$from = 'klient@com.ua';
$subject = "Заказ товара";
$message = 'Имя - ' . $_POST['name3'] . '<br>' . 'Телефон: ' . $_POST['telephone3'] . '<br>' . 'Товар - ' . $_POST['idProdukt3'] . '<br>' . 'Комментарий - ' . $_POST['coment3'];
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <klient@com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);
    if ($result){ 
         $otvet = json_encode(array('text3' => 'Спасибо! Мы свяжемся с вами.'));
		 echo $otvet;
    }
    else{
         $otvet = json_encode(array( 'text3' => 'Возникла ошибка при отправке данных'));
        echo $otvet;
    }
	}
elseif ((isset($_POST['name4']) && !empty($_POST['name4']))
	&& (isset($_POST['telephone4']) && !empty($_POST['telephone4']))
	&& (isset($_POST['idProdukt4']) && !empty($_POST['idProdukt4']))) {
$to = "edikbrazhnikov@gmail.com";
$from = 'klient@com.ua';
$subject = "Заказ товара";
$message = 'Имя - ' . $_POST['name4'] . '<br>' . 'Телефон: ' . $_POST['telephone4'] . '<br>' . 'Товар - ' . $_POST['idProdukt4'] . '<br>' . 'Комментарий - ' . $_POST['coment4'];
$headers = "Content-type: text/html; charset=UTF-8 \r\n";
$headers .= "From: <klient@com.ua>\r\n";
$result = mail($to, $subject, $message, $headers);
    if ($result){ 
         $otvet = json_encode(array('text4' => 'Спасибо! Мы свяжемся с вами.'));
		 echo $otvet;
    }
    else{
         $otvet = json_encode(array( 'text4' => 'Возникла ошибка при отправке данных'));
        echo $otvet;
    }
	}
	?>
	
