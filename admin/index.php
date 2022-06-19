<?php $url ="http://localhost/GMS/1/";
include "adminlogic.php";
include "menuad.php"; 


?>




        <div class="app-main">
          <div class="main-header-line">
            <h1>Applications Dashboard</h1>
            <div class="action-buttons">
              <button class="open-right-area">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-activity"><polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/></svg>
            </button>
            <button class="menu-button">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>
            </button>
            </div>
          </div>
          <div class="chart-row three">
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Applications</h2>
                  <span>20.5 K</span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart pink">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="50, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">50%</text>
          </svg>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>Shortlisted</h2>
                  <span>5.5 K</span>
                </div>
                <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart blue">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="60, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">60%</text>
          </svg>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper">
              <div class="chart-container">
                <div class="chart-info-wrapper">
                  <h2>On-hold</h2>
                  <span>10.5 K</span>
                </div>
                 <div class="chart-svg">
                  <svg viewBox="0 0 36 36" class="circular-chart orange">
            <path class="circle-bg" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="circle" stroke-dasharray="90, 100" d="M18 2.0845
                a 15.9155 15.9155 0 0 1 0 31.831
                a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <text x="18" y="20.35" class="percentage">90%</text>
          </svg>
                </div>
              </div>
            </div>
          </div>
          <div class="chart-row two">
            <div class="chart-container-wrapper big">
              <div class="chart-container">
                <div class="chart-container-header">
                  <h2>Top Active Jobs</h2>
                  <span>Last 30 days</span>
                </div>
                <div class="line-chart">
                  <canvas id="chart"></canvas>
                </div>
                <div class="chart-data-details">
                  <div class="chart-details-header"></div>
                </div>
              </div>
            </div>
            <div class="chart-container-wrapper small">
              <div class="chart-container">
                <div class="chart-container-header">
                  <h2>Acquisitions</h2>
                  <span href="#">This month</span>
                </div>
                <div class="acquisitions-bar">
                 <span class="bar-progress rejected" style="width:8%;"></span>
                  <span class="bar-progress on-hold" style="width:10%;"></span>
                  <span class="bar-progress shortlisted" style="width:18%;"></span>
                  <span class="bar-progress applications" style="width:64%;"></span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color applications"></span>
                  <span class="progress-type">Applications</span>
                  <span class="progress-amount">64%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color shortlisted"></span>
                  <span class="progress-type">Shortlisted</span>
                  <span class="progress-amount">18%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color on-hold"></span>
                  <span class="progress-type">On-hold</span>
                  <span class="progress-amount">10%</span>
                </div>
                <div class="progress-bar-info">
                  <span class="progress-color rejected"></span>
                  <span class="progress-type">Rejected</span>
                  <span class="progress-amount">8%</span>
                </div>
              </div>
              <!-- <div class="chart-container applicants">
                <div class="chart-container-header">
                  <h2>New Applicants</h2>
                  <span>Today</span>
                </div>
                <div class="applicant-line">
                  <img src="https://images.unsplash.com/photo-1587628604439-3b9a0aa7a163?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MjB8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
                  <div class="applicant-info">
                    <span>Emma Ray</span>
                    <p>Applied for <strong>Product Designer</strong></p>
                  </div>
                </div>
                <div class="applicant-line">
                  <img src="https://images.unsplash.com/photo-1583195764036-6dc248ac07d9?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2555&q=80" alt="profile">
                  <div class="applicant-info">
                    <span>Ricky James</span>
                    <p>Applied for <strong>IOS Developer</strong></p>
                  </div>
                </div>
                <div class="applicant-line">
                  <img src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzV8fHdvbWFufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
                  <div class="applicant-info">
                    <span>Julia Wilson</span>
                    <p>Applied for <strong>UI Developer</strong></p>
                  </div>
                </div>
                <div class="applicant-line">
                  <img src="https://images.unsplash.com/photo-1596815064285-45ed8a9c0463?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=1215&q=80" alt="profile">
                  <div class="applicant-info">
                    <span>Jess Watson</span>
                    <p>Applied for <strong>Design Lead</strong></p>
                  </div>
                </div>
                <div class="applicant-line">
                  <img src="https://images.unsplash.com/photo-1543965170-4c01a586684e?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2232&q=80" alt="profile">
                  <div class="applicant-info">
                    <span>John Pellegrini</span>
                    <p>Applied for <strong>Back-End Developer</strong></p>
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </div>







        <!-- <div class="app-right">
          <button class="close-right">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
          </button>
          <div class="profile-box">
            <div class="profile-photo-wrapper">
              <img src="https://images.unsplash.com/photo-1551292831-023188e78222?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTE0fHxwb3J0cmFpdHxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
            </div>
            <p class="profile-text">Julia Pellegrini</p>
             <p class="profile-subtext">Recruiting Manager</p>
          </div>
          <div class="app-right-content">
            <div class="app-right-section">
            <div class="app-right-section-header">
              <h2>Messages</h2>
              <span class="notification-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
              </span>
            </div>
            <div class="message-line">
              <img src="https://images.unsplash.com/photo-1562159278-1253a58da141?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MzB8fHBvcnRyYWl0JTIwbWFufGVufDB8MHwwfA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile">
              <div class="message-text-wrapper">
                <p class="message-text">Eric Clampton</p>
                <p class="message-subtext">Have you planned any deadline for this?</p>
              </div>
            </div>
            <div class="message-line">
              <img src="https://images.unsplash.com/photo-1604004555489-723a93d6ce74?ixlib=rb-1.2.1&ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&auto=format&fit=crop&w=934&q=80" alt="profile">
              <div class="message-text-wrapper">
                <p class="message-text">Jess Flax</p>
                <p class="message-subtext">Can we schedule another meeting for next thursday?</p>
              </div>
            </div>
            <div class="message-line">
              <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2250&q=80" alt="profile">
              <div class="message-text-wrapper">
                <p class="message-text">Pam Halpert</p>
                <p class="message-subtext">The candidate has been shorlisted.</p>
              </div>
            </div>
          </div>
          <div class="app-right-section">
            <div class="app-right-section-header">
              <h2>Activity</h2>
              <span class="notification-active">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg>
              </span>
            </div>
            <div class="activity-line">
              <span class="activity-icon warning">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle"><circle cx="12" cy="12" r="10"/><line x1="12" y1="8" x2="12" y2="12"/><line x1="12" y1="16" x2="12.01" y2="16"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">Your plan is expires in <strong>3 days.</strong></p>
                 <a class="activity-link" href="#">Renew Now</a>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon applicant">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">There are <strong>3 new applications</strong> for <strong>UI Developer</strong></p>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">Your teammate, <strong>Wade Wilson</strong> has closed the job post of <strong>IOS Developer</strong></p>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon applicant">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">There are <strong>4 new applications</strong> for <strong>Front-End Developer</strong></p>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon applicant">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-plus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="12" y1="18" x2="12" y2="12"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">There are <strong>2 new applications</strong> for <strong>Design Lead</strong></p>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon close">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">Your teammate, <strong>Wade Wilson</strong> has closed the job post of <strong>Back-End Developer</strong></p>
              </div>
            </div>
            <div class="activity-line">
              <span class="activity-icon draft">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-minus"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="15" x2="15" y2="15"/></svg>
              </span>
              <div class="activity-text-wrapper">
                <p class="activity-text">You have drafted a job post for <strong>HR Specialist</strong></p>
                <a href="#" class="activity-link">Complete Now</a>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
 -->


































 <script>
    var element = document.getElementById("1");
   element.classList.add("active");
   
</script>
 <?php // include "js.php"; ?>
</body>


</html>