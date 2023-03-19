var doctorNameArray = new Array();
$(document).ready(function () {
     var token = $('meta[name="csrf-token"]').attr('content');
     var inputs = document.getElementsByName('student-detail');

     const pages = document.querySelectorAll(".custom-page");
     const translateAmount = 100;
     let translate = 0;

     slide = (direction) => {
          direction === "next" ? translate -= translateAmount : translate += translateAmount;
          pages.forEach(
               pages => (pages.style.transform = `translateX(${translate}%)`)
          );
     }
     $("#personal").show();
     $('body').on('focus', ".date-picker-alt ", function () {
          $(this).datepicker({
               startView: "years",
               format: "dd/mm/yyyy",
          });
     });

     $("#student-option-1").click(function () {
          $("#student-option-1").addClass('student-select-active')
          $("#student-option-2").removeClass('student-select-active')
          $("#select-upload").prop('checked', true)
          $("#select-copy-past").prop('checked', false)
     })

     $("#student-option-2").click(function () {
          $("#student-option-2").addClass('student-select-active')
          $("#student-option-1").removeClass('student-select-active')
          $("#select-copy-past").prop('checked', true)
          $("#select-upload").prop('checked', false)
     })

     $("#toNextPage").click(function () {
          if ($("#select-upload").is(":checked")) {
               $("#choose-plan").hide()
               $("#upload-section").slideDown(500)
          }

          if ($("#select-copy-past").is(":checked")) {
               $("#choose-plan").hide()
               $("#copy-paste").slideDown(500)
          }
     })

     $("#uploadBackword").click(function () {
          $("#upload-section").hide()
          $("#choose-plan").slideDown(500)
     })

     $("#copy-past-backword").click(function () {
          $("#copy-paste").hide()
          $("#choose-plan").slideDown(500)
     })

     $("#checkAll").click(function () {
          if ($("#checkAll").is(":checked")) {
               for (var i = 0; i < inputs.length; i++) {
                    inputs[i].checked = true;
               }
          } else {
               for (var i = 0; i < inputs.length; i++) {
                    inputs[i].checked = false;
               }
          }

     })

     $(".student-detail-download").click(function () {
          var detail_array = []
          for (var i = 0; i < inputs.length; i++) {
               if (inputs[i].checked == true) {
                    detail_array.push(inputs[i].id)
               }
          }
          if (detail_array.length == '') {
               NioApp.Toast('Please select student item.', 'info', {
                    position: 'top-right',
                    timeOut: 5000,
                    progressBar: true,
                    showMethod: 'fadeIn',
                    hideMethod: 'fadeOut'
               });
               return;
          }

          $.ajax({
               type: 'POST',
               url: '/studentDetailDownload',
               headers: { 'X-CSRF-TOKEN': token },
               data: { detail: detail_array },
               success: function (response) {
                    if (response.status == 'success') {
                         var link = document.createElement("a");
                         link.download = "";
                         link.href = 'uploads/' + response.name;
                         document.body.appendChild(link);
                         link.click();

                         link.href = 'uploads/' + response.zipName;
                         document.body.appendChild(link);
                         link.click();
                         document.body.removeChild(link);
                    }

               }
          });
     })

     $(".student-archive").click(function () {
          var detail_array = []
          for (var i = 0; i < inputs.length; i++) {
               if (inputs[i].checked == true) {
                    detail_array.push(inputs[i].id)
               }
          }
          if (detail_array.length == '') {
               NioApp.Toast('Please select student item.', 'info', {
                    position: 'top-right',
                    timeOut: 5000,
                    progressBar: true,
                    showMethod: 'fadeIn',
                    hideMethod: 'fadeOut'
               });
               return;
          }
          $.ajax({
               type: 'POST',
               url: '/studentArchive',
               headers: { 'X-CSRF-TOKEN': token },
               data: { detail: detail_array },
               success: function (response) {
                    NioApp.Toast('This student is left the school.', 'success', {
                         position: 'top-right',
                         timeOut: 5000,
                         progressBar: true,
                         showMethod: 'fadeIn',
                         hideMethod: 'fadeOut',
                         onHidden: function () {
                              window.location.reload();
                         }
                    });
               }
          });
     })

     $("#copy-paste-continue").click(function () {
          var t = $('#bulkText')[0];
          $.ajax({
               type: 'POST',
               url: '/studentCopyPaste',
               headers: { 'X-CSRF-TOKEN': token },
               data: { bulk: t.value },
               success: function (response) {
                    if (response.status == "success") {
                         NioApp.Toast(response.msg, 'success', {
                              position: 'top-right',
                              timeOut: 5000,
                              progressBar: true,
                              showMethod: 'fadeIn',
                              hideMethod: 'fadeOut',
                              onHidden: function () {
                                   window.location.reload();
                              }
                         });
                    } else {
                         NioApp.Toast(response.msg, 'error', {
                              position: 'top-right',
                              timeOut: 5000,
                              progressBar: true,
                              showMethod: 'fadeIn',
                              hideMethod: 'fadeOut',
                         });
                    }

               }
          });
     })

     $("#updateStudentProfile").click(function () {
          $.ajax({
               type: 'POST',
               url: '/studentProfileEdit',
               headers: { 'X-CSRF-TOKEN': token },
               data: {
                    id: $("#studentID").val(),
                    firstName: $("#first-name").val(),
                    lastName: $("#last-name").val(),
                    address: $("#primary-address").val(),
                    photograph: $("#photography-privacy").val(),
                    birthday: $("#birth-day").val(),
                    created_at: $("#enrollment-date").val()
               },
               success: function (response) {
                    if (response.status == "success") {
                         NioApp.Toast(response.msg, 'success', {
                              position: 'top-right',
                              timeOut: 5000,
                              progressBar: true,
                              showMethod: 'fadeIn',
                              hideMethod: 'fadeOut',
                              onHidden: function () {
                                   window.location.reload();
                              }
                         });
                    } else {
                         NioApp.Toast(response.msg, 'error', {
                              position: 'top-right',
                              timeOut: 5000,
                              progressBar: true,
                              showMethod: 'fadeIn',
                              hideMethod: 'fadeOut',
                         });
                    }
               }
          });
     })

     $("#useAddress").click(function (e) {
          if (e.target.checked) {
               $(".addressForm").slideDown(500);
          } else {
               $(".addressForm").slideUp(500);
          }
     })

     $(".ApplicationMenu li").click(function (e) {
          $('div[data-hide-show=content]').hide();
          $(".ApplicationMenu li button").removeClass("status-menu__item--current");
          $("#" + e.currentTarget.id + " button").addClass("status-menu__item--current");
          $("." + e.currentTarget.id).show();
     })

     $('input[type=radio][name=attended_another_school]').change(function () {
          if (this.value == '1') {
               $(".attendSchoolForm").slideDown(500);
          } else {
               $(".attendSchoolForm").slideUp(500);
          }
     });

     $('input[type=radio][name=any_other_educational_programs]').change(function (e) {
          if (this.value == '1') {
               $(".stuendHasAttended").slideDown(500);
          } else {
               $(".stuendHasAttended").slideUp(500);
          }
     });

     $('input[type=radio][name=speakLanguage]').change(function (e) {
          if (this.value == '1') {
               $(".other_than_English").slideDown(500);
          } else {
               $(".other_than_English").slideUp(500);
          }
     });

     $('input[type=radio][name=anaphylactic_allergies]').change(function (e) {
          if (this.value == '1') {
               $(".student_anaphylactic_allergies_field").slideDown(500);
          } else {
               $(".student_anaphylactic_allergies_field").slideUp(500);
          }
     });

     $('input[type=radio][name=non_severe_allergies]').change(function (e) {
          if (this.value == '1') {
               $(".student_non_severe_allergies_field").slideDown(500);
          } else {
               $(".student_non_severe_allergies_field").slideUp(500);
          }
     });

     $('input[type=radio][name=other_medical_conditions]').change(function (e) {
          if (this.value == '1') {
               $(".student_medical_conditions_field").slideDown(500);
          } else {
               $(".student_medical_conditions_field").slideUp(500);
          }
     });

     $('input[type=radio][name=additional_learning_need]').change(function (e) {
          if (this.value == '1') {
               $(".ProvideDetails").slideDown(500);
          } else {
               $(".ProvideDetails").slideUp(500);
          }
     });

     $('input[type=radio][name=student_educational_needs]').change(function (e) {
          if (this.value == '1') {
               $(".Describe_modifications_strategies").slideDown(500);
          } else {
               $(".Describe_modifications_strategies").slideUp(500);
          }
     });

     $('input[type=radio][name=violent_behaviour]').change(function (e) {
          if (this.value == '1') {
               $(".r_Provide_details").slideDown(500);
          } else {
               $(".r_Provide_details").slideUp(500);
          }
     });

     $('input[type=radio][name=serious_behaviours]').change(function (e) {
          if (this.value == '1') {
               $(".serious_behaviours_Provide_details").slideDown(500);
          } else {
               $(".serious_behaviours_Provide_details").slideUp(500);
          }
     });

     $('input[type=radio][name=school_staff]').change(function (e) {
          if (this.value == '1') {
               $(".school_staff_Provide_details").slideDown(500);
          } else {
               $(".school_staff_Provide_details").slideUp(500);
               $(".knowledge_issues_form").slideUp(500);
          }
     });

     $('input[type=radio][name=government_school]').change(function (e) {
          if (this.value == '1') {
               $(".government_school_is_show").slideDown(500);
          } else {
               $(".government_school_is_show").slideUp(500);
          }
     });

     $('input[type=radio][name=knowledge_issues]').change(function (e) {
          if (this.value == '1') {
               $(".knowledge_issues_form").slideDown(500);
          } else {
               $(".knowledge_issues_form").slideUp(500);
          }
     });

     $('input[type=radio][name=twoMoreYears]').change(function (e) {
          if (this.value == '1') {
               $(".studentCountryBirth_child_arrive_date").slideDown(500);
          } else {
               $(".studentCountryBirth_child_arrive_date").slideUp(500);
          }
     });

     $('input[type=radio][name=prior_enrolment]').change(function (e) {
          if (this.value == '1') {
               $(".a_provide_details").slideDown(500);
          } else {
               $(".a_provide_details").slideUp(500);
          }
     });

     $('input[type=radio][name=language]').change(function (e) {
          if (this.value == '0') {
               $(".languageTesting").slideDown(500);
          } else {
               $(".languageTesting").slideUp(500);
          }
     });

     $('input[type=radio][name=criminal_offence]').change(function (e) {
          if (this.value == '1') {
               $(".criminal_offence").slideDown(500);
          } else {
               $(".criminal_offence").slideUp(500);
          }
     });

     $('input[type=radio][name=disciplinary_action]').change(function (e) {
          if (this.value == '1') {
               $(".disciplinary_action").slideDown(500);
          } else {
               $(".disciplinary_action").slideUp(500);
          }
     });

     $('input[type=radio][name=allegations_misconduct]').change(function (e) {
          if (this.value == '1') {
               $(".allegations_misconduct").slideDown(500);
          } else {
               $(".allegations_misconduct").slideUp(500);
          }
     });

     $('input[type=radio][name=psychological_emotional]').change(function (e) {
          if (this.value == '1') {
               $(".psychological_emotional").slideDown(500);
          } else {
               $(".psychological_emotional").slideUp(500);
          }
     });

     $('input[type=radio][name=significant_vision]').change(function (e) {
          if (this.value == '1') {
               $(".significant_vision").slideDown(500);
          } else {
               $(".significant_vision").slideUp(500);
          }
     });
     $('input[type=radio][name=information_regarding]').change(function (e) {
          if (this.value == '1') {
               $(".information_regarding").slideDown(500);
          } else {
               $(".information_regarding").slideUp(500);
          }
     });
     $('input[type=radio][name=previous_employment]').change(function (e) {
          if (this.value == '1') {
               $(".previous_employment").slideDown(500);
          } else {
               $(".previous_employment").slideUp(500);
          }
     });
     $('input[type=radio][name=employment_medically]').change(function (e) {
          if (this.value == '1') {
               $(".employment_medically").slideDown(500);
          } else {
               $(".employment_medically").slideUp(500);
          }
     });

     $('input[type=radio][name=is_first_language]').change(function (e) {
          if (this.value == '0') {
               $(".languageTesting").slideDown(500);
          } else {
               $(".languageTesting").slideUp(500);
          }
     });

     $('input[type=checkbox][name=none]').change(function (e) {
          $('#checkboxGroup input[type=checkbox]').each(
               function (index, checkbox) {
                    if (index != 0) {
                         checkbox.checked = false;
                         $(".OtherDisabilityDetails").slideUp(500);
                    }
               });
     });

     $('#checkboxGroup input[type=checkbox]').change(function (e) {
          if (e.target.name !== "none") {
               $('#checkboxGroup input[type=checkbox][name=none]').prop("checked", false);
          }
     });

     $('input[type=checkbox][name=other]').change(function (e) {
          if (e.currentTarget.checked) {
               $(".OtherDisabilityDetails").slideDown(500);
          } else {
               $(".OtherDisabilityDetails").slideUp(500);
          }
     });

     $('input[type=checkbox][name=required_none]').change(function (e) {
          $('#belowCheckboxGroup input').each(
               function (index, checkbox) {
                    if (index != 0) {
                         checkbox.checked = false;
                         $(".Other_adjustments_details").slideUp(500);
                    }
               });
     });

     $('input[type=checkbox][name=required_other]').change(function (e) {
          if (e.currentTarget.checked) {
               $(".Other_adjustments_details").slideDown(500);
          } else {
               $(".Other_adjustments_details").slideUp(500);
          }
     });

     $('#belowCheckboxGroup input[type=checkbox]').change(function (e) {
          if (e.target.name !== "required_none") {
               $('#belowCheckboxGroup input[type=checkbox][name=required_none]').prop("checked", false);
          }
     });

     $('input[type=checkbox][name=government_school]').change(function (e) {
          if (e.currentTarget.checked) {
               $(".Other_adjustments_details").slideDown(500);
          } else {
               $(".Other_adjustments_details").slideUp(500);
          }
     });

     $('#upload_check_1').change(function (e) {
          if (this.checked) {
               $(".upload_1").slideDown(500);
          } else {
               $(".upload_1").slideUp(500);
          }
     });

     $('#upload_check_2').change(function (e) {
          if (this.checked) {
               $(".upload_2").slideDown(500);
          } else {
               $(".upload_2").slideUp(500);
          }
     });

     $('#upload_check_3').change(function (e) {
          if (this.checked) {
               $(".upload_3").slideDown(500);
          } else {
               $(".upload_3").slideUp(500);
          }
     });

     $('#upload_check_4').change(function (e) {
          if (this.checked) {
               $(".upload_4").slideDown(500);
          } else {
               $(".upload_4").slideUp(500);
          }
     });

     $('#upload_check_5').change(function (e) {
          if (this.checked) {
               $(".upload_5").slideDown(500);
          } else {
               $(".upload_5").slideUp(500);
          }
     });

     $('#upload_check_6').change(function (e) {
          if (this.checked) {
               $(".upload_6").slideDown(500);
          } else {
               $(".upload_6").slideUp(500);
          }
     });

     $('#upload_check_7').change(function (e) {
          if (this.checked) {
               $(".upload_7").slideDown(500);
          } else {
               $(".upload_7").slideUp(500);
          }
     });


     $("#addAnotherEdicationalProgram").click(function () {
          var intId = $(".EducationalProgram .row.mt-3").length || 1;
          var addFields =
               $(`<div class="row mt-3" id="addedEducationForm_` + intId + `">
                    <div class="col-md-12">
                         <div class="educationalHeader">
                              <p><strong>Educational program `+ intId + `</strong></p>
                              <a onclick="removeEducationForm(` + intId + `)">Remove</a>
                         </div>
                    </div>
                    <div class="col-md-6 mt-3">
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>Educational program type</label>
                              <select class="form-control" name="educationalProgramType[` + intId + `]">
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
                    <div class="col-md-6 mt-3">
                         <div class="form-group">
                              <label class="form-label">Hours attended</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="PartTime_`+ intId + `" name="hoursAttended[` + intId + `]" class="custom-control-input" value="partTime">
                                                  <label class="custom-control-label" for="PartTime_`+ intId + `">Part Time</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="FullTime_`+ intId + `" name="hoursAttended[` + intId + `]" class="custom-control-input" value="fullTime">
                                                  <label class="custom-control-label" for="FullTime_`+ intId + `">Full Time</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>`);
          $('.EducationalProgram').append(addFields);
     });

     $("#AddAnotherAnaphylacticAllergy").click(function () {
          var intId = $(".m_addAnaphylacticAllergy_form .row.m-1").length || 1;
          var addFields =
               $(`<div class="row m-1 white-background" id="anahylacticAllergy_child_form_` + intId + `">
                    <div class="col-md-12 mt-3">
                         <div class="educationalHeader">
                              <p><strong class="anaphylactic_allergy_title">Anaphylactic allergy `+ (intId + 1) + `</strong></p>
                              <a onclick="removeAnaphylacticAllergy(` + intId + `)">Remove</a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group">
                              <label class="form-label">The student is allergic to...</label>
                              <select class="form-control m_allergic_to" name="m_allergic_to[`+ intId + `]">
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
                    <div class="col-md-12 mt-3">
                         <div class="form-group hosp_allergy">
                              <label class="form-label"><span class="required">*</span>Has the student been hospitalised for this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="hospitalised_allergy_yes[`+ intId + `]" name="hospitalised_allergy[` + intId + `]" onchange="change_hospitalised_allergy(` + intId + `, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="hospitalised_allergy_yes[`+ intId + `]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="hospitalised_allergy_no[`+ intId + `]" name="hospitalised_allergy[` + intId + `]" onchange="change_hospitalised_allergy(` + intId + `, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="hospitalised_allergy_no[`+ intId + `]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_hospital_name_`+ intId + `" >
                         <div class="form-group">
                              <label class="form-label">Hospital name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control m_hospital_name" name="m_hospital_name[`+ intId + `]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group diag_allergy">
                              <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="diagnosed_allergy_yes[`+ intId + `]" name="diagnosed_allergy[` + intId + `]" onchange="change_diagnosed_allergy(` + intId + `, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="diagnosed_allergy_yes[`+ intId + `]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="diagnosed_allergy_no[`+ intId + `]" name="diagnosed_allergy[` + intId + `]" onchange="change_diagnosed_allergy(` + intId + `, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="diagnosed_allergy_no[`+ intId + `]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_docter_treating_allergy_`+ intId + `">
                         <div class="form-group">
                              <label class="form-label">Please select the doctor that is treating this allergy</label>
                              <div class="form-control-wrap">
                                   <select class="form-control m_docter_treating_allergy" name="m_docter_treating_allergy[`+ intId + `]"  onclick="change_docter_treating_allergy(this.value)">
                                        <option value="">select</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_docter_treating_allergy_`+ intId + `">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group plan_anaphylaxis">
                              <label class="form-label"><span class="required">*</span>Does the student have an ASCIA Action Plan for Anaphylaxis?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="plan_anaphylaxis_yes[`+ intId + `]" name="plan_anaphylaxis[` + intId + `]" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="plan_anaphylaxis_yes[`+ intId + `]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="plan_anaphylaxis_no[`+ intId + `]" name="plan_anaphylaxis[` + intId + `]" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="plan_anaphylaxis_no[`+ intId + `]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <p class="description mt-2">If yes, a copy of this will be required </p>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group adrenaline_autoinjector">
                              <label class="form-label"><span class="required">*</span>Has the student been prescribed an adrenaline autoinjector?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="adrenaline_autoinjector_yes[`+ intId + `]" name="adrenaline_autoinjector[` + intId + `]" onchange="change_adrenaline_autoinjector(` + intId + `, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="adrenaline_autoinjector_yes[`+ intId + `]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="adrenaline_autoinjector_no[`+ intId + `]" name="adrenaline_autoinjector[` + intId + `]" onchange="change_adrenaline_autoinjector(` + intId + `, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="adrenaline_autoinjector_no[`+ intId + `]">No</label>
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
                    <div class="col-md-12 mt-3 m_adrenaline_autoinjector_`+ intId + `" >
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>Expiry date of adrenaline autoinjector</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control date-picker-alt m_adrenaline_autoinjector" name="m_adrenaline_autoinjector[`+ intId + `]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group medication_allergy">
                              <label class="form-label"><span class="required">*</span>Has the student been prescribed any other medication for this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="medication_allergy_yes[`+ intId + `]" name="medication_allergy[` + intId + `]" class="custom-control-input" onchange="change_medication_allergy(` + intId + `, 1)" value="1">
                                                  <label class="custom-control-label" for="medication_allergy_yes[`+ intId + `]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="medication_allergy_no[`+ intId + `]" name="medication_allergy[` + intId + `]" class="custom-control-input" onchange="change_medication_allergy(` + intId + `, 0)" value="0">
                                                  <label class="custom-control-label" for="medication_allergy_no[`+ intId + `]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3" id="m_addMedicationAllergy_parent_form_`+ intId + `">
                         <div class="row">
                              <div class="col-md-12 mt-3">
                                   <div class="educationalHeader">
                                        <p><strong class="medication_name_title">Medication 1</strong></p>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control m_medication_name[`+ intId + `]" name="m_medication_name[` + intId + `][0]">
                                        </div>
                                   </div>
                              </div>
                         </div>

                    </div>
                    <div class="col-md-12 mt-3 m_medication_allergy_button_`+ intId + `">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addAnotherMedication(`+ intId + `)"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                         </div>
                    </div>

               </div>`);
          $('.m_addAnaphylacticAllergy_form').append(addFields);
     });

     $("#AddAnotherMedicalCondition").click(function () {
          var intId = $(".m_addMedicalCondition_form .row.m-1").length || 1;
          var addFields =
               $(`<div class="row m-1 white-background" id="medical_condition_child_form_${intId}">
                    <div class="col-md-12 mt-3">
                         <div class="educationalHeader">
                              <p><strong class="medical_condition_title">Medical condition ${(intId + 1)}</strong></p>
                              <a onclick="removeMedicalCondition(${intId})">Remove</a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group">
                              <label class="form-label">Medical condition name</label>
                              <select class="form-control m_medical_condition_name" name="m_medical_condition_name[${intId}]">
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
                    <div class="col-md-12 mt-3">
                         <div class="form-group hospitalised_medical_condition">
                              <label class="form-label"><span class="required">*</span>Has the student been hospitalised for this medical condition?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="hospitalised_medical_condition_yes[${intId}]" name="hospitalised_medical_condition[${intId}]" onchange="change_hospitalised_medical_condition(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="hospitalised_medical_condition_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="hospitalised_medical_condition_no[${intId}]" name="hospitalised_medical_condition[${intId}]" onchange="change_hospitalised_medical_condition(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="hospitalised_medical_condition_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_medical_condition_hospital_name_${intId}" >
                         <div class="form-group">
                              <label class="form-label">Hospital name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control m_medical_condition_hospital_name" name="m_medical_condition_hospital_name[${intId}]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group diagnosed_medical_condition">
                              <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this medical condition?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="diagnosed_medical_condition_yes[${intId}]" name="diagnosed_medical_condition[${intId}]" onchange="change_diagnosed_medical_condition(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="diagnosed_medical_condition_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="diagnosed_medical_condition_no[${intId}]" name="diagnosed_medical_condition[${intId}]" onchange="change_diagnosed_medical_condition(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="diagnosed_medical_condition_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_treating_medical_condition_${intId}">
                         <div class="form-group">
                              <label class="form-label">Please select the doctor that is treating this medical condition</label>
                              <div class="form-control-wrap">
                                   <select class="form-control m_treating_medical_condition" name="m_treating_medical_condition[${intId}]" onclick="change_treating_medical_condition(this.value)">
                                        <option value="">select</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_treating_medical_condition_${intId}">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group documented_plan_medical_condition">
                              <label class="form-label"><span class="required">*</span>Does the student have a documented action plan for this medical condition from a doctor?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="documented_plan_medical_condition_yes[${intId}]" name="documented_plan_medical_condition[${intId}]" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="documented_plan_medical_condition_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="documented_plan_medical_condition_no[${intId}]" name="documented_plan_medical_condition[${intId}]" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="documented_plan_medical_condition_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group student_taking_medication">
                              <label class="form-label"><span class="required">*</span>Is the student taking medication for this medical condition?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="student_taking_medication_yes[${intId}]" name="student_taking_medication[${intId}]" onchange="change_student_taking_medication(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="student_taking_medication_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="student_taking_medication_no[${intId}]" name="student_taking_medication[${intId}]" onchange="change_student_taking_medication(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="student_taking_medication_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3" id="m_addTakingMedicalCondition_parent_form_${intId}">
                         <div class="row">
                              <div class="col-md-12 mt-3">
                                   <div class="educationalHeader">
                                        <p><strong class="taking_medical_condition_name_title">Medication 1</strong></p>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control m_taking_medical_condition_name[`+ intId + `]" name="m_taking_medical_condition_name[${intId}][0]">
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_another_medical_condition_button_${intId}">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addAnotherTakingMedicalCondition(${intId})"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                         </div>
                    </div>
               </div>`);
          $('.m_addMedicalCondition_form').append(addFields);
     });

     $("#AddAnotherNonSevereAllergy").click(function () {
          var intId = $(".m_addNonSevereAllergy_form .row.m-1").length || 1;
          var addFields =
               $(`<div class="row m-1 white-background" id="non_severe_Allergy_child_form_${intId}">
                    <div class="col-md-12 mt-3">
                         <div class="educationalHeader">
                              <p><strong class="non_severe_allergy_title">Non-severe allergy ${(intId + 1)}</strong></p>
                              <a onclick="removeNonSevereAllergy(${intId})">Remove</a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group">
                              <label class="form-label">The student is allergic to...</label>
                              <select class="form-control m_non_severe_allergic_to" name="m_non_severe_allergic_to[${intId}]">
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
                    <div class="col-md-12 mt-3">
                         <div class="form-group non_severe_hosp_allergy">
                              <label class="form-label"><span class="required">*</span>Has the student been hospitalised for this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_hospitalised_allergy_yes[${intId}]" name="non_severe_hospitalised_allergy[${intId}]" onchange="change_non_severe_hospitalised_allergy(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="non_severe_hospitalised_allergy_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_hospitalised_allergy_no[${intId}]" name="non_severe_hospitalised_allergy[${intId}]" onchange="change_non_severe_hospitalised_allergy(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="non_severe_hospitalised_allergy_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_non_severe_hospital_name_${intId}" >
                         <div class="form-group">
                              <label class="form-label">Hospital name</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control" name="m_non_severe_hospital_name[${intId}]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group non_severe_diagnosed_allergy">
                              <label class="form-label"><span class="required">*</span>Has a doctor diagnosed this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_diagnosed_allergy_yes[${intId}]" name="non_severe_diagnosed_allergy[${intId}]" onchange="change_non_severe_diagnosed_allergy(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="non_severe_diagnosed_allergy_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_diagnosed_allergy_no[${intId}]" name="non_severe_diagnosed_allergy[${intId}]" onchange="change_non_severe_diagnosed_allergy(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="non_severe_diagnosed_allergy_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_non_severe_docter_treating_allergy_${intId}">
                         <div class="form-group">
                              <label class="form-label">Please select the doctor that is treating this allergy</label>
                              <div class="form-control-wrap">
                                   <select class="form-control m_non_severe_docter_treating_allergy" name="m_non_severe_docter_treating_allergy[${intId}]"  onclick="change_non_severe_docter_treating_allergy(this.value)">
                                        <option value="">select</option>
                                   </select>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3 m_non_severe_docter_treating_allergy_${intId}">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addAnotherDocterMedicalCentre()"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group non_severe_plan_anaphylaxis">
                              <label class="form-label"><span class="required">*</span>Does the student have an ASCIA Action Plan for Anaphylaxis?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_plan_anaphylaxis_yes[${intId}]" name="non_severe_plan_anaphylaxis[${intId}]" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="non_severe_plan_anaphylaxis_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_plan_anaphylaxis_no[${intId}]" name="non_severe_plan_anaphylaxis[${intId}]" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="non_severe_plan_anaphylaxis_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <p class="description mt-2">If yes, a copy of this will be required </p>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group non_severe_adrenaline_autoinjector">
                              <label class="form-label"><span class="required">*</span>Has the student been prescribed an adrenaline autoinjector?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_adrenaline_autoinjector_yes[${intId}]" name="non_severe_adrenaline_autoinjector[${intId}]" onchange="change_non_severe_adrenaline_autoinjector(${intId}, 1)" class="custom-control-input" value="1">
                                                  <label class="custom-control-label" for="non_severe_adrenaline_autoinjector_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_adrenaline_autoinjector_no[${intId}]" name="non_severe_adrenaline_autoinjector[${intId}]" onchange="change_non_severe_adrenaline_autoinjector(${intId}, 0)" class="custom-control-input" value="0">
                                                  <label class="custom-control-label" for="non_severe_adrenaline_autoinjector_no[${intId}]">No</label>
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
                    <div class="col-md-12 mt-3 m_non_severe_adrenaline_autoinjector_${intId}" >
                         <div class="form-group">
                              <label class="form-label"><span class="required">*</span>Expiry date of adrenaline autoinjector</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control date-picker-alt m_non_severe_adrenaline_autoinjector" name="m_non_severe_adrenaline_autoinjector[${intId}]">
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3">
                         <div class="form-group non_severe_medication_allergy">
                              <label class="form-label"><span class="required">*</span>Has the student been prescribed any other medication for this allergy?</label>
                              <div class="form-control-wrap">
                                   <div class="row">
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_medication_allergy_yes[${intId}]" name="non_severe_medication_allergy[${intId}]" class="custom-control-input" onchange="change_non_severe_medication_allergy(${intId}, 1)" value="1">
                                                  <label class="custom-control-label" for="non_severe_medication_allergy_yes[${intId}]">Yes</label>
                                             </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="custom-control custom-control-lg custom-radio">
                                                  <input type="radio" id="non_severe_medication_allergy_no[${intId}]" name="non_severe_medication_allergy[${intId}]" class="custom-control-input" onchange="change_non_severe_medication_allergy(${intId}, 0)" value="0">
                                                  <label class="custom-control-label" for="non_severe_medication_allergy_no[${intId}]">No</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
                    <div class="col-md-12 mt-3" id="m_addNonSevereMedicationAllergy_parent_form_${intId}">
                         <div class="row">
                              <div class="col-md-12 mt-3">
                                   <div class="educationalHeader">
                                        <p><strong class="non_severe_medication_name_title">Medication 1</strong></p>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control m_non_severe_medication_name[`+ intId + `]" name="m_non_severe_medication_name[${intId}][0]">
                                        </div>
                                   </div>
                              </div>
                         </div>

                    </div>
                    <div class="col-md-12 mt-3 m_non_severe_medication_allergy_button_${intId}">
                         <div class="nk-block-tools-opt mt-3">
                              <a class="btn btn-outline-light" onclick="addNonSevereAnotherMedication(${intId})"><em class="icon ni ni-plus"></em><span>Add another medication</span></a>
                         </div>
                    </div>

               </div>`);
          $('.m_addNonSevereAllergy_form').append(addFields);
     });

     $("#studentDetailSubmit").click(function () {
          var w = $('#PackageForm').serialize();
          var myArray = w.split("&");
          document.getElementsByClassName('status-menu__icon')[0].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[0].style.color = "white";
          //Tiger
          $.ajax({
               type: 'POST',
               url: '/studentDetail',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    enrollingFor: $("#enrollingFor").val(),
                    scholasticYear: $("#scholasticYear").val(),
                    student_home_address: $("#student_home_address").val(),
                    StudentResidentialAddress: $("#StudentResidentialAddress").val(),
                    s_street: $("#s_street").val(),
                    s_suburb: $("#s_suburb").val(),
                    s_state: $("#s_state").val(),
                    s_postcode: $("#s_postcode").val(),
                    s_address_line_1: $("#s_address_line_1").val(),
                    s_address_line_2: $("#s_address_line_2").val(),
                    firstName: $("#firstName").val(),
                    middleName: $("#middleName").val(),
                    familyName: $("#familyName").val(),
                    preferredName: $("#preferredName").val(),
                    genderRadio: $("[name='genderRadio']").val(),
                    dateOfBirth: $("[name='dateOfBirth']").val(),
                    intendedDate: $("[name='intendedDate']").val(),
                    enteredStartDate: $("[name='enteredStartDate']").val(),
                    selectEnrolledIn: $("[name='selectEnrolledIn']").val(),
                    educationalProgramType_1: $("[name='educationalProgramType_1']").val(),
                    attended_another_school: $("[name='attended_another_school']").val(),
                    RecentlyAttendSchool: $("[name='RecentlyAttendSchool']").val(),
                    schoolName: $("[name='schoolName']").val(),
                    schoolLocation: $("[name='schoolLocation']").val(),
                    AttenedStartDate: $("[name='AttenedStartDate']").val(),
                    AttenedUntilDate: $("[name='AttenedUntilDate']").val(),
                    countryOfBirth: $("[name='countryOfBirth']").val(),
                    ArriveInAustralia: $("[name='ArriveInAustralia']").val(),
                    residencyStatus: $("[name='residencyStatus']").val(),
                    Aboriginal_Torres_Strait_Islander: $("[name='Aboriginal_Torres_Strait_Islander']").val(),
                    speakLanguage: $("[name='speakLanguage']").val(),
                    student_speak_at_home: $("[name='student_speak_at_home']").val(),
               },
               success: function (response) {
                    console.log("Successfull");
               }

          });
          console.table(myArray);
          onchangeEditSection('medical')
     });

     $("#emergencyContactSubmit").click(function () {
          var w = $('#emergencyContactForm').serialize();
          var myArray = w.split("&");

          var e_emergency_given_name = [];
          $('.e_emergency_given_name').each(function () {
               e_emergency_given_name.push($(this).val());
          });

          console.log("Given names");
          console.table(e_emergency_given_name);

          var e_emergency_family_name = [];
          $('.e_emergency_family_name').each(function () {
               e_emergency_family_name.push($(this).val());
          });

          console.log("Family names");
          console.table(e_emergency_family_name);

          var e_emergency_relationship = [];
          var e_emergency_phone_number_types = [];
          var emergency_family_names = [];
          var all_emergency_comments = [];
          $('.e_emergency_relationship').each(function (index, value) {
               var x = document.getElementsByClassName(`e_emergency_phone_number_type[` + index + `]`);
               var y = document.getElementsByClassName(`e_emergency_family_name[` + index + `]`);
               var z = document.getElementsByClassName(`e_emergency_comments[` + index + `]`);
               var e_emergency_phone_number_type = [];
               var emergency_family_name = [];
               var emergency_comments = [];

               for (i = 0; i < x.length; i++) {

                    e_emergency_phone_number_type.push(x[i].value);
                    emergency_family_name.push(y[i].value);
                    emergency_comments.push(z[i].value);
               }
               emergency_family_names.push(emergency_family_name);
               e_emergency_phone_number_types.push(e_emergency_phone_number_type);
               all_emergency_comments.push(emergency_comments);
               e_emergency_relationship.push($(this).val());
          });
          console.log("Emergency Relationships");
          console.table(e_emergency_relationship);
          console.log("Emergency Contacts type");
          console.table(e_emergency_phone_number_types);
          console.log('emergency family name: ');
          console.table(emergency_family_names);
          console.log('emergency comments: ');
          console.table(all_emergency_comments);
          //emergency contact details

          document.getElementsByClassName('status-menu__icon')[6].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[6].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/emergency_contacts',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    student_home_address: $("#student_home_address").val(),
                    e_emergency_given_name: e_emergency_given_name,
                    e_emergency_family_name: e_emergency_family_name,
                    e_emergency_relationship: e_emergency_relationship,
                    e_emergency_phone_number_types: e_emergency_phone_number_types,
                    emergency_family_names: emergency_family_names,
                    all_emergency_comments: all_emergency_comments
               },
               success: function (response) {
                    console.log("Successfull");
               }
          });
          // console.table(myArray)
          onchangeEditSection('additional')
     });

     //Tiger
     $("#medicalDetailSubmit").click(function () {
          var w = $('#medicalDetailForm').serialize();
          var myArray = w.split("&");
          document.getElementsByClassName('status-menu__icon')[1].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[1].style.color = "white";
          var m_doctor_name = [];
          $('.m_docter_name').each(function () {
               m_doctor_name.push($(this).val());
          });
          // console.log("Doctors Names: ");
          // console.table(m_doctor_name);

          var m_docter_country = [];
          $('.m_docter_country').each(function () {
               m_docter_country.push($(this).val());

          });
          // console.log("Doctors Country: ");
          // console.table(m_docter_country);      

          var m_street = [];
          $('.m_street').each(function () {
               m_street.push($(this).val());

          });

          // console.log("m_street: ");
          // console.table(m_street);   

          var m_suburb = [];
          $('.m_suburb').each(function () {
               m_suburb.push($(this).val());

          });

          // console.log("m_suburb: ");
          // console.table(m_suburb);   

          var m_state = [];
          $('.m_state').each(function () {
               m_state.push($(this).val());

          });

          // console.log("m_state: ");
          // console.table(m_state);   

          var m_postcode = [];
          $('.m_postcode').each(function () {
               m_postcode.push($(this).val());

          });

          // console.log("m_postcode: ");
          // console.table(m_postcode);   



          var m_phone_number = [];
          $('.m_phone_number').each(function () {
               m_phone_number.push($(this).val());

          });

          // console.log("m_phone_number: ");
          // console.table(m_phone_number); 


          var m_address_line_1 = [];
          $('.m_address_line_1').each(function () {
               m_address_line_1.push($(this).val());

          });

          // console.log("m_address_line_1: ");
          // console.table(m_address_line_1);   

          var m_address_line_2 = [];
          $('.m_address_line_2').each(function () {
               m_address_line_2.push($(this).val());

          });

          // console.log("m_address_line_2: ");
          // console.table(m_address_line_2);   

          var Doctors = [];
          for (i = 0; i < m_doctor_name.length; i++) {
               var Doctor = {};
               Doctor.m_doctor_name = m_doctor_name[i];
               Doctor.m_docter_country = m_docter_country[i];
               Doctor.m_street = m_street[i];
               Doctor.m_suburb = m_suburb[i];
               Doctor.m_state = m_state[i];
               Doctor.m_postcode = m_postcode[i];
               Doctor.m_address_line_1 = m_address_line_1[i];
               Doctor.m_address_line_2 = m_address_line_2[i];
               Doctor.m_phone_number = m_phone_number[i];

               console.log("Each Doctor:");
               console.table(Doctor);
               Doctors.push(Doctor);

          }

          console.log("All Doctors Data:");
          console.table(Doctors);







          //student's anaphylactic allergies
          var anaphylactic_allergies = $('input[name=anaphylactic_allergies]:checked').val();
          console.log("Did Alergy:");
          console.table(anaphylactic_allergies);

          var m_allergic_to = [];
          $('.m_allergic_to').each(function (index, element) {
               m_allergic_to.push($(this).val());

          });
          // console.log("m_allergic_to");
          // console.table(m_allergic_to);

          var m_hospital_name = [];
          $('.m_hospital_name').each(function () {
               m_hospital_name.push($(this).val());
          });

          // console.log("hospital name");
          // console.table(m_hospital_name);
          var hospitalised_allergy = []
          $('.hosp_allergy').each(function (index, element) {
               var s = `input[name="hospitalised_allergy[` + index + `]"]:checked`;
               // console.log("ssssss:"+s);
               hospitalised_allergy.push($(s).val());

          });
          // console.log("hospitalized for allergy?: ");
          // console.table(hospitalised_allergy);
          var diagnosed_allergy = [];
          $('.diag_allergy').each(function (index, element) {
               var x = `input[name="diagnosed_allergy[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               diagnosed_allergy.push($(x).val());
          });
          // console.log("Diagnosed for allergy?: ");
          // console.table(diagnosed_allergy);
          var m_docter_treating_allergy = [];
          $('.m_docter_treating_allergy').each(function () {
               m_docter_treating_allergy.push($(this).val());
          });
          // console.log("m_docter_treating_allergy name");
          // console.table(m_docter_treating_allergy);
          var plan_anaphylaxis = [];
          $('.plan_anaphylaxis').each(function (index, element) {
               var x = `input[name="plan_anaphylaxis[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               plan_anaphylaxis.push($(x).val());
          });
          // console.log("plan_anaphylaxis for allergy?: ");
          // console.table(plan_anaphylaxis);
          var adrenaline_autoinjector = [];
          $('.adrenaline_autoinjector').each(function (index, element) {
               var x = `input[name="adrenaline_autoinjector[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               adrenaline_autoinjector.push($(x).val());
          });
          // console.log("adrenaline_autoinjector for allergy?: ");
          // console.table(adrenaline_autoinjector);
          var m_adrenaline_autoinjector = [];
          $('.m_adrenaline_autoinjector').each(function () {
               m_adrenaline_autoinjector.push($(this).val());
          });
          // console.log("m_adrenaline_autoinjector name");
          // console.table(m_adrenaline_autoinjector);

          var medication_allergy = [];
          var m_medication_name = [];
          $('.medication_allergy').each(function (index, element) {
               var x = `input[name="medication_allergy[` + index + `]"]:checked`;
               var y = document.getElementsByClassName(`m_medication_name[` + index + `]`);
               var medication_name = [];
               for (i = 0; i < y.length; i++) {
                    console.log('Medication Name: ');
                    console.log(y[i].value)
                    medication_name.push(y[i].value);
               }
               m_medication_name.push(medication_name);
               medication_allergy.push($(x).val());
          });

          // console.log("medication_allergy name");
          // console.table(medication_allergy);

          // console.log("Medication namesssss");
          // console.table(m_medication_name);

          // for(i=0;i<m_medication_name.length;i++){
          //      console.log("Disease "+(i+1));
          //      m_medication_name[i].forEach(function(value){
          //         console.log("Med :"+value);
          //      });
          // }




          //severe Allergies
          var severe_allergies = [];
          for (i = 0; i < m_allergic_to.length; i++) {
               var severe_allergy = {};
               severe_allergy.m_allergic_to = m_allergic_to[i];
               severe_allergy.m_hospital_name = m_hospital_name[i];
               severe_allergy.hospitalised_allergy = hospitalised_allergy[i];
               severe_allergy.diagnosed_allergy = diagnosed_allergy[i];
               severe_allergy.m_docter_treating_allergy = m_docter_treating_allergy[i];
               severe_allergy.plan_anaphylaxis = plan_anaphylaxis[i];
               severe_allergy.adrenaline_autoinjector = adrenaline_autoinjector[i];
               severe_allergy.m_adrenaline_autoinjector = m_adrenaline_autoinjector[i];
               severe_allergy.medication_allergy = medication_allergy[i];
               severe_allergy.m_medication_name = m_medication_name[i];

               console.log("Each Anaphylactic allergy:");
               console.table(severe_allergy);
               severe_allergies.push(severe_allergy);
          }







          //Non severe Allergies

          var non_severe_allergies_check = $('input[name=non_severe_allergies]:checked').val();
          console.log("Did Non-severe Alergy:");
          console.table(non_severe_allergies_check);

          var m_non_severe_allergic_to = [];
          $('.m_non_severe_allergic_to').each(function (index, element) {
               m_non_severe_allergic_to.push($(this).val());

          });
          // console.log("m_non_severe_allergic_to");
          // console.table(m_non_severe_allergic_to);

          var m_non_severe_hospital_name = [];
          $('.m_non_severe_hospital_name').each(function () {
               m_non_severe_hospital_name.push($(this).val());
          });

          // console.log("m_non_severe_hospital_name name");
          // console.table(m_non_severe_hospital_name);
          var non_severe_hosp_allergy = []
          $('.non_severe_hosp_allergy').each(function (index, element) {
               var s = `input[name="non_severe_hospitalised_allergy[` + index + `]"]:checked`;
               // console.log("ssssss:"+s);
               non_severe_hosp_allergy.push($(s).val());

          });
          // console.log("non_severe_hosp_allergy for allergy?: ");
          // console.table(non_severe_hosp_allergy);
          var non_severe_diagnosed_allergy = [];
          $('.non_severe_diagnosed_allergy').each(function (index, element) {
               var x = `input[name="non_severe_diagnosed_allergy[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               non_severe_diagnosed_allergy.push($(x).val());
          });
          // console.log("Diagnosed for allergy?: ");
          // console.table(diagnosed_allergy);
          var m_non_severe_docter_treating_allergy = [];
          $('.m_non_severe_docter_treating_allergy').each(function () {
               m_non_severe_docter_treating_allergy.push($(this).val());
          });
          // console.log("m_non_severe_docter_treating_allergy name");
          // console.table(m_non_severe_docter_treating_allergy);
          var non_severe_plan_anaphylaxis = [];
          $('.non_severe_plan_anaphylaxis').each(function (index, element) {
               var x = `input[name="non_severe_plan_anaphylaxis[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               non_severe_plan_anaphylaxis.push($(x).val());
          });
          // console.log("non_severe_plan_anaphylaxis for allergy?: ");
          // console.table(non_severe_plan_anaphylaxis);
          var non_severe_adrenaline_autoinjector = [];
          $('.non_severe_adrenaline_autoinjector').each(function (index, element) {
               var x = `input[name="non_severe_adrenaline_autoinjector[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               non_severe_adrenaline_autoinjector.push($(x).val());
          });
          // console.log("non_severe_adrenaline_autoinjector for allergy?: ");
          // console.table(non_severe_adrenaline_autoinjector);
          var m_non_severe_adrenaline_autoinjector = [];
          $('.m_non_severe_adrenaline_autoinjector').each(function () {
               m_non_severe_adrenaline_autoinjector.push($(this).val());
          });
          // console.log("m_non_severe_adrenaline_autoinjector name");
          // console.table(m_non_severe_adrenaline_autoinjector);
          var non_severe_medication_allergy = [];
          var m_non_severe_medication_name = [];
          $('.non_severe_medication_allergy').each(function (index, element) {
               var x = `input[name="non_severe_medication_allergy[` + index + `]"]:checked`;
               var y = document.getElementsByClassName(`m_non_severe_medication_name[` + index + `]`);
               var non_severe_medication_name = [];
               for (i = 0; i < y.length; i++) {
                    console.log('Medication Name: ');
                    console.log(y[i].value)
                    non_severe_medication_name.push(y[i].value);
               }
               m_non_severe_medication_name.push(non_severe_medication_name);
               non_severe_medication_allergy.push($(x).val());
          });

          // console.log("non_severe_medication_allergy name");
          // console.table(non_severe_medication_allergy);

          // console.log("Non severe Medication names");
          // console.table(m_non_severe_medication_name);

          // for(i=0;i<m_non_severe_medication_name.length;i++){
          //      console.log("Disease "+(i+1));
          //      m_non_severe_medication_name[i].forEach(function(value){
          //         console.log("Med :"+value);
          //      });
          // }




          //non severe Allergies
          var non_severe_allergies = [];
          for (i = 0; i < m_non_severe_allergic_to.length; i++) {
               var non_severe_allergy = {};
               non_severe_allergy.m_non_severe_allergic_to = '';
               non_severe_allergy.m_non_severe_hospital_name = '';
               non_severe_allergy.non_severe_hosp_allergy = '';
               non_severe_allergy.non_severe_diagnosed_allergy = '';
               non_severe_allergy.m_non_severe_docter_treating_allergy = '';
               non_severe_allergy.non_severe_plan_anaphylaxis = '';
               non_severe_allergy.non_severe_adrenaline_autoinjector = '';
               non_severe_allergy.m_non_severe_adrenaline_autoinjector = '';
               non_severe_allergy.non_severe_medication_allergy = '';
               non_severe_allergy.m_non_severe_medication_name = '';


               non_severe_allergy.m_non_severe_allergic_to = m_non_severe_allergic_to[i];
               if (m_non_severe_hospital_name[i]) {
                    non_severe_allergy.m_non_severe_hospital_name = m_non_severe_hospital_name[i];
               }
               non_severe_allergy.non_severe_hosp_allergy = non_severe_hosp_allergy[i];
               non_severe_allergy.non_severe_diagnosed_allergy = non_severe_diagnosed_allergy[i];
               non_severe_allergy.m_non_severe_docter_treating_allergy = m_non_severe_docter_treating_allergy[i];
               non_severe_allergy.non_severe_plan_anaphylaxis = non_severe_plan_anaphylaxis[i];
               non_severe_allergy.non_severe_adrenaline_autoinjector = non_severe_adrenaline_autoinjector[i];
               non_severe_allergy.m_non_severe_adrenaline_autoinjector = m_non_severe_adrenaline_autoinjector[i];
               non_severe_allergy.non_severe_medication_allergy = non_severe_medication_allergy[i];
               non_severe_allergy.m_non_severe_medication_name = m_non_severe_medication_name[i];

               console.log("Each None-Severe allergy:");
               console.table(non_severe_allergy);
               non_severe_allergies.push(non_severe_allergy);
          }


          //Any Other medical conditions
          var other_medical_conditions = $('input[name=other_medical_conditions]:checked').val();
          console.log(" Is the student being treated for any other medical conditions?:");
          console.table(other_medical_conditions);

          var m_medical_condition_name = [];
          $('.m_medical_condition_name').each(function (index, element) {
               m_medical_condition_name.push($(this).val());

          });
          console.log("m_medical_condition_name");
          console.table(m_medical_condition_name);

          var m_medical_condition_hospital_name = [];
          $('.m_medical_condition_hospital_name').each(function () {
               m_medical_condition_hospital_name.push($(this).val());
          });

          // console.log("m_medical_condition_hospital_name name");
          // console.table(m_medical_condition_hospital_name);
          var hospitalised_medical_condition = []
          $('.hospitalised_medical_condition').each(function (index, element) {
               var s = `input[name="hospitalised_medical_condition[` + index + `]"]:checked`;
               // console.log("ssssss:"+s);
               hospitalised_medical_condition.push($(s).val());

          });
          // console.log("hospitalised_medical_condition for allergy?: ");
          // console.table(hospitalised_medical_condition);
          var diagnosed_medical_condition = [];
          $('.diagnosed_medical_condition').each(function (index, element) {
               var x = `input[name="diagnosed_medical_condition[` + index + `]"]:checked`;
               // console.log("diagnosed_medical_condition:"+x);
               diagnosed_medical_condition.push($(x).val());
          });
          // console.log("diagnosed_medical_condition for allergy?: ");
          // console.table(diagnosed_medical_condition);
          var m_treating_medical_condition = [];
          $('.m_treating_medical_condition').each(function () {
               m_treating_medical_condition.push($(this).val());
          });
          // console.log("m_treating_medical_condition name");
          // console.table(m_treating_medical_condition);
          var documented_plan_medical_condition = [];
          $('.documented_plan_medical_condition').each(function (index, element) {
               var x = `input[name="documented_plan_medical_condition[` + index + `]"]:checked`;
               // console.log("Diagnosed_Allergy:"+x);
               documented_plan_medical_condition.push($(x).val());
          });
          // console.log("documented_plan_medical_condition for allergy?: ");
          // console.table(documented_plan_medical_condition);
          var student_taking_medication = [];
          var m_taking_medical_condition_name = [];
          $('.student_taking_medication').each(function (index, element) {
               var x = `input[name="student_taking_medication[` + index + `]"]:checked`;
               var y = document.getElementsByClassName(`m_taking_medical_condition_name[` + index + `]`);
               var medical_medication_name = [];
               for (i = 0; i < y.length; i++) {
                    console.log('Medication Name: ');
                    console.log(y[i].value)
                    medical_medication_name.push(y[i].value);
               }
               m_taking_medical_condition_name.push(medical_medication_name);
               student_taking_medication.push($(x).val());
          });

          // console.log("student_taking_medication name");
          // console.table(student_taking_medication);

          // console.log("m_taking_medical_condition_name Medication names");
          // console.table(m_taking_medical_condition_name);

          // for(i=0;i<m_taking_medical_condition_name.length;i++){
          //      console.log("Disease "+(i+1));
          //      m_taking_medical_condition_name[i].forEach(function(value){
          //         console.log("Med :"+value);
          //      });
          // }




          //other medical condition
          var medical_conditions = [];
          for (i = 0; i < m_medical_condition_name.length; i++) {
               var medical_condition = {};
               medical_condition.m_medical_condition_name = m_medical_condition_name[i];
               medical_condition.m_medical_condition_hospital_name = m_medical_condition_hospital_name[i];
               medical_condition.hospitalised_medical_condition = hospitalised_medical_condition[i];
               medical_condition.diagnosed_medical_condition = diagnosed_medical_condition[i];
               medical_condition.m_treating_medical_condition = m_treating_medical_condition[i];
               medical_condition.documented_plan_medical_condition = documented_plan_medical_condition[i];
               medical_condition.student_taking_medication = student_taking_medication[i];
               medical_condition.m_taking_medical_condition_name = m_taking_medical_condition_name[i];

               console.log("Other Medical Condition:");
               console.table(medical_condition);
               medical_conditions.push(medical_condition);
          }



          //Tiger
          $.ajax({
               type: 'POST',
               url: '/medicalDetail',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    m_MedicareNumber: $("[name='m_MedicareNumber']").val(),
                    m_ReferenceNumber: $("[name='m_ReferenceNumber']").val(),
                    m_expiryDate: $("[name='m_expiryDate']").val(),
                    doctors: Doctors,
                    anaphylactic_allergies: anaphylactic_allergies,
                    non_severe_allergies_check: non_severe_allergies_check,
                    severe_allergies: severe_allergies,
                    non_severe_allergies: non_severe_allergies,
                    medical_conditions: medical_conditions
               },
               success: function (response) {
                    console.log("Successfull");
               }
          });




          console.table(myArray);
          onchangeEditSection('learning')
     });

     $("#learningSupportSubmit").click(function () {
          var w = $('#learningSupportForm').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[2].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[2].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/learningSupport',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    autism: $("#autism").val(),
                    aHearingImpairment: $("#aHearingImpairment").val(),
                    languageDisorder: $("#languageDisorder").val(),
                    physicalDisability: $("#physicalDisability").val(),
                    DifficultiesInLearning: $("#DifficultiesInLearning").val(),
                    AcquiredBrainInjury: $("#AcquiredBrainInjury").val(),
                    BehaviourDisorder: $("#BehaviourDisorder").val(),
                    IntellectualDisability: $("#IntellectualDisability").val(),
                    MentalHealthDisorder: $("#MentalHealthDisorder").val(),
                    visionImpairment: $("#visionImpairment").val(),
                    OtherDisabilityDetails: $("[name='OtherDisabilityDetails']").val(),
                    additional_learning_need: $("[name='additional_learning_need']").val(),
                    ProvideDetails: $("[name='ProvideDetails']").val(),
                    teaching_strategies: $("#teaching_strategies").val(),
                    speaking_listening: $("#speaking_listening").val(),
                    earning_materials: $("#earning_materials").val(),
                    health_care_needs: $("#health_care_needs").val(),
                    children_and_teachers: $("#children_and_teachers").val(),
                    Other_adjustments_details: $("[name='Other_adjustments_details']").val(),
                    student_educational_needs: $("[name='student_educational_needs']").val(),
                    Describe_modifications_strategies: $("[name='Describe_modifications_strategies']").val()
               },
               success: function (response) {
                    console.log("Successfull");
               }
          });
          onchangeEditSection('risk')
     });

     $("#riskAssessmentSubmit").click(function () {
          var w = $('#riskAssessmentForm').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[3].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[3].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/RiskAssessment',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    violent_behaviour: myArray[0].substring(18),
                    r_Provide_details: $("[name='r_Provide_details']").val(),
                    serious_behaviours: myArray[2].substring(19),
                    serious_behaviours_Provide_details: $("[name='serious_behaviours_Provide_details']").val(),
                    school_staff: myArray[4].substring(13),
                    school_staff_Provide_details: $("[name='school_staff_Provide_details']").val(),
                    knowledge_issues: myArray[6].substring(17),
                    r_health_professional: $("[name='r_health_professional']").val(),
                    r_contact_number: $("[name='r_contact_number']").val(),
               },
               success: function (response) {
                    console.log("Successfull");
               }
          });

          onchangeEditSection('sibling')
     });

     $("#siblingsSubmit").click(function () {
          var w = $('#siblingsFrom').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[4].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[4].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/siblings',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    government_school: myArray[0].substring(18),
                    s_givenName: $("[name='s_givenName']").val(),
                    s_middleName: $("[name='s_middleName']").val(),
                    s_familyName: $("[name='s_familyName']").val(),
                    s_genderRadio: myArray[4].substring(14),
                    dateOfBirth: $("#dateOfBirth").val(),
                    s_school_attended: $("[name='s_school_attended']").val(),
               },
               success: function (response) {
                    console.log("Successfull");
               }
          });

          onchangeEditSection('parents')
     });

     $("#additionalInfoSubmit").click(function () {
          var w = $('#additionalInfoForm').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[7].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[7].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/add_info',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    prior_enrolment_yes: $("#prior_enrolment_yes").val(),
                    prior_enrolment_no: $("#prior_enrolment_no").val(),
                    a_provide_details: $("#a_provide_details").val(),

               },
               success: function (response) {
                    console.log("Successful");
               }

          });
          onchangeEditSection('declaration')
     });

     $("#permissionSubmit").click(function () {
          var w = $('#permissionForm').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[8].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[8].style.color = "white";
          $.ajax({
               type: 'POST',
               url: '/permissions',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    p_department: myArray[0].substring(13),
                    publicly_accessible: myArray[1].substring(20),
               },
               success: function (response) {
                    console.log("Successful");
               }

          });


          onchangeEditSection('documents')
     });

     $("#parentsCarersSubmit").click(function () {
          var w = $('#parentsCarersForm').serialize();
          var myArray = w.split("&");
          console.table(myArray);

          document.getElementsByClassName('status-menu__icon')[5].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[5].style.color = "white";
          onchangeEditSection('emergency')
     });

     $("#supportingDocSubmit").click(function () {
          var w = $('#supportingDocForm').serialize();
          var myArray = w.split("&");

          document.getElementsByClassName('status-menu__icon')[9].style.backgroundColor = "green";
          document.getElementsByClassName('status-menu__icon')[9].style.color = "white";
          //Tiger

          $.ajax({
               type: 'POST',
               url: '/supportingDocForm',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               data: {
                    upload_check_1: document.getElementById('upload_check_1').checked,
                    upload_check_2: document.getElementById('upload_check_2').checked,
                    upload_check_3: document.getElementById('upload_check_3').checked,
                    upload_check_4: document.getElementById('upload_check_4').checked,
                    upload_check_5: document.getElementById('upload_check_5').checked,
                    upload_check_6: document.getElementById('upload_check_6').checked,
                    upload_check_7: document.getElementById('upload_check_7').checked
               },
               success: function (response) {
                    console.log("Successful");
               }

          });
          console.table(myArray);
          onchangeEditSection('review')
     });


     $('.custom-datepicker').datepicker({
          format: "mm          yyyy",
          startView: "years",
          minViewMode: "months"
     });

     $("#new_stageConfirm").submit(function (e) {
          e.preventDefault();
          var name = $("#new_stageName").val();
          var id_name = name.replace(/ /g, '_');
          var addFields = $(`<div class="mb-5 classesCounter ${id_name}">
                                   <div class="nk-block-head nk-block-head-sm">
                                        <div class="nk-block-between-custom">
                                             <div class="nk-block-head-content">
                                                  <h4 class="${id_name}_stageName">${name}</h4>
                                             </div>.
                                             <div class="drodown">
                                                  <a href="#" class="dropdown-toggle btn btn-icon btn-white btn-outline-light" data-toggle="dropdown"><em class="icon ni ni-chevron-down-round"></em></a>
                                                  <div class="dropdown-menu dropdown-menu-right">
                                                       <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign Teacher</span></a></li>
                                                            <li><a href="#" onclick="editStageItem('${id_name}')"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                            <li><a href="#" onclick="removeStageItem('${id_name}')"><em class="icon ni ni-property-remove"></em><span>Delete Category</span></a></li>
                                                       </ul>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="row g-gs classesCard" id="${id_name}">
                                        <div class="col-sm-6 col-lg-4 col-xxl-3" onclick="classesDetailPage()">
                                             <div class="card h-100">
                                                  <div class="card-inner">
                                                       <div class="project">
                                                            <div class="project-head">
                                                            <a href="html/apps-kanban.html" class="project-title">
                                                                 <div class="user-avatar sq bg-info"><span>KR</span></div>
                                                                 <div class="project-info">
                                                                      <h6 class="title">Keyword Research for SEO</h6>
                                                                      <span class="sub-text">Techyspec</span>
                                                                 </div>
                                                            </a>
                                                            <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-right">
                                                                      <ul class="link-list-opt no-bdr">
                                                                           <li><a href="html/apps-kanban.html"><em class="icon ni ni-eye"></em><span>View Project</span></a></li>
                                                                           <li><a href="#"><em class="icon ni ni-edit"></em><span>Edit Project</span></a></li>
                                                                           <li><a href="#"><em class="icon ni ni-check-round-cut"></em><span>Mark As Done</span></a></li>
                                                                      </ul>
                                                                 </div>
                                                            </div>
                                                            </div>
                                                            <div class="project-details">
                                                            <p>Improve SEO keyword research, A/B testing, Local market improvement.</p>
                                                            </div>
                                                            <div class="project-progress">
                                                            <div class="project-progress-details">
                                                                 <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>8 Tasks</span></div>
                                                                 <div class="project-progress-percent">100%</div>
                                                            </div>
                                                            <div class="progress progress-pill progress-md bg-light">
                                                                 <div class="progress-bar" data-progress="100"></div>
                                                            </div>
                                                            </div>
                                                            <div class="project-meta">
                                                            <ul class="project-users g-1">
                                                                 <li>
                                                                      <div class="user-avatar sm bg-primary"><img src="./images/avatar/a-sm.jpg" alt=""></div>
                                                                 </li>
                                                                 <li>
                                                                      <div class="user-avatar sm bg-primary"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                                                 </li>
                                                            </ul>
                                                            <span class="badge badge-dim badge-success"><em class="icon ni ni-clock"></em><span>Done</span></span>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>`);
          $("#classesContent").append(addFields);
          // document.getElementById(id_name).scrollIntoView({behavior: 'smooth'});
          $("#createNewStageModal").modal('hide');
          $("#new_stageName").val('');
          var count = $("#classesContent .classesCounter").length;
          $("#totalClassesCount").text(count);
     })

     $("#editNewStageModal").submit(function (e) {
          e.preventDefault();
          var editName = $("#edit_stageName").val();
          var id = $("#getEditStageId").val();
          $(`.${id}_stageName`).text(editName);
          $('#editNewStageModal').modal('hide');
          $("#edit_stageName").val('');
     })

     $("#classes_next").click(function () {
          if ($("#new_stageName").val()) {
               $("#classes_confirm").show();
               $("#classes_next").hide();
               $(".classes_before").slideDown(500);
          } else {
               NioApp.Toast('Please enter the value', 'error', {
                    position: 'top-right',
                    timeOut: 5000,
                    progressBar: true,
                    showMethod: 'fadeIn',
                    hideMethod: 'fadeOut'
               });
          }
     })

     $("#subjectBox").click(function () {
          $(".addSubjectButtonHeight a").hide();
          $(".subject").show();
     })

     $("#teacherBox").click(function () {
          $(".addSubjectButtonHeight a").hide();
          $(".teacher").show();
     })

     $("#classesBox").click(function () {
          $(".addSubjectButtonHeight a").hide();
          $(".classes").show();
     })

     $("#selectedEmploymentRecordFileRemove").click(function (e) {
          e.preventDefault();
          $("#employmentRecord").val('');
          $("label[for=employmentRecord]").text('Choose file');
          $('#selectedEmploymentRecordFileRemove').prop("disabled", true);
     })

     $("#selectedResumeFileRemove").click(function (e) {
          e.preventDefault();
          $("#resume").val('');
          $("label[for=resume]").text('Choose file');
          $('#selectedResumeFileRemove').prop("disabled", true);
     })

     $("#selectedCoverLetterFileRemove").click(function (e) {
          e.preventDefault();
          $("#coverLetter").val('');
          $("label[for=coverLetter]").text('Choose file');
          $('#selectedCoverLetterFileRemove').prop("disabled", true);
     })

     $("#selectedSupportingDocFileRemove").click(function (e) {
          e.preventDefault();
          $("#supportingDoc").val('');
          $("label[for=supportingDoc]").text('Choose file');
          $('#selectedSupportingDocFileRemove').prop("disabled", true);
     })

     $("#selectedANPassportFileRemove").click(function (e) {
          e.preventDefault();
          $("#ANPassport").val('');
          $("label[for=ANPassport]").text('Choose file');
          $('#selectedANPassportFileRemove').prop("disabled", true);
     })
})

