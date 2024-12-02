<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Medimart</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    {{-- <style>
        /* General Styles */
        body {
            background-color: #f9f9f9;
            font-family: 'Figtree', sans-serif;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            background-color: #2c3e50;
            color: white;
        }

        header h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-right: 20px;
        }

        /* Location Selector and Search Bar */
        .header-right {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .location-selector,
        .search-bar {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-bar {
            flex: 1;
        }

        /* Navigation */
        nav {
            display: flex;
            gap: 10px;
        }

        nav a {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 5px;
            background-color: #007BFF;
            color: white;
            font-size: 1rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        /* Ticker */
        .ticker-container {
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            width: 100%;
            background-color: #f1f1f1;
            border-radius: 5px;
            padding: 10px 0;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .ticker-text {
            display: inline-block;
            padding-left: 0;
            animation: ticker-scroll 10s linear infinite;
        }

        @keyframes ticker-scroll {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }

        /* Categories */
        .categories {
            margin-top: 20px;
            display: flex;
            gap: 20px;
        }

        .categories.horizontal {
            justify-content: center;
            flex-wrap: wrap;
        }

        .categories.vertical {
            flex-direction: column;
        }

        .category-item {
            padding: 10px 15px;
            background-color: #e3e3e3;
            border-radius: 5px;
            font-weight: 500;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease-in-out;
        }

        .category-item:hover {
            background-color: #cfcfcf;
        }
    </style> --}}
</head>

<body>
    <div class="min-h-screen flex flex-col">
        <header>

            <div class="header-left">
                <h1>Medimart</h1>
                <select class="location-selector">
                    <option value="dhaka">Dhaka</option>
                    <option value="chattogram">Chattogram</option>
                    <option value="sylhet">Sylhet</option>
                </select>
                <input type="text" class="search-bar" placeholder="Search for medicines, categories, etc.">
            </div>

            @if (Route::has('login'))
                <nav>
                    @auth
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </nav>
            @endif
        </header>

        <main>
            <div class="ticker-container">
                <div class="ticker-text">
                    Welcome to Medimart. Your one-stop shop for medicines and medical supplies.
                </div>
            </div>


            <section>
                <div class="categories horizontal">
                    <div class="category-item">Health & Wellness</div>
                    <div class="category-item">Medicines</div>
                    <div class="category-item">Beauty Products</div>
                    <div class="category-item">Medical Equipment</div>
                </div>

                <div class="categories vertical">
                    <div class="category-item">Health & Wellness</div>
                    <div class="category-item">Medicines</div>
                    <div class="category-item">Beauty Products</div>
                    <div class="category-item">Medical Equipment</div>
                </div>
            </section>
        </main>
    </div>
</body>

</html>
