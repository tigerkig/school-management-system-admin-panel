@extends('layouts.subScription')

     @section('subContent')
     <div class="nk-content-wrap">
          <div class="nk-block-head">
               <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><span>Account Setting</span></div>
                    <h2 class="nk-block-title fw-normal">My Profile</h2>
                    <div class="nk-block-des">
                         <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                    </div>
               </div>
          </div><!-- .nk-block-head -->
          <div class="nk-block">
          <div class="nk-block-head">
               <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Medical details</h5>
                    <div class="nk-block-des">
                         <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
               </div>
          </div><!-- .nk-block-head -->
          <div class="card card-bordered">
               <div class="nk-data data-list">
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Medicare Number</span>
                              <span class="data-value">{{$personData->firstName . " " . $personData->lastName}}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Reference Number</span>
                              <span class="data-value">{{ $personData->address }}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Expiry Date</span>
                              <span class="data-value">{{ date('d/m/Y', strtotime($personData->created_at)) }}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Doctor's name</span>
                              <span class="data-value">{{ $personData->address }}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Doctor's Country</span>
                              <span class="data-value">{{ $personData->address }}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Doctor's Contact Number</span>
                              <span class="data-value">{{ $personData->address }}</span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Anaphylactic Allergies?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No    
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Non-Severe Allergies? </span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Other Medical Conditions? </span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Support Needs?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Learning Needs Documented?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Learning Adjustments?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Modifications or Strategies</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Yes
                                   @else
                                        No     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    
               </div><!-- .nk-data -->
          </div><!-- .card -->
          <!-- Another Section -->
          <div class="nk-block-head">
               <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Personal Preferences</h5>
                    <div class="nk-block-des">
                         <p>Your personalized preference allows you best use.</p>
                    </div>
               </div>
          </div><!-- .nk-block-head -->
          <div class="card card-bordered">
               <div class="nk-data data-list">
                    <div class="data-item">
                         <div class="data-col">
                              <span class="data-label">Language</span>
                              <span class="data-value">English (United State)</span>
                         </div>
                         <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change Language</a></div>
                    </div><!-- .data-item -->
                    <div class="data-item">
                         <div class="data-col">
                              <span class="data-label">Date Format</span>
                              <span class="data-value">M d, YYYY</span>
                         </div>
                         <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div><!-- .data-item -->
                    <div class="data-item">
                         <div class="data-col">
                              <span class="data-label">Timezone</span>
                              <span class="data-value">Bangladesh (GMT +6)</span>
                         </div>
                         <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">Change</a></div>
                    </div><!-- .data-item -->
               </div><!-- .nk-data -->
          </div><!-- .card -->
          </div><!-- .nk-block -->
          <input type="hidden" id="studentID" value="{{ $personData->id }}" />
     </div>
     <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-lg">
                    <h5 class="title">Update Profile</h5>
                    <div class="tab-content">
                        <div class="tab-pane active">
                              <div class="row gy-4">
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="first-name">Frist Name</label>
                                             <input type="text" class="form-control form-control-lg" id="first-name" value="{{ $personData->firstName }}">
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="last-name">Last Name</label>
                                             <input type="text" class="form-control form-control-lg" id="last-name" value="{{ $personData->lastName }}">
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Primary Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address" required value="{{ $personData->address }}">
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="photography-privacy">Photography Privacy</label>
                                             <select class="form-select" id="photography-privacy" data-ui="lg">
                                                  <option value="1" {{ ($personData->photograph) == '1' ? 'selected' : '' }}>Allowed</option>
                                                  <option value="0" {{ ($personData->photograph) == '0' ? 'selected' : '' }}>Not Allowed</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="birth-day">Date of Birth</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="birth-day" value="{{ date('d/m/Y', strtotime($personData->birthday)) }}">
                                        </div>
                                   </div>
                                   <div class="col-md-6">
                                        <div class="form-group">
                                             <label class="form-label" for="enrollment-date">Enrollment Date</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="enrollment-date" value="{{ date('d/m/Y', strtotime($personData->created_at)) }}">
                                        </div>
                                   </div>
                                   <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                             <li>
                                                  <a href="#" class="btn btn-lg btn-primary" id="updateStudentProfile">Update Profile</a>
                                             </li>
                                             <li>
                                                  <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <script>
        function initAutocomplete() {
            new google.maps.places.Autocomplete(
                (document.getElementById('primary-address')), {
                    types: ['geocode']
                }
            );
        }
    </script>
     @endsection
