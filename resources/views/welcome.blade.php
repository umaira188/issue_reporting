
<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ __('messages.complaint_management') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <!-- Header -->

    <header class="header">
        <div class="logo-container">
            <img src="{{ asset('Images/CMC-Logo.png') }}" alt="CMC Logo" class="logo">
            <h1 class="title">{{ __('messages.colombo_municipal_council') }}</h1>
        </div>
        <nav>
            <ul class="nav-list">
                <li><a href="{{ url('/') }}" class="nav-link">{{ __('messages.home') }}</a></li>
                <li><a href="{{ url('/login') }}" class="nav-link">{{ __('messages.login') }}</a></li>
            </ul>
        </nav>
       <div class="language-selector">
    <a href="{{ route('lang.switch', 'en') }}" class="language">English</a> |
    <a href="{{ route('lang.switch', 'si') }}" class="language">සිංහල</a> |
    <a href="{{ route('lang.switch', 'ta') }}" class="language">தமிழ்</a>
</div>

    </header>

    <!-- Hero Section -->
     
    <main class="main-content">
        <h2 class="hero-title">{{ __('messages.complaint_management') }}</h2>
        <p class="hero-description">
            {{ __('messages.efficient') }} .
            {{ __('messages.easy') }} .
            {{ __('messages.effortless') }}
        </p>
        <div class="button-container">
            <a href="{{ route('register') }}" class="btn">{{ __('messages.lodge_complaint') }}</a> 
            <a href="{{ route('complaint.track.form') }}" class="btn">{{ __('messages.track_complaint') }}</a>
        </div>
    </main>

    <!-- Steps to Report an Issue -->

    <section class="steps-section">
        <h2 class="steps-title">{{ __('messages.how_to_report') }}</h2>
        <div class="steps-container">
            <div class="step-card hidden-content">
                <i class="fas fa-user-circle step-icon"></i>
                <h3 class="step-title">{{ __('messages.step1') }}</h3>
                <p>{{ __('messages.signin') }}</p>
            </div>
            <div class="step-card hidden-content">
                <i class="fas fa-pencil-alt step-icon"></i>
                <h3 class="step-title">{{ __('messages.step2') }}</h3>
                <p>{{ __('messages.describe_issue') }}</p>
            </div>
            <div class="step-card hidden-content">
                <i class="fas fa-upload step-icon"></i>
                <h3 class="step-title">{{ __('messages.step3') }}</h3>
                <p>{{ __('messages.upload_images') }}</p>
            </div>
            <div class="step-card hidden-content">
                <i class="fas fa-search step-icon"></i>
                <h3 class="step-title">{{ __('messages.step4') }}</h3>
                <p>{{ __('messages.track_progress') }}</p>
            </div>
            <div class="step-card hidden-content">
                <i class="fas fa-comments step-icon"></i>
                <h3 class="step-title">{{ __('messages.step5') }}</h3>
                <p>{{ __('messages.feedback') }}</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-links">
                <h4>{{ __('messages.quick_links') }}</h4>
                <a href="#" class="footer-link">{{ __('messages.dashboard') }}</a>
                <a href="#" class="footer-link">{{ __('messages.lodge_complaint') }}</a>
                <a href="#" class="footer-link">{{ __('messages.track_complaint') }}</a>
                <a href="#" class="footer-link">{{ __('messages.login') }}</a>
            </div>

            <div class="contact-info">
                <h4>{{ __('messages.contact_us') }}</h4>
                <p>{{ __('messages.email') }}: <a href="mailto:info@cmc.lk" class="footer-link">info@cmc.lk</a></p>
                <p>{{ __('messages.phone') }}: <a href="tel:+94112345678" class="footer-link">+94 11 234 5678</a></p>
                <p>{{ __('messages.address') }}</p>
            </div>

            <div class="social-media-icons">
                <h4>{{ __('messages.follow_us') }}</h4>
                <div class="social-icons">
                    <a href="#" aria-label="Facebook" class="social-icon">
                        <i class="fa-brands fa-facebook"></i>
                    </a>
                    <a href="#" aria-label="Twitter" class="social-icon">
                        <i class="fa-brands fa-twitter"></i>
                    </a>
                    <a href="#" aria-label="LinkedIn" class="social-icon">
                        <i class="fa-brands fa-linkedin"></i>
                    </a>
                    <a href="#" aria-label="YouTube" class="social-icon">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
        <p class="footer-text">&copy; 2025 {{ __('messages.colombo_municipal_council') }}. {{ __('messages.rights_reserved') }}</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const hiddenElements = document.querySelectorAll('.hidden-content');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible-content');
                    }
                });
            }, { threshold: 0.1 });
            
            hiddenElements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
