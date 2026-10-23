<script id="tailwind-config">
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                "colors": {
                    "tertiary-fixed-dim": "#4edea3",
                    "on-secondary-fixed": "#281801",
                    "surface-container-low": "#eff3ff",
                    "surface-container-high": "#dee9fd",
                    "on-secondary-container": "#765f3d",
                    "on-primary": "#ffffff",
                    "surface-container-lowest": "#ffffff",
                    "secondary-fixed-dim": "#e1c299",
                    "primary-container": "#1e3a8a",
                    "inverse-primary": "#b6c4ff",
                    "primary-fixed-dim": "#b6c4ff",
                    "outline-variant": "#c5c5d3",
                    "primary-fixed": "#dce1ff",
                    "on-error": "#ffffff",
                    "outline": "#757682",
                    "surface-tint": "#4059aa",
                    "surface": "#f9f9ff",
                    "on-surface-variant": "#444651",
                    "primary": "#00236f",
                    "on-primary-container": "#90a8ff",
                    "background": "#f9f9ff",
                    "on-surface": "#121c2a",
                    "on-tertiary-fixed-variant": "#005236",
                    "tertiary-container": "#004a31",
                    "on-tertiary": "#ffffff",
                    "error": "#ba1a1a",
                    "inverse-on-surface": "#ebf1ff",
                    "surface-bright": "#f9f9ff",
                    "on-background": "#121c2a",
                    "secondary-container": "#fbdbb0",
                    "surface-container-highest": "#d9e3f7",
                    "on-secondary-fixed-variant": "#584324",
                    "on-primary-fixed": "#00164e",
                    "tertiary-fixed": "#6ffbbe",
                    "surface-variant": "#d9e3f7",
                    "on-error-container": "#93000a",
                    "surface-dim": "#d0daef",
                    "secondary-fixed": "#feddb3",
                    "on-primary-fixed-variant": "#264191",
                    "tertiary": "#00311f",
                    "error-container": "#ffdad6",
                    "surface-container": "#e6eeff",
                    "inverse-surface": "#273140",
                    "on-tertiary-container": "#27c38a",
                    "secondary": "#725a39",
                    "on-tertiary-fixed": "#002113",
                    "on-secondary": "#ffffff"
                },
                "borderRadius": {
                    "DEFAULT": "0.125rem",
                    "lg": "0.25rem",
                    "xl": "0.5rem",
                    "full": "0.75rem"
                },
                "spacing": {
                    "container-max": "1440px",
                    "stack-lg": "24px",
                    "margin-mobile": "16px",
                    "base": "8px",
                    "stack-sm": "4px",
                    "stack-md": "12px",
                    "gutter": "24px",
                    "margin-desktop": "40px"
                },
                "fontFamily": {
                    "title-lg": ["Inter"],
                    "label-md": ["Inter"],
                    "display-lg": ["Inter"],
                    "headline-lg": ["Inter"],
                    "body-lg": ["Inter"],
                    "body-md": ["Inter"],
                    "headline-md": ["Inter"],
                    "headline-lg-mobile": ["Inter"]
                },
                "fontSize": {
                    "title-lg": ["20px", {
                        "lineHeight": "28px",
                        "fontWeight": "500"
                    }],
                    "label-md": ["12px", {
                        "lineHeight": "16px",
                        "letterSpacing": "0.05em",
                        "fontWeight": "600"
                    }],
                    "display-lg": ["48px", {
                        "lineHeight": "56px",
                        "letterSpacing": "-0.02em",
                        "fontWeight": "700"
                    }],
                    "headline-lg": ["32px", {
                        "lineHeight": "40px",
                        "letterSpacing": "-0.01em",
                        "fontWeight": "600"
                    }],
                    "body-lg": ["16px", {
                        "lineHeight": "24px",
                        "fontWeight": "400"
                    }],
                    "body-md": ["14px", {
                        "lineHeight": "20px",
                        "fontWeight": "400"
                    }],
                    "headline-md": ["24px", {
                        "lineHeight": "32px",
                        "fontWeight": "600"
                    }],
                    "headline-lg-mobile": ["28px", {
                        "lineHeight": "36px",
                        "fontWeight": "600"
                    }]
                }
            }
        }
    }

</script>

@if (session()->has('success') || session()->has('error') || session()->has('warning') || session()->has('info') || $errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            if (typeof toastr === 'undefined') {
                return;
            }

            @foreach (['success', 'error', 'warning', 'info'] as $type)
                @if (session($type))
                    toastr.{{ $type }}(@json(session($type)));
                @endif
            @endforeach

            @foreach ($errors->all() as $error)
                toastr.error(@json($error));
            @endforeach
        });
    </script>
@endif
