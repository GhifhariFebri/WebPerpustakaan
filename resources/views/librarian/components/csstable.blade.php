<style>
        /* Style untuk tabel */
            table.dataTable {
            width: 100%;
            border-collapse: collapse;
            border-spacing: 0;
        }

        /* Style header */
        table.dataTable thead {
            background-color: #374151;
            color: #fff;
        }

        table.dataTable thead th {
            padding: 12px;
            font-weight: 600;
            text-align: left;
            border-bottom: 2px solid #d1d5db;
        }

        /* Style body */
        table.dataTable tbody td {
            padding: 12px;
            border-bottom: 1px solid #e5e7eb;
        }

        table.dataTable tbody tr:nth-child(even) {
            background-color: #f9fafb;
        }

        table.dataTable tbody tr:hover {
            background-color: #f3f4f6;
        }

        /* Pagination buttons */
        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 6px 12px;
            margin-left: 4px;
            border-radius: 0.375rem;
            background-color: #1f2937;
            color: #fff;
            text-decoration: none;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #4b5563;
            color: #fff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #2563eb;
            color: #fff !important;
        }

        /* Search input */
        .dataTables_wrapper .dataTables_filter input {
            padding: 0.5rem;
            border: 1px solid #d1d5db;
            border-radius: 0.375rem;
            outline: none;
            margin-left: 0.5rem;
            margin-bottom: 1rem;
        }

        .dataTables_wrapper .dataTables_filter input:focus {
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.5);
        }

       
.dataTables_wrapper .dataTables_length select {
    width: auto; 
    padding-right: 1.5rem;
    padding-left: 0.5rem;
    margin-right: 0.5rem;
    border-radius: 0.375rem; 
    border: 1px solid #d1d5db; 
    appearance: none; 
    background: url('data:image/svg+xml,%3Csvg xmlns="http://www.w3.org/2000/svg" fill="%23373737" viewBox="0 0 20 20"%3E%3Cpath fill-rule="evenodd" d="M5.292 7.707a1 1 0 011.415 0L10 11.001l3.293-3.294a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/%3E%3C/svg%3E') no-repeat right 0.75rem center;
    background-color: #ffffff; 
    background-size: 1rem;
    background-position: right 0.5rem center;
}


.dataTables_wrapper .dataTables_length select:focus {
    border-color: #2563eb; 
    box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.5); 
}

@media (max-width: 640px) {
    .dataTables_wrapper .dataTables_length select {
        width: 100%; 
    }
}
</style>