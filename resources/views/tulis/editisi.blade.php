<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-sky-100">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    {{-- Sidebar start --}}
    <aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 bg-sky-500 rounded-r-lg my-5" aria-label="Sidebar">
        <div class="h-full px-3 py-4 overflow-y-auto bg-brown1">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="#" class="flex justify-center text-gray-900 rounded-lg  group">
                        <img src="{{ asset('img/readink.jpg') }}" alt="logo readink">
                    </a>
                </li>
                <li>
                    <a href="/homepage-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M13.1869 2.77974C14.2343 2.00758 15.7657 2.00758 16.8131 2.77975L25.2506 9.00017C25.8843 9.46737 26.25 10.1552 26.25 10.8799V21.0538C26.25 22.11 25.2706 22.9662 24.0625 22.9662H19.6875C18.4794 22.9662 17.5 22.11 17.5 21.0538V15.582C17.5 15.4312 17.3601 15.3088 17.1875 15.3088H12.8125C12.6399 15.3088 12.5 15.4312 12.5 15.582V21.0538C12.5 22.11 11.5206 22.9662 10.3125 22.9662H5.9375C4.72938 22.9662 3.75 22.11 3.75 21.0538V10.8799C3.75 10.1552 4.11569 9.46737 4.7494 9.00017L13.1869 2.77974ZM15.6044 4.03288C15.2552 3.77549 14.7448 3.77549 14.3956 4.03288L5.95814 10.2533C5.7469 10.409 5.625 10.6383 5.625 10.8799V21.0538C5.625 21.2047 5.76491 21.327 5.9375 21.327H10.3125C10.4851 21.327 10.625 21.2047 10.625 21.0538V15.582C10.625 14.5258 11.6044 13.6695 12.8125 13.6695H17.1875C18.3956 13.6695 19.375 14.5258 19.375 15.582V21.0538C19.375 21.2047 19.5149 21.327 19.6875 21.327H24.0625C24.2351 21.327 24.375 21.2047 24.375 21.0538V10.8799C24.375 10.6383 24.2531 10.409 24.0419 10.2533L15.6044 4.03288Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Homepage</span>
                    </a>
                </li>
                <li>
                    <a href="/bookmark-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="28" viewBox="0 0 30 28" fill="none">
                            <path d="M7.73867 24.7251C7.1185 25.1152 6.25366 24.7277 6.25366 24.0598V7.67201C6.25366 5.71048 8.0725 4.12036 10.3162 4.12036H19.6891C21.9327 4.12036 23.7516 5.71048 23.7516 7.67201V24.0598C23.7516 24.7277 22.8867 25.1152 22.2666 24.7251L15.0026 20.1561L7.73867 24.7251ZM21.8766 7.67201C21.8766 6.6158 20.8972 5.75958 19.6891 5.75958H10.3162C9.10804 5.75958 8.12866 6.6158 8.12866 7.67201V22.4604L14.4551 18.481C14.7822 18.2754 15.2231 18.2754 15.5501 18.481L21.8766 22.4604V7.67201Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Bookmark</span>
                    </a>
                </li>
                <li>
                    <a href="/history-author" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M24.375 13.8086C24.375 9.28201 20.1776 5.61249 15 5.61249C12.5386 5.61249 10.2988 6.44175 8.62616 7.79812H10.3125C10.8303 7.79812 11.25 8.16508 11.25 8.61773C11.25 9.07038 10.8303 9.43734 10.3125 9.43734H6.5625C6.04474 9.43734 5.625 9.07038 5.625 8.61773V5.33929C5.625 4.88663 6.04474 4.51967 6.5625 4.51967C7.08026 4.51967 7.5 4.88663 7.5 5.33929V6.47765C9.49034 4.92026 12.1187 3.97327 15 3.97327C21.2132 3.97327 26.25 8.3767 26.25 13.8086C26.25 19.2405 21.2132 23.6439 15 23.6439C8.7868 23.6439 3.75 19.2405 3.75 13.8086C3.75 13.2968 3.7947 12.7942 3.88089 12.3036C3.95125 11.903 4.35779 11.623 4.82135 11.623C5.39511 11.623 5.81056 12.1018 5.72654 12.5981C5.65965 12.9931 5.625 13.3973 5.625 13.8086C5.625 18.3351 9.82233 22.0047 15 22.0047C20.1776 22.0047 24.375 18.3351 24.375 13.8086ZM15.625 9.16414C15.625 8.71148 15.2052 8.34453 14.6875 8.34453C14.1698 8.34453 13.75 8.71148 13.75 9.16414V14.0818C13.75 14.5344 14.1698 14.9014 14.6875 14.9014H17.8125C18.3302 14.9014 18.75 14.5344 18.75 14.0818C18.75 13.6292 18.3302 13.2622 17.8125 13.2622H15.625V9.16414Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">History</span>
                    </a>
                </li>
                <li>
                    <a href="/tulis-author" class="flex items-center p-2 text-white rounded-lg bg-sky-700 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <path d="M18.4385 20.6254C20.0742 20.6254 20.7112 21.3535 21.1951 22.9682L21.28 23.2647C21.5081 24.0864 21.6445 24.3325 21.9207 24.4464C22.2446 24.5799 22.4606 24.5609 22.8 24.3864L22.9837 24.2835C23.0497 24.2437 23.1217 24.198 23.2032 24.1442L24.0322 23.58C24.8021 23.0736 25.4939 22.7389 26.3361 22.5284C26.8385 22.4027 27.3475 22.7082 27.473 23.2105C27.5986 23.7127 27.2932 24.2217 26.7909 24.3474C26.2821 24.4746 25.8431 24.6671 25.3592 24.9591L24.986 25.1976L24.3872 25.6076C24.1 25.803 23.8832 25.9377 23.6574 26.0539C22.8537 26.467 22.07 26.5359 21.2062 26.1799C20.2752 25.7962 19.8999 25.205 19.5484 24.0279L19.3536 23.3506C19.127 22.6139 18.9725 22.5004 18.4385 22.5004C18.0519 22.5004 17.6515 22.6939 17.1031 23.1541L16.8721 23.3553L15.721 24.4494C13.9609 26.1039 12.4603 26.9073 10.3118 26.9073C8.20397 26.9073 6.38097 26.5897 4.85065 25.9462L8.53513 24.9409C9.09422 25.0017 9.68636 25.0323 10.3118 25.0323C11.7903 25.0323 12.8515 24.5136 14.1696 23.329L14.4924 23.0306L15.1571 22.3918C15.453 22.1083 15.6746 21.9051 15.8977 21.7178C16.7522 21.0008 17.529 20.6254 18.4385 20.6254ZM23.789 3.71246C25.5357 5.45929 25.5357 8.29146 23.789 10.0383L23.4287 10.3992C24.868 12.1509 24.816 14.0072 23.4774 15.3499L20.9759 17.8514C20.6094 18.2171 20.0159 18.2166 19.65 17.8503C19.2842 17.4838 19.2847 16.8901 19.6512 16.5244L22.1496 14.0259C22.7559 13.4179 22.826 12.663 22.0999 11.728L11.3285 22.4988C10.9824 22.8448 10.552 23.0946 10.0798 23.2234L3.68521 24.9674C2.98536 25.1582 2.3432 24.516 2.53407 23.8162L4.27805 17.4216C4.40683 16.9494 4.65662 16.519 5.00271 16.1729L17.4631 3.71246C19.21 1.96564 22.0421 1.96564 23.789 3.71246ZM18.789 5.03829L6.32853 17.4987C6.21317 17.6141 6.12991 17.7575 6.08698 17.915L4.77467 22.7268L9.58647 21.4144C9.74387 21.3715 9.88735 21.2882 10.0027 21.1729L22.4631 8.71246C23.4777 7.69788 23.4777 6.05289 22.4631 5.03829C21.4485 4.0237 19.8035 4.0237 18.789 5.03829Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Tulis</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-white rounded-lg hover:bg-sky-400 group">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="27" viewBox="0 0 30 27" fill="none">
                            <path d="M15.0153 3.03052C15.9328 3.03976 16.8466 3.13243 17.7421 3.30704C18.133 3.38327 18.4254 3.66819 18.4698 4.01619L18.6825 5.68476C18.7789 6.45088 19.5188 7.03114 20.4008 7.03195C20.6379 7.03227 20.8724 6.98911 21.0915 6.90436L22.8423 6.23198C23.2064 6.09214 23.6319 6.16838 23.9036 6.4222C25.1689 7.60355 26.1111 9.0204 26.6596 10.5661C26.7779 10.8994 26.6418 11.2616 26.3205 11.4687L24.7686 12.4687C24.3259 12.7531 24.0645 13.2046 24.0645 13.6849C24.0645 14.1651 24.3259 14.6167 24.7696 14.9017L26.3228 15.902C26.6441 16.109 26.7804 16.4713 26.6621 16.8047C26.1139 18.3501 25.1721 19.7669 23.9076 20.9484C23.6361 21.2022 23.211 21.2787 22.8469 21.1391L21.089 20.4658C20.586 20.2734 20.0085 20.3016 19.5331 20.5418C19.0579 20.7819 18.7416 21.2053 18.6813 21.6824L18.4699 23.3508C18.4263 23.6948 18.1403 23.9778 17.755 24.0579C15.9445 24.4345 14.0581 24.4345 12.2475 24.0579C11.8624 23.9778 11.5763 23.6948 11.5327 23.3508L11.3217 21.6849C11.2597 21.2087 10.9429 20.7866 10.468 20.5472C9.99314 20.3079 9.4165 20.2798 8.91525 20.4712L7.15696 21.1446C6.79278 21.2841 6.36754 21.2076 6.09598 20.9537C4.83078 19.7708 3.88899 18.3523 3.3415 16.8052C3.22358 16.472 3.35983 16.11 3.68106 15.9031L5.23523 14.9021C5.6779 14.6177 5.93934 14.1662 5.93934 13.686C5.93934 13.2057 5.6779 12.7542 5.23464 12.4695L3.68145 11.4702C3.35975 11.2632 3.22338 10.9007 3.34171 10.5672C3.89015 9.02149 4.83243 7.60465 6.09766 6.42329C6.36949 6.16948 6.79493 6.09323 7.15905 6.23308L8.90953 6.90533C9.4132 7.09859 9.99225 7.0694 10.4697 6.82553C10.9451 6.58445 11.2616 6.16058 11.3227 5.68348L11.5353 4.01619C11.5797 3.66801 11.8723 3.38299 12.2635 3.30693C13.1601 3.13261 14.075 3.03997 15.0153 3.03052ZM15.0155 4.66963C14.4479 4.67547 13.882 4.71829 13.3223 4.79762L13.1861 5.86548C13.0589 6.85939 12.4 7.74166 11.413 8.24218C10.42 8.7494 9.2092 8.81045 8.15573 8.40626L7.03286 7.97502C6.31795 8.73362 5.74893 9.58888 5.34815 10.5072L6.3454 11.1488C7.26891 11.742 7.81434 12.6841 7.81434 13.686C7.81434 14.6878 7.26891 15.6299 6.34638 16.2224L5.34756 16.8658C5.74799 17.7857 6.3171 18.6426 7.0325 19.4026L8.16391 18.9693C9.21154 18.5695 10.4141 18.6279 11.4044 19.127C12.3948 19.6261 13.0554 20.5065 13.185 21.5019L13.3213 22.5772C14.4333 22.7425 15.5694 22.7425 16.6814 22.5772L16.8176 21.502C16.9436 20.5069 17.6035 19.6235 18.595 19.1225C19.5865 18.6215 20.7915 18.5627 21.841 18.9643L22.9715 19.3973C23.6863 18.6384 24.2551 17.783 24.6559 16.8645L23.6584 16.222C22.7349 15.6288 22.1895 14.6867 22.1895 13.6849C22.1895 12.683 22.7349 11.7409 23.6573 11.1485L24.6534 10.5066C24.2526 9.58807 23.6835 8.73265 22.9685 7.97393L21.8479 8.40429C21.3913 8.58094 20.8973 8.67185 20.3984 8.67117C18.5613 8.66949 17.0194 7.4603 16.8189 5.86509L16.6828 4.79727C16.1259 4.71804 15.5658 4.67534 15.0155 4.66963ZM14.9996 9.58735C17.5885 9.58735 19.6871 11.4221 19.6871 13.6855C19.6871 15.9487 17.5885 17.7835 14.9996 17.7835C12.4108 17.7835 10.3121 15.9487 10.3121 13.6855C10.3121 11.4221 12.4108 9.58735 14.9996 9.58735ZM14.9996 11.2266C13.4464 11.2266 12.1871 12.3274 12.1871 13.6855C12.1871 15.0434 13.4464 16.1443 14.9996 16.1443C16.5529 16.1443 17.8121 15.0434 17.8121 13.6855C17.8121 12.3274 16.5529 11.2266 14.9996 11.2266Z" fill="white" />
                        </svg>
                        <span class="flex-1 ms-3 text-white whitespace-nowrap">Setting</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>
    {{-- Sidebar end --}}

    <div class="p-4 sm:ml-64">
        <h1 class="font-bold text-xl">Edit Isi Cerita</h1>
        <div class="">
            <form action="/isi/{{ $cerita->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-5">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="judul" class="w-1/2 shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required name="judul" value="{{ old('judul', $cerita->judul) }}">
            </div>
            <div class="mb-5">
                <label for="isicerita" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Isi Cerita</label>
                <textarea id="message" rows="4" class="block p-2.5 w-1/2 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tulis isi cerita..." name="isicerita" value="{{ old('isicerita', $cerita->isicerita) }}"></textarea>

            </div>
            <div class="">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Perbarui</button>
                <a href="/detail-cerita/{id}">
                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Kembali</button>
                </a>
            </div>
            </form>
        </div>
    </div>
