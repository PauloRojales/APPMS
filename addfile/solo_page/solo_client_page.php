<?php 
include '../config.php';
/*if(!empty($_GET['id']))
{
$var =$_GET['id'];
$query = $conn->prepare("SELECT * FROM apptopus_externalcustomers WHERE app_school_id ='$var'");
$query->execute();
$query->setFetchMode(PDO::FETCH_ASSOC);
while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { 
*/?>
<div class="row">
    <div class="col-md-12">
        <table class="table table-bordered data">
            <tr class="success">
                <th width="45%" style="text-align:center;" >PRINCIPAL</th>
                <th width="10%"></th>
                <th width="45%" style="text-align:center;" >ADMINISTRATOR</th>
            </tr>
            <tr>
                <td> <?php echo $data['app_school_principal']; ?> </td>
                <td align="center">NAME</td>
                <td> <?php echo $data['app_school_admin']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $data['app_principal_birthday']; ?> </td>
                <td align="center">BIRTHDAY</td>
                <td> <?php echo $data['app_admin_birthday']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $data['app_principal_facebook']; ?> </td>
                <td align="center">FACEBOOK</td>
                <td> <?php echo $data['app_admin_facebook']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $data['app_principal_email']; ?> </td>
                <td align="center">EMAIL</td>
                <td> <?php echo $data['app_admin_email']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $data['app_principal_landline']; ?> </td>
                <td align="center">LANDLINE</td>
                <td> <?php echo $data['app_admin_landline']; ?> </td>
            </tr>
            <tr>
                <td> <?php echo $data['app_principal_cellphone']; ?> </td>
                <td align="center">CELLPHONE</td>
                <td><?php echo $data['app_admin_cellphone']; ?> </td>
            </tr>
        </table>
         
           <div class="box box-default">
        <div class="box-body">
            <label for="" class="control-label">System Administrator Name</label>
<input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_school_sysadmin']; ?>" type="text">
            <label for="" class="control-label">System Administrator Contact Number</label>
<input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_sysadmin_number']; ?>" type="text">
            <label for="" class="control-label">System Administrator Email Address</label>
<input class="form-control" maxlength="20" disabled="true" value="<?php echo $data['app_sysadmin_email']; ?>" type="text">
        </div>
        </div>
 <?php /*}}

 else{
 	echo "error";
 } */?>
    </div>
</div>
</div>