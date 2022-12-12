<!-- <?php
print('Привет, мир!');
?> -->

<!-- <?php
echo 'Это ';
echo 'PHP ';
echo 'код ';
?> -->


<!-- <?php
# Это комментарий
echo 'Это рабочий код. ';

// Это тоже комментарий
echo 'А это второй вывод на экран! ';
?> -->

<!-- Переменные идут после знака $ -->

<!-- <?php
$name = 'Светлана';
echo $name;
?> -->

<!-- <?php
class User {
   public $name;
   public $date;

   public function show() 
   {
    echo $this->name, ' ', $this->date;
   }
}

$alevtina = new User;
$alevtina->name = 'Алевтина';
$alevtina->date = 10;
$alevtina->show(); //Алевтина 10 

?> -->

<!-- <?php
$name = 123;
echo $name;
?> -->

<!-- Задача №1: сформировать массив с данными для блока «Опыт работы».
Вывести данные массива в HTML-шаблоне.

UPDATE: И сохраняйте потом результат лучше в txt файле - 
что-то после CTRL+S не особо хочет показывать 
итоговую работу, как то совсем неудобно. -->

<?php 
$name = 'Иннокентий';
$nab=[97,83,70,80];
$num = 89037778866;
$prof = 'Дизайнер';
$city='Москва, Россия';
$pochta = 'email@email.com';
$career = ['Контент-менеджер', 'Директор торговой компании', 'Специалист по работе с клиентами в ПАО СБЕРБАНК'];
$website = ['Больше 500 сайтов', 'fr.shop-orchestra.com', 'sberbank.ru'];
$date1 = ['Jan 2015', 'Mar 2006', 'Jun 2000'];
$date2 = ['Current', 'Dec 2014', 'Mar 2006'];
$specification = ['Создание, редакция и публикация материалов компании в интернет пространстве', 'Решение всех вопросов хозяйственного, административного и финансового плана, связанные с деятельностью учреждения.', 'Консультация клиентов и сотрудников Сбера, в корпоративных мессенджерах или по телефону. Помощь клиентам решать вопросы по продуктам банка. Помощь клиентам с оформлением и совершением транзакционных операций в рамках запроса'];

?>
<!DOCTYPE html>
<html>
  <head>
    <title>Мое резюме</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=LZR1QZEocCJVJniYh09oGHZJRuv5r-WPCVwPZA59o22Z-6Bn4RfF6IZzryNB6--UFGDxfyQHqaTDYqep_s8ZymullBLbZx1hZ9D4kYagODHXlZNVHxd1LSWx9ITyKy2we5Y77cZkPKeSFKM46vTWaSLm3m1e2-IuYlZ5ii5LrsW3iT-F6BPp8h9A67yKdyHwIoZ628wNJQASbToIBUqLMDlvsD5qBC5v9GuPavYoCLrsP37GsrLs5wWSwa36FZU-XlqemGq3fUUTTBXje5zqy6ODcLVynX9kZsB-UVxBMAYOfAjyEtcWcNhAf0PTsfqFQtfIyyUaLde-y3Q9dXlz5Krn3t1XNJDqYRKTXP1hYt5dCRnrOqKv7jU90O1n-iHp80jrEupf4h-WO4gVGw6MpK0RkCO2M1vII48w1lk8PLW872wO6HwxcUHiqpaTfMlnEoN-jQyMkIAY9n6_WQUjwbyaUYeneUOh6ryU1lvASNwY34Xx-1-SjZZgyzdTuPsmdfn4ukpDPXL7Rv4r_d6uO2YrsdCxQnbOnxWWqrMwSA18iJrqVFMJ1afzaA9dH1FdFRG2SOXKkt1y6pD8QInwNdsg0lCAUtCu24mr_V_TWDcfTrSF8077Q-xrXkiv8ukE-OI-b4oMuMRwWDit60E_LSjh0ZtMURiE8O98YavWWoW6YL_ksk5Ql_GGFzAddMce1I1a0MyCqGf_Qg_QJbAohXHsOqBjkeGjUqtNUVXhkXwIymNfKLkK2-AwwlUQNanBsL3SWpEXS9EqbjsIRSCTn-YbK1VPsRA72R5wtT1o8Vf-D0vfAycQbeAF9I3rgi-z6D9xH8sHjFaoxAJhYwSe0JU4HTBUZII38mK-Mjvc3cE_PnvIXQHPGbM8CPhcVtjFbBk8iEQnjvSvPOfjzFUIpIChmydiXcu066oRMj1fQn9mn1VOrxgeps9GA92xfb3Ef-JI_FAMybmsBUNbRuscp80uMq0PbAqEbsE7Rb2uWD85KU1FufZ1fiZPzjC2b_q8lv83Wnt7r5zGXXmQshBgAxjo0dhIbe43NzmiCFauOMw" charset="UTF-8"></script><style>
    html,body,h1,h2,h3,h4,h5,h6 {font-family: 'Jost', sans-serif;}
    </style>
  </head>
<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

  <!-- The Grid -->
  <div class="w3-row-padding">
  
    <!-- Left Column -->
    <div class="w3-third">
    
      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2><?php echo $name; ?></h2>
          </div>
        </div>
        <div class="w3-container">
          <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof ; ?></p>
          <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city ; ?></p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $pochta ; ?></p>
          <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $num ; ?></p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
          <p>Adobe Photoshop</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $nab[0];?>%"><?php echo $nab[0];?>%</div>
          </div>
          <p>Photography</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $nab[1];?>%">
              <div class="w3-center w3-text-white"><?php echo $nab[1];?>%</div>
            </div>
          </div>
          <p>Illustrator</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $nab[2];?>%"><?php echo $nab[2];?>%</div>
          </div>
          <p>Media</p>
          <div class="w3-light-grey w3-round-xlarge w3-small">
            <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $nab[3];?>%"><?php echo $nab[3];?>%</div>
          </div>
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b></p>
          <p>Английский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
          </div>
          <p>Испанский</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
          </div>
          <p>Немецкий</p>
          <div class="w3-light-grey w3-round-xlarge">
            <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
          </div>
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">
    
      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $career[0]; ?> / <?php echo $website[0]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $date1[0]; ?> - <span class="w3-tag w3-teal w3-round">Current</span></h6>
          <p><?php echo $specification[0]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $career[1]; ?> / <?php echo $website[1]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $date1[1]; ?> - <?php echo $date2[1]; ?></h6>
          <p><?php echo $specification[1]; ?></p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b><?php echo $career[2]; ?> / <?php echo $website[2]; ?></b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?php echo $date1[2]; ?> - <?php echo $date2[2]; ?></h6>
          <p><?php echo $specification[2]; ?></p><br>
        </div>
      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>gb.ru</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
          <p>Web Development! All I need to know in one place</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>London Business School</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
          <p>Master Degree</p>
          <hr>
        </div>
        <div class="w3-container">
          <h5 class="w3-opacity"><b>School of Coding</b></h5>
          <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
          <p>Bachelor Degree</p><br>
        </div>
      </div>

    <!-- End Right Column -->
    </div>
    
  <!-- End Grid -->
  </div>
  
  <!-- End Page Container -->
</div>

<!-- Footer -->
<footer class="w3-container w3-teal w3-center w3-margin-top">
  <p>Find me on social media.</p>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
 <!-- End footer -->
 </footer>

</body>
</html>