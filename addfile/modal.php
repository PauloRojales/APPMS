    <!--UPDATE EXISTING EXTERNAL CUSTOMER-->
    <div class="modal" id="modal-update-siswa">
      <div class="modal-dialog  modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title callout callout-danger">Update External Customer</h3>
          </div>
          <div class="modal-body">
                <form class="form-horizontal">

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">ID</label>
                            <input type="text" class="form-control" id="UExternalCustomer" maxlength="20" disabled="true">
                            <label for="" class="control-label">School Name</label>
                            <input type="text" class="form-control" id="SchoolName1" maxlength="200">
                            <label for="" class="control-label">School Address</label>
                            <input type="text" class="form-control" id="SchoolAddress1" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">Statistics</h3>
                         </div>
                         <div class="box-body">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Pre-School</label>
                                  <input type="number" class="form-control" id="NumPreSchool1" maxlength="200">
                                </div>
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Grade School</label>
                                  <input type="number" class="form-control" id="NumGraSchool1" maxlength="200">
                                </div>
                            </div>
                            <div class="col-sm-12"> 
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of HighSchool</label>
                                  <input type="number" class="form-control" id="NumHighSchool1" maxlength="200">
                                </div>
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Employees</label>
                                  <input type="number" class="form-control" id="NumEmployees1" maxlength="200">
                                </div>
                            </div>
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">Principal Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">Name of School Principal</label>
                            <input type="text" class="form-control" id="SchoolPrincipal1" maxlength="200">
                            <label for="" class="control-label">Principal Birthday</label>
                            <input type="text" class="form-control" id="PrincipalBirthday1" maxlength="200" data-date-format="yyyy-dd-mm">
                            <label for="" class="control-label">Principal Facebook</label>
                            <input type="email" class="form-control" id="PrincipalFacebook1" maxlength="200">
                            <label for="" class="control-label">Principal Email</label>
                            <input type="email" class="form-control" id="PrincipalEmail1" maxlength="200">
                            <label for="" class="control-label">Principal Landline</label>
                            <input type="text" class="form-control" id="PrincipalLandline1" maxlength="200">
                            <label for="" class="control-label">Principal Cellphone</label>
                            <input type="text" class="form-control" id="PrincipalCellphone1" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Administrator Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">School Administrator</label>
                            <input type="text" class="form-control" id="SchoolAdministrator1" maxlength="200">
                            <label for="" class="control-label">Administrator Birthday</label>
                            <input type="text" class="form-control" id="AdministratorBirthday1" maxlength="200" data-date-format="yyyy-dd-mm">
                            <label for="" class="control-label">Administrator Facebook</label>
                            <input type="email" class="form-control" id="AdministratorFacebook1" maxlength="200">
                            <label for="" class="control-label">Administrator Email</label>
                            <input type="email" class="form-control" id="AdministratorEmail1" maxlength="200">
                            <label for="" class="control-label">Administrator Landline</label>
                            <input type="text" class="form-control" id="AdministratorLandline1" maxlength="200">
                            <label for="" class="control-label">Administrator Cellphone</label>
                            <input type="text" class="form-control" id="AdministratorCellphone1" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Administrator Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">Name of System Administrator</label>
                            <input type="text" class="form-control" id="SysAdministrator1" maxlength="200">
                            <label for="" class="control-label">System Administrator Number</label>
                            <input type="text" class="form-control" id="SysContactNumber1" maxlength="200">
                            <label for="" class="control-label">System Administrator Email</label>
                            <input type="text" class="form-control" id="SysEmailAddress1" maxlength="200">
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Relation Manager</label>
                         <div class="col-sm-8">
                            <select id ="RelationManager1" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT   apptopus_internal_id,apptopus_employee_fname,apptopus_employee_mname,  apptopus_employee_lname FROM apptopus_internalcustomers ");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["apptopus_employee_fname"]." ".$data["apptopus_employee_mname"]." ".$data["apptopus_employee_lname"]; ?>"><?php echo $data["apptopus_employee_fname"]." ".$data["apptopus_employee_mname"]." ".$data["apptopus_employee_lname"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Product Avail</label>
                         <div class="col-sm-8">
                            <select id="ProductAvail1" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT apptopus_product_id,product_package FROM apptopus_product");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["product_package"]; ?>"><?php echo $data["product_package"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">DateStart</label>
                         <div class="col-sm-8">
                            <input type="text" class="form-control" id="DateStart1" maxlength="200" data-date-format="yyyy-dd-mm"> 
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Date Finish</label>
                         <div class="col-sm-8">
                            <input type="text" class="form-control" id="DateFinish1" maxlength="200" data-date-format="yyyy-dd-mm">
                         </div>
                      </div>
                      
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                            <input type="radio" id="optionsRadios1" value="Active" checked="true">Active
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="optionsRadios1" value="Inactive">Inactive
                             </label>
                          </div>
                      </div>

                  </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-warning update-siswa" data-dismiss="modal">UPDATE</button>
          </div>
        </div>
      </div>
    </div>


            <!-- ADD NEW POSSIBLE CUSTOMER-->
        <div class="modal" id="PossibleCustomer">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title callout callout-danger">Add New External Customer</h3>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">School Name</label>
                            <input type="text" class="form-control" id="PCSchoolName" maxlength="200">
                            <label for="" class="control-label">School Address</label>
                            <input type="text" class="form-control" id="PCSchoolAddress" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">Statistics</h3>
                         </div>
                         <div class="box-body">
                            <div class="col-sm-12">
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Pre-School</label>
                                  <input type="number" class="form-control" id="PCNumPreSchool" maxlength="200">
                                </div>
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Grade School</label>
                                  <input type="number" class="form-control" id="PCNumGraSchool" maxlength="200">
                                </div>
                            </div>
                            <div class="col-sm-12"> 
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of HighSchool</label>
                                  <input type="number" class="form-control" id="PCNumHighSchool" maxlength="200">
                                </div>
                                <div class="col-sm-6">
                                  <label for="" class="control-label">Number of Employees</label>
                                  <input type="number" class="form-control" id="PCNumEmployees" maxlength="200">
                                </div>
                            </div>
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">Principal Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">Name of School Principal</label>
                            <input type="text" class="form-control" id="PCSchoolPrincipal" maxlength="200">
                            <label for="" class="control-label">Principal Birthday</label>
                            <input type="text" class="form-control" id="PCPrincipalBirthday" maxlength="200" data-date-format="yyyy-dd-mm">
                            <label for="" class="control-label">Principal Facebook</label>
                            <input type="email" class="form-control" id="PCPrincipalFacebook" maxlength="200">
                            <label for="" class="control-label">Principal Email</label>
                            <input type="email" class="form-control" id="PCPrincipalEmail" maxlength="200">
                            <label for="" class="control-label">Principal Landline</label>
                            <input type="text" class="form-control" id="PCPrincipalLandline" maxlength="200">
                            <label for="" class="control-label">Principal Cellphone</label>
                            <input type="text" class="form-control" id="PCPrincipalCellphone" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Administrator Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">School Administrator</label>
                            <input type="text" class="form-control" id="PCSchoolAdministrator" maxlength="200">
                            <label for="" class="control-label">Administrator Birthday</label>
                            <input type="text" class="form-control" id="PCAdministratorBirthday" maxlength="200" data-date-format="yyyy-dd-mm">
                            <label for="" class="control-label">Administrator Facebook</label>
                            <input type="email" class="form-control" id="PCAdministratorFacebook" maxlength="200">
                            <label for="" class="control-label">Administrator Email</label>
                            <input type="email" class="form-control" id="PCAdministratorEmail" maxlength="200">
                            <label for="" class="control-label">Administrator Landline</label>
                            <input type="text" class="form-control" id="PCAdministratorLandline" maxlength="200">
                            <label for="" class="control-label">Administrator Cellphone</label>
                            <input type="text" class="form-control" id="PCAdministratorCellphone" maxlength="200">
                         </div>
                      </div>

                      <div class="box box-default">
                         <div class="box-header with-border">
                            <h3 class="box-title callout callout-info">School Administrator Details</h3>
                         </div>
                         <div class="box-body">
                            <label for="" class="control-label">Name of System Administrator</label>
                            <input type="text" class="form-control" id="PCSysAdministrator" maxlength="200">
                            <label for="" class="control-label">System Administrator Number</label>
                            <input type="text" class="form-control" id="PCSysContactNumber" maxlength="200">
                            <label for="" class="control-label">System Administrator Email</label>
                            <input type="text" class="form-control" id="PCSysEmailAddress" maxlength="200">
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Relation Manager</label>
                         <div class="col-sm-8">
                            <select id ="PCRelationManager" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT   apptopus_internal_id,apptopus_employee_fname,apptopus_employee_mname,  apptopus_employee_lname FROM apptopus_internalcustomers ");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["apptopus_internal_id"]; ?>"><?php echo $data["apptopus_employee_fname"]." ".$data["apptopus_employee_mname"]." ".$data["apptopus_employee_lname"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Product Avail</label>
                         <div class="col-sm-8">
                            <select id="PCProductAvail" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT apptopus_product_id,product_package FROM apptopus_product");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option value="<?php echo $data["apptopus_product_id"]; ?>"><?php echo $data["product_package"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">DateStart</label>
                         <div class="col-sm-8">
                            <input type="text" class="form-control" id="PCDateStart" maxlength="200" data-date-format="yyyy-dd-mm">
                         </div>
                      </div>

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Date Finish</label>
                         <div class="col-sm-8">
                            <input type="text" class="form-control" id="PCDateFinish" maxlength="200" data-date-format="yyyy-dd-mm">
                         </div>
                      </div>
                      
                     <!-- <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                            <input type="radio" id="optionsRadios1" value="Active" checked="true">Active
                            </label>
                            <label class="radio-inline">
                            <input type="radio" id="optionsRadios1" value="Inactive">Inactive
                             </label>
                          </div>
                      </div>-->

                  </form>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary newposclient" data-dismiss="modal">Add</button>
              </div>
            </div>
          </div>
        </div>
    <!--Modal -->

    <!--MODAL UPDATE INTERNAL CUSTOMER-->
        <div class="modal" id="possiblecus">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Update External Customer</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">ID</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCUExternalCustomer" maxlength="20" disabled="true">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">School Name</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSchoolName1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">School Address</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSchoolAddress1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Number of Pre-School</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCNumPreSchool1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Number of Grade School</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCNumGraSchool1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Number of HighSchool</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCNumHighSchool1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Number of Employees</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCNumEmployees1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Name of School Principal</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSchoolPrincipal1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Principal Birthday</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCPrincipalBirthday1" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Principal Facebook</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCPrincipalFacebook1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Principal Email</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCPrincipalEmail1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Principal Landline</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCPrincipalLandline1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Principal Cellphone</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCPrincipalCellphone1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">School Administrator</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSchoolAdministrator1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Administrator Birthday</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCAdministratorBirthday1" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Administrator Facebook</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCAdministratorFacebook1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Administrator Email</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCAdministratorEmail1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Administrator Landline</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCAdministratorLandline1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Administrator Cellphone</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCAdministratorCellphone1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Name of System Administrator</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSysAdministrator1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">System Administrator Number</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSysContactNumber1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">System Administrator Email</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCSysEmailAddress1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Relation Manager</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCRelationManager1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Product Avail</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCProductAvail1" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">DateStart</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCDateStart1" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">DateFinish</label>
                          <div class="col-sm-8">
                             <input type="text" class="form-control" id="PCDateFinish1" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <!--    <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-7">
                            <label class="radio-inline">
                                <input type="radio" name="optionsRadios1" value="Active" checked="true">Active
                              </label>
                              <label class="radio-inline">
                                <input type="radio" name="optionsRadios1" value="Inactive">Inactive
                              </label>
                          </div>
                          </div> -->
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning updatepos" data-dismiss="modal">UPDATE</button>
                 </div>
              </div>
           </div>
        </div>
        <!--MODAL UPDATE-->

        <!-- ADD NEW INTERNAL CUSTOMER-->
        <div class="modal" id="ViewInternalCustomer">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title callout callout-danger">Add New Internal Customer</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                      <div class="box box-default">
                         <div class="box-body">
                            <label for="" control-label">First Name</label>
                               <input type="text" class="form-control" id="Fname" maxlength="200">
                            <label for="" control-label">Middle Name</label>
                               <input type="text" class="form-control" id="Mname" maxlength="200">
                            <label for="" control-label">Last Name</label>
                               <input type="text" class="form-control" id="Lname" maxlength="200">
                         </div>
                      </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary newemployee" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--Modal -->

        <!--MODAL UPDATE INTERNAL CUSTOMER-->
        <div class="modal" id="Update-ViewInternalCustomer">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title callout callout-danger">Add New Internal Customer</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="modal-body">
                          <form class="form-horizontal">
                            <div class="box box-default">
                               <div class="box-body">
                                  <label for="" control-label">ID</label>
                                     <input type="text" class="form-control" id="Unis" maxlength="200" disabled="disabled">
                                  <label for="" control-label">First Name</label>
                                     <input type="text" class="form-control" id="UFname" maxlength="200">
                                  <label for="" control-label">Middle Name</label>
                                     <input type="text" class="form-control" id="UMname" maxlength="200">
                                  <label for="" control-label">Last Name</label>
                                     <input type="text" class="form-control" id="ULname" maxlength="200">
                               </div>
                            </div>
                          </form>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning UpdateInternalCustomer" data-dismiss="modal">Update</button>
                 </div>
              </div>
           </div>
        </div>
        <!--MODAL UPDATE-->

        <!--ADD NEW CHECK -->
        <div class="modal" id="AddCheck">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add New Check</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">ID</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="SchoolID" maxlength="200" disabled="true">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">School Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="SchoolName" maxlength="200" disabled="true">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Month</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentMonth" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentDate" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Check No.</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentCheckNo" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Bank</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentBank" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentAmount" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Status</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="PaymentStatus" maxlength="200" disabled="true">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addnewcheck" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

        <!-- TAB  ADD NEW VOUCHERS-->
        <div class="modal" id="idvoucher">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add Vouchers</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_date" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Account</label>
                         <div class="col-sm-8">
                            <select id="voucher_account_name" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT apptopus_account_name FROM apptopus_account");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["apptopus_account_name"]; ?>"><?php echo $data["apptopus_account_name"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Particular</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_particular" maxlength="200">
                          </div>
                       </div>

                      <div class="form-group">
                        <label for="" class="col-sm-3 control-label">Mode of Payment</label>
                          <div>
                          <input type="radio" class="radbut" name="r1" value="Bank">
                          <label for="" class="control-label">Bank</label>
                          <input type="radio" class="radbut" name="r1" value="Cash">
                          <label for="" class="control-label">Cash</label>
                          </div>
                      </div>

                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Bank</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_bank" maxlength="200" value="-" disabled="disabled">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Bank Check No.</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_bank_checkno" maxlength="200" value="-" disabled="disabled">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_amount" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Payee</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_payee" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary addnewvouchers" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

        <!-- TAB  ADD NEW VOUCHERS-->
        <div class="modal" id="detail_idvoucher">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add Vouchers</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Voucher ID</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_id_update" maxlength="200" disabled="true">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_date_update" maxlength="200" data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Account</label>
                         <div class="col-sm-8">
                            <select id="voucher_account_name" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT apptopus_account_name FROM apptopus_account");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["apptopus_account_name"]; ?>"><?php echo $data["apptopus_account_name"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Particular</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_particular_update" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Amount</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_amount_update" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Charge to</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_chargeto_update" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary updated_vouchers" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

        <!-- ADD NEW PRODUCT-->
        <div class="modal" id="add_new_product">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title callout callout-danger">Add New Product</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Package Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="Package_name" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary new_product" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--Modal -->

        <!-- UPDATE PRODUCT-->
        <div class="modal" id="update_product">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title callout callout-danger">Add New Product</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">

                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Product ID</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="Product_ID" maxlength="200" disabled="true">
                          </div>
                       </div>

                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Package Name</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="UPackage_name" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary updated_product" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--Modal -->


        <!-- TAB  ADD NEW VOUCHERS-->
        <div class="modal" id="budgetvoucher">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add Company Budget</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">

                      <div class="form-group">
                         <label for="" class="col-sm-3 control-label">Account</label>
                         <div class="col-sm-8">
                            <select id="Account_name" class="form-control target" >
                            <option> - </option>
                                <?php
                                include "config.php";
                                $query = $conn->prepare("SELECT apptopus_account_name FROM apptopus_account");
                                $query->execute();
                                $query->setFetchMode(PDO::FETCH_ASSOC);
                                while ($data=$query->fetch(PDO::FETCH_ORI_NEXT)) { ?>
                                <option  value="<?php echo $data["apptopus_account_name"]; ?>"><?php echo $data["apptopus_account_name"];?></option>
                              <?php };?>
                            </select>
                         </div>
                      </div>

                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Budget</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_budget" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_budget" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

        <!-- TAB ADD NEW CHART OF ACCOUNTS-->
        <div class="modal" id="add_accounts">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Add Chart of accounts</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="chart_date" maxlength="200"  data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Account ID</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_account_id" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Account</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="voucher_account" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary add_chartaccount" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

        <!-- TAB ADD NEW CHART OF ACCOUNTS-->
        <div class="modal" id="update_accounts">
           <div class="modal-dialog">
              <div class="modal-content">
                 <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h3 class="modal-title">Update Chart of accounts</h3>
                 </div>
                 <div class="modal-body">
                    <form class="form-horizontal">
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Date</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="update_chart_date" maxlength="200"  data-date-format="yyyy-dd-mm">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Account ID</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="update_voucher_account_id" maxlength="200">
                          </div>
                       </div>
                       <div class="form-group">
                          <label for="" class="col-sm-3 control-label">Account</label>
                          <div class="col-sm-9">
                             <input type="text" class="form-control" id="update_voucher_account" maxlength="200">
                          </div>
                       </div>
                    </form>
                 </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary update_chartaccount" data-dismiss="modal">Add</button>
                 </div>
              </div>
           </div>
        </div>
        <!--modal-->

  <script>
  $(function () {

      //Date picker
    $('#PrincipalBirthday1').datepicker({
      autoclose: true
    })
    $('#AdministratorBirthday1').datepicker({
      autoclose: true
    })
    $('#DateStart1').datepicker({
      autoclose: true
    })
    $('#DateFinish1').datepicker({
      autoclose: true
    })
    $('#PCPrincipalBirthday').datepicker({
      autoclose: true
    })
    $('#PCAdministratorBirthday').datepicker({
      autoclose: true
    })
    $('#PCDateStart').datepicker({
      autoclose: true
    })
    $('#PCDateFinish').datepicker({
      autoclose: true
    })

    $('#PCPrincipalBirthday1').datepicker({
      autoclose: true
    })
    $('#PCAdministratorBirthday1').datepicker({
      autoclose: true
    })
    $('#PCDateStart1').datepicker({
      autoclose: true
    })
    $('#PCDateFinish1').datepicker({
      autoclose: true
    })
    $('#PaymentDate').datepicker({
      autoclose: true
    })
    $('#voucher_date').datepicker({
      autoclose: true
    })
    $('#voucher_date_update').datepicker({
      autoclose: true
    })
    $('#chart_date').datepicker({
      autoclose: true
    })

    $(".radbut").click(function() {
        $("#voucher_bank").attr("disabled", true);
        $("#voucher_bank_checkno").attr("disabled", true);
    if ($("input[name=r1]:checked").val() == "Bank") {
        $("#voucher_bank").attr("disabled", false);
        $("#voucher_bank_checkno").attr("disabled", false);
        $("#voucher_amount").attr("disabled", false);
       }
     });
  });
</script>