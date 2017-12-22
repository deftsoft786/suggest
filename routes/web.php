<?php
Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
    return view('welcome');
});
			      // Homepage  
Route::match(['get', 'post'],'/','WebController@HomePage');

                  // Routing MBA 
Route::match(['get', 'post'],'/popular_course_mba','WebController@Popular_course_MBA');
Route::match(['get', 'post'],'/exam_mba','WebController@Exam_MBA');
Route::match(['get', 'post'],'/exam_cat','WebController@Exam_cat');
Route::match(['get', 'post'],'/exam_calender','WebController@Exam_Calender');
Route::match(['get', 'post'],'/college_by_location_mba','WebController@College_by_location_MBA');
Route::match(['get', 'post'],'/college/{slug}','WebController@Top_College');
Route::match(['get', 'post'],'/top_rank','WebController@Top_Rank');
Route::match(['get', 'post'],'/compare_college_mba','WebController@Compare_College_MBA');
Route::match(['get', 'post'],'/other_compare_college','WebController@Other_Compare');
Route::match(['get', 'post'],'/college_review_mba','WebController@College_Review_MBA');
Route::match(['get', 'post'],'/write_review','WebController@Write_Review');
Route::match(['get', 'post'],'/call_padicator','WebController@Call_Padicator');
Route::match(['get', 'post'],'/ask_current_mba_student','WebController@Ask_Current_MBA');
Route::match(['get', 'post'],'/ask_current_mba_other_mba_college','WebController@Ask_Current_MBA_Other_MBA');
Route::match(['get', 'post'],'/mba_alumani_salary_data','WebController@MBA_Alumani_Salary_Data');
Route::match(['get', 'post'],'/mba_resource_apply_college','WebController@MBA_Resource_Apply_College');
				// Routing Engineering
Route::match(['get', 'post'],'/popular_course','EngineeringController@Popular_course');
Route::match(['get', 'post'],'/exam_engineering','EngineeringController@Exam_Engineering');
Route::match(['get', 'post'],'/exam_cat_engineering','EngineeringController@Exam_cat');
Route::match(['get', 'post'],'/exam_calender_engineering','EngineeringController@Exam_Calender');
Route::match(['get', 'post'],'/college_by_location_engineering','EngineeringController@College_by_location_Engineering');
Route::match(['get', 'post'],'/top_college_engineering','EngineeringController@Top_College_Engineering');
Route::match(['get', 'post'],'/top_rank_engineering','EngineeringController@Top_Rank_Engineering');
Route::match(['get', 'post'],'/compare_college_engineering','EngineeringController@Compare_College_Engineering');
Route::match(['get', 'post'],'/other_compare_college_engineering','EngineeringController@Other_Compare_College_Engineering');
Route::match(['get', 'post'],'/college_review_engineering','EngineeringController@College_Review_Engineering');
Route::match(['get', 'post'],'/write_review_engineering','EngineeringController@Write_Review_Engineering');
Route::match(['get', 'post'],'/call_padicator_engineering','EngineeringController@Call_Padicator_Engineering');
Route::match(['get', 'post'],'/ask_current_engineering_student','EngineeringController@Ask_Current_Engineering');
Route::match(['get', 'post'],'/engineering_resource_apply_college','EngineeringController@Engineering_Resource_Apply_College');
Route::match(['get', 'post'],'/rank_predicator','EngineeringController@Rank_Predicator');
Route::match(['get', 'post'],'/college_predicator','EngineeringController@College_Predicator');
Route::match(['get', 'post'],'/news_article_engineering','EngineeringController@News_Article_Engineering');
			   // Routing Study Abroad
Route::match(['get', 'post'],'/study_abroad_course_btech','StudyabroadController@Study_Abroad_Course_Btech');
Route::match(['get', 'post'],'/university_by_country','StudyabroadController@University_by_Country');
Route::match(['get', 'post'],'/country_by_university','StudyabroadController@Country_by_University');
Route::match(['get', 'post'],'/country_home','StudyabroadController@Country_Home');	
Route::match(['get', 'post'],'/tofel','StudyabroadController@Tofel');			
Route::match(['get', 'post'],'/study_app_writting','StudyabroadController@Study_App_Writting');				 
				//  Routing Counselling
Route::match(['get', 'post'],'/career_after_12_science','StudyabroadController@Career_After_12_Science');	

				 //Admin Panel Routing
