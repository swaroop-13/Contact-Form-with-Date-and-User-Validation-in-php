<?php
$name = $_POST['name'];
$email = $_POST['email'];
$number = $_POST['number'];
$date = $_POST['date'];
$message = $_POST['message'];

$to = 'mswaroop@sageitinc.com';
$subject = 'Contact Us Form Submission';
$body = "Name: $name\nBusiness Email: $email\nBusiness Number: $number\nDate: $date\n";
$headers = "From: $email\r\nReply-To: $email\r\n";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dob = $_POST["dob"];
  }
  

if (mail($to, $subject, $body, $headers)) {
  echo "Thank you for your message!";
} else {
  echo "An error occurred while sending the message.";
}

?>
<?php
session_start();

// Generate a random CAPTCHA code
$code = substr(md5(mt_rand()), 0, 7);

// Save the code to the session
$_SESSION['captcha'] = $code;

// Create an image of the CAPTCHA code
$image = imagecreatetruecolor(100, 30);
$bg_color = imagecolorallocate($image, 255, 255, 255);
$text_color = imagecolorallocate($image, 0, 0, 0);
imagefilledrectangle($image, 0, 0, 100, 30, $bg_color);
imagestring($image, 5, 10, 8, $code, $text_color);

// Set the content type header to display the image
header('Content-type: image/png');

// Output the image as PNG
imagepng($image);

// Clean up
imagedestroy($image);
?>

