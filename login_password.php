<?php

    const BELGI = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '_'];
    const Last_Name = 'Tohirbek';
    const First_Name = 'Otaqulov';
    const Date_Of_Birth = '2000-12-23';
    const Father_is_Name = 'Otabek o`g`li';

    function getHashPassword($string) :string {
        $string = str_replace(" ", "", $string);
        $leng = strlen($string);

        $result = $string[rand(0, $leng-1)];
        $result .= $string[rand(0, $leng-1)];
        $result .= BELGI[rand(0, 10)];

        return $result;
    }

    function getHashLogin($string) :string {
        $leng = strlen($string);

        $string .= BELGI[rand(0, 10)];
        $string .= $string[rand(0, $leng)];
        $string .= date("s");

        return strtolower($string);
    }


    function LoginPassword() : array {
        $password = "";
        $login = "";

        $password .= getHashPassword(Last_Name);
        $password .= getHashPassword(First_Name);
        $password .= getHashPassword(Father_is_Name);
        $password .= getHashPassword(Date_Of_Birth);

        $login .= getHashLogin(Last_Name);
        
        return [$login, $password];
    }


    print_r(LoginPassword()); // 1
    print_r(LoginPassword()); // 2
    print_r(LoginPassword()); // 3
    print_r(LoginPassword()); // 4
    print_r(LoginPassword()); // 5
?>
