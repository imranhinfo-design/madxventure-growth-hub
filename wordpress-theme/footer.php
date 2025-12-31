</main><!-- #main-content -->

<footer class="site-footer">
    <div class="container">
        <div class="footer-grid">
            <!-- Brand Column -->
            <div class="footer-brand">
                <?php madxventure_custom_logo(); ?>
                <p>Boosting your business success through expert cold calling, lead generation, and appointment setting services.</p>
                <div class="social-links">
                    <?php if (get_theme_mod('social_linkedin', '#')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_linkedin', '#')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                <rect x="2" y="9" width="4" height="12"></rect>
                                <circle cx="4" cy="4" r="2"></circle>
                            </svg>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_twitter', '#')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_twitter', '#')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path d="M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_facebook', '#')) : ?>
                        <a href="<?php echo esc_url(get_theme_mod('social_facebook', '#')); ?>" class="social-link" target="_blank" rel="noopener" aria-label="Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
                                <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                            </svg>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="#services">Services</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#results">Results</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>

            <!-- Services -->
            <div class="footer-column">
                <h4>Services</h4>
                <ul class="footer-links">
                    <li><a href="#services">Cold Calling</a></li>
                    <li><a href="#services">Lead Generation</a></li>
                    <li><a href="#services">Appointment Setting</a></li>
                    <li><a href="#services">Sales Support</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="footer-column">
                <h4>Contact Us</h4>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                        <polyline points="22,6 12,13 2,6"></polyline>
                    </svg>
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'hello@madxventure.com')); ?>">
                        <?php echo esc_html(get_theme_mod('contact_email', 'hello@madxventure.com')); ?>
                    </a>
                </div>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('contact_phone', '+15551234567'))); ?>">
                        <?php echo esc_html(get_theme_mod('contact_phone', '+1 (555) 123-4567')); ?>
                    </a>
                </div>
                <div class="footer-contact-item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    <span><?php echo esc_html(get_theme_mod('contact_location', 'New York, NY')); ?></span>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            <div class="footer-legal">
                <a href="<?php echo esc_url(get_privacy_policy_url()); ?>">Privacy Policy</a>
                <a href="#">Terms of Service</a>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
