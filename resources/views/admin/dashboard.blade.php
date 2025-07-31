<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dashboard - Glowsya</title>
<script src="https://cdn.tailwindcss.com"></script>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
<script src="https://unpkg.com/feather-icons"></script>
<style>
    .animate-fade-in {
      animation: fadeIn 0.3s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: scale(0.95); }
      to { opacity: 1; transform: scale(1); }
    }
  </style>  
</head>
<body class="bg-gray-100 overflow-x-auto">

    <!-- Sidebar -->
<<<<<<< HEAD
    <aside id="sidebar" class="w-60 bg-white shadow h-screen fixed top-0 left-0 transform transition-transform duration-200 lg:translate-x-0 -translate-x-full z-50">
    <div class="flex items-center gap-2 h-16 px-4 border-b text-pink-600 text-lg">
=======
   <!-- Sidebar -->
<aside id="sidebar" class="w-60 bg-white shadow h-screen fixed top-0 left-0 transform transition-transform duration-200 lg:translate-x-0 -translate-x-full z-50">
    <div class="flex items-center gap-2 h-16 px-4 border-b text-pink-600 font-bold text-lg">
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
      <img src="/img/logo.png" alt="Logo" class="w-10 h-10 rounded-full border-2 border-yellow-500">
      Glowsya
    </div>
    <nav class="mt-4">
<<<<<<< HEAD
        <ul>
            <!-- Dashboard -->
            <li>
              <a href="/dashboard" class="flex items-center px-4 py-2 bg-pink-100 border-l-4 border-pink-500 text-sm">
                <i data-feather="home" class="mr-3 w-4 h-4"></i> Dashboard
              </a>
            </li>
          
            <!-- Dropdown Produk -->
            <li>
              <div onclick="toggleDropdown()" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer text-sm">
                <div class="flex items-center">
                  <i data-feather="package" class="mr-3 w-4 h-4"></i> Produk
                </div>
                <i id="dropdownIcon" data-feather="chevron-down" class="w-4 h-4 transition-transform duration-300"></i>
              </div>
              <ul id="produkMenu" class="hidden bg-gray-50">
                <li>
                  <a href="/produk" class="block px-12 py-2 hover:bg-gray-200 text-sm">Data Produk</a>
                </li>
                <li>
                  <a href="/brand" class="block px-12 py-2 hover:bg-gray-200 text-sm">Brand Produk</a>
                </li>
                <li>
                  <a href="/satuan" class="block px-12 py-2 hover:bg-gray-200 text-sm">Satuan Produk</a>
                </li>
              </ul>
            </li>
          
            <!-- Data Karyawan -->
            <li>
              <a href="/karyawan" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                <i data-feather="users" class="mr-3 w-4 h-4"></i> Data Karyawan
              </a>
            </li>
          
            <!-- Produk Masuk -->
            <li>
              <a href="/produk-masuk" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                <i data-feather="log-in" class="mr-3 w-4 h-4"></i> Produk Masuk
              </a>
            </li>
          
            <!-- Produk Keluar -->
            <li>
              <a href="/produk-keluar" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                <i data-feather="log-out" class="mr-3 w-4 h-4"></i> Produk Keluar
              </a>
            </li>
          
            <!-- Supplier -->
            <li>
              <a href="/supplier" class="flex items-center px-4 py-2 hover:bg-gray-100 text-sm">
                <i data-feather="truck" class="mr-3 w-4 h-4"></i> Supplier
              </a>
            </li>
    </ul>          
