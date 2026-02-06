<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Truevex Technologies</title>
  <link rel="icon" type="image/png" href="images/101 (1) copy ico file.ico">
  <link rel="stylesheet" href="css/header.css">

  <link rel="stylesheet" href="css/career.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

  <!-- HEADER -->



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
      <a href="contact.php">
        <button class="btn-primary">Get Started</button>
      </a>
    </div>

  </header>




  <section class="hero">
    <div class="hero-inner">
      <!-- Left text block -->
      <div class="hero-text">
        <h1>Join Our Team,<br />Innovate the Future</h1>
        <p>
          Innovate with us and shape the future of technology
          through groundbreaking solutions and collaborative teamwork.
        </p>
        <button class="hero-btn" onclick="location.href='#jobs'">
          Explore Open Roles
        </button>

      </div>

      <!-- Right image block -->
      <div class="hero-image">
        <!-- Replace team.jpg with your image file -->
        <img src="images/c1.jpg" alt="Team working together" />
      </div>
    </div>
  </section>
  <section class="jobs-section" id="jobs">
    <h1>Explore Open Positions</h1>
    <!-- Top bar (pagination + actions) 
    <div class="jobs-topbar">
      <div class="pagination">
        <button>&lt; Previous</button>
        <button><span class="page active">1</span></button>
        <button><span class="page">2</span></button>
        <button><span class="page">3</span></button>
        <button>Next &gt;</button>
      </div>
      <div class="actions">
        <button class="outline">Share</button>
        <button class="filled">Export</button>
      </div>
    </div>-->

    <!-- Cards grid -->
    <div class="jobs-grid">
      <!-- Card 1 -->
      <article class="job-card">
        <span class="tag blue">Software Development</span>
        <h2>Senior Full Stack Engineer</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Mid-level</p>
        <p class="desc">
          Lead the development of user-facing features using modern React frameworks.
        </p>
        <div class="card-actions">
          <button class="primary" onclick="window.location.href='SSC.php'">View / Apply</button>
          <!-- <button class="ghost">Share</button> -->
        </div>
      </article>

      <!-- Card 2 -->
      <article class="job-card">
        <span class="tag blue">Software Testing</span>
        <h2>QA Automation Engineer</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Mid-level</p>
        <p class="desc">
          Design and implement automated tests for web and mobile applications.
        </p>
        <div class="card-actions">
          <button class="primary" onclick="window.location.href='QAE.php'">View / Apply</button>
          <!-- <button class="ghost">Share</button> -->
        </div>
      </article>

      <!-- Card 3 -->
      <article class="job-card">
        <span class="tag blue">DevOps</span>
        <h2>DevOps Engineer</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Mid-level</p>
        <p class="desc">
          Manage cloud infrastructure, CI/CD pipelines, and deployment strategies.
        </p>
        <div class="card-actions">
          <button class="primary" onclick="window.location.href='De.php'">View / Apply</button>
          <!-- <button class="ghost">Share</button> -->
        </div>
      </article>

      <!-- Card 4 -->
      <article class="job-card">
        <span class="tag blue">IT Staffing</span>
        <h2>HR Associate</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Entry-level</p>
        <p class="desc">
          <!--Provide technical support and troubleshooting for internal users.-->
          Finding Talent
        </p>
        <div class="card-actions">
          <button class="primary" onclick="window.location.href='hr.php'">View / Apply</button>
          <!-- <button class="ghost">Share</button> -->
        </div>
      </article>

      <!-- Card 5 
      <article class="job-card">
        <span class="tag blue">Digital Transformation</span>
        <h2>Digital Transformation Consultant</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Mid-level</p>
        <p class="desc">
          Guide clients through strategic digital adoption and innovation projects.
        </p>
        <div class="card-actions">
          <button class="primary">View / Apply</button>
          <button class="ghost">Share</button>
        </div>
      </article>

       Card 6 
      <article class="job-card">
        <span class="tag blue">Strategic Consultancy</span>
        <h2>Strategic Business Analyst</h2>
        <p class="meta">Vijayawada (On-site)</p>
        <p class="meta">Full-time · Entry-level</p>
        <p class="desc">
          Analyze market trends and business processes to inform strategic decisions.
        </p>
        <div class="card-actions">
          <button class="primary">View / Apply</button>
          <button class="ghost">Share</button>
        </div>
      </article>-->
    </div>
  </section>
  <section class="culture">
    <div class="culture-inner">
      <!-- Left text -->
      <div class="culture-text">
        <h1>Our Culture &amp; Teams</h1>
        <p>
          At Innovate, we foster a dynamic and inclusive environment where every
          voice is heard, and innovation thrives. Our diverse teams collaborate
          to tackle complex challenges, pushing the boundaries of technology.
        </p>
        <p>
          We believe in continuous learning, mutual respect, and celebrating successes.
          Join a team where your contributions are valued and your growth is prioritized.
          We work hard, support each other, and have fun along the way.
        </p>
      </div>

      <!-- Right image -->
      <div class="culture-image">
        <!-- Replace culture.jpg with your image file -->
        <img src="images/c2.jpg" alt="Team collaborating in office" />
      </div>
    </div>
  </section>
  <section class="perks-section">
    <h1>Perks &amp; Benefits</h1>
    <div class="perks-grid">
      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M21 8.5C21 7.30653 20.5256 6.16227 19.6816 5.31836C18.8377 4.47445 17.6935 4 16.5 4C15.7202 4 15.1131 4.10999 14.5518 4.35449C13.984 4.60181 13.4 5.01407 12.707 5.70703C12.3165 6.09756 11.6835 6.09756 11.293 5.70703C10.6 5.01407 10.016 4.60181 9.44824 4.35449C8.88687 4.10999 8.27982 4 7.5 4C6.30653 4 5.16227 4.47445 4.31836 5.31836C3.47445 6.16227 3 7.30653 3 8.5C3 10.116 3.91951 11.4583 5.15039 12.7363L12 19.5859L18.2998 13.2861L18.8447 12.7354C20.0754 11.446 21 10.1064 21 8.5ZM23 8.5C23 11.2396 21.1925 13.2488 19.7061 14.7061L19.707 14.707L12.707 21.707C12.3165 22.0976 11.6835 22.0976 11.293 21.707L4.30469 14.7188L3.73047 14.1465C2.37747 12.749 1 10.9088 1 8.5C1 6.77609 1.68433 5.12231 2.90332 3.90332C4.12231 2.68433 5.77609 2 7.5 2C8.48018 2 9.37344 2.14001 10.2471 2.52051C10.8603 2.78761 11.4318 3.16121 12 3.6416C12.5682 3.16121 13.1397 2.78761 13.7529 2.52051C14.6266 2.14001 15.5198 2 16.5 2C18.2239 2 19.8777 2.68433 21.0967 3.90332C22.3157 5.12231 23 6.77609 23 8.5Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M16.0053 7.47856C16.9524 7.47863 17.8655 7.83052 18.5678 8.46587H18.5687L21.5287 11.126C21.9394 11.4951 21.9728 12.1274 21.6039 12.5381C21.2349 12.9488 20.6026 12.9831 20.1918 12.6143L17.2318 9.95415L17.2279 9.95024C16.8932 9.64658 16.4572 9.47863 16.0053 9.47856C15.5551 9.47856 15.1198 9.64411 14.7855 9.94536L14.7865 9.94634L12.7162 11.8467L12.7074 11.8545C11.4475 12.9841 9.53321 12.9479 8.33242 11.7471L8.33339 11.7461C8.03795 11.4521 7.80223 11.1036 7.64199 10.7188C7.48123 10.3327 7.39882 9.91828 7.39882 9.50005C7.39882 9.08181 7.48123 8.6674 7.64199 8.2813C7.80274 7.89525 8.03857 7.54467 8.33535 7.25005L11.2934 4.29302L11.3685 4.22466C11.7613 3.904 12.3412 3.92679 12.7074 4.29302C13.0733 4.65908 13.0959 5.2382 12.7758 5.63091L12.7074 5.70708L9.74453 8.66997C9.63504 8.7787 9.54798 8.90837 9.48867 9.05083C9.42945 9.19321 9.39882 9.34584 9.39882 9.50005C9.39882 9.65425 9.42945 9.80688 9.48867 9.94927C9.53315 10.0561 9.59298 10.1562 9.6664 10.2452L9.74453 10.3301L9.74746 10.3331L9.83242 10.4102C10.2736 10.7732 10.9223 10.7688 11.3725 10.3653L13.434 8.47368L13.4379 8.46977L13.5727 8.35356C14.2558 7.7893 15.1156 7.47856 16.0053 7.47856Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M15.293 12.293C15.6591 11.9269 16.2381 11.9043 16.6309 12.2246L16.707 12.293L18.707 14.293L18.7754 14.3692C19.0957 14.7619 19.0731 15.3409 18.707 15.707C18.3409 16.0732 17.7619 16.0958 17.3691 15.7754L17.293 15.707L15.293 13.707L15.2246 13.6309C14.9043 13.2381 14.9269 12.6591 15.293 12.293Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M12.293 15.293C12.6591 14.9269 13.2381 14.9043 13.6309 15.2246L13.707 15.293L15.707 17.293L15.7754 17.3692C16.0957 17.7619 16.0731 18.3409 15.707 18.707C15.3409 19.0732 14.7619 19.0958 14.3691 18.7754L14.293 18.707L12.293 16.707L12.2246 16.6309C11.9043 16.2381 11.9269 15.6591 12.293 15.293Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Health &amp; Wellness</h2>
        <p>Comprehensive medical, dental, and vision plans.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M20.0003 10C20.0003 7.20943 19.4411 5.36987 18.7395 3.7813C18.0041 4.4972 17.2149 5.04019 16.1839 5.4854C14.9109 6.03502 13.2895 6.42663 11.0081 6.88188L9.98952 7.08208C9.98251 7.08343 9.97508 7.08478 9.96804 7.08598C8.48464 7.33951 7.15076 8.14115 6.23073 9.33208C5.31072 10.5231 4.87191 12.0163 5.00124 13.5157C5.13069 15.0151 5.81842 16.412 6.92897 17.4278C8.0396 18.4436 9.49224 19.0046 10.9973 19H11.0003L11.4378 18.9883C15.9511 18.7451 20.0003 14.7759 20.0003 10ZM22.0003 10C22.0003 16.0695 16.7555 20.9978 11.0022 20.9991L11.0032 21L11.0012 20.9991L11.0003 21V20.9991C8.99446 21.0045 7.05953 20.2571 5.57936 18.9034C4.09869 17.5491 3.18075 15.6877 3.00808 13.6885C2.83547 11.6892 3.42091 9.69756 4.64772 8.10942C5.87018 6.52692 7.6409 5.46012 9.61061 5.11821L10.6331 4.91802C12.8959 4.46554 14.3232 4.11045 15.3909 3.64946C16.5417 3.15255 17.2945 2.5221 18.2219 1.37212L18.3069 1.27934C18.5185 1.07576 18.8115 0.97394 19.1077 1.00591C19.4459 1.04254 19.7427 1.2485 19.8948 1.55278L20.2815 2.34282C21.1783 4.22895 22.0003 6.46388 22.0003 10Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M1 21C1 17.5148 3.19522 14.7508 6.88574 14.0195L7.29492 13.9277C8.25413 13.6885 9.23187 13.2793 10.0996 12.8135C11.0989 12.277 11.8844 11.7015 12.293 11.293L12.3691 11.2246C12.7619 10.9043 13.3409 10.9269 13.707 11.293C14.0731 11.6591 14.0957 12.2381 13.7754 12.6309L13.707 12.707C13.1157 13.2984 12.1513 13.9827 11.0459 14.5762C10.0717 15.0992 8.93519 15.58 7.77344 15.8692L7.27441 15.9805C4.50494 16.5292 3 18.4852 3 21C3 21.5523 2.55228 22 2 22C1.44772 22 1 21.5523 1 21Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Generous PTO</h2>
        <p>Flexible paid time off and holidays.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M15 20V4C15 3.73478 14.8946 3.48051 14.707 3.29297C14.5429 3.12883 14.3276 3.02757 14.0986 3.00488L14 3H10C9.73478 3 9.48051 3.10543 9.29297 3.29297C9.10543 3.48051 9 3.73478 9 4V20C9 20.5523 8.55228 21 8 21C7.44772 21 7 20.5523 7 20V4C7 3.20435 7.3163 2.44152 7.87891 1.87891C8.44152 1.3163 9.20435 1 10 1H14L14.2969 1.01465C14.9835 1.08291 15.6289 1.38671 16.1211 1.87891C16.6837 2.44152 17 3.20435 17 4V20C17 20.5523 16.5523 21 16 21C15.4477 21 15 20.5523 15 20Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M21 8C21 7.44772 20.5523 7 20 7H4C3.44772 7 3 7.44772 3 8V18C3 18.5523 3.44772 19 4 19H20C20.5523 19 21 18.5523 21 18V8ZM23 18C23 19.6569 21.6569 21 20 21H4C2.34315 21 1 19.6569 1 18V8C1 6.34315 2.34315 5 4 5H20C21.6569 5 23 6.34315 23 8V18Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Career Growth</h2>
        <p>Learning and development opportunities.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M15 21V19C15 18.2044 14.6837 17.4415 14.1211 16.8789C13.6289 16.3867 12.9835 16.0829 12.2969 16.0146L12 16H6C5.20435 16 4.44152 16.3163 3.87891 16.8789C3.3163 17.4415 3 18.2044 3 19V21C3 21.5523 2.55228 22 2 22C1.44772 22 1 21.5523 1 21V19C1 17.6739 1.52716 16.4025 2.46484 15.4648C3.40253 14.5272 4.67392 14 6 14H12L12.248 14.0059C13.4838 14.0672 14.6561 14.5858 15.5352 15.4648C16.4728 16.4025 17 17.6739 17 19V21C17 21.5523 16.5523 22 16 22C15.4477 22 15 21.5523 15 21Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M17.9961 7.00008C17.9961 6.33559 17.7757 5.6897 17.3691 5.16415C17.0132 4.70415 16.5321 4.35885 15.9863 4.16805L15.749 4.09579L15.6514 4.06551C15.1761 3.88941 14.9023 3.37825 15.0322 2.87704C15.1622 2.37596 15.6495 2.06289 16.1504 2.13973L16.251 2.16024L16.4502 2.2159C17.4406 2.51689 18.3146 3.11916 18.9502 3.94051C19.628 4.81649 19.9961 5.89248 19.9961 7.00008C19.9961 8.10769 19.628 9.18367 18.9502 10.0597C18.2723 10.9356 17.3232 11.562 16.251 11.8399C15.7164 11.9785 15.1709 11.6576 15.0322 11.1231C14.8936 10.5886 15.2145 10.043 15.749 9.90438C16.3923 9.7376 16.9624 9.36162 17.3691 8.83602C17.7758 8.31046 17.9961 7.66459 17.9961 7.00008Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M21 21.0001V19.0011L20.9893 18.7531C20.9411 18.1769 20.7275 17.6249 20.3711 17.1652C20.0147 16.7054 19.5334 16.3604 18.9873 16.1701L18.75 16.0978L18.6523 16.0675C18.1769 15.8919 17.9028 15.3813 18.0322 14.88C18.1617 14.3789 18.6485 14.0645 19.1494 14.1408L19.25 14.1622L19.4492 14.2179C20.4401 14.518 21.3158 15.1186 21.9521 15.9396C22.6308 16.8151 22.9991 17.8914 23 18.9992V21.0001C22.9999 21.5524 22.5522 22.0001 22 22.0001C21.4478 22.0001 21.0001 21.5524 21 21.0001Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M12 7C12 5.34315 10.6569 4 9 4C7.34315 4 6 5.34315 6 7C6 8.65685 7.34315 10 9 10C10.6569 10 12 8.65685 12 7ZM14 7C14 9.76142 11.7614 12 9 12C6.23858 12 4 9.76142 4 7C4 4.23858 6.23858 2 9 2C11.7614 2 14 4.23858 14 7Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Work-Life Balance</h2>
        <p>Supportive policies for personal and family life.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M15.302 11.9056C15.8118 11.815 16.3002 12.1279 16.4387 12.6156L16.4611 12.7152L17.9768 21.2406L17.9777 21.2494L17.9924 21.3626C18.0166 21.6274 17.9702 21.8951 17.8566 22.1371C17.7269 22.4132 17.516 22.643 17.2522 22.7962C16.9879 22.9495 16.6826 23.019 16.3781 22.9945C16.0877 22.971 15.8112 22.8629 15.5813 22.6849V22.6859L12.0031 19.9994L8.41817 22.6849C8.18862 22.8621 7.91289 22.97 7.62325 22.9935C7.31914 23.0181 7.01422 22.9491 6.7502 22.7962C6.48645 22.6435 6.27576 22.4137 6.14571 22.138C6.01564 21.8621 5.97252 21.5523 6.02266 21.2513L6.02461 21.2416L7.53829 12.7152L7.56172 12.6156C7.70026 12.1281 8.18775 11.8152 8.69747 11.9056C9.24121 12.0022 9.6045 12.5211 9.50801 13.0648L8.21504 20.3382L10.8059 18.3988L10.8068 18.3978L10.9397 18.307C11.2574 18.1073 11.6257 18.0004 12.0031 18.0003C12.3807 18.0003 12.7497 18.1072 13.0676 18.307L13.2004 18.3978L13.2023 18.3988L15.7834 20.3363L14.4924 13.0648L14.4797 12.9632C14.442 12.4579 14.7923 11.9962 15.302 11.9056Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M17 8C17 5.23858 14.7614 3 12 3C9.23858 3 7 5.23858 7 8C7 10.7614 9.23858 13 12 13C14.7614 13 17 10.7614 17 8ZM19 8C19 11.866 15.866 15 12 15C8.13401 15 5 11.866 5 8C5 4.13401 8.13401 1 12 1C15.866 1 19 4.13401 19 8Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Competitive Salary</h2>
        <p>Attractive compensation packages and bonuses.</p>
      </div>

      <div class="perk-card"><svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M17 8C17 6.67392 16.4728 5.40253 15.5352 4.46484C14.6561 3.58579 13.4838 3.06719 12.248 3.00586L12 3C10.6739 3 9.40253 3.52716 8.46484 4.46484C7.52716 5.40253 7 6.67392 7 8L7.00781 8.30664C7.04889 9.03628 7.27192 9.85786 8.20703 10.793C8.91592 11.5019 9.62884 12.3995 9.92676 13.5664L9.98047 13.8037L9.99512 13.9053C10.0437 14.4097 9.70387 14.8789 9.19629 14.9805C8.68847 15.082 8.19392 14.7795 8.04492 14.2949L8.01953 14.1963L7.95215 13.9316C7.79026 13.4095 7.46791 12.9295 7.02441 12.4482L6.79297 12.207C5.45276 10.8668 5.08557 9.56625 5.01465 8.46094L5 8C5 6.14348 5.73705 4.36256 7.0498 3.0498C8.36256 1.73705 10.1435 1 12 1L12.3467 1.00879C14.077 1.09452 15.7194 1.819 16.9502 3.0498C18.263 4.36256 19 6.14348 19 8C19 9.53091 18.4159 11.0954 17.2061 12.2061L17.207 12.207C16.4731 12.9409 16.1254 13.4714 15.9805 14.1963C15.8721 14.7377 15.3452 15.0888 14.8037 14.9805C14.2623 14.8721 13.9112 14.3452 14.0195 13.8037C14.2746 12.5287 14.9269 11.659 15.793 10.793L15.8311 10.7568C16.5948 10.0695 17 9.05279 17 8Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M15 17C15.5523 17 16 17.4477 16 18C16 18.5523 15.5523 19 15 19H9C8.44772 19 8 18.5523 8 18C8 17.4477 8.44772 17 9 17H15Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M14 21C14.5523 21 15 21.4477 15 22C15 22.5523 14.5523 23 14 23H10C9.44772 23 9 22.5523 9 22C9 21.4477 9.44772 21 10 21H14Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Innovation Culture</h2>
        <p>Work on cutting-edge projects and technologies.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11 22V2C11 1.44772 11.4477 1 12 1C12.5523 1 13 1.44772 13 2V22C13 22.5523 12.5523 23 12 23C11.4477 23 11 22.5523 11 22Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M17 15.5C17 14.837 16.7364 14.2013 16.2676 13.7324C15.8573 13.3222 15.3194 13.0695 14.7471 13.0127L14.5 13H9.5C8.30653 13 7.16227 12.5256 6.31836 11.6816C5.52708 10.8904 5.06093 9.83506 5.00586 8.72266L5 8.5C5 7.30653 5.47445 6.16227 6.31836 5.31836C7.16227 4.47445 8.30653 4 9.5 4H17C17.5523 4 18 4.44772 18 5C18 5.55228 17.5523 6 17 6H9.5C8.83696 6 8.20126 6.26358 7.73242 6.73242C7.26358 7.20126 7 7.83696 7 8.5L7.0127 8.74707C7.06952 9.31937 7.32219 9.85735 7.73242 10.2676C8.20126 10.7364 8.83696 11 9.5 11H14.5L14.7227 11.0059C15.8351 11.0609 16.8904 11.5271 17.6816 12.3184C18.5256 13.1623 19 14.3065 19 15.5C19 16.6935 18.5256 17.8377 17.6816 18.6816C16.8904 19.4729 15.8351 19.9391 14.7227 19.9941L14.5 20H6C5.44772 20 5 19.5523 5 19C5 18.4477 5.44772 18 6 18H14.5L14.7471 17.9873C15.3194 17.9305 15.8573 17.6778 16.2676 17.2676C16.7364 16.7987 17 16.163 17 15.5Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Retirement Plans</h2>
        <p>401(k) matching and financial planning.</p>
      </div>

      <div class="perk-card">
        <svg class="w-6 h-6" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21C16.9706 21 21 16.9706 21 12ZM23 12C23 18.0751 18.0751 23 12 23C5.92487 23 1 18.0751 1 12C1 5.92487 5.92487 1 12 1C18.0751 1 23 5.92487 23 12Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M14.9961 11.6758C14.9245 8.69287 13.8664 5.82525 12 3.51562C10.0661 5.90881 9 8.90114 9 12L9.00391 12.3242C9.07549 15.3069 10.1339 18.1739 12 20.4834C13.9336 18.0903 15 15.0986 15 12L14.9961 11.6758ZM16.9951 12.373C16.9026 16.2184 15.3834 19.8976 12.7246 22.6895C12.5359 22.8876 12.2737 23 12 23C11.7263 23 11.4641 22.8876 11.2754 22.6895C8.61661 19.8976 7.09737 16.2184 7.00488 12.373L7 12C7 8.02012 8.53074 4.1926 11.2754 1.31055L11.3496 1.24023C11.5299 1.08586 11.7604 1 12 1C12.2737 1 12.5359 1.11237 12.7246 1.31055C15.4693 4.1926 17 8.02012 17 12L16.9951 12.373Z"
            fill="#686583" style="fill-opacity:1;" />
          <path
            d="M22 11C22.5523 11 23 11.4477 23 12C23 12.5523 22.5523 13 22 13H2C1.44772 13 1 12.5523 1 12C1 11.4477 1.44772 11 2 11H22Z"
            fill="#686583" style="fill-opacity:1;" />
        </svg>
        <h2>Global Opportunities</h2>
        <p>Connect with diverse teams worldwide.</p>
      </div>
    </div>
    </div>
  </section>





  <!-- footer -->

  <footer class="footer">
    <div class="footer-top">

      <!-- Brand -->
      <div class="footer-col">
        <div class="brand">
          <a href="index.php">
            <img src="images/101-crop.png" alt="Truevex Technologies">
          </a>
        </div>
        <p class="brand-text">
          Innovating solutions for a connected world.
        </p>
        <div class="social-icons">
          <a href="https://www.facebook.com/profile.php?id=61585918391755" target="_blank" rel="noopener noreferrer">
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


      <!-- Quick Links -->
      <div class="footer-col">
        <h4>Quick Links</h4>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li> <a href="services.php">Services</a></li>
          <li> <a href="AboutUs.php">About Us</a></li>
          <li><a href="career.php">Careers</a></li>
          <li> <a href="contact.php">Contact</a></li>

        </ul>
      </div>

      <!-- Our Services -->
      <div class="footer-col">
        <a href="services.php">
          <h4>Our Services</h4>
        </a>
        <ul>
          <li><a href="services.php#software-development">Software Development</a></li>
          <li><a href="services.php#software-testing">Software Testing</a></li>
          <li><a href="services.php#devops">DevOps Consulting</a></li>
          <li><a href="services.php#it-staffing">IT Staffing</a></li>
          <li><a href="services.php#chemical-engineering">Chemical Engineering Consulting</a></li>
          <!-- <li><a href="services.php#digital-transformation">Digital Transformation</a></li> -->
        </ul>
      </div>

      <!-- Contact -->
      <div class="footer-col contact-info">
        <h4>Contact Us</h4>

        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <a href="mailto:info@truevextech.com">info@truevextech.com</a>
        </div>

        <div class="contact-item">
          <i class="fas fa-phone"></i>
          <a href="tel:+919494040781">+91 9494040781</a>
        </div>

        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <a href="https://www.google.com/maps/search/?api=1&query=Opp+Prasanthi+Bhavan+Karmel+Nagar+Gunadala+Vijayawada+Andhra+Pradesh"
            target="_blank" rel="noopener noreferrer">
            Opp Prasanthi Bhavan, Karmel Nagar, Gunadala, Vijayawada, Andhra Pradesh
          </a>
        </div>
      </div>

    </div>

    <div class="footer-bottom">
      © 2026 Truevex Technologies. All rights reserved.
    </div>
  </footer>


</body>

</html>
