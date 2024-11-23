<style>
    .chart-container {
        position: relative;
        height: 200px;
        width: 100%;
    }

    .card {
        background-color: #fff;
        border-radius: 8px;
        padding: 16px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
    }

    .overview-item {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 16px;
        border-radius: 8px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .overview-item--mentor {
        background-color: #E3F2FD;
    }

    .overview-item--activities {
        background-color: #E8F5E9;
    }

    .overview-box {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .icon {
        font-size: 32px;
        margin-bottom: 8px;
    }

    .text {
        text-align: center;
    }

    .text h2 {
        font-size: 32px;
        margin-bottom: 8px;

    }

    .logo-white {
        filter: invert(1) brightness(2);
    }

    body {
        font-family: "Montserrat", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>
<nav class="text-gray-600 fixed top-0 z-50 w-full dark:bg-gray-800 dark:border-gray-700">
    <div class="px-2 py-3">
        <div class="flex items-center justify-between p-2 bg-white border rounded">
            <div class="flex items-center justify-start rtl:justify-end">
                <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar"
                    type="button"
                    class="inline-flex items-center p-2 rounded-lg sm:hidden hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-300">
                    <span class="sr-only">Open sidebar</span>
                    <svg class="w-7 h-7" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path clip-rule="evenodd" fill-rule="evenodd"
                            d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                        </path>
                    </svg>
                </button>
                <a href="#" class="flex ms-2 md:me-24">
                    <img src="https://dpkka.unair.ac.id/public/content/magang/headline_1686114761_logo_pds.png"
                        class="h-8 me-3" alt="" />
                    <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap">Librarian Dashboard</span>
                </a>
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">
                    <div>
                        <button type="button"
                            class="flex text-sm bg-white rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                            aria-expanded="false" data-dropdown-toggle="dropdown-user">
                            <img class="w-10 h-10 rounded-full"
                                src="https://www.svgrepo.com/show/316857/profile-simple.svg" alt="user photo">
                        </button>
                    </div>
                    
                    <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                <span>{{ Auth::user()->name }}</span>
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                <span>{{ Auth::user()->email }}</span>
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                <span>{{ Auth::user()->role }}</span>
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href=""
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="{{ route('profile.edit') }}"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Profile</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white">Log
                                        Out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