=======
      <ul>
        <li class="flex items-center px-4 py-2 bg-pink-100 border-l-4 border-pink-500 cursor-pointer">
          <i data-feather="home" class="mr-3"></i> Dashboard
        </li>
        <li>
          <div onclick="toggleDropdown()" class="flex justify-between items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
            <div class="flex items-center">
              <i data-feather="package" class="mr-3"></i> Produk
            </div>
            <i data-feather="chevron-down"></i>
          </div>
          <ul id="produkMenu" class="hidden bg-gray-50">
            <li class="px-12 py-2 hover:bg-gray-200 cursor-pointer">Brand Produk</li>
            <li class="px-12 py-2 hover:bg-gray-200 cursor-pointer">Satuan Produk</li>
          </ul>
        </li>
        <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
          <i data-feather="users" class="mr-3"></i> Data Karyawan
        </li>
        <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
          <i data-feather="log-in" class="mr-3"></i> Produk Masuk
        </li>
        <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
          <i data-feather="log-out" class="mr-3"></i> Produk Keluar
        </li>
        <li class="flex items-center px-4 py-2 hover:bg-gray-100 cursor-pointer">
          <i data-feather="truck" class="mr-3"></i> Supplier
        </li>
      </ul>
    </nav>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
  </aside>
  
    
    <!-- Main Content -->
    <div class="lg:ml-60 min-h-screen flex flex-col">
    
      <!-- Navbar -->
      <header class="bg-white shadow flex items-center justify-between px-4 h-16 sticky top-0 z-40 w-full">
        <div class="flex items-center gap-3">
          <button onclick="toggleSidebar()" class="material-icons lg:hidden">menu</button>
          <span class="font-medium text-sm sm:text-base">Halaman / Beranda</span>
        </div>
        <div class="flex items-center gap-4">
          <div class="relative hidden sm:block">
<<<<<<< HEAD
            <span class="material-icons absolute left-2 top-1.5 text-gray-400 border-">search</span>
            <input type="text" placeholder="Pencarian..." class="border rounded-[10px] pl-10 focus:outline-none text-sm w-40 sm:w-64">
        </div>
=======
            <span class="material-icons absolute left-2 top-1.5 text-gray-400">search</span>
            <input type="text" placeholder="Pencarian..." class="border rounded pl-8 pr-2 py-1 focus:outline-none text-sm w-40 sm:w-64">
          </div>