function person(id) {
     location.href = "person/" + id
}

function changeFirstName(value) {
     if (value)
          $(".changingName").text(value);
     else
          $(".changingName").text("Student");
}

function changeIntendedDate(value) {
     if (value == 1) {
          $(".intendedStartDate").slideDown(500);
     } else {
          $(".intendedStartDate").slideUp(500);
          $(".educationalProgram").slideUp(500);
     }
}

function enrolledIn(value) {
     if (value == "kindergarten")
          $(".educationalProgram").slideDown(500);
     else
          $(".educationalProgram").slideUp(500);
}

function attendSchool(value) {
     if (value != "none")
          $(".attendSchoolDate").slideDown(500);
     else
          $(".attendSchoolDate").slideUp(500);

     if (value == "OVS")
          $(".attendSchoolLocation").slideDown(500);
     else
          $(".attendSchoolLocation").slideUp(500);

     if (value == "none") {
          $(".attendSchoolDate").slideUp(500);
          $(".attendSchoolLocation").slideUp(500);
     }

}

function removeEducationForm(removeId) {
     $("#addedEducationForm_" + removeId).remove();
}

function removeAnotherDocterMedicalCentre(removeId) {
     $("#m_addAnotherDocterMedicalCentre_form_" + removeId).remove();
     var titleList = $(".m_addAnotherDocterMedicalCentre_form .student_doctor_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Doctor " + count;
     }
}

