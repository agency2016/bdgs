<?php
function reverse_date($currentDate) {

    $currentDate = date("d-M-Y", strtotime($currentDate));
   
    $engDATE = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'Saturday', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday');
    $bangDATE = array('১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯', '০', 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'আগস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর', 'শনিবার', 'রবিবার', 'সোমবার', 'মঙ্গলবার', '
            বুধবার', 'বৃহস্পতিবার', 'শুক্রবার'
    );

   
        $currentDate = str_replace($engDATE, $bangDATE, $currentDate);
        return $currentDate;
   
}
function reverse_t($currentDate) {
    $time = '';
    $currentDate = date("h:m", strtotime($currentDate));
    $currentDate = explode(':',$currentDate);
    if((int)$currentDate[0] > 14 && (int)$currentDate[0] <=17 ){
        $time .= 'ব্বিকাল';
    }
    else  if((int)$currentDate[0] > 17 && (int)$currentDate[0] <=19 ){
        $time .= 'সন্ধ্যা';
    }
     else  if((int)$currentDate[0] > 19 && (int)$currentDate[0] <=24 ){
        $time .= 'রাত';
    }
     else  if((int)$currentDate[0] >=12 && (int)$currentDate[0] <=14 ){
        $time .= 'দুপুর';
    }
    else  if((int)$currentDate[0] >=0 && (int)$currentDate[0] <12 ){
        $time .= 'স্কাল';
    }
     if((int)$currentDate[0] >12){
         $time .= reverse_number((int)$currentDate[0] -12);
     }
     else{
         $time .=reverse_number( $currentDate[0]);
     }

     $time .= '  টা ' .reverse_number($currentDate[1]). '  মিনিট';
     return $time;
}
function reverse_number($number) {

    
    $search_array = array("১", "২", "৩", "৪", "৫", "৬", "৭", "৮", "৯", "০");
    $replace_array = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "0");

  
        $_number = str_replace($replace_array, $search_array, $number);
        return $_number;
    
}
?>