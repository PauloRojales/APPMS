<?php

include 'config.php';

$eks = $_GET['eks'];


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
    $DateStartFinish = $_POST['DateStartFinish'];
    //$optionsRadios = $_POST['optionsRadios'];

  $sql = "INSERT INTO apptopus_possiblecustomers (app_school_name,app_school_address,app_school_preschool,app_school_gradeschool,app_school_highschool,app_school_employees,app_school_principal,app_principal_birthday,app_principal_facebook,app_principal_email,app_principal_landline,app_principal_cellphone,app_school_admin,app_admin_birthday,app_admin_facebook,app_admin_email,app_admin_landline,app_admin_cellphone,app_school_sysadmin,app_sysadmin_number,app_sysadmin_email,app_relation_manager,app_avail_product,app_start_finish)VALUES
  (:SchoolName,:SchoolAddress,:NumPreSchool,:NumGraSchool,:NumHighSchool,:NumEmployees,:SchoolPrincipal,:PrincipalBirthday,:PrincipalFacebook,:PrincipalEmail,:PrincipalLandline,:PrincipalCellphone,:SchoolAdministrator,:AdministratorBirthday,:AdministratorFacebook,:AdministratorEmail,:AdministratorLandline,:AdministratorCellphone,:SysAdministrator,:SysContactNumber,:SysEmailAddress,:RelationManager,:ProductAvail,:DateStartFinish)";


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
  $insert->bindParam(':DateStartFinish',$DateStartFinish);
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
  
  

    $sql = "UPDATE apptopus_possiblecustomers SET app_school_name=:SchoolName,app_school_address=:SchoolAddress,app_school_preschool=:NumPreSchool,app_school_gradeschool=:NumGraSchool,app_school_highschool=:NumHighSchool,app_school_employees=:NumEmployees,app_school_principal=:SchoolPrincipal,app_principal_birthday=:PrincipalBirthday,app_principal_facebook=:PrincipalFacebook,app_principal_email=:PrincipalEmail,app_principal_landline=:PrincipalLandline,app_principal_cellphone=:PrincipalCellphone,app_school_admin=:SchoolAdministrator,app_admin_birthday=:AdministratorBirthday,app_admin_facebook=:AdministratorFacebook,app_admin_email=:AdministratorEmail,app_admin_landline=:AdministratorLandline,app_admin_cellphone=:AdministratorCellphone,app_school_sysadmin=:SysAdministrator,app_sysadmin_number=:SysContactNumber,app_sysadmin_email=:SysEmailAddress,app_relation_manager=:RelationManager,app_avail_product=:ProductAvail WHERE  app_possible_customer_id=:nis ";
    $update = $conn->prepare($sql);

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
    //$update->bindParam(':DateStartFinish',$DateStartFinish);
    $update->execute();
     }