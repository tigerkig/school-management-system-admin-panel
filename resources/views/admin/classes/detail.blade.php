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
                                        <p class="nk-block-title"><a href="/classes" class="btn btn-icon btn-primary"><em class="icon ni ni-curve-down-left"></em></a> &nbsp; Back</p>
                                   </div><!-- .nk-block-head-content -->
                                   <div class="nk-block-head-content addSubjectButtonHeight">
                                        <a href="#" class="btn btn-primary subject" data-toggle="modal" data-target="#addSubject"><em class="icon ni ni-plus"></em><span>Add Subject</span></a>
                                        <a href="#" class="btn btn-primary teacher" data-toggle="modal" data-target="#addTeacher"><em class="icon ni ni-plus"></em><span>Add Teacher</span></a>
                                        <a href="#" class="btn btn-primary classes" data-toggle="modal" data-target="#addClasses"><em class="icon ni ni-plus"></em><span>Add Classes</span></a>
                                   </div><!-- .nk-block-head-content -->
                              </div>
                         </div><!-- .nk-block-head -->                         
                         <div class="nk-block">
                              <div class="row g-gs">
                                   <div class="col-xxl-3 col-sm-6">
                                        <div class="card">
                                             <div class="nk-ecwg nk-ecwg6">
                                                  <div class="card-inner">
                                                       <div class="card-title-group">
                                                            <div class="card-title">
                                                                 <h6 class="title">Stage 1</h6>
                                                            </div>
                                                       </div>
                                                       <div class="data">
                                                            <div class="data-group">
                                                                 <div class="amount">Year 1</div>
                                                                 <div class="nk-ecwg6-ck">
                                                                      <canvas class="ecommerce-line-chart-s3" id="ipdIncome"></canvas>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div><!-- .card-inner -->
                                             </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-xxl-3 col-sm-6" id="classesBox">
                                        <div class="card">
                                             <div class="nk-ecwg nk-ecwg6">
                                                  <div class="card-inner">
                                                       <div class="card-title-group">
                                                            <div class="card-title">
                                                                 <h6 class="title">Classes</h6>
                                                            </div>
                                                       </div>
                                                       <div class="data">
                                                            <div class="data-group">
                                                                 <div class="amount">5</div>
                                                                 <div class="nk-ecwg6-ck">
                                                                      <canvas class="ecommerce-line-chart-s3" id="opdIncome"></canvas>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div><!-- .card-inner -->
                                             </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-xxl-3 col-sm-6" id="teacherBox">
                                        <div class="card">
                                             <div class="nk-ecwg nk-ecwg6">
                                                  <div class="card-inner">
                                                       <div class="card-title-group">
                                                            <div class="card-title ">
                                                                 <h6 class="title">Teachers</h6>
                                                            </div>
                                                       </div>
                                                       <div class="data">
                                                            <div class="data-group">
                                                                 <div class="amount">10</div>
                                                                 <div class="nk-ecwg6-ck">
                                                                      <canvas class="ecommerce-line-chart-s3" id="labIncome"></canvas>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div><!-- .card-inner -->
                                             </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                                   <div class="col-xxl-3 col-sm-6" id="subjectBox">
                                        <div class="card">
                                             <div class="nk-ecwg nk-ecwg6">
                                                  <div class="card-inner">
                                                       <div class="card-title-group">
                                                            <div class="card-title">
                                                                 <h6 class="title">Subjects</h6>
                                                            </div>
                                                       </div>
                                                       <div class="data">
                                                            <div class="data-group">
                                                                 <div class="amount">12</div>
                                                                 <div class="nk-ecwg6-ck">
                                                                      <canvas class="ecommerce-line-chart-s3" id="otIncome"></canvas>
                                                                 </div>
                                                            </div>
                                                       </div>
                                                  </div><!-- .card-inner -->
                                             </div><!-- .nk-ecwg -->
                                        </div><!-- .card -->
                                   </div><!-- .col -->
                              </div><!-- .row -->
                         </div><!-- .nk-block -->

                         <div class="nk-block">
                              <div id="accordion" class="accordion classesDetailAccordion">
                                   <div class="row">
                                        <div class="col-md-6">
                                             <div class="accordion-item">
                                                  <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-1">
                                                       <div class="detailHeader">
                                                            <h5 class="title">Class: 1B - Ms Samantha. Boothman</h5>
                                                            <h6>Primary</h6>
                                                            <img src="/images/avatar/b-sm.jpg" />
                                                       </div>
                                                       <span class="accordion-icon"></span>
                                                  </a>
                                                  <div class="accordion-body collapse" id="accordion-item-1" data-parent="#accordion">
                                                       <div class="accordion-inner">
                                                            <p>- Language arts</p>
                                                            <p>- Mathematics</p>
                                                            <p>- Science</p>
                                                            <p>- HandWriting</p>
                                                       </div>
                                                  </div>
                                             </div>
                                        </div>
                                        <div class="col-md-6">
                                             <div class="accordion-item">
                                                  <a href="#" class="accordion-head collapsed" data-toggle="collapse" data-target="#accordion-item-2">
                                                       <div class="detailHeader">
                                                            <h5 class="title">Class: 1C - Mrs Tracy Reid</h5>
                                                            <h6>High School</h6>
                                                            <img src="/images/avatar/b-sm.jpg" />
                                                       </div>
                                                       <span class="accordion-icon"></span>
                                                  </a>
                                                  <div class="accordion-body collapse" id="accordion-item-2" data-parent="#accordion">
                                                       <div class="accordion-inner">
                                                            <p>- Language arts</p>
                                                            <p>- Mathematics</p>
                                                            <p>- Science</p>
                                                            <p>- HandWriting</p>
                                                       </div>
                                                  </div>
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

     <!-- Add Income-->
     <div class="modal fade" id="addSubject">
          <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                         <h5 class="modal-title">Add a subject</h5>
                         <form action="#" class="mt-4">
                         <div class="row g-gs">
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="category">Category</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="category" placeholder="Category">
                                        </div>
                                   </div>
                              </div><!-- .col -->
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="invoiceId">Invoice ID</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="invoiceId" placeholder="Invoice ID">
                                        </div>
                                   </div>
                              </div><!-- .col -->
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label">Date</label>
                                        <div class="form-control-wrap">
                                             <div class="form-icon form-icon-right">
                                             <em class="icon ni ni-calendar"></em>
                                             </div>
                                             <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" placeholder="dd-mm-yyyy">
                                        </div>
                                   </div>
                              </div>
                              <!--col-->
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="incomehead">Income Head</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="incomehead" placeholder="Income Head">
                                        </div>
                                   </div>
                              </div><!-- .col -->
                              <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="form-label" for="amount">Amount</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="amount" placeholder="$100">
                                        </div>
                                   </div>
                              </div><!-- .col -->
                              <div class="col-12">
                                   <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                        <li>
                                             <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Income</a>
                                        </li>
                                        <li>
                                             <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         </form>
                    </div><!-- .modal-body -->
               </div><!-- .modal-content -->
          </div><!-- .modal-dialog -->
     </div><!-- .modal -->

     <!-- Add Income-->
     <div class="modal fade" id="addTeacher">
          <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                         <h5 class="modal-title">Add a teacher</h5>
                         <form action="#" class="mt-4">
                              <div class="row g-gs">
                                   <div class="col-md-12">
                                        <div class="parent">
                                             <label class="form-label">Teacher's name</label>
			                              <div class="custom-select select-search icon-imgs">
                                                  <select name="teacherName">
                                                       <option value="">Tearcher's Name</option>
                                                       <option value="rachel" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Rachel Green</option>
                                                       <option value="monica" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Monica Geller</option>
                                                       <option value="phoebe" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Phoebe Buffay</option>
                                                       <option value="joey" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Joey Tribbiani</option>
                                                       <option value="chandler" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Chandler Bing</option>
                                                       <option value="ross" data-img-url="https://pbs.twimg.com/profile_images/2654852680/87ee5ed912ea7364a29a380be9b22285.jpeg">Ross Geller</option>
                                                  </select>
                                             </div>
                                        </div>
                                   </div><!-- .col -->
                                   <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                             <li>
                                                  <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Teacher</a>
                                             </li>
                                             <li>
                                                  <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </form>
                    </div><!-- .modal-body -->
               </div><!-- .modal-content -->
          </div><!-- .modal-dialog -->
     </div><!-- .modal -->

     <!-- Add Income-->
     <div class="modal fade" id="addClasses">
          <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close"><em class="icon ni ni-cross-sm"></em></a>
                    <div class="modal-body modal-body-md">
                         <h5 class="modal-title">Add a Class</h5>
                         <form action="#" class="mt-4">
                              <div class="row g-gs">
                                   <div class="col-md-12">
                                        <div class="form-group">
                                             <label class="form-label" for="classname">Class Name</label>
                                             <div class="form-control-wrap">
                                                  <input type="text" class="form-control" id="classname" placeholder="Class Name">
                                             </div>
                                        </div>
                                   </div><!-- .col -->
                                   <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                             <li>
                                                  <a href="#" data-bs-dismiss="modal" class="btn btn-primary">Add Class</a>
                                             </li>
                                             <li>
                                                  <a href="#" data-bs-dismiss="modal" class="link link-light">Cancel</a>
                                             </li>
                                        </ul>
                                   </div>
                              </div>
                         </form>
                    </div><!-- .modal-body -->
               </div><!-- .modal-content -->
          </div><!-- .modal-dialog -->
     </div><!-- .modal -->
     
     <style>
          * {
               box-sizing: border-box;
               margin: 0;
               padding: 0;
          }

          .parent {
               width: 100%;
          }

          .custom-select {
               position: relative;
               padding: 0 !important;
               border: none !important;
          }

          .custom-select-options {
               background: #fff;
               position: absolute;
               top: 45px;
               left: 0;
               z-index: 10000;
               max-height: 0;
               overflow: hidden;
               border-radius: 5px;
               box-shadow: 0 3px 6px rgba(0, 0, 0, 0.06), 0 3px 6px rgba(0, 0, 0, 0.03);
               overflow: hidden;
          }

          .custom-select-options ul {
               max-height: 300px;
               overflow-y: auto;
          }

          .custom-select-options ul::-webkit-scrollbar-track {
               -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
               background-color: #F5F5F5;
          }

          .custom-select-options ul::-webkit-scrollbar {
               width: 5px;
               background-color: #F5F5F5;
          }

          .custom-select-options ul::-webkit-scrollbar-thumb {
               background: #55555582;
          }

          .custom-select-options li {
               position: relative;
               padding: 10px;
               border-bottom: 1px solid #ebebeb;
               cursor: pointer;
          }
          .custom-select-options li .custom-select-img-container {
               width: 20px;
               height: 20px;
               margin-right: 15px;
               display: inline-block;
               position: absolute;
               left: 10px;
               top: 50%;
               transform: translateY(-50%);
               overflow: hidden;
          }
          .custom-select-options li .custom-select-img-container img {
               width: 100%;
          }
          .custom-select-options li.is-highlighted {
               background: #3CA64F;
               color: #fff;
          }
          .custom-select-options li.is-highlighted:hover {
          color: #f0f0f0;
          }
          .custom-select-options li.label {
               color: #333;
          }
          .custom-select-options li:last-of-type {
          border-bottom: none;
          }
          .custom-select-options li:hover {
               color: #3CA64F;
          }
          .custom-select-options.is-active {
               transition: max-height 0.8s;
               max-height: 800px;
               font-size: 14px;
          }
          .custom-select-options.has-images li {
               padding-left: 35px;
          }

          .custom-select-active {
               background: #fff url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="#888" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 36.4 100" style="enable-background:new 0 0 36.4 80;" xml:space="preserve"><g><path d="M18.2,50.1c-0.6,0-1.1-0.2-1.5-0.6L0.6,33.4c-0.8-0.8-0.8-2.1,0-3c0.8-0.8,2.1-0.8,3,0l14.6,14.6l14.6-14.6   c0.8-0.8,2.1-0.8,3,0c0.8,0.8,0.8,2.1,0,3L19.7,49.5C19.3,49.9,18.7,50.1,18.2,50.1z"/></g></svg>') no-repeat;
               background-position: calc(100% - 15px) center;
               border-radius: 5px;
               height: 40px;
               padding-right: 45px;
               padding-left: 15px;
               border: 1px solid #ddd;
               line-height: 40px;
               cursor: pointer;
          }

          .custom-select-searchbox {
               background: #fff url('data:image/svg+xml;utf8, <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#888" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 100 125" xml:space="preserve"><path d="M79.1,76.2L63,60.1c7.9-9.4,7.5-23.4-1.3-32.2c-9.3-9.3-24.4-9.3-33.7,0c-9.3,9.3-9.3,24.4,0,33.7  c4.6,4.6,10.8,7,16.9,7c5.5,0,10.9-1.9,15.4-5.6l16.1,16.1L79.1,76.2z M30.8,58.8c-7.7-7.7-7.7-20.3,0-28c3.9-3.9,8.9-5.8,14-5.8  c5.1,0,10.2,1.9,14,5.8c7.7,7.7,7.7,20.3,0,28C51.1,66.5,38.5,66.5,30.8,58.8z"/></svg>') no-repeat;
               background-position: calc(100% - 10px) center;
               width: 100%;
               height: 40px;
               padding: 0 15px;
               border: 1px solid #ddd;
               border-radius: 5px 5px 0 0;
               outline: none;
               box-shadow: 0 1px 3px rgba(0, 0, 0, 0.06), 0 3px 6px rgba(0, 0, 0, 0.03);
          }
     </style>
     <script src="/assets/js/customSelect.js"></script>
     @endsection
