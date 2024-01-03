<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete Novel</title>
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
    <div class="relative left-96 top-72 p-5 border-lg shadow rounded-lg bg-white w-1/2 text-center">
        <h3>Hapus Data Novel</h3>
            <form action="/tulis/{{ $cerita->id }}" method="post">
                @csrf
                @method('delete')
                <div class="mt-5 text-center">
                    <p class="mb-5">Apakah Anda yakin akan menghapus data Novel <b>{{ $cerita->name }}</b> ?</p>
                    <button type="submit" class="text-white bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Ya</button>
                    <a href="/index">
                        <button type="button" class="text-white bg-sky-700 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2">Tidak</button>
                    </a>
                </div>
            </form>
    </div>
</body>
</html>
