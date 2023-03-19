<form id="emergencyContactForm">
     <h6>In the case of an emergency, the school will contact parent/carer.</h6>
     <p>The school needs 2 additional emergency contacts in case the parents/carers listed above are uncontactable.</p>
     <ul class="m_medicalList pl-4 mt-2">
          <li>ie EpiPen®</li>
          <li>If yes, an adrenaline autoinjector will need to be provided to the school and renewed prior to the expiry date.</li>
          <li>Each time the student is prescribed a new adrenaline autoinjector the doctor should issue an updated ASCIA Action Plan for Anaphylaxis.</li>
          <li>It is important that any updated plan is provided to the school.</li>
     </ul>

     <div class="custom-control custom-checkbox mt-4">
          <input type="checkbox" class="custom-control-input" id="provide_additional_contact_details" name="">
          <label class="custom-control-label" for="provide_additional_contact_details">Provide additional contact details</label>
     </div>

     <div class="col-md-12 mt-4">
          <h6>Please add emergency contacts:</h6>
     </div>
     <div class="col-md-12">
          <div class="e_emergency_contact_form p-3">
               <div class="row count">
                    <div class="col-md-12 mt-4">
                         <div class="educationalHeader">
                              <p><strong class="emergency_contact_title">Additional emergency contact 1</strong></p>
                         </div>
                    </div>
                    <div class="col-md-6 mt-4">
                         <div class="form-group">
                              <label class="form-label">Given name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control e_emergency_given_name" name="e_emergency_given_name[0]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 mt-4">
                         <div class="form-group">
                              <label class="form-label">Family name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control e_emergency_family_name" name="e_emergency_family_name[0]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-4">
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>Please provide emergency contact's relationship to <span class="changingName">Student</span></label>
                              <select class="form-control e_emergency_relationship" name="e_emergency_relationship[0]">
                                   <option value="">Select</option>
                                   <option value="MUM">Mother</option>
                                   <option value="DAD">Father</option>
                                   <option value="GMO">Grandmother</option>
                                   <option value="GFA">Grandfather</option>
                                   <option value="GFM">Grandfather / Grandmother</option>
                                   <option value="SMO">Step Mother</option>
                                   <option value="SFA">Step Father</option>
                                   <option value="SIS">Sister</option>
                                   <option value="BRO">Brother</option>
                                   <option value="STUF">The Student (herself)</option>
                                   <option value="STUM">The Student (himself)</option>
                                   <option value="AUN">Aunt</option>
                                   <option value="AUUN">Aunt / Uncle</option>
                                   <option value="CASE">Caseworker</option>
                                   <option value="FRI">Friend</option>
                                   <option value="DON">Godfather</option>
                                   <option value="GDM">Godmother</option>
                                   <option value="ORG">Guardian (organisation)</option>
                                   <option value="GUF">Guardian Father (organisation)</option>
                                   <option value="GHS">Guardian Homestay (organisation)</option>
                                   <option value="GUM">Guardian Mother (organisation)</option>
                                   <option value="GDF">Guardian/ Defacto (Female)</option>
                                   <option value="GDA">Guardian/ Defacto (Male)</option>
                                   <option value="NAN">Nanny</option>
                                   <option value="NEI">Neighbour</option>
                                   <option value="OTR">Other relative</option>
                                   <option value="UNC">Uncle</option>
                                   <option value="YYY">Other (Not elsewhere classified)</option>
                              </select>
                              <p class="description mt-2">e.g. uncle, grandparent, friend or neighbour</p>
                         </div>
                    </div>
                    
                    <div class="col-md-12 mt-4">
                         <div class="emergency_another_contact_number_0">
                              <div class="row mt-4">
                                   <div class="col-md-12">
                                        <div class="educationalHeader">
                                             <p><strong class="contact_number_title">Enter contact number 1</strong></p>
                                        </div>
                                   </div>
                                   <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">Phone number type</label>
                                             <div class="form-control-wrap">
                                                  <select  class="form-control e_emergency_phone_number_type[0]" name="e_emergency_phone_number_type[0][0]">  
                                                       <option value="">Select</option>
                                                       <option value="PHMOB">Phone (Mobile)</option>
                                                       <option value="PHHOM">Phone (Home)</option>
                                                       <option value="PHWRK">Phone (Business/Work)</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">Family name</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control e_emergency_family_name[0]" name="e_emergency_family_name[0][0]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-4 mt-4">
                                        <div class="form-group">
                                             <label class="form-label">Comments</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control e_emergency_comments[0]" name="e_emergency_comments[0][0]">
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                         <div class="nk-block-tools-opt mt-4">
                              <a class="btn" onclick="AddEmergencyAnotherContactNumber(0)"><em class="icon ni ni-plus"></em><span>Add another contact number</span></a>
                         </div>
                    </div>
               </div>
          </div>
          
          <div class="nk-block-tools-opt mt-4">
               <a class="btn btn-outline-light custom-btn" onclick="AdditionalEmergencyContact()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
          </div>
     </div> 
     <div class="row"> 
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="emergencyContactSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>
     </div>
</form>