>>>>>>> cab39bc68a50668f8b649c55133273738230cbd2
    
        <!-- Dropdown Profil -->
        <div class="relative">
            <button onclick="toggleProfileDropdown()" class="flex items-center gap-2 hover:bg-gray-100 px-2 py-1 rounded transition">
            <span class="material-icons text-gray-500">account_circle</span>
            <span class="font-semibold">
                @if(session('admin'))
                {{ session('admin')->nama ?? session('admin')->username ?? 'Admin Tanpa Nama' }}
                @elseif(session('karyawan'))
                {{ session('karyawan')->nama ?? session('karyawan')->username ?? 'Karyawan Tanpa Nama' }}
                @else
                Guest
                @endif
            </span>
            <span class="material-icons text-sm">expand_more</span>
            </button>
        
            <!-- Dropdown Menu -->
            <div id="profileDropdown" class="absolute right-0 mt-2 w-48 bg-white rounded shadow-lg hidden z-50">
            <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                <span class="material-icons text-base mr-2">settings</span> Pengaturan
            </a>
            <form method="POST" action="{{ url('/logout') }}">
                @csrf
                <button type="submit" class="w-full text-left flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                  <span class="material-icons text-base mr-2">logout</span> Logout
                </button>
            </div>
        </div>
        </div>
      </header>
    
      <!-- Content -->
    <!-- Main Dashboard Content -->
    <main class="p-6">
        <!-- Statistic Cards -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">Total Produk</p>
                        <p class="text-3xl font-bold text-indigo-600 mt-1">1,248</p>
                    </div>
                    <div class="p-3 rounded-full bg-indigo-100 text-indigo-600">
                        <i class="fas fa-boxes text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-3"><i class="fas fa-arrow-up text-green-500 mr-1"></i> 12% dari bulan lalu</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">Stok Rendah</p>
                        <p class="text-3xl font-bold text-red-600 mt-1">47</p>
                    </div>
                    <div class="p-3 rounded-full bg-red-100 text-red-600">
                        <i class="fas fa-exclamation-triangle text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-3"><i class="fas fa-arrow-up text-red-500 mr-1"></i> 5 produk baru stok rendah</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">Perlu Exp. Check</p>
                        <p class="text-3xl font-bold text-yellow-600 mt-1">63</p>
                    </div>
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-hourglass-half text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-3"><i class="fas fa-arrow-down text-green-500 mr-1"></i> 8 produk sudah diperiksa</p>
            </div>
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex justify-between items-start">
                    <div>
                        <p class="text-sm text-gray-500">Permintaan Hari Ini</p>
                        <p class="text-3xl font-bold text-purple-600 mt-1">28</p>
                    </div>
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <i class="fas fa-clipboard-list text-xl"></i>
                    </div>
                </div>
                <p class="text-sm text-gray-500 mt-3"><i class="fas fa-arrow-up text-green-500 mr-1"></i> 4 lebih banyak dari kemarin</p>
            </div>
        </div>

        <!-- Charts and Summary -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <!-- Inventory Summary -->
            <div class="bg-white rounded-lg shadow p-6 lg:col-span-1">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Ringkasan Persediaan</h2>
                    <select class="text-sm border rounded px-2 py-1 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                        <option>Bulan Ini</option>
                        <option>Minggu Ini</option>
                        <option>Hari Ini</option>
                    </select>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Produk Baru</span>
                            <span class="text-sm text-gray-500">45 item</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-indigo-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Produk Masuk</span>
                            <span class="text-sm text-gray-500">120 item</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-green-500 h-2.5 rounded-full" style="width: 70%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Produk Keluar</span>
                            <span class="text-sm text-gray-500">95 item</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-purple-500 h-2.5 rounded-full" style="width: 60%"></div>
                        </div>
                    </div>
                    <div>
                        <div class="flex justify-between mb-1">
                            <span class="text-sm font-medium text-gray-700">Produk Expired</span>
                            <span class="text-sm text-gray-500">3 item</span>
                        </div>
                        <div class="w-full bg-gray-200 rounded-full h-2.5">
                            <div class="bg-red-500 h-2.5 rounded-full" style="width: 5%"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Inventory Chart -->
            <div class="bg-white rounded-lg shadow p-6 lg:col-span-2">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-lg font-semibold text-gray-800">Grafik Persediaan 30 Hari Terakhir</h2>
                    <div class="flex space-x-2">
                        <button class="px-3 py-1 text-sm bg-indigo-100 text-indigo-700 rounded">Produk</button>
                        <button class="px-3 py-1 text-sm bg-gray-100 text-gray-700 rounded">Kategori</button>
                    </div>
                </div>
                <div class="chart-container">
                    <canvas id="inventoryChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Product Alerts -->
        <div class="bg-white rounded-lg shadow overflow-hidden mb-8">
            <div class="p-6 border-b">
                <div class="flex justify-between items-center">
                    <h2 class="text-lg font-semibold text-gray-800">Produk yang Perlu Perhatian</h2>
                    <button class="text-sm text-indigo-600 hover:text-indigo-800">Lihat Semua</button>
                </div>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Produk</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">SKU</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kategori</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Stok</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Exp. Date</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b58dfca6-62ac-44aa-9379-040bfce82880.png" alt="Krim malam anti-aging dengan kemasan botol kaca ungu dan pompa" class="h-10 w-10 rounded">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Krim Malam Anti-Aging</div>
                                        <div class="text-sm text-gray-500">Seri Luxe</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">LUX-MA50</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Perawatan Wajah</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">5</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">Stok Rendah</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15/08/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Restok</a>
                                <a href="#" class="text-gray-600 hover:text-gray-900">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/6516e2ee-3c53-4742-809b-50cff246bda3.png" alt="Lipstik matte warna merah anggur dengan kemasan hitam elegan" class="h-10 w-10 rounded">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Lipstik Matte Wine</div>
                                        <div class="text-sm text-gray-500">Seri ColorRich</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">CR-LP12</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Makeup</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">8</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Akan Habis</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">10/12/2024</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Restok</a>
                                <a href="#" class="text-gray-600 hover:text-gray-900">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/b1d83a13-99de-4d72-a12a-456cdb480055.png" alt="Mascara volume ekstra dengan sikat jamur dan kemasan emas" class="h-10 w-10 rounded">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Mascara Volume X10</div>
                                        <div class="text-sm text-gray-500">Seri LashPro</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">LP-MC05</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Makeup</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">15</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Akan Habis</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">22/05/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Restok</a>
                                <a href="#" class="text-gray-600 hover:text-gray-900">Lihat</a>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 h-10 w-10">
                                        <img src="https://storage.googleapis.com/workspace-0f70711f-8b4e-4d94-86f1-2a93ccde5887/image/dd8ea4ff-76d3-4715-8235-bd105612e630.png" alt="Sunscreen SPF50+ dengan tekstur gel dan kemasan biru muda" class="h-10 w-10 rounded">
                                    </div>
                                    <div class="ml-4">
                                        <div class="text-sm font-medium text-gray-900">Sunscreen Gel SPF50</div>
                                        <div class="text-sm text-gray-500">Seri SunProtect</div>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">SP-SG50</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">Perawatan Wajah</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">12</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Aman</span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30/11/2023</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-3">Restok</a>
                                <a href="#" class="text-gray-600 hover:text-gray-900">Lihat</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-lg font-semibold text-gray-800">Aktivitas Terakhir</h2>
                <button class="text-sm text-indigo-600 hover:text-indigo-800">Lihat Semua</button>
            </div>
            <div class="space-y-4">
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-blue-100 rounded-full text-blue-600">
                            <i class="fas fa-box-open"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Barang masuk baru diterima</p>
                        <p class="text-sm text-gray-500">25 produk baru dari "Seri Luxe" ditambahkan ke gudang A.</p>
                        <p class="text-xs text-gray-400 mt-1">10 menit yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-green-100 rounded-full text-green-600">
                            <i class="fas fa-truck"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Pengiriman berhasil</p>
                        <p class="text-sm text-gray-500">18 produk dikirim ke cabang "Beauty Mart Central".</p>
                        <p class="text-xs text-gray-400 mt-1">2 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-yellow-100 rounded-full text-yellow-600">
                            <i class="fas fa-exclamation-triangle"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Produk hampir kadaluarsa</p>
                        <p class="text-sm text-gray-500">3 produk "Seri Fresh" akan kadaluarsa dalam 2 minggu.</p>
                        <p class="text-xs text-gray-400 mt-1">5 jam yang lalu</p>
                    </div>
                </div>
                <div class="flex items-start">
                    <div class="flex-shrink-0">
                        <div class="p-2 bg-purple-100 rounded-full text-purple-600">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-900">Admin baru ditambahkan</p>
                        <p class="text-sm text-gray-500">Budi Santoso ditambahkan sebagai admin gudang dengan akses terbatas.</p>
                        <p class="text-xs text-gray-400 mt-1">Kemarin</p>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
</div>

    <script>
    feather.replace();      
    function toggleDropdown() {
    document.getElementById("produkMenu").classList.toggle("hidden");
    }
    function toggleSidebar() {
    document.getElementById("sidebar").classList.toggle("-translate-x-full");
    }
    function toggleProfileDropdown() {
  const dropdown = document.getElementById('profileDropdown');
  dropdown.classList.toggle('hidden');
  document.addEventListener('click', function hideOnClickOutside(e) {
    if (!dropdown.contains(e.target) && !e.target.closest('[onclick="toggleProfileDropdown()"]')) {
      dropdown.classList.add('hidden');
      document.removeEventListener('click', hideOnClickOutside);
    }
  });
}

  </script>  
</body>
</html>
