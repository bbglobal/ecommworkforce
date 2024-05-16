<?php
include 'header.php';
head("Join Us");
//Load Composer's autoloader
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['join'])) {

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = 0;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'ecommboosters.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'info@ecommworkforce.com';                     //SMTP username
        $mail->Password   = 'EcommwF@321.';                               //SMTP password
        $mail->SMTPSecure =  'ssl';   //Enable implicit TLS encryption
        $mail->Port       = 465;    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('info@ecommworkforce.com', 'EWF');
        $mail->addAddress('info@ecommworkforce.com', 'EcommWorkForce');

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = "Who Wants to Join Us";
        $mail->Body    = `Name: {$_GET['name']} <br/> 
                          Email: {$_GET['email']} <br/>
                          Gender: {$_GET['gender']} <br/>
                          Age: {$_GET['age']} <br/>
                          Contact: {$_GET['contact']} <br/>
                          Location: {$_GET['loc']} <br/>
                          Profile: {$_GET['profile']} <br/>
                          Education: {$_GET['edu']} <br/>
                          Applyied For: {$_GET['apply']} <br/>
                          Experience : {$_GET['exp']} <br/>
                          Expected Salary: {$_GET['salary']} <br/>
                          Where did he/her find this job?: {$_GET['find']} <br/>
                          Is he/she comfortable working in On-Site setting?: {$_GET['onsite']}
                          `;

        $mail->AltBody = "Name: {$_GET['name']} <br/> 
                          Email: {$_GET['email']} <br/>
                          Gender: {$_GET['gender']} <br/>
                          Age: {$_GET['age']} <br/>
                          Contact: {$_GET['contact']} <br/>
                          Location: {$_GET['loc']} <br/>
                          Profile: {$_GET['profile']} <br/>
                          Education: {$_GET['edu']} <br/>
                          Applyied For: {$_GET['apply']} <br/>
                          Experience : {$_GET['exp']} <br/>
                          Expected Salary: {$_GET['salary']} <br/>
                          Where did he/her find this job?: {$_GET['find']} <br/>
                          Is he/she comfortable working in On-Site setting?: {$_GET['onsite']}";

        $mail->send();
        $sent = "Success";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
<section id="help-header">
    <div class="circle-right" data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500"></div>
    <div class="header-section">
        <div class="header-content">
            <h1 class="h1 text-white">Join Us</h1>
        </div>
    </div>
    <div class="circle-left" data-aos="fade-up" data-aos-duration="2000"></div>
</section>

<section id="careers" class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="img/form-img.png" alt="image" style="margin-top: 300px;">
            </div>

            <div class="col-12 col-md-6">
                <div class="text-center">
                    <h2>Join Us</h2>
                    <p>99% of brands are leaking money on Amazon.</p>
                </div>
                <form method="get" class="p-5" style="background-color: #cfcece; border-radius:20px;">
                    <div class="row">
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="name" class="form-label">Full Name:</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="gender" class="form-label">Gender:</label>
                                <input type="text" class="form-control" id="gender" name="gender">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="age" class="form-label">Age:</label>
                                <input type="text" class="form-control" id="age" name="age">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="number" class="form-label">Contact:</label>
                                <input type="number" class="form-control" id="number" name="contact">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="loc" class="form-label">Location In Karachi:</label>
                                <input type="text" class="form-control" id="loc" name="loc">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="profile" class="form-label">LinkedIn Profile:</label>
                                <input type="text" class="form-control" id="profile" name="profile">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="edu" class="form-label">Education (Offical Degree Name):</label>
                                <input type="text" class="form-control" id="edu" name="edu">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="apply" class="form-label">Applying For?:</label>
                                <input type="text" class="form-control" id="apply" name="apply">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="mb-3 mt-3">
                                <label for="exp" class="form-label">Relevent Experience:</label>
                                <input type="text" class="form-control" id="exp" name="exp">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 mt-3">
                                <label for="salary" class="form-label">Expected Salary:</label>
                                <input type="number" class="form-control" id="salary" name="salary">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 mt-3">
                                <label for="find" class="form-label">Where did you find this job?:</label>
                                <input type="text" class="form-control" id="find" name="find">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3 mt-3">
                                <label for="onsite" class="form-label">Are you comfortable working in On-Site setting?:</label>
                                <input type="text" class="form-control" id="onsite" name="onsite">
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="join" class="btn btn-outline-dark">Submit Form</button>
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<script>
    close();
</script>