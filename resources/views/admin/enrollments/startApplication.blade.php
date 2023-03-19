@extends('layouts.app')

@section('content')
<!-- content @s -->
<div class="nk-content ">
     <div class="container-fluid">
          <div class="nk-content-inner">
               <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                         <div class="nk-block-between">
                              <div class="nk-block-head-content">
                                   <h3 class="nk-block-title page-title">Start a new enrollment application</h3>
                              </div><!-- .nk-block-head-content -->
                         </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                         <div class="card card-preview">
                              <div class="card-inner testFont">
                                   <div class="row gy-4">
                                        <div class="col-md-12">
                                             <h5>Let’s start with the student’s home address:</h5>
                                             <p>We use these details to verify the student you are applying for lives
                                                  within the school’s intake area.</p>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="enrollingFor">
                                                       <h6>Enrolling for</h6>
                                                  </label>
                                                  <select class="form-select" id="enrollingFor" data-ui="lg">
                                                       <option value="2022">2022 calendar year</option>
                                                       <option value="2023">2023 calendar year</option>
                                                  </select>
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="form-group">
                                                  <label class="form-label" for="scholasticYear">
                                                       <h6>Scholastic year</h6>
                                                  </label>
                                                  <select class="form-select" id="scholasticYear" data-ui="lg">
                                                       <option value="">select</option>
                                                       <option value="kindergarten">Kindergarten</option>
                                                       <option value="year 1">year 1</option>
                                                       <option value="year 2">year 2</option>
                                                       <option value="year 3">year 3</option>
                                                       <option value="year 4">year 4</option>
                                                       <option value="year 5">year 5</option>
                                                       <option value="year 6">year 6</option>
                                                       <option value="year 7">year 7</option>
                                                       <option value="year 8">year 8</option>
                                                       <option value="year 9">year 9</option>
                                                       <option value="year 10">year 10</option>
                                                       <option value="year 11">year 11</option>
                                                       <option value="year 12">year 12</option>
                                                  </select>
                                             </div>
                                        </div>
                                        
                                        <div class="col-md-12">
                                             <div class="form-group">
                                                  <label class="form-label" for="student_home_address">
                                                       <h6>Student's home address</h6>
                                                  </label>
                                                  <input type="text" class="form-control form-control-lg" id="student_home_address" required>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                    <div class="card card-preview studentDetail">
                         <div class="card-inner">
                              <div class="nk-block-head-content">
                                   <h3 class="nk-block-title page-title">Students Details</h3>
                              </div>
                              <div class="row gy-4">
                                   <div class="col-md-3">
                                        <div class="sideContent">
                                             <div class="ApplicationMenu">
                                                  <nav>
                                                       <ol class="status-menu">
                                                            <li id="student">
                                                                 <button class="status-menu__item status-menu__item--current">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">1</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Student details</span>
                                                                 </button>
                                                            </li>
                                                            <li id="medical">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">2</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Medical details</span>
                                                                 </button>
                                                            </li>
                                                            <li id="learning">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">3</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Learning &amp; support</span>
                                                                 </button>
                                                            </li>
                                                            <li id="risk">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">4</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Risk assessment</span>
                                                                 </button>
                                                            </li>
                                                            <li id="sibling">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">5</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Siblings</span>
                                                                 </button>
                                                            </li>
                                                            <li id="parents">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">6</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Parents/carers</span>
                                                                 </button>
                                                            </li>
                                                            <li id="emergency">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">7</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Emergency contacts</span>
                                                                 </button>
                                                            </li>
                                                            <li id="additional">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">8</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Additional information</span>
                                                                 </button>
                                                            </li>
                                                            <li id="declaration">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">9</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Permissions</span>
                                                                 </button>
                                                            </li>
                                                            <li id="documents">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">10</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Supporting documents</span>
                                                                 </button>
                                                            </li>
                                                            <li id="review">
                                                                 <button class="status-menu__item">
                                                                      <span class="status-menu__icon">
                                                                           <span class="">11</span>
                                                                      </span>
                                                                      <span class="status-menu__title">Review</span>
                                                                 </button>
                                                            </li>
                                                       </ol>
                                                  </nav>
                                             </div>
                                        </div>
                                   </div>
                                   <div class="col-md-9 startApplicationCss">
                                        <div class="student" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/studentDetail')
                                        </div>
                                        <div class="medical" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/medicalDetail')
                                        </div>
                                        <div class="learning" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/learningSupport')
                                        </div>
                                        <div class="risk" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/riskAssessment')
                                        </div>
                                        <div class="sibling" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/siblings')
                                        </div>
                                        <div class="parents" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/parentsCarers')
                                        </div>
                                        <div class="emergency" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/emergencyContact')
                                        </div>
                                        <div class="additional" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/additionalInfo')
                                        </div>
                                        <div class="declaration" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/permissions')
                                        </div>
                                        <div class="documents" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/supportingDoc')
                                        </div>
                                        <div class="review" data-hide-show="content">
                                             @include('admin/enrollments/startApplicationForm/review')
                                        </div>
                                   </div>
                              </div>
                         </div>
                    </div>
               </div>
          </div>
     </div>
</div>
<!-- content @e -->
<script>
     function initAutocomplete() {
          var ac = new google.maps.places.Autocomplete(
               (document.getElementById('student_home_address')), { types: ['geocode'] }
          );
          new google.maps.places.Autocomplete(
               (document.getElementById('s_street')), { types: ['geocode'] }
          );

          ac.addListener('place_changed', function() {
               var place = ac.getPlace();
               $(".studentResidentialAddress").val(place.formatted_address);
          });
     }
</script>
@endsection