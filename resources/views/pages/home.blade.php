<x-layout :selector="$selectocPag" >
    <x-slot name="title" > Pagina Inicial</x-slot>
    <x-home.hero  />
    <x-cars.carsHome :cars="$cars" />
</x-layout>
