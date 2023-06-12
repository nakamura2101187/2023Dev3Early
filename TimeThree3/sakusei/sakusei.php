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
        }
        .team{
            background-image:url(img/haikei.jpg);
            width: 100%;
            box-sizing: border-box;
            margin: 1em 0;
            padding: .8em;
            border-radius: 1em;
            border: 2px solid #aaa;
        }
        a {
            text-decoration: none;
        }
        th {
            height: 30px;
            text-align: center;
        }
        td {
            height: 100px;
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
        }
        .but{
            background-color: #40e0d0;
            font-size: large;
            font-weight: 400px;
            line-height: 30px;
            position:relative;top: 70px;right:100px;
            display: inline-block;
            padding: auto;
            border-radius: 100vh;/*丸く*/

        }
        .buto{
            background-color: #40e0d0;
            font-size: 25px;
            font-weight: 700px;
            line-height: 30px;
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
        }
        .sakusei{
            text-align: center;
        }
        .text {
            width: 100%;
            box-sizing: border-box;
            margin: 1em 0;
            padding: .8em;
            border-radius: 2em;
            }
</style>
</head>
<body class="team">
<div class="header">
        <div class = "logo">
            <img src="img/logo.png" width="300" alt="TimeThree">
        </div>
</div>
<div class="text">
        <button>戻る</button>
        <input type="text" value="タイトル" placeholder="" ><br>
<br>
<textarea placeholder="メモ" cols="50" rows="10" ></textarea><!--タイトル-->
    </div>
        </table>
    </div>
    <div class="sakusei">
        <button href="" class="buto">作成</button>
    </div>
</body>
</html>