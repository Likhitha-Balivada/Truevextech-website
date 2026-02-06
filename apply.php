<?php
// PHP-ready file
// No UI or layout changes
// Used only for backend form submission
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Join Our Team</title>
    <link rel="stylesheet" href="css/apply.css">
</head>

<body>

    <div class="container">

        <div class="brand-header">
            <img src="images/101-crop.png" alt="Truevex Technologies">
            <p class="brand-text">Innovating solutions for a connected world</p>
        </div>

        <h2>Join Our Team</h2>
        <p class="subtitle">
            Thank you for your interest in joining our team. Please fill out the application form below.
        </p>

        <form id="jobForm" action="submit_apply.php" method="POST" enctype="multipart/form-data">

            <!-- ===== Personal Information ===== -->
            <div class="section">
                <h3>Personal Information</h3>

                <div class="row">
                    <div class="field">
                        <label>Full Name <sup>*</sup></label>
                        <input type="text" id="fullname" name="fullname" placeholder="Enter your full name">
                        <small class="error"></small>
                    </div>

                    <div class="field">
                        <label>Email <sup>*</sup></label>
                        <input type="email" id="email" name="email" placeholder="Enter your Gmail">
                        <small class="error"></small>
                    </div>
                </div>

                <div class="row">
                    <div class="field">
                        <label>Phone Number <sup>*</sup></label>
                        <input type="text" id="phone" name="phone" placeholder="10 digit mobile number">
                        <small class="error"></small>
                    </div>

                    <div class="field">
                        <label>Date of Birth <sup>*</sup></label>
                        <input type="date" id="dob" name="dob">
                        <small class="error"></small>
                    </div>
                </div>

                <div class="field1">
                    <label>Current Address</label>
                    <textarea name="address" rows="3" placeholder="Enter your full address"></textarea>
                </div>

                <div class="field2">
                    <label>Gender <sup>*</sup></label>
                    <div class="radio-group">
                        <label><input type="radio" name="gender" value="Male"> Male</label>
                        <label><input type="radio" name="gender" value="Female"> Female</label>
                        <label><input type="radio" name="gender" value="Other"> Other</label>
                    </div>
                    <small class="error"></small>
                </div>
            </div>

            <!-- ===== Job Details ===== -->
            <div class="section">
                <h3>Job Details</h3>

                <div class="row">
                    <div class="field">
                        <label>Position Applied For <sup>*</sup></label>
                        <select id="position" name="position">
                            <option value="">Select</option>
                            <option>Software Engineer</option>
                            <option>Java Developer</option>
                            <option>Frontend Developer</option>
                            <option>Backend Developer</option>
                            <option>DevOps Engineer</option>
                            <option>QA / Software Tester</option>
                            <option>IT Staffing</option>
                        </select>
                        <small class="error"></small>
                    </div>

                    <div class="field">
                        <label>Preferred Location <sup>*</sup></label>
                        <select id="location" name="location">
                            <option value="">Select</option>
                            <option>Vijayawada</option>
                            <option>Hyderabad</option>
                            <option>Bangalore</option>
                        </select>
                        <small class="error"></small>
                    </div>
                </div>
            </div>

            <!-- ===== Education ===== -->
            <div class="section">
                <h3>Educational Details</h3>

                <div class="row">
                    <div class="field">
                        <label>Highest Qualification <sup>*</sup></label>
                        <select id="qualification" name="qualification">
                            <option value="">Select</option>
                            <option>BCA</option>
                            <option>BSc</option>
                            <option>BBA</option>
                            <option>BE</option>
                            <option>BCom</option>
                            <option>BTech</option>
                            <option>BA</option>
                            <option>MCA</option>
                            <option>MBA</option>
                            <option>MSc</option>
                            <option>MCom</option>
                            <option>MA</option>
                            <option>ME</option>
                            <option>MTech</option>
                        </select>
                        <small class="error"></small>
                    </div>

                    <div class="field">
                        <label>Passed Out Year <sup>*</sup></label>
                        <input type="text" id="passout" name="passout" placeholder="e.g. 2024">
                        <small class="error"></small>
                    </div>
                </div>
            </div>

            <!-- ===== Experience ===== -->
            <div class="section">
                <h3>Work Experience</h3>
                <div class="field">
                    <label>Total Work Experience <sup>*</sup></label>
                    <select id="experience" name="experience">
                        <option value="">Select</option>
                        <option>Fresher</option>
                        <option>0 – 23 Months</option>
                        <option>More than 23 Months</option>
                    </select>
                    <small class="error"></small>
                </div>
            </div>

            <!-- ===== Resume ===== -->
            <div class="section">
                <h3>Resume <sup>*</sup></h3>
                <div class="upload-box">
                    <input type="file" id="resume" name="resume">
                    <p class="hint">Max 10MB • PDF, DOC, DOCX only</p>
                    <small class="error" id="resumeError"></small>
                    <p id="fileNameDisplay"></p>
                </div>
            </div>

            <!-- ===== Cover Letter ===== -->
            <div class="section">
                <h3>Cover Letter</h3>
                <textarea name="cover_letter" rows="7" placeholder="Tell us why you'd be a great fit..."></textarea>
            </div>

            <!-- ===== Consent ===== -->
            <div class="consent">
                <label>
                    <input type="checkbox" id="consent">
                    I agree to the processing of my personal data according to GDPR regulations.
                </label>
                <small class="error"></small>
            </div>

            <!-- ===== Submit ===== -->
            <div class="buttons">
                <button type="submit" class="btn-primary">Submit Application</button>
            </div>

        </form>
    </div>

    <script src="apply.js"></script>
</body>

</html>
