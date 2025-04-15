<?php
// PHP configuration and variables
$cafeName = "Purrfect Cup Cat Cafe";
$slogan = "Where coffee meets cuddles!";
$currentYear = date("Y");
$pageTitle = $cafeName;

// Simulated database of cats (in a real app, this would come from a database)
$cats = [
    [
        'name' => 'Whiskers',
        'image' => 'https://i.pinimg.com/236x/52/52/5c/52525c66538174a355d867c600c1b980.jpg',
        'description' => 'Loves belly rubs and chasing laser pointers'
    ],
    [
        'name' => 'Mittens',
        'image' => 'https://i.pinimg.com/236x/76/27/a5/7627a5eb3cccd3baad8a81d948d3fe6e.jpg',
        'description' => 'Always curious about what\'s in your cup'
    ],
    [
        'name' => 'Oliver',
        'image' => 'https://i.pinimg.com/736x/ba/e2/39/bae239997772d95edbda0e105a5c6c3e.jpg',
        'description' => 'Our resident lap cat - will sit with anyone'
    ],
    [
        'name' => 'Luna',
        'image' => 'https://i.pinimg.com/236x/26/2f/aa/262faa4c9a167d659a09c9fc139eddb1.jpg',
        'description' => 'Shy at first but loves ear scratches'
    ]
];

