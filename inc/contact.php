<div class="contact" id="contact">
            <div class="container">
                <div class="row">
                    <div class="six columns">
                        <h2 class="contact-heading">Say <strong>Hello</strong></h2>
                        <p class="contact-subheading">Don't be shy, drop us an email and say hello! We are a really nice bunch of people :)</p>
                        <ul class="contact-methods">
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-mobile" aria-hidden="true"></i>
                                </span>
                                +49123456789
                            </li>
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                </span>
                                hallo@hallo.welt
                            </li>
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                </span>
                                @htmlkurs
                            </li>
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </span>
                                facebook.com
                            </li>
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </span>
                                plus.google.com
                            </li>
                            <li>
                                <span class="contact-icon">
                                <i class="fa fa-pinterest" aria-hidden="true"></i>
                                </span>
                                pinterest.com
                            </li>
                        </ul>
                    </div>

                    <div class="six columns">
                        <?php if (isset($_GET['contacted'])): ?>
                            <p class="contact-subheading">Message was sended</p>
                        <?php endif; ?>

                        <form class="contact-form" action="form.php" method="POST">

                            <label for="contact-name" class="contact-label">Your Name *</label>
                            <input name="name" id="contact-name" class="contact-input" placeholder="Your Name *" type="text" required="required"/>

                            <label for="contact-email" class="contact-label">Your E-Mail *</label>
                            <input name="email" id="contact-email" class="contact-input" placeholder="Your E-Mail *" type="text" required="required"/>

                            <label for="contact-message" class="contact-label">Your Message *</label>
                            <textarea name="message" id="contact-message" class="contact-input contact-message" placeholder="Your Message *" required="required"></textarea>

                            <input class="contact-submit" type="submit" value="SUBMIT MESSAGE"/>
                        </form>
                    </div>
                </div>
            </div>

        </div>