<form id="parentsCarersForm">
     <p>This section requires you to provide details of all parent/carers associated with this student. Please note: at
          least one Parent/Carer must be living at the student's residential address.</p>

     <div id="accordion" class="accordion accordion-style">
          <div class="accordion-item">
               <a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-1">
                    <h6 class="title">Parent/carer</h6>
                    <span class="accordion-icon"></span>
               </a>
               <div class="accordion-body collapse show" id="accordion-item-1" data-parent="#accordion">
                    <div class="accordion-inner">
                         <div class="row">
                              <div class="col-md-6 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Relationship</label>
                                        <div class="form-control-wrap">
                                             <select class="form-control" onChange="p_relationship(this.value)" name="p_Relationship[0]">
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
                                        </div>
                                        <p class="description mt-2">e.g. mother, father</p>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Title</label>
                                        <div class="form-control-wrap">
                                             <select class="form-control" onChange="p_title(this.value)" name="p_Title[0]">
                                                  <option value="">Select</option>
                                                  <option value="Mr">Mr</option>
                                                  <option value="Mrs">Mrs</option>
                                                  <option value="Ms">Ms</option>
                                                  <option value="Mr &amp; Mrs">Mr and Mrs</option>
                                                  <option value="Mx">Mx</option>
                                                  <option value="Ass Prof">Associate Professor</option>
                                                  <option value="Br">Brother</option>
                                                  <option value="Dr">Doctor</option>
                                                  <option value="Fr">Father</option>
                                                  <option value="Hon">Honourable</option>
                                                  <option value="Lady">Lady</option>
                                                  <option value="Lord">Lord</option>
                                                  <option value="Mdm">Madam</option>
                                                  <option value="Mstr">Master</option>
                                                  <option value="Miss">Miss</option>
                                                  <option value="Prof">Professor</option>
                                                  <option value="Rabbi">Rabbi</option>
                                                  <option value="Rev">Reverend</option>
                                                  <option value="Sir">Sir</option>
                                                  <option value="Sr">Sister</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4">
                                   <label class="form-label"><span class="required">*</span>Given name</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="p_givenName[0]">
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4">
                                   <label class="form-label"><span class="required">*</span>Family name</label>
                                   <div class="form-control-wrap">
                                        <input type="text" class="form-control" name="p_familyName[0]">
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Gender</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-4">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="p_maleRadio[0]" name="p_genderRadio[0]" class="custom-control-input" checked value="male">
                                                            <label class="custom-control-label" for="p_maleRadio[0]">Male</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-4">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="p_femaleRadio[0]" name="p_genderRadio[0]" class="custom-control-input" value="female">
                                                            <label class="custom-control-label" for="p_femaleRadio[0]">Female</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-4">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="p_otherRadio[0]" name="p_genderRadio[0]" class="custom-control-input" value="other">
                                                            <label class="custom-control-label" for="p_otherRadio[0]">other</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12">
                                   <div class="p_contact_number_form_0">
                                        <div class="row mt-4">
                                             <div class="col-md-12 mt-4">
                                                  <div class="educationalHeader">
                                                       <p><strong class="parent_carer_contact_number_title">Enter parent/carer's contact number 1</strong></p>
                                                  </div>
                                             </div>
                                             <div class="col-md-6 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label"><span class="required">*</span>Phone number type</label>
                                                       <select class="form-control" name="m_docter_country[0][]">
                                                            <option value="">select</option>
                                                            <option value="PHMOB">Phone (Mobile)</option>
                                                            <option value="PHHOM">Phone (Home)</option>
                                                            <option value="PHWRK">Phone (Business/Work)</option>
                                                       </select>
                                                  </div>
                                             </div>
                                             <div class="col-md-6 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label">Phone number</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="p_phone_number[0][]">
                                                       </div>
                                                       <p class="description">In special circumstances the school may ask permission to contact the student's doctor.</p>
                                                  </div>
                                             </div>
                                             <div class="col-md-6 mt-4">
                                                  <div class="form-group">
                                                       <label class="form-label"><span class="required">*</span>Comments</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control" name="p_comments[0][]">
                                                       </div>
                                                       <p class="description">The name of a medical centre is also accepted.</p>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>

                                   <div class="nk-block-tools-opt mt-4">
                                        <a class="btn btn-outline-light" onclick="addAnotherDocter(0)"><em class="icon ni ni-plus"></em><span>Add contact number</span></a>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-5">
                                   <h5>Parent/carer's Residential Address</h5>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Does parent/carer live at this student's residential address?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="residential_address_yes[0]" name="residential_address[0]" onchange="student_residential_address(0, 1)" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="residential_address_yes[0]">Yes</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="residential_address_no[0]" name="residential_address[0]" onchange="student_residential_address(0, 0)" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="residential_address_no[0]">No</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_country_0">
                                   <div class="form-group">
                                        <label class="form-label">Please provide parent/carer's residential address</label>
                                        <p>Country</p>
                                        <select class="form-control" name="residential_address_country[0]" onchange="change_residential_address_country(0, this.value)">
                                             <option value="none">select country</option>
                                             @foreach($countryList as $key => $list)
                                             <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                  @if($key == 0)
                                                       <option disabled>--------------------------</option>
                                                  @endif
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4 residential_address_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Street</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_street[0]">
                                        </div>
                                        <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4 residential_address_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Suburb</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_suburb[0]">
                                        </div>
                                        <p class="description mt-2">e.g. Sydney</p>
                                   </div>
                              </div>
                              <div class="col-md-3 mt-4 residential_address_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>State</label>
                                        <div class="form-control-wrap">
                                             <select class="form-control" name="p_state[0]">
                                                  <option value="none">select...</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-3 mt-4 residential_address_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Postcode</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_postcode[0]">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_other_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Address</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_address_line_1[0]" placeholder="Address line 1">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_other_country_0">
                                   <div class="form-group">
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_address_line_2[0]" placeholder="Address line 2">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_input_0">
                                   <div class="form-group">
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control studentResidentialAddress" name="residential_address_input[0]" disabled>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_1_input_0">
                                   <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="p_potal_address[0]" onchange="change_potal_address(0, this)">
                                        <label class="custom-control-label" for="p_potal_address[0]">Use a different <strong>postal address</strong></label>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 student_residential_address_1_country_0">
                                   <div class="form-group">
                                        <label class="form-label">Parent/carer's postal address</label>
                                        <p class="description mt-1">This is the address we will use to correspond with about the student</p>
                                        <p>Country</p>
                                        <select class="form-control" name="student_residential_address_country[0]" onchange="change_student_residential_address_country(0, this.value)">
                                             <option value="none">select country</option>
                                             @foreach($countryList as $key => $list)
                                             <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                  @if($key == 0)
                                                       <option disabled>--------------------------</option>
                                                  @endif
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4 student_residential_address_1_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Street</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_student_street[0]">
                                        </div>
                                        <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4 student_residential_address_1_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Suburb</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_student_suburb[0]">
                                        </div>
                                        <p class="description mt-2">e.g. Sydney</p>
                                   </div>
                              </div>
                              <div class="col-md-3 mt-4 student_residential_address_1_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>State</label>
                                        <div class="form-control-wrap">
                                             <select class="form-control" name="p_student_state[0]">
                                                  <option value="none">select...</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-3 mt-4 student_residential_address_1_australia_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Postcode</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_student_postcode[0]">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 student_residential_address_1_other_country_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Address</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_student_address_line_1[0]" placeholder="Address line 1">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 student_residential_address_1_other_country_0">
                                   <div class="form-group">
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_student_address_line_2[0]" placeholder="Address line 2">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 residential_address_1_input_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Does student live at this address sometimes?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="address_sometimes_yes[0]" name="address_sometimes[0]" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="address_sometimes_yes[0]">Yes</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="address_sometimes_no[0]" name="address_sometimes[0]" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="address_sometimes_no[0]">No</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>


                              <div class="col-md-12 mt-5">
                                   <h5>Parent/carer's Contact Email</h5>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Is parent/carer completing this application for this student?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="completing_application_student_yes[0]" name="completing_application_student[0]" onchange="change_parent_contact_email(0, 1)" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="completing_application_student_yes[0]">Yes</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="completing_application_student_no[0]" name="completing_application_student[0]" onchange="change_parent_contact_email(0, 0)" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="completing_application_student_no[0]">No</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4 parent_contact_email_input_0">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Contact email</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="parent_contact_email_input[0]">
                                        </div>
                                   </div>
                              </div>


                              <div class="col-md-12 mt-4 parent_country_birth_0">
                                   <div class="form-group">
                                        <label class="form-label">Country of birth</label>
                                        <select class="form-control" name="parent_country_birth[0]">
                                             <option value="none">select country</option>
                                             @foreach($countryList as $key => $list)
                                             <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                  @if($key == 0)
                                                       <option disabled>--------------------------</option>
                                                  @endif
                                             @endforeach
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Is parent/carer Aboriginal and/or Torres Strait Islander?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-mb-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="aboriginal_torres_strait_islander_no[0]" name="aboriginal_torres_strait_islander[0]" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="aboriginal_torres_strait_islander_no[0]">No</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-mb-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="aboriginal_torres_strait_islander_yes_aboriginal[0]" name="aboriginal_torres_strait_islander[0]" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_aboriginal[0]">Yes, Aboriginal</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-mb-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="aboriginal_torres_strait_islander_yes_islander[0]" name="aboriginal_torres_strait_islander[0]" class="custom-control-input" value="2">
                                                            <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_islander[0]">Yes, Torres Strait Islander</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-mb-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="aboriginal_torres_strait_islander_yes_aboriginal_islander[0]" name="aboriginal_torres_strait_islander[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_aboriginal_islander[0]">Yes, Both Aboriginal and Torres Strait Islander</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label">Select the group that best describes parent/carer's occupation</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-12 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="group_describes_occupation_senior_management[0]" name="group_describes_occupation[0]" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="group_describes_occupation_senior_management[0]">Senior management in large business organisation, government administration and defence, and qualified professionals</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-12 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="group_describes_occupation_other_business[0]" name="group_describes_occupation[0]" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="group_describes_occupation_other_business[0]">Other business managers, arts/media/sportspersons and associate professionals</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-12 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="group_describes_occupation_tradespeople[0]" name="group_describes_occupation[0]" class="custom-control-input" value="2">
                                                            <label class="custom-control-label" for="group_describes_occupation_tradespeople[0]">Tradespeople, clerks and skilled office, sales and service staff</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-12 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="group_describes_occupation_machine_operators[0]" name="group_describes_occupation[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="group_describes_occupation_machine_operators[0]">Machine operators, hospitality staff, assistants, labourers</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-12 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="group_describes_occupation_have_not[0]" name="group_describes_occupation[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="group_describes_occupation_have_not[0]">Have not been in paid work in the last 12 months</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff.</p>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="row p-3 m-1 questionForm">
                                        <div class="col-md-2">
                                             <div class="iconQuestion"><img src="/images/icon-question.svg" /></div>
                                        </div>
                                        <div class="col-md-10">
                                             <h6>Can’t find the parent’s occupation group above?</h6>
                                             <p>You can find out more about these occupation groups <a href="#"><strong>here</strong></a> . This information assists the department better allocate school resources. It will not be shared with teaching staff.</p>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label">What is parent/carer's occupation?</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="parent_carer_occupation[0]">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label">What is the highest level of schooling parent/carer completed?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_level_completed_9_equivalent[0]" name="highest_level_completed[0]" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="highest_level_completed_9_equivalent[0]">Year 9 or equivalent or below</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_level_completed_10_equivalent[0]" name="highest_level_completed[0]" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="highest_level_completed_10_equivalent[0]">Year 10 or equivalent</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_level_completed_11_equivalent[0]" name="highest_level_completed[0]" class="custom-control-input" value="2">
                                                            <label class="custom-control-label" for="highest_level_completed_11_equivalent[0]">Year 11 or equivalent</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_level_completed_12_equivalent[0]" name="highest_level_completed[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="highest_level_completed_12_equivalent[0]">Year 12 or equivalent</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_level_completed_not_provided[0]" name="highest_level_completed[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="highest_level_completed_not_provided[0]">Unknown/Not Provided</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff. For persons who never attended school, please select 'Year 9 or equivalent or below'.</p>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-4">
                                   <div class="form-group">
                                        <label class="form-label">What is the highest qualification parent/carer completed?</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_qualification_completed_no_qualification[0]" name="highest_qualification_completed[0]" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="highest_qualification_completed_no_qualification[0]">No non-school qualification</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_qualification_completed_certificate[0]" name="highest_qualification_completed[0]" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="highest_qualification_completed_certificate[0]">Certificate I to IV (including trade certificate)</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_qualification_completed_advanced[0]" name="highest_qualification_completed[0]" class="custom-control-input" value="2">
                                                            <label class="custom-control-label" for="highest_qualification_completed_advanced[0]">Advanced Diploma/Diploma</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_qualification_completed_bachelor[0]" name="highest_qualification_completed[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="highest_qualification_completed_bachelor[0]">Bachelor degree or above</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6 mt-2">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="highest_qualification_completed_not_provided[0]" name="highest_qualification_completed[0]" class="custom-control-input" value="3">
                                                            <label class="custom-control-label" for="highest_qualification_completed_not_provided[0]">Unknown/Not Provided</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff.</p>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>

     <div class="row">
          <div class="col-md-12 mt-4">
               <p>Additional Parent/Carers</p>
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Are there any additional parent/carers associated with this student?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="additional_parent_yes" name="additional_parent" class="custom-control-input" onclick="add_additional_parent(this.value)" value="1">
                                        <label class="custom-control-label" for="additional_parent_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="additional_parent_no" name="additional_parent" class="custom-control-input" onclick="add_additional_parent(this.value)" value="0">
                                        <label class="custom-control-label" for="additional_parent_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="parentsCarersSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>
     </div>
</form>