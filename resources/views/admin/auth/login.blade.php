<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OfficeDesign Pro - Admin Login</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "tertiary-container": "#004a31",
                        "on-secondary-container": "#765f3d",
                        "secondary-fixed": "#feddb3",
                        "primary-container": "#1e3a8a",
                        "inverse-on-surface": "#ebf1ff",
                        "primary-fixed-dim": "#b6c4ff",
                        "error-container": "#ffdad6",
                        "outline": "#757682",
                        "surface-container-high": "#dee9fd",
                        "surface": "#f9f9ff",
                        "on-secondary": "#ffffff",
                        "primary": "#00236f",
                        "on-surface-variant": "#444651",
                        "on-primary-container": "#90a8ff",
                        "background": "#f9f9ff",
                        "surface-bright": "#f9f9ff",
                        "inverse-surface": "#273140",
                        "on-surface": "#121c2a",
                        "on-background": "#121c2a",
                        "surface-container-highest": "#d9e3f7",
                        "on-primary": "#ffffff",
                        "surface-container-lowest": "#ffffff",
                        "surface-variant": "#d9e3f7",
                        "on-tertiary": "#ffffff",
                        "secondary-fixed-dim": "#e1c299",
                        "tertiary": "#00311f",
                        "on-tertiary-container": "#27c38a",
                        "tertiary-fixed-dim": "#4edea3",
                        "on-secondary-fixed": "#281801",
                        "surface-container-low": "#eff3ff",
                        "on-tertiary-fixed-variant": "#005236",
                        "surface-tint": "#4059aa",
                        "on-error-container": "#93000a",
                        "on-primary-fixed-variant": "#264191",
                        "secondary": "#725a39",
                        "surface-container": "#e6eeff",
                        "on-tertiary-fixed": "#002113",
                        "surface-dim": "#d0daef",
                        "secondary-container": "#fbdbb0",
                        "inverse-primary": "#b6c4ff",
                        "on-error": "#ffffff",
                        "primary-fixed": "#dce1ff",
                        "error": "#ba1a1a",
                        "on-primary-fixed": "#00164e",
                        "on-secondary-fixed-variant": "#584324",
                        "tertiary-fixed": "#6ffbbe",
                        "outline-variant": "#c5c5d3"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "gutter": "24px",
                        "stack-md": "12px",
                        "stack-sm": "4px",
                        "container-max": "1440px",
                        "base": "8px",
                        "stack-lg": "24px",
                        "margin-mobile": "16px",
                        "margin-desktop": "40px"
                    },
                    "fontFamily": {
                        "body-md": [
                            "Inter"
                        ],
                        "body-lg": [
                            "Inter"
                        ],
                        "label-md": [
                            "Inter"
                        ],
                        "title-lg": [
                            "Inter"
                        ],
                        "headline-lg": [
                            "Inter"
                        ],
                        "headline-md": [
                            "Inter"
                        ],
                        "headline-lg-mobile": [
                            "Inter"
                        ],
                        "display-lg": [
                            "Inter"
                        ]
                    },
                    "fontSize": {
                        "body-md": [
                            "14px",
                            {
                                "lineHeight": "20px",
                                "fontWeight": "400"
                            }
                        ],
                        "body-lg": [
                            "16px",
                            {
                                "lineHeight": "24px",
                                "fontWeight": "400"
                            }
                        ],
                        "label-md": [
                            "12px",
                            {
                                "lineHeight": "16px",
                                "letterSpacing": "0.05em",
                                "fontWeight": "600"
                            }
                        ],
                        "title-lg": [
                            "20px",
                            {
                                "lineHeight": "28px",
                                "fontWeight": "500"
                            }
                        ],
                        "headline-lg": [
                            "32px",
                            {
                                "lineHeight": "40px",
                                "letterSpacing": "-0.01em",
                                "fontWeight": "600"
                            }
                        ],
                        "headline-md": [
                            "24px",
                            {
                                "lineHeight": "32px",
                                "fontWeight": "600"
                            }
                        ],
                        "headline-lg-mobile": [
                            "28px",
                            {
                                "lineHeight": "36px",
                                "fontWeight": "600"
                            }
                        ],
                        "display-lg": [
                            "48px",
                            {
                                "lineHeight": "56px",
                                "letterSpacing": "-0.02em",
                                "fontWeight": "700"
                            }
                        ]
                    }
                },
            },
        }
    </script>
    <style>
        .shadow-ambient {
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.05), 0 10px 25px -5px rgba(0, 0, 0, 0.03);
        }
    </style>
</head>

