<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login | Gaozim</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <style>
        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            background: linear-gradient(135deg, #eef4fb 0%, #f8fafc 100%);
        }

        .login-shell {
            max-width: 1040px;
            width: 100%;
            margin: 1.5rem;
        }

        .login-panel {
            border-radius: 30px;
            overflow: hidden;
            box-shadow: 0 30px 65px rgba(15, 23, 42, .12);
        }

        .login-hero {
            background: linear-gradient(180deg, rgba(22, 46, 28, .95) 0%, rgba(32, 56, 38, .96) 100%);
            color: #fff;
        }

        .login-hero .feature-item {
            gap: 1rem;
        }

        .login-hero .feature-item i {
            width: 2.5rem;
            height: 2.5rem;
            display: grid;
            place-items: center;
            border-radius: 1rem;
            background: rgba(255, 255, 255, .12);
        }

        .login-form-card {
            min-height: 100%;
            background: #ffffff;
        }

        .form-control:focus {
            box-shadow: 0 0 0 0.2rem rgba(22, 46, 28, .16);
        }

        .social-login-btns .btn {
            min-height: 3rem;
        }

        .login-footer {
            font-size: .92rem;
            color: #64748b;
        }

        @media (max-width: 991.98px) {
            .login-panel {
                border-radius: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="login-shell">
        <div class="row g-0 login-panel">
            <div class="col-lg-6 login-hero p-5 d-flex flex-column justify-content-between">
                <div>
                    <div class="d-flex align-items-center gap-3 mb-4">
                        <span class="badge bg-white text-primary rounded-circle p-3 shadow-sm">
                            <i class="bi bi-truck fs-4"></i>
                        </span>
                        <div>
                            <div class="text-white-50 small text-uppercase letter-spacing">Gaozim Logistics</div>
                            <h2 class="mb-0 fw-bold">Welcome back</h2>
                        </div>
                    </div>
                    <p class="text-white-75 mb-4">Access your logistics command center with secure, enterprise-grade
                        login. Manage alerts, shipments and fleet operations from a single dashboard.</p>
                    <div class="d-grid gap-3">
                        <div class="d-flex align-items-center feature-item">
                            <i class="bi bi-shield-lock-fill"></i>
                            <div>
                                <h6 class="mb-1 text-white">Secure access</h6>
                                <p class="text-white-50 small mb-0">Multi-factor ready sign in and session protection.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center feature-item">
                            <i class="bi bi-graph-up-arrow"></i>
                            <div>
                                <h6 class="mb-1 text-white">Instant insights</h6>
                                <p class="text-white-50 small mb-0">Quickly view alerts, updates and operational
                                    performance.</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center feature-item">
                            <i class="bi bi-globe2"></i>
                            <div>
                                <h6 class="mb-1 text-white">24/7 operations</h6>
                                <p class="text-white-50 small mb-0">Keep your supply chain moving at all hours.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="d-flex align-items-center gap-3 text-white-50 small">
                        <span class="badge bg-white text-primary rounded-circle p-2 shadow-sm"><i
                                class="bi bi-award"></i></span>
                        <span>Trusted by logistics teams worldwide.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 login-form-card p-5">
                <div class="mb-4">
                    <h3 class="fw-bold">Sign in to your account</h3>
                    <p class="text-muted mb-0">Enter your credentials to continue to the Gaozim dashboard.</p>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" placeholder="you@example.com" id="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror" name="email"
                            required>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-lg">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password"
                                placeholder="Enter password" required>
                            <button class="btn btn-outline-secondary" type="button">Show</button>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} checked>
                            <label class="form-check-label" for="remember">Remember me</label>
                        </div>
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-decoration-none">Forgot
                                password?</a>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg w-100 mb-3">Sign in</button>

                    <div class="text-center text-muted mb-3">or continue with</div>
                    <div class="d-flex gap-2 social-login-btns mb-4">
                        <button class="btn btn-outline-secondary w-100"><i class="bi bi-google me-2"></i>Google</button>
                        <button class="btn btn-outline-secondary w-100"><i
                                class="bi bi-microsoft me-2"></i>Microsoft</button>
                    </div>
                    <div class="login-footer text-center">
                        <p class="mb-2">New to Gaozim? <a href="#" class="text-decoration-none">Create an
                                account</a>
                        </p>
                        <p class="mb-0">Need help? <a href="help.html" class="text-decoration-none">Contact
                                support</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
