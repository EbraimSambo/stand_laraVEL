<x-layout :selector="$selectocPag" >
    <x-slot name="title" > {{$cars->title}} </x-slot>
    <x-cars.singlecars :cars="$cars" />
</x-layout>
