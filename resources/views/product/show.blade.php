<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>API Store</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <a href="/">home</a>
    here is the header of this website

    <h1>{{ $product->name }}</h1>

    @if (file_exists(resource_path('views/livewire/' . $product->code . '.blade.php')))
        @livewire($product->code, ['product' => $product])
    @else
        @include('livewire.wild')
    @endif



</body>

</html>
