<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/../../vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/../../vendor/phpmailer/src/SMTP.php';

$c = get_contact();

$form = !empty($_POST["name"]) && !empty($_POST["email"]) && !empty($_POST["mobile"]) && !empty($_POST["subject"]) && !empty($_POST["message"]);
if($form){
  $g_recaptcha_response = $_POST["g-recaptcha-response"];
  $secret_key = RECAPTCHA_SECRET_KEY;
  $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$g_recaptcha_response");
  $google = json_decode($response);

  if($google->success){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $full_message = "
    Name: $name
    Email: $email
    Mobile: $mobile
    Subject: $subject

    Message:
    $message
    ";

    $mail = new PHPMailer(true);

    try{
      $mail->isSMTP();
      $mail->Host       = 'smtp.gmail.com'; // ou Hostinger depois
      $mail->SMTPAuth   = true;
      $mail->Username   = MAIL_USERNAME;
      $mail->Password   = MAIL_PASSWORD;
      $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
      $mail->Port       = 587;

      $mail->setFrom(MAIL_USERNAME, 'BlueWave Solutions');
      $mail->addAddress(MAIL_TO);
      $mail->addReplyTo($email, $name);

      if (!empty($_POST["email_copy"])) {
          $mail->addAddress($email);
      }

      $mail->isHTML(true);
      $mail->Subject = 'BlueWave – New Contact Request';
      $mail->Body = nl2br(htmlspecialchars($full_message));

      $mail->send();
    }
    catch (Exception $e) {
      // opcional: log de erro
    }
  }
}