// Menu items
$menuItems = [
    [
        'name' => 'Catpuccino',
        'image' => 'https://i.pinimg.com/736x/1d/f5/50/1df55064a2c170b62729c712b1e4db88.jpg',
        'description' => 'Our signature espresso with steamed milk and a cute cat face design',
        'price' => '$4.50'
    ],
    [
        'name' => 'Meowcha Latte',
        'image' => 'https://wallpapers-clan.com/wp-content/uploads/2024/03/sanrio-chococat-in-clouds-desktop-wallpaper-preview.jpg',
        'description' => 'Green tea latte with a hint of vanilla and catnip garnish',
        'price' => '$5.00'
    ],
    [
        'name' => 'Purr-berry Muffin',
        'image' => 'https://wallpapercave.com/wp/pp8XHbF.jpg',
        'description' => 'Mixed berry muffin with a cat-shaped sugar decoration',
        'price' => '$3.75'
    ],
    [
        'name' => 'Tuna Croissant',
        'image' => 'https://i.pinimg.com/736x/36/fb/f2/36fbf24b3d6b984a179e899bc01bae09.jpg',
        'description' => 'Flaky croissant filled with tuna salad (human version, don\'t worry!)',
        'price' => '$4.25'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title><?php echo htmlspecialchars($pageTitle); ?></title>
    <style>
        /* General Styles */
        body {
            font-family: 'Comic Sans MS', 'Montserrat', 'Poppins', sans-serif;
            margin: 10px;
            padding-top: 30px;
            background-color: #fff9f0;
            color: #5a3e36;
        }
        
        header {
            text-align: center;
            border-bottom: 5px dotted rgb(64, 77, 92);
        }
        
        h1 {
            color: #8b5a2b;
            font-size: 3em;
            margin: 0;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }
        
        nav {
            background-color:rgb(245, 233, 129);
            padding: 10px;
            text-align: center;
        }
        
        nav a {
            color: #5a3e36;
            text-decoration: none;
            margin: 0 15px;
            font-weight: bold;
            font-size: 1.2em;
        }
        
        nav a:hover {
            color: #8b5a2b;
            text-decoration: underline;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        /* Hero Section */
        .hero {
            background-image: url('https://i.pinimg.com/736x/36/fb/f2/36fbf24b3d6b984a179e899bc01bae09.jpg');
            background-size: cover;
            height: 500px;
            display: flex;
            align-items: right;
            justify-content: right;
            color: white;
            text-align: center;
            padding-right: 35px;
            position: relative;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0,0,0,0.3);
        }
        
        .hero-content {
            position: relative;
            z-index: 1;
        }
        
        .hero h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        
        .btn {
            display: inline-block;
            background-color: #fff9f0;
            color: #8b5a2b;
            padding: 10px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: all 0.3s;
        }
        
        .btn:hover {
            background-color: #ff7b54;
            transform: scale(1.05);
        }
        
        /* About Section */
        .about {
            display: flex;
            align-items: center;
            margin: 40px 0;
        }
        
        .about-text {
            flex: 1;
            padding: 20px;
        }
        
        .about-image {
            flex: 1;
            text-align: center;
        }
        
        .about-image img {
            max-width: 100%;
            border-radius: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        /* Menu Section */
        .menu {
            background-color:rgb(255, 249, 167);
            padding: 40px 0;
            text-align: center;
        }
        
        .menu h2 {
            color: #8b5a2b;
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        
        .menu-items {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .menu-item {
            background-color: white;
            border-radius: 15px;
            padding: 20px;
            width: 250px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s;
        }
        
        .menu-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .menu-item img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
        }
        
        .menu-item h3 {
            color: #8b5a2b;
            margin: 15px 0 10px;
        }
        
        /* Cats Section */
        .cats {
            padding: 40px 0;
            text-align: center;
        }
        
        .cats h2 {
            color: #8b5a2b;
            font-size: 2.5em;
            margin-bottom: 30px;
        }
        
        .cat-profiles {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }
        
        .cat {
            background-color: #f8f1e9;
            border-radius: 15px;
            padding: 20px;
            width: 200px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .cat img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #ffd6a5;
        }
        
        .cat h3 {
            color: #8b5a2b;
            margin: 15px 0 5px;
        }
        
        /* Contact Form */
        .contact-form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f1e9;
            border-radius: 15px;
            text-align: center;
        }
        
        .contact-form div {
            margin-bottom: 15px;
        }
        
        .contact-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            text-align: center;
        }
        
        .contact-form input,
        .contact-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solidrgb(255, 225, 57);
            border-radius: 5px;
            text-align: center;
            font-family: inherit;
        }
        
        .contact-form textarea {
            height: 150px;
        }
        
        .success {
            color: green;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        h3 p {
        text-align: center; 
        }
        
        /* Footer */
        footer {
            background-color: #5a3e36;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 40px;
            text-align: center;
        }
        
        .social-icons {
            margin: 20px 0;
        }
        
        .social-icons a {
            color: white;
            margin: 0 10px;
            font-size: 1.5em;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .about {
                flex-direction: column;
            }
            
            .hero {
                height: 300px;
            }
            
            h1 {
                font-size: 2em;
            }
        }

    </style>
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($cafeName); ?></h1>
        <p><?php echo htmlspecialchars($slogan); ?></p>
    </header>
    
    <nav>
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#cats">Our Cats</a>
        <a href="#contact">Contact</a>
    </nav>
    
    <section id="home" class="hero">
        <div class="hero-content">
            <h2>Enjoy Coffee with ChocoCat Friends</h2>
            <p>Relax with our delicious drinks and playful resident cats</p>
            <a href="#contact" class="btn">Visit Us Today</a>
        </div>
    </section>
    
    <div class="container">
        <section id="about" class="about">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>Welcome to <?php echo htmlspecialchars($cafeName); ?>, where we combine the love of coffee with the joy of ChocoCat companionship. Our cafe was founded in 2020 with the mission to provide a relaxing space for cat lovers and to help shelter cats find their forever homes.</p>
                <p>All of our resident cats are adoptable through our partnership with local animal shelters. Come enjoy a cup of coffee while making some furry friends!</p>
                <a href="#cats" class="btn">Meet Our Cats</a>
            </div>
            <div class="about-image">
                <img src="https://cdn.shopify.com/s/files/1/0568/2298/8958/files/chococat_8_480x480.png?v=1709195740" alt="Cute cats at our cafe">
            </div>
        </section>
        
        <section id="menu" class="menu">
            <h2>Our Menu</h2>
            <div class="menu-items">
                <?php foreach ($menuItems as $item): ?>
                <div class="menu-item">
                    <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['name']); ?>">
                    <h3><?php echo htmlspecialchars($item['name']); ?></h3>
                    <p><?php echo htmlspecialchars($item['description']); ?></p>
                    <p><?php echo htmlspecialchars($item['price']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section id="cats" class="cats">
            <h2>Meet Our Resident Cats</h2>
            <div class="cat-profiles">
                <?php foreach ($cats as $cat): ?>
                <div class="cat">
                    <img src="<?php echo htmlspecialchars($cat['image']); ?>" alt="<?php echo htmlspecialchars($cat['name']); ?>">
                    <h3><?php echo htmlspecialchars($cat['name']); ?></h3>
                    <p><?php echo htmlspecialchars($cat['description']); ?></p>
                </div>
                <?php endforeach; ?>
            </div>
        </section>
        
        <section id="contact" class="contact">
            <h2>Contact Us</h2>
            <div class="contact-form">
                <form action="process_contact.php" method="post">
                    <div>
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div>
                        <label for="email">Email:</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="message">Message:</label>
                        <textarea id="message" name="message" required></textarea>
                    </div>
                    <button type="submit" class="btn">Send Message</button>
                </form>
                
                <?php if(isset($_GET['success']) && $_GET['success'] == 1): ?>
                    <p class="success">Thank you for your message! We'll get back to you soon.</p>
                <?php endif; ?>
            </div>
            
            <div style="display: flex; justify-content: center; margin-top: 40px;">
    <div style="display: flex; justify-content: space-between; flex-wrap: wrap; max-width: 900px; width: 100%;">
        <div style="flex: 1; min-width: 300px; padding: 20px;">
            <h3>Location</h3>
            <p>123 Purrington Avenue<br>Catville, CA 90210</p>
            <h3>Hours</h3>
            <p>Monday-Friday: 8am-8pm<br>Saturday-Sunday: 9am-9pm</p>
        </div>
        <div style="flex: 1; min-width: 300px; padding: 20px;">
            <h3>Contact Info</h3>
            <p>Phone: (555) 123-4567<br>Email: hello@purrfectcup.com</p>
            <h3>Reservations</h3>
            <p>Recommended on weekends<br>$10 cover charge supports cat care</p>
        </div>
    </div>
</div>

    <footer>
        <div class="social-icons">
            <a href="#">🐾</a>
            <a href="#">😻</a>
            <a href="#">🐱</a>
            <a href="#">☕</a>
        </div>
        <p>&copy; <?php echo htmlspecialchars($currentYear); ?> <?php echo htmlspecialchars($cafeName); ?>. All rights reserved.</p>
        <p>All cats shown are available for adoption unless otherwise noted.</p>
    </footer>
</body>
</html>