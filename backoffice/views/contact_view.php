<?php

$c = get_contact();

$form_1 = !empty($_POST["id"]) && !empty($_POST["form_type"]);

if($form_1){

  $id = $_POST["id"];
  $form_type = $_POST["form_type"];

  /** CONTACT INFO */
  if($form_type == "contact"){
    $form_2 = !empty($_POST["address"]) &&
              !empty($_POST["mobile"]) &&
              !empty($_POST["fax"]) &&
              !empty($_POST["email"]) &&
              !empty($_POST["tax"]) &&
              !empty($_POST["gps"]);

    if($form_2){
      edit_contact(
        $_POST["address"],
        $_POST["mobile"],
        $_POST["fax"],
        $_POST["email"],
        $_POST["tax"],
        $_POST["gps"],
        $c["map_url"],
        $c["linkedin"],
        $c["instagram"],
        $c["facebook"]
      );
      header("Location: contact.php");
      exit;
    }
  }

  /** SOCIALS */
  if($form_type == "socials"){
    $form_2 = !empty($_POST["linkedin"]) &&
              !empty($_POST["instagram"]) &&
              !empty($_POST["facebook"]);
    if($form_2){
      edit_contact(
        $c["address"],
        $c["mobile"],
        $c["fax"],
        $c["email"],
        $c["tax"],
        $c["gps"],
        $c["map_url"],
        $_POST["linkedin"],
        $_POST["instagram"],
        $_POST["facebook"]
      );
      header("Location: contact.php");
      exit;
    }
  }

  /** MAP */
  if($form_type == "map"){
    $form_2 = !empty($_POST["map_url"]);
    if($form_2){
      edit_contact(
        $c["address"],
        $c["mobile"],
        $c["fax"],
        $c["email"],
        $c["tax"],
        $c["gps"],
        $_POST["map_url"],
        $c["linkedin"],
        $c["instagram"],
        $c["facebook"]
      );
      header("Location: contact.php");
      exit;
    }
  }
}

