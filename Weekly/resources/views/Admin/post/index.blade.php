<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">

    <style>
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    @keyframes slideIn {
        from {
            transform: translateX(-100%);
        }

        to {
            transform: translateX(0);
        }
    }

    @keyframes slideOut {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-100%);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .fade-in {
        animation: fadeIn 0.5s ease-in-out;
    }

    .slide-in {
        animation: slideIn 0.5s ease-in-out;
    }

    .slide-out {
        animation: slideOut 0.5s ease-in-out;
    }

    .fade-in-up {
        animation: fadeInUp 0.5s ease-in-out;
    }
    </style>
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <!-- Added: Top Navigation Bar -->
    <nav class="fixed top-0 left-0 right-0 bg-white dark:bg-gray-800 shadow-sm z-50 fade-in">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <div class="ml-4 text-[#fb8c00] dark:text-[#fb8c00] font-semibold text-xl">Weekly</div>
                </div>
                <div class="flex items-center space-x-4">
                    <button
                        class="p-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full">
                        <i class="bx bx-bell text-xl"></i>
                    </button>
                    <button
                        class="p-2 text-gray-600 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 rounded-full">
                        <i class="bx bx-message text-xl"></i>
                    </button>
                    <div class="border-l border-gray-200 dark:border-gray-700 h-6 mx-2"></div>
                    <div class="flex items-center space-x-3">
                        <img src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde" alt="User"
                            class="h-8 w-8 rounded-full">
                        <span class="text-gray-700 dark:text-gray-200 font-medium">John Doe</span>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Updated: Main container with top padding for navbar -->
    <div class="flex h-screen pt-16">
        <!-- start sidebar -->
        <aside
            class="w-64 bg-white h-100 border-r border-gray-200 fixed md:static transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shadow-lg slide-in"
            id="sideBar">
            <div class="p-6 flex flex-col h-100 justify-center items-center">
                <button id="sideBarHideBtn" class="md:hidden text-gray-900 hover:text-red-500 focus:outline-none">
                    <i class="fas fa-times-circle text-xl"></i>
                </button>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">Homes</p>
                    <a href="{{ url('/dashboard') }}"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-chart-pie text-xs mr-2"></i>
                        Analytics Dashboard
                    </a>
                </div>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">Apps</p>
                    <ul class="fade-in-up">
                        <li>
                            <a href="{{ url('/role') }}"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-shield-alt text-xs mr-2"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/Announcement') }}"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-calendar-alt text-xs mr-2"></i>
                                Announcement
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/categories') }}"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-folder text-xs mr-2"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/users') }}"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-users text-xs mr-2"></i>
                                Users
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">UI Elements</p>
                    <a href="{{ url('/profile') }}"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-font text-xs mr-2"></i>
                        Profile
                    </a>
                    <a href="{{ url('/alert') }}"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-exclamation-triangle text-xs mr-2"></i>
                        Alerts
                    </a>
                    <a href="{{ url('/logout') }}"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-mouse-pointer text-xs mr-2"></i>
                        Log_Out
                    </a>
                </div>
            </div>
        </aside>
        <!-- end sidebar -->

        <!-- main content -->
        <main class="flex-1 p-6 fade-in">
            <!-- views/Post -->
            <div class="bg-gray-100 flex-1 p-6">
                <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6 space-y-6">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold text-gray-800">Add Post</h1>
                        <p class="mt-2 text-sm text-gray-600">Post Name</p>
                    </div>
                    <div class="flex justify-center">
                        <button id="btnShowForm"
                            class="bg-[#fb8c00] text-white px-4 py-2 rounded shadow-lg hover:bg-[#fb8c00] transition duration-300">Add
                            Post</button>
                    </div>
                    <div class="container mx-auto mt-8 px-4">
                        <h2 class="text-3xl font-semibold mb-6 text-gray-800">Create New Post</h2>
                        <div class="bg-white shadow-md rounded-lg p-6">
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" id="PostForm" class="hidden">
                                @csrf

                                <!-- Titre -->
                                <div class="mb-4">
                                    <label for="titre" class="block text-sm font-medium text-gray-700">Title</label>
                                    <input type="text" name="titre" id="titre"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        value="{{ old('titre') }}">
                                    @error('titre')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Description -->
                                <div class="mb-4">
                                    <label for="description"
                                        class="block text-sm font-medium text-gray-700">Description</label>
                                    <textarea name="description" id="description" rows="4"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">{{ old('description') }}</textarea>
                                    @error('description')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Prix -->
                                <div class="mb-4">
                                    <label for="prix" class="block text-sm font-medium text-gray-700">Price</label>
                                    <input type="number" name="prix" id="prix" step="0.01"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500"
                                        value="{{ old('prix') }}">
                                    @error('prix')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Image -->
                                <div class="mb-4">
                                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                    <input type="file" name="image" id="image"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    @error('image')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Categorie -->
                                <div class="mb-4">
                                    <label for="categorie_id"
                                        class="block text-sm font-medium text-gray-700">Category</label>
                                    <select name="categorie_id" id="categorie_id"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="">Select a Category</option>
                                        @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('categorie_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('categorie_id')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Status -->
                                <div class="mb-4">
                                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                                    <select name="status" id="status"
                                        class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                                        <option value="actif" {{ old('status') == 'actif' ? 'selected' : '' }}>Active
                                        </option>
                                        <option value="brouillon" {{ old('status') == 'brouillon' ? 'selected' : '' }}>
                                            Draft</option>
                                        <option value="archivé" {{ old('status') == 'archivé' ? 'selected' : '' }}>
                                            Archived</option>
                                    </select>
                                    @error('status')
                                    <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="mb-4">
                                    <button type="submit"
                                        class="w-full bg-[#fb8c00] text-white p-2 rounded-md hover:bg-[#fb8c00]">Create
                                        Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="container mx-auto mt-8 px-4">
                    <h2 class="text-3xl font-semibold mb-6 text-gray-800">Posts</h2>
                    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
                        <table class="min-w-full table-auto">
                            <thead class="bg-gray-200 text-left">
                                <tr>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">#</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Titre</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Description</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Prix</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Image</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Catégorie</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">User</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Status</th>
                                    <th class="px-6 py-3 text-sm font-semibold text-gray-600">Actions</th>
                                </tr>
                            </thead>
                            <tbody class="text-sm text-gray-700">
                                @foreach($posts as $post)
                                <tr class="border-b hover:bg-gray-50">
                                    <td class="px-6 py-4">{{ $post->id }}</td>
                                    <td class="px-6 py-4">{{ $post->titre }}</td>
                                    <td class="px-6 py-4">{{ $post->description }}</td>
                                    <td class="px-6 py-4">{{ $post->prix ?? 'N/A' }}</td>
                                    <td class="px-6 py-4">
                                        @if($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}" alt="Image"
                                            class="w-24 h-24 object-cover">
                                        @else
                                        No image
                                        @endif
                                    </td>
                                    <td class="px-6 py-4">{{ $post->category->name ?? 'N/A' }}</td>
                                    <td class="px-6 py-4">{{ $post->user->name }}</td>
                                    <td class="px-6 py-4">
                                        <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full 
                                    {{ $post->status == 'actif' ? 'bg-green-100 text-green-800' : 
                                       ($post->status == 'brouillon' ? 'bg-yellow-100 text-yellow-800' : 
                                       'bg-gray-100 text-gray-800') }}">
                                            {{ ucfirst($post->status) }}
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 flex items-center space-x-2">
                                        <a href="{{ route('posts.edit', $post->id) }}"
                                            class="text-yellow-500 hover:text-yellow-700 text-sm font-semibold">Edit</a>
                                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="text-red-500 hover:text-red-700 text-sm font-semibold">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- end views/Post -->
        </main>
    </div>
    <!-- end wrapper -->
    </div>
    <script>
    document.getElementById('sideBarHideBtn').addEventListener('click', function() {
        const sidebar = document.getElementById('sideBar');
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('slide-out');
        sidebar.classList.toggle('slide-in');
    });

    document.getElementById('btnShowForm').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('PostForm').classList.toggle('hidden');
    });
    </script>

</body>

</html>