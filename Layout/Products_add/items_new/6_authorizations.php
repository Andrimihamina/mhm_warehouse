<div class="card">
    <div class="card-body">
        <h5 class="card-title">F- Attached services </h5>
        <ul class="nav nav-tabs d-flex" id="myTabjustified" role="tablist">
            <!-- ACTIVE -->
            <li class="nav-item flex-fill" role="presentation"><button class="nav-link w-100" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-justified" type="button" role="tab" aria-controls="home" aria-selected="true">ACTIVE</button></li>
            <!-- PASSIVE -->
            <li class="nav-item flex-fill" role="presentation"><button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-justified" type="button" role="tab" aria-controls="profile" aria-selected="true">PASSIVE</button></li>
            <!-- TEMPORARY -->
            <li class="nav-item flex-fill" role="presentation"><button class="nav-link w-100" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-justified" type="button" role="tab" aria-controls="contact" aria-selected="true">TEMPORARY</button></li>
        </ul>

        <div class="tab-content pt-2" id="myTabjustifiedContent">
            <!-- ACTIVE-->
            <div class="tab-pane fade" id="home-justified" role="tabpanel" aria-labelledby="home-tab">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!---Mobile medical---->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">MOBILE MEDICAL CARE</button></h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!---ULM---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="ulm" value="1" id="ulm"><label class="form-check-label" for="ulm">Ulm</label></div>
                                <!---MIDMOB---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="midmob" value="1" id="Midmob"><label class="form-check-label" for="Midmob">Midmob</label></div>
                                <!---DENTMOB---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="detmob" value="1" id="Detmob"><label class="form-check-label" for="Detmob">Detmob</label></div>
                                <!---Ambulance 1---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="ambulance_1" value="1" id="Ambulance_1"><label class="form-check-label" for="Ambulance_1">Ambulance 1</label></div>
                                <!---Ambulance 2---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="ambulance_2" value="1" id="Ambulance_2"><label class="form-check-label" for="Ambulance_2">Ambulance 2</label></div>
                                <!---Outreaches with parteners---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="outreaches_with_parteners" value="1" id="Outreaches"><label class="form-check-label" for="Outreaches">Outreaches with parteners</label></div>
                            </div>
                        </div>
                    </div>  
                    <!---Medical---->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">ON SITE MEDICAL CARE</button></h2>
                        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----OUTPATIENTS---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Outpatiens</legend>
                                    <div class="col-sm-10">
                                        <!-----Joy Center---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_Joy_Center" value="1" id="Outpatiens Joy Center"><label class="form-check-label" for="Outpatiens Joy Center">Joy Center</label></div>
                                        <!-----Emergency---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_Emergency" value="1" id="Outpatiens Emergency"><label class="form-check-label" for="Outpatiens Emergency">Emergency</label></div>
                                        <!-----Grace Center---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_Grace_Center" value="1" id="Outpatiens Grace Center"><label class="form-check-label" for="Outpatiens Grace Center">Grace Center</label></div>
                                        <!-----Occupational therapy---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_occupational_therapy" value="1" id="Outpatiens occupational therapy"><label class="form-check-label" for="Outpatiens occupational therapy">Occupational therapy</label></div>
                                        <!-----General Doc---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_general_Doctors" value="1" id="Outpatiens general Doctors"><label class="form-check-label" for="Outpatiens general Doctors">General Doctors</label></div>
                                        <!-----Pediatric---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_pediatric" value="1" id="Outpatiens pediatric"><label class="form-check-label" for="Outpatiens pediatric">Pediatric Outpatients</label></div>
                                        <!-----Dental---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dental" value="1" id="Outpatiens dental"><label class="form-check-label" for="Outpatiens dental">Dental</label></div>
                                        <!-----Dermathology---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_dermathology" value="1" id="Outpatiens Dermathology" ><label class="form-check-label" for="Outpatiens Dermathology">Dermathology</label></div>
                                        <!-----Ultrasound---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Ultrasound" value="1" id="Outpatiens Ultrasound"><label class="form-check-label" for="Outpatiens Ultrasound">Ultrasound</label></div>
                                        <!-----Obstetrical---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_obstetrical" value="1" id="Outpatiens obstetrical"><label class="form-check-label" for="Outpatiens obstetrical">Obstetrical</label></div>
                                        <!-----Planning Familial---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="outpatients_Planning_Familial" value="1" id="Outpatiens Planning Familial"><label class="form-check-label" for="Outpatiens Planning Familial">Planning Familial</label></div>
                                        <!-----Yuck Room---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox"  name="outpatients_Yuck_Room" value="1" id="Outpatiens Yuck Room"><label class="form-check-label" for="Outpatiens Yuck Room">Yuck Room</label></div>    
                                    </div>
                                </div>   
                                <!-----STEERILIZATION AND LABORATORY---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Sterilizations & Laboratory</legend>
                                    <div class="col-sm-10">
                                        <!-----Sterilizations---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="sterilizations" value="1" id="sterilizations"><label class="form-check-label" for="Outpatiens sterilizations">Sterilizations</label></div>
                                        <!-----Laboratory---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="laboratory" value="1" id="laboratory"><label class="form-check-label" for="Outpatiens laboratory">Laboratory</label></div>    
                                    </div>
                                </div>
                                <!-----OBSTETRICAL---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Obstetricals</legend>
                                    <div class="col-sm-10">
                                        <!-----General---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_delivery" value="1" id="Obstetricals delivery"><label class="form-check-label" for="Obstetricals delivery">Delivery</label></div>
                                    </div>
                                </div>
                                <!-----INPATIENTS---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Inpatients</legend>
                                    <div class="col-sm-10">
                                        <!-----Baby Room---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Baby_Room" value="1" id="Inpatients Baby Room"><label class="form-check-label" for="Inpatients Baby Room">Baby Room</label></div>
                                        <!-----Stork Center---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Stork_Center" value="1" id="Inpatients Stork Center"><label class="form-check-label" for="Inpatients Stork Center">Stork Center</label></div>
                                        <!-----Neonatal Intensive---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Intensive" value="1" id="Inpatients Neonatal Intensive"><label class="form-check-label" for="Inpatients Neonatal Intensive">Neonatal Intensive</label></div>
                                        <!-----Neonatal Kangaroo---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_Neonatal_Kangaroo" value="1" id="Inpatients Neonatal Kangaroo"><label class="form-check-label" for="Inpatients Neonatal Kangaroo">Neonatal Kangoroo</label></div>
                                        <!-----Pediatric One---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_pediatric_one" value="1" id="Inpatients pediatric One"><label class="form-check-label" for="Inpatients pediatric One">Pediatric One</label></div>
                                    </div>
                                </div>
                                <!-----SURGERIES---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Surgeries</legend>
                                    <div class="col-sm-10">
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="inpatients_surgeries" value="1" id="Surgeries"><label class="form-check-label" for="Surgeries">Surgeries</label> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---COOPERATIONS--->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">COOPERATIONS</button></h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----O THERAPY---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="o_therapy" value="1" id="o_therapy"><label class="form-check-label" for="o_therapy">O Therapy GNTP</label></div>
                                <!-----German Docs---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="german_docs" value="1" id="German Docs"><label class="form-check-label" for="German Docs">German Docs</label></div>
                                <!-----Eye---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="eye" value="1" id="Eye"><label class="form-check-label" for="Eye">Eye</label></div>
                                <!-----Dermathology---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="external_dermathology" value="1" id="Dermathology"><label class="form-check-label" for="Dermathology">Dermathology</label></div>
                                <!-----Others---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="external_others" value="1" id="external_others"><label class="form-check-label" for="external_others">Others</label></div>
                            </div>
                        </div>
                    </div>
                    <!---SOCIO-MEDICAL AID---->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfour"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapsefour">SOCIO-MEDICAL AID</button></h2>
                        <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Medical support---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_medical_support" value="1" id="Medical Support"><label class="form-check-label" for="Medical Support">Medical Support</label></div>
                                <!-----Milk Program---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_milk_program" value="1" id="Milk Program"><label class="form-check-label" for="Milk Program">Milk Program</label></div>
                                <!-----Famillies---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_familles" value="1" id="Families"><label class="form-check-label" for="Families">Families</label></div>
                                <!-----MHM Staff kids---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_mhm_staff_kids" value="1" id="MHM Staff Kids"><label class="form-check-label" for="MHM Staff Kids">MHM Staff Kids</label></div>
                                <!-----Healthy Foods---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_healthy_foods" value="1" id="Helthy Foods"><label class="form-check-label" for="Helthy Foods">Helthy Foods</label></div>
                                <!-----MHM Staff Families---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_mhm_staff_familles" value="1" id="MHM Staff Families"><label class="form-check-label" for="MHM Staff Families">MHM Staff Families</label></div>
                                <!-----Pregnancies---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_preganancies" value="1" id="Pregnancies"><label class="form-check-label" for="Pregnancies">Pregnancies</label></div>
                                <!-----Kids---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_kids" value="1"  id="Kids"><label class="form-check-label" for="Kids">Kids</label></div>
                                <!-----School---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="sponsorships_school" value="1" id="School"><label class="form-check-label" for="School">School</label></div>
                            </div>
                        </div>
                    </div>
                    <!---MINISTRY---->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingfive"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapsefive">MINISTRY</button></h2>
                        <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Chaplincy---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="social_chaplincy" value="1" id="Chapliny"><label class="form-check-label" for="Chapliny">Chaplincy</label></div>
                                <!-----Kids Clubs---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="social_kids_club" value="1" id="Kids Clubs"><label class="form-check-label" for="Kids Clubs">Kids Clubs</label></div>
                                <!-----Playmobil---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="social_playmobil" value="1" id="Playmobil"><label class="form-check-label" for="Playmobil">Playmobil</label></div>
                                <!-----Prayer Workship Alpha Course---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="social_prayer" value="1" id="Prayer Workship Alpha Course"><label class="form-check-label" for="Prayer Workship Alpha Course">Prayer Workship Alpha Course</label></div>
                                <!-----Sensibilization---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="social_sensibilizations" value="1" id="Sensibilization"><label class="form-check-label" for="Sensibilization">Sensibilization</label></div>
                            </div>
                        </div>
                    </div>         
                    <!---INTERNAL---->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingsix"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapsesix">TRAINING AND TEACHING</button></h2>
                        <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Internal---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">Internal</legend>
                                    <div class="col-sm-10">
                                        <!-----Admin---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_admin" value="1" id="training_internal_admin"><label class="form-check-label" for="training_internal_admin">Admin</label></div>
                                        <!-----Medical---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_medical" value="1" id="training_internal_medical"><label class="form-check-label" for="training_internal_medical">Medical</label></div>
                                        <!-----Social---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_social" value="1" id="training_internal_social"><label class="form-check-label" for="training_internal_social">Social</label></div>
                                        <!-----Technical---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_internal_technical" value="1" id="training_internal_technical"><label class="form-check-label" for="training_internal_technical">Technical</label></div>
                                    </div>
                                </div>
                                <!-----External---->
                                <div class="row mb-3"><legend class="col-form-label col-sm-2 pt-0">External</legend>
                                    <div class="col-sm-10">
                                        <!-----Admin---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_admin" value="1" id="training_external_admin"><label class="form-check-label" for="training_external_admin">Admin</label></div>
                                        <!-----Medical---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_medical" value="1" id="training_external_medical"><label class="form-check-label" for="training_external_medical">Medical</label></div>
                                        <!-----Social---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_social" value="1"  id="training_external_social"><label class="form-check-label" for="training_external_social">Social</label></div>
                                        <!-----Technical---->
                                        <div class="form-check"><input class="form-check-input" type="checkbox" name="training_external_technical" value="1"  id="training_external_technical"><label class="form-check-label" for="training_external_technical">Technical</label></div>
                                    </div>
                                </div>          
                        </div>
                    </div>
                </div>
            </div>
            <!-- FIN ACTIVE -->
        </div>
        <div class="tab-content pt-2" id="myTabjustifiedContent">
            <!------PASSIVE------->
            <div class="tab-pane fade" id="profile-justified" role="tabpanel" aria-labelledby="profile-tab">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!---ADMIN---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingSeven"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">ADMIN</button></h2>
                        <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!---Admin--->
                                <div class="form-check"><input class="form-check-input" type="checkbox"  name="admin_admin" value="1" id="admin_admin"><label class="form-check-label" for="admin_admin">Admin</label></div>
                                <!---Logistic--->
                                <div class="form-check"><input class="form-check-input" type="checkbox"  name="admin_logistic" value="1" id="admin_logistic"><label class="form-check-label" for="admin_logistic">Logistic</label></div>
                                <!---Finance---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="admin_finance" value="1" id="admin_finance"><label class="form-check-label" for="admin_finance">Finance</label></div>
                                <!---IT---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="admin_it" value="1" id="admin_it"><label class="form-check-label" for="admin_it">IT</label></div>
                                <!---QM---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="admin_qm" value="1" id="admin_qm"><label class="form-check-label" for="admin_qm">QM</label></div>
                                <!---Communication---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="admin_communication" value="1" id="admin_communication"><label class="form-check-label" for="admin_communication">Communication</label></div>                           
                            </div>
                        </div>
                    </div>
                    <!---STAFF---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingEight"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">STAFF</button></h2>
                        <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----HR---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="HR" value="1" id="HR"><label class="form-check-label" for="HR">HR</label></div>                         
                            </div>
                        </div>
                    </div>
                    <!---WAREHOUSE---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingfourteen"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefourteen" aria-expanded="false" aria-controls="flush-collapsefourteen">WAREHOUSE</button></h2>
                        <div id="flush-collapsefourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingfourteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----WAREHOUSE---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="Warehouse" value="1" id="Warehouse"><label class="form-check-label" for="Warehouse">WAREHOUSE</label></div>                         
                            </div>
                        </div>
                    </div>
                    <!---OPERATIONS---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingfifteen"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefifteen" aria-expanded="false" aria-controls="flush-collapsefifteen">OPERATION</button></h2>
                        <div id="flush-collapsefifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingfifteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Cleaning---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cleaning" value="1" id="bulding_inside_Cleaning"><label class="form-check-label" for="bulding_inside_Cleaning">Cleaning</label></div>
                                <!-----Cooking---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Cooking" value="1" id="bulding_inside_Cooking"><label class="form-check-label" for="bulding_inside_Cooking">Cooking</label></div>
                                <!-----Laundry---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="Operation_Laundry" value="1" id="bulding_inside_Laundry"><label class="form-check-label" for="bulding_inside_Laundry">Laundry</label></div>
                            </div>
                        </div>
                    </div>
                    <!---TECHNICAL---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingsexteen"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesexteen" aria-expanded="false" aria-controls="flush-collapsesexteen">TECHNICAL</button></h2>
                        <div id="flush-collapsesexteen" class="accordion-collapse collapse" aria-labelledby="flush-headingsexteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Technical---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="technical_technical" value="1" id="bulding_inside_technical"><label class="form-check-label" for="bulding_inside_technical">Technical</label></div>
                                <!-----Biomed---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Biomed" value="1" id="bulding_inside_Biomed"><label class="form-check-label" for="bulding_inside_Biomed">Biomed</label></div>
                                <!-----Mechanical---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="technical_Mechanical" value="1" id="bulding_inside_Mechanical"><label class="form-check-label" for="bulding_inside_Mechanical">Mechanical</label></div>
                            </div>
                        </div>
                    </div>
                    <!---VEHICLES---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingNine"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">VEHICLES</button></h2>
                        <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----isuzu blue---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_isuzu_bleu" value="1" id="vehicles_isuzu_bleu"><label class="form-check-label" for="vehicles_isuzu_bleu">Isuzu Blue</label></div>
                                <!-----ISUZU GREEN---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_isuzu_green" value="1" id="vehicles_isuzu_green"><label class="form-check-label" for="vehicles_isuzu_green">Isuzu Green</label></div>
                                <!-----GALOPPER---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_galopper" value="1" id="vehicles_galopper"><label class="form-check-label" for="vehicles_galopper">Galopper</label></div>
                                <!-----Daihatsu---->
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="vehicles_daihatsu" value="1" id="vehicles_daihatsu"><label class="form-check-label" for="vehicles_daihatsu">Daihatsu</label></div>
                                <!-----Land Cruser---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_prado" value="1" id="vehicles_prado"><label class="form-check-label" for="vehicles_prado">Land Cruser</label></div>
                                <!-----Starex---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_starex" value="1" id="vehicles_starex"><label class="form-check-label" for="vehicles_starex">Starex</label></div>
                                <!-----Sprinter---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_sprinter" value="1" id="vehicles_sprinter"><label class="form-check-label" for="vehicles_sprinter">Sprinter</label></div>
                                <!-----Motorbike Honda---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_motorbike_honda" value="1" id="vehicles_motorbike_honda"><label class="form-check-label" for="vehicles_motorbike_honda">Motorbike Honda</label></div>
                                <!-----Scooter Bleu---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_scooter_bleu" value="1" id="vehicles_scooter_bleu"><label class="form-check-label" for="vehicles_scooter_bleu">Scooter Blue</label></div>
                                <!-----Others---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="vehicles_others" value="1" id="vehicles_others"><label class="form-check-label" for="vehicles_others">Vehicles Others</label></div>
                            </div>
                        </div>
                    </div>
                    <!---BULDING INSIDE---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingTen"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">BULDING INSIDE</button></h2>
                        <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingfTen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Well and water---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_well_and_water" value="1" id="bulding_inside_well_and_water"><label class="form-check-label" for="bulding_inside_well_and_water">Well and water</label></div>
                                <!-----Solar Panel & Ellectricity---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_solar" value="1" id="bulding_inside_solar"><label class="form-check-label" for="bulding_inside_solar">Solar Panel & Electricity</label></div>
                                <!-----Generator & Electricity---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_generator" value="1" id="bulding_inside_generator"><label class="form-check-label" for="bulding_inside_generator">Generator & Electricity</label></div>
                                <!-----Operation---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_operation" value="1" id="bulding_inside_operation"><label class="form-check-label" for="bulding_inside_operation">Operation</label></div>
                                <!-----Equipement Machinery & Device---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_inside_equipement" value="1"  id="bulding_inside_equipement"><label class="form-check-label" for="bulding_inside_equipement">Equipement Machinery & Device</label></div>
                            </div>
                        </div>
                    </div>
                    <!---BULDING OUTSIDE---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingEleven"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">BULDING OUTSIDE</button></h2>
                        <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----Technical site---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_technical" value="1" id="bulding_outside_technical"><label class="form-check-label" for="bulding_outside_technical">Technical site</label></div>
                                <!-----Canteen---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_canteen" value="1" id="bulding_outside_canteen"><label class="form-check-label" for="bulding_outside_canteen">Canteen</label></div>
                                <!-----Yard---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_yard" value="1" id="bulding_outside_yard"><label class="form-check-label" for="bulding_outside_yard">Yard</label></div>
                                <!-----Villa KB---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_villa_kb" value="1" id="bulding_outside_villa_kb"><label class="form-check-label" for="bulding_outside_villa_kb">Villa KB</label></div>
                                <!-----Security---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="bulding_outside_security" value="1" id="bulding_outside_security"><label class="form-check-label" for="bulding_outside_security">Security Safety</label></div>
                            </div>
                        </div>
                    </div>
                </div>
            <!------FIN PASSIVE------>
            </div>  
        </div>
        <div class="tab-content pt-2" id="myTabjustifiedContent">
            <!------TEMPORARY------->
            <div class="tab-pane fade" id="contact-justified" role="tabpanel" aria-labelledby="contact-tab">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <!---New Bulding---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingTwelve"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">NEW BULDING</button></h2>
                        <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!---New Bulding--->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="new_bulding" value="1" id="new_bulding"><label class="form-check-label" for="new_bulding">New Bulding</label></div>
                            </div>
                        </div>
                    </div>
                    <!---STORAGE---->
                    <div class="accordion-item"><h2 class="accordion-header" id="flush-headingthirteen"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethirteen" aria-expanded="false" aria-controls="flush-collapsethirteen">STORAGES</button></h2>
                        <div id="flush-collapsethirteen" class="accordion-collapse collapse" aria-labelledby="flush-headingthirteen" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <!-----TECHNICALS STORAGE---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="technical_storage" value="1" id="technical_storage"><label class="form-check-label" for="technical_storage">Technical Storage</label></div>
                                <!-----MEDICALS STORAGE---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="medical_storage" value="1" id="medical_storage"><label class="form-check-label" for="medical_storage">Medical Storage</label></div>
                                <!-----Non MEDICAL STORAGE---->
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="no_medical_storage" value="1" id="no_medical_storage"><label class="form-check-label" for="no_medical_storage">Not Medical Storage</label></div>
                            </div>
                        </div>
                     </div>
                </div>
            </div>
            <!------FIN TEMPORARY------>
        </div>
    </div>
</div>
</div>
