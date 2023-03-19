<form id="riskAssessmentForm">     
     <p>The NSW Department of Education has a responsibility to assess and manage any risk of harm to students and staff. This information will help us to manage each student's transition into their new school setting.</p>
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Does the student have any history of violent behaviour?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="violent_behaviour_yes" name="violent_behaviour" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="violent_behaviour_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="violent_behaviour_no" name="violent_behaviour" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="violent_behaviour_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 r_Provide_details">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Provide details</label>
                    <textarea class="form-control" aria-label="With textarea" name="r_Provide_details"></textarea>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label">Has the student been involved in any incidents outside of school that involve serious behaviours?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              
                               <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="serious_behaviours_yes" name="serious_behaviours" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="serious_behaviours_yes">Yes</label>
                                   </div>
                               </div>
                               <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="serious_behaviours_no" name="serious_behaviours" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="serious_behaviours_no">No</label>
                                   </div>
                               </div>
                              
                         </div>
                    </div>
                    <p class="form-label mt-2">Serious behaviours may include:</p>
               </div>
               <ul class="m_medicalList pl-3">
                    <li>Actual violence to any person</li>
                    <li>Possession of a weapon or any item used to cause harm or injury</li>
                    <li>Threats of violence or intimidation of staff, students, or others at the school</li>
                    <li>Possession or use of illegal drugs</li>
               </ul>
          </div>
          <div class="col-md-12 mt-4 serious_behaviours_Provide_details">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Provide details</label>
                    <textarea class="form-control" aria-label="With textarea" name="serious_behaviours_Provide_details"></textarea>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Is there anything additional in the student's history or circumstances (not already mentioned) which might pose a risk of any type to the student, other students or school staff?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="school_staff_yes" name="school_staff" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="school_staff_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="school_staff_no" name="school_staff" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="school_staff_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>

          <div class="col-md-12 mt-4 school_staff_Provide_details">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Provide details</label>
                    <textarea class="form-control" aria-label="With textarea" name="school_staff_Provide_details"></textarea>
               </div>
          </div>
          <div class="col-md-12 mt-4 school_staff_Provide_details">
               <div class="form-group">
                    <label class="form-label">Does a health professional or other relevant body have knowledge of these issues?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="knowledge_issues_yes" name="knowledge_issues" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="knowledge_issues_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="knowledge_issues_no" name="knowledge_issues" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="knowledge_issues_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 knowledge_issues_form">
               <div class="educationalHeader">
                    <p><strong>Student's health professional's details</strong></p>
               </div>
          </div>
          <div class="col-md-6 mt-4 knowledge_issues_form">
               <div class="form-group">
                    <label class="form-label">Name of health professional</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="r_health_professional">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 knowledge_issues_form">
               <div class="form-group">
                    <label class="form-label">Contact number</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="r_contact_number">
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="riskAssessmentSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>  
     </div>
</form>        