function removeParentCarerContactNumber(parent_id, child_id) {
     $("#p_contact_number_section_" + parent_id + "_" + child_id).remove();
     var titleList = $(".p_contact_number_form_" + parent_id + " .parent_carer_contact_number_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Enter parent/carer's contact number " + count;
     }
}

function addAnotherDocter(id) {
     var intId = $(".p_contact_number_form_" + id + " .row.mt-3").length || 1;
     var addFields =
          $(`<div class="row mt-3" id="p_contact_number_section_${id}_${intId}">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong class="parent_carer_contact_number_title">Enter parent/carer's contact number ${intId}</strong></p>
                         <a onclick="removeParentCarerContactNumber(${id}, ${intId})">Remove</a>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Phone number type</label>
                         <select class="form-control" name="m_docter_country[${id}][]">
                              <option value="">select</option>
                              <option value="PHMOB">Phone (Mobile)</option>
                              <option value="PHHOM">Phone (Home)</option>
                              <option value="PHWRK">Phone (Business/Work)</option>
                         </select>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label">Phone number</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="p_phone_number[${id}][]">
                         </div>
                         <p class="description">In special circumstances the school may ask permission to contact the student's doctor.</p>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Comments</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control" name="p_comments[${id}][]">
                         </div>
                         <p class="description">The name of a medical centre is also accepted.</p>
                    </div>
               </div>
          </div>`);
     $(".p_contact_number_form_" + id).append(addFields);
}

