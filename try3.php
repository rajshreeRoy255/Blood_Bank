<?php
$sql="SELECT blood_rqst.blood_group,blood_rqst.quantity,blood_stock_available.blood_grp FROM blood_rqst INNER JOIN blood_stock_available ON blood_rqst.blood_group = blood_stock_available.stk_id WHERE blood_rqst.user_id='1'";


?>