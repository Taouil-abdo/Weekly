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
                    <div class="ml-4 text-[#fb8c00] dark:text-[#fb8c00] font-semibold text-xl">EventBro</div>
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
                            <a href="{{ url('/posts') }}"
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
            <!-- views/CategoryView -->
            <div class="bg-gray-100 flex-1 p-6">
                <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6 space-y-6">
                    <div class="text-center">
                        <h1 class="text-2xl font-bold text-gray-800">Add Category</h1>
                        <p class="mt-2 text-sm text-gray-600">Category Name</p>
                    </div>
                    <div class="flex justify-center">
                        <button id="btnShowForm"
                            class="bg-[#fb8c00] text-white px-4 py-2 rounded shadow-lg hover:bg-[#fb8c00] transition duration-300">Add
                            Category</button>
                    </div>
                    <form id="categoryForm" method="POST" enctype="multipart/form-data" class="hidden space-y-4">
                        @csrf
                        <div>
                            <label for="category_name" class="block text-sm font-medium text-gray-700">Category
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 p-5 block w-full border border-[#fb8c00] rounded-md shadow-sm focus:ring-[#fb8c00] focus:border-[#fb8c00] sm:text-sm"
                                required>
                        </div>
                        <button type="submit" id="addCategory"
                            class="w-full bg-[#fb8c00] text-white py-2 rounded shadow-lg hover:bg-[#fb8c00] transition duration-300">Add
                            Category</button>
                    </form>
                </div>

                <div class="mt-8">
                    <table class="min-w-full bg-white shadow-md rounded-lg overflow-hidden fade-in">
                        <thead class="bg-[#fb8c00] text-white">
                            <tr>
                                <th class="py-2 px-4 text-left">ID</th>
                                <th class="py-2 px-4 text-left">Category</th>
                                <th class="py-2 px-4 text-left">Image</th>
                                <th class="py-2 px-4 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($categories->isNotEmpty())
                            @foreach($categories as $category)
                            <tr class="border-b">
                                <td class="py-2 px-4">{{ $category->id }}</td>
                                <td class="py-2 px-4">{{ $category->name }}</td>
                                <td class="py-2 px-4">
                                    <a href="{{ route('categories.edit',$category->id) }}"
                                        class="text-blue-500 hover:underline">
                                        <i class="fa-solid fa-pen mr-1"></i> Edit
                                    </a>
                                    |
                                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure you want to delete this category?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tr>
                                <td colspan="4" class="py-2 px-4 text-center">No data available</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end views/CategoryView -->
        </main>
    </div>
    <!-- end wrapper -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    document.getElementById('sideBarHideBtn').addEventListener('click', function() {
        const sidebar = document.getElementById('sideBar');
        sidebar.classList.toggle('-translate-x-full');
        sidebar.classList.toggle('slide-out');
        sidebar.classList.toggle('slide-in');
    });

    document.getElementById('btnShowForm').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('categoryForm').classList.toggle('hidden');
    });

    
    </script>

</body>

</html>