<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truevex Technologies</title>
    <link rel="icon" type="image/png" href="images/101 (1) copy ico file.ico">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/header.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>




    <header class="header">
        <div class="header-logo">
            <a href="index.php">
                <img src="images/101-crop.png" alt="TRUE VAX Logo">
            </a>
        </div>

        <nav class="header-nav">
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="AboutUs.php">About Us</a>
            <a href="career.php">Careers</a>
            <a href="contact.php">Contact</a>
        </nav>

        <div class="header-actions">
            <a href="login.php">
                <button class="btn-login">Login</button>
            </a>
            <button class="btn-primary">Get Started</button>
        </div>

    </header>







    <!-- HERO SECTION -->


    <div class="container">

        <section class="container hero">
            <div class="hero-text">
                <h1>Get in Touch with Truevex Technologies</h1>
                <p>
                    We’re eager to hear about your next big idea. Reach out to us, and let’s
                    explore how our expertise can drive your success.
                </p>
            </div>

            <div class="hero-img">
                <img src="images/about-us-1-pic.png" class="hero-image" alt="">
            </div>
        </section>



        <!-- MAIN OFFICE DETAILS -->


        <section>
            <div class="contact-bar">
                <div class="contact-row">
                    <div class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M4 6L12 13L20 6" stroke="#1E90FF" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <rect x="3" y="5" width="18" height="14" rx="2" stroke="#1E90FF" stroke-width="2" />
                        </svg>
                        <span>info@truevextech.com</span>
                    </div>

                    <div class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path
                                d="M22 16.92V21C22 21.55 21.55 22 21 22C10.51 22 2 13.49 2 3C2 2.45 2.45 2 3 2H7.08C7.57 2 7.99 2.35 8.07 2.83L9.1 7.72C9.18 8.15 9.02 8.59 8.67 8.85L6.9 10.2C8.03 12.74 10.26 14.97 12.8 16.1L14.15 14.33C14.41 13.98 14.85 13.82 15.28 13.9L20.17 14.93C20.65 15.01 21 15.43 21 15.92Z"
                                stroke="#1E90FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span>+91 9494040781</span>
                    </div>
                </div>

                <div class="contact-row center">
                    <div class="contact-item">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                            <path d="M12 21C12 21 19 16 19 10C19 6.13 15.87 3 12 3C8.13 3 5 6.13 5 10C5 16 12 21 12 21Z"
                                stroke="#1E90FF" stroke-width="2" />
                            <circle cx="12" cy="10" r="3" stroke="#1E90FF" stroke-width="2" />
                        </svg>
                        <span>Opp Prasanthi Bhavan, Karmel Nagar, Gunadala, Vijayawada, Andhra Pradesh</span>
                    </div>
                </div>
            </div>
        </section>



        <!-- SEND MESSAGE -->

        <section class="container">
            <h2 class="center">Send Us a Message</h2>
            <div class="form-map">
                        <form action="submit_contact.php" method="POST" onsubmit="alert('Thank you! Your message is being submitted...');">
                    <label>Your Name</label><input type="text" name="name" required>
                    <label>Company Name</label><input type="text" name="company">
                    <label>Email Address</label><input type="email" name="email" required>
                    <label>Phone Number</label><input type="text" name="phone">
                    <label>Service Interest</label>
                    <select name="service">
                        <option>Software Development</option>
                        <option>Software Testing</option>
                        <option>DevOps</option>
                        <option>IT Staffing</option>
                        <option>Other</option>
                    </select>
                    <label>Your Message</label><textarea name="message" required></textarea>
                    <br><br>
                    <button class="btn" type="submit">Send Message</button>
                </form>
                <div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3824.9144910148307!2d80.662174!3d16.530413999999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMTbCsDMxJzQ5LjUiTiA4MMKwMzknNDMuOCJF!5e0!3m2!1sen!2sin!4v1769661952035!5m2!1sen!2sin" 
  width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
                <!--<div class="map"><img src="images/map-light-min.jpg" alt="Map"></div>-->
            </div>
        </section>




        <!-- OUR REGIONAL OFFICES -->

        <!-- 
    <div class="container">
        <h2>Our Regional Offices</h2>
        <div class="office-grid">
            <div class="office-card">
                <h4><i class="fas fa-building"></i> New York Office</h4>
                <p><i class="fas fa-map-marker-alt"></i> 123 Innovation Dr, Suite 500, New York, NY 10001</p>
                <p><i class="fas fa-phone"></i> +1 (212) 555-0100</p>
                <p><i class="fas fa-envelope"></i> ny@bytelogic.com</p>
            </div>
            <div class="office-card">
                <h4><i class="fas fa-building"></i> London Office</h4>
                <p><i class="fas fa-map-marker-alt"></i> 45 Tech Lane, Level 10, London EC2A 2ER, UK</p>
                <p><i class="fas fa-phone"></i> +44 20 7946 0123</p>
                <p><i class="fas fa-envelope"></i> london@bytelogic.com</p>
            </div>
            <div class="office-card">
                <h4><i class="fas fa-building"></i> Sydney Office</h4>
                <p><i class="fas fa-map-marker-alt"></i> 789 Digital Way, Tower 1, Sydney NSW 2000, Australia</p>
                <p><i class="fas fa-phone"></i> +61 2 8000 0456</p>
                <p><i class="fas fa-envelope"></i> sydney@bytelogic.com</p>
            </div>
        </div>
    </div> -->









        <!-- DEDICATED SUPPORT SECTION -->

        <div class="container" style="background-color: #fff;">
            <h2>Dedicated Support</h2>
            <div class="support-grid">
                <div class="support-card">
                    <i class="fas fa-suitcase"></i>
                    <h3>Sales Inquiries</h3>
                    <p>Interested in our services or need a custom solution? Our sales team is ready to assist you.</p>
                    <button class="btn">Email Sales</button>
                </div>
                <div class="support-card">
                    <i class="fas fa-user-friends"></i>
                    <h3>Customer Support</h3>
                    <p >For existing clients requiring technical assistance or general support, please contact our
                        support team.</p>
                    <button class="btn">Email Support</button>
                </div>
            </div>
        </div>

        <!--<div class="container">-->
        <!--    <h2>Frequently Asked Questions</h2>-->
        <!--    <div class="faq-item">-->
        <!--        <div class="faq-question"><i class="far fa-question-circle"></i> How can Truevex Techmologies help my-->
        <!--            business?</div>-->
        <!--        <i class="fas fa-chevron-down"></i>-->
        <!--    </div>-->
        <!--    <div class="faq-item">-->
        <!--        <div class="faq-question"><i class="far fa-question-circle"></i> What is your typical project engagement-->
        <!--            process?</div>-->
        <!--        <i class="fas fa-chevron-down"></i>-->
        <!--    </div>-->
        <!--    <div class="faq-item">-->
        <!--        <div class="faq-question"><i class="far fa-question-circle"></i> Do you work with startups or only large-->
        <!--            enterprises?</div>-->
        <!--        <i class="fas fa-chevron-down"></i>-->
        <!--    </div>-->
        <!--    <div class="faq-item">-->
        <!--        <div class="faq-question"><i class="far fa-question-circle"></i> What technologies do you specialize in?-->
        <!--        </div>-->
        <!--        <i class="fas fa-chevron-down"></i>-->
        <!--    </div>-->
        <!--</div>-->

        <footer>
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="addlogo">
                        <a href="index.php">
                            <img src="images/101-crop.png" alt="Truevex Technologies" />
                        </a>
                    </div>
                    <p>Innovating solutions for a connected world.</p>
                    <div class="social-icons">
                        <a href="https://www.facebook.com/profile.php?id=61585918391755" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://x.com/truevextech" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-x-twitter"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/truevex-technologies-pvt-ltd/" target="_blank"
                            rel="noopener noreferrer">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.instagram.com/truevextech/" target="_blank" rel="noopener noreferrer">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
                <div class="footer-col">
                    <h5>Company</h5>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li> <a href="services.php">Services</a></li>
                        <li> <a href="AboutUs.php">AboutUs</a></li>
                        <li><a href="career.php">Careers</a></li>
                        <li> <a href="contact.php">Contact</a></li>

                    </ul>
                </div>
                <div class="footer-col">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="PP.php"> Privacy Policy</a> </li>
                        <li><a href="T&C.php"> Terms of Service</a></li>
                    </ul>
                </div>
                <div class="footer-col contact-info">
                    <h5>Contact Us</h5>
                    <p>
                        <i class="fas fa-envelope"></i>
                        <a href="mailto:info@truevextech.com">info@truevextech.com</a>
                    </p>
                    <p>
                        <i class="fas fa-phone"></i>
                        <a href="tel:+919494040781">+91 9494040781</a>
                    </p>
                    <p>
                        <i class="fas fa-map-marker-alt"></i>
                        <a href="https://www.google.com/maps/search/?api=1&query=Opp+Prasanthi+Bhavan+Karmel+Nagar+Gunadala+Vijayawada+Andhra+Pradesh"
                            target="_blank" rel="noopener noreferrer">
                            Opp Prasanthi Bhavan, Karmel Nagar, Gunadala, Vijayawada, Andhra Pradesh
                        </a>
                    </p>
                </div>
            </div>
            <div class="copyright">
                &copy; 2026 Truevex Technologies. All rights reserved.
            </div>
        </footer>

</body>

</html>
