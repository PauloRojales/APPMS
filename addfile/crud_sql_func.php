<?php
   include 'config.php';
   
   $eks = $_GET['eks'];

   //CRUD EXTERNAL CUSTOMERS
   if ($eks=="delete") {
     $nis = $_POST['nis'];
     $delete = $conn->prepare("DELETE FROM apptopus_externalcustomers WHERE app_school_id=:nis");
     $delete->bindParam(':nis',$nis);
     $delete->execute();
   }
   
   if ($eks=="detail") {
        $nis = $_POST['nis'];
        $details =$conn->prepare("SELECT * FROM apptopus_externalcustomers WHERE app_school_id=:nis");
        $details->bindParam(':nis',$nis);
        $details->execute();
        $data = $details->Fetch(PDO::FETCH_ASSOC);
        echo json_encode($data);
      }
   
   if ($eks=="update") {
       $nis = $_POST['nis'];
       $SchoolName = $_POST['SchoolName'];
       $SchoolAddress = $_POST['SchoolAddress'];
       $NumPreSchool= $_POST['NumPreSchool'];
       $NumGraSchool = $_POST['NumGraSchool'];
       $NumHighSchool = $_POST['NumHighSchool'];
       $NumEmployees = $_POST['NumEmployees'];
       $SchoolPrincipal=$_POST['SchoolPrincipal'];
       $PrincipalBirthday = $_POST['PrincipalBirthday'];
       $PrincipalFacebook = $_POST['PrincipalFacebook'];
       $PrincipalEmail = $_POST['PrincipalEmail'];
       $PrincipalLandline = $_POST['PrincipalLandline'];
       $PrincipalCellphone = $_POST['PrincipalCellphone'];
       $SchoolAdministrator = $_POST['SchoolAdministrator'];
       $AdministratorBirthday = $_POST['AdministratorBirthday'];
       $AdministratorFacebook = $_POST['AdministratorFacebook'];
       $AdministratorEmail = $_POST['AdministratorEmail'];
       $AdministratorLandline = $_POST['AdministratorLandline'];
       $AdministratorCellphone = $_POST['AdministratorCellphone'];
       $SysAdministrator = $_POST['SysAdministrator'];
       $SysContactNumber = $_POST['SysContactNumber'];
       $SysEmailAddress = $_POST['SysEmailAddress'];
       $RelationManager = $_POST['RelationManager'];
       $ProductAvail = $_POST['ProductAvail'];
       $DateStart = $_POST['DateStart'];
       $DateFinish = $_POST['DateFinish']; 
       $Status = $_POST['Status'];
    
       $sql = "UPDATE apptopus_externalcustomers SET app_school_name=:SchoolName,app_school_address=:SchoolAddress,app_school_preschool=:NumPreSchool,app_school_gradeschool=:NumGraSchool,app_school_highschool=:NumHighSchool,app_school_employees=:NumEmployees,app_school_principal=:SchoolPrincipal,app_principal_birthday=:PrincipalBirthday,app_principal_facebook=:PrincipalFacebook,app_principal_email=:PrincipalEmail,app_principal_landline=:PrincipalLandline,app_principal_cellphone=:PrincipalCellphone,app_school_admin=:SchoolAdministrator,app_admin_birthday=:AdministratorBirthday,app_admin_facebook=:AdministratorFacebook,app_admin_email=:AdministratorEmail,app_admin_landline=:AdministratorLandline,app_admin_cellphone=:AdministratorCellphone,app_school_sysadmin=:SysAdministrator,app_sysadmin_number=:SysContactNumber,app_sysadmin_email=:SysEmailAddress,app_relation_manager=:RelationManager,app_avail_product=:ProductAvail,app_start=:DateStart,app_finish=:DateFinish,app_school_status=:Status WHERE app_school_id=:nis ";
   
       $update  = $conn->prepare($sql);
       $update->bindParam(':nis',$nis);
       $update->bindParam(':SchoolName',$SchoolName);
       $update->bindParam(':SchoolAddress',$SchoolAddress);
       $update->bindParam(':NumPreSchool',$NumPreSchool);
       $update->bindParam(':NumGraSchool',$NumGraSchool);
       $update->bindParam(':NumHighSchool',$NumHighSchool);
       $update->bindParam(':NumEmployees',$NumEmployees);
       $update->bindParam(':SchoolPrincipal',$SchoolPrincipal);
       $update->bindParam(':PrincipalBirthday',$PrincipalBirthday);
       $update->bindParam(':PrincipalFacebook',$PrincipalFacebook);
       $update->bindParam(':PrincipalEmail',$PrincipalEmail);
       $update->bindParam(':PrincipalLandline',$PrincipalLandline);
       $update->bindParam(':PrincipalCellphone',$PrincipalCellphone);
       $update->bindParam(':SchoolAdministrator',$SchoolAdministrator);
       $update->bindParam(':AdministratorBirthday',$AdministratorBirthday);
       $update->bindParam(':AdministratorFacebook',$AdministratorFacebook);
       $update->bindParam(':AdministratorEmail',$AdministratorEmail);
       $update->bindParam(':AdministratorLandline',$AdministratorLandline);
       $update->bindParam(':AdministratorCellphone',$AdministratorCellphone);
       $update->bindParam(':SysAdministrator',$SysAdministrator);
       $update->bindParam(':SysContactNumber',$SysContactNumber);
       $update->bindParam(':SysEmailAddress',$SysEmailAddress);
       $update->bindParam(':RelationManager',$RelationManager);
       $update->bindParam(':ProductAvail',$ProductAvail);
       $update->bindParam(':DateStart',$DateStart);
       $update->bindParam(':DateFinish',$DateFinish);
       $update->bindParam(':Status',$Status);
       $update->execute();
        }

      //CRUD INTERNAL CUSTOMERS
     if ($eks=="InsertEmployee"){
   
       $Fname=$_POST['Fname'];
       $Mname=$_POST['Mname'];
       $Lname=$_POST['Lname'];
   
     $sql = "INSERT INTO apptopus_internalcustomers (apptopus_employee_fname,apptopus_employee_mname,apptopus_employee_lname)VALUES (:Fname,:Mname,:Lname)";
   
       $insertEmployee = $conn->prepare($sql);
       $insertEmployee->bindParam(':Fname',$Fname);
       $insertEmployee->bindParam(':Mname',$Mname);
       $insertEmployee->bindParam(':Lname',$Lname);
       $insertEmployee->execute();
     }
   
     elseif ($eks=="DeleteInternalCustomer") {
       $nis = $_POST['nis'];
       $delete = $conn->prepare("DELETE FROM apptopus_internalcustomers WHERE apptopus_internal_id=:nis");
       $delete->bindParam(':nis',$nis);
       $delete->execute();
     }
   
     elseif ($eks=="DetailIinternalCustomer") {
          $nis = $_POST['nis'];
          $details =$conn->prepare("SELECT * FROM apptopus_internalcustomers WHERE apptopus_internal_id=:nis");
          $details->bindParam(':nis',$nis);
          $details->execute();
          $data = $details->Fetch(PDO::FETCH_ASSOC);
          echo json_encode($data);
     }
   
     elseif ($eks=="UpdatedInternalCustomer") {
       $nis = $_POST['nis'];
       $Fname=$_POST['Fname'];
       $Mname=$_POST['Mname'];
       $Lname=$_POST['Lname'];
   
       $sql = "UPDATE apptopus_internalcustomers SET apptopus_employee_fname=:Fname,apptopus_employee_mname=:Mname,apptopus_employee_lname=:Lname WHERE apptopus_internal_id=:nis";
   
       $update = $conn->prepare($sql);
       $update->bindParam(':nis',$nis);
       $update->bindParam(':Fname',$Fname);
       $update->bindParam(':Mname',$Mname);
       $update->bindParam(':Lname',$Lname);
       $update->execute();
     }

     //CRUD POSSIBLE CUSTOMERS
    if ($eks=='insertposcus') {
    $SchoolName = $_POST['SchoolName'];
    $SchoolAddress = $_POST['SchoolAddress'];
    $NumPreSchool= $_POST['NumPreSchool'];
    $NumGraSchool = $_POST['NumGraSchool'];
    $NumHighSchool = $_POST['NumHighSchool'];
    $NumEmployees = $_POST['NumEmployees'];
    $SchoolPrincipal=$_POST['SchoolPrincipal'];
    $PrincipalBirthday = $_POST['PrincipalBirthday'];
    $PrincipalFacebook = $_POST['PrincipalFacebook'];
    $PrincipalEmail = $_POST['PrincipalEmail'];
    $PrincipalLandline = $_POST['PrincipalLandline'];
    $PrincipalCellphone = $_POST['PrincipalCellphone'];
    $SchoolAdministrator = $_POST['SchoolAdministrator'];
    $AdministratorBirthday = $_POST['AdministratorBirthday'];
    $AdministratorFacebook = $_POST['AdministratorFacebook'];
    $AdministratorEmail = $_POST['AdministratorEmail'];
    $AdministratorLandline = $_POST['AdministratorLandline'];
    $AdministratorCellphone = $_POST['AdministratorCellphone'];
    $SysAdministrator = $_POST['SysAdministrator'];
    $SysContactNumber = $_POST['SysContactNumber'];
    $SysEmailAddress = $_POST['SysEmailAddress'];
    $RelationManager = $_POST['RelationManager'];
    $ProductAvail = $_POST['ProductAvail'];
    $DateStart = $_POST['DateStart'];
    $DateFinish = $_POST['DateFinish'];
    //$optionsRadios = $_POST['optionsRadios'];

    $sql = "INSERT INTO apptopus_possiblecustomers (app_school_name,app_school_address,app_school_preschool,app_school_gradeschool,app_school_highschool,app_school_employees,app_school_principal,app_principal_birthday,app_principal_facebook,app_principal_email,app_principal_landline,app_principal_cellphone,app_school_admin,app_admin_birthday,app_admin_facebook,app_admin_email,app_admin_landline,app_admin_cellphone,app_school_sysadmin,app_sysadmin_number,app_sysadmin_email,app_relation_manager,app_avail_product,app_start,app_finish)VALUES
    (:SchoolName,:SchoolAddress,:NumPreSchool,:NumGraSchool,:NumHighSchool,:NumEmployees,:SchoolPrincipal,:PrincipalBirthday,:PrincipalFacebook,:PrincipalEmail,:PrincipalLandline,:PrincipalCellphone,:SchoolAdministrator,:AdministratorBirthday,:AdministratorFacebook,:AdministratorEmail,:AdministratorLandline,:AdministratorCellphone,:SysAdministrator,:SysContactNumber,:SysEmailAddress,:RelationManager,:ProductAvail,:DateStart,:DateFinish)";

    $insert = $conn->prepare($sql);
    $insert->bindParam(':SchoolName',$SchoolName);
    $insert->bindParam(':SchoolAddress',$SchoolAddress);
    $insert->bindParam(':NumPreSchool',$NumPreSchool);
    $insert->bindParam(':NumGraSchool',$NumGraSchool);
    $insert->bindParam(':NumHighSchool',$NumHighSchool);
    $insert->bindParam(':NumEmployees',$NumEmployees);
    $insert->bindParam(':SchoolPrincipal',$SchoolPrincipal);
    $insert->bindParam(':PrincipalBirthday',$PrincipalBirthday);
    $insert->bindParam(':PrincipalFacebook',$PrincipalFacebook);
    $insert->bindParam(':PrincipalEmail',$PrincipalEmail);
    $insert->bindParam(':PrincipalLandline',$PrincipalLandline);
    $insert->bindParam(':PrincipalCellphone',$PrincipalCellphone);
    $insert->bindParam(':SchoolAdministrator',$SchoolAdministrator);
    $insert->bindParam(':AdministratorBirthday',$AdministratorBirthday);
    $insert->bindParam(':AdministratorFacebook',$AdministratorFacebook);
    $insert->bindParam(':AdministratorEmail',$AdministratorEmail);
    $insert->bindParam(':AdministratorLandline',$AdministratorLandline);
    $insert->bindParam(':AdministratorCellphone',$AdministratorCellphone);
    $insert->bindParam(':SysAdministrator',$SysAdministrator);
    $insert->bindParam(':SysContactNumber',$SysContactNumber);
    $insert->bindParam(':SysEmailAddress',$SysEmailAddress);
    $insert->bindParam(':RelationManager',$RelationManager);
    $insert->bindParam(':ProductAvail',$ProductAvail);
    $insert->bindParam(':DateStart',$DateStart);
    $insert->bindParam(':DateFinish',$DateFinish);
    // $insert->bindParam(':optionsRadios',$optionsRadios);*/
    $insert->execute();
    }
    elseif ($eks=="deleteposcus") {
    $nis = $_POST['nis'];
    $delete = $conn->prepare("DELETE FROM apptopus_possiblecustomers WHERE  app_possible_customer_id=:nis");
    $delete->bindParam(':nis',$nis);
    $delete->execute();
    }
    elseif ($eks=="detailposcus") {
    $nis = $_POST['nis'];
    $details =$conn->prepare("SELECT * FROM apptopus_possiblecustomers WHERE  app_possible_customer_id=:nis");
    $details->bindParam(':nis',$nis);
    $details->execute();
    $data = $details->Fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
    }
    elseif ($eks=="updateposcus") {
    $nis = $_POST['nis'];
    $SchoolName = $_POST['SchoolName'];
    $SchoolAddress = $_POST['SchoolAddress'];
    $NumPreSchool= $_POST['NumPreSchool'];
    $NumGraSchool = $_POST['NumGraSchool'];
    $NumHighSchool = $_POST['NumHighSchool'];
    $NumEmployees = $_POST['NumEmployees'];
    $SchoolPrincipal=$_POST['SchoolPrincipal'];
    $PrincipalBirthday = $_POST['PrincipalBirthday'];
    $PrincipalFacebook = $_POST['PrincipalFacebook'];
    $PrincipalEmail = $_POST['PrincipalEmail'];
    $PrincipalLandline = $_POST['PrincipalLandline'];
    $PrincipalCellphone = $_POST['PrincipalCellphone'];
    $SchoolAdministrator = $_POST['SchoolAdministrator'];
    $AdministratorBirthday = $_POST['AdministratorBirthday'];
    $AdministratorFacebook = $_POST['AdministratorFacebook'];
    $AdministratorEmail = $_POST['AdministratorEmail'];
    $AdministratorLandline = $_POST['AdministratorLandline'];
    $AdministratorCellphone = $_POST['AdministratorCellphone'];
    $SysAdministrator = $_POST['SysAdministrator'];
    $SysContactNumber = $_POST['SysContactNumber'];
    $SysEmailAddress = $_POST['SysEmailAddress'];
    $RelationManager = $_POST['RelationManager'];
    $ProductAvail = $_POST['ProductAvail'];
    $DateStart = $_POST['DateStart'];
    $DateFinish = $_POST['DateFinish'];

    $sql = "UPDATE apptopus_possiblecustomers SET app_school_name=:SchoolName,app_school_address=:SchoolAddress,app_school_preschool=:NumPreSchool,app_school_gradeschool=:NumGraSchool,app_school_highschool=:NumHighSchool,app_school_employees=:NumEmployees,app_school_principal=:SchoolPrincipal,app_principal_birthday=:PrincipalBirthday,app_principal_facebook=:PrincipalFacebook,app_principal_email=:PrincipalEmail,app_principal_landline=:PrincipalLandline,app_principal_cellphone=:PrincipalCellphone,app_school_admin=:SchoolAdministrator,app_admin_birthday=:AdministratorBirthday,app_admin_facebook=:AdministratorFacebook,app_admin_email=:AdministratorEmail,app_admin_landline=:AdministratorLandline,app_admin_cellphone=:AdministratorCellphone,app_school_sysadmin=:SysAdministrator,app_sysadmin_number=:SysContactNumber,app_sysadmin_email=:SysEmailAddress,app_relation_manager=:RelationManager,app_avail_product=:ProductAvail,app_start=:DateStart,app_finish=:DateFinish WHERE  app_possible_customer_id=:nis ";

    $update  = $conn->prepare($sql);
    $update->bindParam(':nis',$nis);
    $update->bindParam(':SchoolName',$SchoolName);
    $update->bindParam(':SchoolAddress',$SchoolAddress);
    $update->bindParam(':NumPreSchool',$NumPreSchool);
    $update->bindParam(':NumGraSchool',$NumGraSchool);
    $update->bindParam(':NumHighSchool',$NumHighSchool);
    $update->bindParam(':NumEmployees',$NumEmployees);
    $update->bindParam(':SchoolPrincipal',$SchoolPrincipal);
    $update->bindParam(':PrincipalBirthday',$PrincipalBirthday);
    $update->bindParam(':PrincipalFacebook',$PrincipalFacebook);
    $update->bindParam(':PrincipalEmail',$PrincipalEmail);
    $update->bindParam(':PrincipalLandline',$PrincipalLandline);
    $update->bindParam(':PrincipalCellphone',$PrincipalCellphone);
    $update->bindParam(':SchoolAdministrator',$SchoolAdministrator);
    $update->bindParam(':AdministratorBirthday',$AdministratorBirthday);
    $update->bindParam(':AdministratorFacebook',$AdministratorFacebook);
    $update->bindParam(':AdministratorEmail',$AdministratorEmail);
    $update->bindParam(':AdministratorLandline',$AdministratorLandline);
    $update->bindParam(':AdministratorCellphone',$AdministratorCellphone);
    $update->bindParam(':SysAdministrator',$SysAdministrator);
    $update->bindParam(':SysContactNumber',$SysContactNumber);
    $update->bindParam(':SysEmailAddress',$SysEmailAddress);
    $update->bindParam(':RelationManager',$RelationManager);
    $update->bindParam(':ProductAvail',$ProductAvail);
    $update->bindParam(':DateStart',$DateStart);
    $update->bindParam(':DateFinish',$DateFinish);
    $update->execute();
    }
    elseif($eks == 'clearedposcus'){
    $nis = $_POST['nis'];
    $sql =("INSERT INTO apptopus_externalcustomers (app_school_id,app_school_name,app_school_address,app_school_preschool,app_school_gradeschool,app_school_highschool,app_school_employees,app_school_principal,app_principal_birthday,app_principal_facebook,app_principal_email,app_principal_landline,  app_principal_cellphone,app_school_admin,app_admin_birthday ,app_admin_facebook,app_admin_email,app_admin_landline,app_admin_cellphone,app_school_sysadmin,app_sysadmin_number,app_sysadmin_email,app_relation_manager,app_avail_product,app_start,app_finish,app_school_status)SELECT *FROM apptopus_possiblecustomers WHERE app_possible_customer_id=$nis ; DELETE FROM apptopus_possiblecustomers WHERE  app_possible_customer_id=:nis");
    $insertnew = $conn->prepare($sql);
    $insertnew->bindParam(':nis',$nis);
    $insertnew->execute();
    }
   
     if ($eks =="insertvoucher"){
       $voucher_date=$_POST['voucher_date'];
       $voucher_date=$_POST['voucher_date'];
       $particular=$_POST['particular'];
       $amount=$_POST['amount']; 
       $chargeto=$_POST['chargeto'];
   
     $sql = "INSERT INTO app_vouchers (apptopus_date_vouchers,apptopus_particular_vouchers,apptopus_amount_vouchers,apptopus_chargeto_vouchers)VALUES
      (:voucher_date,:particular,:amount,:chargeto)";
   
       $insertvoucher= $conn->prepare($sql);
       $insertvoucher->bindParam(':voucher_date',$voucher_date);
       $insertvoucher->bindParam(':particular',$particular);
       $insertvoucher->bindParam(':amount',$amount);
       $insertvoucher->bindParam(':chargeto',$chargeto);
       $insertvoucher->execute();
     }
   
     if ($eks =="addbudget"){
       $voucher_date=$_POST['voucher_budget'];
   
     $sql = "INSERT INTO app_vouchers (apptopus_date_vouchers,apptopus_particular_vouchers,apptopus_amount_vouchers,apptopus_chargeto_vouchers)VALUES
      (:voucher_date,:particular,:amount,:chargeto)";
   
       $insertvoucher= $conn->prepare($sql);
       $insertvoucher->bindParam(':voucher_date',$voucher_date);
       $insertvoucher->bindParam(':particular',$particular);
       $insertvoucher->bindParam(':amount',$amount);
       $insertvoucher->bindParam(':chargeto',$chargeto);
       $insertvoucher->execute();
      }
      
     elseif ($eks=="deletevoucher") {
       $nis = $_POST['nis'];
       $delete = $conn->prepare("DELETE FROM app_vouchers WHERE vouchers_id=:nis");
       $delete->bindParam(':nis',$nis);
       $delete->execute();
     }
   
     elseif ($eks=="detailvoucher") {
          $nis = $_POST['nis'];
          $details =$conn->prepare("SELECT * FROM app_vouchers WHERE vouchers_id=:nis");
          $details->bindParam(':nis',$nis);
          $details->execute();
          $data = $details->Fetch(PDO::FETCH_ASSOC);
          echo json_encode($data);
     }
   
     elseif ($eks=="updatevoucher") {
       $nis = $_POST['nis'];
       $voucher_date=$_POST['voucher_date_update'];
       $particular=$_POST['voucher_particular_update'];
       $amount=$_POST['voucher_amount_update']; 
       $chargeto=$_POST['voucher_chargeto_update'];
   
       $sql = "UPDATE app_vouchers SET apptopus_date_vouchers=:voucher_date,apptopus_particular_vouchers=:particular,apptopus_amount_vouchers=:amount,apptopus_chargeto_vouchers=:chargeto WHERE vouchers_id=:nis";
   
       $update = $conn->prepare($sql);
       $update->bindParam(':nis',$nis);
       $update->bindParam(':voucher_date',$voucher_date);
       $update->bindParam(':particular',$particular);
       $update->bindParam(':amount',$amount);
       $update->bindParam(':chargeto',$chargeto);
       $update->execute();
     }
   
     elseif($eks =="add_product"){
   
     $Package_name=$_POST['Package_name'];
   
     $sql = "INSERT INTO apptopus_product (product_package)VALUES (:Package_name)";
   
       $insertEmployee = $conn->prepare($sql);
       $insertEmployee->bindParam(':Package_name',$Package_name);
       $insertEmployee->execute();
     }
   
     elseif ($eks=="delete_product") {
       $nis = $_POST['nis'];
       $delete = $conn->prepare("DELETE FROM apptopus_product WHERE apptopus_product_id=:nis");
       $delete->bindParam(':nis',$nis);
       $delete->execute();
     }
   
     elseif ($eks=="detail_product") {
          $nis = $_POST['nis'];
          $details =$conn->prepare("SELECT * FROM apptopus_product WHERE apptopus_product_id=:nis");
          $details->bindParam(':nis',$nis);
          $details->execute();
          $data = $details->Fetch(PDO::FETCH_ASSOC);
          echo json_encode($data);
     }
   
     elseif ($eks=="updated_product") {
       $nis = $_POST['nis'];
       $Package_name=$_POST['Package_name'];
   
       $sql = "UPDATE apptopus_product SET product_package=:Package_name WHERE apptopus_product_id=:nis";
   
       $update = $conn->prepare($sql);
       $update->bindParam(':nis',$nis);
       $update->bindParam(':Package_name',$Package_name);
       $update->execute();
     }
   
     if($eks =="insertaccount"){
   
     $Account=$_POST['Account'];
     $Id=$_POST['Id'];
     $chart_date=$_POST['chart_date'];
   
     $sql = "INSERT INTO apptopus_account(apptopus_account_id,apptopus_account_name,apptopus_account_date)VALUES(:Id,:Account,:chart_date)";
   
       $insert= $conn->prepare($sql);
       $insert->bindParam(':Id',$Id);
       $insert->bindParam(':Account',$Account);
       $insert->bindParam(':chart_date',$chart_date);
       $insert->execute();
     }

     //CRUD Money in 
    if ($eks == "addcheck"){

     $SchoolID = $_POST['SchoolID'];
     $PaymentMonth = $_POST['PaymentMonth'];
     $PaymentDate = $_POST['PaymentDate'];
     $PaymentCheckNo = $_POST['PaymentCheckNo'];
     $PaymentBank = $_POST['PaymentBank'];
     $PaymentAmount = $_POST['PaymentAmount'];
     $PaymentStatus = $_POST['PaymentStatus'];
   
     $sql = "INSERT INTO apptopus_payment(apptopus_payment_id,apptopus_payment_month,apptopus_payment_date,apptopus_payment_checkno, apptopus_payment_bank,apptopus_payment_amount,apptopus_payment_status) VALUES (:SchoolID,:PaymentMonth,:PaymentDate,:PaymentCheckNo,:PaymentBank,:PaymentAmount,:PaymentStatus)";
   
     $insertEmployee = $conn->prepare($sql);
     $insertEmployee->bindParam(':SchoolID', $SchoolID);
     $insertEmployee->bindParam(':PaymentMonth', $PaymentMonth);
     $insertEmployee->bindParam(':PaymentDate', $PaymentDate);
     $insertEmployee->bindParam(':PaymentCheckNo', $PaymentCheckNo);
     $insertEmployee->bindParam(':PaymentBank', $PaymentBank);
     $insertEmployee->bindParam(':PaymentAmount', $PaymentAmount);
     $insertEmployee->bindParam(':PaymentStatus', $PaymentStatus);
     $insertEmployee->execute();
   }
   
   if ($eks == "deletechecks")
   {
     $nis = $_POST['nis'];
     $delete = $conn->prepare("DELETE FROM apptopus_payment WHERE app_check_id=:nis");
     $delete->bindParam(':nis', $nis);
     $delete->execute();
   }
   
   if ($eks == "detailcheck")
   {
     $nis = $_POST['selected'];
     $details = $conn->prepare("SELECT apptopus_payment.apptopus_payment_id,apptopus_externalcustomers.app_school_name,apptopus_externalcustomers.app_school_id FROM apptopus_payment JOIN apptopus_externalcustomers WHERE apptopus_externalcustomers.app_school_id =:nis");
     $details->bindParam(':nis', $nis);
     $details->execute();
     $data = $details->Fetch(PDO::FETCH_ASSOC);
     echo json_encode($data);
   }
   
   if ($eks == "clearedcheck")
   {
     $nis = $_POST['nis'];
     $cleared = $conn->prepare("UPDATE apptopus_payment  SET apptopus_payment_status ='cleared' WHERE app_check_id = :nis");
     $cleared->bindParam(':nis', $nis);
     $cleared->execute();
   }

   if($eks == "insertbudget"){
     $voucher_account_id=$_POST['voucher_account_id'];
     $voucher_budget=$_POST['voucher_budget'];
     $voucher_chart_name =$_POST["voucher_chart_name"];   
     $sql = "UPDATE apptopus_account SET apptopus_account_budget=:voucher_budget,apptopus_account_id=:voucher_account_id WHERE apptopus_account_name =:voucher_chart_name";
   
      $insertEmployee = $conn->prepare($sql);
      $insertEmployee->bindParam(':voucher_account_id',$voucher_account_id);
      $insertEmployee->bindParam(':voucher_budget',$voucher_budget);
      $insertEmployee->bindParam(':voucher_chart_name',$voucher_chart_name);
      $insertEmployee->execute();
   }
   ?>