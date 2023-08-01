<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
include("index.php");
include("connections.php");
$dbhost = "localhost";
$dbuser = "root";
$dbpwd = "";
$dbname = "relyon_imax";

$newconnection = mysqli_connect("localhost", "root", "", "relyon_imax") or die("Connection error");
// session_start();

// Check if the user is logged in. If not, redirect to the login page.
// if (!isset($_SESSION['username']) || !isset($_SESSION['password'])) {
//     header('Location: index.php');
//     exit();
// }

// Establish a connection to the MySQL database (Assuming you have a valid $connection variable)

// Retrieve the user's details from the database based on the user ID
$user_name = $_SESSION['username'];

// Prepare and execute a SELECT query
$sql = "SELECT * FROM users WHERE id = $user_name";
$result = mysqli_query($newconnection, $sql);

if ($result) {
    // Fetch the user's details as an associative array
    $user_details = mysqli_fetch_assoc($result);

    // Now you can access the user's details like name, email, etc.
    $user_name = $user_details['username'];
    $user_type = $user_details['type'];

    // Display the user's name in the dashboard or any other page
    echo "Welcome, $user_name!";
} else {
    // Error handling if the query fails
    echo "Error fetching user details: " . mysqli_error($connection);
}

// mysqli_close($connection);
function encodevalue($input)
{
    $length = strlen($input);
    $output1 = "";
    for ($i = 0; $i < $length; $i++) {
        $output1 .= $input[$i];
        if ($i < ($length - 1))
            $output1 .= "a";
    }
    $output = "";
    for ($i = 0; $i < strlen($output1); $i++) {
        $output .= chr(ord($output1[$i]) + 7);
    }
    return $output;
}

function decodevalue($input)
{
    $input = str_replace('\\\\', '\\', $input);
    $input = str_replace("\\'", "'", $input);
    $length = strlen($input);
    $output = "";
    for ($i = 0; $i < $length; $i++) {
        if ($i % 2 == 0)
            $output .= chr(ord($input[$i]) - 7);
    }
    $output = str_replace("'", "\'", $output);
    return $output;
}

function imaxdeletecookie($cookiename)
{
    // Name Suffix for MD5 value
    $stringsuff = "55";

    // Convert Cookie Name to base64
    $Encodename = encodevalue($cookiename);

    // Append the encoded cookie name with 55(suffix ) for MD5 value
    $rescookiename = $Encodename . $stringsuff;

    // Set expiration to negative time, which will delete the cookie
    setcookie($Encodename, '', time() - 3600);
    setcookie($rescookiename, '', time() - 3600);
}

function imaxgetcookie($cookiename)
{
    $suff = "55";

    // Convert the Cookie Name to base64
    $Encodestr = encodevalue($cookiename);

    // Check if the cookie name is set
    if (isset($_COOKIE[$Encodestr])) {
        $stringret = $_COOKIE[$Encodestr];
        $stringret = stripslashes($stringret);

        // Convert the read cookie name to md5 encode technique
        $Encodestring = md5($stringret);

        // Appended the encoded cookie name to 55 (suffix)
        $resultstr = $Encodestr . $suff;

        // Check if the cookie with the appended suffix is set
        if (isset($_COOKIE[$resultstr])) {
            $cookiemd5 = $_COOKIE[$resultstr];

            // Compare the encoded value with the fetched cookie, if the condition is true, decode the cookie value
            if ($Encodestring == $cookiemd5) {
                $decodevalue = decodevalue($stringret);

                // Remove the Prefix/Suffix Characters
                $string1 = substr($decodevalue, 7);
                $resultstring = substr($string1, 0, -7);
                return $resultstring;
            }
        }
    }
    // Cookie Not Available or Validation failed
    return false;
}

function datetimelocal($format)
{
    $date = date($format);
    return $date;
}

function runmysqlquery($query)
{
    global $newconnection;

    // Connect to Database using mysqli
    $newconnection = mysqli_connect('localhost', 'root', '', 'relyon_imax');


    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    //Set the charset to utf8
    mysqli_set_charset($newconnection, "utf8");

    //Run the query
    $result = mysqli_query($newconnection, $query) or die("Query Failed: " . mysqli_error($newconnection));

    //Return the result
    return $result;
}

function runmysqlqueryfetch($query)
{
    global $newconnection;
    $dbname = 'relyon_imax';

    // Connect to Database using mysqli
    $newconnection = mysqli_connect("localhost", "root", "", "relyon_imax");

    // Check connection
    if (mysqli_connect_errno()) {
        die("Failed to connect to MySQL: " . mysqli_connect_error());
    }

    //Set the charset to utf8
    mysqli_set_charset($newconnection, "utf8");

    //Run the query
    $result = mysqli_query($newconnection, $query) or die("Query Failed: " . mysqli_error($newconnection));

    //Fetch the Query to an array
    $fetchresult = mysqli_fetch_array($result) or die("Cannot fetch the query result.");

    //Return the result
    return $fetchresult;
}

function imaxcreatecookie($cookiename, $cookievalue)
{
    // Define prefix and suffix
    $prefixstring = "AxtIv23";
    $suffixstring = "StPxZ46";
    $stringsuff = "55";

    // Append Value with the Prefix and Suffix
    $Appendvalue = $prefixstring . $cookievalue . $suffixstring;

    // Convert the Appended Value to base64
    $Encodevalue = encodevalue($Appendvalue);

    // Convert Cookie Name to base64
    $Encodename = encodevalue($cookiename);

    // Create a cookie with the encoded name and value
    setcookie($Encodename, $Encodevalue);

    // Convert Appended encode value to MD5
    $rescookievalue = md5($Encodevalue);

    // Appended the encoded cookie name with 55(suffix )
    $rescookiename = $Encodename . $stringsuff;

    // Create a cookie
    setcookie($rescookiename, $rescookievalue);

    return false;
}

function changedateformat($date)
{
    if ($date !== null && $date !== "0000-00-00") {
        if (strpos($date, " ")) {
            $result = explode(" ", $date);
        } else {
            $result = preg_split("/[:.\/-]/", $date);
        }
        $date = $result[2] . "-" . $result[1] . "-" . $result[0];
    } else {
        $date = "";
    }
    return $date;
}
function logoutUser()
{
    // Remove the user-specific cookies by setting their expiration time in the past
    imaxdeletecookie('ssmuserid'); // Replace 'ssmuserid' with the name of your user-specific cookie
    // Other cookies if needed...
    // Perform any other logout-related actions, such as clearing session data or redirecting to the login page.
    // For example, you can clear session data:
    session_start();
    session_unset();
    session_destroy();

    // Redirect the user to the login page
    header("Location: index.php"); // Replace 'login.php' with the path to your login page
    exit(); // Stop executing the script after the redirection.
}

?>