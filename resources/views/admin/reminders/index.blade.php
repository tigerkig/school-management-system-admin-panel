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
                                   <h3 class="nk-block-title page-title">Events</h3>
                                   <div class="nk-block-des text-soft">
                                        <p>You have total 95 events.</p>
                                   </div>
                              </div><!-- .nk-block-head-content -->
                              <div class="nk-block-head-content">
                                   <div class="toggle-wrap nk-block-tools-toggle">
                                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                        <div class="toggle-expand-content" data-content="more-options">
                                             <ul class="nk-block-tools g-3">
                                                  <li class="full-width">
                                                       <div class="drodown full-width">
                                                            <a href="#" class="dropdown-toggle btn btn-white btn-dim btn-outline-light full-width" data-toggle="dropdown" aria-expanded="false"><em class="d-none d-sm-inline icon ni ni-filter-alt"></em><span>Filtered By</span><em class="dd-indc icon ni ni-chevron-right"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right" style="">
                                                                 <ul class="link-list-opt no-bdr">
                                                                      <li><a href="#"><span>Open</span></a></li>
                                                                      <li><a href="#"><span>Closed</span></a></li>
                                                                      <li><a href="#"><span>Onhold</span></a></li>
                                                                 </ul>
                                                            </div>
                                                       </div>
                                                  </li>
                                                  <li class="nk-block-tools-opt full-width">
                                                       <div class="dropdown custom-dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown" aria-expanded="false"><em class="icon ni ni-plus"></em><span>Create</span></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                 <ul class="link-list-opt no-bdr">
                                                                      <li><a href="/reminders/addEvent"></em><span>Events</span></a></li>
                                                                      <li><a href="#"></em><span>Task</span></a></li>
                                                                      <li><a href="#"></em><span>Appointment schedule</span></a></li>
                                                                      <li><a href="#"></em><span>Reminder</span></a></li>
                                                                 </ul>
                                                            </div>
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
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Dashlite Development</h6>
                                                            <span class="sub-text">Softnio</span>
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
                                                  <p>Design and develop the DashLite template for Envato Marketplace.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                                       <div class="project-progress-percent">93.5%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="93.5"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar bg-light sm"><span>+12</span></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Redesign Website</h6>
                                                            <span class="sub-text">Runnergy</span>
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
                                                  <p>Design the website for Runnergy main website including their user dashboard.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>25 Tasks</span></div>
                                                       <div class="project-progress-percent">23%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="23"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-light text-gray"><em class="icon ni ni-clock"></em><span>21 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
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
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>2 Tasks</span></div>
                                                       <div class="project-progress-percent">52.5%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="52.5"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><img src="./images/avatar/a-sm.jpg" alt=""></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-danger"><em class="icon ni ni-clock"></em><span>Due Tomorrow</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Website Development</h6>
                                                            <span class="sub-text">Fitness Next</span>
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
                                                  <p>Develop the website using WordPree for the Fitness Next client.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>44 Tasks</span></div>
                                                       <div class="project-progress-percent">65.5%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="65.5"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-light text-gray"><em class="icon ni ni-clock"></em><span>16 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
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
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-purple"><span>DD</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Dashlite Development</h6>
                                                            <span class="sub-text">Softnio</span>
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
                                                  <p>Design and develop the DashLite template for Envato Marketplace.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>3 Tasks</span></div>
                                                       <div class="project-progress-percent">93.5%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="93.5"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><span>A</span></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar bg-light sm"><span>+12</span></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-warning"><em class="icon ni ni-clock"></em><span>5 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-danger"><span>WD</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Website Development</h6>
                                                            <span class="sub-text">Fitness Next</span>
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
                                                  <p>Develop the website using WordPree for the Fitness Next client.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>44 Tasks</span></div>
                                                       <div class="project-progress-percent">65.5%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="65.5"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-light text-gray"><em class="icon ni ni-clock"></em><span>16 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6 col-lg-4 col-xxl-3">
                                   <div class="card h-100">
                                        <div class="card-inner">
                                             <div class="project">
                                                  <div class="project-head">
                                                  <a href="html/apps-kanban.html" class="project-title">
                                                       <div class="user-avatar sq bg-warning"><span>RW</span></div>
                                                       <div class="project-info">
                                                            <h6 class="title">Redesign Website</h6>
                                                            <span class="sub-text">Runnergy</span>
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
                                                  <p>Design the website for Runnergy main website including their user dashboard.</p>
                                                  </div>
                                                  <div class="project-progress">
                                                  <div class="project-progress-details">
                                                       <div class="project-progress-task"><em class="icon ni ni-check-round-cut"></em><span>25 Tasks</span></div>
                                                       <div class="project-progress-percent">23%</div>
                                                  </div>
                                                  <div class="progress progress-pill progress-md bg-light">
                                                       <div class="progress-bar" data-progress="23"></div>
                                                  </div>
                                                  </div>
                                                  <div class="project-meta">
                                                  <ul class="project-users g-1">
                                                       <li>
                                                            <div class="user-avatar sm bg-primary"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                       </li>
                                                       <li>
                                                            <div class="user-avatar sm bg-blue"><span>N</span></div>
                                                       </li>
                                                  </ul>
                                                  <span class="badge badge-dim badge-light text-gray"><em class="icon ni ni-clock"></em><span>21 Days Left</span></span>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              </div>
                         </div><!-- .nk-block -->
                    </div>
               </div>
          </div>
     </div>
     <!-- content @e -->
     @endsection
