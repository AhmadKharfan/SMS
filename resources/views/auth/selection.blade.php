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
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Animated background particles */
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 1;
        }

        .particle {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
        }

        .particle:nth-child(1) { width: 80px; height: 80px; left: 10%; animation-delay: 0s; }
        .particle:nth-child(2) { width: 60px; height: 60px; left: 20%; animation-delay: 1s; }
        .particle:nth-child(3) { width: 100px; height: 100px; left: 70%; animation-delay: 2s; }
        .particle:nth-child(4) { width: 40px; height: 40px; left: 80%; animation-delay: 3s; }
        .particle:nth-child(5) { width: 120px; height: 120px; left: 60%; animation-delay: 4s; }

        @keyframes float {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            33% { transform: translateY(-30px) rotate(120deg); }
            66% { transform: translateY(-60px) rotate(240deg); }
        }

        .main-container {
            position: relative;
            z-index: 2;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-radius: 30px;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            padding: 60px 40px;
            max-width: 1000px;
            width: 100%;
            border: 1px solid rgba(255, 255, 255, 0.3);
            animation: slideUp 0.8s ease-out;
        }

        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 700;
            color: #2d3748;
            margin-bottom: 20px;
            position: relative;
        }

        .title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 2px;
        }

        .subtitle {
            text-align: center;
            font-size: 1.1rem;
            color: #718096;
            margin-bottom: 50px;
        }

        .user-types {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }

        .user-type-card {
            position: relative;
            background: linear-gradient(145deg, #f8fafc, #e2e8f0);
            border-radius: 20px;
            padding: 40px 20px;
            text-align: center;
            transition: all 0.4s ease;
            border: 2px solid transparent;
            text-decoration: none;
            color: inherit;
            overflow: hidden;
        }

        .user-type-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, #667eea, #764ba2);
            opacity: 0;
            transition: opacity 0.4s ease;
            border-radius: 20px;
        }

        .user-type-card:hover::before {
            opacity: 1;
        }

        .user-type-card:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
            border-color: #667eea;
        }

        .card-content {
            position: relative;
            z-index: 2;
            transition: all 0.4s ease;
        }

        .user-type-card:hover .card-content {
            color: white;
        }

        .user-icon {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            transition: all 0.4s ease;
            position: relative;
        }

        .admin-icon {
            background: linear-gradient(135deg, #4299e1, #3182ce);
        }

        .teacher-icon {
            background: linear-gradient(135deg, #48bb78, #38a169);
        }

        .parent-icon {
            background: linear-gradient(135deg, #ed8936, #dd6b20);
        }

        .student-icon {
            background: linear-gradient(135deg, #9f7aea, #805ad5);
        }

        .user-type-card:hover .user-icon {
            background: rgba(255, 255, 255, 0.2);
            transform: scale(1.1);
        }

        .user-title {
            font-size: 1.4rem;
            font-weight: 600;
            margin-bottom: 10px;
            transition: all 0.4s ease;
        }

        .user-description {
            font-size: 0.9rem;
            opacity: 0.8;
            line-height: 1.5;
            transition: all 0.4s ease;
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: 0;
        }

        .shape {
            position: absolute;
            opacity: 0.1;
            animation: rotate 20s linear infinite;
        }

        .shape:nth-child(1) {
            top: 20%;
            right: 10%;
            width: 60px;
            height: 60px;
            background: #667eea;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
        }

        .shape:nth-child(2) {
            bottom: 20%;
            left: 15%;
            width: 80px;
            height: 80px;
            background: #764ba2;
            border-radius: 50% 50% 50% 50% / 60% 60% 40% 40%;
        }

        .shape:nth-child(3) {
            top: 50%;
            right: 20%;
            width: 40px;
            height: 40px;
            background: #48bb78;
            border-radius: 50%;
        }

        @keyframes rotate {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        .logo-section {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo-circle {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            color: white;
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.3);
            animation: pulse 2s ease-in-out infinite;
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }

        @media (max-width: 768px) {
            .login-container {
                margin: 20px;
                padding: 40px 20px;
            }

            .user-types {
                grid-template-columns: repeat(2, 1fr);
                gap: 20px;
            }

            .title {
                font-size: 2rem;
            }

            .user-type-card {
                padding: 30px 15px;
            }

            .user-icon {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }

        /* Icon styles using Unicode symbols */
        .admin-icon::after { content: '⚙️'; }
        .teacher-icon::after { content: '👨‍🏫'; }
        .parent-icon::after { content: '👨‍👩‍👧'; }
        .student-icon::after { content: '🎓'; }
    </style>
</head>

<body>
<div class="particles">
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
    <div class="particle"></div>
</div>

<div class="floating-shapes">
    <div class="shape"></div>
    <div class="shape"></div>
    <div class="shape"></div>
</div>

<div class="main-container">
    <div class="login-container">
        <div class="logo-section">
            <div class="logo-circle">🏫</div>
            <h1 class="title">مرحباً بكم</h1>
            <p class="subtitle">اختر نوع المستخدم للدخول إلى النظام</p>
        </div>

        <div class="user-types">
            <a class="user-type-card" href="{{route('login.show','admin')}}">
                <div class="card-content">
                    <div class="user-icon admin-icon"></div>
                    <h3 class="user-title">مدير النظام</h3>
                    <p class="user-description">إدارة شاملة للنظام والمستخدمين</p>
                </div>
            </a>

            <a class="user-type-card" href="{{route('login.show','teacher')}}">
                <div class="card-content">
                    <div class="user-icon teacher-icon"></div>
                    <h3 class="user-title">معلم</h3>
                    <p class="user-description">إدارة الفصول والطلاب والدرجات</p>
                </div>
            </a>

            <a class="user-type-card" href="{{route('login.show','parent')}}">
                <div class="card-content">
                    <div class="user-icon parent-icon"></div>
                    <h3 class="user-title">ولي الأمر</h3>
                    <p class="user-description">متابعة أداء الأبناء الدراسي</p>
                </div>
            </a>

            <a class="user-type-card" href="{{route('login.show','student')}}">
                <div class="card-content">
                    <div class="user-icon student-icon"></div>
                    <h3 class="user-title">طالب</h3>
                    <p class="user-description">الوصول للمواد والواجبات</p>
                </div>
            </a>
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

    // Add interactive animations
    document.addEventListener('DOMContentLoaded', function() {
        const cards = document.querySelectorAll('.user-type-card');

        cards.forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-15px) scale(1.08)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(0) scale(1)';
            });
        });

        // Add staggered animation for cards on load
        cards.forEach((card, index) => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';

            setTimeout(() => {
                card.style.transition = 'all 0.6s ease';
                card.style.opacity = '1';
                card.style.transform = 'translateY(0)';
            }, index * 150);
        });
    });
</script>

<!-- toastr -->
@yield('js')
<!-- custom -->
<script src="{{ URL::asset('assets/js/custom.js') }}"></script>

</body>

</html>
