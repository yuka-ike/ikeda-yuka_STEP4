<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>入力内容確認</title>
        <link rel=stylesheet href="style.css">
</head>

<body>
    <h1>入力内容確認</h1>
    <?php
    if($_SERVER["REQUEST_METHOD"] === "POST"){
       $username = $_POST["username"];
       $age = $_POST["age"];
       $phone = $_POST["phone"];
       $mail = $_POST["email"];
       $address = $_POST["address"];
       $question = $_POST["question"];
       $gender = $_POST["gender"];
    

    //バリデーション
    if(!preg_match("/^[ぁ-んァ-ヶ一-龠a-zA-Z\s]+$/u",$username)){
        echo "<p>名前は日本語または英字のみ使用できます。</p>";
    }elseif(!is_numeric($age) ||$age < 0 || $age > 150){
        echo "<p>年齢は0から150の間で入力してください。</p>";
    }elseif(!preg_match("/^[0-9\-\s]+$/u",$phone)){
        echo "<p>電話番号は半角数字とハイフンのみ使用できます。</p>";
    }elseif(!filter_var($email , filter_validate_email)){
        echo "<p>メールアドレスの形式が正しくありません。</p>";
    }elseif(!preg_match("/^[ぁ-んァ-ヶ一-龠a-zA-Z0-9\-\s]+$/u",$address)){
        echo "<p>住所は日本語、英字、半角数字、ハイフンのみ使用できます。</p>";

        }else{
         //入力内容の確認
         echo "<p>名前：".htmlspecialchars($username,ENT_QUOTES,'UTF-8')."</p>";
         echo "<p>年齢：".htmlspecialchars($age,ENT_QUOTES,'UTF-8')."</p>";
         echo "<p>電話番号：".htmlspecialchars($phone,ENT_QUOTES,'UTF-8')."</p>";
         echo "<p>メールアドレス：".htmlspecialchars($email,ENT_QUOTES,'UTF-8')."</p>";
         echo "<p>住所：".nl2br(htmlspecialchars ($address, ENT_QUOTES,'UTF-8'))."</p>";
         echo "<p>性別：".htmlspecialchars($gender,ENT_QUOTES,'UTF-8')."</p>";
        }

        }else{
            echo "<p>データが入力されていません。</p>";
         }
         
         ?>
         </body>
         </html>




         

