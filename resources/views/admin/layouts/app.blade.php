<!DOCTYPE html>

<html class="light" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>OfficeDesign Pro - @yield('title') </title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=JetBrains+Mono:wght@500&family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />

    <link rel="icon" type="image/png" href="{{ asset('icons/web-icon.png') }}">

    @include('admin.layouts.style')
    
    @include('admin.layouts.scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body
    class="bg-[#F8FAFC] text-on-background font-body-lg min-h-screen flex antialiased selection:bg-blue-100 selection:text-primary">    
    @include('admin.layouts.aside')

    <!-- Main Content Area -->
    <main class="flex-1 ml-0 md:ml-64 flex flex-col min-h-screen bg-[#F8FAFC]">
        @include('admin.layouts.header')

        @yield('content')
        @yield('scripts')
    </main>


</body>

</html>