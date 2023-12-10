@extends('layouts.navigation')
@section('content')
<x-app-layout>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <div class="left-[20px] top-[100px] absolute flex-col justify-start items-start gap-y-0 inline-flex">
        <label class="text-black text-2xl font-medium font-inter leading-9 ml-72 mt-3">Notifications</label>

        <div class="text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700 ml-72 font-Roboto leading-tight tracking-tight">
            <ul class="flex flex-wrap -mb-px">
                <li class="me-2">
                    <button class="w-[180px] h-[48px] inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300">All</button>
                </li>
                <li class="me-2">
                    <button class="w-[180px] h-[48px] inline-block p-4 text-black border-b-2 border-black rounded-t-lg active dark:text-black dark:border-black" aria-current="page">Unread</button>
                </li>
            </ul>
        </div>
    </div>
</x-app-layout>
@endsection