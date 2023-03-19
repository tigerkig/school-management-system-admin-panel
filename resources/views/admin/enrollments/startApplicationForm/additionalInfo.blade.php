<form id="additionalInfoForm" method="POST">     
     <p>This section will help the school support any additional needs the student may have.</p>
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label">Is there any additional information about the student that the school should know prior to enrolment?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="prior_enrolment_yes" name="prior_enrolment" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="prior_enrolment_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="prior_enrolment_no" name="prior_enrolment" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="prior_enrolment_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-2">Additional information may include:</p>
               </div>
               <ul class="m_medicalList pl-3">
                    <li>Living apart from parental supervision</li>
                    <li>Subject of a court order</li>
                    <li>Subject of bullying by others</li>
                    <li>Living in out of home care arranged by the state</li>
               </ul>
          </div>
          <div class="col-md-12 mt-4 a_provide_details">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Provide details</label>
                    <textarea class="form-control" aria-label="With textarea" id="a_provide_details"></textarea>
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="additionalInfoSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>  
     </div>
</form>