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
                                        <h3 class="nk-block-title page-title">Students ( total of {{ count($lists) }} )</h3>
                                   </div><!-- .nk-block-head-content -->
                                   <div class="nk-block-head-content">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                             <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                             <div class="toggle-expand-content" data-content="more-options">
                                                  <ul class="nk-block-tools g-3">
                                                       <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-outline-light d-md-none" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" class="btn btn-outline-light d-none d-md-inline-flex" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em><span>Import</span></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-outline-light d-md-none student-detail-download"><em class="icon ni ni-download"></em></a>
                                                            <a href="#" class="btn btn-outline-light d-none d-md-inline-flex student-detail-download"><em class="icon ni ni-download"></em><span>Export</span></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-outline-light d-md-none student-archive"><em class="icon ni ni-swap"></em></a>
                                                            <a href="#" class="btn btn-outline-light d-none d-md-inline-flex student-archive"><em class="icon ni ni-swap"></em><span>Archive</span></a>
                                                       </li>
                                                       <li class="nk-block-tools-opt">
                                                            <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#student-add"><em class="icon ni ni-plus"></em><span>Add</span></a>
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

    <!-- app-root @e -->
    <!-- @@ Profile Edit Modal @e -->
    <div class="modal fade" role="dialog" id="student-add">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                <div class="modal-body modal-body-md">

                    <div class="row gy-4 paddingTop" id="choose-plan">
                         <h5 class="title">How would you like to add contacts?</h5>
                         <div class="col-md-6">
                              <div class="student-select-border" id="student-option-1">
                                   <div class="custom-control custom-radio student-select-between" >
                                        <div><em class="icon ni ni-arrow-up"></em></div>
                                        <div>
                                             <input type="radio" id="select-upload" name="studentOption" class="custom-control-input">
                                             <label class="custom-control-label" for="select-upload"></label>
                                        </div>
                                   </div>
                                   <h6>Upload a file</h6>
                                   <p>Import contracts from a CSV or tab-delimited TXT file.</p>
                              </div>

                         </div>

                         <div class="col-md-6">
                              <div class="student-select-border" id="student-option-2">
                                   <div class="custom-control custom-radio student-select-between" >
                                        <div><em class="icon ni ni-copy"></em></div>
                                        <div>
                                             <input type="radio" id="select-copy-past" name="studentOption" class="custom-control-input">
                                             <label class="custom-control-label" for="select-copy-past"></label>
                                        </div>
                                   </div>
                                   <h6>Copy and Paste</h6>
                                   <p>Directly paste in new contracts from a spreadsheet or similar list.</p>
                              </div>
                         </div>
                         <div class="col-12">
                              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                   <li>
                                        <a href="#" class="btn btn-primary" id='toNextPage'>Continue</a>
                                   </li>
                                   <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                    <form method="POST" action="{{ route('studentUploadFile') }}" enctype="multipart/form-data">
                         @csrf
                         <div class="row gy-4 paddingTop" id='upload-section' style="display: none">
                              <h5 class="title">Upload your contacts</h5>

                              <div class='col-md-12'>
                                   <div class="form-group">
                                        <label class="form-label" for="customFileLabel">File Upload</label>
                                        <div class="form-control-wrap">
                                             <div class="custom-file">
                                                  <input type="file" name="uploaded_file" class="custom-file-input" id="uploadFile">
                                                  <label class="custom-file-label" for="uploadFile">Choose file</label>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                             <button  type='submit' class="btn btn-primary" id='upload'>Continue to organize</button>
                                        </li>
                                        <li>
                                             <a href="#" class="btn btn-primary" id='uploadBackword'>Back</a>
                                        </li>
                                        <li>
                                             <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                    </form>

                    <div class="row gy-4 paddingTop" id='copy-paste' style="display: none">
                         <div class="col-12">
                              <h5 class="title">Copy and paste your contacts</h5>
                         </div>
                         <div class="col-sm-12 col-md-12">
                              <div class="form-group">
                                   <label class="form-label" for="bulkText">Past student information into this field</label>
                                   <div class="form-control-wrap">
                                        <textarea rows="5" class="form-control" id="bulkText" required placeholder="Email FirstName LastName Phone State"></textarea>
                                   </div>
                              </div>
                         </div>

                         <div class="col-12">
                              <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                   <li>
                                        <button  type='submit' class="btn btn-primary" id='copy-paste-continue'>Continue to organize</button>
                                   </li>
                                   <li>
                                        <a href="#" class="btn btn-primary" id='copy-past-backword'>Back</a>
                                   </li>
                                   <li>
                                        <a href="#" data-dismiss="modal" class="link link-light">Cancel</a>
                                   </li>
                              </ul>
                         </div>
                    </div>
                </div><!-- .modal-body -->
            </div><!-- .modal-content -->
        </div><!-- .modal-dialog -->
    </div><!-- .modal -->

    <!-- JavaScript -->
    <script src="./assets/js/libs/datatable-btns.js?ver=2.9.1"></script>
    
    @endsection
