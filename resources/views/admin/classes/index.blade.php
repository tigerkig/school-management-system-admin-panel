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
                                        <h3 class="nk-block-title page-title">Classes</h3>
                                        <div class="nk-block-des text-soft">
                                             <p>You have a total of <span id="totalClassesCount">7</span> classes.</p>
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
                                                                 <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#createNewStageModal"><em class="icon ni ni-plus"></em><span>Create</span></a>
                                                            </div>
                                                       </li>
                                                  </ul>
                                             </div>
                                        </div>
                                   </div><!-- .nk-block-head-content -->
                              </div><!-- .nk-block-between -->
                         </div><!-- .nk-block-head -->
                         <div class="nk-block" id="classesContent">
                              @for($i = 0; $i < 7; $i++)
                                   <div class="mb-5 classesCounter @if($i==0) kindergarten @else year_{{$i}} @endif">
                                        <div class="nk-block-head nk-block-head-sm">
                                             <div class="nk-block-between-custom">
                                                  <div class="nk-block-head-content">
                                                       <h4 class="@if($i==0) kindergarten_stageName @else year_{{$i}}_stageName @endif">
                                                            @if($i == 0)
                                                                 Early stage {{ $i + 1 }}: Kindergarten
                                                            @else     
                                                                 Stage {{ $i }}
                                                            @endif
                                                       </h4>
                                                  </div>
                                                  <div class="drodown">
                                                       <a href="#" class="dropdown-toggle btn btn-icon btn-white btn-outline-light" data-toggle="dropdown"><em class="icon ni ni-chevron-down-round"></em></a>
                                                       <div class="dropdown-menu dropdown-menu-right">
                                                            <ul class="link-list-opt no-bdr">
                                                                 <li><a href="#"><em class="icon ni ni-user-add"></em><span>Assign Teacher</span></a></li>
                                                                 <li><a href="@if($i==0) #kindergarten @else #year_{{$i}} @endif" onclick="editStageItem('@if($i==0) kindergarten @else year_{{$i}} @endif')"><em class="icon ni ni-edit"></em><span>Edit Category</span></a></li>
                                                                 <li><a href="#" onclick="removeStageItem('@if($i==0) kindergarten @else year_{{$i}} @endif')"><em class="icon ni ni-property-remove"></em><span>Delete Category</span></a></li>
                                                            </ul>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="row g-gs classesCard" id="@if($i==0) kindergarten @else year_{{$i}} @endif">
                                             @if($i > 0) 
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
                                             @endif
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
                                   </div>
                              @endfor
                         </div><!-- .nk-block -->
                    </div>
               </div>
          </div>
     </div>
     <!-- content @e -->

     <!-- Modal Form -->
    <div class="modal fade" id="createNewStageModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Create a Category</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter" id="new_stageConfirm">
                         <div class="form-group classes_next">
                              <label class="form-label">Create a category</label>
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control" id="new_stageName" required>
                              </div>
                         </div>

                         <div class="form-group classes_before">
                              <label class="form-label">Select a year</label>
                              <div class="form-control-wrap">
                                   <div class="form-control-select">
                                        <select class="form-control">
                                             <option value="0">Kindergarten</option>
                                             <option value="1">Year 1</option>
                                             <option value="2">Year 2</option>
                                             <option value="3">Year 3</option>
                                             <option value="4">Year 4</option>
                                             <option value="5">Year 5</option>
                                             <option value="6">Year 6</option>
                                             <option value="7">Year 7</option>
                                             <option value="8">Year 8</option>
                                             <option value="9">Year 9</option>
                                             <option value="10">Year 10</option>
                                             <option value="11">Year 11</option>
                                             <option value="12">Year 12</option>
                                        </select>
                                   </div>
                              </div>
                         </div>
                         <div class="form-group text-end">
                              <button type="button" class="btn btn-md btn-primary" id="classes_next">Next</button>
                              <button type="submit" class="btn btn-md btn-primary" id="classes_confirm">Confirm</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="editNewStageModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit a Category</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <form action="#" class="form-validate is-alter" id="edit_stageConfirm">
                         <div class="form-group">
                              <div class="form-control-wrap">
                                   <input type="text" class="form-control" id="edit_stageName" required>
                              </div>
                         </div>
                         <input type="hidden" id="getEditStageId">
                         <div class="form-group text-end">
                              <button type="submit" class="btn btn-md btn-primary">Confirm</button>
                         </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Tabs -->
     @endsection
