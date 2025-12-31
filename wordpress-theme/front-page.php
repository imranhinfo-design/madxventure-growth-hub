<?php
/**
 * Front Page Template
 *
 * @package MadXventure
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="container">
        <div class="hero-content">
            <span class="hero-badge">🚀 #1 BPO Partner for Growing Businesses</span>
            
            <h1 class="hero-title">
                Transform Your <span class="highlight">Leads</span> Into Revenue
            </h1>
            
            <p class="hero-description">
                <?php echo esc_html(get_theme_mod('hero_subtitle', 'We specialize in high-converting cold calls, appointment setting, and lead generation that accelerate your business growth.')); ?>
            </p>
            
            <div class="hero-buttons">
                <a href="#contact" class="btn btn-primary">Start Growing Today</a>
                <a href="#services" class="btn btn-secondary">Explore Our Services</a>
            </div>
            
            <div class="hero-stats">
                <div class="hero-stat">
                    <div class="hero-stat-value">50K+</div>
                    <div class="hero-stat-label">Calls Made Monthly</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value">35%</div>
                    <div class="hero-stat-label">Avg. Conversion Rate</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-value">200+</div>
                    <div class="hero-stat-label">Happy Clients</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services section" id="services">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Services</span>
            <h2 class="section-title">Solutions That Drive <span class="text-gradient">Results</span></h2>
            <p class="section-subtitle">Comprehensive BPO services designed to accelerate your sales pipeline and boost revenue.</p>
        </div>
        
        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <h3>Cold Calling</h3>
                <p>Professional outbound calling campaigns that connect you with qualified prospects and open new business opportunities.</p>
            </div>
            
            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <h3>Lead Generation</h3>
                <p>Data-driven lead generation strategies that identify and qualify potential customers for your sales team.</p>
            </div>
            
            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <h3>Appointment Setting</h3>
                <p>Fill your calendar with qualified meetings, allowing your sales team to focus on closing deals.</p>
            </div>
            
            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="20" x2="12" y2="10"></line>
                        <line x1="18" y1="20" x2="18" y2="4"></line>
                        <line x1="6" y1="20" x2="6" y2="16"></line>
                    </svg>
                </div>
                <h3>Sales Analytics</h3>
                <p>Comprehensive reporting and insights to optimize your sales process and maximize ROI.</p>
            </div>
            
            <!-- Service 5 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
                    </svg>
                </div>
                <h3>Customer Follow-up</h3>
                <p>Systematic follow-up campaigns that nurture leads and maintain strong customer relationships.</p>
            </div>
            
            <!-- Service 6 -->
            <div class="service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                    </svg>
                </div>
                <h3>24/7 Support</h3>
                <p>Round-the-clock support to ensure your business never misses an opportunity, regardless of timezone.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about section" id="about">
    <div class="container">
        <div class="about-grid">
            <div class="about-content">
                <span class="section-badge">About Us</span>
                <h2>Your Partner in <span class="text-accent">Business Growth</span></h2>
                <p>At MadXventure, we understand that every call is an opportunity. Our team of skilled professionals is dedicated to helping businesses like yours reach their full potential through strategic outbound calling and lead generation services.</p>
                <p>With years of experience in the BPO industry, we've helped hundreds of companies transform their sales pipelines and achieve sustainable growth.</p>
                
                <div class="about-features">
                    <div class="about-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Trained Sales Professionals</span>
                    </div>
                    <div class="about-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Industry-Specific Expertise</span>
                    </div>
                    <div class="about-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Scalable Solutions</span>
                    </div>
                    <div class="about-feature">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Transparent Reporting</span>
                    </div>
                </div>
                
                <a href="#contact" class="btn btn-outline">Learn More About Us</a>
            </div>
            
            <div class="about-cards">
                <div class="about-card">
                    <div class="about-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                        </svg>
                    </div>
                    <h4>98%</h4>
                    <p>Client Satisfaction</p>
                </div>
                <div class="about-card">
                    <div class="about-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
                        </svg>
                    </div>
                    <h4>3X</h4>
                    <p>Faster Results</p>
                </div>
                <div class="about-card">
                    <div class="about-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="8" r="7"></circle>
                            <polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"></polyline>
                        </svg>
                    </div>
                    <h4>A+</h4>
                    <p>Quality Score</p>
                </div>
                <div class="about-card">
                    <div class="about-card-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h4>200+</h4>
                    <p>Happy Clients</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Results Section -->
<section class="results section" id="results">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Our Results</span>
            <h2 class="section-title">Numbers That <span class="text-gradient">Speak</span></h2>
            <p class="section-subtitle">Our track record demonstrates consistent success in driving business growth.</p>
        </div>
        
        <div class="results-grid">
            <div class="result-card">
                <div class="result-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                </div>
                <div class="result-value">1M+</div>
                <div class="result-label">Calls Made</div>
                <p class="result-description">Successfully completed outbound calls</p>
            </div>
            
            <div class="result-card">
                <div class="result-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                </div>
                <div class="result-value">50K+</div>
                <div class="result-label">Leads Generated</div>
                <p class="result-description">Qualified leads delivered to clients</p>
            </div>
            
            <div class="result-card">
                <div class="result-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                        <line x1="16" y1="2" x2="16" y2="6"></line>
                        <line x1="8" y1="2" x2="8" y2="6"></line>
                        <line x1="3" y1="10" x2="21" y2="10"></line>
                    </svg>
                </div>
                <div class="result-value">15K+</div>
                <div class="result-label">Appointments Set</div>
                <p class="result-description">Meetings scheduled for sales teams</p>
            </div>
            
            <div class="result-card">
                <div class="result-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="1" x2="12" y2="23"></line>
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                    </svg>
                </div>
                <div class="result-value">$25M+</div>
                <div class="result-label">Revenue Generated</div>
                <p class="result-description">Total revenue for our clients</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Contact Us</span>
            <h2 class="section-title">Ready to <span class="text-accent">Get Started?</span></h2>
            <p class="section-subtitle">Let's discuss how we can help grow your business.</p>
        </div>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Get in Touch</h3>
                
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                            <polyline points="22,6 12,13 2,6"></polyline>
                        </svg>
                    </div>
                    <div class="contact-item-content">
                        <h4>Email Us</h4>
                        <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email', 'hello@madxventure.com')); ?>">
                            <?php echo esc_html(get_theme_mod('contact_email', 'hello@madxventure.com')); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                    </div>
                    <div class="contact-item-content">
                        <h4>Call Us</h4>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', get_theme_mod('contact_phone', '+15551234567'))); ?>">
                            <?php echo esc_html(get_theme_mod('contact_phone', '+1 (555) 123-4567')); ?>
                        </a>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-item-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                    </div>
                    <div class="contact-item-content">
                        <h4>Location</h4>
                        <p><?php echo esc_html(get_theme_mod('contact_location', 'New York, NY')); ?></p>
                    </div>
                </div>
                
                <div class="trust-badges">
                    <div class="trust-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Free Consultation</span>
                    </div>
                    <div class="trust-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <span>24-Hour Response</span>
                    </div>
                </div>
            </div>
            
            <div class="contact-form-wrapper">
                <h3>Send Us a Message</h3>
                <form id="contact-form" class="contact-form" method="post">
                    <?php wp_nonce_field('madxventure_contact_form', 'contact_nonce'); ?>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-name">Full Name *</label>
                            <input type="text" id="contact-name" name="name" required placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label for="contact-email">Email Address *</label>
                            <input type="email" id="contact-email" name="email" required placeholder="john@company.com">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="contact-company">Company Name</label>
                            <input type="text" id="contact-company" name="company" placeholder="Your Company">
                        </div>
                        <div class="form-group">
                            <label for="contact-phone">Phone Number</label>
                            <input type="tel" id="contact-phone" name="phone" placeholder="+1 (555) 123-4567">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="contact-message">Your Message *</label>
                        <textarea id="contact-message" name="message" required placeholder="Tell us about your project and goals..."></textarea>
                    </div>
                    
                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary">
                            Send Message
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="22" y1="2" x2="11" y2="13"></line>
                                <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
