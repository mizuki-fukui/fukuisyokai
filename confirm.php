<?php
session_start();
//入力画面からのアクセスでない場合は戻す
if(!isset($_SESSION['form'])){
  header('Location: index.php');
} else {
  $post = $_SESSION['form'];
}

$post = $_SESSION['form'];

if($_SERVER['REQUEST_METHOD'] === 'POST') {
  //メールを送信する
  $to = 'fkimzk@gmail.com';
  $from = $post['mail'];
  $subject = 'お問い合わせが届きました';
  $body = <<<EOT
  名前: {$post['name']}
  メールアドレス：{$post['mail']}
  お問い合わせ内容：
  {$post['main']}
  EOT;

  mb_send_mail($to, $subject, $body, "From: {$from}");
  //セッションを消してお礼画面へ
  unset($_SESSION['form']);
  header('Location: thanks.html');
  exit();
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="/assets/css/contactform.css" class="css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

  <header>
    <div class="header" id="top">
      <div class="header_box">
        <a href="index.html" class="header_box_logo">
          <img src="/assets/images/logo/logo.png" alt="福井商会ロゴ" class="header_box_logo_img">
        </a>
        <div class="header_box_menu">
          <a href="" class="header_box_menu_link">Services</a>
          <a href="" class="header_box_menu_link">Works</a>
          <a href="" class="header_box_menu_link">About us</a>
          <a href="contact.html" class="header_box_menu_link">Contact</a>
        </div>
        <div class="header_box_spicon is-hidePC js-spicon">
          <span class="header_box_spicon_link js-spbar"></span>
        </div>
      </div>
    </div>
    <div class="spmenu js-spmenu">
      <div class="spmenu_box">
        <div class="spmenu_box_text">
          <a href="index.html" class="spmenu_box_text_link">Top</a>
          <a href="" class="spmenu_box_text_link">Services</a>
          <a href="" class="spmenu_box_text_link">Works</a>
          <a href="" class="spmenu_box_text_link">About us</a>
          <a href="" class="spmenu_box_text_link">Contact</a>
        </div>
      </div>
    </div>
  </header>

  <div class="kv">
    <div class="kv_image">
      <img src="/assets/images/img/contact_kv.jpg" alt="" class="kv_image_img">
    </div>
  </div>

  <div class="titlearea">
    <div class="title2 title2--theme js-fade js-fade--ttl">
      <span class="title -br">S</span><span class="title -gr">e</span><span class="title -br">r</span><span class="title -gr">v</span><span class="title -br">i</span><span class="title -gr">c</span><span class="title -br">e</span><span class="title -gr">s</span>
    </div>
    <p class="sbttl2 -gr">- サービス -<br></p>
  </div>

  <div class="contacts">
    <div class="contacts_box">
      <div class="contacts_box_item">
        <form method="POST" action="" novalidate>
          <div class="contacts_box_item_form">
            <label for="name" class="label">お名前</label>
            <p class="confirm"><?php echo htmlspecialchars($post['name']); ?></p>
          </div>
          <div class="contacts_box_item_form">
            <label for="mail" class="lavel">メールアドレス</label>
            <p class="confirm"><?php echo htmlspecialchars($post['mail']); ?></p>
          </div>
          <div class="contacts_box_item_form">
            <label for="main">内容</label>
            <p class="confirm"><?php echo nl2br(htmlspecialchars($post['main'])); ?></p>
          </div>
          <div class="contacts_box_item_form">
            <div class="formButton">
            <a href="index.php" class="formButton_txt">戻る</a>
          </div>
            <input type="submit" value="送信" class="formButton">
          </div>
        </form>
      </div>
    </div>
  </div>

  <footer>
    <div class="footer js-fade">
      <div class="footer_box">
        <div class="footer_box_item">
          <div class="footer_box_item_logo">
            <img src="/assets/images/logo/logo.png" alt="福井商会ロゴ" class="footer_box_item_logo_img">
          </div>
          <div class="footer_box_item_icon">
            <a href="#" class="footer_box_item_icon_mail">
              <i class="far fa-envelope"></i>
            </a>
            <a href="0120-960-642" class="footer_box_item_icon_tel">
              <i class="fas fa-phone"></i>
            </a>
          </div>
        </div>
        <div class="footer_box_item">
          <div class="footer_box_item_menubox">
            <a href="#" class="footer_box_item_menubox_link">Services</a>
            <a href="#" class="footer_box_item_menubox_link">Works</a>
            <a href="#" class="footer_box_item_menubox_link">About us</a>
            <a href="#" class="footer_box_item_menubox_link">Contact</a>
            <a href="#" class="footer_box_item_menubox_link">Privacy Plicy</a>
          </div>
        </div>
      </div>
      <div class="footer_arrow">
        <a href="#top" class="footer_arrow_link js-scroll">
          <img src="/assets/images/icon/footer_arrow_wt.png" alt="トップに戻る" class="footer_arrow_link_img">
        </a>
      </div>
    </div>
  </footer>
  <div class="copy">
    <p class="copy_txt">Copyright ©︎ fukuisyokai All Rights Reserved</p>
  </div>
  <script src="assets/js/index.js"></script>
</body>
</html>