<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truevex technologies</title>
    <link rel="icon" type="image/png" href="images/101 (1) copy ico file.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/services.css">
    <link rel="stylesheet" href="css/header.css">

</head>

<body>
    
<?php include 'header.php'; ?>












    <div class="container">
        <section class="hero">
            <div class="hero-text">
                <h1>Empowering Your Vision Through Cutting-Edge Technology Services</h1>
                <p>From innovative software development to strategic IT consulting, we provide comprehensive technology
                    solutions tailored to drive your business forward. Partner with us to transform challenges into
                    opportunities.</p>
                <a href="contact">
                    <button class="btn-expert">Talk to an Expert</button>
                </a>
            </div>
            <div class="image-placeholder"><img src="images/service-p1-group.png" alt="Hero Image"></div>
        </section>
    </div>

    <div class="tabs-section">
        <a href="#software-development" class="tab-btn active">Software Development</a>
        <a href="#software-testing" class="tab-btn">Software Testing</a>
        <a href="#devops" class="tab-btn">DevOps</a>
        <a href="#it-staffing" class="tab-btn">IT Staffing</a>
        <a href="#chemical-engineering" class="tab-btn">Chemical Engineering Consulting</a>
        <!-- <a href="#strategic-consultancy" class="tab-btn">Strategic Consultancy</a>
        <a href="#digital-transformation" class="tab-btn">Digital Transformation</a> -->
    </div>

    <div class="container">
        <section id="software-development" class="service-block">
            <div class="service-info">
                <h2>Software Development</h2>
                <p class="main-desc">Building robust, scalable, and secure software solutions tailored to your unique
                    business requirements. Our expertise spans across various domains and technologies, ensuring your
                    vision becomes a reality.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Web Applications</span>
                        <p>Crafting dynamic and responsive web platforms for optimal user experience and powerful
                            backend functionality.</p>
                    </div>
                    <div class="card"><span class="card-label">Mobile Apps</span>
                        <p>Developing intuitive and high-performance native or cross-platform mobile applications for
                            iOS and Android.</p>
                    </div>
                    <div class="card"><span class="card-label">Cloud-native</span>
                        <p>Designing and implementing scalable applications that leverage the full power of cloud
                            ecosystems like AWS, Azure, and GCP.</p>
                    </div>
                    <div class="card"><span class="card-label">API Development</span>
                        <p>Creating secure and efficient APIs for seamless integration between systems and third-party
                            services.</p>
                    </div>
                    <div class="card"><span class="card-label">Frontend Development</span>
                        <p>Focusing on the user interface and experience with modern frameworks, ensuring visually
                            appealing and highly interactive designs.</p>
                    </div>
                    <div class="card"><span class="card-label">Backend Development</span>
                        <p>Building the server-side logic, databases, and infrastructure that power your applications
                            with reliability and performance.</p>
                    </div>
                    <div class="card"><span class="card-label">Custom Software</span>
                        <p>Developing bespoke software tailored exactly to your unique operational workflows and
                            business challenges.</p>
                    </div>
                    <div class="card"><span class="card-label">Microservices</span>
                        <p>Architecting applications as a collection of loosely coupled services, enhancing agility,
                            scalability, and resilience.</p>
                    </div>
                </div>
                <a href="contact" class="btn-expert">Learn More About Development</a>
            </div>
            <div class="service-side-img"><img src="images/service-p2-sw.png" alt="Software Development"></div>
        </section>

        <section id="software-testing" class="service-block reverse">
            <div class="service-info">
                <h2>Software Testing</h2>
                <p class="main-desc">Ensuring the quality, reliability, and security of your software through rigorous
                    testing methodologies and advanced tools. We guarantee a flawless user experience and robust system
                    performance.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Functional Testing</span>
                        <p>Verifying that each function of the software operates according to design specifications.</p>
                    </div>
                    <div class="card"><span class="card-label">Automation Testing</span>
                        <p>Utilizing automated scripts and tools to execute repetitive test cases quickly and
                            efficiently.</p>
                    </div>
                    <div class="card"><span class="card-label">Performance Testing</span>
                        <p>Assessing software responsiveness, stability, scalability, and resource usage under various
                            workloads.</p>
                    </div>
                    <div class="card"><span class="card-label">Load Testing</span>
                        <p>Evaluating system behavior under anticipated peak load conditions to identify bottlenecks.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Stress Testing</span>
                        <p>Pushing system resources to their limits to determine robustness and error handling under
                            extreme conditions.</p>
                    </div>
                    <div class="card"><span class="card-label">Security Testing</span>
                        <p>Identifying vulnerabilities and weaknesses in the software to protect against potential
                            threats and data breaches.</p>
                    </div>
                    <div class="card"><span class="card-label">Usability Testing</span>
                        <p>Evaluating the user-friendliness and intuitiveness of the software from an end-user
                            perspective.</p>
                    </div>
                    <div class="card"><span class="card-label">Compatibility Testing</span>
                        <p>Ensuring the software functions correctly across different operating systems, browsers, and
                            devices.</p>
                    </div>
                    <div class="card"><span class="card-label">Regression Testing</span>
                        <p>Confirming that recent code changes have not adversely affected existing functionalities.</p>
                    </div>
                </div>
                <a href="contact" class="btn-expert">Explore Testing Solutions</a>
            </div>
            <div class="service-side-img"><img src="images/service-p3-sw-testing.png" alt="Software Testing"></div>
        </section>

        <section id="devops" class="service-block">
            <div class="service-info">
                <h2>DevOps</h2>
                <p class="main-desc">Streamlining your software development lifecycle with best practices in DevOps. We
                    bridge the gap between development and operations for faster releases, improved collaboration, and
                    increased efficiency.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">CI/CD Pipelines</span>
                        <p>Implementing continuous integration and continuous delivery pipelines for automated builds,
                            tests, and deployments.</p>
                    </div>
                    <div class="card"><span class="card-label">Infrastructure as Code</span>
                        <p>Managing and provisioning infrastructure through code, enabling consistency, repeatability,
                            and version control.</p>
                    </div>
                    <div class="card"><span class="card-label">Monitoring & Observability</span>
                        <p>Setting up comprehensive monitoring solutions to gain insights into application performance
                            and system health.</p>
                    </div>
                    <div class="card"><span class="card-label">Containerization & Orchestration</span>
                        <p>Leveraging Docker and Kubernetes for efficient application packaging, deployment, and
                            management.</p>
                    </div>
                    <div class="card"><span class="card-label">Release Management</span>
                        <p>Establishing structured processes for planning, executing, and controlling software releases.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Cloud Migration</span>
                        <p>Facilitating seamless migration of applications and data to cloud environments, optimizing
                            for cost and performance.</p>
                    </div>
                    <div class="card"><span class="card-label">Platform Engineering</span>
                        <p>Designing and building internal developer platforms to enhance developer experience and
                            productivity.</p>
                    </div>
                </div>
                <a href="contact" class="btn-expert">Optimize with DevOps</a>
            </div>
            <div class="service-side-img"> <img src="images/service-p4-devops.png" alt="DevOps"></div>
        </section>

        <section id="it-staffing" class="service-block reverse">
            <div class="service-info">
                <h2>IT Staffing</h2>
                <p class="main-desc">Access top-tier IT talent exactly when you need it. Our staffing solutions help you
                    build dynamic and skilled teams to accelerate your projects and meet your strategic goals.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Contract Staffing</span>
                        <p>Providing skilled IT professionals for short-term projects or to augment your existing teams.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Dedicated Teams</span>
                        <p>Assembling and managing full-fledged dedicated teams to work exclusively on your projects.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Contract-to-Hire</span>
                        <p>Offering flexible options to convert contract professionals into permanent employees after a
                            trial period.</p>
                    </div>
                    <div class="card"><span class="card-label">Permanent Placement</span>
                        <p>Recruiting and placing highly qualified IT candidates for long-term roles within your
                            organization.</p>
                    </div>
                    <div class="card"><span class="card-label">Skill Assessment</span>
                        <p>Utilizing rigorous assessment tools to verify the technical competencies and soft skills of
                            candidates.</p>
                    </div>
                    <div class="card"><span class="card-label">Onboarding Support</span>
                        <p>Providing comprehensive support to ensure a smooth integration of new hires into your team
                            and projects.</p>
                    </div>
                </div>
                <a href="contact" class="btn-expert">Find Your IT Talent</a>
            </div>
            <div class="service-side-img"><img src="images/service-p5-staffing.png" alt="IT Staffing"></div>
        </section>

        <!-- <section id="strategic-consultancy" class="service-block">
            <div class="service-info">
                <h2>Strategic Consultancy</h2>
                <p class="main-desc">Guidance and expertise to navigate complex technology landscapes. We provide
                    strategic insights and actionable plans to optimize your IT investments and achieve business
                    objectives.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Technology Strategy</span>
                        <p>Developing forward-thinking technology roadmaps aligned with your long-term business goals.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Architecture Review</span>
                        <p>Assessing existing system architectures for efficiency, scalability, security, and future
                            readiness.</p>
                    </div>
                    <div class="card"><span class="card-label">Roadmapping</span>
                        <p>Creating detailed plans for technology adoption, project execution, and future development.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Vendor Evaluation</span>
                        <p>Assisting in the selection of technology vendors and solutions that best fit your
                            organizational needs.</p>
                    </div>
                    <div class="card"><span class="card-label">Cost Optimization</span>
                        <p>Identifying opportunities to reduce IT expenditures while maintaining or improving service
                            quality.</p>
                    </div>
                    <div class="card"><span class="card-label">Risk Assessment</span>
                        <p>Analyzing potential technology-related risks and developing mitigation strategies to ensure
                            business continuity.</p>
                    </div>
                </div>
                <button class="btn-expert">Get Strategic Guidance</button>
            </div>
            <div class="service-side-img"><img src="images/service-p6-consultancy.png" alt="Strategic Consultancy">
            </div>
        </section> -->

        <!-- <section id="digital-transformation" class="service-block reverse">
            <div class="service-info">
                <h2>Digital Transformation</h2>
                <p class="main-desc">Modernize and innovate your business operations to thrive in the digital age. We
                    guide your transformation journey, leveraging cutting-edge technologies to enhance efficiency,
                    customer experience, and competitive advantage.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Cloud Adoption</span>
                        <p>Strategizing and executing the migration and optimization of your infrastructure and
                            applications to the cloud.</p>
                    </div>
                    <div class="card"><span class="card-label">Legacy Modernization</span>
                        <p>Updating and optimizing outdated systems with modern technologies to improve performance,
                            scalability, and security.</p>
                    </div>
                    <div class="card"><span class="card-label">Automation & RPA</span>
                        <p>Implementing robotic process automation and other automation solutions to streamline
                            repetitive tasks and improve operational efficiency.</p>
                    </div>
                    <div class="card"><span class="card-label">Data & Analytics</span>
                        <p>Leveraging data science, AI, and business intelligence to derive actionable insights and
                            support data-driven decision-making.</p>
                    </div>
                    <div class="card"><span class="card-label">Customer Experience</span>
                        <p>Designing and implementing digital solutions that create seamless, personalized, and engaging
                            customer journeys.</p>
                    </div>
                    <div class="card"><span class="card-label">IoT & Edge Solutions</span>
                        <p>Developing solutions that connect devices, collect data, and enable real-time insights at the
                            edge of your network.</p>
                    </div>
                </div>
                <button class="btn-expert hide-tabs-trigger">
                         Start Your Digital Journey
                </button>

            </div>
            <div class="service-side-img"><img src="images/service-p7-digital-transformation.png"
                    alt="Digital Transformation"></div>
        </section> -->
 <section id="chemical-engineering" class="service-block">
            <div class="service-info">
                <h2>Chemical Engineering Consulting</h2>
                <p class="main-desc">Practical, engineering-led consulting for chemical and process plants. We deliver process design, equipment selection, commissioning, and optimization services to improve safety, yield, and operational efficiency.</p>
                <div class="card-grid">
                    <div class="card"><span class="card-label">Process Design & Simulation</span>
                        <p>Detailed process flow diagrams (PFD/P&ID), mass & energy balances, and process simulation for new plants and revamps.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Equipment & Heat Transfer Design</span>
                        <p>Design and selection of heat exchangers, evaporators, distillation columns, reactors, and separators to meet capacity and efficiency targets.</p>
                    </div>
                    <div class="card"><span class="card-label">Distillation, Evaporation & Separation</span>
                        <p>Multi-effect evaporator design, packed/plate distillation, solvent recovery, and separation techniques for high-purity outputs.
                        </p>
                    </div>
                    <div class="card"><span class="card-label">Commissioning, Troubleshooting & Start-up</span>
                        <p>Site supervision, commissioning plans, troubleshooting during start-up, and remediation to achieve stable operations quickly.</p>
                    </div>
                    <div class="card"><span class="card-label">ETP & Environmental Compliance</span>
                        <p>Effluent treatment design, pollution control, regulatory compliance support, and environmental impact assessment.</p>
                    </div>
                    <div class="card"><span class="card-label">Process Optimization & R&D Support</span>
                        <p>Process troubleshooting, pilot studies, kinetics evaluation, yield improvement, and scale-up support for continuous improvement.</p>
                    </div>
                </div>
               <!-- <button> <a href="contact.html" >Get Chemical Engineering Guidance</a></button> -->
                <a href="contact">
                <button class="btn-primary">Get Chemical Engineering Guidance</button>
            </a>

                  <p>Or contact our experts for a custom consultation.</p>
            </div>
            <div class="service-side-img"><img src="images/service-p9-chemical_engineeing.png"alt="Strategic Consultancy">
            </div>
        </section> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <section class="explore-section" style="background-image: url('images/service-p8-industrial.png') !important; background-position: bottom center !important;">
    <div class="overlay"></div>
    <div class="content">
        <h2>Explore more with Us?</h2>
        <p>
            Discover how our expertise in chemical engineering and industrial 
            solutions can drive your next big project forward.Partner with us
             for enterprise-grade reliability and groundbreaking innovation.
        </p>
        <a href="services2" class="cta-btn">Consult Our Experts</a>
    </div>
