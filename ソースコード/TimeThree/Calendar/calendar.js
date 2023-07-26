 //type="text/javascript"
            //function check(){
                //if (mail_form.value == ""){
                    //条件に一致する場合(メールアドレスが空の場合)
                    //alert("メールアドレスを入力してください");    //エラーメッセージを出力
                    //return false;    //送信ボタン本来の動作をキャンセルします
                //}else{
                    //条件に一致しない場合(メールアドレスが入力されている場合)
                    //return true;    //送信ボタン本来の動作を実行します
                //}
            //}
            const sidebar = document.getElementById('sidebar');
const close = document.getElementById('close');
const open = document.getElementById('open');
 
//サイドバー非表示
const closeSidebar = () =>{
    sidebar.classList.add('closed'); //クラス名closedを付与
    sidebar.classList.remove('opened'); //クラス名openedを削除
    close.style.display = 'none'; //closeボタンを非表示
    open.style.display = 'block' //openedボタンを表示
}
 
//サイドバー表示
const openSidebar = () =>{
    sidebar.classList.add('opened');
    sidebar.classList.remove('closed');
    open.style.display = 'none';
    close.style.display = 'block';
}
 
close.addEventListener('click', closeSidebar);
open.addEventListener('click', openSidebar);