<?php

    function getHashPassword($string) :string {
        $string = str_replace(" ", "", $string);
        $belgi = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_'];
        $leng = strlen($string);

        $result = $string[rand(0, $leng-1)];
        $result .= $string[rand(0, $leng-1)];
        $result .= $belgi[rand(0, 10)];

        return $result;
    }

    function getHashLogin($string) :string {
        $belgi = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_'];
        $leng = strlen($string);

        $string .= $belgi[rand(0, 10)];
        $string .= $string[rand(0, $leng)];
        $string .= date("s");

        return strtolower($string);
    }


    function LoginPassword() : array {
        $ism  = "Tohirbek";
        $familiya = "Otaqulov";
        $sharif = "Otabek o`g`li";
        $tug_sana = "2000-12-23";

        $password = "";
        $login = "";

        $password .= getHashPassword($ism);
        $password .= getHashPassword($familiya);
        $password .= getHashPassword($tug_sana);
        $password .= getHashPassword($sharif);

        $login .= getHashLogin($ism);
        
        return [$login, $password];
    }


    print_r(LoginPassword());

    print_r(LoginPassword());

    print_r(LoginPassword());

    print_r(LoginPassword());

    print_r(LoginPassword());
