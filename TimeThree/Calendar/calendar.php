<?php

session_start();
require '../DAO.php';
$dao = new DAO();

// タイムゾーンを設定
date_default_timezone_set('Asia/Tokyo');

// 前月・次月リンクが押された場合は、GETパラメーターから年月を取得
if (isset($_GET['ym'])) {
    $ym = $_GET['ym'];
} else {
    // 今月の年月を表示
    $ym = date('Y-m');
}

// タイムスタンプを作成し、フォーマットをチェックする
$timestamp = strtotime($ym . '-01');
if ($timestamp === false) {
    $ym = date('Y-m');
    $timestamp = strtotime($ym . '-01');
}


// 今日の日付 フォーマット　例）2021-06-3
$today = date('Y-m-j');

// カレンダーのタイトルを作成　例）2021年6月
$html_title = date('Y年n月', $timestamp);


// 方法１：mktimeを使う mktime(hour,minute,second,month,day,year)
$prev = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)-1, 1, date('Y', $timestamp)));
$next = date('Y-m', mktime(0, 0, 0, date('m', $timestamp)+1, 1, date('Y', $timestamp)));

// 方法２：strtotimeを使う
// $prev = date('Y-m', strtotime('-1 month', $timestamp));
// $next = date('Y-m', strtotime('+1 month', $timestamp));

// 該当月の日数を取得
$day_count = date('t', $timestamp);

// １日が何曜日か　0:日 1:月 2:火 ... 6:土
// 方法１：mktimeを使う
$youbi = date('w', mktime(0, 0, 0, date('m', $timestamp), 1, date('Y', $timestamp)));
// 方法２
// $youbi = date('w', $timestamp);


// カレンダー作成の準備
$weeks = [];
$week = '';



// 第１週目：空のセルを追加
// 例）１日が火曜日だった場合、日・月曜日の２つ分の空セルを追加する
$week .= str_repeat('<td></td>', $youbi);


$schedule = $dao->schedule_hyouji($_SESSION['group_id']);
 
echo "<br><br>";
for ( $day = 1; $day <= $day_count; $day++, $youbi++) {
    // 2021-06-3
    $date = $ym . '-' . $day;

    if ($today == $date) {
        // 今日の日付の場合は、class="today"をつける
        $week .= '<td class="today">' . $day;
    } else {
        $week .= '<td>' . $day;
    }
    foreach($schedule as $row){
        if($row["startday"] <= $date && $row["endday"] >= $date){
            $week .= '<br><button type = "submit" formaction="../schedule/schedule_check.php" name = schedule value ='.$row["schedule_id"].'>'.$row["title"].'</button>';
        }
    }
    
    $week .= '</td>';

    // 週終わり、または、月終わりの場合
    if ($youbi % 7 == 6 || $day == $day_count) {

        if ($day == $day_count) {
            // 月の最終日の場合、空セルを追加
            // 例）最終日が水曜日の場合、木・金・土曜日の空セルを追加
            $week .= str_repeat('<td></td>', 6 - $youbi % 7);
        }

        // weeks配列にtrと$weekを追加する
        $weeks[] = '<tr>' . $week . '</tr>';

        // weekをリセット
        $week = '';
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>PHPカレンダー</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <style>
        .container {
            font-family: 'Noto Sans JP', sans-serif;
            margin-top: 80px;
            font-size: 40px;

        }
        .team{
            background-image:url(../img/haikei.jpg);
        }
        a {
            text-decoration: none;
        }
        .th {
            height: 100px;
            text-align: center;
        }
        td {
            height: 200px;
        }
        .today {
            background: orange !important;
        }
        th:nth-of-type(1), td:nth-of-type(1) {
            color: red;
        }
        th:nth-of-type(7), td:nth-of-type(7) {
            color: blue;
        }

        .button{
            text-align: right;
        text-align: right;
        }

        .but{
            background-color: #40e0d0;
            font-size: large;
            font-weight: 400px;
            line-height: 30px;
            position:relative;top: 70px;right:100px;
            font-weight: 100px;
            line-height: 100px;
            position:relative;top: 50px;right:100px;
            display: inline-block;
            padding: auto;
            border-radius: 100vh;/*丸く*/
            margin-top: 100px;
            margin-top: 50px;

        }

        .buto{
            background-color: #40e0d0;
            font-size: 50px;
            font-weight: 50px;
            line-height: 50px;
            position:relative;top: 50px;
            display: inline-block;
            padding: auto;
            border-radius: 100vh;/*丸く*/
        }
        .header{
            text-align:center
        }
        .mb-5{
            color: #40e0d0;
        }
        .container table{
            background-color: #40e0d0;

            width: 800px;
            height: 1000px;
        }
        .sakusei{
            text-align: center;
        }
        
        /*6/12ここから追加*/
        .button_solid017 button {
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin: 0 auto;
    max-width: 240px;
    padding: 10px 25px;
    color: #543618;
    transition: 0.3s ease-in-out;
    font-weight: 600;
    background: #eeee;
    border-radius: 50px;
    border: 0.2rem solid #40e0d0;
    box-shadow: 0.2rem 0.2rem 0px 0.1rem #cccccc;
}
.button_solid017 button:hover {
  transform: translate3d(0.2rem, 0.2rem, 0);
  box-shadow: none;
  opacity: 1;
  transition: all 0.2s;
}
.button_solid017 button:after {
    content: '';
    width: 5px;
    height: 5px;
    border-top: 3px solid #543618;
    border-right: 3px solid #543618;
    transform: rotate(45deg) translateY(-50%);
    position: absolute;
    top: 50%;
    right: 20px;
    border-radius: 1px;
    transition: 0.3s ease-in-out;
}
        
</style>
<div class="header">
<div class = "logo">
            <img src="img/logo.png" width="600" alt="TimeThree">
        </div>
    </div>
</head>
<body>
<body class="team">


<form action="?" method="post">  


<?php 
    echo $_SESSION["group_name"];
    ?>
<body class="team">
    <div class="button">
        <button type = "submit" formaction="../logout.php">ログアウト</button>
    </div>

</div>
    <div class="container">
        <h3><div class = mb-5><a href="?ym=<?php echo $prev; ?>">&lt;</a> <?php echo $html_title; ?> <a href="?ym=<?php echo $next; ?>">&gt;</div></a></h3>
        <table class="table table-bordered">
            <tr>
                <th>日</th>
                <th>月</th>
                <th>火</th>
                <th>水</th>
                <th>木</th>
                <th>金</th>
                <th>土</th>
            </tr>
            
            <?php
                foreach ($weeks as $week) {
                    echo $week;
                }
            ?>
            </h1>
        </table>
        

        <div class="sakusei">
        <button type = "submit" formaction="../schedule/schedule_check.php" class="buto">予定を確認する</button>
        <button type = "submit" formaction="../schedule/schedule_addition.php" class="buto">予定を追加する</button>
        </div>
        

    </div>


    </form>
</body>
</html>
