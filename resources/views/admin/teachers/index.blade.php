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
                                        <h3 class="nk-block-title page-title">Teachers</h3>
                                        <div class="nk-block-des text-soft">
                                             <p>You have a total of <span id="totalClassesCount">7</span> teachers.</p>
                                        </div>
                                   </div><!-- .nk-block-head-content -->
                                   <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                             <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                             <div class="toggle-expand-content" data-content="more-options">
                                                  <ul class="nk-block-tools g-3">
                                                       <li class="full-width">
                                                            <div class="dropdown custom-dropdown">
                                                                 <a href="/teachers/addTeacher" class="btn btn-primary" ><em class="icon ni ni-plus"></em><span>Add Teacher</span></a>
                                                            </div>
                                                       </li>
                                                       <li class="nk-block-tools-opt full-width">
                                                            <div class="dropdown custom-dropdown">
                                                                 <a href="#" class="btn btn-primary"><span>Launch Classroom</span><em class="icon ni ni-arrow-right"></em></a>
                                                            </div>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div><!-- .nk-block-head-content -->
                              </div><!-- .nk-block-between -->
                         </div><!-- .nk-block-head -->
                         <div class="nk-block">
                              <div class="row g-gs">
                                   <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                             <div class="card-inner">
                                                  <div class="team">
                                                       <div class="team-options">
                                                            <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                      <ul class="link-list-opt no-bdr">
                                                                           <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                           <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                      </ul>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                 <img src="/images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                 <h6>Victoria Lynch </h6>
                                                                 <span class="badge rounded-pill bg-primary">Doctor</span>
                                                                 <span class="sub-text">FCPS</span>
                                                            </div>
                                                       </div>
                                                       <ul class="team-info">
                                                            <li><span>Department</span><span>Gastroenterology</span></li>
                                                            <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                            <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                            <li><span>Email</span><span>info@softnio.com</span></li>
                                                       </ul>
                                                       <div class="team-view">
                                                            <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                       </div>
                                                  </div><!-- .team -->
                                             </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                             <div class="card-inner">
                                                  <div class="team">
                                                       <div class="team-options">
                                                            <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                      <ul class="link-list-opt no-bdr">
                                                                           <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                           <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                      </ul>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                 <img src="/images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                 <h6>Abu Bin Ishtiyak</h6>
                                                                 <span class="badge rounded-pill bg-primary">Doctor</span>
                                                                 <span class="sub-text">MBBS, FCPS</span>
                                                            </div>
                                                       </div>
                                                       <ul class="team-info">
                                                            <li><span>Department</span><span>Medicine</span></li>
                                                            <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                            <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                            <li><span>Email</span><span>info@softnio.com</span></li>
                                                       </ul>
                                                       <div class="team-view">
                                                            <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                       </div>
                                                  </div><!-- .team -->
                                             </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                             <div class="card-inner">
                                                  <div class="team">
                                                       <div class="team-options">
                                                            <div class="drodown">
                                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-end">
                                                                 <ul class="link-list-opt no-bdr">
                                                                      <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                      <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                 </ul>
                                                            </div>
                                                            </div>
                                                       </div>
                                                       <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                 <img src="/images/avatar/a-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                 <h6>Ashley Lawson</h6>
                                                                 <span class="badge rounded-pill bg-primary">Doctor</span>
                                                                 <span class="sub-text">MBBS, FCPS, Surgon</span>
                                                            </div>
                                                       </div>
                                                       <ul class="team-info">
                                                            <li><span>Department</span><span>Orthopaedics</span></li>
                                                            <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                            <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                            <li><span>Email</span><span>info@softnio.com</span></li>
                                                       </ul>
                                                       <div class="team-view">
                                                            <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                       </div>
                                                  </div><!-- .team -->
                                             </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-sm-6 col-lg-4 col-xxl-3">
                                        <div class="card card-bordered">
                                             <div class="card-inner">
                                                  <div class="team">
                                                       <div class="team-options">
                                                            <div class="drodown">
                                                                 <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                 <div class="dropdown-menu dropdown-menu-end">
                                                                      <ul class="link-list-opt no-bdr">
                                                                           <li><a href="#"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                           <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                      </ul>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                       <div class="user-card user-card-s2">
                                                            <div class="user-avatar lg bg-primary">
                                                                 <img src="/images/avatar/a-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-info">
                                                                 <h6>Ashley Lawson</h6>
                                                                 <span class="badge rounded-pill bg-primary">Doctor</span>
                                                                 <span class="sub-text">MBBS, FCPS, Surgon</span>
                                                            </div>
                                                       </div>
                                                       <ul class="team-info">
                                                            <li><span>Shift</span><span>Morning</span></li>
                                                            <li><span>Join Date</span><span>24 Jun 2015</span></li>
                                                            <li><span>Contact</span><span>+88 01713-123656</span></li>
                                                            <li><span>Email</span><span>info@softnio.com</span></li>
                                                       </ul>
                                                       <div class="team-view">
                                                            <a href="#" class="btn btn-block btn-dim btn-primary"><span>View Profile</span></a>
                                                       </div>
                                                  </div><!-- .team -->
                                             </div><!-- .card-inner -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                              </div>
                         </div><!-- .nk-block -->
                    </div>
               </div>
          </div>
     </div>
     <!-- content @e -->
     @endsection