function studentCountryBirth(val) {
     if (val === "Australia") {
          $(".studentCountryBirth_child_arrive_date").slideUp(500);
          $(".studentCountryBirth_child_radio").slideDown(500);
     } else if (val === "none") {
          $(".studentCountryBirth_child_arrive_date").slideUp(500);
          $(".studentCountryBirth_child_radio").slideUp(500);
     } else {
          $(".studentCountryBirth_child_arrive_date").slideDown(500);
          $(".studentCountryBirth_child_radio").slideUp(500);
     }
}

function changeStudentResidentialAddress(val) {
     if (val === "Australia") {
          $(".australia_postal").slideDown(500);
          $(".other_country_postal").slideUp(500);
     } else if (val === "none") {
          $(".other_country_postal").slideUp(500);
          $(".australia_postal").slideUp(500);
     } else {
          $(".other_country_postal").slideDown(500);
          $(".australia_postal").slideUp(500);
     }
}

function addAnotherMedication(index) {
     var intId = $("#m_addMedicationAllergy_parent_form_" + index + " .row").length || 1;
     var addFields =
          $(`<div class="row" id="m_addMedicationAllergy_child_form_` + index + `_` + intId + `">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong class="medication_name_title">Medication `+ (intId + 1) + `</strong></p>
                         <a onclick="removeAnotherMedication(`+ index + `,` + intId + `)">Remove</a>
                    </div>
               </div>
               <div class="col-md-12 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Name</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_medication_name[`+ index + `]" name="m_medication_name[` + index + `][` + intId + `]">
                         </div>
                    </div>
               </div>
          </div>`);
     $("#m_addMedicationAllergy_parent_form_" + index).append(addFields);
}

