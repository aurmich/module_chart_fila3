<<<<<<< HEAD
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errore 403</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen flex items-center justify-center bg-gray-100 text-center">
    <div>
        <h1 class="text-4xl font-bold mb-4">Errore 403</h1>
        <p class="text-lg text-gray-700">Non hai i permessi per accedere a questa pagina</p>
    </div>

</body>
</html>
=======
@extends('errors::illustrated-layout')

@section('code', '403')
@section('title', __('Forbidden'))

@section('image')
<div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
</div>
@endsection

@section('message', __($exception->getMessage() ?: __('Sorry, you are forbidden from accessing this page.')))
>>>>>>> ac11c87d (✨ (Page.php): update page retrieval logic to abort with 404 if page not found, improving error handling)
