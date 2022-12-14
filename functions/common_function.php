<?php 
$servername ="localhost";
$username ="id19989290_root";
$password ="b]PF3#Qskgr5dK8S";
$dbname ="id19989290_blood_bank";
$con_fun = mysqli_connect($servername,$username,$password,$dbname) or die ("Not connected");


// admin dashboard details
function admin_dashboard(){
    global $con_fun;

    if(!isset($_GET['all_pat'])){
        if(!isset($_GET['new_blood_rqt'])){
            if(!isset($_GET['request_history_admin'])){
                if(!isset($_GET['all_donor'])){
                    if(!isset($_GET['donation_history'])){
                        if(!isset($_GET['new_donation'])){
                            if(!isset($_GET['blood_bank'])){

                                include('admin_dashboard.php');
                            }
                        }
                    }
                }  
                
            }
        }
    }


}

// patinet dashboard details starts
function patient_dashboard(){
    global $con_fun;

    if(!isset($_GET['new_blood_rqt'])){
        if(!isset($_GET['my_blood_his'])){
            if(!isset($_GET['patient_profile_update'])){
                include('patient_dashboard_details.php');
            }  
        }
    }


}
// patinet dashboard details ends -x-



// donor dashboard details starts
function donor_dashboard_details(){
    global $con_fun;

    if(!isset($_GET['donate_blood'])){
        if(!isset($_GET['my_donation_history'])){
        if(!isset($_GET['donor_profile_update'])){
        if(!isset($_GET['donor_blood_rqst'])){
        if(!isset($_GET['donor_blood_rqst_history'])){
             include('my_dashboard_Details.php'); }
        }
             }
            }
    }


}
// donor dashboard details ends




?>