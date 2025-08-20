<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/all.min.css') }}">
    <title>Login</title>

    <style>
        :root {
            --primary-blue: #2563eb;
            --secondary-blue: #1e40af;
            --light-blue: #dbeafe;
            --accent-cyan: #06b6d4;
            --neutral-gray: #64748b;
        }

        body {
            background: #f8fafc;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        /* Updated container for split layout */
        .login-container {
            min-height: 100vh;
            display: flex;
            align-items: stretch;
        }

        /* Left side form section */
        .form-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: white;
        }

        /* Right side image section */
        .image-side {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        /* Updated login card for left side */
        .login-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
            overflow: hidden;
            max-width: 420px;
            width: 100%;
            transform: translateX(-20px);
            opacity: 0;
            animation: slideInLeft 0.8s ease-out forwards;
            border: 1px solid #e2e8f0;
        }

        @keyframes slideInLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Image section styling */
        .image-content {
            text-align: center;
            color: white;
            z-index: 2;
            transform: translateX(20px);
            opacity: 0;
            animation: slideInRight 0.8s ease-out 0.3s forwards;
        }

        @keyframes slideInRight {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .image-icon {
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 2rem;
            border: 2px solid rgba(255, 255, 255, 0.2);
            animation: float 6s ease-in-out infinite;
        }

        .image-icon i {
            font-size: 5rem;
            color: white;
        }

        .image-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .image-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            max-width: 300px;
            margin: 0 auto;
        }

        .logo-section {
            text-align: center;
            padding: 3rem 2rem 2rem;
            background: linear-gradient(135deg, var(--light-blue) 0%, rgba(255, 255, 255, 0.8) 100%);
        }

        .logo-icon {
            width: 80px;
            height: 80px;
            background: var(--primary-blue);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
            transition: transform 0.3s ease;
        }

        .logo-icon:hover {
            transform: scale(1.05);
        }

        .logo-icon i {
            font-size: 2rem;
            color: white;
        }

        .app-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--secondary-blue);
            margin: 0;
        }

        .form-section {
            padding: 2rem;
        }

        .form-floating {
            margin-bottom: 1.5rem;
        }

        .form-control {
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 1rem 1rem 1rem 3rem;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
        }

        .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 0.2rem rgba(37, 99, 235, 0.15);
            background: white;
        }

        .input-group {
            position: relative;
        }

        .input-icon {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--neutral-gray);
            z-index: 10;
            transition: color 0.3s ease;
        }

        .form-control:focus+.input-icon {
            color: var(--primary-blue);
        }

        .btn-login {
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--accent-cyan) 100%);
            border: none;
            border-radius: 12px;
            padding: 1rem;
            font-weight: 600;
            font-size: 1.1rem;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
        }

        .btn-login:active {
            transform: translateY(0);
        }

        .btn-login.loading {
            pointer-events: none;
        }

        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 0.5rem;
        }

        @keyframes spin {
            to {
                transform: rotate(360deg);
            }
        }

        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            color: var(--neutral-gray);
        }

        .register-link a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .register-link a:hover {
            color: var(--secondary-blue);
        }

        /* Updated floating shapes for right side */
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
            z-index: 1;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .shape:nth-child(1) {
            width: 80px;
            height: 80px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 120px;
            height: 120px;
            top: 60%;
            right: 10%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            top: 40%;
            right: 30%;
            animation-delay: 1s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(180deg);
            }
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            /* Hide image side completely on mobile */
            .image-side {
                display: none;
            }

            .form-side {
                padding: 1rem;
                /* Make form side take full width on mobile */
                flex: none;
                width: 100%;
                min-height: 100vh;
            }

        }

        /* Added tablet responsive design for better medium screen experience */
        @media (max-width: 992px) and (min-width: 769px) {
            .login-container {
                padding: 2rem;
            }

            .form-side {
                padding: 1.5rem;
            }

            .login-card {
                max-width: 380px;
            }

            .image-icon {
                width: 160px;
                height: 160px;
            }

            .image-icon i {
                font-size: 4rem;
            }

            .image-title {
                font-size: 2.2rem;
            }
        }

        /* Added extra small mobile responsive for better small screen experience */
        @media (max-width: 480px) {
            .login-container {
                min-height: 100vh;
            }

            /* Ensure image side stays hidden on small mobile */
            .image-side {
                display: none;
            }

            .form-side {
                padding: 0.5rem;
                flex: none;
                /* Full width and height for small mobile */
                width: 100%;
                min-height: 100vh;
            }

        }

        /* Added landscape mobile orientation support */
        @media (max-height: 600px) and (orientation: landscape) {

            /* Keep split layout only for larger landscape screens */
            .login-container {
                flex-direction: row;
            }

            /* Show image side only on landscape if screen is wide enough */
            .image-side {
                display: flex;
                min-height: 100vh;
                order: 0;
                flex: 0.6;
            }

        }

        /* Added specific rule to hide image side on mobile landscape */
        @media (max-width: 768px) and (orientation: landscape) {
            .image-side {
                display: none;
            }

            .form-side {
                width: 100%;
                flex: none;
            }
        }
    </style>
