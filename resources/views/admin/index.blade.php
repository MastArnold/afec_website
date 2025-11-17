<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AFEC - Administration</title>

    @viteReactRefresh
    @vite(['resources/css/app.css', 'resources/js/admin/app.jsx'])
</head>
<body class="antialiased bg-white">
<div id="admin-root"></div>
<script>
    window.AdminUserName = @json(optional(Auth::user())->name);
</script>
</body>
</html>