function removeAnotherMedication(parent_id, child_id) {
     $("#m_addMedicationAllergy_child_form_" + parent_id + "_" + child_id).remove();
     var titleList = $("#m_addMedicationAllergy_parent_form_" + parent_id + " .medication_name_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Medication " + count;
     }
}

function removeAnaphylacticAllergy(removeId) {
     $("#anahylacticAllergy_child_form_" + removeId).remove();
     var titleList = $(".m_addAnaphylacticAllergy_form .anaphylactic_allergy_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Anaphylactic allergy " + count;
     }
}

function removeNonSevereAllergy(removeId) {
     $("#non_severe_Allergy_child_form_" + removeId).remove();
     var titleList = $(".m_addNonSevereAllergy_form .non_severe_allergy_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Non-severe allergy " + count;
     }
}

function removeMedicalCondition(removeId) {
     $("#medical_condition_child_form_" + removeId).remove();
     var titleList = $(".m_addMedicalCondition_form .medical_condition_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Medical condition " + count;
     }
}

function change_hospitalised_allergy(indexId, radioId) {
     if (radioId == '1') {
          $(".m_hospital_name_" + indexId).slideDown(500);
     } else {
          $(".m_hospital_name_" + indexId).slideUp(500);
     }
}

function change_diagnosed_allergy(indexId, radioId) {
     if (radioId == '1') {
          $(".m_docter_treating_allergy_" + indexId).slideDown(500);
     } else {
          $(".m_docter_treating_allergy_" + indexId).slideUp(500);
     }
}

function change_adrenaline_autoinjector(indexId, radioId) {
     if (radioId == '1') {
          $(".m_adrenaline_autoinjector_" + indexId).slideDown(500);
     } else {
          $(".m_adrenaline_autoinjector_" + indexId).slideUp(500);
     }
}

function change_medication_allergy(indexId, radioId) {
     if (radioId == '1') {
          $("#m_addMedicationAllergy_parent_form_" + indexId).slideDown(500);
          $(".m_medication_allergy_button_" + indexId).slideDown(500);
     } else {
          $("#m_addMedicationAllergy_parent_form_" + indexId).slideUp(500);
          $(".m_medication_allergy_button_" + indexId).slideUp(500);
     }
}

function changeDoctorName(e) {
     indexId = e.name.match(/\d+/)[0];
     if (doctorNameArray.length <= indexId)
          doctorNameArray.push({ name: e.value });
     else
          doctorNameArray[indexId].name = e.value;
}

function change_docter_treating_allergy(value) {
     if (!value) {
          $("select[name^=m_docter_treating_allergy").map((item, select) => {
               select.innerHTML = '';
               var nullOption = document.createElement("option");
               nullOption.text = 'select';
               nullOption.value = '';
               select.add(nullOption);
               doctorNameArray.map((item, index) => {
                    var option = document.createElement("option");
                    option.text = item.name;
                    option.value = item.name;
                    select.add(option);
               });
          })
     }
}

