@extends('layout.app')

@section('content')
    

    @if (file_exists(resource_path('views/livewire/' . $code . '.blade.php')))
        @livewire($code)
    @else
        @livewire('wild')
    @endif

    
@endSection
