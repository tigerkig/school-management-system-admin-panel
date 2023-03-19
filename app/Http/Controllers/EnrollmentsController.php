<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Language;
use App\Models\User;

use PhpParser\Node\Stmt\TryCatch;
use DB;

class EnrollmentsController extends Controller
{
    public function index()
    {
        $studentList = User::all()->where('username', 'student')->where('is_left', '0')->sortDesc();
        return view('admin.enrollments.index', ['lists' => $studentList]);
        // return view('admin.enrollments.index');
    }

    public function getCountryList()
    {
        $countryList = Country::all();
        return response()->json([
            'list' => $countryList,
        ]);
    }

    public function startApplication()
    {
        $countryList = Country::all();
        $languageList = Language::all();
        return view('admin.enrollments.startApplication', ['countryList' => $countryList, 'languageList' => $languageList]);
    }

    public function resumeApplication()
    {
        return view('admin.enrollments.resumeApplication');
    }
    //Tiger
    public function emergency_contacts(Request $request){
        $student_home_address=$request->input("student_home_address");
        $e_emergency_given_name = $request->input("e_emergency_given_name");
        $e_emergency_family_name = $request->input("e_emergency_family_name");
        $e_emergency_relationship = $request->input("e_emergency_relationship");
        $e_emergency_phone_number_types = $request->input("e_emergency_phone_number_types");
        $emergency_family_names = $request->input("emergency_family_names");
        $all_emergency_comments = $request->input("all_emergency_comments");

        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        for ($i=0;$i<count($e_emergency_given_name);$i++){
            for ($j=0;$j<count($e_emergency_phone_number_types);$j++){
                 
                try{
                    DB::insert('insert into additional_emergency_contact_details(student_id,
                        e_emergency_given_name,
                        e_emergency_phone_number_types,
                        emergency_family_names,
                        all_emergency_comments) values(?,?,?,?,?)',
                        [     
                        $lastId,
                        $e_emergency_given_name[$i],
                        $e_emergency_phone_number_types[$i][$j],
                        $emergency_family_names[$i][$j],
                        $all_emergency_comments[$i][$j]
                        ]
                        );
                 }
                 catch (\Exception$e) {
                    echo "Error";
                    echo $e;
                 }
            }
            try{
              DB::insert('insert into additional_emergency_contact(student_id,
                student_home_address,
                e_emergency_given_name,
                e_emergency_family_name,
                e_emergency_relationship) values(?,?,?,?,?)',
                [
                    $lastId,
                    $student_home_address,
                    $e_emergency_given_name[$i],
                    $e_emergency_family_name[$i],
                    $e_emergency_relationship[$i]   
                ]
            );
            }
             catch (\Exception$e) {
                 echo "Error";
                 echo $e;
        }

    }

    }



    //Tiger
    public function add_info(Request $request)
    {
        $prior_enrolment_yes = '';
        $prior_enrolment_no= '';
        $a_provide_details='';
        $prior_enrolment_yes = $request->input("prior_enrolment_yes");
        $prior_enrolment_no= $request->input("prior_enrolment_no");
        $a_provide_details= $request->input("a_provide_details");
        
        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;

        try{
           DB::insert('insert into add_info(student_id,prior_enrolment_yes,prior_enrolment_no,a_provide_details) values(?,?,?,?)',[$lastId,$prior_enrolment_yes,$prior_enrolment_no,$a_provide_details]);
           echo "Inserted Additional Info Successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
    
    }
    //Tiger
    public function studentDetail(Request $request){
        $enrollingFor=$request->input('enrollingFor');
        $scholasticYear=$request->input('scholasticYear');
        $student_home_address=$request->input('student_home_address');
        $StudentResidentialAddress=$request->input('StudentResidentialAddress');
        $s_street=$request->input('s_street');
        $s_suburb=$request->input('s_suburb');
        $s_state=$request->input('s_state');
        $s_postcode=$request->input('s_postcode');
        $s_address_line_1=$request->input('s_address_line_1');
        $s_address_line_2=$request->input('s_address_line_2');
        $firstName=$request->input('firstName');
        $middleName=$request->input('middleName');
        $familyName=$request->input('familyName');
        $preferredName=$request->input('preferredName');
        $genderRadio=$request->input('genderRadio');
        $dateOfBirth=$request->input('dateOfBirth');
        $intendedDate=$request->input('intendedDate');
        $enteredStartDate=$request->input('enteredStartDate');
        $selectEnrolledIn=$request->input('selectEnrolledIn');
        $educationalProgramType_1=$request->input('educationalProgramType_1');
        $attended_another_school=$request->input('attended_another_school');
        $RecentlyAttendSchool=$request->input('RecentlyAttendSchool');
        $schoolName=$request->input('schoolName');
        $schoolLocation=$request->input('schoolLocation');
        $AttenedStartDate=$request->input('AttenedStartDate');
        $AttenedUntilDate=$request->input('AttenedUntilDate');
        $countryOfBirth=$request->input('countryOfBirth');
        $ArriveInAustralia=$request->input('ArriveInAustralia');
        $residencyStatus=$request->input('residencyStatus');
        $Aboriginal_Torres_Strait_Islander=$request->input('Aboriginal_Torres_Strait_Islander');
        $speakLanguage=$request->input('speakLanguage');
        $student_speak_at_home=$request->input('student_speak_at_home');
        
       try{
        DB::insert('insert into students_details(enrollingFor,
        scholasticYear,
        student_home_address,
        StudentResidentialAddress,
        s_street,
        s_suburb,
        s_state,
        s_postcode,
        s_address_line_1,
        s_address_line_2,
        firstName,
        middleName,
        familyName,
        preferredName,
        genderRadio,
        dateOfBirth,
        intendedDate,
        enteredStartDate,
        selectEnrolledIn,
        educationalProgramType_1,
        attended_another_school,
        RecentlyAttendSchool,
        schoolName,
        schoolLocation,
        AttenedStartDate,
        AttenedUntilDate,
        countryOfBirth,
        ArriveInAustralia,
        residencyStatus,
        Aboriginal_Torres_Strait_Islander,
        speakLanguage,
        student_speak_at_home) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',
        [
        $enrollingFor,
        $scholasticYear,
        $student_home_address,
        $StudentResidentialAddress,
        $s_street,
        $s_suburb,
        $s_state,
        $s_postcode,
        $s_address_line_1,
        $s_address_line_2,
        $firstName,
        $middleName,
        $familyName,
        $preferredName,
        $genderRadio,
        $dateOfBirth,
        $intendedDate,
        $enteredStartDate,
        $selectEnrolledIn,
        $educationalProgramType_1,
        $attended_another_school,
        $RecentlyAttendSchool,
        $schoolName,
        $schoolLocation,
        $AttenedStartDate,
        $AttenedUntilDate,
        $countryOfBirth,
        $ArriveInAustralia,
        $residencyStatus,
        $Aboriginal_Torres_Strait_Islander,
        $speakLanguage,
        $student_speak_at_home]);

        echo "Student Details inserted in database Successfully";
        
    }
    catch (\Exception$e) {
        echo "Error";
        echo $e;
    }

    //  $this->set_student_id(DB::getPdo()->lastInsertId());
    }
    //Tiger
    public function medicalDetail(Request $request){
       
        $m_MedicareNumber=$request->input('m_MedicareNumber');
        $m_ReferenceNumber=$request->input('m_ReferenceNumber');
        $m_expiryDate=$request->input('m_expiryDate');
        $doctors=$request->input('doctors');
        $anaphylactic_allergies=$request->input('anaphylactic_allergies');
        $non_severe_allergies_check=$request->input('non_severe_allergies_check');
        $severe_allergies=$request->input('severe_allergies');
        $non_severe_allergies=$request->input('non_severe_allergies');
        $medical_conditions=$request->input('medical_conditions');

        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        
        //Inserting medicare details in database
        try{
          DB::insert('insert into medicare_details(student_id,m_MedicareNumber,
          m_ReferenceNumber,
          m_expiryDate) values(?,?,?,?)',[
            $lastId,
            $m_MedicareNumber,
            $m_ReferenceNumber,
            $m_expiryDate
          ]);
          echo "Medicare Details stored successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
        //Inserting doctors data
        
        for ($i=0;$i<count($doctors);$i++){
            try{
                DB::insert('insert into doctors(student_id,m_MedicareNumber,
                    m_doctor_name,
                    m_docter_country,
                    m_street,
                    m_suburb,
                    m_state,
                    m_postcode,
                    m_address_line_1,
                    m_address_line_2,
                    m_phone_number) values(?,?,?,?,?,?,?,?,?,?,?)',
                    [
                    $lastId,
                    $m_MedicareNumber,
                    $doctors[$i]["m_doctor_name"],
                    $doctors[$i]["m_docter_country"],
                    $doctors[$i]["m_street"],
                    $doctors[$i]["m_suburb"],
                    $doctors[$i]["m_state"],
                    $doctors[$i]["m_postcode"],
                    $doctors[$i]["m_address_line_1"],
                    $doctors[$i]["m_address_line_2"],
                    $doctors[$i]["m_phone_number"]
                    ]);

                    echo "Doctor stored successfully";
            }
            catch (\Exception$e) {
                echo "Error";
                echo $e;
            }
        }


        //Storing anaphylactic_allergies in database
        if( $anaphylactic_allergies){
        for ($i=0;$i<count($severe_allergies);$i++){
            for($j=0;$j<count($severe_allergies[$i]["m_medication_name"]);$j++){
                 
                try{
                    DB::insert('insert into medicine_names( m_MedicareNumber, allergy, medicine_name ) values(?,?,?)',
                    [
                        $m_MedicareNumber,
                        "severe allergy",
                        $severe_allergies[$i]["m_medication_name"][$j]
                    ]);
                 }
                  catch (\Exception$e) {
                        echo "Error";
                   echo $e;
        }
            }

            try{
                DB::insert('insert into anaphylactic_allergy(student_id,
                    m_MedicareNumber,
                    m_allergic_to,
                    m_hospital_name,
                    hospitalised_allergy,
                    diagnosed_allergy,
                    m_docter_treating_allergy,
                    plan_anaphylaxis,
                    adrenaline_autoinjector,
                    m_adrenaline_autoinjector,
                    medication_allergy) values(?,?,?,?,?,?,?,?,?,?,?)',
                    [
                        $lastId,
                        $m_MedicareNumber,
                        $severe_allergies[$i]["m_allergic_to"],
                        $severe_allergies[$i]["m_hospital_name"],
                        $severe_allergies[$i]["hospitalised_allergy"],
                        $severe_allergies[$i]["diagnosed_allergy"],
                        $severe_allergies[$i]["m_docter_treating_allergy"],
                        $severe_allergies[$i]["plan_anaphylaxis"],
                        $severe_allergies[$i]["adrenaline_autoinjector"],
                        $severe_allergies[$i]["m_adrenaline_autoinjector"],
                        $severe_allergies[$i]["medication_allergy"]
                    ]
   
                );
                echo "Severe Allergies saved successfully";
            }
            catch (\Exception$e) {
                echo "Error";
                echo $e;
            }
        }  

    }

        //Storing Non-severe Allergies
        if($non_severe_allergies_check){
            for ($i=0;$i<count($non_severe_allergies);$i++){
                for($j=0;$j<count($non_severe_allergies[$i]["m_non_severe_medication_name"]);$j++){
                 
                    try{
                            DB::insert('insert into medicine_names(
                                m_MedicareNumber,
                                allergy,
                                medicine_name
                            ) values(?,?,?)',
                            [
                                $m_MedicareNumber,
                                "non severe allergy",
                                $non_severe_allergies[$i]["m_non_severe_medication_name"][$j]
                            ]);
                     }
                      catch (\Exception$e) {
                            echo "Error";
                       echo $e;
            }
                }
                    try{
                        DB::insert('insert into non_severe_allergy(student_id,
                            m_MedicareNumber,
                            m_non_severe_allergic_to,
                            m_non_severe_hospital_name,
                            non_severe_hosp_allergy,
                            non_severe_diagnosed_allergy,
                            m_non_severe_docter_treating_allergy,
                            non_severe_plan_anaphylaxis,
                            non_severe_adrenaline_autoinjector,
                            m_non_severe_adrenaline_autoinjector,
                            non_severe_medication_allergy) values(?,?,?,?,?,?,?,?,?,?,?)',
                            [
                                $lastId,
                                $m_MedicareNumber,
                                $non_severe_allergies[$i]["m_non_severe_allergic_to"],
                                $non_severe_allergies[$i]["m_non_severe_hospital_name"],
                                $non_severe_allergies[$i]["non_severe_hosp_allergy"],
                                $non_severe_allergies[$i]["non_severe_diagnosed_allergy"],
                                $non_severe_allergies[$i]["m_non_severe_docter_treating_allergy"],
                                $non_severe_allergies[$i]["non_severe_plan_anaphylaxis"],
                                $non_severe_allergies[$i]["non_severe_adrenaline_autoinjector"],
                                $non_severe_allergies[$i]["m_non_severe_adrenaline_autoinjector"],
                                $non_severe_allergies[$i]["non_severe_medication_allergy"]
                            ]
           
                        );
                        echo "Non Severe Allergies saved successfully";
                    }
                    catch (\Exception$e) {
                        echo "Error";
                        echo $e;
                    }
                }
            }

       //Storing Other medical conditions data
       for ($i=0;$i<count($medical_conditions);$i++){
        // var_dump($severe_allergies[$i]["m_medication_name"]);
            for($j=0;$j<count($medical_conditions[$i]["m_taking_medical_condition_name"]);$j++){
                 
                try{
                         DB::insert('insert into medicine_names(
                            m_MedicareNumber,
                            allergy,
                            medicine_name
                        ) values(?,?,?)',
                        [
                            $m_MedicareNumber,
                            "medical",
                            $medical_conditions[$i]["m_taking_medical_condition_name"][$j]
                        ]);
                 }
                  catch (\Exception$e) {
                        echo "Error";
                   echo $e;
        }
            }
        
        try{
            DB::insert('insert into medical_conditions(student_id,
                m_MedicareNumber,
                m_medical_condition_name,
                m_medical_condition_hospital_name,
                hospitalised_medical_condition,
                diagnosed_medical_condition,
                m_treating_medical_condition,
                documented_plan_medical_condition,
                student_taking_medication) values(?,?,?,?,?,?,?,?,?)',
                [
                    $lastId,
                    $m_MedicareNumber,
                    $medical_conditions[$i]["m_medical_condition_name"],
                    $medical_conditions[$i]["m_medical_condition_hospital_name"],
                    $medical_conditions[$i]["hospitalised_medical_condition"],
                    $medical_conditions[$i]["diagnosed_medical_condition"],
                    $medical_conditions[$i]["m_treating_medical_condition"],
                    $medical_conditions[$i]["documented_plan_medical_condition"],
                    $medical_conditions[$i]["student_taking_medication"]
                ]

            );
            echo "Other Medical Conditions saved successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
    }         
            
      
       





        
    }
    //Tiger
    public function learningSupport(Request $request){
       
        $autism=$request->input('autism');
        $aHearingImpairment=$request->input('aHearingImpairment');
        $languageDisorder=$request->input('languageDisorder');
        $physicalDisability=$request->input('physicalDisability');
        $DifficultiesInLearning=$request->input('DifficultiesInLearning');
        $AcquiredBrainInjury=$request->input('AcquiredBrainInjury');
        $BehaviourDisorder=$request->input('BehaviourDisorder');
        $IntellectualDisability=$request->input('IntellectualDisability');
        $MentalHealthDisorder=$request->input('MentalHealthDisorder');
        $visionImpairment=$request->input('visionImpairment');
        $OtherDisabilityDetails=$request->input('OtherDisabilityDetails');
        $additional_learning_need=$request->input('additional_learning_need');
        $ProvideDetails=$request->input('ProvideDetails');
        $teaching_strategies=$request->input('teaching_strategies');
        $speaking_listening=$request->input('speaking_listening');
        $earning_materials=$request->input('earning_materials');
        $health_care_needs=$request->input('health_care_needs');
        $children_and_teachers=$request->input('children_and_teachers');
        $Other_adjustments_details=$request->input('Other_adjustments_details');
        $student_educational_needs=$request->input('student_educational_needs');
        $Describe_modifications_strategies=$request->input('Describe_modifications_strategies');
        
        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        try{
            DB::insert('insert into learning_support(student_id,
            autism,
            aHearingImpairment,
            languageDisorder,
            physicalDisability,
            DifficultiesInLearning,
            AcquiredBrainInjury,
            BehaviourDisorder,
            IntellectualDisability,
            MentalHealthDisorder,
            visionImpairment,
            OtherDisabilityDetails,
            additional_learning_need,
            ProvideDetails,
            teaching_strategies,
            speaking_listening,
            earning_materials,
            health_care_needs,
            children_and_teachers,
            Other_adjustments_details,
            student_educational_needs,
            Describe_modifications_strategies) 
            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
            ',
        [
            $lastId,
            $autism,
            $aHearingImpairment,
            $languageDisorder,
            $physicalDisability,
            $DifficultiesInLearning,
            $AcquiredBrainInjury,
            $BehaviourDisorder,
            $IntellectualDisability,
            $MentalHealthDisorder,
            $visionImpairment,
            $OtherDisabilityDetails,
            $additional_learning_need,
            $ProvideDetails,
            $teaching_strategies,
            $speaking_listening,
            $earning_materials,
            $health_care_needs,
            $children_and_teachers,
            $Other_adjustments_details,
            $student_educational_needs,
            $Describe_modifications_strategies
        ]
        );
       echo "Learning Support Info saved Successfully";

        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
    }

    //Tiger
    public function RiskAssessment(Request $request){
    
        $violent_behaviour=$request->input('violent_behaviour');
        $r_Provide_details=$request->input('r_Provide_details');
        $serious_behaviours=$request->input('serious_behaviours');
        $serious_behaviours_Provide_details=$request->input('serious_behaviours_Provide_details');
        $school_staff=$request->input('school_staff');
        $school_staff_Provide_details=$request->input('school_staff_Provide_details');
        $knowledge_issues=$request->input('knowledge_issues');
        $r_health_professional=$request->input('r_health_professional');
        $r_contact_number=$request->input('r_contact_number');

        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        try{
            DB::insert('insert into risk_assessment(student_id,
                violent_behaviour,
                r_Provide_details,
                serious_behaviours,
                serious_behaviours_Provide_details,
                school_staff,
                school_staff_Provide_details,
                knowledge_issues,
                r_health_professional,
                r_contact_number)
                values(?,?,?,?,?,?,?,?,?,?) 
            ',[
                $lastId,
                $violent_behaviour,
                $r_Provide_details,
                $serious_behaviours,
                $serious_behaviours_Provide_details,
                $school_staff,
                $school_staff_Provide_details,
                $knowledge_issues,
                $r_health_professional,
                $r_contact_number
            ]);
            echo "Risk Assessment Data stored successfully";
   
       }
    catch (\Exception$e) {
        echo "Error";
        echo $e;
    }

    }
    public function siblings(Request $request){

        $government_school=$request->input('government_school');
        $s_givenName=$request->input('s_givenName');
        $s_middleName=$request->input('s_middleName');
        $s_familyName=$request->input('s_familyName');
        $s_genderRadio=$request->input('s_genderRadio');
        $dateOfBirth=$request->input('dateOfBirth');
        $s_school_attended=$request->input('s_school_attended');
        
        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        try{
            DB::insert('insert into siblings(student_id,
            government_school,
            s_givenName,
            s_middleName,
            s_familyName,
            s_genderRadio,
            dateOfBirth,
            s_school_attended) values(?,?,?,?,?,?,?,?)',
            [
                $lastId,
                $government_school,
                $s_givenName,
                $s_middleName,
                $s_familyName,
                $s_genderRadio,
                $dateOfBirth,
                $s_school_attended
            ]);
            echo "Siblings data saved successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }

    }
    public function permissions(Request $request){

        $p_department=$request->input('p_department');
        $publicly_accessible=$request->input('publicly_accessible');
        
        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        try{
            DB::insert('insert into permissions(student_id,p_department,publicly_accessible)
            values(?,?,?)',[
                $lastId,
                $p_department,
                $publicly_accessible
            ]
            );
            echo "permissions data saved successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
    }
    
    public function supportingDocForm(Request $request){
        $student_identity=$request->input('upload_check_1');
        $residential_address=$request->input('upload_check_2');
        $immunisation_history_statement=$request->input('upload_check_3');
        $passport_visa_travel=$request->input('upload_check_4');
        $emergency_action_plan=$request->input('upload_check_5');
        $disability_evidence=$request->input('upload_check_6');
        $court_orders=$request->input('upload_check_7');

        
        $lastId=DB::table('students_details')->orderBy('id','desc')->first()->id;
        echo "Last inserted row:";
        print_r($lastId);
        try{
            DB::insert('insert into supportingdocform(student_id,student_identity,
                residential_address,
                immunisation_history_statement,
                passport_visa_travel,
                emergency_action_plan,
                disability_evidence,
                court_orders) values(?,?,?,?,?,?,?,?)',
            [
                $lastId,
                $student_identity,
                $residential_address,
                $immunisation_history_statement,
                $passport_visa_travel,
                $emergency_action_plan,
                $disability_evidence,
                $court_orders

            ]);
            echo "Supporting documents saved successfully";
        }
        catch (\Exception$e) {
            echo "Error";
            echo $e;
        }
    }

}
