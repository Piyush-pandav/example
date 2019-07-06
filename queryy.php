<?php
if($lt_bet_type_id=='2')
     {
      $complete_number=str_replace(',','|',$rambol3);
     }
     else if($lt_bet_type_id=='1')
     {
       $uniq_array=array_unique($chars);
       $data = explode(',',implode(',',$uniq_array));
       if(count($data)==2)
       {
        $complete_number=str_replace(',','|',$rambol3);
       }
       else
       {
        $complete_number_tmp=$rambol6.",".$stright; 
          $complete_number=str_replace(',','|',$complete_number_tmp);
       }       
     }
     else if($lt_bet_type_id=='3')
     {   $complete_number_tmp=$rambol6.",".$stright; 
       $complete_number=str_replace(',','|',$complete_number_tmp);

     }
   $sql_check_ammount=mysql_query("select 
ifnull(sum(a.total_amt),0) as total_ammount
from 
(select 
   ((d.bet_amount/`lottery_bet_type`.`devide`)*(select `ratio_amount` from `lottery_ratio` where `status`=1 limit 0,1)) as total_amt
   from 
   (SELECT sum(`lt_bet_amount`) as bet_amount,`lt_bet_type_id` 
          FROM `lottery_sale` 
            WHERE 
          concat(`lt_sale_user_first_number`,`lt_sale_user_second_number`,`lt_sale_user_third_number`) REGEXP('$complete_number') 
            and `status`=1 and `lottery_sale`.`lt_bet_id`='$lt_bet_ids' group by `lt_bet_type_id` ) 
 as d  join `lottery_bet_type` on `lottery_bet_type`.`lt_bet_type_id`=d.`lt_bet_type_id` 
)
as a");              
       $rw=mysql_fetch_assoc($sql_check_ammount);
        $amt=$rw['total_ammount'];
?>