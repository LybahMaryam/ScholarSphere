<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile - ScholarSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal">

    <div class="max-w-4xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-lg">
        <!-- Profile Header -->
        <div class="flex flex-col items-center text-center mb-6">
            @if ($profile->profile_picture)
                <img src="{{ asset('storage/' . $profile->profile_picture) }}" 
                     alt="Profile Picture" 
                     class="w-32 h-32 rounded-full object-cover border-4 border-yellow-400 shadow-md mb-4">
            @else
                <img src="{{ asset('images/default-profile.png') }}" 
                     alt="Default Profile Picture" 
                     class="w-32 h-32 rounded-full object-cover border-4 border-gray-300 shadow mb-4">
            @endif

            <h1 class="text-2xl font-bold text-gray-800">{{ $profile->name }}</h1>
            <p class="text-gray-600 mt-2">{{ $profile->bio }}</p>

            @if ($profile->link)
                <a href="{{ $profile->link }}" target="_blank" 
                   class="mt-2 text-blue-500 hover:underline hover:text-blue-700 transition">
                    🔗 Visit Website
                </a>
            @endif
        </div>

        <!-- Posts Section -->
        <div class="mt-8">
            <h2 class="text-xl font-semibold text-yellow-700 mb-4 text-center">Your Posts</h2>

            @if (isset($profile->user->posts) && $profile->user->posts->count() > 0)
                @foreach ($profile->user->posts as $post)
                    <div class="bg-yellow-50 p-4 rounded-lg shadow-md mb-4 border border-yellow-200">
                        <h3 class="text-lg font-bold text-yellow-800">{{ $post->title }}</h3>
                        <p class="text-gray-700 mt-2">{{ $post->content }}</p>
                    </div>
                @endforeach
            @else
                <p class="text-center text-gray-500">No posts found.</p>
            @endif
        </div>
    </div>

</body>
</html>
