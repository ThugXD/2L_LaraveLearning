@if (session()->has('success'))
    <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 border border-green-400 text-green-700 px-4" role="alert">
        {{ session('success') }}
    </div>
@endif 

@if (session()->has('message'))
    <div class="p-4 mb-4 text-sm text-blur-800 rounded-lg bg-blue-100 border border-green-400 text-green-700 px-4" role="alert">
        {{ session('message') }}
    </div>
@endif

@if (session()->has('error'))
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-danger-100 border border-green-400 text-green-700 px-4" role="alert">
        {{ session('error') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li class="p-4 mb-4 text-sm text-yellow-800 rounded-lg text-red-500">{{ $error }}</li>
        @endforeach
    </ul>
@endif