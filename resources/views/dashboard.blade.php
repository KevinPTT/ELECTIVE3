<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN</title>
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<x-layout title="Dashboard">
    @section('styles')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @endsection
    <x-header></x-header>

    <x-sidebar>
        {{-- Placeholder content for testing --}}
        <p>This is the sidebar content.</p>
    </x-sidebar>
    <x-main-content>
        <x-analytics></x-analytics>
        <x-table></x-table>
    </x-main-content>
</x-layout>
