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
          <ul class="nk-nav nav nav-tabs custom-nav">
               <li class="nav-item personal active">
                    <a class="nav-link" href="#" onclick="profileNav('personal')">Personal</a>
               </li>
               <li class="nav-item parent_1">
                    <a class="nav-link" href="#" onclick="profileNav('parent_1')">Parent 1</a>
               </li>
               <li class="nav-item parent_2">
                    <a class="nav-link" href="#" onclick="profileNav('parent_2')">Parent 2</a>
               </li>
               <li class="nav-item notifications">
                    <a class="nav-link" href="#" onclick="profileNav('notifications')">Notifications</a>
               </li>
               <li class="nav-item payments">
                    <a class="nav-link" href="#" onclick="profileNav('payments')">Payments</a>
               </li>
          </ul><!-- nav-tabs -->
          <div class="nk-block">
          <div class="nk-block-head">
               <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Personal Information</h5>
                    <div class="nk-block-des">
                         <p>Basic info, like your name and address, that you use on Nio Platform.</p>
                    </div>
               </div>
          </div><!-- .nk-block-head -->
          <div class="card card-bordered">
               <div class="nk-data data-list personalInformation mt-0" id="personal">
                    <div class="row">
                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Full Name</span>
                                        <span class="data-value">{{$personData->firstName . " " . $personData->lastName}}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Preferred Name</span>
                                        <span class="data-value">{{$personData->lastName}}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Date of Birth</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Residential Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Origin</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Nationality</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Siblings Details</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Special Needs?</span>
                                        <span class="data-value">
                                             @if ($personData->photograph == 1)
                                                  Allowed
                                             @else
                                                  Not Allowed     
                                             @endif
                                        </span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Additional information</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>

                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Middle Name</span>
                                        <span class="data-value">{{$personData->firstName}}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Gender</span>
                                        <span class="data-value">Female</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Religion</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Mailing Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Country of Birth</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Residency Status</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Language spoken at home</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                   <div class="data-col">
                                        <span class="data-label">Court Orders</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>
                    </div>
               </div><!-- .nk-data -->
               <div class="nk-data data-list personalInformation mt-0" id="parent_1">
                    <div class="row">
                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Title</span>
                                        <span class="data-value">Mr</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Relationship</span>
                                        <span class="data-value">Father</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Contact Number</span>
                                        <span class="data-value">+482738953</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Mailing Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 1 Origin</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 1 Education</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Set as Emergency Contact?</span>
                                        <span class="data-value">
                                             @if ($personData->photograph == 1)
                                                  Allowed
                                             @else
                                                  Not Allowed     
                                             @endif
                                        </span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Give Permissions?</span>
                                        <span class="data-value">
                                             @if ($personData->photograph == 1)
                                                  Allowed
                                             @else
                                                  Not Allowed     
                                             @endif
                                        </span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>

                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Full Name</span>
                                        <span class="data-value">{{$personData->firstName}}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Gender</span>
                                        <span class="data-value">Female</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Residential Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">tigertopdev714@gmail.com</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 1 Occupation</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 1 Qualification</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_1-edit">
                                   <div class="data-col">
                                        <span class="data-label">Additional Comments</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>
                    </div>
               </div><!-- .nk-data -->
               <div class="nk-data data-list personalInformation mt-0" id="parent_2">
                    <div class="row">
                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Title</span>
                                        <span class="data-value">Mr</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Relationship</span>
                                        <span class="data-value">Mother</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Contact Number</span>
                                        <span class="data-value">+482738953</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Mailing Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 2 Origin</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 2 Education</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Set as Emergency Contact?</span>
                                        <span class="data-value">
                                             @if ($personData->photograph == 1)
                                                  Allowed
                                             @else
                                                  Not Allowed     
                                             @endif
                                        </span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Give Permissions?</span>
                                        <span class="data-value">
                                             @if ($personData->photograph == 1)
                                                  Allowed
                                             @else
                                                  Not Allowed     
                                             @endif
                                        </span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>

                         <div class="col-md-6">
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Full Name</span>
                                        <span class="data-value">{{$personData->firstName}}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Gender</span>
                                        <span class="data-value">Female</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Residential Address</span>
                                        <span class="data-value">{{ $personData->address }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Email</span>
                                        <span class="data-value">tigertopdev714@gmail.com</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 2 Occupation</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Parent 2 Qualification</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                              <div class="data-item" data-toggle="modal" data-target="#parent_2-edit">
                                   <div class="data-col">
                                        <span class="data-label">Additional Comments</span>
                                        <span class="data-value">{{ date('d/m/Y', strtotime($personData->birthday)) }}</span>
                                   </div>
                                   <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                              </div><!-- .data-item -->
                         </div>
                    </div>
               </div><!-- .nk-data -->
               <div class="nk-data data-list personalInformation mt-0" id="notifications">
                    <div class="data-item" data-toggle="modal" data-target="#notifications-edit">
                         <div class="data-col">
                              <span class="data-label">Violent behaviour</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#notifications-edit">
                         <div class="data-col">
                              <span class="data-label">incidents outside the school?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#notifications-edit">
                         <div class="data-col">
                              <span class="data-label">Additional student circumstances?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#notifications-edit">
                         <div class="data-col">
                              <span class="data-label">Health professional acknowledgment?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
                    <div class="data-item" data-toggle="modal" data-target="#notifications-edit">
                         <div class="data-col">
                              <span class="data-label">Another school attendance?</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
               </div><!-- .nk-data -->
               <div class="nk-data data-list personalInformation mt-0" id="payments">
                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                         <div class="data-col">
                              <span class="data-label">Payments informations</span>
                              <span class="data-value">
                                   @if ($personData->photograph == 1)
                                        Allowed
                                   @else
                                        Not Allowed     
                                   @endif
                              </span>
                         </div>
                         <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                    </div><!-- .data-item -->
               </div><!-- .nk-data -->
          </div><!-- .card -->
          <input type="hidden" id="studentID" value="{{ $personData->id }}" />
     </div>
     <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" tabindex="-1" role="dialog" id="profile-edit">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-xl">
                    <h5 class="title mb-4">Update Personal</h5>
                    <div class="tab-content">
                        <div class="tab-pane active">
                              <div class="row gy-4">
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="first-name">First Name</label>
                                             <input type="text" class="form-control form-control-lg" id="first-name">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="last-name">Middle Name</label>
                                             <input type="text" class="form-control form-control-lg" id="last-name">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Last Name</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Preferred Name</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Gender</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Female</option>
                                                  <option value="1">Male</option>
                                                  <option value="5">Other</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="birth-day">Date of Birth</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="birth-day">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="birth-day">Contact Perference</label>
                                             <input type="text" class="form-control form-control-lg" id="birth-day">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Religion</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Residential Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Address Preference</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Mother</option>
                                                  <option value="1">Father</option>
                                                  <option value="2">Brother</option>
                                                  <option value="3">Sister</option>
                                                  <option value="4">Grandmother</option>
                                                  <option value="5">Grandfother</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Mailing Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Origin</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="enrollment-date">Country of Birth</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="enrollment-date">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Nationality</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" >Residency Status</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Siblings Details</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Language spoken at home</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="photography-privacy">Special Needs</label>
                                             <select class="form-select" id="photography-privacy" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Court Orders</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Additional Information</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
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

    <div class="modal fade" tabindex="-1" role="dialog" id="parent_1-edit">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-xl">
                    <h5 class="title mb-4">Update Parent 1</h5>
                    <div class="tab-content">
                        <div class="tab-pane active">
                              <div class="row gy-4">
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" >Title</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Mr</option>
                                                  <option value="1">Miss</option>
                                                  <option value="2">Mrs</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="last-name">First Name</label>
                                             <input type="text" class="form-control form-control-lg" id="last-name">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Relationshop</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Mother</option>
                                                  <option value="1">Father</option>
                                                  <option value="2">Brother</option>
                                                  <option value="3">Sister</option>
                                                  <option value="4">Grandmother</option>
                                                  <option value="5">Grandfother</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Gender</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Female</option>
                                                  <option value="1">Male</option>
                                                  <option value="5">Other</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="birth-day">Contact Number</label>
                                             <input type="text" class="form-control form-control-lg" id="birth-day">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Residential Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Mailing Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Email</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="enrollment-date">Parent 1 Origin</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="enrollment-date">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 1 Occupation</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 1 Education</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 1 Qualification</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Set as Emergency Contact?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Addtional Comments</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Give Permissions?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="parent_2-edit">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-xl">
                    <h5 class="title mb-4">Update Parent 2</h5>
                    <div class="tab-content">
                        <div class="tab-pane active">
                              <div class="row gy-4">
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" >Title</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Mr</option>
                                                  <option value="1">Miss</option>
                                                  <option value="2">Mrs</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="last-name">First Name</label>
                                             <input type="text" class="form-control form-control-lg" id="last-name">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Relationshop</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Mother</option>
                                                  <option value="1">Father</option>
                                                  <option value="2">Brother</option>
                                                  <option value="3">Sister</option>
                                                  <option value="4">Grandmother</option>
                                                  <option value="5">Grandfother</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Gender</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="0">Female</option>
                                                  <option value="1">Male</option>
                                                  <option value="5">Other</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="birth-day">Contact Number</label>
                                             <input type="text" class="form-control form-control-lg" id="birth-day">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Residential Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Mailing Address</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Email</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="enrollment-date">Parent 2 Origin</label>
                                             <input type="text" class="form-control form-control-lg date-picker" id="enrollment-date">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 2 Occupation</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 2 Education</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Parent 2 Qualification</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Set as Emergency Contact?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label" for="primary-address">Addtional Comments</label>
                                             <input type="text" class="form-control form-control-lg" id="primary-address">
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Give Permissions?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
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

    <div class="modal fade" tabindex="-1" role="dialog" id="notifications-edit">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-xl">
                    <h5 class="title mb-4">Update Notifications</h5>
                    <div class="tab-content">
                        <div class="tab-pane active">
                              <div class="row gy-4">
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Violent behaviour</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">incidents outside the school?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Additional student circumstances?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Health professional acknowledgment?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
                                        </div>
                                   </div>
                                   <div class="col-md-4">
                                        <div class="form-group">
                                             <label class="form-label">Another school attendance?</label>
                                             <select class="form-select" data-ui="lg">
                                                  <option value="1">Yes</option>
                                                  <option value="0">No</option>
                                             </select>
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
