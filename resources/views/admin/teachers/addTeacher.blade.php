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
                                        <h3 class="nk-block-title page-title">Add a Teacher</h3>
                                   </div><!-- .nk-block-head-content -->
                              </div><!-- .nk-block-between -->
                         </div><!-- .nk-block-head -->
                         <div class="nk-block">
                              <div class="card card-bordered">
                                   <div class="card-inner p-5">
                                        <div class="custom-container">
                                             <div class="custom-pages">
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'firstForm')" id="firstForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Personal Details</h5>
                                                                 </div>
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Title</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Select title" name="title" required> 
                                                                                     <option value="">Select title</option>
                                                                                     <option value="Mr">Mr</option>
                                                                                     <option value="Miss">Miss</option>
                                                                                     <option value="Mrs">Mrs</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="first-name">First Name</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="first-name" name="firstName" placeholder="First Name" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="middle-name">Middle Name</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="middle-name" name="middleName" placeholder="Middle Name" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="last-name">Last Name</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="last-name" name="lastName" placeholder="Last Name" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="preferred-name">Preferred Name</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="preferred-name" name="preferredName" placeholder="Preferred Name" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Gender</label>
                                                                           <div class="form-control-wrap">
                                                                           <select class="form-control" data-placeholder="Select Gender" name="gender" required>
                                                                                <option value="">Select Gender</option>
                                                                                <option value="male">Male</option>
                                                                                <option value="female">Female</option>
                                                                                <option value="other">Other</option>
                                                                           </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Date of Birth</label>
                                                                           <div class="form-control-wrap">
                                                                           <div class="form-icon form-icon-right">
                                                                                <em class="icon ni ni-calendar"></em>
                                                                           </div>
                                                                                <input type="text" class="form-control date-picker-alt" data-date-format="dd/mm/yyyy" name="birthday" placeholder="DD/MM/YYYY" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="phone-no">Phone Number</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="phone-no" name="phone" placeholder="Phone no" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Adddress</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="address" placeholder="Address" name="address" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Suburb</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="suburb" placeholder="Suburb" name="suburb" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">State</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Select state"  name="state" required> 
                                                                                     <option value="">Select state</option>
                                                                                     <option value="ACT">Australian Capital Territory</option>
                                                                                     <option value="NSW">New South Wales</option>
                                                                                     <option value="QUE">Queensland</option>
                                                                                     <option value="VIC">Victoria</option>
                                                                                     <option value="WAU">Western Australia</option>
                                                                                     <option value="SAU">South Australia</option>
                                                                                     <option value="TAS">Tasmania</option>
                                                                                     <option value="NTER">Northern Territory</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="postcode">Postcode</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="postcode" placeholder="Postcode" name="postcode" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="email">Email</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="email" class="form-control" id="email" placeholder="Email" name="email" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="teacherId">Teacher ID</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="teacherId" placeholder="ID" name="teacherId" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="customFileLabel">Upload Photo</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" accept="image/*" id="uploadPhoto" name="photo" required>
                                                                                     <label class="custom-file-label" for="uploadPhoto">Choose file</label>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-xxl-3 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Status</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Select status" required name="status"> 
                                                                                     <option value="">Select status</option>
                                                                                     <option value="1">Active</option>
                                                                                     <option value="0">Inactive</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-12">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Add Notes</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="quill-basic">
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <!--col-->
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" class="btn btn-outline-light" disabled>Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                            <!--row-->
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'secondForm')" id="secondForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Personal Details</h5>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Employment Status</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Employment Status" name="employmentStatus" required> 
                                                                                     <option value="">Select employment status</option>
                                                                                     <option value="NeverEmployed">Never employed or contracted by a school</option>
                                                                                     <option value="PreviouslyContracted">Previously contracted by a school</option>
                                                                                     <option value="PreviouslyEmployed">Previously employed by a school</option>
                                                                                     <option value="CurrentlyContracted">Currently contracted by a school</option>
                                                                                     <option value="CurrentlyEmployed">Currently employed by a school</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>

                                                                 <div class="col-xxl-8 col-md-4 fullWidth"></div>

                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Country of Citizenship</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-select form-control js-select2" data-search="on" placeholder="Country of Citizenship" name="countryName" required>
                                                                                     <option value="">select country</option>
                                                                                     @foreach($countryList as $key => $list)
                                                                                          <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                     @endforeach
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Proof of identification</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Proof of identification" name="identification" onchange="changeIdentification(event, this.value)" required> 
                                                                                     <option value="">Select proof of identification</option>
                                                                                     <option value="ANpassport">Australian or New Zealand passport</option>
                                                                                     <option value="AnotherPassport">Passport issue by the government of another country</option>
                                                                                     <option value="Identification">Another form of a photo identification issues by the Australian government</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4 fullWidth"></div>

                                                                 <div class="col-xxl-4 col-md-4 identification_upload">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Please upload a copy of your Australian or New Zealand passport. Justice of the Peace certified.*</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" name="ANPassportUpload" id="ANPassport" onchange="selectANPassportFile()" required>
                                                                                     <label class="custom-file-label" for="ANPassport">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedANPassportFileRemove" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>

                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="religion">Religion</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="religion" placeholder="Religion" name="religion" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>

                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Are you an aboriginal or Torres Strait Islander heritage?</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" name="aboriginal_torres" required> 
                                                                                     <option value="">Select proof of identification</option>
                                                                                     <option value="ANpassport">Australian or New Zealand passport</option>
                                                                                     <option value="AnotherPassport">Passport issue by the government of another country</option>
                                                                                     <option value="Identification">Another form of a photo identification issues by the Australian government</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4 fullWidth isShowDiv"></div>

                                                                 <div class="col-xxl-8 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="casual_work">If you are applying for casual work, list the schools you wish to seek employment with:</label>
                                                                           <div class="form-control-wrap">
                                                                                <textarea type="text" class="form-control" id="casual_work" name="casual_work" required></textarea>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'thirdForm')" id="thirdForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Languages</h5>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Is English your first language?</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="language_y" name="is_first_language" class="custom-control-input" value="1" checked>
                                                                                               <label class="custom-control-label" for="language_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="language_n" name="is_first_language" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="language_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4 languageTesting">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Have you undertaken the International English Language Testing System (IELTS) or International Second Language Proficiency Rating (ISLPR)?</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="languageTesting_y" name="languageTesting" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="languageTesting_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="languageTesting_n" name="languageTesting" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="languageTesting_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <label class="form-label">Please detail the languages you have a proficiency in.</label>
                                                                      <table class="table table-bordered">
                                                                           <thead class="thead-dark">
                                                                                <tr>
                                                                                     <th scope="col" class="w-4"></th>
                                                                                     <th scope="col" class="w-4">Language</th>
                                                                                     <th scope="col" class="w-4">Speaking proficiency</th>
                                                                                     <th scope="col" class="w-4">Reading proficiency</th>
                                                                                     <th scope="col" class="w-4">Writing proficiency</th>
                                                                                </tr>
                                                                           </thead>
                                                                           <tbody>
                                                                                @for($i = 0; $i <= 2; $i++)
                                                                                <tr>
                                                                                     <th class="w-4 vertical-middle">Language {{ $i + 1 }}:</th>
                                                                                     <td class="w-4">
                                                                                          <select class="form-select js-select2" name="language[{{$i}}]" onchange="changeLanguage({{ $i }}, this.value)" required>
                                                                                               <option value="">Select</option>
                                                                                               @foreach($languageList as $key => $list)
                                                                                                    <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                               @endforeach
                                                                                          </select>
                                                                                     </td>
                                                                                     <td class="w-4">
                                                                                          <select class="form-control select_speaking_{{$i}}" placeholder="Select" name="speaking[{{$i}}]" required disabled> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="none">None</option>
                                                                                               <option value="basic">Basic</option>
                                                                                               <option value="intermediate">Intermediate</option>
                                                                                               <option value="proficient">Proficient</option>
                                                                                               <option value="fluent">Fluent</option>
                                                                                          </select>
                                                                                     </td>
                                                                                     <td class="w-4">
                                                                                          <select class="form-control select_reading_{{$i}}" placeholder="Select" name="reading[{{$i}}]" required disabled> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="none">None</option>
                                                                                               <option value="basic">Basic</option>
                                                                                               <option value="intermediate">Intermediate</option>
                                                                                               <option value="proficient">Proficient</option>
                                                                                               <option value="fluent">Fluent</option>
                                                                                          </select>
                                                                                     </td>
                                                                                     <td class="w-4">
                                                                                          <select class="form-control select_writing_{{$i}}" placeholder="Select" name="writing[{{$i}}]" required disabled> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="none">None</option>
                                                                                               <option value="basic">Basic</option>
                                                                                               <option value="intermediate">Intermediate</option>
                                                                                               <option value="proficient">Proficient</option>
                                                                                               <option value="fluent">Fluent</option>
                                                                                          </select>
                                                                                     </td>
                                                                                </tr>
                                                                                @endfor
                                                                           </tbody>
                                                                      </table>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'forthForm')" id="forthForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Education</h5>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4 fileCount">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Please upload certified copies of your academic transcript(s) (preferred), degree or certificate.</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="educationFile_0" name="educationFile[]" onchange="selectEducationFile(0)" required>
                                                                                     <label class="custom-file-label" for="educationFile_0">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedEducationFileRemove_0" onclick="selectedEducationFileRemove(event, 0)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" onclick="educationAddMore(event)"><em class="icon ni ni-plus"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12" id="educationBeforeField">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary ml-3">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'tenthForm')" id="tenthForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Working with children check (WWCC)</h5>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <p>This position is child-related work and you are required to provide a paid employee Working with Children Check Number (WWCC).</p>
                                                                      <p>To apply for a WWCC visit the website</p>
                                                                      <a href="https://www.kidsguardian.nsw.gov.au/child-safe-organisations/working-with-children-check/applicant" class="underline" target="_blank">https://www.kidsguardian.nsw.gov.au/child-safe-organisations/working-with-children-check/applicant</a>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="WWCC_number">WWCC number:*</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="WWCC_number" name="WWCC_number" placeholder="WWCC number" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <label class="form-label">Expiry Date:*</label>
                                                                      <div class="row">
                                                                           <div class="col-4">
                                                                                <select class="form-control" name="expiryDateDay" required> 
                                                                                     <option value="">Select Day</option>
                                                                                     @for($x = 1; $x <= 31; $x++)
                                                                                     <option value="{{ $x }}">{{ $x }}</option>
                                                                                     @endfor
                                                                                </select>
                                                                           </div>
                                                                           <div class="col-4">
                                                                                <select class="form-control" name="expiryDateMonth" required> 
                                                                                     <option value="">Select Month</option>
                                                                                     <option value="jan">Jan</option>
                                                                                     <option value="feb">Feb</option>
                                                                                     <option value="mar">Mar</option>
                                                                                     <option value="apr">Apr</option>
                                                                                     <option value="may">May</option>
                                                                                     <option value="jun">Jun</option>
                                                                                     <option value="jul">Jul</option>
                                                                                     <option value="aug">Aug</option>
                                                                                     <option value="sep">Sep</option>
                                                                                     <option value="oct">Oct</option>
                                                                                     <option value="nov">Nov</option>
                                                                                     <option value="dec">Dec</option>
                                                                                </select>
                                                                           </div>
                                                                           <div class="col-4">
                                                                                <div class="form-control-wrap">
                                                                                     <input type="number" class="form-control" id="expiryDateYear" name="expiryDateYear" placeholder="Year" required>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary ml-3">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'eleventhForm')" id="eleventhForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Background Check</h5>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <p><strong>Instructions:</strong>  If you answer ‘yes’ to any of the following questions, you are obliged to provide comprehensive supporting details, including any relevant documentation in order to be considered for employment.</p>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Have you ever been convicted of any criminal offence, including any traffic offences or been the subject of an Apprehended Domestic or Personal Violence order?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="criminal_offence_y" name="criminal_offence" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="criminal_offence_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="criminal_offence_n" name="criminal_offence" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="criminal_offence_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group criminal_offence">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="criminal_offence_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="criminal_offence_upload" name="criminal_offence_upload" onchange="selectcriminal_offence_upload()" required>
                                                                                     <label class="custom-file-label" for="criminal_offence_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedcriminal_offence_uploadRemove_id" onclick="selectedcriminal_offence_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">During the last 5 years have you ever been the subject of disciplinary action and /or a process relating to your performance as a teacher by a school employer? *</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="disciplinary_action_y" name="disciplinary_action" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="disciplinary_action_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="disciplinary_action_n" name="disciplinary_action" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="disciplinary_action_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group disciplinary_action">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="disciplinary_action_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="disciplinary_action_upload" name="disciplinary_action_upload" onchange="selectdisciplinary_action_upload()" required>
                                                                                     <label class="custom-file-label" for="disciplinary_action_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selecteddisciplinary_action_uploadRemove_id" onclick="selecteddisciplinary_action_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">During your employment history have you ever been or are you currently the subject of allegations of misconduct in relation to a child (person under 18 years of age) whom you were responsible for providing education/care or other services to?(please be advised if you answer yes to this question you may still apply for employment with us)*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="allegations_misconduct_y" name="allegations_misconduct" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="allegations_misconduct_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="allegations_misconduct_n" name="allegations_misconduct" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="allegations_misconduct_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group allegations_misconduct">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="allegations_misconduct_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="allegations_misconduct_upload" name="allegations_misconduct_upload" onchange="selectallegations_misconduct_upload()" required>
                                                                                     <label class="custom-file-label" for="allegations_misconduct_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedallegations_misconduct_uploadRemove_id" onclick="selectedallegations_misconduct_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Do you have any illness, injury, chronic condition, psychological/emotional condition, or requirement for regular medication that may impact on you capacity to carry out the full requirements of the position for which you are applying, or that may be aggravated or worsened by the duties of the position?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="psychological_emotional_y" name="psychological_emotional" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="psychological_emotional_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="psychological_emotional_n" name="psychological_emotional" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="psychological_emotional_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group psychological_emotional pt-4">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="psychological_emotional_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="psychological_emotional_upload" name="psychological_emotional_upload" onchange="selectpsychological_emotional_upload()" required>
                                                                                     <label class="custom-file-label" for="psychological_emotional_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedpsychological_emotional_uploadRemove_id" onclick="selectedpsychological_emotional_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Do you have any significant vision, voice or hearing loss or impairment that may impact on your capacity to carry out the full requirements of the position for which you are applying, or that may be aggravated or worsened by the duties of the position?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="significant_vision_y" name="significant_vision" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="significant_vision_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="significant_vision_n" name="significant_vision" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="significant_vision_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group significant_vision">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="significant_vision_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="significant_vision_upload" name="significant_vision_upload" onchange="selectsignificant_vision_upload()" required>
                                                                                     <label class="custom-file-label" for="significant_vision_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedsignificant_vision_uploadRemove_id" onclick="selectedsignificant_vision_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Is there any other information regarding your health history that may need to be known when considering your application for employment?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="information_regarding_y" name="information_regarding" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="information_regarding_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="information_regarding_n" name="information_regarding" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="information_regarding_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group information_regarding pt-4">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="information_regarding_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="information_regarding_upload" name="information_regarding_upload" onchange="selectinformation_regarding_upload()" required>
                                                                                     <label class="custom-file-label" for="information_regarding_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedinformation_regarding_uploadRemove_id" onclick="selectedinformation_regarding_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Have you been dismissed from any previous employment for any reason?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="previous_employment_y" name="previous_employment" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="previous_employment_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="previous_employment_n" name="previous_employment" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="previous_employment_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group previous_employment">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="previous_employment_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="previous_employment_upload" name="previous_employment_upload" onchange="selectprevious_employment_upload()" required>
                                                                                     <label class="custom-file-label" for="previous_employment_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedprevious_employment_uploadRemove_id" onclick="selectedprevious_employment_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Have you ever been dismissed as medically unfit for employment or medically retired from employment?*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="employment_medically_y" name="employment_medically" class="custom-control-input" value="1">
                                                                                               <label class="custom-control-label" for="employment_medically_y">Yes</label>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <div class="custom-control custom-control-lg custom-radio">
                                                                                               <input type="radio" id="employment_medically_n" name="employment_medically" class="custom-control-input" value="0">
                                                                                               <label class="custom-control-label" for="employment_medically_n">No</label>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                      <div class="form-group employment_medically">
                                                                           <label class="form-label">Please provide details*</label>
                                                                           <div>
                                                                                <textarea class="form-control" name="employment_medically_detail" required></textarea>
                                                                           </div>
                                                                           <div class="form-control-wrap flex mt-3">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="employment_medically_upload" name="employment_medically_upload" onchange="selectemployment_medically_upload()" required>
                                                                                     <label class="custom-file-label" for="employment_medically_upload">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedemployment_medically_uploadRemove_id" onclick="selectedemployment_medically_uploadRemove(event)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary ml-3">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'twelvethForm')" id="twelvethForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Accreditation to Work, Teach and Lead</h5>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4 eccreditationWorkCount">
                                                                      <div class="form-group">
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" id="eccreditationWork_0" name="eccreditationWork[]" onchange="selectEccreditationWorkFile(0)" required>
                                                                                     <label class="custom-file-label" for="eccreditationWork_0">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedEccreditationWorkFileRemove_0" onclick="selectedEccreditationWorkFileRemove(event, 0)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" onclick="eccreditationWorkAddMore(event)"><em class="icon ni ni-plus"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12" id="eccreditationWorkBeforeField">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'fifth')" id="fifth">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>NSW Education Standards Authority (NESA)</h5>
                                                                      <p class="mt-5">All teachers working in NSW schools must be accredited with the NSW Education Standards Authority (NESA) to be eligible to teach in NSW.</p>
                                                                      <p>Refer to the NESA website for further information <a href="https://www.educationstandards.nsw.edu.au/wps/portal/nesa/home" class="underline" target="_blank">www.educationstandards.nsw.edu.au</a></p>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label" for="accountNumber">NESA Account Number</label>
                                                                           <div class="form-control-wrap">
                                                                                <input type="text" class="form-control" id="accountNumber" name="accountNumber" placeholder="NESA Account Number" required>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Accreditation Level</label>
                                                                           <div class="form-control-wrap">
                                                                                <select class="form-control" placeholder="Accreditation Level" name="accreditationLevel" required> 
                                                                                     <option value="">Select</option>
                                                                                     <option value="Conditional">Conditional</option>
                                                                                     <option value="Provisional">Provisional</option>
                                                                                     <option value="Proficient">Proficient</option>
                                                                                     <option value="Lead">Lead</option>
                                                                                </select>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'sixthForm')" id="sixthForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Employment Record</h5>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4 employmentRecordCount">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Upload certified copies of official Statement(s) of Service for ALL previous teaching positions. Statements of Service are required for determining teacher classification and salary.</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" class="custom-file-input form-control" id="employmentRecord_0" name="employmentRecord[]" onchange="selectEmploymentRecordFile(0)" required>
                                                                                     <label class="custom-file-label" for="employmentRecord_0">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedEmploymentRecordFileRemove_0" onclick="selectedEmploymentRecordFileRemove(event, 0)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" onclick="employmentRecordAddMore(event)"><em class="icon ni ni-plus"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12" id="employmentRecordBeforeField">
                                                                      <p> <strong>‘Statement of Service’</strong> means a statement from an Employer on official letterhead that contains an Employee’s start date, termination date, classification, whether service was full-time, part-time or casual, whether any leave without pay was taken, and in the case of a Teacher, whether any paid promotion positions were held.</p>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'seventhForm')" id="seventhForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Referee Details</h5>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <p class="mb-0">Referee 1 (Required): Current Principal or current Supervisor</p>
                                                                      <p class="mb-0">Referee 2 (Required): Most previous Principal or most previous Supervisor</p>
                                                                      <p>Referee 3 (Optional): Parish Priest, Minister or other significant person</p>
                                                                      <p><strong>If you do not have a current Principal/ Supervisor, please include two of your most recent Principals/ Supervisors. Please ensure to include an up-to-date email address for each referee.</strong></p>
                                                                 </div>
                                                                 @for($n = 1; $n <= 3; $n++)
                                                                      <div class="col-xxl-4 col-md-4 mb-3">
                                                                           <h6>Referee {{ $n }}</h6>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-first-name-{{ $n }}">First Name</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-first-name-{{ $n }}" name="referee-firstName-{{ $n }}" placeholder="First Name" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-last-name-{{ $n }}">Last Name</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-last-name-{{ $n }}" name="referee-lastName-{{ $n }}" placeholder="Last Name" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label">Type of referee</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="typeOfReferee-{{ $n }}" required> 
                                                                                          <option value="">Select employment status</option>
                                                                                          <option value="Principal">Principal</option>
                                                                                          <option value="Employer">Employer</option>
                                                                                          <option value="Minister">Minister</option>
                                                                                          <option value="Professional">Professional</option>
                                                                                          <option value="Other">Other</option>
                                                                                          <option value="SignificantPerson">Significant person</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-Organisation-{{ $n }}">Organisation</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-Organisation-{{ $n }}" name="referee-Organisation-{{ $n }}" placeholder="Organisation" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-position-{{ $n }}">Referee position:*</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-position-{{ $n }}" name="referee-position-{{ $n }}" placeholder="Referee position" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-homePhone-{{ $n }}">Home phone:*</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-homePhone-{{ $n }}" name="referee-homePhone-{{ $n }}" placeholder="Home Phone" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-mobilePhone-{{ $n }}">Mobile phone:*</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="text" class="form-control" id="referee-mobilePhone-{{ $n }}" name="referee-mobilePhone-{{ $n }}" placeholder="Mobile Phone" required>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group">
                                                                                <label class="form-label" for="referee-email-{{ $n }}">E-mail address:*</label>
                                                                                <div class="form-control-wrap">
                                                                                     <input type="email" class="form-control" id="referee-email-{{ $n }}" name="referee-email-{{ $n }}" placeholder="E-mail address" required>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 @endfor

                                                                 <div class="col-12">
                                                                      <h6>Please detail your education below, starting from your highest level of education:</h6>
                                                                 </div>

                                                                 @for($n = 1; $n <= 3; $n++)
                                                                      <div class="col-xxl-4 col-md-4">
                                                                           <h6>
                                                                                @if($n == 1)
                                                                                     <strong>Highest level of education</strong>
                                                                                @else 
                                                                                     <strong>Education {{ $n }}</strong>
                                                                                @endif
                                                                           </h6>
                                                                           <div class="form-group">
                                                                                <label class="form-label">Type of education:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="levelEducation_{{ $n }}" onchange="changeLevelEducation(event, this.value, {{ $n }})" required> 
                                                                                          <option value="">Select if relevant</option>
                                                                                          <option value="Secondary">Secondary</option>
                                                                                          <option value="Qualification">Technical / Trade / Apprenticeship / Professional Qualification</option>
                                                                                          <option value="Tertiary">Tertiary</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group qualification_{{$n}} tertiary_{{$n}}">
                                                                                <label class="form-label">Degree type:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="degreeType_{{ $n }}" required> 
                                                                                          <option value="">Select</option>
                                                                                          <option value="Advanced_diploma">Advanced diploma</option>
                                                                                          <option value="Associate_Degree">Associate Degree</option>
                                                                                          <option value="Associate_Diploma">Associate Diploma</option>
                                                                                          <option value="Bachelor_Degree">Bachelor Degree</option>
                                                                                          <option value="Bachelor_Degree_H">Bachelor Degree (Hons)</option>
                                                                                          <option value="Certificate">Certificate</option>
                                                                                          <option value="DCD">DCD</option>
                                                                                          <option value="Diploma">Diploma</option>
                                                                                          <option value="Doctorate">Doctorate</option>
                                                                                          <option value="Double_Degree">Double Degree</option>
                                                                                          <option value="Double_Degree_D">Double Degree (Double Hons)</option>
                                                                                          <option value="Double_Degree_H">Double Degree (Hons)</option>
                                                                                          <option value="Ed_D">Ed.D</option>
                                                                                          <option value="Graduate_Certificate">Graduate Certificate</option>
                                                                                          <option value="Graduate_Diploma">Graduate Diploma</option>
                                                                                          <option value="Higher_Diploma">Higher Diploma</option>
                                                                                          <option value="Higher_National_Diploma">Higher National Diploma</option>
                                                                                          <option value="Juris_Doctor">Juris Doctor</option>
                                                                                          <option value="Master">Master's</option>
                                                                                          <option value="MBA">MBA</option>
                                                                                          <option value="MFA">MFA</option>
                                                                                          <option value="PhD">PhD</option>
                                                                                          <option value="Post_Graduate_Diploma">Post Graduate Diploma</option>
                                                                                          <option value="Professional_Doctorate">Professional Doctorate</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group tertiary_{{$n}}">
                                                                                <label class="form-label">Discipline:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="discipline_{{ $n }}" onchange="changeDiscipline(event, this.value, {{ $n }})" required> 
                                                                                          <option value="">Select</option>
                                                                                          <option value="ACCOUNTING">Accounting</option>
                                                                                          <option value="Accoustics">Acoustics</option>
                                                                                          <option value="ACTUARIAL">Actuarial</option>
                                                                                          <option value="DEGREE_DISCIPLINE_ACUPUNCTURE">Acupuncture</option>
                                                                                          <option value="Adult_Education_&amp;_Training">Adult Education &amp; Training</option>
                                                                                          <option value="Advertising">Advertising</option>
                                                                                          <option value="AGRICULTURAL_ECONOMIC">Agricultural Economic</option>
                                                                                          <option value="AGRICULTURE">Agriculture</option>
                                                                                          <option value="American_Studies">American Studies</option>
                                                                                          <option value="Anthropology">Anthropology</option>
                                                                                          <option value="Applied_Chemistry">Applied Chemistry</option>
                                                                                          <option value="APPLIED_FINANCE">Applied Finance</option>
                                                                                          <option value="Applied_Mathematics">Applied Mathematics</option>
                                                                                          <option value="APPLIED_SCIENCE">Applied Science</option>
                                                                                          <option value="Archaeology">Archaeology</option>
                                                                                          <option value="ARCHITECTURE">Architecture</option>
                                                                                          <option value="ARTS">Arts</option>
                                                                                          <option value="Arts_Humanities">Arts/Humanities</option>
                                                                                          <option value="Asian_Studies">Asian Studies</option>
                                                                                          <option value="DEGREE_DISCIPLINE_AUDIOLOGY">Audiology</option>
                                                                                          <option value="Australian_Studies">Australian Studies</option>
                                                                                          <option value="Aviation">Aviation</option>
                                                                                          <option value="Banking_&amp;_Finance">Banking &amp; Finance</option>
                                                                                          <option value="Behavioural_Science">Behavioural Science</option>
                                                                                          <option value="Biochemistry">Biochemistry</option>
                                                                                          <option value="Bioengineering">Bioengineering</option>
                                                                                          <option value="BIOLOGICAL_SCIENCE">Biological Science</option>
                                                                                          <option value="Biological_Sciencies_Teaching">Biological Sciences Teaching</option>
                                                                                          <option value="Biology">Biology</option>
                                                                                          <option value="BIOMED_SCIENCE">Biomed Science</option>
                                                                                          <option value="Biophysics">Biophysics</option>
                                                                                          <option value="Botany">Botany</option>
                                                                                          <option value="BUSINESS">Business</option>
                                                                                          <option value="BUSINESS_ADMIN.">Business Admin.</option>
                                                                                          <option value="Business_Administration">Business Administration</option>
                                                                                          <option value="Business_Administration_and_Direction">Business Administration and Direction</option>
                                                                                          <option value="Business_Administration_Applied_Engineer">Business Administration Applied Engineer</option>
                                                                                          <option value="Business_Systems">Business Systems</option>
                                                                                          <option value="DEGREE_DISCIPLINE_CARE_FOR_THE_AGED">Care for the Aged</option>
                                                                                          <option value="DEGREE_DISCIPLINE_CARE_FOR_THE_DISABLED">Care for the Disabled</option>
                                                                                          <option value="Cartography">Cartography</option>
                                                                                          <option value="Chemical_Applied_Engineering">Chemical Applied Engineering</option>
                                                                                          <option value="Chemical_Engineering">Chemical Engineering</option>
                                                                                          <option value="Chemical_Laboratory_Assistant">Chemical Laboratory Assistant</option>
                                                                                          <option value="Chemistry">Chemistry</option>
                                                                                          <option value="Classical_Studies">Classical Studies</option>
                                                                                          <option value="Climate_Change">Climate Change</option>
                                                                                          <option value="COMMERCE">Commerce</option>
                                                                                          <option value="Commercial_Engineering">Commercial Engineering</option>
                                                                                          <option value="Communication_Science">Communication Science</option>
                                                                                          <option value="COMMUNICATIONS">Communications</option>
                                                                                          <option value="Company_Directors">Company Directors</option>
                                                                                          <option value="Computer_Applied_Engineering">Computer Applied Engineering</option>
                                                                                          <option value="COMPUTER_ENGINEERING">Computer Engineering</option>
                                                                                          <option value="COMPUTER_SCIENCE">Computer Science</option>
                                                                                          <option value="Computing_Information_Tech">Computing/Information Tech</option>
                                                                                          <option value="CONSTUCTION_MANGEMENT">Construction Management</option>
                                                                                          <option value="Control_of_Management_Applied_Engineerin">Control of Management Applied Engineering</option>
                                                                                          <option value="Cooking">Cooking</option>
                                                                                          <option value="CREATIVE_ARTS">Creative Arts</option>
                                                                                          <option value="Criminology">Criminology</option>
                                                                                          <option value="DEGREE_DISCIPLINE_DENTAL_ASSISTING">Dental Assisting</option>
                                                                                          <option value="DEGREE_DISCIPLINE_DENTAL_STUDIES">Dental Studies</option>
                                                                                          <option value="DEGREE_DISCIPLINE_DENTAL_TECHNOLOGY">Dental Technology</option>
                                                                                          <option value="DENTISTRY">Dentistry</option>
                                                                                          <option value="DESIGN">Design</option>
                                                                                          <option value="Development_Studies">Development Studies</option>
                                                                                          <option value="Drafting">Drafting</option>
                                                                                          <option value="Earth_Sciences">Earth Sciences</option>
                                                                                          <option value="Ecology">Ecology</option>
                                                                                          <option value="ECONOMICS">Economics</option>
                                                                                          <option value="ECONOMICS_(SOC.SCI)">Economics (Soc.Sci)</option>
                                                                                          <option value="Economics_Government">Economics-Government</option>
                                                                                          <option value="EDUCATION">Education</option>
                                                                                          <option value="Education_&amp;_Teaching">Education &amp; Teaching</option>
                                                                                          <option value="DEGREE_DISCIPLINE_EDUCATIONAL_LEADERSHIP">Educational Leadership</option>
                                                                                          <option value="Education_Business">Education-Business</option>
                                                                                          <option value="Electrical_Applied_Engineering">Electrical Applied Engineering</option>
                                                                                          <option value="DEGREE_DISCIPLINE_ELECTRICAL_FITTING_ELECTRICAL_MECHANICS">Electrical Fitting, Electrical Mechanics</option>
                                                                                          <option value="Electronic_Applied_Engineering">Electronic Applied Engineering</option>
                                                                                          <option value="Energy">Energy</option>
                                                                                          <option value="ENGINEERING">Engineering</option>
                                                                                          <option value="Engineering___Fuels_and_Energy">Engineering - Fuels and Energy</option>
                                                                                          <option value="Engineering_Aeronaut_Aerospace">Engineering-Aeronaut/Aerospace</option>
                                                                                          <option value="Engineering_Agriculture">Engineering-Agriculture</option>
                                                                                          <option value="Engineering_Ceramic">Engineering-Ceramic</option>
                                                                                          <option value="Engineering_Chemical">Engineering-Chemical</option>
                                                                                          <option value="Engineering_Civil">Engineering-Civil</option>
                                                                                          <option value="Engineering_Computer">Engineering-Computer</option>
                                                                                          <option value="Engineering_Electrical">Engineering-Electrical</option>
                                                                                          <option value="Engineering_Electronic">Engineering-Electronic</option>
                                                                                          <option value="Engineering_Environmental">Engineering-Environmental</option>
                                                                                          <option value="Engineering_Geographic">Engineering-Geographic</option>
                                                                                          <option value="Engineering_Geological">Engineering-Geological</option>
                                                                                          <option value="Engineering_Geophysical">Engineering-Geophysical</option>
                                                                                          <option value="Engineering_Industrial">Engineering-Industrial</option>
                                                                                          <option value="Engineering_Industrial_Electriconics">Engineering-Industrial Electronics</option>
                                                                                          <option value="Engineering_Management">Engineering-Management</option>
                                                                                          <option value="Engineering_Marine">Engineering-Marine</option>
                                                                                          <option value="Engineering_Materials">Engineering-Materials</option>
                                                                                          <option value="Engineering_Mechanical">Engineering-Mechanical</option>
                                                                                          <option value="Engineering_Metallurgical">Engineering-Metallurgical</option>
                                                                                          <option value="Engineering_Mineral">Engineering-Mineral</option>
                                                                                          <option value="Engineering_Mining">Engineering-Mining</option>
                                                                                          <option value="Engineering_Ocean_Marine">Engineering-Ocean/Marine</option>
                                                                                          <option value="Engineering_Petroleum">Engineering-Petroleum</option>
                                                                                          <option value="Engineering_Science">Engineering-Science</option>
                                                                                          <option value="Engineering_Structural">Engineering-Structural</option>
                                                                                          <option value="English">English</option>
                                                                                          <option value="ENVIRONMENT">Environment</option>
                                                                                          <option value="Environmental_Applied_Engineering">Environmental Applied Engineering</option>
                                                                                          <option value="Environmental_Science_Health">Environmental Science/Health</option>
                                                                                          <option value="DEGREE_DISCIPLINE_EPIDEMIOLOGY">Epidemiology</option>
                                                                                          <option value="European_Studies">European Studies</option>
                                                                                          <option value="Extractive_Metallurgical_Applied_Enginne">Extractive Metallurgical Applied Engineering</option>
                                                                                          <option value="Extractive_Metallurgy">Extractive Metallurgy</option>
                                                                                          <option value="FINANCE">Finance</option>
                                                                                          <option value="Finance_and_Investment">Finance and Investment</option>
                                                                                          <option value="DEGREE_DISCIPLINE_FINE_ARTS">Fine Arts</option>
                                                                                          <option value="First_Aid_Studies">First Aid Studies</option>
                                                                                          <option value="Fishing_Applied_Engineering">Fishing Applied Engineering</option>
                                                                                          <option value="Geochemistry">Geochemistry</option>
                                                                                          <option value="Geographical_Measurements_Applied_Engine">Geographical Measurements Applied Engine</option>
                                                                                          <option value="Geographical_Measurements_Engineering">Geographical Measurements Engineering</option>
                                                                                          <option value="Geography">Geography</option>
                                                                                          <option value="Geology_Geoscience">Geology/Geoscience</option>
                                                                                          <option value="Geology_Economic">Geology-Economic</option>
                                                                                          <option value="Geology_Marine">Geology-Marine</option>
                                                                                          <option value="Geophysical_Exploration">Geophysical Exploration</option>
                                                                                          <option value="Geophysics">Geophysics</option>
                                                                                          <option value="Geothermal_Energy">Geothermal Energy</option>
                                                                                          <option value="DEGREE_DISCIPLINE_GRAPHIC_ARTS_AND_DESIGN_STUDIES">Graphic Arts and Design Studies</option>
                                                                                          <option value="Health_Administration">Health Administration</option>
                                                                                          <option value="Health_Counselling">Health Counselling</option>
                                                                                          <option value="History">History</option>
                                                                                          <option value="Hospitality_Management">Hospitality Management</option>
                                                                                          <option value="Human_Movement">Human Movement</option>
                                                                                          <option value="Human_Resources_Management">Human Resources Management</option>
                                                                                          <option value="Hydrology">Hydrology</option>
                                                                                          <option value="Hygiene">Hygiene</option>
                                                                                          <option value="DEGREE_DISCIPLINE_INDIGENOUS_HEALTH">Indigenous Health</option>
                                                                                          <option value="Industrial_Administration">Industrial Administration</option>
                                                                                          <option value="Industrial_Applied_Engineering">Industrial Applied Engineering</option>
                                                                                          <option value="Industrial_Civil_Engineering">Industrial Civil Engineering</option>
                                                                                          <option value="Industrial_Hygiene">Industrial Hygiene</option>
                                                                                          <option value="Industrial_Law">Industrial Law</option>
                                                                                          <option value="Industrial_Management">Industrial Management</option>
                                                                                          <option value="Industrial_Relations">Industrial Relations</option>
                                                                                          <option value="Industrial_Statistics">Industrial Statistics</option>
                                                                                          <option value="Industry_Economics">Industry Economics</option>
                                                                                          <option value="INFO._TECHNOLOGY">Info. Technology</option>
                                                                                          <option value="Information_Management">Information Management</option>
                                                                                          <option value="Information_Systems">Information Systems</option>
                                                                                          <option value="Insurance">Insurance</option>
                                                                                          <option value="Intellectual_Property_Law">Intellectual Property Law</option>
                                                                                          <option value="Interior_Design">Interior Design</option>
                                                                                          <option value="INTERNATIONAL_BUS.">International Bus.</option>
                                                                                          <option value="International_Business_Relations">International Business Relations</option>
                                                                                          <option value="International_Development">International Development</option>
                                                                                          <option value="International_Public_Policy">International Public Policy</option>
                                                                                          <option value="INTERNATIONAL_STUDIES">International Studies</option>
                                                                                          <option value="International_Trade">International Trade</option>
                                                                                          <option value="Journalism">Journalism</option>
                                                                                          <option value="Jurisprudence">Jurisprudence</option>
                                                                                          <option value="Labour_&amp;_Industry">Labour &amp; Industry</option>
                                                                                          <option value="LAND_ECONOMICS">Land Economics</option>
                                                                                          <option value="Languages">Languages</option>
                                                                                          <option value="Languages_Interpreter">Languages Interpreter</option>
                                                                                          <option value="LAW">Law</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_BUSINESS_AND_COMMERCIAL">Law - Business and Commercial</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_CONSTITUTIONAL">Law - Constitutional</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_CRIMINAL">Law - Criminal</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_FAMILY">Law - Family</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_INTERNATIONAL">Law - International</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LAW_TAXATION">Law - Taxation</option>
                                                                                          <option value="Law_Legal_Studies">Law/Legal Studies</option>
                                                                                          <option value="DEGREE_DISCIPLINE_LEGAL_PRACTICE">Legal Practice</option>
                                                                                          <option value="Liberal_Arts">Liberal Arts</option>
                                                                                          <option value="LIBERAL_STUDIES">Liberal Studies</option>
                                                                                          <option value="Librarianship">Librarianship</option>
                                                                                          <option value="Literature">Literature</option>
                                                                                          <option value="Logistics">Logistics</option>
                                                                                          <option value="Maintenance">Maintenance</option>
                                                                                          <option value="Management">Management</option>
                                                                                          <option value="Management_Administration">Management/Administration</option>
                                                                                          <option value="Marine_Biology">Marine Biology</option>
                                                                                          <option value="Marine_Technology">Marine Technology</option>
                                                                                          <option value="Maritime_Studies">Maritime Studies</option>
                                                                                          <option value="Marketing">Marketing</option>
                                                                                          <option value="Master_in_Business_Administration">Master in Business Administration</option>
                                                                                          <option value="Material_Sciences">Material Sciences</option>
                                                                                          <option value="Materials_Science">Materials Science</option>
                                                                                          <option value="Mathematics">Mathematics</option>
                                                                                          <option value="MATHS">Maths</option>
                                                                                          <option value="Mechanical_Applied_Engineering">Mechanical Applied Engineering</option>
                                                                                          <option value="Mechanical_Design">Mechanical Design</option>
                                                                                          <option value="Media_Relations">Media Relations</option>
                                                                                          <option value="Medical_Sciences">Medical Sciences</option>
                                                                                          <option value="MEDICINE">Medicine</option>
                                                                                          <option value="DEGREE_DISCIPLINE_MEDICINE_GENERAL_MEDICINE">Medicine - General Medicine</option>
                                                                                          <option value="DEGREE_DISCIPLINE_MEDICINE_GENERAL_PRACTICE">Medicine - General Practice</option>
                                                                                          <option value="Metallurgical_Electronic">Metallurgical Electronic</option>
                                                                                          <option value="Metallurgy_Mineral_Processing">Metallurgy/Mineral Processing</option>
                                                                                          <option value="Microbiology">Microbiology</option>
                                                                                          <option value="DEGREE_DISCIPLINE_MIDWIFERY">Midwifery</option>
                                                                                          <option value="Military_Studies">Military Studies</option>
                                                                                          <option value="Mining_Applied_Engineering">Mining Applied Engineering</option>
                                                                                          <option value="Mining_Rehabilitation">Mining Rehabilitation</option>
                                                                                          <option value="DEGREE_DISCIPLINE_MUSIC">Music</option>
                                                                                          <option value="DEGREE_DISCIPLINE_MUSIC_ARTS">Music Arts</option>
                                                                                          <option value="Natural_Science">Natural Science</option>
                                                                                          <option value="NURSING">Nursing</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_AGED_CARE">Nursing - Aged Care</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_COMMUNITY">Nursing - Community</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_CRITICAL_CARE">Nursing - Critical Care</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_ENROLLED">Nursing - Enrolled</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_MENTAL_HEALTH">Nursing - Mental Health</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_PALLIATIVE_CARE">Nursing - Palliative Care</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NURSING_PRACTICE">Nursing Practice</option>
                                                                                          <option value="DEGREE_DISCIPLINE_NUTRITION_AND_DIETETICS">Nutrition and Dietetics</option>
                                                                                          <option value="OCCUPATIONAL_HEALTH_SAFETY">Occupational Health and Safety</option>
                                                                                          <option value="Occupational_Health_Hygiene">Occupational Health/Hygiene</option>
                                                                                          <option value="Occupational_Therapy">Occupational Therapy</option>
                                                                                          <option value="OENOLOGY">Oenology</option>
                                                                                          <option value="Operational_Research">Operational Research</option>
                                                                                          <option value="Operations">Operations</option>
                                                                                          <option value="DEGREE_DISCIPLINE_OSTEOPATHIC_MEDICINE">Osteopathic Medicine</option>
                                                                                          <option value="OTHER">Other</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PARAMEDIC">Paramedic</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PATHOLOGY">Pathology</option>
                                                                                          <option value="Performing_Arts">Performing Arts</option>
                                                                                          <option value="Personnel">Personnel</option>
                                                                                          <option value="Petroleum_Land_Management">Petroleum Land Management</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PHARMACOLOGY">Pharmacology</option>
                                                                                          <option value="PHARMACY">Pharmacy</option>
                                                                                          <option value="Philosophy">Philosophy</option>
                                                                                          <option value="Physical_Chemistry">Physical Chemistry</option>
                                                                                          <option value="Physical_Sciences">Physical Sciences</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PHYSICAL_THERAPY">Physical Therapy</option>
                                                                                          <option value="Physics">Physics</option>
                                                                                          <option value="Physiotherapy">Physiotherapy</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PODIATRY">Podiatry</option>
                                                                                          <option value="POLITICAL_SCIENCE">Political Science</option>
                                                                                          <option value="Politics">Politics</option>
                                                                                          <option value="Projects_Evaluation_and_Management">Projects Evaluation and Management</option>
                                                                                          <option value="PSYCHOLOGY">Psychology</option>
                                                                                          <option value="Public_Administration">Public Administration</option>
                                                                                          <option value="DEGREE_DISCIPLINE_PUBLIC_HEALTH">Public Health</option>
                                                                                          <option value="Public_Relations_Communication">Public Relations/Communication</option>
                                                                                          <option value="Pyrometallurgy">Pyrometallurgy</option>
                                                                                          <option value="DEGREE_DISCIPLINE_RADIOGRAPHY">Radiography</option>
                                                                                          <option value="Rehabilitation_Services">Rehabilitation Services</option>
                                                                                          <option value="DEGREE_DISCIPLINE_RELIGIOUS_EDUCATION">Religious Education</option>
                                                                                          <option value="Resource_Management">Resource Management</option>
                                                                                          <option value="RESPIRATORY_CARE">Respiratory Care</option>
                                                                                          <option value="Retail_Merchandising">Retail Merchandising</option>
                                                                                          <option value="Risk_Prevention">Risk Prevention</option>
                                                                                          <option value="Risk_Prevention_Engineering">Risk Prevention Engineering</option>
                                                                                          <option value="Safety">Safety</option>
                                                                                          <option value="SCIENCE">Science</option>
                                                                                          <option value="DEGREE_DISCIPLINE_SCIENCES">Sciences</option>
                                                                                          <option value="Secretarial_Services">Secretarial Services</option>
                                                                                          <option value="Social_Communication">Social Communication</option>
                                                                                          <option value="SOCIAL_SCIENCE">Social Science</option>
                                                                                          <option value="Social_Services">Social Services</option>
                                                                                          <option value="Social_Welfare">Social Welfare</option>
                                                                                          <option value="DEGREE_DISCIPLINE_SOCIAL_WORK">Social Work</option>
                                                                                          <option value="SOCIOLOGY">Sociology</option>
                                                                                          <option value="Soil_Science">Soil Science</option>
                                                                                          <option value="DEGREE_DISCIPLINE_SPEECH_PATHOLOGY">Speech Pathology</option>
                                                                                          <option value="SPORT_&amp;_LEISURE">Sport &amp; Leisure</option>
                                                                                          <option value="Sports_Science">Sports Science</option>
                                                                                          <option value="Statistics">Statistics</option>
                                                                                          <option value="Strategic_Management">Strategic Management</option>
                                                                                          <option value="Superannuation">Superannuation</option>
                                                                                          <option value="Superannuation__Management">Superannuation- Management</option>
                                                                                          <option value="Superannuation__Taxation">Superannuation- Taxation</option>
                                                                                          <option value="Supply_Purchasing">Supply/Purchasing</option>
                                                                                          <option value="SURVEYING">Surveying</option>
                                                                                          <option value="Surveying_Geomatics">Surveying/Geomatics</option>
                                                                                          <option value="SUSTAINABILITY">Sustainability</option>
                                                                                          <option value="Taxation">Taxation</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION">Teacher Education</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_EARLY_CHILDHOOD">Teacher Education: Early Childhood</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_HIGHER_EDUCATION">Teacher Education: Higher Education</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_PRIMARY">Teacher Education: Primary</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_SECONDARY">Teacher Education: Secondary</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_SPECIAL_EDUCATION">Teacher Education: Special Education</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_EDUCATION_VOCATIONAL_EDUCATION_AND_TRAINING">Teacher Education: Vocational Education and Training</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHER_LIBRARIANSHIP">Teacher-Librarianship</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHING_ENGLISH">Teaching - English</option>
                                                                                          <option value="DEGREE_DISCIPLINE_TEACHING_ESL">Teaching - ESL</option>
                                                                                          <option value="Technology">Technology</option>
                                                                                          <option value="THEOLOGY">Theology</option>
                                                                                          <option value="TOURISM">Tourism</option>
                                                                                          <option value="Transport">Transport</option>
                                                                                          <option value="Underground_Mining">Underground Mining</option>
                                                                                          <option value="URBAN_PLANNING">Urban Planning</option>
                                                                                          <option value="Valuation_&amp;_Real_Estate">Valuation &amp; Real Estate</option>
                                                                                          <option value="DEGREE_DISCIPLINE_VETERINARY_ASSISTING">Veterinary Assisting</option>
                                                                                          <option value="DEGREE_DISCIPLINE_VETERINARY_SCIENCE">Veterinary Science</option>
                                                                                          <option value="VITICULTURE">Viticulture</option>
                                                                                          <option value="Zoology">Zoology</option>

                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           
                                                                           <div class="tertiary_{{$n}} mb-2">
                                                                                <label class="form-label">Major:</label>
                                                                                <div class="form-group flex">
                                                                                     <div class="form-control-wrap fullWidth">
                                                                                          <input type="text" class="form-control" name="Major_{{ $n }}" placeholder="Major" required>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="tertiary_{{$n}} mb-2">
                                                                                <label class="form-label">Second major:</label>
                                                                                <div class="form-group flex">
                                                                                     <div class="form-control-wrap fullWidth">
                                                                                          <input type="text" class="form-control" name="SecondMajor_{{ $n }}" placeholder="Second Major" required>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group tertiary_{{$n}}">
                                                                                <label class="form-label">Additional majors:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" name="Additional_majors_{{ $n }}" placeholder="Additional Major" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group secondary_{{$n}} qualification_{{$n}} tertiary_{{$n}}">
                                                                                <label class="form-label">Country:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="Country_{{ $n }}" required> 
                                                                                          <option value="">Select</option>
                                                                                          @foreach($countryList as $key => $list)
                                                                                               <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                          @endforeach
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group secondary_{{$n}} qualification_{{$n}} tertiary_{{$n}}">
                                                                                <label class="form-label">Institution:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" name="Institution_{{ $n }}" placeholder="Institution" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group secondary_{{$n}}">
                                                                                <label class="form-label">Year level:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="Year_level_{{ $n }}" required> 
                                                                                          <option value="">Select</option>
                                                                                          <option value="Secondary_Year_9">Secondary - Year 9</option>
                                                                                          <option value="Secondary_Year_10">Secondary - Year 10</option>
                                                                                          <option value="Secondary_Year_11">Secondary - Year 11</option>
                                                                                          <option value="Secondary_Year_12">Secondary - Year 12</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="qualification_{{$n}} mb-2">
                                                                                <label class="form-label">Certificate type:</label>
                                                                                <div class="form-group flex">
                                                                                     <div class="form-control-wrap fullWidth">
                                                                                          <input type="text" class="form-control" name="Certificate_type_{{ $n }}" placeholder="Certificate type" required>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button type="button" class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group secondary_{{$n}} qualification_{{$n}} tertiary_{{$n}}">
                                                                                <label class="form-label">Education status:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="Education_status_{{ $n }}" required> 
                                                                                          <option value="">Select</option>
                                                                                          <option value="Dissertation">All But Dissertation</option>
                                                                                          <option value="Completed">Completed</option>
                                                                                          <option value="Inprogress">In progress</option>
                                                                                          <option value="Incomplete">Incomplete</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group tertiary_{{$n}}">
                                                                                <label class="form-label">Current study load:</label>
                                                                                <div class="form-control-wrap">
                                                                                     <select class="form-control" name="Current_study_load_{{ $n }}" required> 
                                                                                          <option value="">Select</option>
                                                                                          <option value="Full_time">Full time</option>
                                                                                          <option value="Part_time">Part time</option>
                                                                                     </select>
                                                                                </div>
                                                                           </div>
                                                                           <div class="form-group secondary_{{$n}} qualification_{{$n}} tertiary_{{$n}}">
                                                                                <label class="form-label">Year finished (actual or anticipated):</label>
                                                                                <div class="form-control-wrap">
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" name="Year_finished_{{ $n }}" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 @endfor

                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'eighthForm')" id="eighthForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Document uploads</h5>
                                                                 </div>
                                                                 <div class="col-12">
                                                                      <p class="mb-1">Your current resume must be uploaded in order to submit this application. Documents must be uploaded in the following formats: .DOC, .DOCX, .PDF, .JPEG.</p>
                                                                      <p class="mb-1">To upload a file:</p>
                                                                      <p class="mb-1">1. Click 'Browse...' and select the file from your computer.</p>
                                                                      <p class="mb-1">2. Click 'Upload' to send the resume to us, this may take a few minutes depending on the speed of your internet connection.</p>
                                                                      <p>To delete a file that you have uploaded, click 'Delete'.</p>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Please upload your resume.</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" name="resume" id="resume" onchange="selectResumeFile()" required>
                                                                                     <label class="custom-file-label" for="resume">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedResumeFileRemove" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-6 col-md-4">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Please upload your cover letter.</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" id="coverLetter" name="coverLetter" onchange="selectCoverLetterFile()" required>
                                                                                     <label class="custom-file-label" for="coverLetter">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedCoverLetterFileRemove" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>

                                                                 <div class="col-xxl-6 col-md-4 supportingDocCount">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Please upload any other supporting documents here.</label>
                                                                           <div class="form-control-wrap flex">
                                                                                <div class="custom-file">
                                                                                     <input type="file" accept=".doc,.docx,.pdf,.jpeg" class="custom-file-input form-control" id="supportingDoc_0" name="supportingDoc[]" onchange="selectSupportingDocFile(0)" required>
                                                                                     <label class="custom-file-label" for="supportingDoc_0">Choose file</label>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" id="selectedSupportingDocFileRemove_0" onclick="selectedSupportingDocFileRemove(event, 0)" disabled><em class="icon ni ni-property-remove"></em></button>
                                                                                </div>
                                                                                <div class="ml-2">
                                                                                     <button class="btn btn-icon btn-white btn-outline-light" onclick="SupportingDocAddMore(event)"><em class="icon ni ni-plus"></em></button>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 
                                                                 <div class="col-12" id="supportingDocBeforeField">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Next</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                                  <div class="custom-page">
                                                       <form action="#" class="form-validate" onsubmit="emptyValidation(event, 'ninthForm')" id="ninthForm">
                                                            <div class="row gy-4">
                                                                 <div class="col-md-12">
                                                                      <h5>Declaration</h5>
                                                                 </div>
                                                                 <div class="col-xxl-12 col-md-4 mb-5">
                                                                      <div class="form-group">
                                                                           <label class="form-label">Applicant declaration*</label>
                                                                           <div class="form-control-wrap">
                                                                                <div class="custom-control custom-control-md custom-radio">
                                                                                     <input type="radio" id="accpetTerm" name="accpetTerm" class="custom-control-input" value="1">
                                                                                     <label class="custom-control-label" for="accpetTerm">I have read, understood and accept the terms and conditions outlined in the statements above.</label>
                                                                                </div>
                                                                           </div>
                                                                      </div>
                                                                 </div>
                                                                 <div class="col-12 mt-2">
                                                                      <h6>Please detail your employment experience below:</h6>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="row">
                                                                           <div class="col-12">
                                                                                <h6><strong>Current/most recent employer</strong></h6>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2">
                                                                                <label class="form-label mt-3">Employment status:*</label>
                                                                                <div class="row">
                                                                                     <div class="col-10">
                                                                                          <div class="form-group fullWidth">
                                                                                               <div class="form-control-wrap">
                                                                                                    <select class="form-control" placeholder="Employment Status" name="currentEmploy" onchange="changeRecentEmploer(event, this.value)" required> 
                                                                                                         <option value="">Select employment status</option>
                                                                                                         <option value="CurrentlyEmployed">Currently employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                         <option value="NeverEmployed">Never employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                         <option value="PreviouslyEmployed">Previously employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                    </select>
                                                                                               </div>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-2">
                                                                                          <div class="ml-2">
                                                                                               <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-property-remove"></em></button>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>

                                                                           <!-- same form -->
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation group:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C_occupation_group" required> 
                                                                                               <option value="">Select an occupation group</option>
                                                                                               <option value="Clerical">Clerical & Admin</option>
                                                                                               <option value="Labourers">Labourers</option>
                                                                                               <option value="Managers">Managers</option>
                                                                                               <option value="Operators">Operators & Drivers</option>
                                                                                               <option value="Professionals">Professionals</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Service">Service & Community</option>
                                                                                               <option value="Technicians">Technicians & Trades</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C_occupation" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="BusDriver">Bus Driver</option>
                                                                                               <option value="Chauffeur">Chauffeur</option>
                                                                                               <option value="Crane">Crane, Hoist or Lift Operator</option>
                                                                                               <option value="DeliveryDriver">Delivery Driver</option>
                                                                                               <option value="Driller">Driller</option>
                                                                                               <option value="Earthmoving">Earthmoving Plant Operator</option>
                                                                                               <option value="ForkliftDriver">Forklift Driver</option>
                                                                                               <option value="Machine">Machine Operator</option>
                                                                                               <option value="Miner">Miner</option>
                                                                                               <option value="ShotFirer">Shot Firer</option>
                                                                                               <option value="Storesperson">Storesperson</option>
                                                                                               <option value="TaxiDriver">Taxi Driver</option>
                                                                                               <option value="TrainController">Train Controller</option>
                                                                                               <option value="TrainDriver">Train Driver</option>
                                                                                               <option value="TramDriver">Tram Driver</option>
                                                                                               <option value="TruckDriver">Truck Driver</option>
                                                                                               <option value="WasteWater">Waste Water or Water Plant Operator</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C_jobTitle">Your job title:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C_jobTitle" name="C_jobTitle" placeholder="job title" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C_responsibilities">Your responsibilities:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C_responsibilities" name="C_responsibilities" placeholder="Your responsibilities" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <label class="form-label">Date started with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C_startedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C_startedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_PreviouslyEmployed">
                                                                                <label class="form-label">Date ended with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C_endedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C_endedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <label class="form-label mt-3">Company name:</label>
                                                                                <div class="flex">
                                                                                     <div class="form-group fullWidth">
                                                                                          <div class="form-control-wrap">
                                                                                               <input type="text" class="form-control" id="C_companyName" name="C_companyName" placeholder="Company Name" required>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Company industry:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" data-search="on" name="C_Companyindustry" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="Accounting">Accounting</option>
                                                                                               <option value="Administration">Administration</option>
                                                                                               <option value="AgricultureRural">Agriculture & Rural</option>
                                                                                               <option value="Airlines">Airlines</option>
                                                                                               <option value="ArchitectureInterior">Architecture & interior design</option>
                                                                                               <option value="Arts_entertainment">Arts, entertainment & sport</option>
                                                                                               <option value="Automotive">Automotive</option>
                                                                                               <option value="Banking">Banking</option>
                                                                                               <option value="Beauty_Fashion">Beauty & Fashion</option>
                                                                                               <option value="Building_Products">Building Products & Construction</option>
                                                                                               <option value="Call_Centres">Call Centres</option>
                                                                                               <option value="Chemical">Chemical</option>
                                                                                               <option value="Childcare">Childcare</option>
                                                                                               <option value="Communications">Communications</option>
                                                                                               <option value="Community_Services">Community Services</option>
                                                                                               <option value="Construction">Construction</option>
                                                                                               <option value="Consulting">Consulting</option>
                                                                                               <option value="Defence">Defence</option>
                                                                                               <option value="Education">Education</option>
                                                                                               <option value="Electronics">Electronics</option>
                                                                                               <option value="Emergency_Protective">Emergency & Protective Services</option>
                                                                                               <option value="Energy">Energy</option>
                                                                                               <option value="Engineering">Engineering</option>
                                                                                               <option value="Environment">Environment</option>
                                                                                               <option value="Fast_Moving">Fast Moving Consumer Goods (FMCG)</option>
                                                                                               <option value="Finance">Finance</option>
                                                                                               <option value="Food_Beverage">Food, Beverage & Tobacco</option>
                                                                                               <option value="Government">Government</option>
                                                                                               <option value="Graphic_Design">Graphic Design & multimedia</option>
                                                                                               <option value="Healthcare_Medical">Healthcare & Medical</option>
                                                                                               <option value="Hospitality_Tourism">Hospitality & Tourism</option>
                                                                                               <option value="Housing">Housing</option>
                                                                                               <option value="HR_Recruitment">HR & Recruitment</option>
                                                                                               <option value="Information_Management">Information Management</option>
                                                                                               <option value="Insurance_Superannuation">Insurance & Superannuation</option>
                                                                                               <option value="IT">IT</option>
                                                                                               <option value="Legal">Legal</option>
                                                                                               <option value="Manufacturing">Manufacturing</option>
                                                                                               <option value="Manufacturing_Metals">Manufacturing-Metals</option>
                                                                                               <option value="Manufacturing_Steel">Manufacturing-Steel</option>
                                                                                               <option value="Marketing">Marketing</option>
                                                                                               <option value="Media_Advertising">Media & Advertising</option>
                                                                                               <option value="Mining_Mineral">Mining & Mineral Processing</option>
                                                                                               <option value="Oil_Gas">Oil & Gas</option>
                                                                                               <option value="Pharmaceutical_Biotech">Pharmaceutical & Biotech</option>
                                                                                               <option value="Public_Affairs">Public Affairs</option>
                                                                                               <option value="Real_Estate">Real Estate & Property</option>
                                                                                               <option value="Refinery">Refinery</option>
                                                                                               <option value="Research">Research</option>
                                                                                               <option value="Retail">Retail</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Science">Science</option>
                                                                                               <option value="Services">Services</option>
                                                                                               <option value="Telecommunications">Telecommunications</option>
                                                                                               <option value="Timber">Timber</option>
                                                                                               <option value="Trades">Trades</option>
                                                                                               <option value="Transportation_Logistics">Transportation & Logistics</option>
                                                                                               <option value="Utilities">Utilities</option>
                                                                                               <option value="Volunteers_Charity">Volunteers & Charity</option>
                                                                                               <option value="Wholesale_Trade">Wholesale Trade</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Country you worked in:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C_countryWorked" required> 
                                                                                               <option value="">Select</option>
                                                                                               @foreach($countryList as $key => $list)
                                                                                                    <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                               @endforeach
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C_department">Department:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C_department" name="C_department" placeholder="Department" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C_ManagerName">Manager's name:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C_ManagerName" name="C_ManagerName" placeholder="Manager's name" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C_PreviouslyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C_leaving_reson">Your reason for leaving:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C_leaving_reson" name="C_leaving_reson" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <!-- same form -->

                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="row">
                                                                           <div class="col-12">
                                                                                <h6><strong>Employer 2</strong></h6>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2">
                                                                                <label class="form-label mt-3">Employment status:*</label>
                                                                                <div class="row">
                                                                                     <div class="col-10">
                                                                                          <div class="form-group fullWidth">
                                                                                               <div class="form-control-wrap">
                                                                                                    <select class="form-control" placeholder="Employment Status" name="Employer_2" onchange="changeEmployer_2(event, this.value)" required> 
                                                                                                         <option value="">Select employment status</option>
                                                                                                         <option value="CurrentlyEmployed">Currently employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                         <option value="PreviouslyEmployed">Previously employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                    </select>
                                                                                               </div>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-2">
                                                                                          <div class="ml-2">
                                                                                               <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-property-remove"></em></button>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>

                                                                           <!-- same form -->
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation group:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C2_occupation_group" required> 
                                                                                               <option value="">Select an occupation group</option>
                                                                                               <option value="Clerical">Clerical & Admin</option>
                                                                                               <option value="Labourers">Labourers</option>
                                                                                               <option value="Managers">Managers</option>
                                                                                               <option value="Operators">Operators & Drivers</option>
                                                                                               <option value="Professionals">Professionals</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Service">Service & Community</option>
                                                                                               <option value="Technicians">Technicians & Trades</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C2_occupation" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="BusDriver">Bus Driver</option>
                                                                                               <option value="Chauffeur">Chauffeur</option>
                                                                                               <option value="Crane">Crane, Hoist or Lift Operator</option>
                                                                                               <option value="DeliveryDriver">Delivery Driver</option>
                                                                                               <option value="Driller">Driller</option>
                                                                                               <option value="Earthmoving">Earthmoving Plant Operator</option>
                                                                                               <option value="ForkliftDriver">Forklift Driver</option>
                                                                                               <option value="Machine">Machine Operator</option>
                                                                                               <option value="Miner">Miner</option>
                                                                                               <option value="ShotFirer">Shot Firer</option>
                                                                                               <option value="Storesperson">Storesperson</option>
                                                                                               <option value="TaxiDriver">Taxi Driver</option>
                                                                                               <option value="TrainController">Train Controller</option>
                                                                                               <option value="TrainDriver">Train Driver</option>
                                                                                               <option value="TramDriver">Tram Driver</option>
                                                                                               <option value="TruckDriver">Truck Driver</option>
                                                                                               <option value="WasteWater">Waste Water or Water Plant Operator</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C2_jobTitle">Your job title:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C2_jobTitle" name="C2_jobTitle" placeholder="job title" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C2_responsibilities">Your responsibilities:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C2_responsibilities" name="C2_responsibilities" placeholder="Your responsibilities" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <label class="form-label">Date started with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C2_startedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C2_startedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_PreviouslyEmployed">
                                                                                <label class="form-label">Date ended with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C2_endedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C2_endedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <label class="form-label mt-3">Company name:</label>
                                                                                <div class="flex">
                                                                                     <div class="form-group fullWidth">
                                                                                          <div class="form-control-wrap">
                                                                                               <input type="text" class="form-control" id="C2_companyName" name="C2_companyName" placeholder="Company Name" required>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Company industry:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" data-search="on" name="C2_Companyindustry" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="Accounting">Accounting</option>
                                                                                               <option value="Administration">Administration</option>
                                                                                               <option value="AgricultureRural">Agriculture & Rural</option>
                                                                                               <option value="Airlines">Airlines</option>
                                                                                               <option value="ArchitectureInterior">Architecture & interior design</option>
                                                                                               <option value="Arts_entertainment">Arts, entertainment & sport</option>
                                                                                               <option value="Automotive">Automotive</option>
                                                                                               <option value="Banking">Banking</option>
                                                                                               <option value="Beauty_Fashion">Beauty & Fashion</option>
                                                                                               <option value="Building_Products">Building Products & Construction</option>
                                                                                               <option value="Call_Centres">Call Centres</option>
                                                                                               <option value="Chemical">Chemical</option>
                                                                                               <option value="Childcare">Childcare</option>
                                                                                               <option value="Communications">Communications</option>
                                                                                               <option value="Community_Services">Community Services</option>
                                                                                               <option value="Construction">Construction</option>
                                                                                               <option value="Consulting">Consulting</option>
                                                                                               <option value="Defence">Defence</option>
                                                                                               <option value="Education">Education</option>
                                                                                               <option value="Electronics">Electronics</option>
                                                                                               <option value="Emergency_Protective">Emergency & Protective Services</option>
                                                                                               <option value="Energy">Energy</option>
                                                                                               <option value="Engineering">Engineering</option>
                                                                                               <option value="Environment">Environment</option>
                                                                                               <option value="Fast_Moving">Fast Moving Consumer Goods (FMCG)</option>
                                                                                               <option value="Finance">Finance</option>
                                                                                               <option value="Food_Beverage">Food, Beverage & Tobacco</option>
                                                                                               <option value="Government">Government</option>
                                                                                               <option value="GraphiC2_Design">Graphic Design & multimedia</option>
                                                                                               <option value="Healthcare_Medical">Healthcare & Medical</option>
                                                                                               <option value="Hospitality_Tourism">Hospitality & Tourism</option>
                                                                                               <option value="Housing">Housing</option>
                                                                                               <option value="HR_Recruitment">HR & Recruitment</option>
                                                                                               <option value="Information_Management">Information Management</option>
                                                                                               <option value="Insurance_Superannuation">Insurance & Superannuation</option>
                                                                                               <option value="IT">IT</option>
                                                                                               <option value="Legal">Legal</option>
                                                                                               <option value="Manufacturing">Manufacturing</option>
                                                                                               <option value="Manufacturing_Metals">Manufacturing-Metals</option>
                                                                                               <option value="Manufacturing_Steel">Manufacturing-Steel</option>
                                                                                               <option value="Marketing">Marketing</option>
                                                                                               <option value="Media_Advertising">Media & Advertising</option>
                                                                                               <option value="Mining_Mineral">Mining & Mineral Processing</option>
                                                                                               <option value="Oil_Gas">Oil & Gas</option>
                                                                                               <option value="Pharmaceutical_Biotech">Pharmaceutical & Biotech</option>
                                                                                               <option value="PubliC2_Affairs">Public Affairs</option>
                                                                                               <option value="Real_Estate">Real Estate & Property</option>
                                                                                               <option value="Refinery">Refinery</option>
                                                                                               <option value="Research">Research</option>
                                                                                               <option value="Retail">Retail</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Science">Science</option>
                                                                                               <option value="Services">Services</option>
                                                                                               <option value="Telecommunications">Telecommunications</option>
                                                                                               <option value="Timber">Timber</option>
                                                                                               <option value="Trades">Trades</option>
                                                                                               <option value="Transportation_Logistics">Transportation & Logistics</option>
                                                                                               <option value="Utilities">Utilities</option>
                                                                                               <option value="Volunteers_Charity">Volunteers & Charity</option>
                                                                                               <option value="Wholesale_Trade">Wholesale Trade</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Country you worked in:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C2_countryWorked" required> 
                                                                                               <option value="">Select</option>
                                                                                               @foreach($countryList as $key => $list)
                                                                                                    <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                               @endforeach
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C2_department">Department:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C2_department" name="C2_department" placeholder="Department" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C2_ManagerName">Manager's name:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C2_ManagerName" name="C2_ManagerName" placeholder="Manager's name" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C2_PreviouslyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C2_leaving_reson">Your reason for leaving:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C2_leaving_reson" name="C2_leaving_reson" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <!-- same form -->

                                                                      </div>
                                                                 </div>
                                                                 <div class="col-xxl-4 col-md-4">
                                                                      <div class="row">
                                                                           <div class="col-12">
                                                                                <h6><strong>Employer 3</strong></h6>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2">
                                                                                <label class="form-label mt-3">Employment status:*</label>
                                                                                <div class="row">
                                                                                     <div class="col-10">
                                                                                          <div class="form-group fullWidth">
                                                                                               <div class="form-control-wrap">
                                                                                                    <select class="form-control" placeholder="Employment Status" name="Employer_3" onchange="changeEmployer_3(event, this.value)" required> 
                                                                                                         <option value="">Select employment status</option>
                                                                                                         <option value="CurrentlyEmployed">Currently employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                         <option value="PreviouslyEmployed">Previously employed or contracted by Catholic Education Diocese of Bathurst</option>
                                                                                                    </select>
                                                                                               </div>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="col-2">
                                                                                          <div class="ml-2">
                                                                                               <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-property-remove"></em></button>
                                                                                          </div>
                                                                                     </div>
                                                                                </div>
                                                                           </div>

                                                                           <!-- same form -->
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation group:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C3_occupation_group" required> 
                                                                                               <option value="">Select an occupation group</option>
                                                                                               <option value="Clerical">Clerical & Admin</option>
                                                                                               <option value="Labourers">Labourers</option>
                                                                                               <option value="Managers">Managers</option>
                                                                                               <option value="Operators">Operators & Drivers</option>
                                                                                               <option value="Professionals">Professionals</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Service">Service & Community</option>
                                                                                               <option value="Technicians">Technicians & Trades</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Your occupation:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C3_occupation" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="BusDriver">Bus Driver</option>
                                                                                               <option value="Chauffeur">Chauffeur</option>
                                                                                               <option value="Crane">Crane, Hoist or Lift Operator</option>
                                                                                               <option value="DeliveryDriver">Delivery Driver</option>
                                                                                               <option value="Driller">Driller</option>
                                                                                               <option value="Earthmoving">Earthmoving Plant Operator</option>
                                                                                               <option value="ForkliftDriver">Forklift Driver</option>
                                                                                               <option value="Machine">Machine Operator</option>
                                                                                               <option value="Miner">Miner</option>
                                                                                               <option value="ShotFirer">Shot Firer</option>
                                                                                               <option value="Storesperson">Storesperson</option>
                                                                                               <option value="TaxiDriver">Taxi Driver</option>
                                                                                               <option value="TrainController">Train Controller</option>
                                                                                               <option value="TrainDriver">Train Driver</option>
                                                                                               <option value="TramDriver">Tram Driver</option>
                                                                                               <option value="TruckDriver">Truck Driver</option>
                                                                                               <option value="WasteWater">Waste Water or Water Plant Operator</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C3_jobTitle">Your job title:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C3_jobTitle" name="C3_jobTitle" placeholder="job title" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C3_responsibilities">Your responsibilities:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C3_responsibilities" name="C3_responsibilities" placeholder="Your responsibilities" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <label class="form-label">Date started with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C3_startedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C3_startedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_PreviouslyEmployed">
                                                                                <label class="form-label">Date ended with company:</label>
                                                                                <div class="row">
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C3_endedDateMonth" required> 
                                                                                               <option value="">Select</option>
                                                                                               <option value="jan">Jan</option>
                                                                                               <option value="feb">Feb</option>
                                                                                               <option value="mar">Mar</option>
                                                                                               <option value="apr">Apr</option>
                                                                                               <option value="may">May</option>
                                                                                               <option value="jun">Jun</option>
                                                                                               <option value="jul">Jul</option>
                                                                                               <option value="aug">Aug</option>
                                                                                               <option value="sep">Sep</option>
                                                                                               <option value="oct">Oct</option>
                                                                                               <option value="nov">Nov</option>
                                                                                               <option value="dec">Dec</option>
                                                                                          </select>
                                                                                     </div>
                                                                                     <div class="col-6">
                                                                                          <select class="form-control" name="C3_endedDateYear" required> 
                                                                                               <option value="">Select</option>
                                                                                               @for($x = 2022; $x > 1951; $x--)
                                                                                               <option value="{{ $x }}">{{ $x }}</option>
                                                                                               @endfor
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <label class="form-label mt-3">Company name:</label>
                                                                                <div class="flex">
                                                                                     <div class="form-group fullWidth">
                                                                                          <div class="form-control-wrap">
                                                                                               <input type="text" class="form-control" id="C3_companyName" name="C3_companyName" placeholder="Company Name" required>
                                                                                          </div>
                                                                                     </div>
                                                                                     <div class="ml-2">
                                                                                          <button class="btn btn-icon btn-white btn-outline-light"><em class="icon ni ni-search"></em></button>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Company industry:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" data-search="on" name="C3_Companyindustry" required> 
                                                                                               <option value="">Select an occupation</option>
                                                                                               <option value="Accounting">Accounting</option>
                                                                                               <option value="Administration">Administration</option>
                                                                                               <option value="AgricultureRural">Agriculture & Rural</option>
                                                                                               <option value="Airlines">Airlines</option>
                                                                                               <option value="ArchitectureInterior">Architecture & interior design</option>
                                                                                               <option value="Arts_entertainment">Arts, entertainment & sport</option>
                                                                                               <option value="Automotive">Automotive</option>
                                                                                               <option value="Banking">Banking</option>
                                                                                               <option value="Beauty_Fashion">Beauty & Fashion</option>
                                                                                               <option value="Building_Products">Building Products & Construction</option>
                                                                                               <option value="Call_Centres">Call Centres</option>
                                                                                               <option value="Chemical">Chemical</option>
                                                                                               <option value="Childcare">Childcare</option>
                                                                                               <option value="Communications">Communications</option>
                                                                                               <option value="Community_Services">Community Services</option>
                                                                                               <option value="Construction">Construction</option>
                                                                                               <option value="Consulting">Consulting</option>
                                                                                               <option value="Defence">Defence</option>
                                                                                               <option value="Education">Education</option>
                                                                                               <option value="Electronics">Electronics</option>
                                                                                               <option value="Emergency_Protective">Emergency & Protective Services</option>
                                                                                               <option value="Energy">Energy</option>
                                                                                               <option value="Engineering">Engineering</option>
                                                                                               <option value="Environment">Environment</option>
                                                                                               <option value="Fast_Moving">Fast Moving Consumer Goods (FMCG)</option>
                                                                                               <option value="Finance">Finance</option>
                                                                                               <option value="Food_Beverage">Food, Beverage & Tobacco</option>
                                                                                               <option value="Government">Government</option>
                                                                                               <option value="GraphiC3_Design">Graphic Design & multimedia</option>
                                                                                               <option value="Healthcare_Medical">Healthcare & Medical</option>
                                                                                               <option value="Hospitality_Tourism">Hospitality & Tourism</option>
                                                                                               <option value="Housing">Housing</option>
                                                                                               <option value="HR_Recruitment">HR & Recruitment</option>
                                                                                               <option value="Information_Management">Information Management</option>
                                                                                               <option value="Insurance_Superannuation">Insurance & Superannuation</option>
                                                                                               <option value="IT">IT</option>
                                                                                               <option value="Legal">Legal</option>
                                                                                               <option value="Manufacturing">Manufacturing</option>
                                                                                               <option value="Manufacturing_Metals">Manufacturing-Metals</option>
                                                                                               <option value="Manufacturing_Steel">Manufacturing-Steel</option>
                                                                                               <option value="Marketing">Marketing</option>
                                                                                               <option value="Media_Advertising">Media & Advertising</option>
                                                                                               <option value="Mining_Mineral">Mining & Mineral Processing</option>
                                                                                               <option value="Oil_Gas">Oil & Gas</option>
                                                                                               <option value="Pharmaceutical_Biotech">Pharmaceutical & Biotech</option>
                                                                                               <option value="PubliC3_Affairs">Public Affairs</option>
                                                                                               <option value="Real_Estate">Real Estate & Property</option>
                                                                                               <option value="Refinery">Refinery</option>
                                                                                               <option value="Research">Research</option>
                                                                                               <option value="Retail">Retail</option>
                                                                                               <option value="Sales">Sales</option>
                                                                                               <option value="Science">Science</option>
                                                                                               <option value="Services">Services</option>
                                                                                               <option value="Telecommunications">Telecommunications</option>
                                                                                               <option value="Timber">Timber</option>
                                                                                               <option value="Trades">Trades</option>
                                                                                               <option value="Transportation_Logistics">Transportation & Logistics</option>
                                                                                               <option value="Utilities">Utilities</option>
                                                                                               <option value="Volunteers_Charity">Volunteers & Charity</option>
                                                                                               <option value="Wholesale_Trade">Wholesale Trade</option>
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label">Country you worked in:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <select class="form-control" name="C3_countryWorked" required> 
                                                                                               <option value="">Select</option>
                                                                                               @foreach($countryList as $key => $list)
                                                                                                    <option value="{{ $list->name }}">{{ $list->name }}</option>
                                                                                               @endforeach
                                                                                          </select>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C3_department">Department:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C3_department" name="C3_department" placeholder="Department" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_CurrentlyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C3_ManagerName">Manager's name:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <input type="text" class="form-control" id="C3_ManagerName" name="C3_ManagerName" placeholder="Manager's name" required>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <div class="col-12 pl-4 mb-2 C3_PreviouslyEmployed">
                                                                                <div class="form-group">
                                                                                     <label class="form-label" for="C3_leaving_reson">Your reason for leaving:</label>
                                                                                     <div class="form-control-wrap">
                                                                                          <textarea class="form-control" id="C3_leaving_reson" name="C3_leaving_reson" required></textarea>
                                                                                     </div>
                                                                                </div>
                                                                           </div>
                                                                           <!-- same form -->

                                                                      </div>
                                                                 </div>
                                                                 
                                                                 <div class="col-12">
                                                                      <ul class="nk-block-tools g-3 nk-block-between">
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="button" onClick="slide('prev')" class="btn btn-outline-light">Previous</button>
                                                                           </li>
                                                                           <li class="nk-block-tools-opt">
                                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                                           </li>
                                                                      </ul>
                                                                 </div>
                                                                 <!--col-->
                                                            </div>
                                                       </form>
                                                  </div>
                                             </div>
                                        </div>
                                   </div>
                              </div><!-- .card -->
                         </div><!-- .nk-block -->
                    </div>
               </div>
          </div>
     </div>
     <!-- content @e -->
     <script>
          function initAutocomplete() {
               new google.maps.places.Autocomplete(
                    (document.getElementById('address')), { types: ['geocode'] }
               );
               new google.maps.places.Autocomplete(
                    (document.getElementById('suburb')), { types: ['geocode'] }
               );
          }

          var TeacherDetail = {}

          function emptyValidation(e, formName) {
               e.preventDefault();
               setTimeout(function () {
                    var invalidLength = $(`#${formName} .form-control.invalid`).length;
                    var add_note = $('.quill-basic .ql-editor').html();

                    if(invalidLength === 0) {
                         TeacherDetail = $(`#${formName}`).serializeArray().reduce(function(obj, item) {
                              obj[item.name] = item.value;
                              return obj;
                         }, TeacherDetail);
                         
                         if(formName === 'forthForm') {
                              var files = document.querySelectorAll('.custom-pages input[type=file]');
                              var filesArr = Array.prototype.slice.call(files);
                              let formData = new FormData(); 
                              TeacherDetail.add_note = add_note;
                              Object.keys(TeacherDetail).forEach(function(key, index) {
                                   console.log(TeacherDetail[key])
                                   if(TeacherDetail[key] !== '')
                                        formData.append(key, TeacherDetail[key]);
                              });

                              filesArr.forEach(function(f) {
                                   if(f.files[0] !== undefined)
                                        formData.append(f.name, f.files[0]);
                              });

                              $.ajax({
                                   type: 'POST',
                                   enctype: 'multipart/form-data',
                                   url: '/addTeacher',
                                   headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                                   data: formData,
                                   processData: false,
                                   contentType: false,
                                   success: function (response) {
                                        console.log(response)
                                   }
                              });
                         } else {
                              slide('next');
                         }
                    } 
               }, 200);
          }
     </script>
     @endsection