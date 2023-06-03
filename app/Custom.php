<?php


namespace App;


class Custom
{
    public static $info =  [

        "name" => "Thiri Khitaya Golf Club",
        "short_name" => "Thiri Khitaya",
        "type" => "Thiri Khitaya",
        "phone" => "09691496115",
        "address" =>"တီတွတ် စံပြရွာအနီး ၊ ပြည် သီရိခေတ္တရာဂေါက်ကွင်",
        "meta-img" => "f/img/meta.jpg",
        "mms-logo" => "dashboard/images/golf.jpg",
        "c-logo" => "dashboard/images/golf.jpg",
        "main_css" => "dashboard/css/bootstrap.min.css",
    ];
    public static function toShort($text,$max=10){
        if(strlen($text) >= $max){
            return substr($text,0,$max)."...";
        }else{
            return $text;
        }
    }

}
