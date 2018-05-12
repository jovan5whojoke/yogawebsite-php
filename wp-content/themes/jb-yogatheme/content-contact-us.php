<div class="contact-us-banner-section">
    <div class="contact-us-container">
        <div class="contact-us-wrapper-text">
            <h1 class="contact-us-feature-headline">
                <span>
                    <i class="x-icon-lightbulb-o" data-x-icon=""></i> CONTACT US
                </span>
            </h1>
            <h2 class="contact-us-custom-headline">
                <span>Contact us text</span>
            </h2>
        </div>
    </div>
</div>

<div class="col-xs-12 jb-contact-wrapper jb-content-container">
    <div class="container">
        <div class="row">
            <?php
            if(isset($_POST['submit'])){
                $to = "petkovicjovan88@gmail.com";
                $from = $_POST['email'];
                $name = $_POST['full_name'];
                $telephone = $_POST['telephone'] ? $_POST['telephone'] : "No telephone has been provided.";

                $subject = "Yoga website - new inquire";
                $subject2 = "Yoga website inquire";
                $message = $name . " wrote the following:" . "\n\n" . $_POST['message'] . PHP_EOL . "Telephone number: " . $telephone;

                $message2 = "Dear " . $name . "," . PHP_EOL .  "we will contact you shortly regarding your inquire." . PHP_EOL . "Kind Regards,"  . PHP_EOL . "Yoga website Team.";

                $headers = "From:" . $from;
                $headers2 = "From:" . $to;
                mail($to,$subject,$message,$headers);
                mail($from,$subject2,$message2,$headers2);
                ?>

                <div class="modal open fade in" id="myModal" aria-hidden="true" style="display: block;">
                    <div class="modal-backdrop fade in" style="height: 100%;"></div>
                    <div class="modal-dialog" style="z-index: 999999; display: block;">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="jb-close-modal" aria-hidden="true">×</span></button>
                                <h4 class="modal-title">Success</h4>
                            </div>
                            <div class="modal-body">
                                <p>Thank you for contacting us. Your message was sent successfully</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <script>
                    jQuery('button[data-dismiss="modal"], .jb-close-modal').on('click', function() {
                         jQuery('#myModal').detach();
                    });
                </script>

            <?php
            }
            ?>
            <section id="contact">
                <div class="section-content">
                    <h1 class="section-header">
                        Get in <span class="content-header"> Touch with us</span>
                    </h1>

                </div>
                <div class="contact-section">
                    <div class="container">
                        <form action="" method="post" name="jb-contact-form">
                            <div class="col-xs-12 col-sm-12 col-md-6 form-line">
                                <div class="form-group">
                                    <span class="error_placeholder"></span>
                                    <label for="exampleInputUsername">Your name *</label>
                                    <input type="text" class="form-control" name="full_name"
                                           placeholder=" Enter Name"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <span class="error_placeholder"></span>
                                    <label for="exampleInputEmail">Email Address *</label>
                                    <input type="email" class="form-control" name="email"
                                           placeholder=" Enter Email"
                                           required="required">
                                </div>
                                <div class="form-group">
                                    <span class="error_placeholder"></span>
                                    <label for="telephone">Mobile No.</label>
                                    <input type="tel" class="form-control" name="telephone"
                                           placeholder=" Enter 10-digit mobile no.">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6">
                                <div class="form-group">
                                    <span class="error_placeholder"></span>
                                    <label for="description">Message *</label>
                                    <textarea class="form-control" name="message"
                                              placeholder="Enter Your Message"
                                              required="required"></textarea>
                                </div>
                                <div>

                                    <button type="submit" class="btn btn-default submit" name="submit">
                                        <i class="fa fa-paper-plane" aria-hidden="true"></i>
                                        Send Message
                                    </button>
                                </div>

                            </div>
                        </form>

                        <script>
                            jQuery('form[name="jb-contact-form"]').on('submit', function(e) {

                                var name = jQuery('form[name="jb-contact-form"] input[name="full_name"]').val();
                                var email = jQuery('form[name="jb-contact-form"] input[name="email"]').val();
                                var message = jQuery('form[name="jb-contact-form"] textarea[name="message"]').val();
                                var errors = {};

                                if (name.length < 4) {
                                    errors.full_name = "Name can not have less than 4 characters";
                                }

                                if (message.length < 10) {
                                    errors.message = "Message can not have less than 10 characters";
                                }

                                if(email.length === 0) {
                                    errors.email = "Email must not be empty";
                                } else {
                                    if (!validateEmail(email)) {
                                        errors.email = "Email entered is not in good format";
                                    }
                                }

                                jQuery('.error_placeholder').html('');

                                if (!jQuery.isEmptyObject(errors)) {
                                    for (var key in errors) {
                                        console.log("key " + key + " has value " + errors[key]);
                                        jQuery('form[name="jb-contact-form"] [name="' + key + '"]').parent().find('.error_placeholder').html(String(errors[key]));
                                    }

                                    e.preventDefault();
                                    e.stopPropagation();

                                    return false;
                                } else {
                                    jQuery('button[name="submit"]').trigger('click')
                                }
                            });

                            function validateEmail(email) {
                                var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;

                                return emailReg.test( email );
                            }
                        </script>
                    </div>
            </section>
        </div>
    </div>
</div>
