<?php
$config = [

    'createAccount' => [

        [
            'field' => 'fullname',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Name is required.'],
        ],
        [
            'field' => 'contactnumber',
            'label' => '',
            'rules' => 'trim|required|numeric|exact_length[10]|is_unique[vt_useraccount.vc_contact]',
            'errors' => ['required' => 'Contact number is required.', 'numeric' => 'Not valid number format.', 'exact_length' => 'Contact number should be 10 digit.', 'is_unique' => 'This number allready exist.'],
        ],
        [
            'field' => 'state',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'State is required.'],
        ],
        [
            'field' => 'city',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'City is required.'],
        ],
        [
            'field' => 'school',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'School is required.'],
        ],
        [
            'field' => 'emailid',
            'label' => '',
            'rules' => 'trim|required|valid_email|is_unique[vt_useraccount.vc_email]',
            'errors' => ['required' => 'Email is required.', 'valid_email' => 'Enter a valid email.', 'is_unique' => 'This email allready exist.'],
        ],
        [
            'field' => 'newpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[8]',
            'errors' => ['required' => 'Password is required.', 'min_length' => 'Password minimum 6 length.'],
        ],
        [
            'field' => 'reusepassword',
            'label' => '',
            'rules' => 'trim|required|min_length[8]|matches[newpassword]',
            'errors' => ['required' => 'Confirm password is required.', 'min_length' => 'Confirm password minimum 6 length.', 'matches' => 'Confirm password not match.'],
        ],
        [
            'field' => 'classlist',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Class is required.'],
        ],
        [
            'field' => 'subjectlist',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Subject is required.'],
        ],
    ],

    'loginAccount_old' => [
        [
            'field' => 'accountid',
            'label' => '',
            'rules' => 'trim|required|valid_email',
            'errors' => ['required' => 'Email is required.', 'valid_email' => 'Enter a valid email.'],
        ],
        [
            'field' => 'accountpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[6]',
            'errors' => ['required' => 'Password is required.', 'min_length' => 'Password minimum 6 length.'],
        ],
    ],

    'loginAccount' => [
        [
            'field' => 'accountid',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'User Id is required.'],
        ],
        [
            'field' => 'accountpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[6]',
            'errors' => ['required' => 'Password is required.', 'min_length' => 'Password minimum 6 length.'],
        ],
    ],

    'apiRegistration' => [
        [
            'field' => 'fullname',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Name is required.'],
        ],
        [
            'field' => 'contactnumber',
            'label' => '',
            'rules' => 'trim|required|numeric|exact_length[10]|is_unique[vt_useraccount.vc_contact]',
            'errors' => ['required' => 'Contact number is required.', 'numeric' => 'Not valid number format.', 'exact_length' => 'Contact number should be 10 digit.', 'is_unique' => 'This number allready exist.'],
        ],
        [
            'field' => 'emailid',
            'label' => '',
            'rules' => 'trim|required|valid_email|is_unique[vt_useraccount.vc_email]',
            'errors' => ['required' => 'Email is required.', 'valid_email' => 'Enter a valid email.', 'is_unique' => 'This email allready exist.'],
        ],
        [
            'field' => 'newpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[6]',
            'errors' => ['required' => 'Password is required.', 'min_length' => 'Password minimum 6 length.'],
        ],
        [
            'field' => 'confirmpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[6]|matches[newpassword]',
            'errors' => ['required' => 'Confirm password is required.', 'min_length' => 'Confirm password minimum 6 length.', 'matches' => 'Confirm password not match.'],
        ],
        [
            'field' => 'classid',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Class is required.'],
        ],
        [
            'field' => 'devicetype',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Type of device is required (Android or IOS).'],
        ],
    ],
    'apiloginAccount' => [
        [
            'field' => 'accountid',
            'label' => '',
            'rules' => 'trim|required|valid_email',
            'errors' => ['required' => 'Email is required.', 'valid_email' => 'Enter a valid email.'],
        ],
        [
            'field' => 'accountpassword',
            'label' => '',
            'rules' => 'trim|required|min_length[6]',
            'errors' => ['required' => 'Password is required.', 'min_length' => 'Password minimum 6 length.'],
        ],
        [
            'field' => 'devicetype',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Type of device is required (Android or IOS).'],
        ],
    ],
    'userDetail' => [
        [
            'field' => 'fullname',
            'label' => 'Full Name',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Name is required.'],
        ],
        [
            'field' => 'contactnumber',
            'label' => 'Contact number',
            'rules' => 'trim|required|numeric|min_length[10]|exact_length[10]',
            'errors' => ['required' => 'Contact number is required.','min_length' => 'Contact number should be 10 digit.', 'numeric' => 'Not valid contact number.', 'exact_length' => 'Contact number should be 10 digit.'],
        ],
        [
            'field' => 'emailid',
            'label' => 'Email',
            'rules' => 'trim|required|valid_email',
            'errors' => ['required' => 'Email is required.', 'valid_email' => 'Enter a valid email.'],
        ],
        [
            'field' => 'classid',
            'label' => 'Class',
            'rules' => 'trim|required',
            'errors' => ['required' => 'Class is required.'],
        ],
        [
            'field' => 'newpassword',
            'label' => 'New Password',
            'rules' => 'trim|min_length[8]|callback_valid_password',
            'errors' => ['min_length' => 'Password minimum 8 length.'],
        ],
        [
            'field' => 'confirmpassword',
            'label' => 'Confirm password',
            'rules' => 'trim|min_length[8]|matches[newpassword]',
            'errors' => ['min_length' => 'Confirm password minimum 8 length.', 'matches' => 'Confirm password not match.'],
        ],
        [
            'field' => 'userid',
            'label' => '',
            'rules' => 'trim|required',
            'errors' => ['required' => 'User ID required.'],
        ],
    ],
];
