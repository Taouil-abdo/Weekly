<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/styles/dashboard.css">


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
    <div class="flex pt-16">
        <!-- start sidebar -->
        <aside class="w-64 bg-white h-100 border-r border-gray-200 fixed md:static transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out shadow-lg slide-in" id="sideBar">
            <div class="p-6 flex flex-col h-100 justify-center items-center">
                <button id="sideBarHideBtn" class="md:hidden text-gray-900 hover:text-red-500 focus:outline-none">
                    <i class="fas fa-times-circle text-xl"></i>
                </button>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">Homes</p>
                    <a href="/dashboard"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-chart-pie text-xs mr-2"></i>
                        Analytics Dashboard
                    </a>
                </div>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">Apps</p>
                    <ul class="fade-in-up">
                        <li>
                            <a href="/dashboard/role"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-shield-alt text-xs mr-2"></i>
                                Roles
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/Event"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-calendar-alt text-xs mr-2"></i>
                                Events
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/categories"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-folder text-xs mr-2"></i>
                                Categories
                            </a>
                        </li>
                        <li>
                            <a href="/dashboard/users"
                                class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300">
                                <i class="fas fa-users text-xs mr-2"></i>
                                Users
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="w-full mt-4">
                    <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider border-b pb-2">UI Elements</p>
                    <a href="/profile"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-font text-xs mr-2"></i>
                        Profile
                    </a>
                    <a href="./alert.html"
                        class="flex items-center mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-300 fade-in-up">
                        <i class="fas fa-exclamation-triangle text-xs mr-2"></i>
                        Alerts
                    </a>
                    <a href="/logout"
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

            <!-- strat content -->
            <div class="bg-gray-100 flex-1 p-6">
                <!-- General Report -->
                <div class="grid grid-cols-4 gap-6 xl:grid-cols-4">
                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">
                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-indigo-700 fad fa-shopping-cart"></div>
                                    <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                        12%
                                        <i class="fal fa-chevron-up ml-1"></i>
                                    </span>
                                </div>
                                <!-- end top -->

                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5 num-4"></h1>
                                    <p>items sales</p>
                                </div>
                                <!-- end bottom -->

                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">

                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-red-700 fad fa-store"></div>
                                    <span class="rounded-full text-white badge bg-red-400 text-xs">
                                        6%
                                        <i class="fal fa-chevron-down ml-1"></i>
                                    </span>
                                </div>
                                <!-- end top -->

                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5 num-4"></h1>
                                    <p>new orders</p>
                                </div>
                                <!-- end bottom -->

                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->

                    <!-- card -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">

                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-yellow-600 fad fa-sitemap"></div>
                                    <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                        {{TotalEvents}}%
                                        <i class="fal fa-chevron-up ml-1"></i>
                                    </span>
                                </div>
                                <!-- end top -->

                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5 num-4"></h1>
                                    <p>Events</p>
                                </div>
                                <!-- end bottom -->

                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->

                    <!-- user -->
                    <div class="report-card">
                        <div class="card">
                            <div class="card-body flex flex-col">

                                <!-- top -->
                                <div class="flex flex-row justify-between items-center">
                                    <div class="h6 text-green-700 fad fa-users"></div>
                                    <span class="rounded-full text-white badge bg-teal-400 text-xs">
                                        {{TotalUsers}}
                                        <i class="fal fa-chevron-up ml-1"></i>
                                    </span>
                                </div>
                                <!-- end top -->

                                <!-- bottom -->
                                <div class="mt-8">
                                    <h1 class="h5 num-4"></h1>
                                    <p>Total Users</p>
                                </div>
                                <!-- end bottom -->

                            </div>
                        </div>
                        <div class="footer bg-white p-1 mx-4 border border-t-0 rounded rounded-t-none"></div>
                    </div>
                    <!-- end card -->

                </div>
                <!-- End General Report -->

                <!-- start quick Info -->
                <div class="grid grid-cols-3 gap-6 mt-6 xl:grid-cols-1">
                    <!-- Browser Stats -->
                    <div class="card">
                        <!-- info -->
                        <div class="py-2 ml-10 bg-[#fff7e0]">
                            <h1 class="h6">Good Job,
                                {{ session.name }}!</h1>
                            <p class="text-gray-800 text-xs">You've finished all of your tasks for this week.</p>

                            <ul class="mt-4">
                                <li class="text-sm font-light">
                                    <i class="fad fa-check-double mr-2 mb-2"></i>
                                    Finish Dashboard Design</li>
                                <li class="text-sm font-light">
                                    <i class="fad fa-check-double mr-2 mb-2"></i>
                                    Fix Issue #74</li>
                                <li class="text-sm font-light">
                                    <i class="fad fa-check-double mr-2"></i>
                                    Publish version 1.0.6</li>
                            </ul>
                        </div>
                        <!-- end info -->
                    </div>
                    <!-- end Browser Stats -->
                </div>
                <!-- end quick Info -->
                <!-- start content -->
                <div class="bg-gray-100 grid grid-cols-2 gap-6 md:mt-16 xl:grid-cols-2">

                    <!-- role -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow-md rounded overflow-hidden fade-in">
                            <thead class="bg-[#fb8c00] text-white">
                                <tr>
                                    <th class="py-2 px-4">Username</th>
                                    <th class="py-2 px-4">Email</th>
                                    <th class="py-2 px-4">Role</th>
                                    <th class="py-2 px-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                {% if users %}
                                {% for row in users %}
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ row.username }}</td>
                                    <td class="py-2 px-4">{{ row.email }}</td>
                                    <td class="py-2 px-4">{{ row.role }}</td>
                                    <td class="py-2 px-4">{{ row.status }}</td>
                                </tr>
                                {% endfor %}
                                {% else %}
                                <tr>
                                    <td colspan="8" class="py-2 px-4 text-center">No data available</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    </div>
                    <!-- end category -->
                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white shadow-md rounded overflow-hidden fade-in">
                            <thead class="bg-[#fb8c00] text-white">
                                <tr>
                                    <th class="py-2 px-4 text-left">ID</th>
                                    <th class="py-2 px-4 text-left">category</th>
                                    <th class="py-2 px-4 text-left">Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% if categories %}
                                {% for categorie in categories %}
                                <tr class="border-b">
                                    <td class="py-2 px-4">{{ categorie.category_id }}</td>
                                    <td class="py-2 px-4">{{ categorie.name }}</td>
                                    <td class="py-2 px-4">
                                        <img src="/assets/images/{{ categorie.img }}"
                                            class="w-10 h-10 object-cover rounded">
                                    </td>
                                </tr>
                                {% endfor %}
                                {% else %}
                                <tr>
                                    <td colspan="4" class="py-2 px-4 text-center">No data available</td>
                                </tr>
                                {% endif %}
                            </tbody>
                        </table>
                    </div>

                    <div class="overflow-x-auto col-span-2">
                        <table class="min-w-full bg-white shadow-md rounded overflow-hidden fade-in">
                            <thead class="bg-[#fb8c00] text-white">
                                <tr>
                                    <th class="py-2 px-4">Image</th>
                                    <th class="py-2 px-4">Title</th>
                                    <th class="py-2 px-4">Category</th>
                                    <th class="py-2 px-4">Start Date</th>
                                    <th class="py-2 px-4">End Date</th>
                                    <th class="py-2 px-4">Location</th>
                                    <th class="py-2 px-4">Reservations</th>
                                    <th class="py-2 px-4">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for event in events %}
                                <tr class="text-gray-700 border-t border-gray-200 hover:bg-gray-50">
                                    <td class="p-3 border border-gray-200">
                                        <img src="{{ '/assets/images/' ~ event.image }}" alt="Event Image"
                                            class="h-12 w-16 object-cover rounded-md">
                                    </td>
                                    <td class="p-3 border border-gray-200 font-semibold">{{ event.title }}</td>
                                    <td class="p-3 border border-gray-200">
                                        <span
                                            class="px-3 py-1 text-sm font-semibold text-white bg-orange-500 rounded-full">
                                            {{ event.category_name ?? 'Musique'}}
                                        </span>
                                    </td>
                                    <td class="p-3 border border-gray-200">{{ event.startEventAt | date('Y-m-d H:i') }}
                                    </td>
                                    <td class="p-3 border border-gray-200">{{ event.endEventAt | date('Y-m-d H:i') }}
                                    </td>
                                    <td class="p-3 border border-gray-200">{{ event.adresse ?? 'En ligne' }}</td>
                                    <td class="p-3 border border-gray-200">
                                        {{ event.reservations_count ?? '0' }} / {{ event.capacite }}
                                        <div class="w-full bg-gray-200 rounded-full h-2 mt-1">
                                            <div class="bg-orange-500 h-2 rounded-full"
                                                style="width: {{ (event.reservations_count / event.capacite) * 100 }}%;">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="p-3 border border-gray-200">
                                        <span
                                            class="font-semibold {{ event.status == 'accepted' ? 'text-green-500' : event.status == 'pending' ? 'text-yellow-500' : 'text-red-500' }}">
                                            {{ event.status | capitalize }}
                                        </span>
                                    </td>
                                </tr>
                                {% else %}
                                <tr>
                                    <td colspan="9" class="p-4 text-center text-gray-600">Aucun événement disponible.
                                    </td>
                                </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>


                </div>
                <!-- end content -->

            </div>
            <!-- end content -->

        </main>
    </div>
    <!-- end wrapper -->
    </div>

    <!-- No changes made to Mobile Menu Button -->
    <button class="md:hidden fixed bottom-4 right-4 bg-blue-500 text-white p-3 rounded-full shadow-lg fade-in">
        <i class="bx bx-menu text-2xl"></i>
    </button>

    <script>
    function deleteUser(userId, button) {
        fetch('/dashboard/user/delete', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    userId: userId
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    button.closest('tr').remove();
                    alert('User deleted successfully');
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => console.error('Error:', error));
    }


    function updateStatus(userId, status, button) {
        fetch('/dashboard/user/userStatus', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({
                    userId: userId,
                    status: status
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('User status updated successfully');
                    const statusCell = button.closest('tr').querySelector(
                        'td:nth-child(4)');
                    const statusDropdown = statusCell.querySelector('select');
                    statusDropdown.value = status;
                } else {
                    alert('Error: ' + data.message);
                }
            })
            .catch(error => {
                console.error('Error:', error);
                alert('Something went wrong!');
            });
    }
    </script>

</body>

</html>