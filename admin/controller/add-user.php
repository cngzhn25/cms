<?php

if(post("submit")) {
    $userName     = post("userName");
    $password     = post("password");
    $password2    = post("password2");
    $email        = post("email");
    $user_status  = post("user_status");

    if(!$userName) {
        $error = "Lutfen kullanıcı adı giriniz";
    } elseif(!$password) {
        $error = "Lutfen sifre giriniz";
    } elseif(!$password2) {
        $error = "Lutfen sifrenizi yeniden girin";
    } elseif(!$email) {
        $error = "Lutfen email adresinizi giriniz";
    } elseif(!($password === $password2)) {
        $error = "Girdiginiz sifreler uyusmuyor!";
    } else {
        $query  = $db->insert("users")
                ->set([
                    "user_name" => $userName,
                    "user_email" => $email,
                    "user_password" => $password ,
                    "user_status" => $user_status
                ]);

        if($query) {
            $success = "Kayıt başarıyla oluştu";
            header( "Refresh:5; url=" . admin_url("user-list"));
            exit;
        } else {
            $error = "Bir sorun olstu lutfen daha sonra tekrar deneyin!";
        }
    }
    
}


require_once admin_view("add-user");
