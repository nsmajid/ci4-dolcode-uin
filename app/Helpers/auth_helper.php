<?php
function checkLogin(){
    if(!session('username')){

        session()->setFlashdata('notif', true);
        session()->setFlashdata('notif_msg', 'Anda tidak punya akses');
        session()->setFlashdata('notif_cls', 'warning');

        header('Location:' . site_url('/login'));
        exit;
    }
}
function isLogin(){
    if(session('username')){
        header('Location:' . site_url('/'));
        exit;
    }
}

?>