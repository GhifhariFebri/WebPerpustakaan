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

<body class="h-screen bg-gray-300">
    @include('librarian.components.csstable')
    @include('librarian.components.navbar')
    @include('librarian.components.sidebar')
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
                            <span class="ms-1 text-sm font-medium text-gray-800 dark:text-gray-400">Kategori Buku</span>
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
                    <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-300">Dashboard Perpustakaan</h3>
                </div>
                <div class="flex items-center justify-center h-24 rounded dark:bg-gray-800">
                    <p class="text-xl font-semibold text-gray-700 dark:text-gray-200">
                        Data Kategori
                    </p>
                </div>

                <div class="flex justify-between items-center mb-4">
                    <div>
                        <button data-modal-target="input-modal" data-modal-toggle="input-modal"
                            class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                            type="button">
                            + Buat Kategori Buku
                        </button>
                    </div>
                </div>
                <div id="input-modal" tabindex="-1" aria-hidden="true"
                    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 flex justify-center items-center w-full h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" data-modal-hide="input-modal"
                                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <div class="p-6 space-y-6">
                                <form class="w-full" method="POST" action="{{ route('storekategori.librarian')}}">
                                    @csrf
                                    <div class="flex items-center justify-center h-24 rounded dark:bg-gray-800">
                                        <p class="font-semibold text-xl text-gray-700 dark:text-gray-200">
                                            Input Data Kategori
                                        </p>
                                    </div>
                                    <div class="mb-4">
                                        <label class="block text-gray-800 text-sm font-bold mb-2 dark:text-gray-200"
                                            for="kegiatan">
                                            Nama Kategori
                                        </label>
                                        <input
                                            class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                                            id="nama" name="nama" type="text" placeholder="Masukkan user name" required>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <button
                                            class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                            type="submit">
                                            Submit
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-1">
                    <div class="rounded dark:bg-gray-800">
                        <div class="overflow-x-auto w-full text-center">
                            <table id="myTable" class="min-w-full text-sm text-center text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 text-center uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                    <tr class="text-white bg-gray-800 text-center">
                                        <th class="px-6 py-2 dark:text-gray-200">Nama</th>
                                        <th class="px-6 py-2 dark:text-gray-200">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @foreach($kategoris as $kategori)
                                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                                <td class="px-6 py-3">
                                                    {{ $kategori->nama }}</td>
                                                <td class="px-6 py-3">
                                                    <div>
                                                        <button href="#" data-modal-target="edit-modal"
                                                            data-modal-toggle="edit-modal"
                                                            onclick="populateEditModal({{ json_encode($kategori) }})"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                            title="Update">
                                                            <img src="https://www.svgrepo.com/show/436186/edit-tool-pencil.svg"
                                                                alt="Edit" class="h-8 w-8 mr-2">
                                                        </button>
                                                        <!-- Edit Modal untuk Kategori -->
                                                        <div id="edit-modal" tabindex="-1" aria-hidden="true"
                                                            class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full">
                                                            <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                                <div
                                                                    class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                    <div
                                                                        class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                        <h3
                                                                            class="text-xl font-semibold text-gray-800 dark:text-white">
                                                                            Edit Jadwal
                                                                        </h3>
                                                                        <button type="button"
                                                                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                            data-modal-toggle="edit-modal">
                                                                            <svg class="w-5 h-5" fill="currentColor"
                                                                                viewBox="0 0 20 20"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd"
                                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 011.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                                    clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </button>
                                                                    </div>
                                                                    <div class="p-6 space-y-6">
                                                                    <form id="edit-form" method="POST" action="{{ route('editkategori.librarian', $kategori->id) }}">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-4">
                                                                            <label class="block text-gray-800 text-sm font-bold mb-2 dark:text-gray-200" for="kegiatan">
                                                                                Nama
                                                                            </label>
                                                                            <input
                                                                                class="shadow-sm appearance-none border border-gray-300 rounded-lg w-full py-2 px-3 text-gray-800 leading-tight focus:ring focus:ring-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200"
                                                                                id="edit-name" name="nama" type="text" placeholder="Masukkan user name" required>
                                                                        </div>
                                                                    
                                                                        <div
                                                                            class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                                                            <button
                                                                                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                                                                type="submit">
                                                                                Update
                                                                            </button>
                                                                            <button data-modal-toggle="edit-modal" type="button"
                                                                                class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                        <button type="button" data-modal-target="delete-modal"
                                                            data-modal-toggle="delete-modal"
                                                            onclick="populateDeleteModal('{{ route('deletekategori.librarian', $kategori->id) }}')"
                                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline"
                                                            title="Hapus">
                                                            <img src="https://www.svgrepo.com/show/21045/delete-button.svg"
                                                                alt="Delete" class="h-8 w-8 mr-2">
                                                        </button>
                                                    </div>
                                                    <!-- Delete Modal untuk Kategori -->
                                                    <div id="delete-modal" tabindex="-1" aria-hidden="true"
                                                        class="hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full">
                                                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                                                            <div
                                                                class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                                <div
                                                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                                                    <h3
                                                                        class="text-xl font-semibold text-red-500 dark:text-white">
                                                                        Peringatan!
                                                                    </h3>
                                                                    <button type="button"
                                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                                                        data-modal-hide="delete-modal">
                                                                        <svg class="w-3 h-3" aria-hidden="true"
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            fill="none" viewBox="0 0 14 14">
                                                                            <path stroke="currentColor"
                                                                                stroke-linecap="round"
                                                                                stroke-linejoin="round" stroke-width="2"
                                                                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                        </svg>
                                                                        <span class="sr-only">Close modal</span>
                                                                    </button>
                                                                </div>
                                                                <div class="p-4 md:p-5 space-y-4">
                                                                    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-100 dark:bg-gray-800 dark:text-red-400"
                                                                        role="alert">
                                                                        <span class="font-medium">Tindakan ini tidak
                                                                            bisa diurungkan!</span> Menghapus data akan
                                                                        menghilangkan semua informasi user terkait dari
                                                                        sistem.
                                                                    </div>
                                                                    <form id="deleteForm" method="POST" action="">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <div class="flex justify-end">
                                                                            <button
                                                                                class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-500"
                                                                                type="submit">
                                                                                Hapus
                                                                            </button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
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
    // Populate Edit Modal with variable
    function populateEditModal(kategori) {
        document.getElementById('edit-form').action = `/librarian/kategori/edit/${kategori.id}`;

        document.getElementById('edit-name').value = kategori.nama;
    }


    function populateDeleteModal(actionUrl) {
        document.getElementById('deleteForm').action = actionUrl;
    }

    $(document).ready(function () {
        $('#myTable').DataTable({});
    });

</script>

</html>