</section>

      <section id="faq-section" class="faq-section">
            <h2 style="text-align: center; font-size: 32px; margin-bottom: 30px;">Frequently Asked Questions</h2>
            <div class="faq-item">What industries do you specialize in? <span>⌄</span></div>
            <div class="faq-item">How do you ensure project success and client satisfaction? <span>⌄</span></div>
            <div class="faq-item">What is your approach to data security and intellectual property? <span>⌄</span></div>
            <div class="faq-item">Can you integrate with our existing systems? <span>⌄</span></div>
            <div class="faq-item">How do you handle post-launch support and maintenance? <span>⌄</span></div>
        </section>

        <div class="cta-container" id="cta-section" style="background-image: url('images/cta-bg.png') !important;">

            <div class="cta-blue">

                <h2>Ready to Innovate with Us?</h2>
                <p>Connect with our experts today to discuss your project needs and discover how our technology
                    solutions can propel your business forward.</p>
                <a href="contact">
                    <button class="btn-white">Start Your Digital Journey</button>
                </a>
            </div>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

        </div> <!-- End of container from line 55 -->
    <footer>
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-brand">
                        <a href="index.php" class="footer-logo">
                            <img src="images/101-crop.png" alt="TRUE VAX">
                        </a>
                        <span class="footer-text">
                            Innovating solutions for a connected world.
                            <div class="socials">
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
                                <a href="https://www.instagram.com/truevextech/" target="_blank"
                                    rel="noopener noreferrer">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </span>
                    </div>
                </div>


                <div class="footer-col">
                    <h4>Services</h4>
                    <ul>
                        <li><a href="#software-development">Software Development</a></li>
                        <li><a href="#software-testing">Software Testing</a></li>
                        <li><a href="#devops">DevOps</a></li>
                        <li><a href="#it-staffing">IT Staffing</a></li>
                        <li><a href="#chemical-engineering">Chemical Engineering Consulting</a></li>
                        <!--<li><a href="services.html#chemical-engineering">Chemical Engineering Consulting</a></li>-->
                        <!-- <li><a href="#strategic-consultancy">Strategic Consultancy</a></li>
                        <li><a href="#digital-transformation">Digital Transformation</a></li> -->
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="index">Home</a></li>
                        <li><a href="services">Services</a></li>
                        <li><a href="AboutUs">About Us</a></li>
                        <li><a href="career">Careers</a></li>
                        <li><a href="contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Legal</h4>
                    <ul>
                        <li><a href="PP"> Privacy Policy</a> </li>
                        <li><a href="T&C"> Terms of Service</a></li>
                    </ul>
                </div>
            </div>
            <div
                style="text-align: center; color: #9CA3AF; font-size: 14px; border-top: 1px solid #e5e7eb; padding-top: 20px; margin-top: 20px;">
                © 2026 Truevex Technologies. All rights reserved.
            </div>
    </footer>
    <script>
        const tabs = document.querySelector('.tabs-section');
        const tabLinks = document.querySelectorAll('.tab-btn');
        const sections = document.querySelectorAll('.service-block');
        const ctaSection = document.querySelector('#cta-section');

        const HEADER_OFFSET = 160; // header + tabs height

        window.addEventListener('scroll', () => {

            /* --------- TAB HIDE / SHOW --------- */
            if (ctaSection) {
                const ctaTop = ctaSection.getBoundingClientRect().top;

                if (ctaTop <= HEADER_OFFSET) {
                    tabs.style.display = 'none';
                } else {
                    tabs.style.display = 'flex';
                }
            }

            /* --------- ACTIVE TAB LOGIC --------- */
            let currentSectionId = '';

            sections.forEach(section => {
                const sectionTop =
                    section.getBoundingClientRect().top +
                    window.pageYOffset -
                    HEADER_OFFSET;

                const sectionHeight = section.offsetHeight;

                if (
                    window.pageYOffset >= sectionTop &&
                    window.pageYOffset < sectionTop + sectionHeight
                ) {
                    currentSectionId = section.id;
                }
            });

            tabLinks.forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === `#${currentSectionId}`) {
                    link.classList.add('active');
                }
            });

        });


    </script>

</body>

</html>