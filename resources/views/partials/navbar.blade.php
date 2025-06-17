<div class="navbar">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            <img src="{{ asset('https://www.onlinelogomaker.com/blog/wp-content/uploads/2017/07/hiking-logo-design.jpg') }}" alt="Logo" class="logo">
            MyApp
        </a>
        <ul class="navbar-nav">
            <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
            <li class="nav-item"><a href="{{ route('destinations') }}" class="nav-link">Destinations</a></li>
            <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>
            <li class="nav-item">
                <a href="{{ route('booknow') }}" class="nav-link book-now">Book Now</a>
            </li>
        </ul>
    </div>
</div>

<style>
    .navbar {
        position: sticky;
        top: 0;
        z-index: 999;
        background-color: #ffffff; /* White background */
        padding: 10px 0;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }


    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .navbar-brand {
        color: Black;
        text-decoration: none;
        font-size: 24px;
        font-weight: bold;
        display: flex;
        align-items: center;
    }

    .navbar-nav {
        list-style: none;
        display: flex;
        gap: 20px;
        padding: 0;
        margin: 0;
        align-items: center;
    }

    .nav-item {
        display: flex;
    }

    .nav-link {
        color: #000000; /* Black text */
        text-decoration: none;
        padding: 6px 10px;
        transition: background-color 0.3s, color 0.3s;
    }

    .nav-link:hover {
        background-color: #28a745; /* Green on hover for regular links */
        border-radius: 5px;
    }

    .book-now {
        background-color: #28a745; /* Green */
        color: white !important;
        padding: 8px 16px;
        border-radius: 5px;
        font-weight: bold;
    }

    .book-now:hover {
        background-color: #1e7e34; /* Dark green */
        text-decoration: none;
    }

    .logo{
        width: 50px; /* Adjust logo size */
        height: auto; /* Maintain aspect ratio */
        margin-right: 10px; /* Space between logo and brand name */
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar-nav {
            flex-direction: column;
            width: 100%;
            margin-top: 10px;
        }

        .nav-item {
            margin-bottom: 10px;
        }

        .navbar-brand {
            margin-bottom: 10px;
        }
    }
</style>