function addAnotherDocterMedicalCentre() {
     var intId = $(".m_addAnotherDocterMedicalCentre_form .row.mt-3").length || 1;
     var addFields =
          $(`<div class="row mt-3" id="m_addAnotherDocterMedicalCentre_form_${intId}">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong  class="student_doctor_title">Doctor ${(intId + 1)}</strong></p>
                         <a onclick="removeAnotherDocterMedicalCentre(${(intId)})">Remove</a>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label">Doctor's name/medical centre</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_docter_name" name="m_docter_name[${intId}]" onchange="changeDoctorName(this)">
                         </div>
                         <p class="description">The name of a medical centre is also accepted.</p>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Country</label>
                         <select class="form-control m_docter_country" name="m_docter_country[${intId}]" id="m_docter_country_${intId}"  onchange="change_doctor_country(${intId}, this.value)">
                              <option value="">select country</option>
                         </select>
                    </div>
               </div>
               <div class="col-md-6 mt-3 doctor_australia_country_${intId}">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Street</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_street" name="m_street[${intId}]">
                         </div>
                         <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                    </div>
               </div>
               <div class="col-md-6 mt-3 doctor_australia_country_${intId}">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Suburb</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_suburb" name="m_suburb[${intId}]">
                         </div>
                         <p class="description mt-2">e.g. Sydney</p>
                    </div>
               </div>
               <div class="col-md-3 mt-3 doctor_australia_country_${intId}">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>State</label>
                         <div class="form-control-wrap">
                              <select class="form-control m_state" name="m_state[${intId}]">
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
               <div class="col-md-3 mt-3 doctor_australia_country_${intId}">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Postcode</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_postcode" name="m_postcode[${intId}]">
                         </div>
                    </div>
               </div>
               <div class="col-md-12 mt-3 doctor_other_country_${intId}">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Address</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_address_line_1" name="m_address_line_1[${intId}]" placeholder="Address line 1">
                         </div>
                    </div>
               </div>
               <div class="col-md-12 mt-3 doctor_other_country_${intId}">
                    <div class="form-group">
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_address_line_2" name="m_address_line_2[${intId}]" placeholder="Address line 2">
                         </div>
                    </div>
               </div>
               <div class="col-md-6 mt-3">
                    <div class="form-group">
                         <label class="form-label">Phone number</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_phone_number" name="m_phone_number[${intId}]">
                         </div>
                         <p class="description">In special circumstances the school may ask permission to contact the student's doctor.</p>
                    </div>
               </div>
          </div>`);
     var gotoId = intId - 1;
     window.location.hash = "#m_addAnotherDocterMedicalCentre_form_" + gotoId;
     $.ajax({
          type: 'POST',
          url: '/getCountryList',
          headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
          success: function (response) {
               response.list.forEach((element, index) => {
                    $("#m_docter_country_" + intId).append('<option value="' + element.name + '">' + element.name + '</option>');
                    if (index == 0)
                         $("#m_docter_country_" + intId).append('<option disabled>--------------------------</option>');

               });
          }
     });
     $('.m_addAnotherDocterMedicalCentre_form').append(addFields);
}

function change_doctor_country(indexId, value) {
     if (value == 'Australia') {
          $(".doctor_australia_country_" + indexId).slideDown(500);
          $(".doctor_other_country_" + indexId).slideUp(500);
     } else if (value == "") {
          $(".doctor_australia_country_" + indexId).slideUp(500);
          $(".doctor_other_country_" + indexId).slideUp(500);
     } else {
          $(".doctor_other_country_" + indexId).slideDown(500);
          $(".doctor_australia_country_" + indexId).slideUp(500);
     }
}

function change_non_severe_hospitalised_allergy(indexId, radioId) {
     if (radioId == '1') {
          $(".m_non_severe_hospital_name_" + indexId).slideDown(500);
     } else {
          $(".m_non_severe_hospital_name_" + indexId).slideUp(500);
     }
}

function change_non_severe_diagnosed_allergy(indexId, radioId) {
     if (radioId == '1') {
          $(".m_non_severe_docter_treating_allergy_" + indexId).slideDown(500);
     } else {
          $(".m_non_severe_docter_treating_allergy_" + indexId).slideUp(500);
     }
}

function change_non_severe_adrenaline_autoinjector(indexId, radioId) {
     if (radioId == '1') {
          $(".m_non_severe_adrenaline_autoinjector_" + indexId).slideDown(500);
     } else {
          $(".m_non_severe_adrenaline_autoinjector_" + indexId).slideUp(500);
     }
}

function change_non_severe_medication_allergy(indexId, radioId) {
     if (radioId == '1') {
          $(`#m_addNonSevereMedicationAllergy_parent_form_${indexId}`).slideDown(500);
          $(`.m_non_severe_medication_allergy_button_${indexId}`).slideDown(500);
     } else {
          $(`#m_addNonSevereMedicationAllergy_parent_form_${indexId}`).slideUp(500);
          $(`.m_non_severe_medication_allergy_button_${indexId}`).slideUp(500);
     }
}

function addNonSevereAnotherMedication(index) {
     var intId = $(`#m_addNonSevereMedicationAllergy_parent_form_${index} .row`).length || 1;
     var addFields =
          $(`<div class="row" id="m_addNonSevereMedicationAllergy_child_form_${index}_${intId}">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong class="non_severe_medication_name_title">Medication ${(intId + 1)}</strong></p>
                         <a onclick="removeNonSevereAnotherMedication(${index},${(intId)})">Remove</a>
                    </div>
               </div>
               <div class="col-md-12 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Name</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_non_severe_medication_name[`+ index + `]" name="m_non_severe_medication_name[${index}][${intId}]">
                         </div>
                    </div>
               </div>
          </div>`);
     $("#m_addNonSevereMedicationAllergy_parent_form_" + index).append(addFields);
}

function removeNonSevereAnotherMedication(parent_id, child_id) {
     $("#m_addNonSevereMedicationAllergy_child_form_" + parent_id + "_" + child_id).remove();
     var titleList = $("#m_addNonSevereMedicationAllergy_parent_form_" + parent_id + " .non_severe_medication_name_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Medication " + count;
     }
}

function change_non_severe_docter_treating_allergy(value) {
     if (!value) {
          $("select[name^=m_non_severe_docter_treating_allergy").map((item, select) => {
               select.innerHTML = '';
               var nullOption = document.createElement("option");
               nullOption.text = 'select';
               nullOption.value = '';
               select.add(nullOption);
               doctorNameArray.map((item, index) => {
                    var option = document.createElement("option");
                    option.text = item.name;
                    option.value = item.name;
                    select.add(option);
               });
          })
     }
}

function AddAnotherMedicalCondition(index) {
     var intId = $(`#m_addMedicalCondition_parent_form_${index} .row`).length || 1;
     var addFields =
          $(`<div class="row" id="m_addMedicalCondition_child_form_${index}_${intId}">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong class="medical_condition_name_title">Medication ${(intId + 1)}</strong></p>
                         <a onclick="removeAnotherMedicalCondition(${index},${(intId)})">Remove</a>
                    </div>
               </div>
               <div class="col-md-12 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Name</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_medical_condition_name" name="m_medical_condition_name[${index}][${intId}]">
                         </div>
                    </div>
               </div>
          </div>`);
     $("#m_addMedicalCondition_parent_form_" + index).append(addFields);
}

function removeAnotherMedicalCondition(parent_id, child_id) {
     $("#m_addMedicalCondition_child_form_" + parent_id + "_" + child_id).remove();
     var titleList = $("#m_addMedicalCondition_parent_form_" + parent_id + " .medical_condition_name_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Medication " + count;
     }
}

function change_hospitalised_medical_condition(indexId, radioId) {
     if (radioId == '1') {
          $(".m_medical_condition_hospital_name_" + indexId).slideDown(500);
     } else {
          $(".m_medical_condition_hospital_name_" + indexId).slideUp(500);
     }
}

function change_diagnosed_medical_condition(indexId, radioId) {
     if (radioId == '1') {
          $(".m_treating_medical_condition_" + indexId).slideDown(500);
     } else {
          $(".m_treating_medical_condition_" + indexId).slideUp(500);
     }
}

function change_student_taking_medication(indexId, radioId) {
     if (radioId == '1') {
          $("#m_addTakingMedicalCondition_parent_form_" + indexId).slideDown(500);
          $(".m_another_medical_condition_button_" + indexId).slideDown(500);
     } else {
          $("#m_addTakingMedicalCondition_parent_form_" + indexId).slideUp(500);
          $(".m_another_medical_condition_button_" + indexId).slideUp(500);
     }
}

function addAnotherTakingMedicalCondition(index) {
     var intId = $(`#m_addTakingMedicalCondition_parent_form_${index} .row`).length || 1;
     var addFields =
          $(`<div class="row" id="m_addTakingMedicalCondition_child_form_${index}_${(intId)}">
               <div class="col-md-12 mt-3">
                    <div class="educationalHeader">
                         <p><strong class="taking_medical_condition_name_title">Medication ${(intId + 1)}</strong></p>
                         <a onclick="removeMedicalConditionChild(${index},${intId})">Remove</a>
                    </div>
               </div>
               <div class="col-md-12 mt-3">
                    <div class="form-group">
                         <label class="form-label"><span class="required">*</span>Name</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control m_taking_medical_condition_name[`+ index + `]" name="m_taking_medical_condition_name[${index}][${intId}]">
                         </div>
                    </div>
               </div>
          </div>`);
     $("#m_addTakingMedicalCondition_parent_form_" + index).append(addFields);
}

function removeMedicalConditionChild(parent_id, child_id) {
     $("#m_addTakingMedicalCondition_child_form_" + parent_id + "_" + child_id).remove();
     var titleList = $("#m_addTakingMedicalCondition_parent_form_" + parent_id + " .taking_medical_condition_name_title");
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = "Medication " + count;
     }
}

function change_treating_medical_condition(value) {
     if (!value) {
          $("select[name^=m_treating_medical_condition").map((item, select) => {
               select.innerHTML = '';
               var nullOption = document.createElement("option");
               nullOption.text = 'select';
               nullOption.value = '';
               select.add(nullOption);
               doctorNameArray.map((item, index) => {
                    var option = document.createElement("option");
                    option.text = item.name;
                    option.value = item.name;
                    select.add(option);
               });
          })
     }
}

function student_residential_address(field_id, isShow_id) {
     if (isShow_id == 1) {
          $(".residential_address_input_" + field_id).slideDown(500);
          $(".residential_address_australia_country_" + field_id).slideUp(500);
          $(".residential_address_other_country_" + field_id).slideUp(500);
          $(".residential_address_country_" + field_id).slideUp(500);
          $(".parent_country_birth_" + field_id).slideUp(500);
          $(".residential_address_1_input_" + field_id).slideUp(500);
     } else {
          $(".residential_address_country_" + field_id).slideDown(500);
          $(".parent_country_birth_" + field_id).slideDown(500);
          $(".residential_address_input_" + field_id).slideUp(500);
          $(".residential_address_1_input_" + field_id).slideDown(500);
     }
}

function change_parent_contact_email(field_id, isShow_id) {
     if (isShow_id == 1) {
          $(".parent_contact_email_input_" + field_id).slideDown(500);
     } else {
          $(".parent_contact_email_input_" + field_id).slideUp(500);
     }
}

function change_residential_address_country(indexId, value) {
     if (value == 'Australia') {
          $(".residential_address_australia_country_" + indexId).slideDown(500);
          $(".residential_address_other_country_" + indexId).slideUp(500);
     } else if (value == "none") {
          $(".residential_address_australia_country_" + indexId).slideUp(500);
          $(".residential_address_other_country_" + indexId).slideUp(500);
     } else {
          $(".residential_address_other_country_" + indexId).slideDown(500);
          $(".residential_address_australia_country_" + indexId).slideUp(500);
     }
}

function change_student_residential_address_country(indexId, value) {
     if (value == 'Australia') {
          $(".student_residential_address_1_australia_country_" + indexId).slideDown(500);
          $(".student_residential_address_1_other_country_" + indexId).slideUp(500);
     } else if (value == "none") {
          $(".student_residential_address_1_australia_country_" + indexId).slideUp(500);
          $(".student_residential_address_1_other_country_" + indexId).slideUp(500);
     } else {
          $(".student_residential_address_1_australia_country_" + indexId).slideUp(500);
          $(".student_residential_address_1_other_country_" + indexId).slideDown(500);
     }
}

function change_potal_address(id, e) {
     if (e.checked) {
          $(".student_residential_address_1_country_" + id).slideDown(500);
     } else {
          $(".student_residential_address_1_country_" + id).slideUp(500);
          $(".student_residential_address_1_australia_country_" + id).slideUp(500);
          $(".student_residential_address_1_other_country_" + id).slideUp(500);
     }
}

