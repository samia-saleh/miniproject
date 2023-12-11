<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// In-memory user data
$users = [
    'john' => 'password123',
    'jane@gmail.com' => 'secret456',
];

// Function to authenticate user
function myAppSignin($username, $password)
{
    global $users;

    // Check if user exists and password matches
    if (isset($users[$username]) && $users[$username] === $password) {
        // Start a session and store the username
        // session_start();
        // $_SESSION['username'] = $username;
        $_SESSION['isSignedIn'] = true;
        return true; // Authentication successful
    }

    return false; // Authentication failed
}

// Function to check if user is logged in
function myAppIsUserSignedIn()
{
    return isset($_SESSION['isSignedIn']);
}

// Function to log out user
function myAppSignout()
{
    // Starting a session
    // session_start();
    session_unset();
    session_destroy();
}

function myAppEmailSendMessage($messageArgs = array())
{
    // print_r($messageArgs);
    // exit;
    if (!empty($messageArgs) && isset($messageArgs['name']) && isset($messageArgs['email']) && isset($messageArgs['phone'])  && isset($messageArgs['subject']) && isset($messageArgs['message'])) {
        //read the message string
        $strMessage = file_get_contents('layout/message.html', true);

        $name = $messageArgs['name'];
        $email = $messageArgs['email'];
        $phone = $messageArgs['phone'];
        $subject = $messageArgs['subject'];
        $message = $messageArgs['message'];

        //replace something in the file string - this is a VERY simple example
        $strMessage = str_replace("{{fullname}}", $name, $strMessage);
        $strMessage = str_replace("{{email}}", $email, $strMessage);
        $strMessage = str_replace("{{mobile}}", $phone, $strMessage);
        $strMessage = str_replace("{{subject}}", $subject, $strMessage);
        $strMessage = str_replace("{{message}}", $message, $strMessage);
        //


        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = SITE_EMAIL;
            $mail->Password   = SITE_EMAIL_SECRET; //app password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->CharSet = 'UTF-8'; // Set UTF-8 character encoding

            $mail->setFrom($email, $name);
            $mail->addAddress("your-username@gmail.com");

            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $strMessage; //$post['message'];

            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }

        return false;
    }
}


// function addMenuItem($title, $url)
// {
//     global $menuItems;

//     // $menuItems += array($url=> $title);
//     $menuItems[$url] = $title;
// }

//
function myAppRenderMenu($menuName, $args)
{
    global $config;
    $src = array('{{title}}', '{{url}}');
    // print_r($menuItems);
    foreach ($config['menus'][$menuName] as $url => $title) {
        if (is_array($title)) {
            $newArray = array_keys($title);
            $target = array($newArray[0], $url);
            echo str_replace($src, $target, $args['submenu-start']);
            // print_r($title[$newArray[0]]);
            foreach ($title[$newArray[0]] as $_url => $_title) {
                $target = array($_title, $_url);
                echo str_replace($src, $target, $args['submenu-item']);
            }
            echo $args['submenu-end'];
        } else {
            $target = array($title, $url);
            echo str_replace($src, $target, $args['menu-item']);
        }
    }
}

/**
 * Validate a field based on the provided options.
 *
 * @param string $field The field value to validate.
 * @param string $options The validation options separated by pipe (|) character. ex. $options = "required|email|max:60|min:12"
 * @return string|null The error message if validation fails, or null if validation passes.
 */
function myAppFieldValidate($field, $instance, $options = "")
{
    $result = array();

    // Split options into an array
    $rules = explode('|', $options);

    foreach ($rules as $rule) {
        if ($rule === 'required') {
            if (empty($instance)) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' is required.';
                // break;
            }
        }
        if ($rule === 'email') {
            if (!filter_var($instance, FILTER_VALIDATE_EMAIL)) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' is invalid email format.';
                // break;
            }
        }

        $minmax = explode(':', $rule);
        if ($minmax[0] === 'max') {
            if (strlen($instance) > $minmax[1]) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' length exceeds the maximum limit.';
                // break;
            }
        }
        if ($minmax[0] === 'min') {
            if (strlen($instance) < $minmax[1]) {
                // $result['error'] = true;
                $result['message'][] = 'The field ' . $field . ' length is less than the minimum limit.';
                // break;
            }
        }
        // if (strpos($rule, 'max:') === 0) {
        //     $maxValue = substr($rule, 4);
        //     if (strlen($instance) > $maxValue) {
        //         // $result['error'] = true;
        //         $result['message'][] = 'The field '.$field.' length exceeds the maximum limit.';
        //         // break;
        //     }
        // }
        // if (strpos($rule, 'min:') === 0) {
        //     $minValue = substr($rule, 4);
        //     if (strlen($instance) < $minValue) {
        //         // $result['error'] = true;
        //         $result['message'][] = 'The field '.$field.' length is less than the minimum limit.';
        //         // break;
        //     }
        // }
    }
    if (($options !== "") && (!empty($result['message']))) {
        $result['pass'] = false;
    } else {
        $result['pass'] = true;
    }
    return $result;
}

function myAppRequestRoute()
{

    // Get the file name from the URL
    $pageName = $_SERVER['REQUEST_URI'];
    // echo "<h1>".$pageName ."</h1>";

    $pageName = str_replace(ROOT_PATH, "", $pageName);
    // echo "<h1>".$pageName ."</h1>";

    // echo $pageName;
    // $_SESSION['messages'] = array();
    // unset($_SESSION['messages']);
    $pageName = myAppDeleteLastSlash($pageName);

    //
    if ($pageName == "") {
        $pageName = "home";
    } else if ($pageName == "dashboard") {
        $pageName = "dashboard/home";
    }

    return $pageName;
}


function myAppCSRFToken($form = "form")
{
    if (empty($_SESSION[$form]['csrf_token'])) {
        $_SESSION['csrf_token'][$form] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'][$form];
}

function myAppFormValidate()
{
    if (isset($_POST['form_name']) && $_POST['csrf_token'] && hash_equals($_SESSION['csrf_token'][$_POST['form_name']], $_POST['csrf_token'])) {
        // CSRF token is valid
        return true;
    } else {
        // CSRF token is invalid
        return false;
    }
}

function myAppHandleFileUpload($file, $targetDirectory)
{
    $uploadPath = $targetDirectory . basename($file['name']);

    // Check if file is a valid upload
    if (!is_uploaded_file($file['tmp_name'])) {
        return "Invalid file upload.";
    }

    // Check if the target directory exists, create it if necessary
    if (!file_exists($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($file['tmp_name'], $uploadPath)) {
        return "File uploaded successfully.";
    } else {
        return "File upload failed.";
    }
}

function myAppDeleteLastSlash($string)
{
    if (substr($string, -1) === '/') {
        $string = substr_replace($string, "", -1);
    }
    return $string;
}

