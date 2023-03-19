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
                                        <h3 class="nk-block-title page-title"><a href="/reminders" class="btn btn-icon btn-primary"><em class="icon ni ni-curve-down-left"></em></a> &nbsp; Calendar &nbsp;&nbsp;<span class="currentDate"></span></h3>
                                   </div><!-- .nk-block-head-content -->
                              </div><!-- .nk-block-between -->
                         </div><!-- .nk-block-head -->
                         <div class="nk-block">
                              <div class="card card-bordered">
                                   <div class="card-inner">
                                        <div class="row">
                                             <div class="col-md-2">
                                                  <div>
                                                       <div id="eventLeftCalendar"></div>
                                                       <input type="hidden" id="hidden_eventLeftCalendar">
                                                       <div id="accordion" class="accordion">
                                                            <div class="accordion-item">
                                                                 <a href="#" class="accordion-head p-l-r-0" data-toggle="collapse" data-target="#accordion-item-1">
                                                                      <h6 class="title">My calendars</h6>
                                                                      <span class="accordion-icon r-0"></span>
                                                                 </a>
                                                                 <div class="accordion-body collapse show" id="accordion-item-1" data-parent="#accordion">
                                                                      <div class="accordion-inner p-l-r-0" id="style-4">
                                                                           <div class="calendar-checkbox" >
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                                     <label class="custom-control-label" for="customCheck1">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                                                     <label class="custom-control-label" for="customCheck2">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                                     <label class="custom-control-label" for="customCheck3">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                                                     <label class="custom-control-label" for="customCheck4">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                                                     <label class="custom-control-label" for="customCheck5">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                                                     <label class="custom-control-label" for="customCheck7">Option Label</label>
                                                                                </div>
                                                                                <div class="custom-control custom-checkbox mb-1">
                                                                                     <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                                                     <label class="custom-control-label" for="customCheck8">Option Label</label>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                            </div>    
                                                            <div>
                                                                 <a href="#" class="btn btn-white btn-dim btn-outline-light w-100"><em class="d-none d-sm-inline icon ni ni-plus"></em><span>Create a label</span></a>
                                                            </div>
                                                       </div>  
                                                  </div>
                                                  
                                             </div>
                                             <div class="col-md-10">
                                                  <div id="calendar" class="nk-calendar"></div>
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

     <div class="modal fade" id="addEventPopup">
          <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title">Add Events</h5>
                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                         <em class="icon ni ni-cross"></em>
                         </a>
                    </div>
                    <div class="modal-body">
                         <form action="#" id="addEventForm" class="form-validate is-alter">
                         <div class="row gx-4 gy-3">
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label" for="event-title">Event Title</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="event-title" required>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="form-group">
                                        <label class="form-label">Start Date & Time</label>
                                        <div class="row gx-2">
                                             <div class="w-55">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-calendar"></em>
                                                  </div>
                                                  <input type="text" id="event-start-date" class="form-control date-picker" data-date-format="yyyy-mm-dd" required>
                                             </div>
                                             </div>
                                             <div class="w-45">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-clock"></em>
                                                  </div>
                                                  <input type="text" id="event-start-time" data-time-format="HH:mm:ss" class="form-control time-picker">
                                             </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-6">
                                   <div class="form-group">
                                        <label class="form-label">End Date & Time</label>
                                        <div class="row gx-2">
                                             <div class="w-55">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-calendar"></em>
                                                  </div>
                                                  <input type="text" id="event-end-date" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                             </div>
                                             </div>
                                             <div class="w-45">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-clock"></em>
                                                  </div>
                                                  <input type="text" id="event-end-time" data-time-format="HH:mm:ss" class="form-control time-picker">
                                             </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label" for="event-description">Event Description</label>
                                        <div class="form-control-wrap">
                                             <textarea class="form-control" id="event-description"></textarea>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label">Event Category</label>
                                        <div class="form-control-wrap">
                                             <select id="event-theme" class="select-calendar-theme form-control" data-search="on">
                                             <option value="event-primary">Company</option>
                                             <option value="event-success">Seminars </option>
                                             <option value="event-info">Conferences</option>
                                             <option value="event-warning">Meeting</option>
                                             <option value="event-danger">Business dinners</option>
                                             <option value="event-pink">Private</option>
                                             <option value="event-primary-dim">Auctions</option>
                                             <option value="event-success-dim">Networking events</option>
                                             <option value="event-info-dim">Product launches</option>
                                             <option value="event-warning-dim">Fundrising</option>
                                             <option value="event-danger-dim">Sponsored</option>
                                             <option value="event-pink-dim">Sports events</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <ul class="d-flex justify-content-between gx-4 mt-1">
                                        <li>
                                             <button id="addEvent" type="submit" class="btn btn-primary">Add Event</button>
                                        </li>
                                        <li>
                                             <button id="resetEvent" data-dismiss="modal" class="btn btn-danger btn-dim">Discard</button>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="editEventPopup">
          <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                    <div class="modal-header">
                         <h5 class="modal-title">Edit Event</h5>
                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                         <em class="icon ni ni-cross"></em>
                         </a>
                    </div>
                    <div class="modal-body">
                         <form action="#" id="editEventForm" class="form-validate is-alter">
                         <div class="row gx-4 gy-3">
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label" for="edit-event-title">Event Title</label>
                                        <div class="form-control-wrap">
                                             <input type="text" class="form-control" id="edit-event-title" required>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                   <div class="form-group">
                                        <label class="form-label">Start Date & Time</label>
                                        <div class="row gx-2">
                                             <div class="w-55">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-calendar"></em>
                                                  </div>
                                                  <input type="text" id="edit-event-start-date" class="form-control date-picker" data-date-format="yyyy-mm-dd" required>
                                             </div>
                                             </div>
                                             <div class="w-45">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-clock"></em>
                                                  </div>
                                                  <input type="text" id="edit-event-start-time" data-time-format="HH:mm:ss" class="form-control time-picker">
                                             </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-sm-6">
                                   <div class="form-group">
                                        <label class="form-label">End Date & Time</label>
                                        <div class="row gx-2">
                                             <div class="w-55">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-calendar"></em>
                                                  </div>
                                                  <input type="text" id="edit-event-end-date" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                             </div>
                                             </div>
                                             <div class="w-45">
                                             <div class="form-control-wrap">
                                                  <div class="form-icon form-icon-left">
                                                       <em class="icon ni ni-clock"></em>
                                                  </div>
                                                  <input type="text" id="edit-event-end-time" data-time-format="HH:mm:ss" class="form-control time-picker">
                                             </div>
                                             </div>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label" for="edit-event-description">Event Description</label>
                                        <div class="form-control-wrap">
                                             <textarea class="form-control" id="edit-event-description"></textarea>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <div class="form-group">
                                        <label class="form-label">Event Category</label>
                                        <div class="form-control-wrap">
                                             <select id="edit-event-theme" class="select-calendar-theme form-control" data-search="on">
                                             <option value="event-primary">Company</option>
                                             <option value="event-success">Seminars </option>
                                             <option value="event-info">Conferences</option>
                                             <option value="event-warning">Meeting</option>
                                             <option value="event-danger">Business dinners</option>
                                             <option value="event-pink">Private</option>
                                             <option value="event-primary-dim">Auctions</option>
                                             <option value="event-success-dim">Networking events</option>
                                             <option value="event-info-dim">Product launches</option>
                                             <option value="event-warning-dim">Fundrising</option>
                                             <option value="event-danger-dim">Sponsored</option>
                                             <option value="event-pink-dim">Sports events</option>
                                             </select>
                                        </div>
                                   </div>
                              </div>
                              <div class="col-12">
                                   <ul class="d-flex justify-content-between gx-4 mt-1">
                                        <li>
                                             <button id="updateEvent" type="submit" class="btn btn-primary">Update Event</button>
                                        </li>
                                        <li>
                                             <button data-dismiss="modal" data-toggle="modal" data-target="#deleteEventPopup" class="btn btn-danger btn-dim">Delete</button>
                                        </li>
                                   </ul>
                              </div>
                         </div>
                         </form>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="previewEventPopup">
          <div class="modal-dialog modal-md" role="document">
               <div class="modal-content">
                    <div id="preview-event-header" class="modal-header">
                         <h5 id="preview-event-title" class="modal-title">Placeholder Title</h5>
                         <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                         <em class="icon ni ni-cross"></em>
                         </a>
                    </div>
                    <div class="modal-body">
                         <div class="row gy-3 py-1">
                         <div class="col-sm-6">
                              <h6 class="overline-title">Start Time</h6>
                              <p id="preview-event-start"></p>
                         </div>
                         <div class="col-sm-6" id="preview-event-end-check">
                              <h6 class="overline-title">End Time</h6>
                              <p id="preview-event-end"></p>
                         </div>
                         <div class="col-sm-10" id="preview-event-description-check">
                              <h6 class="overline-title">Description</h6>
                              <p id="preview-event-description"></p>
                         </div>
                         </div>
                         <ul class="d-flex justify-content-between gx-4 mt-3">
                         <li>
                              <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-primary">Edit Event</button>
                         </li>
                         <li>
                              <button data-dismiss="modal" data-toggle="modal" data-target="#deleteEventPopup" class="btn btn-danger btn-dim">Delete</button>
                         </li>
                         </ul>
                    </div>
               </div>
          </div>
     </div>
     <div class="modal fade" id="deleteEventPopup">
          <div class="modal-dialog" role="document">
               <div class="modal-content">
                    <div class="modal-body modal-body-lg text-center">
                         <div class="nk-modal py-4">
                         <em class="nk-modal-icon icon icon-circle icon-circle-xxl ni ni-cross bg-danger"></em>
                         <h4 class="nk-modal-title">Are You Sure ?</h4>
                         <div class="nk-modal-text mt-n2">
                              <p class="text-soft">This event data will be removed permanently.</p>
                         </div>
                         <ul class="d-flex justify-content-center gx-4 mt-4">
                              <li>
                                   <button data-dismiss="modal" id="deleteEvent" class="btn btn-success">Yes, Delete it</button>
                              </li>
                              <li>
                                   <button data-dismiss="modal" data-toggle="modal" data-target="#editEventPopup" class="btn btn-danger btn-dim">Cancel</button>
                              </li>
                         </ul>
                         </div>
                    </div><!-- .modal-body -->
               </div>
          </div>
     </div>

     @endsection