?>

  <main class="admin-layout">

    <div class="container-fluid">

      <div class="row admin-box px-0 mt-3 mt-xl-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Contact Page</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php if($c): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12">
                        <form method="post">

                          <input type="hidden" name="id" value="1">
                          <input type="hidden" name="form_type" value="contact">

                          <!-- Address -->
                          <div class="mb-3">
                            <label for="contact_address_edit" class="form-label"><i class="bi bi-house-fill"></i>Address</label>
                            <textarea
                              name="address"
                              id="contact_address_edit"
                              class="form-control"
                              rows="3"
                              required
                            ><?= $c["address"] ?></textarea>
                          </div>

                          <!-- Mobile + Fax -->
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="contact_mobile_edit" class="form-label"><i class="bi bi-telephone-fill"></i>Mobile</label>
                              <input
                                type="text"
                                name="mobile"
                                id="contact_mobile_edit"
                                class="form-control"
                                value="<?= $c["mobile"] ?>"
                                required
                              >
                            </div>

                            <div class="col-md-6 mb-3">
                              <label for="contact_fax_edit" class="form-label"><i class="bi bi-printer-fill"></i>Fax</label>
                              <input
                                type="text"
                                name="fax"
                                id="contact_fax_edit"
                                class="form-control"
                                value="<?= $c["fax"] ?>"
                                required
                              >
                            </div>
                          </div>

                          <!-- Email + Tax -->
                          <div class="row">
                            <div class="col-md-6 mb-3">
                              <label for="contact_email_edit" class="form-label"><i class="bi bi-envelope-fill"></i>E-Mail</label>
                              <input
                                type="email"
                                name="email"
                                id="contact_email_edit"
                                class="form-control"
                                value="<?= $c["email"] ?>"
                                required
                              >
                            </div>

                            <div class="col-md-6 mb-3">
                              <label for="contact_tax_edit" class="form-label"><i class="bi bi-file-earmark-person-fill"></i>Tax Number</label>
                              <input
                                type="text"
                                name="tax"
                                id="contact_tax_edit"
                                class="form-control"
                                value="<?= $c["tax"] ?>"
                                required
                              >
                            </div>
                          </div>

                          <!-- GPS -->
                          <div class="mb-3">
                            <label for="contact_gps_edit" class="form-label"><i class="bi bi-geo-fill"></i>GPS Coordinates</label>
                            <input
                              type="text"
                              name="gps"
                              id="contact_gps_edit"
                              class="form-control"
                              value="<?= htmlentities($c["gps"]) ?>"
                              required
                            >
                          </div>

                          <!-- Submit -->
                          <button type="submit" class="btn btn-warning">
                            <i class="bi bi-pencil-fill"></i> Save Changes
                          </button>

                        </form>
                      </div>
                    </div>
                  <?php endif ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Socials</div>
          </div>
          <div class="container-fluid">
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php if($c): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12">

                        <form method="post">
                          
                          <input type="hidden" name="id" value="1">
                          <input type="hidden" name="form_type" value="socials">

                          <!-- LinkedIn -->

                          <div class="mb-3">
                            <label for="contact_linkedin_edit" class="form-label"><i class="bi bi-linkedin"></i>LinkedIn</label>
                            <input
                              type="url"
                              name="linkedin"
                              id="contact_linkedin_edit"
                              class="form-control"
                              value="<?= $c["linkedin"] ?>"
                              required
                            >
                          </div>

                          <!-- Instagram -->

                          <div class="mb-3">
                            <label for="contact_instagram_edit" class="form-label"><i class="bi bi-instagram"></i>Instagram</label>
                            <input
                              type="url"
                              name="instagram"
                              id="contact_instagram_edit"
                              class="form-control"
                              value="<?= $c["instagram"] ?>"
                              required
                            >
                          </div>

                          <!-- Facebook -->

                          <div class="mb-3">
                            <label for="contact_facebook_edit" class="form-label"><i class="bi bi-facebook"></i>Facebook</label>
                            <input
                              type="url"
                              name="facebook"
                              id="contact_facebook_edit"
                              class="form-control"
                              value="<?= $c["facebook"] ?>"
                              required
                            >
                          </div>
                          <br>
                          <button type="submit" class="btn btn-warning"><i class="bi bi-pencil-fill"></i>Save Changes</button>
                        </form>
                      </div>
                    </div>
                  <?php endif ?>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row admin-box px-0 mt-4">
        <div class="col-12 mx-auto px-0">
          <div class="admin-box-header d-flex justify-content-between align-items-center px-4">
            <div class="admin-box-title fs-1">Map Embed Code</div>
          </div>
          <div class="container-fluid">
            <div class="row">
              <div class="col-12 text-center px-2 mt-3">
                <div class=" fs-3">Please copy and paste the map URL to update the location.</div>
              </div>
            </div>
            <div class="row my-3">
              <div class="col-10 text-left mx-auto">
                <div class="container-fluid card-box-container">
                  <?php if($c): ?>
                    <div class="row card-box p-3 my-3">
                      <div class="col-12">
                        <form method="post">

                          <input type="hidden" name="id" value="1">
                          <input type="hidden" name="form_type" value="map">

                          <!-- Map URL -->
                          <div class="mb-4">
                            <label for="contact_map_edit" class="form-label">
                              <i class="bi bi-globe-americas"></i> Map Embed Code
                            </label>
                            <div class="mb-3 text-muted card-box map p-4">
                              <strong>How to get the map URL:</strong>
                              <ul class="mb-0 mt-2">
                                <li>Go to Google Maps</li>
                                <li>Search for your location</li>
                                <li>Click on <strong>"Share"</strong></li>
                                <li>Select <strong>"Embed a map"</strong></li>
                                <li>Copy the URL from the iframe</li>
                              </ul>
                            </div>
                            <textarea
                              name="map_url"
                              id="contact_map_edit"
                              class="form-control"
                              rows="3"
                              required
                            ><?= $c["map_url"] ?></textarea>
                          </div>

                          <!-- Submit -->
                          <button type="submit" class="btn btn-warning">
                            <i class="bi bi-pencil-fill"></i> Save Changes
                          </button>

                        </form>
                      </div>
                    </div>
                  <?php endif ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </main>