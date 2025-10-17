<?php
// Start session
session_start();

// Page-specific title
$pageTitle = "TechPro - À propos";
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="Styles/styles.css">
    <style>
        .about-section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .about-image {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-text h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }

        .about-text p {
            margin-bottom: 20px;
            line-height: 1.6;
            color: #555;
        }

        .values-section {
            padding: 60px 20px;
            background-color: #f8f9fa;
        }

        .values-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .values-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .values-header h2 {
            font-size: 2.2rem;
            color: #333;
        }

        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }

        .value-card {
            padding: 30px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            text-align: center;
            transition: transform 0.3s ease;
        }

        .value-card:hover {
            transform: translateY(-10px);
        }

        .value-icon {
            font-size: 40px;
            color: #4285f4;
            margin-bottom: 20px;
        }

        .value-card h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #333;
        }

        .team-section {
            padding: 80px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .team-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .team-header h2 {
            font-size: 2.2rem;
            color: #333;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }

        .team-member {
            text-align: center;
        }

        .team-photo {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin: 0 auto 20px;
            border: 5px solid #f8f9fa;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .team-member h3 {
            font-size: 1.5rem;
            margin-bottom: 5px;
            color: #333;
        }

        .team-member p {
            color: #666;
            margin-bottom: 15px;
        }

        .social-links a {
            display: inline-block;
            margin: 0 5px;
            color: #4285f4;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: #0d6efd;
        }

        /* Media Queries */
        @media (max-width: 900px) {
            .about-content {
                grid-template-columns: 1fr;
            }

            .about-image-container {
                order: -1;
                margin-bottom: 30px;
            }
        }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <section class="about-section" id="about">
        <div class="about-content">
            <div class="about-text">
                <h2>About TechPro</h2>
                <p>Founded in 2010, TechPro has become a leader in the distribution of computers and IT solutions in Cameroon. Our mission is to provide high-quality computer equipment at competitive prices, while offering exceptional customer service. We are passionate about technology and constantly strive to offer the latest innovations to our customers.</p> 
           <p> Our team of experts closely follows market trends to guarantee you access to the most efficient products and those best suited to your needs. At TechPro, we believe that IT should be accessible to everyone. </p>
            <p> That's why we offer a widerange of products for all budgets, from high-end professional hardware to more economical solutions for students and individuals.</p>
            </div>
            <div class="about-image-container">
                <img src="images/about-us.jpg" alt="TechPro Team" class="about-image">
            </div>
        </div>
    </section>

    <section class="values-section">
        <div class="values-container">
            <div class="values-header">
                <h2>Our values</h2>
                <p>This principle guides each of our actions and decision </p>
            </div>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-medal"></i>
                    </div>
                    <h3>Quality</h3>
                    <p>We only offer top-quality products, rigorously tested and approved by our experts.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Confidence</h3>
                    <p>We build lasting relationships with our clients based on on honesty, transparency, and respect .</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovations</h3>
                    <p>We stay at the forefront of new technologies to offer you the most innovative solutions.</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Customer service</h3>
                    <p>Your satisfaction is our priority. Our team is always available to advise and support you.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="team-section">
        <div class="team-header">
            <h2>Our team</h2>
            <p>Meet our dedicated professionals at TechPro</p>
        </div>
        <div class="team-grid">
            <div class="team-member">
                <img src="/api/placeholder/200/200" alt="Directeur Général" class="team-photo">
                <h3>KEMOGNE GUY</h3>
                <p>CEO</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="/api/placeholder/200/200" alt="Responsable Commercial" class="team-photo">
                <h3>KAKABI GRACE</h3>
                <p>Responsible for marketting</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="/api/placeholder/200/200" alt="Expert Technique" class="team-photo">
                <h3>Jean Ekambi</h3>
                <p>Expert Technique</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
            <div class="team-member">
                <img src="/api/placeholder/200/200" alt="Service Client" class="team-photo">
                <h3>Sophie Atangana</h3>
                <p>Customer service</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.php'; ?>
</body>

</html>