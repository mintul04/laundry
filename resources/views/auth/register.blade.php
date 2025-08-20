<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/all.min.css') }}">
    <title>Register</title>
    <style>
        :root {
            --primary-blue: #2563eb;
            --secondary-blue: #1d4ed8;
            --light-blue: #dbeafe;
            --accent-cyan: #06b6d4;
            --neutral-gray: #64748b;
            --dark-gray: #1e293b;
            --success-green: #10b981;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--accent-cyan) 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        .register-container {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
        }

        .left-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
        }

        .right-section {
            flex: 1;
            background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--accent-cyan) 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
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
            right: 15%;
            animation-delay: 2s;
        }

        .shape:nth-child(3) {
            width: 60px;
            height: 60px;
            bottom: 20%;
            left: 20%;
            animation-delay: 4s;
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

        .visual-content {
            text-align: center;
            color: white;
            z-index: 2;
            position: relative;
        }

        .main-icon {
            font-size: 8rem;
            margin-bottom: 2rem;
            opacity: 0.9;
            animation: bounce 3s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .visual-title {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .visual-subtitle {
            font-size: 1.2rem;
            opacity: 0.9;
            font-weight: 300;
            line-height: 1.6;
        }

        .register-card {
            background: transparent;
            border-radius: 0;
            padding: 3rem 2rem;
            box-shadow: none;
            border: none;
            width: 100%;
            max-width: 480px;
            transform: translateY(20px);
            opacity: 0;
            animation: slideUp 0.8s ease-out forwards;
        }

        @keyframes slideUp {
            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .brand-section {
            text-align: center;
            margin-bottom: 2.5rem;
        }

        .brand-icon {
            width: 64px;
            height: 64px;
            background: linear-gradient(135deg, var(--primary-blue), var(--accent-cyan));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            box-shadow: 0 8px 25px rgba(37, 99, 235, 0.3);
        }

        .brand-icon i {
            font-size: 28px;
            color: white;
        }

        .brand-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--dark-gray);
            margin-bottom: 0.5rem;
        }

        .brand-subtitle {
            color: var(--neutral-gray);
            font-size: 0.95rem;
            font-weight: 400;
        }

        .form-floating {
            position: relative;
            margin-bottom: 1.5rem;
        }

        .form-floating .form-control {
            height: 58px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 1rem 3rem 1rem 1rem;
            font-size: 0.95rem;
            background: rgba(248, 250, 252, 0.8);
            transition: all 0.3s ease;
        }

        .form-floating .form-control:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
            background: white;
        }

        .form-floating label {
            color: var(--neutral-gray);
            font-weight: 500;
            padding-left: 1rem;
        }

        .input-icon {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--neutral-gray);
            z-index: 5;
            transition: color 0.3s ease;
        }

        .form-floating .form-control:focus+label+.input-icon {
            color: var(--primary-blue);
        }

        .password-toggle {
            cursor: pointer;
            user-select: none;
        }

        .password-toggle:hover {
            color: var(--primary-blue);
        }

        .btn-register {
            width: 100%;
            height: 58px;
            background: linear-gradient(135deg, var(--primary-blue), var(--secondary-blue));
            border: none;
            border-radius: 12px;
            color: white;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            margin-top: 1rem;
        }

        .btn-register:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(37, 99, 235, 0.4);
        }

        .btn-register:active {
            transform: translateY(0);
        }

        .btn-register.loading {
            pointer-events: none;
        }

        .btn-register .spinner {
            display: none;
        }

        .btn-register.loading .spinner {
            display: inline-block;
        }

        .btn-register.loading .btn-text {
            display: none;
        }

        .ripple {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.6);
            transform: scale(0);
            animation: ripple-animation 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple-animation {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }

        .login-link {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid #e2e8f0;
        }

        .login-link a {
            color: var(--primary-blue);
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .login-link a:hover {
            color: var(--secondary-blue);
        }

        .form-row {
            display: flex;
            gap: 1rem;
        }

        .form-row .form-floating {
            flex: 1;
        }

        .success-message {
            background: linear-gradient(135deg, var(--success-green), #059669);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: none;
            text-align: center;
            font-weight: 500;
        }

        .error-message {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            padding: 1rem;
            border-radius: 12px;
            margin-bottom: 1.5rem;
            display: none;
            text-align: center;
            font-weight: 500;
        }

        @media (max-width: 767.98px) {
            .register-container {
                flex-direction: column;
            }

            .right-section {
                display: none;
            }

            .left-section {
                min-height: 100vh;
                background: linear-gradient(135deg, var(--primary-blue) 0%, var(--secondary-blue) 50%, var(--accent-cyan) 100%);
            }

            .register-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(20px);
                border-radius: 24px;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
                border: 1px solid rgba(255, 255, 255, 0.2);
                padding: 2rem 1.5rem;
                margin: 1rem;
            }

            .form-row {
                flex-direction: column;
                gap: 0;
            }
        }

        @media (min-width: 768px) and (max-width: 991.98px) {
            .left-section {
                padding: 1.5rem;
            }

            .register-card {
                padding: 2.5rem 1.5rem;
            }

            .visual-title {
                font-size: 2rem;
            }

            .main-icon {
                font-size: 6rem;
            }
        }

        @media (max-width: 480px) {
            .register-card {
                padding: 1.5rem 1rem;
                margin: 0.5rem;
            }

            .brand-title {
                font-size: 1.5rem;
            }
        }

        @media (orientation: landscape) and (max-height: 600px) {
            .left-section {
                padding: 1rem;
            }

            .register-card {
                padding: 1.5rem;
            }

            .brand-section {
                margin-bottom: 1.5rem;
            }

            .form-floating {
                margin-bottom: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="register-container">
        <div class="left-section">
            <div class="register-card">
                <div class="brand-section">
                    <div class="brand-icon text-white">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h1 class="brand-title">Daftar Akun</h1>
                    <p class="brand-subtitle">Bergabung dengan laundry amanda</p>
                </div>

                <div class="success-message" id="successMessage">
                    <i class="fas fa-check-circle me-2"></i>
                    Pendaftaran berhasil! Silakan login.
                </div>

                {{-- @if ($errors->any())
                    <div class="error-message" id="errorMessage">
                        <i class="fas fa-exclamation-circle me-2"></i>
                        @foreach ($errors->all() as $message)
                            <span>{{ $message }}</span>
                        @endforeach
                    </div>
                @endif --}}

                <form id="registerForm" action="{{ Route('registerProses') }}" method="POST">
                    @csrf

                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Nama Panggilan" required>
                        <label for="name">Nama Panggilan</label>
                        <i class="fas fa-user input-icon"></i>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        <label for="email">Email</label>
                        <i class="fas fa-envelope input-icon"></i>

                    </div>

                    <div class="form-row">
                        <div class="form-floating">
                            <input type="tel" class="form-control" id="no_telepon" name="no_telepon" placeholder="No. Telepon" required>
                            <label for="no_telepon">No. Telepon</label>
                            <i class="fas fa-phone input-icon"></i>

                        </div>
                    </div>

                    <div class="form-floating">
                        <textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat" style="height: 80px; resize: none;" required></textarea>
                        <label for="alamat">Alamat</label>
                        <i class="fas fa-map-marker-alt input-icon"></i>

                    </div>

                    <div class="form-floating">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                        <label for="password">Password</label>
                        <i class="fas fa-eye input-icon"></i>

                    </div>

                    <button type="submit" class="btn btn-register">
                        <span class="btn-text">Daftar Sekarang</span>
                        {{-- <span class="spinner spinner-border spinner-border-sm" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </span> --}}
                    </button>
                </form>

                <div class="login-link">
                    <p class="mb-0 text-muted">Sudah punya akun? <a href="{{ route('login') }}">Masuk di sini</a></p>
                </div>
            </div>
        </div>

        <div class="right-section">
            <div class="floating-shapes">
                <div class="shape"></div>
                <div class="shape"></div>
                <div class="shape"></div>
            </div>

            <div class="visual-content">
                <div class="main-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <h2 class="visual-title">Bergabung Bersama Kami</h2>
                <p class="visual-subtitle">Nikmati kemudahan layanan laundry modern dengan teknologi terdepan</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            // Form submission with loading state
            const registerForm = document.getElementById('registerForm');
            const registerBtn = document.getElementById('registerBtn');
            const successMessage = document.getElementById('successMessage');
            const errorMessage = document.getElementById('errorMessage');

            registerForm.addEventListener('submit', function(e) {
                // Add loading state
                registerBtn.classList.add('loading');

                // Hide previous messages
                successMessage.style.display = 'none';
                errorMessage.style.display = 'none';

                // Simulate form processing (remove this in production)
                setTimeout(() => {
                    registerBtn.classList.remove('loading');
                }, 2000);
            });

            // Ripple effect for button
            registerBtn.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });

            // Input focus animations
            const inputs = document.querySelectorAll('.form-control');
            inputs.forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentElement.style.transform = 'translateY(-2px)';
                });

                input.addEventListener('blur', function() {
                    this.parentElement.style.transform = 'translateY(0)';
                });
            });

            // Form validation
            registerForm.addEventListener('submit', function(e) {
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const phone = document.getElementById('no_telepon').value.trim();
                const address = document.getElementById('alamat').value.trim();
                const password = document.getElementById('password').value;

                if (name.length < 2) {
                    e.preventDefault();
                    showError('Nama harus minimal 2 karakter');
                    return;
                }

                if (password.length < 6) {
                    e.preventDefault();
                    showError('Password harus minimal 6 karakter');
                    return;
                }

                if (phone.length < 10) {
                    e.preventDefault();
                    showError('Nomor telepon tidak valid');
                    return;
                }

                if (address.length < 10) {
                    e.preventDefault();
                    showError('Alamat harus lebih detail');
                    return;
                }
            });

            function showError(message) {
                document.getElementById('errorText').textContent = message;
                errorMessage.style.display = 'block';
                registerBtn.classList.remove('loading');

                setTimeout(() => {
                    errorMessage.style.display = 'none';
                }, 5000);
            }

            // Animate floating shapes
            const shapes = document.querySelectorAll('.shape');
            shapes.forEach((shape, index) => {
                shape.style.animationDelay = (index * 2) + 's';
            });
        });
    </script>

    <script src="{{ asset('bootstrap/bootstrap.js') }}"></script>
    <script src="{{ asset('bootstrap/all.min.js') }}"></script>

</body>

</html>
