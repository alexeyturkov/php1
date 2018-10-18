<?php
$filename = "reg.txt"; 
$arr = file($filename);

$filename1 = "log.txt"; 
$date = date("d.m.Y H:i:s");
$log = fopen($filename1, "a");


if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['surname']) || empty($_POST['psw']) || empty($_POST['rpsw'])) { 

    $result = "Регистрация не завершена. Не все поля заполнены.";
    

    $log = fopen($filename1, "a");
    fwrite($log, $date."  error\r\n");
    fclose($log);


} elseif (($_POST['psw'] != $_POST['rpsw'])) {
      $result = 
       "Регистрация не завершена. Пароли должны совпадать";
       
} else { 
  
  if(!preg_match("|^[0-9a-z_-]+@[0-9a-z_^\.]+\.[a-z]{2,6}$|i", $_POST['email'])){
     
      $result = "Регистрация не завершена. Поле 'Почта' должно соответствовать формату somebody@somewhere.ru"; 

} else {
   
     foreach($arr as $line) {
          $data = explode("::",$line);
          $temp[] = $data[3];
        }  
       
      if(in_array($_POST['email'], $temp)) {
   
           $result = "Данный email уже зарегистрирован";
    
    fwrite($log, $date."  error\r\n");
    fclose($log);

} else {
   
              $fd = fopen($filename, "a");
              $str = $_POST['name']."::".
              $_POST['surname']."::".
              $_POST['psw']."::".
              $_POST['email']."::"."\r\n";
              
              
              fwrite($fd,$str);
              fclose($fd);

              $result = "Регистрация прошла успешно";
    
              
              fwrite($log, $date."  success\r\n");
              fclose($log);
}
}
} 
 echo json_encode($result); 


?>
