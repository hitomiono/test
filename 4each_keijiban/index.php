

<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
<body>
    


    
 
<img src="4eachblog_logo.jpg">
    


<header>


    
<ul>
<li>トップ</li>
<li>プロフィール</li>
<li>4eachについて</li>
<li>登録フォーム</li>
<li>お問い合わせ</li>
<li>その他</li>
</ul>
    
    
</header>

<main>    
    
<div class=left>
    
  <h1>プログラミングに役立つ掲示板</h1>    
    
    
    
  <form method="post" action="insert.php">
　<h3>入力フォーム</h3>
   <div>
    <label>ハンドルネーム</label>
    <br>
    <input type="text" class="text"  name="handlename" size="35">
   </div>
　　<div>
      <label>タイトル</label>
      <br>
      <input type="text" class="text" name="title" size="35">
    </div>
    <div>
     <label>コメント</label>   
        <br>
     <textarea cols="50" rows="7" name="comments"></textarea>
    </div>
    
    <div>
     <input type="submit" class="submit" value="投稿する" >
   </div>
 </form>
      

    
<?php
    
    mb_internal_encoding("utf8");
    $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt=$pdo->query("select*from 4each_keijiban");

    
while ($row=$stmt->fetch()){
echo "<div class='kiji'>";
echo "<h3>".$row['title']."</h3>";
echo "<div class='contents'>";
   echo $row['comments'];
echo "<div class='handlename'>posted by ".$row['handlename']."</div>";
echo "</div>";
echo "</div>";
}
    
 ?>

</div>

<div class="right">
 <h2>人気の記事</h2>
<ul>
  <li>PHPオススメの本</li>
  <li>PHP MyAdminの使い方</li>
  <li>いま人気のエディタTop5</li>
  <li>HTMLの基礎</li>
</ul>
<h2>おすすめリンク</h2>
<ul>
    <li>インターノウス株式会社</li>
    <li>XAMPPのダウンロード</li>
    <li>Eclipseのダウンロード</li>
    <li>Bracketsのダウンロード</li>
</ul> 

<h2>カテゴリ</h2>
 <ul>
     <li>HTML</li>
     <li>PHP</li>
     <li>MySQL</li>
     <li>JavaScript</li>
  
</ul>
    
</div>  
   

</main>
    
    
<footer>
    copyright internous | 4each blog is the one which provides A to Z about programing.
</footer>  
    
</body>