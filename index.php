<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills Sage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="landing_page.css">
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
  />
</head>
<body>
    <div class="navbar">
        <img  src="logo1.png" height="100px">
        <div class="nav-Headings">
            <a href="#">Home</a>
            <a href="#About">About Us</a>
            <a href="#">Community</a>
            <a href="#mentors">Mentors</a>
        </div>
        <div class="button">
            <button id="signIn" onclick="window.location.href='http://localhost:8085/mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php'">Sign In</button>
            <button id="signUp" onclick="window.location.href='http://localhost:8085/mongodb_php/BYTEVERSE_PROJECT/SignUp/login.php'">Sign Up</button>
        </div>
        <div class="menu-toggle" onclick="toggleMenu()"><i class="fa-solid fa-bars"></i></div>
    </div>
    <div class="hero">
        <div class="hero-Left">
            <div class="hero-content">
        <h1>One Path Doesn't Fit All - <span>Discover </span>Yours with IQ-Based Guidance.</h1>
        <p>Get personalized roadmaps based on your IQ skills,with expert mentorship to guide you every step of the way.</p>
        <button onclick="window.location.href='/SignUp/login.html'">Explore Your Roadmap <i class="fa-solid fa-arrow-right-long"></i></button>
        </div>
        </div>
        <div class="hero-Right">
            <img src="side.jpg">
        </div>
        </div>
        <div class="About-Section" id="About">
            <div class="skills">
            <div class="about-Zone">
            <img src="logo1.png" height="60px">
            <h2>About Skill Sage</h2>
            <p>Welcome to Skill Sage, a platform where we are passionate about guiding learners through structured and expert-curated learning paths in technology. Whether you're stepping into Web Development, diving into AI & Machine Learning, or exploring the future with Blockchain—our platform provides you with a clear, step-by-step roadmap to master your chosen domain.</p>
            <br>
            </div>
            <div class="vision">
            <h3>VISION</h3>
            <P>To guide the next generation of innovators by making tech education roadmap-driven, community-supported, and industry-aligned.</P>
            </div>
            <div class="mission">
            <h3>MISSION</h3>
            <p>Our mission is to empower students, self-learners, and professionals by removing confusion and helping them focus on what truly matters.</p>
            </div>
            </div>
        </div>
        <div class="explore">
            <h2>Explore Domains</h2>
        </div>
        <section class="domains">
            <div class="domain-card" onclick="showRoadmap('web')">
              <h3>Web Development</h3>
              <img src="/images/WebDev.png">
            </div>
            <div class="domain-card" onclick="showRoadmap('app')">
              <h3>App Development</h3>
              <img src="/images/AppDev.png">
            </div>
            <div class="domain-card" onclick="showRoadmap('blockchain')">
              <h3>Blockchain</h3>
              <img src="/images/blockchain.png">
            </div>
            <div class="domain-card" onclick="showRoadmap('ai-ml')">
              <h3>AI & ML</h3>
              <img src="/images/AI&ML.png">
            </div>
            <div class="domain-card" onclick="showRoadmap('data-science')">
              <h3>Data Science</h3>
              <img src="/images/dataScience.png">
            </div>
            </section>
            <section class="mentors-section" id="mentors">
                <h2 class="section-title">Meet Our Mentors</h2>
            
                <div class="swiper mentor-swiper">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <img src="https://th.bing.com/th/id/OIP.vf6tqF3ZfAAvJsEqI5-ubgHaLH?rs=1&pid=ImgDetMain" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Khushi Tiwary</h3>
                      <p class="mentor-exp">3+ Years Experience</p>
                      <p class="mentor-role">Frontend Developer</p>
                      <div class="mentor-skills">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>React</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>238</strong> Upvotes</span>
                        <span><strong>56</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://th.bing.com/th/id/OIP.oPPvMgU-0CvsLqStaVO1_wHaKm?w=531&h=760&rs=1&pid=ImgDetMain" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Diksha Bharti</h3>
                      <p class="mentor-exp">5+ Years Experience</p>
                      <p class="mentor-role">AI/ML Engineer</p>
                      <div class="mentor-skills">
                        <span>Python</span><span>TensorFlow</span><span>Scikit-learn</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>312</strong> Upvotes</span>
                        <span><strong>90</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://th.bing.com/th/id/OIP.ZoKQj9i9drYeEfPpSZ3hkwHaLG?w=1003&h=1504&rs=1&pid=ImgDetMain" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Ayushi Prajapati</h3>
                      <p class="mentor-exp">4+ Years Experience</p>
                      <p class="mentor-role">Mobile App Developer</p>
                      <div class="mentor-skills">
                        <span>Flutter</span><span>Dart</span><span>Firebase</span><span>UI/UX</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>198</strong> Upvotes</span>
                        <span><strong>44</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://c.pxhere.com/photos/08/7a/male_portrait_profile_social_media_cv_young_elegant_suit-459413.jpg!d" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Anantam Aftab</h3>
                      <p class="mentor-exp">6+ Years Experience</p>
                      <p class="mentor-role">Frontend Developer</p>
                      <div class="mentor-skills">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>React</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>412</strong> Upvotes</span>
                        <span><strong>120</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://randomuser.me/api/portraits/women/5.jpg" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Sneha Roy</h3>
                      <p class="mentor-exp">2+ Years Experience</p>
                      <p class="mentor-role">AI/ML Engineer</p>
                      <div class="mentor-skills">
                        <span>Python</span><span>TensorFlow</span><span>Scikit-learn</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>120</strong> Upvotes</span>
                        <span><strong>30</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://randomuser.me/api/portraits/men/6.jpg" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Vikas Sharma</h3>
                      <p class="mentor-exp">7+ Years Experience</p>
                      <p class="mentor-role">Mobile App Developer</p>
                      <div class="mentor-skills">
                        <span>Flutter</span><span>Dart</span><span>Firebase</span><span>UI/UX</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>380</strong> Upvotes</span>
                        <span><strong>102</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://th.bing.com/th/id/OIP.kMjqQWPmUuYnMfBTUMg2JwHaJQ?w=1536&h=1920&rs=1&pid=ImgDetMain" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Aisha Khan</h3>
                      <p class="mentor-exp">5+ Years Experience</p>
                      <p class="mentor-role">Frontend Developer</p>
                      <div class="mentor-skills">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span><span>React</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>270</strong> Upvotes</span>
                        <span><strong>80</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://randomuser.me/api/portraits/men/8.jpg" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Aman Joshi</h3>
                      <p class="mentor-exp">3+ Years Experience</p>
                      <p class="mentor-role">AI/ML Engineer</p>
                      <div class="mentor-skills">
                        <span>Python</span><span>TensorFlow</span><span>Scikit-learn</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>150</strong> Upvotes</span>
                        <span><strong>36</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://randomuser.me/api/portraits/women/9.jpg" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Meera Das</h3>
                      <p class="mentor-exp">4+ Years Experience</p>
                      <p class="mentor-role">Mobile App Developer</p>
                      <div class="mentor-skills">
                        <span>Flutter</span><span>Dart</span><span>Firebase</span><span>UI/UX</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>200</strong> Upvotes</span>
                        <span><strong>60</strong> Answers</span>
                      </div>
                    </div>
            
                    <div class="swiper-slide">
                      <img src="https://randomuser.me/api/portraits/men/10.jpg" alt="Mentor" class="mentor-img" />
                      <h3 class="mentor-name">Rahul Mehta</h3>
                      <p class="mentor-exp">6+ Years Experience</p>
                      <p class="mentor-role">AI/ML Engineer</p>
                      <div class="mentor-skills">
                        <span>Python</span><span>TensorFlow</span><span>Scikit-learn</span>
                      </div>
                      <div class="mentor-meta">
                        <span><strong>340</strong> Upvotes</span>
                        <span><strong>95</strong> Answers</span>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <footer>
                <div class="container">
                    <div class="footer-content">
                        <h3>Contact Us</h3>
                        <p>Email:Info@example.com</p>
                        <p>Phone:+121 56556 565556</p>
                        <p>Address:NIT Patna, Patna, Bihar</p>
                    </div>
                    <div class="footer-content">
                        <h3>Quick Links</h3>
                         <ul class="list">
          
              <li><a href="">Home</a></li>
              <li><a href="#About">About</a></li>
              <li><a href="">community</a></li>
              <li><a href="">Products</a></li>
              <li><a href="">Contact</a></li>
           </ul>
          </div>
          <div class="footer-content">
          <h3>Follow Us</h3>
          <ul class="social-icons">
           <li><a href=""><i class="fab fa-facebook"></i></a></li>
           <li><a href=""><i class="fab fa-twitter"></i></a></li>
           <li><a href=""><i class="fab fa-instagram"></i></a></li>
           <li><a href=""><i class="fab fa-linkedin"></i></a></li>
          </ul>
          </div>
          </div>
          <div class="bottom-bar">
          <p>&copy; 2025 Skill Sage . All rights reserved</p>
          </div>
          </footer>
              <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <script src="https://unpkg.com/scrollreveal"></script>
        <script src="landing_page.js"></script>
</body>
</html>