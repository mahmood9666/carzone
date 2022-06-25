<?php  
function facebook_time_ago($timestamp)  
 {    
      date_default_timezone_set('Africa/Cairo');
      $time_ago = strtotime($timestamp);  
      $current_time = time();  
      $time_difference = $current_time - $time_ago;  
      $seconds = $time_difference;
      $minutes      = round($seconds / 60 );           // value 60 is seconds  
      $hours           = round($seconds / 3600);           //value 3600 is 60 minutes * 60 sec  
      $days          = round($seconds / 86400);          //86400 = 24 * 60 * 60;  
      $weeks          = round($seconds / 604800);          // 7*24*60*60;  
      $months          = round($seconds / 2629440);     //((365+365+365+365+366)/5/12)*24*60*60  
      $years          = round($seconds / 31553280);     //(365+365+365+365+366)/5 * 24 * 60 * 60  
      if($seconds <= 60)  
      {  
       return "الأن";  
      }  
      else if($minutes <=60)  
      {  
     if($minutes==1)  
           {  
       return "منذ دقيقة";  
     }  
     else  
           {  
       return " منذ $minutes دقيقة ";  
     }  
   }  
      else if($hours <=24)  
      {  
     if($hours==1)  
           {  
       return "منذ ساعة";  
     }  
           else if($hours <24) 
           {  
       return " منذ $hours ساعة ";  
     }  
     else
     {  
      return "منذ يوم";  
    }  
   }  
      else if($days <= 7)  
      {  
     if($days==1)  
           {  
       return "منذ يوم";  
     }  
           else  
           {  
       return " منذ $days يوم ";  
     }  
   }  
      else if($weeks <= 4.3) //4.3 == 52/12  
      {  
     if($weeks==1)  
           {  
       return "منذ أسبوع";  
     }  
           else  
           {  
       return " منذ $weeks أسبوع ";  
     }  
   }  
       else if($months <=12)  
      {  
     if($months==1)  
           {  
       return "منذ شهر";  
     }  
           else  
           {  
       return " منذ $months شهر ";  
     }  
   }  
      else  
      {  
     if($years==1)  
           {  
       return "منذ سنة";  
     }  
           else  
           {  
       return " منذ $years سنة ";  
     }  
   }  
 }  
 ?>  