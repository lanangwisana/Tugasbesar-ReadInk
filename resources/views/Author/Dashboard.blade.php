<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    {{-- Tailwind CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                colors: {
                    'brown1': '#B0A695',
                    'brown2': '#EBE3D5'
                    'brown3': '#776B5D'
                }
                extend: {
                colors: {
                    clifford: '#da373d',
                    }
                }
            }
        }
    </script>
    {{-- Custom CSS --}}
    <style type="text/tailwindcss">
        @layer utilities {

        }
    </style>
    {{-- Tailwind Plugin --}}
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    {{-- Flowbite CDN --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css"  rel="stylesheet" />
</head>
<body class="bg-sky-100">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    {{-- Sidebar start --}}
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-sky-500 rounded-r-lg my-5" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-brown1 dark:bg-gray-800">
        <ul class="space-y-2 font-medium">
            <li>
                <a href="#" class="flex justify-center text-gray-900 rounded-lg  dark:text-white dark:hover:bg-gray-700 group">
                    <img class="w-full h-auto" src="{{ asset('img/ReadInk .png') }}" alt="logo readink">
                </a>
            </li>
            <li>
                <a href="home-author" class="flex items-center p-2 text-white rounded-lg bg-sky-700 dark:text-white dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                        <path d="M13.1869 2.77974C14.2343 2.00758 15.7657 2.00758 16.8131 2.77975L25.2506 9.00017C25.8843 9.46737 26.25 10.1552 26.25 10.8799V21.0538C26.25 22.11 25.2706 22.9662 24.0625 22.9662H19.6875C18.4794 22.9662 17.5 22.11 17.5 21.0538V15.582C17.5 15.4312 17.3601 15.3088 17.1875 15.3088H12.8125C12.6399 15.3088 12.5 15.4312 12.5 15.582V21.0538C12.5 22.11 11.5206 22.9662 10.3125 22.9662H5.9375C4.72938 22.9662 3.75 22.11 3.75 21.0538V10.8799C3.75 10.1552 4.11569 9.46737 4.7494 9.00017L13.1869 2.77974ZM15.6044 4.03288C15.2552 3.77549 14.7448 3.77549 14.3956 4.03288L5.95814 10.2533C5.7469 10.409 5.625 10.6383 5.625 10.8799V21.0538C5.625 21.2047 5.76491 21.327 5.9375 21.327H10.3125C10.4851 21.327 10.625 21.2047 10.625 21.0538V15.582C10.625 14.5258 11.6044 13.6695 12.8125 13.6695H17.1875C18.3956 13.6695 19.375 14.5258 19.375 15.582V21.0538C19.375 21.2047 19.5149 21.327 19.6875 21.327H24.0625C24.2351 21.327 24.375 21.2047 24.375 21.0538V10.8799C24.375 10.6383 24.2531 10.409 24.0419 10.2533L15.6044 4.03288Z" fill="white"/>
                    </svg>
                    <span class="flex-1 ms-3 text-white whitespace-nowrap">Home</span>
                </a>
            </li>
            <li>
                <a href="bookmark-author" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-sky-400 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 30 28" fill="none">
                        <path d="M7.73867 24.7251C7.1185 25.1152 6.25366 24.7277 6.25366 24.0598V7.67201C6.25366 5.71048 8.0725 4.12036 10.3162 4.12036H19.6891C21.9327 4.12036 23.7516 5.71048 23.7516 7.67201V24.0598C23.7516 24.7277 22.8867 25.1152 22.2666 24.7251L15.0026 20.1561L7.73867 24.7251ZM21.8766 7.67201C21.8766 6.6158 20.8972 5.75958 19.6891 5.75958H10.3162C9.10804 5.75958 8.12866 6.6158 8.12866 7.67201V22.4604L14.4551 18.481C14.7822 18.2754 15.2231 18.2754 15.5501 18.481L21.8766 22.4604V7.67201Z" fill="white"/>
                    </svg>
                    <span class="flex-1 ms-3 text-white whitespace-nowrap">Bookmark</span>
                </a>
            </li>
            <li>
                <a href="history-author" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-sky-400 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                        <path d="M24.375 13.8086C24.375 9.28201 20.1776 5.61249 15 5.61249C12.5386 5.61249 10.2988 6.44175 8.62616 7.79812H10.3125C10.8303 7.79812 11.25 8.16508 11.25 8.61773C11.25 9.07038 10.8303 9.43734 10.3125 9.43734H6.5625C6.04474 9.43734 5.625 9.07038 5.625 8.61773V5.33929C5.625 4.88663 6.04474 4.51967 6.5625 4.51967C7.08026 4.51967 7.5 4.88663 7.5 5.33929V6.47765C9.49034 4.92026 12.1187 3.97327 15 3.97327C21.2132 3.97327 26.25 8.3767 26.25 13.8086C26.25 19.2405 21.2132 23.6439 15 23.6439C8.7868 23.6439 3.75 19.2405 3.75 13.8086C3.75 13.2968 3.7947 12.7942 3.88089 12.3036C3.95125 11.903 4.35779 11.623 4.82135 11.623C5.39511 11.623 5.81056 12.1018 5.72654 12.5981C5.65965 12.9931 5.625 13.3973 5.625 13.8086C5.625 18.3351 9.82233 22.0047 15 22.0047C20.1776 22.0047 24.375 18.3351 24.375 13.8086ZM15.625 9.16414C15.625 8.71148 15.2052 8.34453 14.6875 8.34453C14.1698 8.34453 13.75 8.71148 13.75 9.16414V14.0818C13.75 14.5344 14.1698 14.9014 14.6875 14.9014H17.8125C18.3302 14.9014 18.75 14.5344 18.75 14.0818C18.75 13.6292 18.3302 13.2622 17.8125 13.2622H15.625V9.16414Z" fill="white"/>
                    </svg>
                    <span class="flex-1 ms-3 text-white whitespace-nowrap">History</span>
                </a>
            </li>
            <li>
                <a href="tulis-author" class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-sky-400 dark:hover:bg-gray-700 group">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <path d="M18.4385 20.6254C20.0742 20.6254 20.7112 21.3535 21.1951 22.9682L21.28 23.2647C21.5081 24.0864 21.6445 24.3325 21.9207 24.4464C22.2446 24.5799 22.4606 24.5609 22.8 24.3864L22.9837 24.2835C23.0497 24.2437 23.1217 24.198 23.2032 24.1442L24.0322 23.58C24.8021 23.0736 25.4939 22.7389 26.3361 22.5284C26.8385 22.4027 27.3475 22.7082 27.473 23.2105C27.5986 23.7127 27.2932 24.2217 26.7909 24.3474C26.2821 24.4746 25.8431 24.6671 25.3592 24.9591L24.986 25.1976L24.3872 25.6076C24.1 25.803 23.8832 25.9377 23.6574 26.0539C22.8537 26.467 22.07 26.5359 21.2062 26.1799C20.2752 25.7962 19.8999 25.205 19.5484 24.0279L19.3536 23.3506C19.127 22.6139 18.9725 22.5004 18.4385 22.5004C18.0519 22.5004 17.6515 22.6939 17.1031 23.1541L16.8721 23.3553L15.721 24.4494C13.9609 26.1039 12.4603 26.9073 10.3118 26.9073C8.20397 26.9073 6.38097 26.5897 4.85065 25.9462L8.53513 24.9409C9.09422 25.0017 9.68636 25.0323 10.3118 25.0323C11.7903 25.0323 12.8515 24.5136 14.1696 23.329L14.4924 23.0306L15.1571 22.3918C15.453 22.1083 15.6746 21.9051 15.8977 21.7178C16.7522 21.0008 17.529 20.6254 18.4385 20.6254ZM23.789 3.71246C25.5357 5.45929 25.5357 8.29146 23.789 10.0383L23.4287 10.3992C24.868 12.1509 24.816 14.0072 23.4774 15.3499L20.9759 17.8514C20.6094 18.2171 20.0159 18.2166 19.65 17.8503C19.2842 17.4838 19.2847 16.8901 19.6512 16.5244L22.1496 14.0259C22.7559 13.4179 22.826 12.663 22.0999 11.728L11.3285 22.4988C10.9824 22.8448 10.552 23.0946 10.0798 23.2234L3.68521 24.9674C2.98536 25.1582 2.3432 24.516 2.53407 23.8162L4.27805 17.4216C4.40683 16.9494 4.65662 16.519 5.00271 16.1729L17.4631 3.71246C19.21 1.96564 22.0421 1.96564 23.789 3.71246ZM18.789 5.03829L6.32853 17.4987C6.21317 17.6141 6.12991 17.7575 6.08698 17.915L4.77467 22.7268L9.58647 21.4144C9.74387 21.3715 9.88735 21.2882 10.0027 21.1729L22.4631 8.71246C23.4777 7.69788 23.4777 6.05289 22.4631 5.03829C21.4485 4.0237 19.8035 4.0237 18.789 5.03829Z" fill="white"/>
                    </svg>
                    <span class="flex-1 ms-3 text-white whitespace-nowrap">Tulis</span>
                </a>
            </li>
        </ul>
        </div>
    </aside>
    {{-- Sidebar end --}}

    {{-- Konten start --}}
    <div class="p-4 sm:ml-64">
        <div class="relative">
        <div class="absolute -top-[35px] -left-4">
                {{-- Navbar start --}}
                <div class="fixed flex flex-row gap-4 mb-4 w-full rounded bg-sky-100 px-4 z-40">
                    {{-- Search bar start --}}
                    <div class="flex items-center justify-center h-24 rounded w-1/4  ">
                        <form class="w-full">   
                            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                </div>
                                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Novel" required>
                            </div>
                        </form>
                    </div>
                    {{-- Search bar end --}}
    
                    {{-- Genre start --}}
                    <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center w-1/5 font-medium text-gray-600 rounded p-5 bg-sky-100">Genre
                        <svg class="w-2.5 h-2.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                        </svg>
                    </button>
                    <div id="mega-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Action
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Comedy
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Horror
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Mystery
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Romance
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Slice of Life
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Supperhero
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Mecha
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Isekai
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Adventure
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Drama
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Genre
                                        </a>
                                    </li>
                                </ul>
                        </div>
                        <div class="p-4">
                                <ul class="space-y-4">
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Sci-Fi
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Sport
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Thriller
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            School
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500">
                                            Magic
                                        </a>
                                    </li>
                                </ul>
                        </div>
                    </div>
                    {{-- Genre end --}}

                    {{-- Lonceng icon start --}}
                    <div class="absolute top-[35px] left-[1300px] flex flex-row items-center justify-center item-end h-15 gap-x-5 dark:bg-gray-800">
                        <img id="avatarButton" type="button" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start" class="w-10 h-10 rounded-full cursor-pointer" src="{{ asset('img/foto fix.jpg') }}" alt="User dropdown">
                        <!-- Dropdown menu -->
                        <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                            <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                            <div>Lanangwisana</div>
                            <div class="font-medium truncate">lanangwisana@gmail.com</div>
                            </div>
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="avatarButton">
                            <li>
                                <a href="home-author" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Home</a>
                            </li>
                            <li>
                                <a href="history-author" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">History</a>
                            </li>
                            <li>
                                <a href="tulis-author" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Tulis</a>
                            </li>
                            </ul>
                            <div class="py-1">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign out</a>
                            </div>
                        </div>

                        <p class="text-2xl text-gray-400 dark:text-gray-500">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="auto" viewBox="0 0 42 48" fill="none">
                                <path d="M20.9711 0.311279C24.3486 0.311279 27.5049 1.30633 30.1824 3.03685C29.3846 3.93014 28.7677 5.00243 28.3925 6.18985C26.24 4.78687 23.6959 3.97866 20.9711 3.97866C13.2136 3.97866 6.95327 10.517 6.95215 18.6481V29.4293L3.81195 36.9942H38.1505L34.9902 29.4317L34.9904 18.6796L34.9816 18.129C34.9729 17.864 34.9575 17.6009 34.9358 17.3399C35.3348 17.4025 35.7432 17.4349 36.1587 17.4349C36.9476 17.4349 37.7104 17.318 38.4321 17.0999C38.4571 17.4092 38.4748 17.7209 38.4851 18.0346L38.4949 18.6481V23.6565V28.6648L41.7193 36.3811C41.8808 36.7672 41.9641 37.184 41.9641 37.6053C41.9641 39.2933 40.6562 40.6616 39.0434 40.6616L27.9806 40.6652C27.9806 44.7161 24.8423 48 20.9711 48C17.2382 48 14.1868 44.9464 13.9736 41.0961L13.9606 40.6596L2.92138 40.6616C2.52103 40.6616 2.12497 40.5755 1.7578 40.4087C0.278325 39.7362 -0.400092 37.936 0.242532 36.3879L3.44741 28.6672V18.6479C3.44879 8.48977 11.2796 0.311279 20.9711 0.311279ZM24.4748 40.6596L17.4664 40.6652C17.4664 42.6906 19.0356 44.3326 20.9711 44.3326C22.7929 44.3326 24.29 42.8782 24.4599 41.0184L24.4748 40.6596ZM30.4103 7.78635C30.6325 6.49719 31.2408 5.34855 32.1055 4.47636C33.156 3.41696 34.5847 2.76546 36.1587 2.76546C39.3848 2.76546 42 5.50201 42 8.87773C42 11.5505 40.3606 13.8225 38.0765 14.6529C37.4759 14.8713 36.8305 14.99 36.1587 14.99C35.5791 14.99 35.0194 14.9017 34.4909 14.7372C32.0775 13.9861 30.3175 11.647 30.3175 8.87773C30.3175 8.50522 30.3494 8.14047 30.4103 7.78635Z" fill="black"/>
                                <rect x="30" y="2" width="12" height="13" rx="6" fill="#FF0000"/>
                            </svg>
                        </p>
                    </div>
                    {{-- Lonceng icon end --}}
                </div>
                {{-- Nabvar end --}}
            </div>

            <div class="z-0">
                <div class="relative top-[80px] flex flex-col text-black-50 mt-5">
                    <a href="#" class="text-black underline">Dashboard</a>
                    <div class="flex flex-row justify-between">
                        <h5 class="font-bold text-2xl text-black mt-3">Novel Terbaru</h5>
                    </div>
                </div>
                {{-- Card Novel terbaru start --}}
                    <div id="indicators-carousel" class="relative top-[50px] w-full md:max-w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                            @php
                                $chunkedNovels = $cerita->chunk(2); // Mengelompokkan novel per 2
                            @endphp
                            @foreach($chunkedNovels as $index => $novelGroup)
                            <!-- Item 1 -->
                            <div class="hidden duration-700 ease-in-out @if($index === 0) active @endif" data-carousel-item="active">
                                <div class="flex flex-row items-center justify-center h-48 mb-4 mt-24 gap-x-4 bg-sky-100 dark:bg-gray-800">
                                    @foreach($novelGroup as $story)
                                    <a href="halamanbaca-author/{{$story->id}}" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow mt-2 mb-2 w-full md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                                        <img class="object-cover w-full rounded-t-lg h-96 p-3 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg" src="{{ asset('storage/photo/' . $story->sampul) }}" alt="{{ $story->judul }}">
                                        <div class="flex flex-col justify-between p-4 leading-normal md:flex ">
                                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$story->judul}}</h5>
                                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Author: {{$story->penulis}}</p>
                                            <p class="mt-5 font-normal text-gray-700 dark:text-gray-400">Genre: {{$story->genre}}</p>
                                            <h5 class="mb-3 font-normal text-gray-700 dark:text-gray-400">Release: {{$story->tglrilis}}</h5>
                                            <div class="flex items-center">
                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                                <svg class="w-4 h-4 text-yellow-300 ms-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                                <svg class="w-4 h-4 ms-1 text-gray-300 dark:text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                                                </svg>
                                            </div>
                                            <p class="mt-3 text-bold underline text-right">Read more</p>
                                        </div>
                                    </a>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div class="absolute z-30 flex -translate-x-1/2 space-x-3 rtl:space-x-reverse bottom-5 left-1/2">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>
                {{-- Card Novel terbaru end --}}
    
                {{-- Card Rekomendasi start --}}
                <div class="container mx-auto flex flex-row text-black-50 justify-between mt-20">
                    <h5 class="font-bold text-2xl text-black mt-3">Rekomendasi</h5>
                </div>
                <div class="container mx-auto flex flex-row gap-x-8 mt-10">
                    @foreach ($cerita as $like)
                    <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                        <a href="">
                            <img class="w-[550px] h-[auto]" src="{{ asset('img/23 science fiction and fantasy book covers that are out of this world - 99designs.jpeg') }}" alt="">
                        </a>
                        <h5 class="flex justify-center text-center text-medium font-bold mt-2 px-5">{{ $like -> judul }}</h5>
                    </div>
                    @endforeach
                    {{-- <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                        <a href="">
                            <img class="w-[565px] h-[auto]" src="{{ asset('img/FANTASY ROMANCE BOOK COVER DESIGN by DAVID GARDIAS.jpeg') }}" alt="">
                        </a>
                        <h5 class="flex justify-center text-center text-medium font-bold mt-1 px-5 py-2">The Moon castle</h5>
                    </div>
                    <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                        <a href="">
                            <img class="w-[550px] h-[auto]" src="{{ asset('img/The most popular epub book covers for kids.jpeg') }}" alt="">
                        </a>
                        <h5 class="flex justify-center text-center text-medium font-bold mt-3 px-5">The Crimes of Steamfiled</h5>
                    </div>
                    <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                        <a href="">
                            <img class="w-[550px] h-[auto]" src="{{ asset('img/The Secret Dragon.jpeg') }}" alt="">
                        </a>
                        <h5 class="flex justify-center text-center text-medium font-bold mt-4 px-5">The Secret Dragon</h5>
                    </div>
                    <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                        <a href="">
                            <img class="w-[530px] h-[auto]" src="{{ asset('img/You left me in the Dark (cyan version), Available PREMADE.jpeg') }}" alt="">
                        </a>
                        <h5 class="flex justify-center text-center text-medium font-bold mt-3 px-5">You Leave Me in the Dark</h5>
                    </div> --}}
                </div>
                {{-- Card Rekomendasi end --}}
    
                {{-- Card Ongoing start --}}
                <div class="flex flex-col h-96 mb-4  dark:bg-gray-800">
                    <div class="container mx-auto flex flex-row text-black-50 justify-between">
                        <h5 class="font-bold text-2xl text-black mt-9">Ongoing</h5>
                        {{-- <a href="#" class="underline text-small mt-3">See more</a> --}}
                    </div>
                    <div class="container mx-auto flex flex-row gap-x-8 mt-5 py-[20px]">
                        @foreach ($cerita as $story)
                        <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                            <a href="">
                                <img class="w-[565px] h-[auto]" src="{{ asset('img/FANTASY ROMANCE BOOK COVER DESIGN by DAVID GARDIAS.jpeg') }}" alt="">
                            </a>
                            <h5 class="flex justify-center text-center text-medium font-bold mt-1 px-5 py-2">{{ $story -> judul }}</h5>
                        </div>
                        @endforeach
                        {{-- <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                            <a href="">
                                <img class="w-[550px] h-[auto]" src="{{ asset('img/The most popular epub book covers for kids.jpeg') }}" alt="">
                            </a>
                            <h5 class="flex justify-center text-center text-medium font-bold mt-3 px-5">The Crimes of Steamfiled</h5>
                        </div>
                        <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                            <a href="">
                                <img class="w-[550px] h-[auto]" src="{{ asset('img/The Secret Dragon.jpeg') }}" alt="">
                            </a>
                            <h5 class="flex justify-center text-center text-medium font-bold mt-4 px-5">The Secret Dragon</h5>
                        </div>
                        <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                            <a href="">
                                <img class="w-[530px] h-[auto]" src="{{ asset('img/You left me in the Dark (cyan version), Available PREMADE.jpeg') }}" alt="">
                            </a>
                            <h5 class="flex justify-center text-center text-medium font-bold mt-3 px-5">You Leave Me in the Dark</h5>
                        </div>
                        <div class="container mx-auto border-gray-200 rounded-lg shadow w-auto h-auto">
                            <a href="">
                                <img class="w-[530px] h-[auto]" src="{{ asset('img/You left me in the Dark (cyan version), Available PREMADE.jpeg') }}" alt="">
                            </a>
                            <h5 class="flex justify-center text-center text-medium font-bold mt-3 px-5">You Leave Me in the Dark</h5>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Card Ongoing end --}}
    {{-- Konten end --}}

    {{-- Flowbite JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>
</html>