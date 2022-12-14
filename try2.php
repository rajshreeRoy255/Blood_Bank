<?php
$select="SELECT all_users.username,blood_rqst.quantity,blood_stock_available.blood_grp FROM all_users JOIN blood_rqst ON all_users.id=blood_rqst.user_id JOIN blood_stock_available ON blood_rqst.blood_group=blood_stock_available.stk_id ";
?>