function add_additional_parent(value) {
     if (value == 1) {
          var intId = $(`.accordion-item .accordion-body.collapse`).length || 1;
          var addFields =
               $(`<a href="#" class="accordion-head" data-toggle="collapse" data-target="#accordion-item-${intId}">
                         <h6 class="title">Parent/carer</h6>
                         <span class="accordion-icon"></span>
                    </a>
                    <div class="accordion-body collapse show" id="accordion-item-${intId}" data-parent="#accordion">
                         <div class="accordion-inner">
                              <div class="row">
                                   <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Relationship</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control" onChange="p_relationship(this.value)" name="p_Relationship[${intId}]">
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
                                   <div class="col-md-6 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Title</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control" onChange="p_title(this.value)" name="p_Title[${intId}]">
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
                                   <div class="col-md-6 mt-3">
                                        <label class="form-label"><span class="required">*</span>Given name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_givenName[${intId}]">
                                        </div>
                                   </div>
                                   <div class="col-md-6 mt-3">
                                        <label class="form-label"><span class="required">*</span>Family name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" name="p_familyName[${intId}]">
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Gender</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-4">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="p_maleRadio[${intId}]" name="p_genderRadio[${intId}]" class="custom-control-input" checked value="male">
                                                                 <label class="custom-control-label" for="p_maleRadio[${intId}]">Male</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-4">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="p_femaleRadio[${intId}]" name="p_genderRadio[${intId}]" class="custom-control-input" value="female">
                                                                 <label class="custom-control-label" for="p_femaleRadio[${intId}]">Female</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-4">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="p_otherRadio[${intId}]" name="p_genderRadio[${intId}]" class="custom-control-input" value="other">
                                                                 <label class="custom-control-label" for="p_otherRadio[${intId}]">Female</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12">
                                        <div class="p_contact_number_form_${intId}">
                                             <div class="row mt-3">
                                                  <div class="col-md-12 mt-3">
                                                       <div class="educationalHeader">
                                                            <p><strong class="parent_carer_contact_number_title">Enter parent/carer's contact number 1</strong></p>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                       <div class="form-group">
                                                            <label class="form-label"><span class="required">*</span>Phone number type</label>
                                                            <select class="form-control" name="m_docter_country[${intId}][]">
                                                                 <option value="">select</option>
                                                                 <option value="PHMOB">Phone (Mobile)</option>
                                                                 <option value="PHHOM">Phone (Home)</option>
                                                                 <option value="PHWRK">Phone (Business/Work)</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                       <div class="form-group">
                                                            <label class="form-label">Phone number</label>
                                                            <div class="form-control-wrap">
                                                                 <input type="text" class="form-control" name="p_phone_number[${intId}][]">
                                                            </div>
                                                            <p class="description">In special circumstances the school may ask permission to contact the student's doctor.</p>
                                                       </div>
                                                  </div>
                                                  <div class="col-md-6 mt-3">
                                                       <div class="form-group">
                                                            <label class="form-label"><span class="required">*</span>Comments</label>
                                                            <div class="form-control-wrap">
                                                                 <input type="text" class="form-control" name="p_comments[${intId}][]">
                                                            </div>
                                                            <p class="description">The name of a medical centre is also accepted.</p>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>

                                        <div class="nk-block-tools-opt mt-3">
                                             <a class="btn btn-outline-light" onclick="addAnotherDocter(${intId})"><em class="icon ni ni-plus"></em><span>Add another doctor/medical centre</span></a>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-5">
                                        <h5>Parent/carer's Residential Address</h5>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Does parent/carer live at this student's residential address?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="residential_address_yes[${intId}]" name="residential_address[${intId}]" onchange="student_residential_address(${intId}, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="residential_address_yes[${intId}]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="residential_address_no[${intId}]" name="residential_address[${intId}]" onchange="student_residential_address(${intId}, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="residential_address_no[${intId}]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label">Please provide parent/carer's residential address</label>
                                             <p>Country</p>
                                             <select class="form-control" name="residential_address_country[${intId}]" onchange="change_residential_address_country(${intId}, this.value)">
                                                  <option value="none">select country</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-6 mt-3 residential_address_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Street</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_street[${intId}]">
                                             </div>
                                             <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                                        </div>
                                   </div>
                                   <div class="col-md-6 mt-3 residential_address_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Suburb</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_suburb[${intId}]">
                                             </div>
                                             <p class="description mt-2">e.g. Sydney</p>
                                        </div>
                                   </div>
                                   <div class="col-md-3 mt-3 residential_address_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>State</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control" name="p_state[${intId}]">
                                                       <option value="none">select...</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-3 mt-3 residential_address_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Postcode</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_postcode[${intId}]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_other_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Address</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_address_line_1[${intId}]" placeholder="Address line 1">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_other_country_${intId}">
                                        <div class="form-group">
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_address_line_2[${intId}]" placeholder="Address line 2">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_input_${intId}">
                                        <div class="form-group">
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control studentResidentialAddress" name="residential_address_input[${intId}]" disabled>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_1_input_${intId}">
                                        <div class="custom-control custom-checkbox">
                                             <input type="checkbox" class="custom-control-input" id="p_potal_address[${intId}]" onchange="change_potal_address(${intId}, this)">
                                             <label class="custom-control-label" for="p_potal_address[${intId}]">Use a different <strong>postal address</strong></label>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 student_residential_address_1_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label">Parent/carer's postal address</label>
                                             <p class="description mt-1">This is the address we will use to correspond with about the student</p>
                                             <p>Country</p>
                                             <select class="form-control" name="student_residential_address_country[${intId}]" onchange="change_student_residential_address_country(${intId}, this.value)">
                                                  <option value="none">select country</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-6 mt-3 student_residential_address_1_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Street</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_student_street[${intId}]">
                                             </div>
                                             <p class="description mt-2">e.g. 10 High Street or PO Box 100</p>
                                        </div>
                                   </div>
                                   <div class="col-md-6 mt-3 student_residential_address_1_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Suburb</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_student_suburb[${intId}]">
                                             </div>
                                             <p class="description mt-2">e.g. Sydney</p>
                                        </div>
                                   </div>
                                   <div class="col-md-3 mt-3 student_residential_address_1_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>State</label>
                                             <div class="form-control-wrap">
                                                  <select class="form-control" name="p_student_state[${intId}]">
                                                       <option value="none">select...</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-3 mt-3 student_residential_address_1_australia_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Postcode</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_student_postcode[${intId}]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 student_residential_address_1_other_country_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Address</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_student_address_line_1[${intId}]" placeholder="Address line 1">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 student_residential_address_1_other_country_${intId}">
                                        <div class="form-group">
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="p_student_address_line_2[${intId}]" placeholder="Address line 2">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 residential_address_1_input_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Does student live at this address sometimes?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="address_sometimes_yes[${intId}]" name="address_sometimes[${intId}]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="address_sometimes_yes[${intId}]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="address_sometimes_no[${intId}]" name="address_sometimes[${intId}]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="address_sometimes_no[${intId}]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>


                                   <div class="col-md-12 mt-5">
                                        <h5>Parent/carer's Contact Email</h5>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Is parent/carer completing this application for this student?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="completing_application_student_yes[${intId}]" name="completing_application_student[${intId}]" onchange="change_parent_contact_email(${intId}, 1)" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="completing_application_student_yes[${intId}]">Yes</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="completing_application_student_no[${intId}]" name="completing_application_student[${intId}]" onchange="change_parent_contact_email(${intId}, 0)" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="completing_application_student_no[${intId}]">No</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3 parent_contact_email_input_${intId}">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Contact email</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="parent_contact_email_input[${intId}]">
                                             </div>
                                        </div>
                                   </div>


                                   <div class="col-md-12 mt-3 parent_country_birth_${intId}">
                                        <div class="form-group">
                                             <label class="form-label">Country of birth</label>
                                             <select class="form-control" name="parent_country_birth[${intId}]">
                                                  <option value="none">select country</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label"><span class="required">*</span>Is parent/carer Aboriginal and/or Torres Strait Islander?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-mb-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="aboriginal_torres_strait_islander_no[${intId}]" name="aboriginal_torres_strait_islander[${intId}]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="aboriginal_torres_strait_islander_no[${intId}]">No</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-mb-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="aboriginal_torres_strait_islander_yes_aboriginal[${intId}]" name="aboriginal_torres_strait_islander[${intId}]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_aboriginal[${intId}]">Yes, Aboriginal</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-mb-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="aboriginal_torres_strait_islander_yes_islander[${intId}]" name="aboriginal_torres_strait_islander[${intId}]" class="custom-control-input" value="2">
                                                                 <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_islander[${intId}]">Yes, Torres Strait Islander</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-mb-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="aboriginal_torres_strait_islander_yes_aboriginal_islander[${intId}]" name="aboriginal_torres_strait_islander[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="aboriginal_torres_strait_islander_yes_aboriginal_islander[${intId}]">Yes, Both Aboriginal and Torres Strait Islander</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label">Select the group that best describes parent/carer's occupation</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-12 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="group_describes_occupation_senior_management[${intId}]" name="group_describes_occupation[${intId}]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="group_describes_occupation_senior_management[${intId}]">Senior management in large business organisation, government administration and defence, and qualified professionals</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="group_describes_occupation_other_business[${intId}]" name="group_describes_occupation[${intId}]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="group_describes_occupation_other_business[${intId}]">Other business managers, arts/media/sportspersons and associate professionals</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="group_describes_occupation_tradespeople[${intId}]" name="group_describes_occupation[${intId}]" class="custom-control-input" value="2">
                                                                 <label class="custom-control-label" for="group_describes_occupation_tradespeople[${intId}]">Tradespeople, clerks and skilled office, sales and service staff</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="group_describes_occupation_machine_operators[${intId}]" name="group_describes_occupation[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="group_describes_occupation_machine_operators[${intId}]">Machine operators, hospitality staff, assistants, labourers</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-12 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="group_describes_occupation_have_not[${intId}]" name="group_describes_occupation[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="group_describes_occupation_have_not[${intId}]">Have not been in paid work in the last 12 months</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff.</p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
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
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label">What is parent/carer's occupation?</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" name="parent_carer_occupation[${intId}]">
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label">What is the highest level of schooling parent/carer completed?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_level_completed_9_equivalent[${intId}]" name="highest_level_completed[${intId}]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="highest_level_completed_9_equivalent[${intId}]">Year 9 or equivalent or below</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_level_completed_10_equivalent[${intId}]" name="highest_level_completed[${intId}]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="highest_level_completed_10_equivalent[${intId}]">Year 10 or equivalent</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_level_completed_11_equivalent[${intId}]" name="highest_level_completed[${intId}]" class="custom-control-input" value="2">
                                                                 <label class="custom-control-label" for="highest_level_completed_11_equivalent[${intId}]">Year 11 or equivalent</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_level_completed_12_equivalent[${intId}]" name="highest_level_completed[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="highest_level_completed_12_equivalent[${intId}]">Year 12 or equivalent</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_level_completed_not_provided[${intId}]" name="highest_level_completed[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="highest_level_completed_not_provided[${intId}]">Unknown/Not Provided</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff. For persons who never attended school, please select 'Year 9 or equivalent or below'.</p>
                                        </div>
                                   </div>
                                   <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                             <label class="form-label">What is the highest qualification parent/carer completed?</label>
                                             <div class="form-control-wrap">
                                                  <div class="row">
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_qualification_completed_no_qualification[${intId}]" name="highest_qualification_completed[${intId}]" class="custom-control-input" value="0">
                                                                 <label class="custom-control-label" for="highest_qualification_completed_no_qualification[${intId}]">No non-school qualification</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_qualification_completed_certificate[${intId}]" name="highest_qualification_completed[${intId}]" class="custom-control-input" value="1">
                                                                 <label class="custom-control-label" for="highest_qualification_completed_certificate[${intId}]">Certificate I to IV (including trade certificate)</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_qualification_completed_advanced[${intId}]" name="highest_qualification_completed[${intId}]" class="custom-control-input" value="2">
                                                                 <label class="custom-control-label" for="highest_qualification_completed_advanced[${intId}]">Advanced Diploma/Diploma</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_qualification_completed_bachelor[${intId}]" name="highest_qualification_completed[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="highest_qualification_completed_bachelor[${intId}]">Bachelor degree or above</label>
                                                            </div>
                                                       </div>
                                                       <div class="col-6 mt-2">
                                                            <div class="custom-control custom-control-lg custom-radio">
                                                                 <input type="radio" id="highest_qualification_completed_not_provided[${intId}]" name="highest_qualification_completed[${intId}]" class="custom-control-input" value="3">
                                                                 <label class="custom-control-label" for="highest_qualification_completed_not_provided[${intId}]">Unknown/Not Provided</label>
                                                            </div>
                                                       </div>
                                                  </div>
                                             </div>
                                             <p class="description mt-2">This information assists the department better allocate school resources. It will not be shared with teaching staff.</p>
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>`);
          $(".accordion-item").append(addFields);

          $.ajax({
               type: 'POST',
               url: '/getCountryList',
               headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
               success: function (response) {
                    response.list.forEach((element, index) => {
                         $(`select[name="residential_address_country[${intId}]"]`).append('<option value="' + element.name + '">' + element.name + '</option>');
                         $(`select[name="parent_country_birth[${intId}]"]`).append('<option value="' + element.name + '">' + element.name + '</option>');
                         if (index == 0) {
                              $(`select[name="residential_address_country[${intId}]"]`).append('<option disabled>--------------------------</option>');
                              $(`select[name="parent_country_birth[${intId}]"]`).append('<option disabled>--------------------------</option>');
                         }

                    });
               }
          });
     }
}

function AddEmergencyAnotherContactNumber(index) {
     var intId = $(`.emergency_another_contact_number_${index} .row.mt-3`).length || 1;
     var addFields =
          $(`<div class="row mt-3" id="emergency_another_contact_number_child_${index}_${intId}">
               <div class="col-md-12">
                    <div class="educationalHeader">
                         <p><strong class="contact_number_title">Enter contact number ${(intId + 1)}</strong></p>
                         <a onclick="removeEmergencyContactNumber(${index},${intId})">Remove</a>
                    </div>
               </div>
               <div class="col-md-4 mt-3">
                    <div class="form-group">
                         <label class="form-label">Phone number type</label>
                         <div class="form-control-wrap">
                              <select class="form-control e_emergency_phone_number_type[${index}]" name="e_emergency_phone_number_type[${index}][${intId}]">  
                                   <option value="">Select</option>
                                   <option value="PHMOB">Phone (Mobile)</option>
                                   <option value="PHHOM">Phone (Home)</option>
                                   <option value="PHWRK">Phone (Business/Work)</option>
                              </select>
                         </div>
                    </div>
               </div>
               <div class="col-md-4 mt-3">
                    <div class="form-group">
                         <label class="form-label">Family name</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control e_emergency_family_name[${index}]" name="e_emergency_family_name[${index}][${intId}]">
                         </div>
                    </div>
               </div>
               <div class="col-md-4 mt-3">
                    <div class="form-group">
                         <label class="form-label">Comments</label>
                         <div class="form-control-wrap">
                              <input type="text" class="form-control e_emergency_comments[${index}]" name="e_emergency_comments[${index}][${intId}]">
                         </div>
                    </div>
               </div>
          </div>`);
     $(`.emergency_another_contact_number_${index}`).append(addFields);
}

function removeEmergencyContactNumber(parent_id, child_id) {
     $(`#emergency_another_contact_number_child_${parent_id}_${child_id}`).remove();
     var titleList = $(`.emergency_another_contact_number_${parent_id} .contact_number_title`);
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = `Enter contact number ${count}`;
     }
}

function AdditionalEmergencyContact() {
     var intId = $(`.e_emergency_contact_form .row.count`).length || 1;
     var addFields = $(`<div class="row count mt-3" id="AdditionalEmergencyContact_parent_${intId}">
                              <div class="col-md-12 mt-3">
                                   <div class="educationalHeader">
                                        <p><strong class="emergency_contact_title">Additional emergency contact ${(intId + 1)}</strong></p>
                                        <a onclick="removeAdditionalEmergencyContact(${intId})">Remove</a>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                   <div class="form-group">
                                        <label class="form-label">Given name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control e_emergency_given_name" name="e_emergency_given_name[${intId}]">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-6 mt-3">
                                   <div class="form-group">
                                        <label class="form-label">Family name</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control e_emergency_family_name" name="e_emergency_family_name[${intId}]">
                                        </div>
                                   </div>
                              </div>
                              <div class="col-md-12 mt-3">
                                   <div class="form-group">
                                        <label class="form-label"><span class="required">*</span>Please provide emergency contact's relationship to <span class="changingName">Student</span></label>
                                        <select class="form-control e_emergency_relationship" name="e_emergency_relationship[0][${intId}]">
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
                              
                              <div class="col-md-12 mt-3">
                                   <div class="emergency_another_contact_number_${intId}">
                                        <div class="row mt-3">
                                             <div class="col-md-12">
                                                  <div class="educationalHeader">
                                                       <p><strong class="contact_number_title">Enter contact number 1</strong></p>
                                                  </div>
                                             </div>
                                             <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                       <label class="form-label">Phone number type</label>
                                                       <div class="form-control-wrap">
                                                            <select  class="form-control e_emergency_phone_number_type[${intId}]" name="e_emergency_phone_number_type[0][${intId}]">  
                                                                 <option value="">Select</option>
                                                                 <option value="PHMOB">Phone (Mobile)</option>
                                                                 <option value="PHHOM">Phone (Home)</option>
                                                                 <option value="PHWRK">Phone (Business/Work)</option>
                                                            </select>
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                       <label class="form-label">Family name</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control e_emergency_family_name[${intId}]" name="e_emergency_family_name[${intId}][0]">
                                                       </div>
                                                  </div>
                                             </div>
                                             <div class="col-md-4 mt-3">
                                                  <div class="form-group">
                                                       <label class="form-label">Comments</label>
                                                       <div class="form-control-wrap">
                                                            <input type="text" class="form-control e_emergency_comments[${intId}]" name="e_emergency_comments[${intId}][0]">
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="nk-block-tools-opt mt-3">
                                        <a class="btn" onclick="AddEmergencyAnotherContactNumber(${intId})"><em class="icon ni ni-plus"></em><span>Add another contact number</span></a>
                                   </div>
                              </div>
                         </div>`);

     $(`.e_emergency_contact_form`).append(addFields);
}

