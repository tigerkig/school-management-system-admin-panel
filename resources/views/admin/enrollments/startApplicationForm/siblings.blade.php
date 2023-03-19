<form id="siblingsFrom">
     <p>If the student has any brothers or sisters that have been enrolled in a public school they will be added as a family member.</p>
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Does the student have any brothers or sisters that have been enrolled in a NSW Government school in the last 5 years?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="government_school_yes" name="government_school" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="government_school_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="government_school_no" name="government_school" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="government_school_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 government_school_is_show">
               <div class="educationalHeader">
                    <p><strong>Sibling</strong></p>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Given name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="s_givenName">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Middle name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="s_middleName">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Family name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="s_familyName">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Student's gender</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="s_maleRadio" name="s_genderRadio" class="custom-control-input" checked value="male">
                                        <label class="custom-control-label" for="s_maleRadio">Male</label>
                                   </div>
                              </div>
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="s_femaleRadio" name="s_genderRadio" class="custom-control-input" value="female">
                                        <label class="custom-control-label" for="s_femaleRadio">Female</label>
                                   </div>
                              </div>
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="s_otherRadio" name="s_genderRadio" class="custom-control-input" value="other">
                                        <label class="custom-control-label" for="s_otherRadio">other</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Date of birth</label>
                    <div class="form-control-wrap">
                    <input type="text" class="form-control date-picker-alt" data-date-format="dd/mm/yyyy" id="dateOfBirth">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 government_school_is_show">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Name of most recent school attended</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="s_school_attended">
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="siblingsSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>  
     </div>
</form>