Route::match(['get', 'post'],'admin/login','AdminController@index');
Route::match(['get', 'post'],'admin/dashboard','AdminController@Dashboard');
Route::match(['get', 'post'],'admin/logout','AdminController@Logout');
Route::match(['get', 'post'],'admin/total_user','AdminController@Total_User');
Route::match(['get', 'post'],'admin/delete_user/{id}','AdminController@Delete_User');
Route::match(['get', 'post'],'admin/changed_block/{id}','AdminController@changedBlock');
Route::match(['get', 'post'],'admin/changed_unblock/{id}','AdminController@changedUnBlock');
Route::match(['get', 'post'],'admin/pending_user','AdminController@Pending_User');
Route::match(['get', 'post'],'admin/approve/{id}','AdminController@Approve_User');
Route::match(['get', 'post'],'admin/decline/{id}','AdminController@Decline_User');
Route::match(['get', 'post'],'admin/add_college','AdminController@Add_College');
Route::match(['get', 'post'],'admin/view_college','AdminController@View_College');
Route::match(['get', 'post'],'admin/delete_college/{id}','AdminController@Delete_College');
Route::match(['get', 'post'],'admin/view_gallery/{id}','AdminController@View_Gallery');
Route::match(['get', 'post'],'admin/add_gallery/{id}','AdminController@Add_Gallery');
Route::match(['get', 'post'],'admin/delete_gallery/{college_id}/{id}','AdminController@Delete_Gallery');
Route::match(['get', 'post'],'admin/account_setting','AdminController@Account_Setting');
Route::match(['get', 'post'],'admin/change_password','AdminController@changePassword');
Route::match(['get', 'post'],'admin/forgot_password','AdminController@forgotPassword');
Route::match(['get', 'post'],'admin/reset_password/{string}','AdminController@resetPassword');
Route::match(['get', 'post'],'admin/select_college','AdminController@Select_College');
Route::match(['get', 'post'],'admin/decline_review/{id}','AdminController@Decline_Review');
Route::match(['get', 'post'],'admin/approve_review/{id}','AdminController@Approve_Review');
Route::match(['get', 'post'],'admin/delete_review/{id}','AdminController@Delete_Review');
Route::match(['get', 'post'],'admin/college_review','AdminController@College_Review');
Route::match(['get', 'post'],'admin/edit_college/{id}','AdminController@Edit_College');
Route::match(['get', 'post'],'admin/edit_college_facilities/{id}','AdminController@Edit_College_facilities');
Route::match(['get', 'post'],'admin/edit_college_contact/{id}','AdminController@Edit_College_Contact');
Route::match(['get', 'post'],'admin/page_setting','AdminController@PageSetting');
Route::match(['get', 'post'],'admin/add_course/{id}','AdminController@Add_Course');
Route::match(['get', 'post'],'admin/view_college_course/{id}','AdminController@View_College_Course');
Route::match(['get', 'post'],'admin/select_course_type','AdminController@Select_Course_Type');
Route::match(['get', 'post'],'admin/delete_course/{id}/{college_id}','AdminController@Delete_Course');
Route::match(['get', 'post'],'admin/view_course_data/{id}/{college_id}','AdminController@View_Course_Data');
Route::match(['get', 'post'],'admin/course_require/{id}/{college_id}','AdminController@Course_Require');
Route::match(['get', 'post'],'admin/edit_course/{id}/{college_id}','AdminController@Edit_Course');
Route::match(['get', 'post'],'admin/add_exam','AdminController@Add_Exam');
Route::match(['get', 'post'],'admin/select_exam_type','AdminController@Select_Exam_Type');
Route::match(['get', 'post'],'admin/view_exam','AdminController@View_Exam');
Route::match(['get', 'post'],'admin/delete_exam/{id}','AdminController@Delete_Exam');
Route::match(['get', 'post'],'admin/college_exam/{id}','AdminController@College_Exam');
Route::match(['get', 'post'],'admin/edit_exam/{id}','AdminController@Edit_Exam');
Route::match(['get', 'post'],'admin/add_category','AdminController@Add_Category');
Route::match(['get', 'post'],'admin/view_category','AdminController@View_Category');
Route::match(['get', 'post'],'admin/edit_category/{id}','AdminController@Edit_Category');
Route::match(['get', 'post'],'admin/delete_category/{id}','AdminController@Delete_Category');
Route::match(['get', 'post'],'admin/view_college_data/{id}','AdminController@View_College_Data');
Route::match(['get', 'post'],'admin/view_events/{id}','AdminController@View_Events');
Route::match(['get', 'post'],'admin/add_events/{id}','AdminController@Add_Events');
Route::match(['get', 'post'],'admin/delete_events/{id}/{college_id}','AdminController@Delete_Events');
Route::match(['get', 'post'],'admin/edit_events/{id}/{college_id}','AdminController@Edit_Events');
Route::get('admin/notification', 'AdminController@notification');
});
