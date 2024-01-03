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
    {{-- Tiny MCS --}}
    <x-head.tinymce-config/>
</head>
<body class="bg-sky-100">
    {{-- Konten start --}}
    <div class="p-4 sm:ml-64">
        <div class="relative">
            <div>
                {{-- Form deskripsi cerita start --}}
                <form class="max-w-sm mx-auto" action="/fav-store/{{ $cerita->id }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="relative flex flex-row"> 
                        <div class=" absolute top-[0px] -right-[120px] w-[900px] p-5 border border-lg bg-white rounded shadow">
                            <p class="font-bold text-lg ">Tambah Favorit</p>
                            <div class="mb-6 mt-7">
                                <label for="default-input" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Juudl</label>
                                <input type="text" id="default-input" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Judul" name="judul" value="{{ $cerita->judul }}">
                            </div>                        
                            <div class="mb-6 mt-3">
                                <label for="penulis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Penulis</label>
                                <input type="text" id="judul" class="w-full shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required name="penulis" value="{{ $cerita->penulis }}">
                            </div>
                            <div class="flex flex-row gap-x-5 justify-end mb-3 mt-5">
                                <button type="button" class="text-white bg-sky-500 hover:bg-sky-700  font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                                    <a href="/favorit">Batalkan</a>
                                </button>
                                <button type="submit" class="text-white bg-sky-500 hover:bg-sky-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Simpan
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        {{-- Konten end --}}

        {{-- Flowbite JS --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>