function removeAdditionalEmergencyContact(index) {
     $(`#emergency_another_contact_number_child_${parent_id}_${child_id}`).remove();
     var titleList = $(`.emergency_another_contact_number_${parent_id} .contact_number_title`);
     for (let index = 0; index < titleList.length; index++) {
          var count = index + 1;
          titleList[index].innerHTML = `Enter contact number ${count}`;
     }
}

function onchangeEditSection(className) {
     $('div[data-hide-show=content]').hide();
     $(".ApplicationMenu li button").removeClass("status-menu__item--current");
     $("#" + className + " button").addClass("status-menu__item--current");
     $("." + className).show();
     window.scrollTo({ top: 0, behavior: 'smooth' });
}

function removeStageItem(name) {
     $(`.${name.replace(/\s/g, '')}`).remove();
     var count = $("#classesContent .classesCounter").length;
     $("#totalClassesCount").text(count);
}

function editStageItem(name) {
     $('#editNewStageModal').modal('show');
     $("#getEditStageId").val(name.replace(/\s/g, ''));
}

function classesDetailPage() {
     location.href = "/classes/detail";
}

function changeLanguage(index, value) {
     if (value == "select") {
          $(`.select_speaking_${index}`).prop("disabled", true);
          $(`.select_reading_${index}`).prop("disabled", true);
          $(`.select_writing_${index}`).prop("disabled", true);
     } else {
          $(`.select_speaking_${index}`).prop("disabled", false);
          $(`.select_reading_${index}`).prop("disabled", false);
          $(`.select_writing_${index}`).prop("disabled", false);
     }
}

function selectEducationFile(index) {
     var filename = $("#educationFile_" + index)[0].files[0].name;
     $(`label[for=educationFile_${index}]`).text(filename);
     $(`#selectedEducationFileRemove_${index}`).prop("disabled", false);
}

function selectEmploymentRecordFile() {
     $('#selectedEmploymentRecordFileRemove').prop("disabled", false);
}

function selectResumeFile() {
     $('#selectedResumeFileRemove').prop("disabled", false);
}

function selectCoverLetterFile() {
     $('#selectedCoverLetterFileRemove').prop("disabled", false);
}

function selectSupportingDocFile() {
     $('#selectedSupportingDocFileRemove').prop("disabled", false);
}

function changeRecentEmploer(e, index) {
     e.preventDefault();
     if (index == "CurrentlyEmployed")
          $(".C_CurrentlyEmployed").slideDown(500);
     else if (index == "PreviouslyEmployed") {
          $(".C_CurrentlyEmployed").slideDown(500);
          $(".C_PreviouslyEmployed").slideDown(500);
     } else {
          $(".C_CurrentlyEmployed").slideUp(500);
          $(".C_PreviouslyEmployed").slideUp(500);
     }
}

function changeEmployer_2(e, index) {
     e.preventDefault();
     if (index == "CurrentlyEmployed")
          $(".C2_CurrentlyEmployed").slideDown(500);
     else if (index == "PreviouslyEmployed") {
          $(".C2_CurrentlyEmployed").slideDown(500);
          $(".C2_PreviouslyEmployed").slideDown(500);
     } else {
          $(".C2_CurrentlyEmployed").slideUp(500);
          $(".C2_PreviouslyEmployed").slideUp(500);
     }
}

function changeEmployer_3(e, index) {
     e.preventDefault();
     if (index == "CurrentlyEmployed")
          $(".C3_CurrentlyEmployed").slideDown(500);
     else if (index == "PreviouslyEmployed") {
          $(".C3_CurrentlyEmployed").slideDown(500);
          $(".C3_PreviouslyEmployed").slideDown(500);
     } else {
          $(".C3_CurrentlyEmployed").slideUp(500);
          $(".C3_PreviouslyEmployed").slideUp(500);
     }
}

function changeIdentification(e, value) {
     e.preventDefault();
     $('.identification_upload').slideDown(500);
     $('.isShowDiv').hide();
}

function educationAddMore(e) {
     e.preventDefault();
     var count = $("#forthForm .fileCount").length;
     $("#educationBeforeField").before(`
          <div class="col-xxl-6 col-md-4 fileCount">
               <div class="form-group">
                    <label class="form-label">Please upload certified copies of your academic transcript(s) (preferred), degree or certificate.</label>
                    <div class="form-control-wrap flex">
                         <div class="custom-file">
                              <input type="file" class="custom-file-input form-control" id="educationFile_${count}" name="educationFile[]" onchange="selectEducationFile(${count})" required>
                              <label class="custom-file-label" for="educationFile_${count}">Choose file</label>
                         </div>
                         <div class="ml-2">
                              <button class="btn btn-icon btn-white btn-outline-light" id="selectedEducationFileRemove_${count}" onclick="selectedEducationFileRemove(event, ${count})" disabled><em class="icon ni ni-property-remove"></em></button>
                         </div>
                         <div class="ml-2">
                              <button class="btn btn-icon btn-white btn-outline-light" onclick="educationAddMore(event)"><em class="icon ni ni-plus"></em></button>
                         </div>
                    </div>
               </div>
          </div>`)
}

function employmentRecordAddMore(e) {
     e.preventDefault();
     var count = $("#sixthForm .employmentRecordCount").length;
     $("#employmentRecordBeforeField").before(`
     <div class="col-xxl-6 col-md-4 employmentRecordCount">
          <div class="form-group">
               <label class="form-label">Upload certified copies of official Statement(s) of Service for ALL previous teaching positions. Statements of Service are required for determining teacher classification and salary.</label>
               <div class="form-control-wrap flex">
                    <div class="custom-file">
                         <input type="file" class="custom-file-input form-control" id="employmentRecord_${count}" name="employmentRecord[]" onchange="selectEmploymentRecordFile(${count})" required>
                         <label class="custom-file-label" for="employmentRecord_${count}">Choose file</label>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" id="selectedEmploymentRecordFileRemove_${count}" onclick="selectedEmploymentRecordFileRemove(event, ${count})" disabled><em class="icon ni ni-property-remove"></em></button>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" onclick="employmentRecordAddMore(event)"><em class="icon ni ni-plus"></em></button>
                    </div>
               </div>
          </div>
     </div>`)
}

function selectedEducationFileRemove(e, index) {
     e.preventDefault();
     $(`#educationFile_${index}`).val('');
     $(`label[for=educationFile_${index}]`).text('Choose file');
     $(`#selectedEducationFileRemove_${index}`).prop("disabled", true);
}

function selectANPassportFile() {
     $('#selectedANPassportFileRemove').prop("disabled", false);
}

function selectedEmploymentRecordFileRemove(e, index) {
     e.preventDefault();
     $(`#employmentRecord_${index}`).val('');
     $(`label[for=employmentRecord_${index}]`).text('Choose file');
     $(`#selectedEmploymentRecordFileRemove_${index}`).prop("disabled", true);
}

function selectEmploymentRecordFile(index) {
     var filename = $("#employmentRecord_" + index)[0].files[0].name;
     $(`label[for=employmentRecord_${index}]`).text(filename);
     $(`#selectedEmploymentRecordFileRemove_${index}`).prop("disabled", false);
}

function SupportingDocAddMore(e) {
     e.preventDefault();
     var count = $("#eighthForm .supportingDocCount").length;
     $("#supportingDocBeforeField").before(`
     <div class="col-xxl-6 col-md-4 supportingDocCount">
          <div class="form-group">
               <label class="form-label">Please upload any other supporting documents here.</label>
               <div class="form-control-wrap flex">
                    <div class="custom-file">
                         <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" id="supportingDoc_${count}" name="supportingDoc[]" onchange="selectSupportingDocFile(${count})" required>
                         <label class="custom-file-label" for="supportingDoc_${count}">Choose file</label>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" id="selectedSupportingDocFileRemove_${count}" onclick="selectedSupportingDocFileRemove(event, ${count})" disabled><em class="icon ni ni-property-remove"></em></button>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" onclick="SupportingDocAddMore(event)"><em class="icon ni ni-plus"></em></button>
                    </div>
               </div>
          </div>
     </div>`)
}

function selectedSupportingDocFileRemove(e, index) {
     e.preventDefault();
     $(`#supportingDoc_${index}`).val('');
     $(`label[for=supportingDoc_${index}]`).text('Choose file');
     $(`#selectedSupportingDocFileRemove_${index}`).prop("disabled", true);
}

function selectSupportingDocFile(index) {
     var filename = $("#supportingDoc_" + index)[0].files[0].name;
     $(`label[for=supportingDoc_${index}]`).text(filename);
     $(`#selectedSupportingDocFileRemove_${index}`).prop("disabled", false);
}

function eccreditationWorkAddMore(e) {
     e.preventDefault();
     var count = $("#twelvethForm .eccreditationWorkCount").length;
     $("#eccreditationWorkBeforeField").before(`
     <div class="col-xxl-6 col-md-4 eccreditationWorkCount">
          <div class="form-group">
               <div class="form-control-wrap flex">
                    <div class="custom-file">
                         <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" id="eccreditationWork_${count}" name="eccreditationWork[]" onchange="selectEccreditationWorkFile(${count})" required>
                         <label class="custom-file-label" for="eccreditationWork_${count}">Choose file</label>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" id="selectedEccreditationWorkFileRemove_${count}" onclick="selectedEccreditationWorkFileRemove(event, ${count})" disabled><em class="icon ni ni-property-remove"></em></button>
                    </div>
                    <div class="ml-2">
                         <button class="btn btn-icon btn-white btn-outline-light" onclick="eccreditationWorkAddMore(event)"><em class="icon ni ni-plus"></em></button>
                    </div>
               </div>
          </div>
     </div>`)
}

function selectedEccreditationWorkFileRemove(e, index) {
     e.preventDefault();
     $(`#eccreditationWork_${index}`).val('');
     $(`label[for=eccreditationWork_${index}]`).text('Choose file');
     $(`#selectedEccreditationWorkFileRemove_${index}`).prop("disabled", true);
}

function selectEccreditationWorkFile(index) {
     var filename = $("#eccreditationWork_" + index)[0].files[0].name;
     $(`label[for=eccreditationWork_${index}]`).text(filename);
     $(`#selectedEccreditationWorkFileRemove_${index}`).prop("disabled", false);
}




function selectcriminal_offence_upload() {
     $('#selectedcriminal_offence_uploadRemove_id').prop("disabled", false);
}

function selectedcriminal_offence_uploadRemove(e) {
     e.preventDefault();
     $(`#criminal_offence_upload`).val('');
     $(`label[for=criminal_offence_upload]`).text('Choose file');
     $(`#selectedcriminal_offence_uploadRemove_id`).prop("disabled", true);
}

function selectdisciplinary_action_upload() {
     $('#selecteddisciplinary_action_uploadRemove_id').prop("disabled", false);
}

function selecteddisciplinary_action_uploadRemove(e) {
     e.preventDefault();
     $(`#disciplinary_action_upload`).val('');
     $(`label[for=disciplinary_action_upload]`).text('Choose file');
     $(`#selecteddisciplinary_action_uploadRemove_id`).prop("disabled", true);
}

function selectallegations_misconduct_upload() {
     $('#selectedallegations_misconduct_uploadRemove_id').prop("disabled", false);
}

function selectedallegations_misconduct_uploadRemove(e) {
     e.preventDefault();
     $(`#allegations_misconduct_upload`).val('');
     $(`label[for=allegations_misconduct_upload]`).text('Choose file');
     $(`#selectedallegations_misconduct_uploadRemove_id`).prop("disabled", true);
}

function selectpsychological_emotional_upload() {
     $('#selectedpsychological_emotional_uploadRemove_id').prop("disabled", false);
}

function selectedpsychological_emotional_uploadRemove(e) {
     e.preventDefault();
     $(`#psychological_emotional_upload`).val('');
     $(`label[for=psychological_emotional_upload]`).text('Choose file');
     $(`#selectedpsychological_emotional_uploadRemove_id`).prop("disabled", true);
}





function selectsignificant_vision_upload() {
     $('#selectedsignificant_vision_uploadRemove_id').prop("disabled", false);
}

function selectedsignificant_vision_uploadRemove(e) {
     e.preventDefault();
     $(`#significant_vision_upload`).val('');
     $(`label[for=significant_vision_upload]`).text('Choose file');
     $(`#selectedsignificant_vision_uploadRemove_id`).prop("disabled", true);
}

function selectinformation_regarding_upload() {
     $('#selectedinformation_regarding_uploadRemove_id').prop("disabled", false);
}

function selectedinformation_regarding_uploadRemove(e) {
     e.preventDefault();
     $(`#information_regarding_upload`).val('');
     $(`label[for=information_regarding_upload]`).text('Choose file');
     $(`#selectedinformation_regarding_uploadRemove_id`).prop("disabled", true);
}

function selectprevious_employment_upload() {
     $('#selectedprevious_employment_uploadRemove_id').prop("disabled", false);
}

function selectedprevious_employment_uploadRemove(e) {
     e.preventDefault();
     $(`#previous_employment_upload`).val('');
     $(`label[for=previous_employment_upload]`).text('Choose file');
     $(`#selectedprevious_employment_uploadRemove_id`).prop("disabled", true);
}

function selectemployment_medically_upload() {
     $('#selectedemployment_medically_uploadRemove_id').prop("disabled", false);
}

function selectedemployment_medically_uploadRemove(e) {
     e.preventDefault();
     $(`#employment_medically_upload`).val('');
     $(`label[for=employment_medically_upload]`).text('Choose file');
     $(`#selectedemployment_medically_uploadRemove_id`).prop("disabled", true);
}

function changeLevelEducation(e, value, index) {
     e.preventDefault();
     console.log(value, index)
     if (value == "Secondary") {
          $(`.qualification_${index}`).slideUp(500);
          $(`.tertiary_${index}`).slideUp(500);
          $(`.secondary_${index}`).slideDown(500);
     } else if (value == "Qualification") {
          $(`.secondary_${index}`).slideUp(500);
          $(`.tertiary_${index}`).slideUp(500);
          $(`.qualification_${index}`).slideDown(500);
     } else if (value == "Tertiary") {
          $(`.qualification_${index}`).slideUp(500);
          $(`.secondary_${index}`).slideUp(500);
          $(`.tertiary_${index}`).slideDown(500);
     } else {
          $(`.tertiary_${index}`).slideUp(500);
          $(`.qualification_${index}`).slideUp(500);
          $(`.secondary_${index}`).slideUp(500);
     }
}
var selectedId = '';
function profileNav(name) {
     if (selectedId != name) {
          selectedId = name;
          $(".custom-nav li").removeClass("active");
          $(`.${selectedId}`).addClass('active');
          $(".personalInformation").slideUp(500);
          $(`#${selectedId}`).slideDown(500);
     }
}