<body class="bg-background text-on-surface font-body-md min-h-screen flex items-center justify-center">
    <main class="w-full h-screen flex flex-col md:flex-row">
        <!-- Image Side -->
        <div
            class="hidden md:flex w-full md:w-1/2 lg:w-7/12 relative bg-surface-container-highest items-center justify-center">
            <div class="absolute inset-0 bg-cover bg-center"
                data-alt="A meticulously curated interior photograph of a modern, high-end corporate office. The scene features a sleek, long wooden conference table surrounded by premium, ergonomic black leather chairs. The lighting is soft and natural, streaming through large floor-to-ceiling windows, casting subtle, diffused shadows that highlight the pristine textures of the furniture and polished concrete floors. The aesthetic is extremely clean, minimalist, and professional, embodying luxury corporate design."
                style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCmkD-pEn18z00Y-wlwdVocpUZswE05KrUUa2oFq5MGIpkZPKm3LH64vgVbGFIkpWikOeon-4HhAv9vqFb6DBqUbGGQ72yLxr0eCX04xajoB45y80d0ileWcGTriRk2N35-i3DOCgGXt_0gy3us_mfW32hrHg1Juetq8jPAtl3aNpDwQKIMuLYcqQsjJL5qJ5R8-w2rI7bTL2g0NrPUEzPqgpq3GQlrg89BQxEvVyCd0xjINwNetu6cVw')">
            </div>
            <div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
        </div>
        <!-- Login Side -->
        <div
            class="w-full md:w-1/2 lg:w-5/12 flex items-center justify-center p-margin-mobile md:p-margin-desktop bg-surface">
            <div
                class="w-full max-w-[440px] bg-surface-container-lowest p-stack-lg rounded-lg shadow-ambient border border-outline/20">
                <!-- Header -->
                <div class="mb-stack-lg text-center md:text-left">
                    <div class="flex items-center justify-center md:justify-start gap-stack-sm mb-stack-lg">
                        <span class="material-symbols-outlined text-primary text-[32px]">chair</span>
                        <h1 class="font-headline-md text-headline-md text-on-surface">OfficeDesign Pro</h1>
                    </div>
                    <h2
                        class="font-headline-lg-mobile md:font-headline-lg text-headline-lg-mobile md:text-headline-lg text-on-surface mb-stack-sm">
                        Welcome Back</h2>
                    <p class="font-body-lg text-body-lg text-on-surface-variant">Please sign in to access the Admin
                        Console.</p>
                </div>
                <!-- Form -->
                <form class="space-y-lg" id="loginForm" onsubmit="return false;" method="POST"
                    action="{{ route('login.submit') }}">
                    @csrf
                    @method('POST')

                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-stack-sm uppercase"
                            for="email">Email Address</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-outline-variant text-[20px]">mail</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-3 py-2 border border-outline-variant rounded bg-surface-bright text-on-surface font-body-md focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all"
                                id="email" name="email" placeholder="admin@officedesign.pro" required=""
                                type="email" />
                        </div>
                        <div class="text-center">
                            @error('email')
                                <span class="text-red-500 text-sm">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div>
                        <label class="block font-label-md text-label-md text-on-surface mb-stack-sm uppercase"
                            for="password">Password</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="material-symbols-outlined text-outline-variant text-[20px]">lock</span>
                            </div>
                            <input
                                class="block w-full pl-10 pr-10 py-2 border border-outline-variant rounded bg-surface-bright text-on-surface font-body-md focus:outline-none focus:ring-2 focus:ring-primary-container focus:border-primary-container transition-all"
                                id="password" name="password" placeholder="••••••••" required="" type="password" />
                            <div class="absolute inset-y-0 right-0 pr-3 flex items-center cursor-pointer text-outline-variant hover:text-on-surface transition-colors"
                                onclick="togglePassword()">
                                <span class="material-symbols-outlined text-[20px]"
                                    id="visibility-icon">visibility</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center justify-between py-stack-sm">
                        <div class="flex items-center">
                            <input
                                class="h-4 w-4 text-primary-container focus:ring-primary-container border-outline-variant rounded bg-surface-bright"
                                id="remember-me" name="remember-me" type="checkbox" />
                            <label class="ml-2 block font-body-md text-body-md text-on-surface-variant"
                                for="remember-me">
                                Remember me
                            </label>
                        </div>
                        <div class="text-sm">
                            <a class="font-label-md text-label-md text-primary-container hover:text-primary transition-colors"
                                href="#">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div>
                        <button
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded bg-primary-container text-on-primary font-label-md text-label-md uppercase tracking-wider hover:bg-primary transition-colors shadow-ambient mt-stack-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-container"
                            type="submit">
                            Sign In
                        </button>
                    </div>
                </form>
                <!-- Footer Note -->
                <div
                    class="mt-stack-lg pt-stack-md border-t border-outline-variant/30 flex items-center justify-center gap-stack-sm text-on-surface-variant">
                    <span class="material-symbols-outlined text-[16px]">verified_user</span>
                    <span class="font-label-md text-label-md uppercase tracking-widest text-[10px]">Protected by secure
                        encryption</span>
                </div>
            </div>
        </div>
    </main>
    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const visibilityIcon = document.getElementById('visibility-icon');

            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                visibilityIcon.textContent = 'visibility_off';
            } else {
                passwordInput.type = 'password';
                visibilityIcon.textContent = 'visibility';
            }
        }

        // Form submission ripple/feedback (mock)
        const form = document.getElementById('loginForm');
        form.addEventListener('submit', (e) => {
            const btn = form.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.disabled = true;
            btn.innerHTML = '<span class="animate-spin material-symbols-outlined">progress_activity</span> Authenticating...';

            // Revert after 1.5s for demo purposes
            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.disabled = false;
                form.submit();
            }, 1500);
        });
    </script>
</body>

</html>
