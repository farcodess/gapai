<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Register</title>
    @vite('resources/css/app.css')
    @livewireStyles

</head>
<body>
    <div>
        @livewire('dashboard')
        @livewire('content')
    </div>
    {{-- <div>
    @livewire('transfrom')
   <div>
    @livewire('content')
   </div> --}}
    @livewireScripts
    
</body>
</html>