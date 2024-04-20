@extends('frontend.layouts.app')

@section('contents')
<style>
    .about-us, .achievements, .team-profiles, .collaborators {
        padding: 60px 0;
        text-align: center;
    }
    .about-us {
        background-color: #000;
        color: #fff;
    }
    .achievements, .collaborators {
        background-color: #f0f0f0;
        color: #000;
    }
    .team-profiles {
        background-color: #fff;
        color: #000;
    }
    h2, h3, h4 {
        font-weight: bold;
    }
    .about-us h2, .achievements h3, .team-profiles h3, .collaborators h3 {
        font-size: 2.5rem;
        margin-bottom: 20px;
    }
    .about-us p, .achievement-item p, .collaborators p {
        font-size: 1.2rem;
        margin-bottom: 15px;
    }
    .achievement-item h4 {
        font-size: 1.8rem;
    }
    .profile img, .collaborators img {
        max-width: 150px;
        border-radius: 50%;
        margin-bottom: 15px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
        filter: grayscale(100%);
    }
    .profile:hover img, .collaborators img:hover {
        transform: scale(1.1);
    }
    .profile h4 {
        font-size: 1.4rem; /* Adjusted font size */
    }
    .profile p {
        font-size: 1rem; /* Adjusted font size */
    }
    .profile a {
        font-size: 1rem; /* Adjusted font size */
        color: #000;
        text-decoration: none;
        background-color: #fff;
        padding: 5px 10px;
        border: 2px solid #000;
        border-radius: 5px;
        transition: all 0.3s ease;
    }
    .profile a:hover {
        background-color: #000;
        color: #fff;
        border-color: #fff;
    }
</style>

<section class="about-us">
    <div class="container">
        <h2>About Avery</h2>
        <p>Avery is a contemporary clothing brand that focuses on delivering high-quality, stylish apparel. Our designs are inspired by the modern lifestyle and are made to complement every aspect of your day-to-day life. From the initial sketch to the final product, every piece is crafted with attention to detail and a deep love for fashion.</p>
    </div>
</section>

<section class="achievements">
    <div class="container">
        <h3>Our Achievements</h3>
        <div class="row">
            <div class="col-md-4 achievement-item">
                <h4>500,000+</h4>
                <p>Products Sold</p>
            </div>
            <div class="col-md-4 achievement-item">
                <h4>100+</h4>
                <p>Design Awards</p>
            </div>
            <div class="col-md-4 achievement-item">
                <h4>5 Million</h4>
                <p>Global Customers</p>
            </div>
            <div class="col-md-4 achievement-item">
                <h4>10 Years</h4>
                <p>Industry Experience</p>
            </div>
            <div class="col-md-4 achievement-item">
                <h4>Top 5</h4>
                <p>Rated in Fashion Magazines</p>
            </div>
            <div class="col-md-4 achievement-item">
                <h4>24/7</h4>
                <p>Customer Support</p>
            </div>
        </div>
    </div>
</section>

<section class="team-profiles">
    <div class="container">
        <h3>Meet Our Team</h3>
        <div class="row">
            <!-- Profile 1 -->
            <div class="col-md-3 text-center profile">
                <img src="path/to/image1.jpg" alt="John Doe" class="img-fluid">
                <h4>Hera Safitri</h4>
                <p>Designer</p>
                <a href="https://instagram.com/_sherrx" target="_blank">Contact</a>
            </div>
            <!-- Profile 2 -->
            <div class="col-md-3 text-center profile">
                <img src="path/to/image2.jpg" alt="Jane Smith" class="img-fluid">
                <h4>Amelya Enjelita Sitorus</h4>
                <p>Marketing Lead</p>
                <a href="https://instagram.com/amlyajlta" target="_blank">Contact</a>
            </div>
            <!-- Profile 3 -->
            <div class="col-md-3 text-center profile">
                <img src="path/to/image3.jpg" alt="Alex Johnson" class="img-fluid">
                <h4>Ni Putu Dadia Yasuarini</h4>
                <p>Head of Sales</p>
                <a href="https://instagram.com/niptdadia" target="_blank">Contact</a>
            </div>
            <!-- Profile 4 -->
            <div class="col-md-3 text-center profile">
                <img src="path/to/image4.jpg" alt="Emily White" class="img-fluid">
                <h4>Ijlal Nuhlan Fedwika</h4>
                <p>Product Manager</p>
                <a href="https://instagram.com/lalmustbedied" target="_blank">Contact</a>
            </div>
        </div>
    </div>
</section>

<section class="collaborators">
    <div class="container">
        <h3>Our Collaborators</h3>
        <p>We are proud to collaborate with some of the most prestigious names in the fashion industry.</p>
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/images-3.png') }}" alt="Acubi Club" class="img-fluid" style="max-height: 100px;">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/images-5.jpeg') }}" alt="Chrome Hearts" class="img-fluid"
                    style="max-height: 100px;">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/images-2.png') }}" alt="Gallery Dept" class="img-fluid"
                    style="max-height: 100px;">
            </div>
            <div class="col-md-3 text-center">
                <img src="{{ asset('img/1.png') }}" alt="Opening Project" class="img-fluid"
                    style="max-height: 100px;">
            </div>
        </div>
    </div>
</section>
@endsection
