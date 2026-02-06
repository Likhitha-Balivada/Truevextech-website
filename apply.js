const form = document.getElementById('jobForm');
const resumeInput = document.getElementById('resume');
const fileNameDisplay = document.getElementById('fileNameDisplay');
const resumeError = document.getElementById('resumeError');

/* ================= Resume Validation ================= */
resumeInput.addEventListener('change', function () {
    const file = resumeInput.files[0];
    resumeError.textContent = '';
    fileNameDisplay.textContent = '';

    if (file) {
        const allowedTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
        ];
        const maxSize = 10 * 1024 * 1024; // 10MB

        if (!allowedTypes.includes(file.type)) {
            resumeError.textContent = 'Only PDF, DOC, DOCX files are allowed';
            resumeInput.value = '';
        } else if (file.size > maxSize) {
            resumeError.textContent = 'File size must be less than 10MB';
            resumeInput.value = '';
        } else {
            fileNameDisplay.textContent = 'Selected file: ' + file.name;
        }
    }
});

/* ================= Form Validation ================= */
form.addEventListener('submit', function (e) {
    e.preventDefault();
    let valid = true;

    // Clear previous errors
    document.querySelectorAll('small.error').forEach(el => el.textContent = '');

    /* Full Name */
    const name = document.getElementById('fullname');
    if (!name.value.trim()) {
        name.nextElementSibling.textContent = 'Full name is required';
        valid = false;
    } else if (!/^[A-Za-z\s]+$/.test(name.value.trim())) {
        name.nextElementSibling.textContent = 'Only alphabets allowed';
        valid = false;
    }

    /* Email */
    const email = document.getElementById('email');
    if (!email.value.trim()) {
        email.nextElementSibling.textContent = 'Email is required';
        valid = false;
    }/* else if (!/^[a-z0-9._%+-]+@gmail\.com$/.test(email.value.trim())) {
        email.nextElementSibling.textContent = 'Only @gmail.com allowed';
        valid = false;
    }*/

    /* Phone */
    const phone = document.getElementById('phone');
    if (!phone.value.trim()) {
        phone.nextElementSibling.textContent = 'Phone number is required';
        valid = false;
    } else if (!/^\d{10}$/.test(phone.value.trim())) {
        phone.nextElementSibling.textContent = 'Enter valid 10 digit number';
        valid = false;
    }

    /* Date of Birth */
    const dob = document.getElementById('dob');
    if (!dob.value) {
        dob.nextElementSibling.textContent = 'Date of birth is required';
        valid = false;
    }

    /* Gender */
    const gender = document.querySelector('input[name="gender"]:checked');
    const genderError = document.querySelector('.radio-group').nextElementSibling;
    if (!gender) {
        genderError.textContent = 'Please select gender';
        valid = false;
    }

    /* Job Details */
    const position = document.getElementById('position');
    if (!position.value) {
        position.nextElementSibling.textContent = 'Select position';
        valid = false;
    }

    const location = document.getElementById('location');
    if (!location.value) {
        location.nextElementSibling.textContent = 'Select location';
        valid = false;
    }

    /* Education */
    const qualification = document.getElementById('qualification');
    if (!qualification.value) {
        qualification.nextElementSibling.textContent = 'Select qualification';
        valid = false;
    }

    const passout = document.getElementById('passout');
    if (!passout.value.trim()) {
        passout.nextElementSibling.textContent = 'Passed out year is required';
        valid = false;
    } else if (!/^\d{4}$/.test(passout.value.trim())) {
        passout.nextElementSibling.textContent = 'Enter valid 4 digit year';
        valid = false;
    }

    /* Experience */
    const experience = document.getElementById('experience');
    if (!experience.value) {
        experience.nextElementSibling.textContent = 'Select experience';
        valid = false;
    }

    /* Resume */
    if (!resumeInput.files.length) {
        resumeError.textContent = 'Resume is mandatory';
        valid = false;
    }

    /* Consent */
    const consent = document.getElementById('consent');
    if (!consent.checked) {
        consent.parentElement.nextElementSibling.textContent = 'You must agree to continue';
        valid = false;
    }

    /* Success */
    if (valid) {
        alert('Form details captured! Submitting your application...');
        form.submit();
    }
});
