<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Header  -->
    <header class="header">
        <div class="lang">
            <h1><a href="">ID</a> | <a href="">EN</a></h1>
        </div>
        <div class="container">
            <div class="logo">
                <img src="img/Helios-logo.png" alt="Helios Logo">
            </div>
            <div class="logo">
                <img src="img/Sangfor-logo.png" alt="Sangfor Logo">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="main-content">
        <div id="container-1" style="background-image: url('img/1.png');">
            <div class="text-content">
                <h1>Cybersecurity Made Simple<br>with Sangfor Cyber Command</h1>
                <p>Simplify your cybersecurity with Sangfor Cyber<br>
                    Command's user-friendly interface and<br>
                    comprehensive threat protection.</p>
                <a href="#container-2" class="btn-primary">
                    FREE TRIAL
                    <span class="arrow">➔</span>
                </a>
            </div>
        </div>
        {{-- 2 --}}
        <div id="container-2" style="background-image: url('img/ty-bg-pattern.png');">
            <div class="about-section">
                <h2>About Sangfor Cyber Command</h2>
                <p>Sangfor Cyber Command falls into Network Detection & Response (NDR) Solutions which is a comprehensive security management platform designed to protect businesses from cyber threats.</p>
                <p>It provides a range of security solutions such as threat detection, incident response, and compliance management. With Sangfor Cyber Command, organizations can monitor their network traffic, analyze security events, and respond to incidents quickly and efficiently.</p>
                <p>The platform uses advanced machine learning algorithms and big data analytics to identify and prevent cyber-attacks before they cause damage. It also offers a user-friendly dashboard that enables businesses to track their security posture in real-time and make informed decisions based on the insights provided.</p>
                <p>Overall, Sangfor Cyber Command is a powerful tool for businesses looking to strengthen their cybersecurity defenses and safeguard their assets from modern-day threats.</p>
            </div>
            <div class="form-section">
                <h3>Dapatkan Free Trial selama 1 bulan,<br>analisa keamanan network anda dan lihat hasilnya!</h3>
                {{-- <form action="#" method="post"> --}}
                <form>
                    <div class="form-row">
                        <label for="first-name">First Name *</label>
                        <input type="text" name="first-name" placeholder="First Name" required>
                        <label for="last-name">Last Name *</label>
                        <input type="text" name="last-name" placeholder="Last Name" required>
                    </div>
                    <label for="email">Corporate Email *</label>
                    <input type="email" name="email" placeholder="email@mail.com" required>
                    <label for="job-title">Job Title *</label>
                    <input type="text" name="job-title" placeholder="Your Job" required>
                    <label for="company-name">Company Name *</label>
                    <input type="text" name="company-name" placeholder="Your Company" required>
                    <label for="industry">Industry *</label>
                    <input type="text" name="industry" placeholder="Select Industry" required>
                    <label for="phone-number">Phone Number *</label>
                    <input type="tel" name="phone-number" placeholder="Your number" required>
                    <div class="checkbox">
                        <input type="checkbox" name="agreement" id="agreement" required>
                        <label for="agreement">Click this box to agree to be contacted by our team and get great deals on Sangfor for Helios!</label>
                    </div>
                    {{-- <button type="submit" class="btn-primary">SEND</button> --}}
                    <a href="{{ route('thank-you') }}"><button class="btn-primary">SEND</button></a>
                </form>
            </div>
        </div>
        {{-- 3 --}}
        <div id="container-3" style="background-image: url('img/2.png')">
            <h1>Sangfor Cyber Command Advantages</h1>
            <div class="advantages-grid">
                <div class="advantage-card">
                    <img src="img/Threat.png" alt="Advanced Threat Detection">
                    <h3>Advanced Threat Detection</h3>
                    <p>Sangfor Cyber Command offers advanced threat detection capabilities that can help users identify and respond to potential security threats in real-time. This includes identifying and blocking malware, ransomware, and other types of cyber threats.</p>
                </div>
                <div class="advantage-card">
                    <img src="img/Scan.png" alt="Network Visibility and Control">
                    <h3>Network Visibility and Control</h3>
                    <p>Sangfor Cyber Command provides users with visibility and control over their network infrastructure. This includes monitoring network traffic, controlling access to resources, and managing network policies.</p>
                </div>
                <div class="advantage-card">
                    <img src="img/Cloud.png" alt="Cloud Security">
                    <h3>Cloud Security</h3>
                    <p>Sangfor Cyber Command offers cloud security solutions that can help users secure their cloud-based applications and infrastructure. This includes protecting against cloud-specific threats like data breaches, account hijacking, and insider threats.</p>
                </div>
                <div class="advantage-card">
                    <img src="img/Secure.png" alt="Comprehensive Security Management">
                    <h3>Comprehensive Security Management</h3>
                    <p>Sangfor Cyber Command provides users with a comprehensive security management platform that can help them manage and monitor their entire security infrastructure from a single console. This includes managing security policies, tracking security events, and generating reports.</p>
                </div>
            </div>
        </div>
        {{-- 4 --}}
        <div id="container-4">
            <h1>Sangfor Cyber Command Features</h1>
            <div class="features-container">
                <div class="feature-item">
                    <img src="img/Retina-Lock.png" alt="Threat Intelligence">
                    <h2>Threat Intelligence</h2>
                    <p>Advanced AI algorithms and machine learning provide comprehensive threat intelligence to stay ahead of the latest cyber threats.</p>
                </div>
                <div class="feature-item">
                    <img src="img/Detection.png" alt="Real-Time Detections">
                    <h2>Real-Time Detections</h2>
                    <p>Real-time alert system provides instant notification of potential security incidents.</p>
                </div>
                <div class="feature-item">
                    <img src="img/Spyware.png" alt="Threats Investigation">
                    <h2>Threats Investigation</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="feature-item">
                    <img src="img/Security-solution.png" alt="Comprehensive Security Solutions">
                    <h2>Comprehensive Security Solutions</h2>
                    <p>In-depth Threat investigation capabilities identify the root cause of security incidents and take appropriate action to prevent future occurrences.</p>
                </div>
                <div class="feature-item">
                    <img src="img/Chat.png" alt="Rapid Response">
                    <h2>Rapid Response</h2>
                    <p>Tight integration with network and endpoint security solutions enables quick response to potential security incidents, minimizing the impact of any attacks.</p>
                </div>
            </div>
        </div>
        {{-- 5 --}}
        
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="info">
            <div class="company-info">
                <h1>PT. Helios Informatika Nusantara</h1>
                <p>Centennial Tower, 12th Floor,<br>
                   Jl. Jendral Gatot Subroto <br>
                   No. Kav 24-25, Jakarta<br>
                   12930 Indonesia <br><br><br>
                   Phone: +62 21 8062 2220<br>
                   Email: Tencent@helios.id
                </p>
                <div class="social-links">
                    <a href="#"><img src="img/Facebook.png" alt="Facebook"></a>
                    <a href="#"><img src="img/ig.png" alt="Instagram"></a>
                    <a href="#"><img src="img/Twitter.png" alt="Twitter"></a>
                    <a href="#"><img src="img/Youtube.png" alt="YouTube"></a>
                    <a href="#"><img src="img/Linkedin.png" alt="LinkedIn"></a>
                </div>
            </div>
            <div class="map"><img src="/img/worldmap.png" alt="World Map"></div>
        </div>
        <div class="foot">
            <p>&copy; 2023 - PT. Helios Informatika Nusantara - All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
