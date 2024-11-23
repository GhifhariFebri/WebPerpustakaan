<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librarian Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Nunito+Sans:ital,opsz,wght@0,6..12,200..1000;1,6..12,200..1000&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=PT+Sans+Narrow:wght@400;700&family=Work+Sans:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.1/dist/flowbite.min.js"></script>
</head>
<!-- Peminjaman Librarian -->
<body class="h-screen bg-gray-300">
    @include('librarian.components.csstable')
    @include('members.components.navbar')
    @include('members.components.sidebar')
    <div class="flex flex-col h-full">
        <div class="h-full sm:ml-64 p-4">
            <nav class="flex mt-16" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
                    <li>
                        <a href="#"
                            class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li aria-current="page">
                        <div
                            class="inline-flex items-center text-sm font-medium text-gray-800 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                            <svg class="rtl:rotate-180 w-3 h-3 text-gray-800 mx-1" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="ms-1 text-sm font-medium text-gray-800 dark:text-gray-400">Buku</span>
                        </div>
                    </li>
                </ol>
            </nav>
            <div class="mt-4 border-2 border-gray-200 bg-white rounded-lg dark:border-gray-700 p-6">
                <div class="flex items-center justify-between rounded-lg dark:bg-blue-900">
                    <div class="text-2xl font-semibold text-gray-800 dark:text-blue-200">
                        Halo {{ Auth::user()->name }}!
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Data Peminjaman</h3>
                </div>
                <div class="grid grid-cols-1">
                    <div class="rounded dark:bg-gray-800">
                        <div class="overflow-x-auto w-full text-center">
                            <table id="myTable" class="min-w-full text-sm text-center text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 text-center uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                    <tr class="text-white bg-gray-800 text-center">
                                        <th class="px-6 py-2 dark:text-gray-200">Peminjam</th>
                                        <th class="px-6 py-2 dark:text-gray-200">Buku</th>
                                        <th class="px-6 py-2 dark:text-gray-200">Tanggal Pinjam</th>
                                        <th class="px-6 py-2 dark:text-gray-200">Tanggal Kembali</th>
                                        <th class="px-6 py-2 dark:text-gray-200">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($peminjamans as $peminjaman)
                                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                            <td class="px-6 py-3">{{ $peminjaman->user->name }}</td>
                                            <td class="px-6 py-3">{{ $peminjaman->buku->nama }}</td>
                                            <td class="px-6 py-3">{{ $peminjaman->tanggal_peminjaman }}</td>
                                            <td class="px-6 py-3">{{ $peminjaman->tanggal_pengembalian }}</td>
                                            <td class="px-6 py-3">{{ $peminjaman->status}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable({});
    });

</script>

</html>
