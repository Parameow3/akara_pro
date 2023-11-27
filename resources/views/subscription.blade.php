<!DOCTYPE html>
<html>
<head>
    <title>Premium Subscription</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100">
<div class="container mx-auto mt-10">
    <div class="bg-white p-6 rounded shadow">
        <h1 class="text-2xl font-bold mb-2">Premium Subscription</h1>
        <p class="text-gray-700 mb-4">Subscribe to our premium service...</p>
        <a href="{{ route('profile') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
            Go to User Profile
        </a>
    </div>
</div>
</body>
</html>
