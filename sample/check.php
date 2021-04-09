<?php
session_start();
$error = [];
//フォームの送信時にチェックする
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $post = filter_input_array(INPUT_POST, $_POST);
  //もしPOSTで送信された時に名前が空だったらエラーメッセージを出す
  if($post['name'] === '') {
    $error['name'] = 'blank';
  }
  if($post['mail'] === '') {
    $error['mail'] = 'blank';
  } else if (!filter_var($post['mail'], FILTER_VALIDATE_EMAIL)) {
    $error['mail'] = 'email';
  }
  if($post['main'] === '') {
    $error['main'] = 'blank';
  }

  if(count($error) === 0) {
    //エラーがないので移動
    $_SESSION['form'] = $post;
    header('Location: confirm.php');
    exit();
  }
} else {
  if (isset($_SESSION['form'])) {
    $post = $_SESSION['form'];
  }
}
?>

<p>Name: <?php echo $error['name'] ?></p>
<p>Mail: <?php echo $error['mail'] ?></p>
<p>Main: <?php echo $error['main'] ?></p>
<p>Main: <?php var_dump($post) ?></p>

