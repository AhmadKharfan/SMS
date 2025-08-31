<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webmin - Bootstrap 4 & Angular 5 Admin Dashboard Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>برنامج مرمرة لادارة المدارس</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Cairo', sans-serif;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background */
        .bg-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            animation: floatUp 6s ease-in-out infinite;
        }

        .floating-element:nth-child(1) {
            width: 100px; height: 100px;
            left: 10%; animation-delay: 0s;
            animation-duration: 8s;
        }
        .floating-element:nth-child(2) {
            width: 60px; height: 60px;
            left: 85%; animation-delay: 2s;
            animation-duration: 6s;
        }
        .floating-element:nth-child(3) {
            width: 80px; height: 80px;
            left: 70%; animation-delay: 4s;
            animation-duration: 7s;
        }

        @keyframes floatUp {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }
            10% {
                opacity: 1;
            }
            90% {
                opacity: 1;
            }
            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .main-wrapper {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(25px);
            border-radius: 25px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: slideIn 1s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(50px) scale(0.9);
            }
            to {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        .login-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 500px;
        }

        .login-side {
            padding: 50px 40px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .welcome-side {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .welcome-side::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .welcome-content {
            position: relative;
            z-index: 2;
            text-align: center;
        }

        .user-type-icon {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            border: 3px solid rgba(255, 255, 255, 0.3);
            animation: bounce 2s ease-in-out infinite;
        }

        @keyframes bounce {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        .welcome-title {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }

        .welcome-subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
            line-height: 1.6;
        }

        .form-side {
            background: white;
        }

        .form-header {
            text-align: center;
            margin-bottom: 40px;
        }

        .form-title {
            font-size: 2rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 10px;
        }

        .form-subtitle {
            color: #718096;
            font-size: 1rem;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            color: #4a5568;
            margin-bottom: 8px;
            font-size: 0.95rem;
        }

        .form-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #f8fafc;
            font-family: 'Cairo', sans-serif;
        }

        .form-input:focus {
            outline: none;
            border-color: #667eea;
            background: white;
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
        }

        .form-input.is-invalid {
            border-color: #e53e3e;
            background: #fed7d7;
        }

        .invalid-feedback {
            color: #e53e3e;
            font-size: 0.875rem;
            margin-top: 5px;
            font-weight: 500;
        }

        .checkbox-group {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 30px 0;
        }

        .custom-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .custom-checkbox input {
            width: 18px;
            height: 18px;
            accent-color: #667eea;
        }

        .forgot-password {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .forgot-password:hover {
            color: #764ba2;
            text-decoration: none;
        }

        .login-button {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #667eea, #764ba2);
            color: white;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .login-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
            transition: left 0.5s ease;
        }

        .login-button:hover::before {
            left: 100%;
        }

        .login-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }

        .back-button {
            position: absolute;
            top: 20px;
            left: 20px;
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            z-index: 10;
        }

        .back-button:hover {
            background: rgba(255, 255, 255, 0.3);
            transform: scale(1.1);
            color: white;
            text-decoration: none;
        }

        .alert {
            background: #fed7d7;
            border: 1px solid #feb2b2;
            color: #c53030;
            padding: 15px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 500;
        }

        @media (max-width: 768px) {
            .login-content {
                grid-template-columns: 1fr;
            }

            .welcome-side {
                padding: 30px 20px;
            }

            .login-side {
                padding: 40px 20px;
            }

            .form-title {
                font-size: 1.5rem;
            }

            .welcome-title {
                font-size: 1.5rem;
            }

            .user-type-icon {
                width: 80px;
                height: 80px;
                font-size: 2rem;
            }
        }

        /* User type specific styling */
        .admin-theme {
            background: linear-gradient(135deg, #4299e1, #3182ce);
        }
        .teacher-theme {
            background: linear-gradient(135deg, #48bb78, #38a169);
        }
        .parent-theme {
            background: linear-gradient(135deg, #ed8936, #dd6b20);
        }
        .student-theme {
            background: linear-gradient(135deg, #9f7aea, #805ad5);
        }
    </style>
</head>

<body>
<div class="bg-animation">
    <div class="floating-element"></div>
    <div class="floating-element"></div>
    <div class="floating-element"></div>
</div>

<a href="/" class="back-button">
    ←
</a>

<div class="main-wrapper">
    <div class="login-card">
        <div class="login-content">
            <div class="welcome-side
                    @if($type == 'admin') admin-theme
                    @elseif($type == 'teacher') teacher-theme
                    @elseif($type == 'parent') parent-theme
                    @else student-theme @endif">
                <div class="welcome-content">
                    <div class="user-type-icon">
                        @if($type == 'admin') ⚙️
                        @elseif($type == 'teacher') 👨‍🏫
                        @elseif($type == 'parent') 👨‍👩‍👧
                        @else 🎓 @endif
                    </div>
                    <h2 class="welcome-title">
                        @if($type == 'student') مرحباً أيها الطالب
                        @elseif($type == 'parent') مرحباً ولي الأمر
                        @elseif($type == 'teacher') مرحباً أيها المعلم
                        @else مرحباً مدير النظام @endif
                    </h2>
                    <p class="welcome-subtitle">
                        @if($type == 'student') ادخل للوصول إلى موادك الدراسية ومتابعة حضورك وامتحاناتك
                        @elseif($type == 'parent') تابع أداء أطفالك الدراسي وتطورهم
                        @elseif($type == 'teacher') إدارة فصولك وطلابك بسهولة
                        @else تحكم كامل في إدارة النظام المدرسي @endif
                    </p>
                </div>
            </div>

            <div class="login-side">
                <div class="form-header">
                    <h1 class="form-title">تسجيل الدخول</h1>
                    <p class="form-subtitle">أدخل بياناتك للوصول إلى حسابك</p>
                </div>

                @if (\Session::has('message'))
                    <div class="alert">
                        {{ \Session::get('message') }}
                    </div>
                @endif

                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <input type="hidden" value="{{$type}}" name="type">

                    <div class="form-group">
                        <label class="form-label" for="email">البريد الإلكتروني</label>
                        <input id="email" type="email"
                               class="form-input @error('email') is-invalid @enderror"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autocomplete="email"
                               autofocus
                               placeholder="أدخل بريدك الإلكتروني">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="password">كلمة المرور</label>
                        <input id="password" type="password"
                               class="form-input @error('password') is-invalid @enderror"
                               name="password"
                               required
                               autocomplete="current-password"
                               placeholder="أدخل كلمة المرور">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="checkbox-group">
                        <label class="custom-checkbox">
                            <input type="checkbox" name="remember" id="remember">
                            <span>تذكرني</span>
                        </label>
                        <a href="#" class="forgot-password">هل نسيت كلمة المرور؟</a>
                    </div>

                    <button type="submit" class="login-button">
                        دخول
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jquery -->
<script src="{{ URL::asset('assets/js/jquery-3.3.1.min.js') }}"></script>
<!-- plugins-jquery -->
<script src="{{ URL::asset('assets/js/plugins-jquery.js') }}"></script>
<!-- plugin_path -->
<script>
    var plugin_path = 'js/';

    document.addEventListener('DOMContentLoaded', function() {
        // Form animations
        const inputs = document.querySelectorAll('.form-input');

        inputs.forEach(input => {
            input.addEventListener('focus', function() {
                this.style.transform = 'scale(1.02)';
            });

            input.addEventListener('blur', function() {
                this.style.transform = 'scale(1)';
            });
        });

        // Button animation
        const button = document.querySelector('.login-button');
        button.addEventListener('click', function(e) {
            if (!this.classList.contains('loading')) {
                this.innerHTML = 'جاري الدخول...';
                this.classList.add('loading');
            }
        });

        // Add ripple effect to button
        button.addEventListener('click', function(e) {
            const ripple = document.createElement('span');
            const rect = this.getBoundingClientRect();
            const size = Math.max(rect.width, rect.height);
            const x = e.clientX - rect.left - size / 2;
            const y = e.clientY - rect.top - size / 2;

            ripple.style.cssText = `
                    position: absolute;
                    width: ${size}px;
                    height: ${size}px;
                    left: ${x}px;
                    top: ${y}px;
                    background: rgba(255,255,255,0.3);
                    border-radius: 50%;
                    transform: scale(0);
                    animation: ripple 0.6s ease-out;
                    pointer-events: none;
                `;

            this.appendChild(ripple);

            setTimeout(() => ripple.remove(), 600);
        });

        // Add CSS for ripple animation
        const style = document.createElement('style');
        style.textContent = `
                @keyframes ripple {
                    to {
                        transform: scale(2);
                        opacity: 0;
                    }
                }
                .login-button.loading {
                    opacity: 0.8;
                    pointer-events: none;
                }
            `;
        document.head.appendChild(style);
    });
</script>

<!-- chart -->
<script src="{{ URL::asset('assets/js/chart-init.js') }}"></script>
<!-- calendar -->
<script src="{{ URL::asset('assets/js/calendar.init.js') }}"></script>
<!-- charts sparkline -->
<script src="{{ URL::asset('assets/js/sparkline.init.js') }}"></script>
<!-- charts morris -->
<script src="{{ URL::asset('assets/js/morris.init.js') }}"></script>
<!-- datepicker -->
<script src="{{ URL::asset('assets/js/datepicker.js') }}"></script>
<!-- sweetalert2 -->
<script src="{{ URL::asset('assets/js/sweetalert2.js') }}"></script>
<!-- toastr -->
@yield('js')
<script src="{{ URL::asset('assets/js/toastr.js') }}"></script>
<!-- validation -->
<script src="{{ URL::asset('assets/js/validation.js') }}"></script>
<!-- lobilist -->
<script src="{{ URL::asset('assets/js/lobilist.js') }}"></script>
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