?>

  <main>

    <!-- MAIN DESKTOP -->

    <div class="container-fluid desktop">
      <div class="row mt-5 pt-3">
        <div class="col-12 col-lg-9 px-0 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center titulo-secundario">
                Contact Us
              </div>
            </div>
            <div class="row mt-5">
              <div class="col-5 text-left">
                <div class="container-fluid text-left">
                  <div class="row">
                    <div class="col-10">
                      <div class="texto-escuro-contactos"><i class="bi bi-house-fill"></i>Address</div>
                      <div class="texto-morada"><?= $c["address"] ?></div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12 col-xl-6">
                      <div class="texto-escuro-contactos"><i class="bi bi-telephone-fill"></i>Mobile</div>
                      <div class="texto-contactos"><?= $c["mobile"] ?></div>
                    </div>
                    <div class="col-12 col-xl-6 mt-3 mt-xl-0">
                      <div class="texto-escuro-contactos"><i class="bi bi-printer-fill"></i>Fax</div>
                      <div class="texto-contactos"><?= $c["fax"] ?></div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-6">
                      <div class="texto-escuro-contactos"><i class="bi bi-envelope-fill"></i>E-Mail</div>
                      <div class="texto-contactos"><?= $c["email"] ?></div>
                    </div>
                    <div class="col-12 col-xl-6 mt-3 mt-xl-0">
                      <div class="texto-escuro-contactos"><i class="bi bi-file-earmark-person-fill"></i>Tax Number</div>
                      <div class="texto-contactos">nº <?= $c["tax"] ?></div>
                    </div>
                  </div>
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="texto-escuro-contactos"><i class="bi bi-geo-fill"></i>GPS</div>
                      <div class="texto-contactos"><?= $c["gps"] ?></div>
                    </div>
                  </div>
                  <div class="row mt-5">
                    <div class="col-10 d-flex justify-content-center align-items-center">
                      <img src="public/assets/images/icons/desktop/bluewave_logo_vertical.png" alt="" width="150">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-7">
                <form action="" method="post" id="form_contactos_desktop" class="form-contactos d-flex flex-column" autocomplete="off">
                  <label for="name_desktop">*Name</label>
                  <input type="text" name="name" id="name_desktop" placeholder="Your name" required autofocus>
                  <br>
                  <label for="email_desktop">*E-mail</label>
                  <input type="email" name="email" id="email_desktop" placeholder="Your Email" required>
                  <br>
                  <label for="mobile_desktop">*Mobile</label>
                  <input type="tel" name="mobile" id="mobile_desktop" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" placeholder="Your mobile number" required>
                  <br>
                  <label for="subject_desktop">*Subject</label>
                  <input type="text" name="subject" id="subject_desktop" placeholder="What is the subject?" required>
                  <br>
                  <label for="message_desktop">*Message</label>
                  <textarea name="message" id="message_desktop" placeholder="Your message" required></textarea>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-6 mt-2 text-left px-0 d-flex flex-column align-items-start">
                        <div class="preenchimento-obrigatorio lh-1">* Required fields</div>
                        <div class="d-flex align-items-center">
                          <input type="checkbox" name="email_copy" id="email_desktop_copy" class="copia-email">
                          <label for="email_desktop_copy" class="texto-copia-email lh-1">Please send me a copy of this message</label>
                        </div>
                      </div>
                      <div class="col-6 px-0">
                        <div class="caixa-recaptcha-desktop d-flex flex-column align-items-end">
                          <div class="g-recaptcha pe-3" data-sitekey="6LfxBE4sAAAAAM2UhMETVtc3Pz9UKWelrADlDOfk"></div>
                          <input type="submit" value="Send" class="send-btn pb-2 mt-4">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Mapa integrado com a localização -->

      <div class="row mt-3">
        <div class="col-12 px-0 mx-auto">
          <iframe src="<?= $c["map_url"] ?>" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

    </div>

    <!-- MAIN MOBILE -->
    
    <div class="container-fluid mobile">
      <div class="row mt-5 px-0">
        <div class="col-11 mx-auto">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center titulo-secundario">
                Contact Us
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-house-fill"></i>Address</div>
                <div class="texto-morada"><?= $c["address"] ?></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-telephone-fill"></i>Mobile</div>
                <div class="texto-contactos"><?= $c["mobile"] ?></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-printer-fill"></i>Fax</div>
                <div class="texto-contactos"><?= $c["fax"] ?></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-envelope-fill"></i>E-Mail</div>
                <div class="texto-contactos"><?= $c["email"] ?></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-file-earmark-person-fill"></i>Tax Number</div>
                <div class="texto-contactos">nº <?= $c["tax"] ?></div>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-12">
                <div class="texto-escuro-contactos"><i class="bi bi-geo-fill"></i>GPS</div>
                <div class="texto-contactos"><?= $c["gps"] ?></div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12 mx-auto">
                <form action="" method="post" id="form_contactos_mobile" class="form-contactos d-flex flex-column" autocomplete="off">
                  <label for="name_mobile">*Name</label>
                  <input type="text" name="name" id="name_mobile" placeholder="Your name" required autofocus>
                  <br>
                  <label for="email_mobile">*E-mail</label>
                  <input type="email" name="email" id="email_mobile" placeholder="Your Email" required>
                  <br>
                  <label for="mobile_mobile">*Mobile</label>
                  <input type="tel" name="mobile" id="mobile_mobile" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" placeholder="Your mobile number" required>
                  <br>
                  <label for="subject_mobile">*Subject</label>
                  <input type="text" name="subject" id="subject_mobile" placeholder="What is the subject?" required>
                  <br>
                  <label for="message_mobile">*Message</label>
                  <textarea name="message" id="message_mobile" placeholder="Your message" required></textarea>
                  <div class="container-fluid">
                    <div class="row">
                      <div class="col-12 mt-3 text-left px-0 lh-1">
                        <div class="preenchimento-obrigatorio">* Required fields</div>
                        <div class="d-flex align-items-center">
                          <input type="checkbox" name="email_copy" id="email_mobile_copy" class="copia-email">
                          <label for="email_mobile_copy" class="texto-copia-email">Please send me a copy of this message</label>
                        </div>
                      </div>
                    </div>
                    <div class="row px-0 gx-4">
                      <div class="col-7 pe-3">
                        <div class="caixa-recaptcha-mobile">
                          <div class="g-recaptcha" data-sitekey="6Lf2z_wsAAAAAPRr0sTe2iJm8EjKJ46bX4zGbX7x"></div>
                        </div>
                      </div>
                      <div class="col-5">
                        <div class="mt-4 d-flex justify-content-end">
                          <input type="submit" value="Send" class="send-btn">
                        </div>
                      </div>
                    </div>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>

      <!-- Mapa integrado com a localização -->
       
      <div class="row mt-2">
        <div class="col-12 px-0">
          <iframe class="w-100 mapa-mobile" height="250" src="<?= $c["map_url"] ?>" class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
      
    </div>

  </main>