</head>

<body>
    <div class="login-container">
        <!-- Left side - Login Form -->
        <div class="form-side">
            <div class="login-card">
                <div class="logo-section">
                    <div class="logo-icon text-white">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h1 class="app-title">Laundry Amanda</h1>
                </div>

                <div class="form-section">
                    <form action="{{ Route('loginProses') }}" method="POST" id="loginForm">
                        @csrf
                        <div class="input-group mb-2">
                            <input type="text" name="name" class="form-control" placeholder="Username" required>
                            <i class="fas fa-user input-icon"></i>
                        </div>

                        <div class="input-group mb-3">
                            <input type="password" name="password" class="form-control" placeholder="Password" required id="passwordInput">
                            <i class="fas fa-lock input-icon"></i>
                        </div>

                        <button type="submit" class="btn btn-login" id="loginBtn">
                            <div class="spinner" id="spinner"></div>
                            <span id="btnText">Login</span>
                        </button>
                    </form>

                    <div class="register-link">
                        <p>Belum mempunyai akun? <a href="{{ Route('register') }}">Buat Sekarang</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right side - Image/Icon Section -->
        <div class="image-side">
            <div class="floating-shapes">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>

            <div class="image-content">
                <div class="image-icon">
                    <i class="fas fa-washing-machine"></i>
                </div>
                <h2 class="image-title">Selamat Datang!</h2>
                <p class="image-subtitle">Layanan laundry profesional di ujung jari Anda</p>
            </div>
        </div>
    </div>

    <script>
        // Form submission with loading state
        const loginForm = document.getElementById('loginForm');
        const loginBtn = document.getElementById('loginBtn');
        const spinner = document.getElementById('spinner');
        const btnText = document.getElementById('btnText');

        loginForm.addEventListener('submit', function(e) {
            // Show loading state
            loginBtn.classList.add('loading');
            spinner.style.display = 'inline-block';
            btnText.textContent = 'Signing In...';

            // Simulate loading (remove this in production)
            // The form will submit normally to Laravel
        });

        // Input focus animations
        const inputs = document.querySelectorAll('.form-control');
        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.parentElement.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.parentElement.style.transform = 'scale(1)';
            });
        });

        // Add ripple effect to button
        loginBtn.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.width = ripple.style.height = size + 'px';
            ripple.style.left = x + 'px';
            ripple.style.top = y + 'px';
            ripple.classList.add('ripple-effect');

            this.appendChild(ripple);

            setTimeout(() => {
                ripple.remove();
            }, 600);
        });

        // Add CSS for ripple effect
        const style = document.createElement('style');
        style.textContent = `
            .ripple-effect {
                position: absolute;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.3);
                transform: scale(0);
                animation: ripple 0.6s linear;
                pointer-events: none;
            }
            
            @keyframes ripple {
                to {
                    transform: scale(4);
                    opacity: 0;
                }
            }
        `;
        document.head.appendChild(style);

        // Smooth scroll and entrance animation
        window.addEventListener('load', function() {
            document.body.style.overflow = 'hidden';
            setTimeout(() => {
                document.body.style.overflow = 'auto';
            }, 1000);
        });
    </script>

    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/all.min.js') }}"></script>

</body>

</html>
