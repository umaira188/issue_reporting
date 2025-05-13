<?php
return [
    //welcome.blade.php
    'colombo_municipal_council' => 'Colombo Municipal Council',
    'home' => 'Home',
    'login' => 'Login',
    'complaint_management' => 'Complaint Management System',
    'efficient' => 'Efficient',
    'easy' => 'Easy',
    'effortless' => 'Effortless',
    'lodge_complaint' => 'Lodge a Complaint',
    'track_complaint' => 'Track a Complaint',
    'how_to_report' => 'How to Report an Issue',
    'step1' => 'Step 1',
    'signin' => 'Sign-in',
    'step2' => 'Step 2',
    'describe_issue' => 'Describe the issue and provide location details.',
    'step3' => 'Step 3',
    'upload_images' => 'Upload images for better clarity.',
    'step4' => 'Step 4',
    'track_progress' => 'Track the progress of your complaint.',
    'step5' => 'Step 5',
    'feedback' => 'Provide Feedback',
    'quick_links' => 'Quick Links',
    'dashboard' => 'Dashboard',
    'contact_us' => 'Contact Us',
    'email' => 'Email',
    'phone' => 'Phone',
    'address' => 'Address: Colombo Municipal Council, Colombo 07, Sri Lanka',
    'follow_us' => 'Follow Us',
    'rights_reserved' => 'All rights reserved.',

    //login.blade.php
   'email' => 'Email',
   'password' => 'Password',
   'remember_me' => 'Remember me',
   'forgot_password' => 'Forgot your password?',
   'log_in' => 'Log in',

   //register.blade.php
   'name' => 'Name',
   'confirm_password' => 'Confirm Password',
   'already_registered' => 'Already registered?',
   'register' => 'Register',

   //track-form.blade.php
    'track_your_complaint' => 'Track Your Complaint',
    'enter_issue_id' => 'Enter your Issue ID:',
    'track_complaint_button' => 'Track Complaint',

    //track-result.blade.php
    'complaint_details' => 'Complaint Details',
    'issue_id' => 'Issue ID',
    'category' => 'Category',
    'address' => 'Address',
    'status' => 'Status',
    'details' => 'Details',
    'status_timeline' => 'Status Timeline',

    //lodge-complaint.blade.php
    'issue_type' => 'Type of the Issue:',
    'select_issue_type' => 'Select the Issue Type',
     'road_maintenance' => 'Road Maintenance',
     'street_lighting' => 'Street Lighting',
     'water_drainage' => 'Water & Drainage',
    'illegal_garbage' => 'Illegal Garbage Dumping',
    'address' => 'Address:',
    'details' => 'Details:',
    'upload_image' => 'Upload Image:',
    'choose_file' => 'Choose File',
     'no_file_chosen' => 'No file chosen',
    'language_note' => 'Please type in your selected language.',
     'submit' => 'Submit',

     //feedback.blade.php
    'submit_feedback' => 'Submit Feedback',
    'feedback_placeholder' => 'Write your feedback here...',
     'feedback_note' => 'Please type your feedback in your selected language.',
    'send_feedback' => 'Send Feedback',
<<<<<<< HEAD
     'feedback_success' => 'Thank you for your feedback!',

=======
<<<<<<< HEAD
     'feedback_success' => 'Thank you for your feedback!',

=======
>>>>>>> 341b4f5 (Frontend updates and layout improvements)
>>>>>>> 7f40251 (Resolved merge conflicts and added frontend updates)

    //profile.blade.php
      //Update Profile
      'profile' => 'Profile',
    'profile_info' => 'Profile Information',
    'profile_info_note' => "Update your account's profile information and email address.",
    'unverified_email' => 'Your email address is unverified.',
    'resend_verification' => 'Click here to re-send the verification email.',
    'verification_sent' => 'A new verification link has been sent to your email address.',
      //Update Password
    'update_password' => 'Update Password',
    'update_password_note' => 'Ensure your account is using a long, random password to stay secure.',
    'current_password' => 'Current Password',
     'current_password_required' => 'The current password field is required.',
     'password_required' => 'The password field is required.',
    'new_password' => 'New Password',
    'confirm_password' => 'Confirm Password',
    'save' => 'Save',
    'saved' => 'Saved.',
    //Delete Account
    'delete_account' => 'Delete Account',
    'delete_account_note' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Please download any data you wish to retain.',
    'confirm_delete' => 'Are you sure you want to delete your account?',
    'confirm_delete_note' => 'Please enter your password to confirm you would like to permanently delete your account.',
    'cancel' => 'Cancel',

    //complaint-history.blade.php
    'complaint_history' => 'Complaint History',
     'issue_id' => 'Issue ID',
    'category' => 'Category',
    'current_status' => 'Current Status',
    'submitted_at' => 'Submitted At',
    'status_timeline' => 'Status Timeline',
    'no_timeline' => 'No timeline available.',
    'no_complaints' => "You haven't submitted any complaints yet.",

        // Nested arrays for categories and statuses
    'categories' => [
        'road' => 'Road Maintenance',
        'lighting' => 'Street Lighting',
        'water' => 'Water & Drainage',
        'garbage' => 'Illegal Garbage Dumping',
    ],

    'statuses' => [
        'received' => 'Received',
        'assigned' => 'Assigned',
         'in_progress' => 'In Progress',
        'completed' => 'Completed',
        'closed' => 'Closed',
        'work_started' => 'Work Started',
         'pending' => 'Pending', 
    ],

    //division.blade.php
     'division_dashboard' => 'Division Office Dashboard',
    'status' => 'Status',
    'all' => '-- All --',
    'from_date' => 'From Date',
    'to_date' => 'To Date',
    'filter' => 'Filter',
    'reset' => 'Reset',
    'division_complaints' => 'Division Office Complaints',
    'view_details' => 'View Details',
    'update' => 'Update',
    'no_complaints_admin' => 'No complaints assigned yet.',

    //env.blade.php
     'env_dashboard' => 'Environmental Police Dashboard',
     'garbage_complaints' => 'Garbage Complaints',

     //municipal.blade.php
      'municipal_dashboard' => 'Municipal Council Dashboard',
      'municipal_complaints' => ' Municipal Council Complaints',

      //complaint-details.blade.php
    'complaint_details' => 'Complaint Details',
    'issue_id' => 'Issue ID',
    'address' => 'Address',
    'submitted_by' => 'Submitted By',
    'details' => 'Details',
    'image' => 'Image',
    'back' => 'Back',

    //edit.blade.php
      // Block access for admins
       'access_restricted' => 'Access Restricted',
    'logged_in_as' => 'You are logged in as',
    'profile_disabled' => 'Profile updates, password changes, and account deletion are disabled for your role.',

    //forgot-password.blade.php
     'forgot_password_text' => 'Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.',
    'email' => 'Email',
    'email_password_link' => 'Email Password Reset Link',

    
    // Nested arrays for reset links
    'reset_links' => [
     'reset' => 'Your password has been reset!',
    'sent' => 'We have emailed your password reset link.',
    'throttled' => 'Please wait before retrying.',
    'token' => 'This password reset token is invalid.',
    'user' => "We can't find a user with that email address.",
    ],

    //navigation.blade.php
    'lodge_complaint' => 'Lodge Complaint',
    'complaint_history' => 'Complaint History',
    'feedback' => 'Feedback',
    'profile' => 'Profile',
    'logout' => 'Logout',
    'manage_admins' => 'Manage Admins',
    'all_complaints' => 'All Complaints',
    'all_feedbacks' => 'All Feedbacks',
    'env_dashboard' => 'Env Police Dashboard',
    'division_dashboard' => 'Division Dashboard',
    'municipal_dashboard' => 'Municipal Dashboard',

    //dashboard.blade.php
    'dashboard_title' => 'Dashboard',
    'logged_in' => "You're logged in!",

    //manage.blade.php
       //Super Admin Panel
    'manage_admins' => 'Manage Admins',
    'super_admin_panel' => 'Super Admin Panel',
    'admin_panel_note' => 'You can manage department admin accounts from here.',
    'create_new_admin' => 'Create a New Admin',
    'full_name' => 'Full Name',
    'email' => 'Email',
    'select_department' => '-- Select Department --',
    'env_police' => 'Env Police',
    'municipal' => 'Municipal Council',
    'division' => 'Division Office',
    'password' => 'Password',
    'create_admin' => 'Create Admin',
    'existing_admins' => 'Existing Admins',
    'edit' => 'Edit',
    'delete' => 'Delete',
    'confirm_delete' => 'Are you sure you want to delete this admin?',

     // Admin Roles
    'roles' => [
        'super_admin' => 'Super Admin',
        'env_police' => 'Env Police',
        'municipal' => 'Municipal Council',
        'division_office' => 'Division Office',
    ],

     // edit.blade.php
       //Admin Panel
     'edit_admin' => 'Edit Admin',
'success_updated' => 'Admin updated successfully!',
'new_password_optional' => 'New Password (optional)',
'update_admin' => 'Update Admin',
'cancel' => 'Cancel',

        // all-complaints.blade.php
'all_complaints' => 'All Complaints',
'no_complaints_found' => 'No complaints found.',
'category' => 'Category',
'status' => 'Status',
'user' => 'User',
'date' => 'Date',

     // all-feedbacks.blade.php
'all_feedbacks' => 'All Feedbacks',
'no_feedback_found' => 'No feedback submitted yet.',
'message' => 'Message',
'submitted' => 'Submitted',










  








];


