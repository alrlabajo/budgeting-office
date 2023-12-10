@extends('layouts.navigation')
@section('title','Workflow')
@section('content')
<x-app-layout>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <div class="left-[20px] top-[100px] absolute flex-col justify-start items-start gap-y-0 inline-flex">
        <label class="text-black text-2xl font-medium font-inter leading-9 ml-72 mt-3">Workflow</label>

        <div class="mb-4 border-b border-gray-200 dark:border-gray-700 ml-72">
            <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist">
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg w-44" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">All</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg w-44 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Pending</button>
                </li>
                <li class="me-2" role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg w-44 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Track</button>
                </li>
                <li role="presentation">
                    <button class="inline-block p-4 border-b-2 rounded-t-lg w-44 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Completed</button>
                </li>
            </ul>
        </div>
        <div id="default-tab-content">
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is the<strong class="font-medium text-gray-800 dark:text-white"> All </strong>tab.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is the<strong class="font-medium text-gray-800 dark:text-white"> Pending </strong>tab.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is the <strong class="font-medium text-gray-800 dark:text-white"> Track </strong>tab.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is the<strong class="font-medium text-gray-800 dark:text-white"> Completed </strong>tab.</p>
            </div>
        </div>

    </div>
</x-app-layout>
@endsection