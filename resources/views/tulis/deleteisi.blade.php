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
    <h3>Hapus Data Novel</h3>
        <form action="/deleteisi/{{ $cerita->id }}" method="post">
            @csrf
            @method('delete')
            <div class="mt-5">
                <a href="/detail-cerita">
                    <p>Apakah Anda yakin akan menghapus data Isi Cerita Novel <b>{{ $cerita->name }}</b> ?</p>
                    <button type="submit" class="btn btn-danger mb-3">Ya</button>
                </a>
                <a href="/detail-cerita" class="btn btn-secondary mb-3">Tidak</a>
            </div>
        </form>
</body>
</html>