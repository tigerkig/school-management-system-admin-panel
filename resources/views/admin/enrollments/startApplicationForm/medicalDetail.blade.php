<form id="medicalDetailForm">
     <p>Having as much information as we can about the student's medical history will help the school to look after their wellbeing. This section includes:</p>
     <ul class="m_medicalList pl-3">
          <li>Medicare details</li>
          <li>Severe allergies</li>
          <li>Non-severe allergies</li>
          <li>Other medical conditions such as asthma, diabetes or epilepsy.</li>
     </ul>
     
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="educationalHeader">
                    <p><strong>Student's Medicare details</strong></p>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Medicare number</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="m_MedicareNumber">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Reference number</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="m_ReferenceNumber">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label">Expiry date</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control custom-datepicker text-center" name="m_expiryDate">
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4">
               <h6>Please add all doctor or medical specialists who may currently be treating the <span class="changingName">student</span>:</h6>
          </div>
          <div class="col-md-12">
               <div class="m_addAnotherDocterMedicalCentre_form">
                    <div class="row mt-4">
                         <div class="col-md-12 mt-4">
                              <div class="educationalHeader">
                                   <p><strong class="student_doctor_title">Doctor 1</strong></p>
                              </div>
                         </div>
                         <div class="col-md-6 mt-4">
                              <div class="form-group">
                                   <label class="form-label">Doctor's name/medical centre</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_docter_name" name="m_docter_name[0]" onchange="changeDoctorName(this)">
                                   </div>
                                   <p class="description">The name of a medical centre is also accepted.</p>
                              </div>
                         </div>
                         <div class="col-md-6 mt-4">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>Country</label>
                                   <select class="form-control m_docter_country" name="m_docter_country[0]" onchange="change_doctor_country(0, this.value)">
                                        <option value="">select country</option>
                                        @foreach($countryList as $key => $list)
                                        <option value="{{ $list->name }}">{{ $list->name }}</option>
                                             @if($key == 0)
                                                  <option disabled>--------------------------</option>
                                             @endif
                                        @endforeach
                                   </select>
                              </div>
                         </div>
                         <div class="col-md-6 mt-4 doctor_australia_country_0">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>Street</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_street" name="m_street[0]">
                                   </div>
                                   <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                              </div>
                         </div>
                         <div class="col-md-6 mt-4 doctor_australia_country_0">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>Suburb</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_suburb" name="m_suburb[0]">
                                   </div>
                                   <p class="description mt-2">e.g. Sydney</p>
                              </div>
                         </div>
                         <div class="col-md-3 mt-4 doctor_australia_country_0">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>State</label>
                                   <div class="form-control-wrap">
                                        <select class="form-control m_state" name="m_state[0]">
                                             <option value="none">select...</option>
                                             <option value="ACT">AUSTRALIAN CAPITAL TERRITORY</option>
                                             <option value="NSW">NEW SOUTH WALES</option>
                                             <option value="QUE">QUEENSLAND</option>
                                             <option value="VIC">VICTORIA</option>
                                             <option value="WAU">WESTERN AUSTRALIA</option>
                                             <option value="SAU">SOUTH AUSTRALIA</option>
                                             <option value="TAS">TASMANIA</option>
                                             <option value="NTER">NORTHERN TERRITORY</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-3 mt-4 doctor_australia_country_0">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>Postcode</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_postcode" name="m_postcode[0]">
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-12 mt-4 doctor_other_country_0">
                              <div class="form-group">
                                   <label class="form-label"><span class="required">*</span>Address</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_address_line_1" name="m_address_line_1[0]" placeholder="Address line 1">
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-12 mt-4 doctor_other_country_0">
                              <div class="form-group">
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_address_line_2" name="m_address_line_2[0]" placeholder="Address line 2">
                                   </div>
                              </div>
                         </div>
                         <div class="col-md-6 mt-4">
                              <div class="form-group">
                                   <label class="form-label">Phone number</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control m_phone_number" name="m_phone_number[0]">
                                   </div>
                                   <p class="description">In special circumstances the school may ask permission to contact the student's doctor.</p>
                              </div>
                         </div>
                    </div>
               </div>
               
               <div class="nk-block-tools-opt mt-4">
                    <a class="btn btn-outline-light custom-btn" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
               </div>
          </div>   
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Does the <span class="changingName">student</span> have any anaphylactic allergies?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="anaphylactic_allergies_yes" name="anaphylactic_allergies" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="anaphylactic_allergies_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="anaphylactic_allergies_no" name="anaphylactic_allergies" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="anaphylactic_allergies_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-2">Anaphylaxis is a severe, potentially life-threatening, allergic reaction.</p>
               </div>
          </div>
          <div class="col-md-12 student_anaphylactic_allergies_field">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <h5>Please add all of the <span class="changingName">student</span>'s anaphylactic allergies:</h5>
                    </div>
                    <div class="col-md-12 mt-4">
                         <div class="m_addAnaphylacticAllergy_form">
                              <div class="row m-1 white-background">
                                   <div class="col-md-12 mt-4">
                                        <div class="educationalHeader">
                                             <p><strong class="anaphylactic_allergy_title">Anaphylactic allergy 1</strong></p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">The student is allergic to...</label>
                                             <select class="form-control m_allergic_to" name="m_allergic_to[0]">
                                                  <option value="">Select</option>
                                                  <option value="ALC">Cow's milk</option>
                                                  <option value="ALE">Egg</option>
                                                  <option value="ALF">Fish</option>
                                                  <option value="ALI">Insect sting/bite</option>
                                                  <option value="ALM">Medication</option>
                                                  <option value="ALP">Peanuts</option>
                                                  <option value="ASE">Sesame</option>
                                                  <option value="ALS">Shellfish</option>
                                                  <option value="ALL">Soy</option>
                                                  <option value="ALT">Tree nuts</option>
                                                  <option value="ALW">Wheat</option>
                                                  <option value="ALO">Other</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group hosp_allergy">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been hospitalised for this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="hospitalised_allergy_yes[0]" name="hospitalised_allergy[0]" onchange="change_hospitalised_allergy(0, 1)" class="custom-control-input " value="1">
                                                                 <label class="custom-control-label" for="hospitalised_allergy_yes[0]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="hospitalised_allergy_no[0]" name="hospitalised_allergy[0]" onchange="change_hospitalised_allergy(0, 0)" class="custom-control-input " value="0">
                                                                 <label class="custom-control-label" for="hospitalised_allergy_no[0]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_hospital_name_0" >
                                        <div class="form-group">
                                             <label class="form-label">Hospital name</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control m_hospital_name" name="m_hospital_name[0]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group diag_allergy">
                                             <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="diagnosed_allergy_yes" name="diagnosed_allergy[0]" onchange="change_diagnosed_allergy(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="diagnosed_allergy_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="diagnosed_allergy_no" name="diagnosed_allergy[0]" onchange="change_diagnosed_allergy(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="diagnosed_allergy_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_docter_treating_allergy_0">
                                        <div class="form-group">
                                             <label class="form-label">Please select the doctor that is treating this allergy</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control m_docter_treating_allergy" name="m_docter_treating_allergy[0]" onclick="change_docter_treating_allergy(this.value)">
                                                       <option value="">select</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_docter_treating_allergy_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group plan_anaphylaxis">
                                             <label class="form-label"><span class="required">*</span>Does the <span class="changingName">student</span> have an ASCIA Action Plan for Anaphylaxis?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="plan_anaphylaxis_yes" name="plan_anaphylaxis[0]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="plan_anaphylaxis_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="plan_anaphylaxis_no" name="plan_anaphylaxis[0]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="plan_anaphylaxis_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <p class="description mt-2">If yes, a copy of this will be required </p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group adrenaline_autoinjector">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been prescribed an adrenaline autoinjector?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="adrenaline_autoinjector_yes" name="adrenaline_autoinjector[0]" onchange="change_adrenaline_autoinjector(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="adrenaline_autoinjector_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="adrenaline_autoinjector_no" name="adrenaline_autoinjector[0]" onchange="change_adrenaline_autoinjector(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="adrenaline_autoinjector_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <ul class="m_medicalList pl-3 mt-2">
                                                  <li>ie EpiPen®</li>
                                                  <li>If yes, an adrenaline autoinjector will need to be provided to the school and renewed prior to the expiry date.</li>
                                                  <li>Each time the student is prescribed a new adrenaline autoinjector the doctor should issue an updated ASCIA Action Plan for Anaphylaxis.</li>
                                                  <li>It is important that any updated plan is provided to the school.</li>
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_adrenaline_autoinjector_0" >
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Expiry date of adrenaline autoinjector</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control date-picker-alt m_adrenaline_autoinjector" name="m_adrenaline_autoinjector[0]" data-date-format="dd/mm/yyyy">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group medication_allergy">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been prescribed any other medication for this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="medication_allergy_yes" name="medication_allergy[0]" onchange="change_medication_allergy(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="medication_allergy_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="medication_allergy_no" name="medication_allergy[0]" onchange="change_medication_allergy(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="medication_allergy_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4" id="m_addMedicationAllergy_parent_form_0">
                                        <div class="row">
                                             <div class="col-md-12 mt-4">
                                                  <div class="educationalHeader">
                                                       <p><strong class="medication_name_title">Medication 1</strong></p>
                                                  </div>
                                             </div>
                                             <div class="col-md-12 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label"><span class="required">*</span>Name</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control m_medication_name[0]" name="m_medication_name[0][0]">
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="col-md-12 mt-4 m_medication_allergy_button_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addAnotherMedication(0)"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                                        </div>
                                   </div>

                              </div>
                         </div>
                         
                         <div class="nk-block-tools-opt mt-4">
                              <a class="btn btn-outline-light custom-btn" id="AddAnotherAnaphylacticAllergy"><em class="icon ni ni-plus"></em><span>Add another anaphylactic allergy</span></a>
                         </div>
                    </div>   
               </div>
          </div>
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Does the <span class="changingName">student</span> have any non-severe allergies?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="non_severe_allergies_yes" name="non_severe_allergies" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="non_severe_allergies_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="non_severe_allergies_no" name="non_severe_allergies" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="non_severe_allergies_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-2">Non-severe allergies do not result in anaphylactic reactions and do not require an adrenaline autoinjector.</p>
               </div>
          </div>
          <div class="col-md-12 student_non_severe_allergies_field">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <h5>Please add all of the student's non-severe allergies:</h5>
                    </div>
                    <div class="col-md-12 mt-4">
                         <div class="m_addNonSevereAllergy_form">
                              <div class="row m-1 white-background">
                                   <div class="col-md-12 mt-4">
                                        <div class="educationalHeader">
                                             <p><strong class="non_severe_allergy_title">Non-severe allergy 1</strong></p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">The student is allergic to...</label>
                                             <select class="form-control m_non_severe_allergic_to" name="m_non_severe_allergic_to[0]">
                                                  <option value="">Select</option>
                                                  <option value="ALC">Cow's milk</option>
                                                  <option value="ALE">Egg</option>
                                                  <option value="ALF">Fish</option>
                                                  <option value="ALI">Insect sting/bite</option>
                                                  <option value="ALM">Medication</option>
                                                  <option value="ALP">Peanuts</option>
                                                  <option value="ASE">Sesame</option>
                                                  <option value="ALS">Shellfish</option>
                                                  <option value="ALL">Soy</option>
                                                  <option value="ALT">Tree nuts</option>
                                                  <option value="ALW">Wheat</option>
                                                  <option value="ALO">Other</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group non_severe_hosp_allergy">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been hospitalised for this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_hospitalised_allergy_yes[0]" name="non_severe_hospitalised_allergy[0]" onchange="change_non_severe_hospitalised_allergy(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="non_severe_hospitalised_allergy_yes[0]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_hospitalised_allergy_no[0]" name="non_severe_hospitalised_allergy[0]" onchange="change_non_severe_hospitalised_allergy(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="non_severe_hospitalised_allergy_no[0]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_non_severe_hospital_name_0" >
                                        <div class="form-group">
                                             <label class="form-label">Hospital name</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control m_non_severe_hospital_name" name="m_non_severe_hospital_name[0]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group non_severe_diagnosed_allergy">
                                             <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_diagnosed_allergy_yes" name="non_severe_diagnosed_allergy[0]" onchange="change_non_severe_diagnosed_allergy(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="non_severe_diagnosed_allergy_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_diagnosed_allergy_no" name="non_severe_diagnosed_allergy[0]" onchange="change_non_severe_diagnosed_allergy(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="non_severe_diagnosed_allergy_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_non_severe_docter_treating_allergy_0">
                                        <div class="form-group">
                                             <label class="form-label">Please select the doctor that is treating this allergy</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control m_non_severe_docter_treating_allergy" name="m_non_severe_docter_treating_allergy[0]" onclick="change_non_severe_docter_treating_allergy(this.value)">
                                                       <option value="">select</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_non_severe_docter_treating_allergy_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group non_severe_plan_anaphylaxis">
                                             <label class="form-label"><span class="required">*</span>Does the <span class="changingName">student</span> have a documented action plan for this medical condition from a doctor?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_plan_anaphylaxis_yes" name="non_severe_plan_anaphylaxis[0]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="non_severe_plan_anaphylaxis_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_plan_anaphylaxis_no" name="non_severe_plan_anaphylaxis[0]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="non_severe_plan_anaphylaxis_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <p class="description mt-2">If yes, a copy of this will be required </p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group non_severe_adrenaline_autoinjector">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been prescribed an adrenaline autoinjector?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_adrenaline_autoinjector_yes" name="non_severe_adrenaline_autoinjector[0]" onchange="change_non_severe_adrenaline_autoinjector(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="non_severe_adrenaline_autoinjector_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_adrenaline_autoinjector_no" name="non_severe_adrenaline_autoinjector[0]" onchange="change_non_severe_adrenaline_autoinjector(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="non_severe_adrenaline_autoinjector_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <ul class="m_medicalList pl-3 mt-2">
                                                  <li>ie EpiPen®</li>
                                                  <li>If yes, an adrenaline autoinjector will need to be provided to the school and renewed prior to the expiry date.</li>
                                                  <li>Each time the student is prescribed a new adrenaline autoinjector the doctor should issue an updated ASCIA Action Plan for Anaphylaxis.</li>
                                                  <li>It is important that any updated plan is provided to the school.</li>
                                             </ul>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_non_severe_adrenaline_autoinjector_0" >
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Expiry date of adrenaline autoinjector</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control date-picker-alt m_non_severe_adrenaline_autoinjector" name="m_non_severe_adrenaline_autoinjector[0]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group non_severe_medication_allergy">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been prescribed any other medication for this allergy?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_medication_allergy_yes" name="non_severe_medication_allergy[0]" onchange="change_non_severe_medication_allergy(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="non_severe_medication_allergy_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="non_severe_medication_allergy_no" name="non_severe_medication_allergy[0]" onchange="change_non_severe_medication_allergy(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="non_severe_medication_allergy_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4" id="m_addNonSevereMedicationAllergy_parent_form_0">
                                        <div class="row">
                                             <div class="col-md-12 mt-4">
                                                  <div class="educationalHeader">
                                                       <p><strong class="non_severe_medication_name_title">Medication 1</strong></p>
                                                  </div>
                                             </div>
                                             <div class="col-md-12 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label"><span class="required">*</span>Name</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control m_non_severe_medication_name[0]" name="m_non_severe_medication_name[0][0]">
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="col-md-12 mt-4 m_non_severe_medication_allergy_button_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addNonSevereAnotherMedication(0)"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                                        </div>
                                   </div>

                              </div>
                         </div>
                         
                         <div class="nk-block-tools-opt mt-4">
                              <a class="btn btn-outline-light custom-btn" id="AddAnotherNonSevereAllergy"><em class="icon ni ni-plus"></em><span>Add another non-severe allergy</span></a>
                         </div>
                    </div>   
               </div>
          </div>
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Is the <span class="changingName">student</span> being treated for any other medical conditions?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="other_medical_conditions_yes" name="other_medical_conditions" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="other_medical_conditions_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="other_medical_conditions_no" name="other_medical_conditions" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="other_medical_conditions_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-2">Medical conditions could include asthma, epilepsy, diabetes etc</p>
               </div>
          </div>
          <div class="col-md-12 student_medical_conditions_field">
               <div class="row">
                    <div class="col-md-12 mt-4">
                         <h5>Please add all the <span class="changingName">student</span>'s medical conditions:</h5>
                    </div>
                    <div class="col-md-12 mt-4">
                         <div class="m_addMedicalCondition_form">
                              <div class="row m-1 white-background">
                                   <div class="col-md-12 mt-4">
                                        <div class="educationalHeader">
                                             <p><strong class="medical_condition_title">Medical condition 1</strong></p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">Medical condition name</label>
                                             <select class="form-control m_medical_condition_name" name="m_medical_condition_name[0]">
                                                  <option value="">Select</option>
                                                  <option value="ASH">Asthma</option>
                                                  <option value="AST">Asthma - Severe</option>
                                                  <option value="DIA">Diabetes</option>
                                                  <option value="EPI">Epilepsy</option>
                                                  <option value="OTH">Other Health Condition</option>
                                                  <option value="OHR">Other High Risk Health Condition</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group hospitalised_medical_condition">
                                             <label class="form-label"><span class="required">*</span>Has the <span class="changingName">student</span> been hospitalised for this medical condition?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="hospitalised_medical_condition_yes[0]" name="hospitalised_medical_condition[0]" onchange="change_hospitalised_medical_condition(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="hospitalised_medical_condition_yes[0]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="hospitalised_medical_condition_no[0]" name="hospitalised_medical_condition[0]" onchange="change_hospitalised_medical_condition(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="hospitalised_medical_condition_no[0]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_medical_condition_hospital_name_0" >
                                        <div class="form-group">
                                             <label class="form-label">Hospital name</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control m_medical_condition_hospital_name" name="m_medical_condition_hospital_name[0]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group diagnosed_medical_condition">
                                             <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this medical condition?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="diagnosed_medical_condition_yes" name="diagnosed_medical_condition[0]" onchange="change_diagnosed_medical_condition(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="diagnosed_medical_condition_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="diagnosed_medical_condition_no" name="diagnosed_medical_condition[0]" onchange="change_diagnosed_medical_condition(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="diagnosed_medical_condition_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_treating_medical_condition_0">
                                        <div class="form-group">
                                             <label class="form-label">Please select the doctor that is treating this medical condition</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control m_treating_medical_condition" name="m_treating_medical_condition[0]" onclick="change_treating_medical_condition(this.value)">
                                                       <option value="">select</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4 m_treating_medical_condition_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group documented_plan_medical_condition">
                                             <label class="form-label"><span class="required">*</span>Does the <span class="changingName">student</span> have a documented action plan for this medical condition from a doctor?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="documented_plan_medical_condition_yes" name="documented_plan_medical_condition[0]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="documented_plan_medical_condition_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="documented_plan_medical_condition_no" name="documented_plan_medical_condition[0]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="documented_plan_medical_condition_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4">
                                        <div class="form-group student_taking_medication">
                                             <label class="form-label"><span class="required">*</span>Is the <span class="changingName">student</span> taking medication for this medical condition?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="student_taking_medication_yes" name="student_taking_medication[0]" onchange="change_student_taking_medication(0, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="student_taking_medication_yes">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="student_taking_medication_no" name="student_taking_medication[0]" onchange="change_student_taking_medication(0, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="student_taking_medication_no">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-4" id="m_addTakingMedicalCondition_parent_form_0">
                                        <div class="row">
                                             <div class="col-md-12 mt-4">
                                                  <div class="educationalHeader">
                                                       <p><strong class="taking_medical_condition_name_title">Medication 1</strong></p>
                                                  </div>
                                             </div>

                                             <div class="col-md-12 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label"><span class="required">*</span>Name</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control m_taking_medical_condition_name[0]" name="m_taking_medical_condition_name[0][0]">
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                   </div>
                                   <div class="col-md-12 mt-4 m_another_medical_condition_button_0">
                                        <div class="nk-block-tools-opt mt-4">
                                             <a class="btn btn-outline-light" onclick="addAnotherTakingMedicalCondition(0)"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                                        </div>
                                   </div>

                              </div>
                         </div>
                         
                         <div class="nk-block-tools-opt mt-4">
                              <a class="btn btn-outline-light custom-btn" id="AddAnotherMedicalCondition"><em class="icon ni ni-plus"></em><span>Add another medical condition</span></a>
                         </div>
                    </div>   
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="medicalDetailSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>       
     </div>
</form>