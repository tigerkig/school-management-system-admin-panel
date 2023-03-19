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
                                        <h3 class="nk-block-title page-title">Enrollments ( total of 3 )</h3>
                                   </div><!-- .nk-block-head-content -->
                                   <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                             <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                             <div class="toggle-expand-content" data-content="more-options">
                                                  <ul class="nk-block-tools g-3">
                                                       <li class="nk-block-tools-opt">
                                                            <a href="https://mangomap.com/schoolcatchment/maps/56084/schoolcatchment.com.au-NSW-Sydney-Public-School-Catchment# " class="btn d-none d-md-inline-flex custom-link" target="_blank"><span>School catchment</span><em class="icon ni ni-external"></em></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="https://education.nsw.gov.au/public-schools/going-to-a-public-school/translated-documents/enrolment-application" target="_blank" class="btn d-none d-md-inline-flex custom-link"><span>Translated applications</span><em class="icon ni ni-external"></em></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="/assets/pdf/Residential_Address_Check_List_100_points.html" class="btn d-none d-md-inline-flex custom-link" target="_blank"><span>Address check</span><em class="icon ni ni-external"></em></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="https://schoolfinder.education.nsw.gov.au/index" target="_blank" class="btn d-none d-md-inline-flex custom-link"><span>School finder</span><em class="icon ni ni-external"></em></a>
                                                       </li>
                                                       <!-- <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-outline-light d-md-none student-archive"><em class="icon ni ni-swap"></em></a>
                                                            <a href="#" class="btn btn-outline-light d-none d-md-inline-flex student-archive"><em class="icon ni ni-swap"></em><span>Archive</span></a>
                                                       </li> -->
                                                       <li class="nk-block-tools-opt">
                                                            <a href="/enrollments/startApplication" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="/enrollments/startApplication" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Start</span></a>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div><!-- .nk-block-head-content -->
                              </div><!-- .nk-block-between -->
                         </div><!-- .nk-block-head -->
                         <div class="nk-block">
                              <div class="card card-preview">
                                   <div class="card-inner">
                                        <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                             <thead>
                                                  <tr class="nk-tb-item nk-tb-head">
                                                       <th class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <input type="checkbox" class="custom-control-input" id="checkAll">
                                                                 <label class="custom-control-label" for="checkAll"></label>
                                                            </div>
                                                       </th>
                                                       <th class="nk-tb-col"><span class="sub-text">ID</span></th>
                                                       <th class="nk-tb-col"><span class="sub-text">Photo</span></th>
                                                       <th class="nk-tb-col tb-col-mb"><span class="sub-text">First Name</span></th>
                                                       <th class="nk-tb-col tb-col-md"><span class="sub-text">Last Name</span></th>
                                                       <th class="nk-tb-col tb-col-md"><span class="sub-text">Phone Number</span></th>
                                                       <th class="nk-tb-col tb-col-lg"><span class="sub-text">State</span></th>
                                                       <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                       <th class="nk-tb-col nk-tb-col-tools text-right">
                                                       </th>
                                                  </tr>
                                             </thead>
                                             <tbody>
                                                  @foreach($lists as $list)
                                                  <tr class="nk-tb-item" >
                                                       <td class="nk-tb-col nk-tb-col-check">
                                                            <div class="custom-control custom-control-sm custom-checkbox notext">
                                                                 <input type="checkbox" class="custom-control-input" name='student-detail' id="{{ $list->id }}">
                                                                 <label class="custom-control-label" for="{{ $list->id }}"></label>
                                                            </div>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-mb" onclick='person({{ $list->id }})'>
                                                            <span class="tb-amount">{{ $list->id }}</span>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-mb" onclick='person({{ $list->id }})'>
                                                            <div class="user-card">
                                                                 <div class="user-avatar">
                                                                      <img src="images/avatar/a-sm.jpg" alt="">
                                                                 </div>
                                                            </div>
                                                       </td>

                                                       <td class="nk-tb-col tb-col-md" onclick='person({{ $list->id }})'>
                                                            <span>{{ $list->firstName }}</span>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-md" onclick='person({{ $list->id }})'>
                                                            <span>{{ $list->lastName }}</span>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-md" onclick='person({{ $list->id }})'>
                                                            <span>{{ $list->phone }}</span>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-md" onclick='person({{ $list->id }})'>
                                                            <span>{{ $list->state }}</span>
                                                       </td>
                                                       <td class="nk-tb-col tb-col-md" onclick='person({{ $list->id }})'>
                                                            @if( $list->email_verified_at )
                                                                 <span class="tb-status text-success">Active</span>
                                                            @else
                                                                 <span class="tb-status text-danger">Inactive</span>
                                                            @endif
                                                       </td>
                                                       <td class="nk-tb-col nk-tb-col-tools">
                                                            <ul class="nk-tb-actions gx-1">
                                                                 <li class="nk-tb-action-hidden">
                                                                      <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                           <em class="icon ni ni-mail-fill"></em>
                                                                      </a>
                                                                 </li>
                                                                 <li class="nk-tb-action-hidden">
                                                                      <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                           <em class="icon ni ni-user-cross-fill"></em>
                                                                      </a>
                                                                 </li>
                                                                 <li>
                                                                      <div class="drodown">
                                                                           <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                           <div class="dropdown-menu dropdown-menu-right">
                                                                           <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-repeat"></em><span>Transaction</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-activity-round"></em><span>Activities</span></a></li>
                                                                                <li class="divider"></li>
                                                                                <li><a href="#"><em class="icon ni ni-shield-star"></em><span>Reset Pass</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-shield-off"></em><span>Reset 2FA</span></a></li>
                                                                                <li><a href="#"><em class="icon ni ni-na"></em><span>Suspend User</span></a></li>
                                                                           </ul>
                                                                           </div>
                                                                      </div>
                                                                 </li>
                                                            </ul>
                                                       </td>
                                                  </tr><!-- .nk-tb-item  -->
                                                  @endforeach
                                             </tbody>
                                        </table>
                                   </div>
                              </div><!-- .card-preview -->
                         </div><!-- .nk-block -->
                    </div>
               </div>
          </div>
     </div>
     <!-- content @e -->


    @endsection
