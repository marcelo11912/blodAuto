<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">



        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

   @php
       $color = "red";
       $alert = 'alert';
   @endphp 
    <body>


        <div class="container mx-auto">
            <x-alert :color="$color" class="mb-4"> 
                <x-slot name="title">
                    ALERTA TITULO1
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            </x-alert>
            <x-alert2 color="blue">
                <x-slot name="title">
                    ALERTA TITULO 333
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
            </x-alert2>  

            <x-dynamic-component :component="$alert"> 
                <x-slot name="title">
                    ALERTA TITULO prueba
                </x-slot>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit
            </x-dynamic-component>
        </div>
    </body>
</html>
