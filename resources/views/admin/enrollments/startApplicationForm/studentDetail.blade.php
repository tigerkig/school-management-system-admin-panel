<form id="PackageForm" method="POST" action="/enrollments/startApplicationForm/studentDetail">
     <p>Please provide accurate details of the student applying to enrol. This
          information is used to help the school best cater for the educational
          needs of the student.</p>
     <div class="form-group">
          <label class="form-label"><span class="required">*</span>Student residential address</label>
          <div class="form-control-wrap">
               <input type="text" class="form-control studentResidentialAddress" disabled>
          </div>
     </div>
     <div class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="useAddress" name="">
          <label class="custom-control-label" for="useAddress">Use a different <strong>postal address</strong></label>
     </div>
     <div class="form-group mt-4 white-background addressForm">
          <div class="row">
               <div class="col-md-12 mt-4">
                    <label class="form-label"><span class="required">*</span>Student residential address</label>
                    <p class="description">This is the address we will use to correspond with you about the student.</p>
               </div>

               <div class="col-md-6 mt-4">
                    <div class="form-group">
                         <label class="form-label">Country</label>
                         <select class="form-select" data-search="on" name="StudentResidentialAddress" id="StudentResidentialAddress" onchange="changeStudentResidentialAddress(this.value)">
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
               <div class="col-md-6 mt-4 australia_postal">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Street</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="s_street" id="s_street">
                         </div>
                         <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                    </div>
               </div>
               <div class="col-md-6 mt-4 australia_postal">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Suburb</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="s_suburb" id="s_suburb">
                         </div>
                         <p class="description mt-2">e.g. Sydney</p>
                    </div>
               </div>
               <div class="col-md-3 mt-4 australia_postal">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>State</label>
                         <div class="form-control-wrap">
                              <select class="form-control" name="s_state" id="s_state">
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
               <div class="col-md-3 mt-4 australia_postal">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Postcode</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="s_postcode" id="s_postcode">
                         </div>
                    </div>
               </div>
               <div class="col-md-12 mt-4 other_country_postal">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Address</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="s_address_line_1" id="s_address_line_1" placeholder="Address line 1">
                         </div>
                    </div>
               </div>
               <div class="col-md-12 mt-4 other_country_postal">
                    <div class="form-group">
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="s_address_line_2" id="s_address_line_1" placeholder="Address line 2">
                         </div>
                    </div>
               </div>
          </div>
     </div>
     <div class="row">
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s first name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="firstName" id="firstName" onkeyup="changeFirstName(this.value)">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="changingName">Student</span>'s middle name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="middleName" id="middleName">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s family name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="familyName" id="familyName">
                    </div>
                    <p class="description mt-2">As it is shown on the birth certificate</p>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="changingName">Student</span>'s preferred name</label>
                    <div class="form-control-wrap">
                         <input type="text" class="form-control" name="preferredName" id="preferredName">
                    </div>
                    <p class="description mt-2">This is the name that is usually used to address the child. It can be different from the birth certificate.</p>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s gender</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="maleRadio" name="genderRadio" class="custom-control-input" checked value="male">
                                        <label class="custom-control-label" for="maleRadio">Male</label>
                                   </div>
                              </div>
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="femaleRadio" name="genderRadio" class="custom-control-input" value="female">
                                        <label class="custom-control-label" for="femaleRadio">Female</label>
                                   </div>
                              </div>
                              <div class="col-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="otherRadio" name="genderRadio" class="custom-control-input" value="other">
                                        <label class="custom-control-label" for="otherRadio">Other</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s date of birth</label>
                    <div class="form-control-wrap">
                    <input type="text" class="form-control date-picker-alt" data-date-format="dd/mm/yyyy" name="dateOfBirth">
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Intended start date</label>
                    <select class="form-select" onchange="changeIntendedDate(this.value)" name="intendedDate">
                         <option value="none">select...</option>
                         <option value="1">Choose a specific start date</option>
                    </select>
               </div>
          </div>
          <div class="col-md-6 mt-4 intendedStartDate">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Enter start date</label>
                    <input type="text" class="form-control date-picker-alt" data-date-format="dd/mm/yyyy" name="enteredStartDate">
               </div>
          </div>
          <div class="col-md-6 mt-4 intendedStartDate">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>School year <span class="changingName">student</span> is to be enrolled in</label>
                    <select class="form-select" onChange="enrolledIn(this.value)" name="selectEnrolledIn">
                         <option value="" selected>select...</option>
                         <option value="kindergarten">kindergarten</option>
                         <option value="year_1">Year 1</option>
                         <option value="year_2">Year 2</option>
                         <option value="year_3">Year 3</option>
                         <option value="year_4">Year 4</option>
                         <option value="year_5">Year 5</option>
                         <option value="year_6">Year 6</option>
                    </select>
               </div>
          </div>
          <div class="col-md-12 mt-4 educationalProgram">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>In the year before school, has student been in non-parental care on a regular basis and/or attended any other educational programs?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="educationalProgram_yes" name="any_other_educational_programs" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="educationalProgram_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="educationalProgram_no" name="any_other_educational_programs" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="educationalProgram_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-4">An educational program is delivered outside of home and includes structured early learning delivered by a qualified teacher in a preschool or long day care centre.</p>
               </div>
          </div>
          <div class="col-md-12 mt-4 white-background stuendHasAttended">
               <p>Please add the educational programs student has attended:</p>
               <div class="row">
                    <div class="col-md-12 EducationalProgram">
                         <div class="row mt-4">
                              <div class="col-md-12">
                                   <div class="educationalHeader">
                                        <p><strong>Educational program 1</strong></p>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Educational program type</label>
                                        <select class="form-control" name="educationalProgramType_1">
                                             <option value="none">Select</option>
                                             <option value="PRS">Preschool</option>
                                             <option value="LDP">Long Day Care (with a preschool program)</option>
                                             <option value="LDW">Long Day Care (without a preschool program)</option>
                                             <option value="FDC">Family Day Care</option>
                                             <option value="GRN">Grandparent</option>
                                             <option value="OTC">Other formal and informal care (eg occasional care, other relative, nanny, playgroup, friend, neighbour)</option>
                                        </select>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-4">
                                   <div class="form-group">
                                        <label class="form-label">Hours attended</label>
                                        <div class="form-control-wrap">
                                             <div class="row">
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="PartTime_1" name="hoursAttended_1" class="custom-control-input" value="partTime">
                                                            <label class="custom-control-label" for="PartTime_1">Part Time</label>
                                                       </div>
                                                  </div>
                                                  <div class="col-6">
                                                       <div class="custom-control custom-control-lg custom-radio">
                                                            <input type="radio" id="FullTime_1" name="hoursAttended_1" class="custom-control-input" value="fullTime">
                                                            <label class="custom-control-label" for="FullTime_1">Full Time</label>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-4">
                         <div class="nk-block-tools-opt">
                              <a class="btn btn-outline-light custom-btn" id="addAnotherEdicationalProgram"><em class="icon ni ni-plus"></em><span>Add another edicational program</span></a>
                         </div>
                    </div>
               </div> 
          </div> 
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Has <span class="changingName">student</span> attended another school?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="attended_another_school_yes" name="attended_another_school" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="attended_another_school_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="attended_another_school_no" name="attended_another_school" class="custom-control-input" value="0" checked>
                                        <label class="custom-control-label" for="attended_another_school_no">No</label>
                                   </div>
                              </div>
                         </div>
                         <p class="description mt-4">e.g. NSW, interstate or overseas</p>
                    </div>
               </div>
          </div>
          <div class="col-md-12 mt-4 white-background attendSchoolForm">
               <div class="row">
                    <div class="col-md-12">
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>Where did student most recently attend school?</label>
                              <div class="form-control-wrap">
                                   <select class="form-select" onChange="attendSchool(this.value)" name="RecentlyAttendSchool">
                                        <option value="none">Select</option>
                                        <option value="NSW">New South Wales</option>
                                        <option value="VIC">Victoria</option>
                                        <option value="QLD">Queensland</option>
                                        <option value="SA">South Australia</option>
                                        <option value="WA">Western Australia</option>
                                        <option value="TAS">Tasmania</option>
                                        <option value="NT">Northern Territory</option>
                                        <option value="ACT">Australian Capital Territory</option>
                                        <option value="OVS">Overseas</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 mt-4 attendSchoolName">
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>School name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control" name="schoolName">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 mt-4 attendSchoolLocation">
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>School location</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control" name="schoolLocation">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-6 mt-4 attendSchoolDate">
                         <div class="form-group">
                              <div class="row">
                                   <div class="col-6"><label class="form-label"><span class="required">*</span>Attended from</label></div>
                                   <div class="col-6"><label class="form-label">&nbsp;&nbsp;&nbsp;Attended to</label></div>
                              </div>
                              <div class="form-control-wrap">
                                   <div class="input-daterange custom-datepicker input-group">
                                        <input type="text" class="form-control " name="AttenedStartDate"/>
                                        <div class="input-group-addon">TO</div>
                                        <input type="text" class="form-control " name="AttenedUntilDate"/>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s country of birth</label>
                    <select class="form-select" data-search="on" name="countryOfBirth" onchange="studentCountryBirth(this.value)">
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
          <div class="col-md-6 mt-4 studentCountryBirth_child_radio">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Has <span class="changingName">student</span> ever lived in a non-English speaking country for two or more years?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="twoMoreYears_yes" name="twoMoreYears" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="twoMoreYears_yes">Yes</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="twoMoreYears_no" name="twoMoreYears" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="twoMoreYears_no">No</label>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <p class="description mt-2">Australian citizens returning from two years or more overseas may be eligible for intensive English support.</p>
               </div>
          </div>
          <div class="col-md-6 mt-4 studentCountryBirth_child_arrive_date">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>What date did student arrive in Australia?</label>
                    <input type="text" class="form-control custom-datepicker text-center" name="ArriveInAustralia">
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span><span class="changingName">Student</span>'s residency status</label>
                    <select class="form-select" name="residencyStatus">
                         <option value="none">Select</option>
                         <option value="AUC">Australian Citizen</option>
                         <option value="NZC">NZ Citizen</option>
                         <option value="NFI">Norfolk Islander</option>
                         <option value="PER">Permanent Resident</option>
                         <option value="TMP">Temporary Visa Holder</option>
                         <option value="RES">Residency Determination</option>
                    </select>
                    <p class="description mt-1">To be an Australian citizen, at least one parent needed to be an Australian citizen or permanent resident when student was born.</p>
               </div>
          </div>
          <div class="col-md-12 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Is student of Aboriginal or Torres Strait Islander origin?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6 mt-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="Aboriginal_Torres_Strait_Islander_no" name="Aboriginal_Torres_Strait_Islander" class="custom-control-input" value="0" checked>
                                        <label class="custom-control-label" for="Aboriginal_Torres_Strait_Islander_no">No</label>
                                   </div>
                              </div>
                              <div class="col-6 mt-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="Aboriginal_Torres_Strait_Islander_Aboriginal" name="Aboriginal_Torres_Strait_Islander" class="custom-control-input" value="1" >
                                        <label class="custom-control-label" for="Aboriginal_Torres_Strait_Islander_Aboriginal">Yes, Aboriginal</label>
                                   </div>
                              </div>
                              <div class="col-6 mt-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="Aboriginal_Torres_Strait_Islander_yes_torres" name="Aboriginal_Torres_Strait_Islander" class="custom-control-input" value="2" >
                                        <label class="custom-control-label" for="Aboriginal_Torres_Strait_Islander_yes_torres">Yes, Torres Strait Islander</label>
                                   </div>
                              </div>
                              <div class="col-6 mt-4">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="Aboriginal_Torres_Strait_Islander_yes_both" name="Aboriginal_Torres_Strait_Islander" class="custom-control-input" value="3" >
                                        <label class="custom-control-label" for="Aboriginal_Torres_Strait_Islander_yes_both">Yes, both Aboriginal and Torres Strait Islander</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4">
               <div class="form-group">
                    <label class="form-label"><span class="required">*</span>Does the student speak a language other than English at home?</label>
                    <div class="form-control-wrap">
                         <div class="row">
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="SpeakLanguage_no" name="speakLanguage" class="custom-control-input" value="0">
                                        <label class="custom-control-label" for="SpeakLanguage_no">No, English only</label>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="custom-control custom-control-lg custom-radio">
                                        <input type="radio" id="SpeakLanguage_yes" name="speakLanguage" class="custom-control-input" value="1">
                                        <label class="custom-control-label" for="SpeakLanguage_yes">Yes</label>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
          <div class="col-md-6 mt-4 other_than_English">
               <div class="form-group">
                    <label class="form-label">What other language does the student speak at home?</label>
                    <select class="form-select" data-search="on" name="student_speak_at_home">
                         <option value="">select language</option>
                         @foreach($languageList as $key => $list)
                              <option value="{{ $list->name }}">{{ $list->name }}</option>
                         @endforeach
                    </select>
               </div>
          </div>
          <div class="col-md-12 mt-4 pt-1 saveAndChange">
               <div class='align-item-center'>
                    <p>By filling out this form you agree to the <a href="https://education.nsw.gov.au/policy-library/policies/pd-2002-0006" target="_blank">NSW Government Enrolment Policy</a></p>
               </div>
               <div class="nk-block-tools-opt">
                    <a class="btn btn-outline-light custom-btn" id="studentDetailSubmit"><em class="icon ni ni-plus"></em><span>Save and Continue</span></a>
               </div>
          </div>
     </div>
</form>