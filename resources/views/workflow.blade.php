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
        <!--Tabs-->
        <div id="default-tab-content">
            <!--All-->
            <div class="hidden p-4 rounded-lg ml-72" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="text-center">
                    <button class="w-44 h-44 inline-flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                            <path d="M51.1682 21.6955L45.8848 16.4122C44.714 15.2413 43.1244 14.583 41.4661 14.583H10.7223C8.42025 14.583 6.55566 16.4476 6.55566 18.7497V81.2497C6.55566 83.5518 8.42025 85.4163 10.7223 85.4163H89.889C92.1911 85.4163 94.0557 83.5518 94.0557 81.2497V27.083C94.0557 24.7809 92.1911 22.9163 89.889 22.9163H54.114C53.0098 22.9163 51.9494 22.4768 51.1682 21.6955Z" fill="url(#paint0_linear_512_23535)"/>
                            <path d="M45.2765 30.0295L52.0848 23.2212C52.2786 23.0274 52.5432 22.917 52.8202 22.917H89.889C92.1911 22.917 94.0557 24.7816 94.0557 27.0837V81.2503C94.0557 83.5524 92.1911 85.417 89.889 85.417H10.7223C8.42025 85.417 6.55566 83.5524 6.55566 81.2503V32.292C6.55566 31.717 7.02233 31.2503 7.59733 31.2503H42.3307C43.4348 31.2503 44.4952 30.8107 45.2765 30.0295Z" fill="url(#paint1_linear_512_23535)"/>
                            <defs>
                                <linearGradient id="paint0_linear_512_23535" x1="50.3057" y1="13.9747" x2="50.3057" y2="31.2018" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#EBA600"/>
                                    <stop offset="1" stop-color="#C28200"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_512_23535" x1="50.3057" y1="22.6128" x2="50.3057" y2="85.3816" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFD869"/>
                                    <stop offset="1" stop-color="#FEC52B"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Accounting</label>
                    </button>
                    <button class="w-44 h-44 inline-flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                            <path d="M51.1682 21.6955L45.8848 16.4122C44.714 15.2413 43.1244 14.583 41.4661 14.583H10.7223C8.42025 14.583 6.55566 16.4476 6.55566 18.7497V81.2497C6.55566 83.5518 8.42025 85.4163 10.7223 85.4163H89.889C92.1911 85.4163 94.0557 83.5518 94.0557 81.2497V27.083C94.0557 24.7809 92.1911 22.9163 89.889 22.9163H54.114C53.0098 22.9163 51.9494 22.4768 51.1682 21.6955Z" fill="url(#paint0_linear_512_23535)"/>
                            <path d="M45.2765 30.0295L52.0848 23.2212C52.2786 23.0274 52.5432 22.917 52.8202 22.917H89.889C92.1911 22.917 94.0557 24.7816 94.0557 27.0837V81.2503C94.0557 83.5524 92.1911 85.417 89.889 85.417H10.7223C8.42025 85.417 6.55566 83.5524 6.55566 81.2503V32.292C6.55566 31.717 7.02233 31.2503 7.59733 31.2503H42.3307C43.4348 31.2503 44.4952 30.8107 45.2765 30.0295Z" fill="url(#paint1_linear_512_23535)"/>
                            <defs>
                                <linearGradient id="paint0_linear_512_23535" x1="50.3057" y1="13.9747" x2="50.3057" y2="31.2018" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#EBA600"/>
                                    <stop offset="1" stop-color="#C28200"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_512_23535" x1="50.3057" y1="22.6128" x2="50.3057" y2="85.3816" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFD869"/>
                                    <stop offset="1" stop-color="#FEC52B"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Finance</label>
                    </button>
                    <button class="w-44 h-44 inline-flex flex-col items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="101" height="100" viewBox="0 0 101 100" fill="none">
                            <path d="M51.1682 21.6955L45.8848 16.4122C44.714 15.2413 43.1244 14.583 41.4661 14.583H10.7223C8.42025 14.583 6.55566 16.4476 6.55566 18.7497V81.2497C6.55566 83.5518 8.42025 85.4163 10.7223 85.4163H89.889C92.1911 85.4163 94.0557 83.5518 94.0557 81.2497V27.083C94.0557 24.7809 92.1911 22.9163 89.889 22.9163H54.114C53.0098 22.9163 51.9494 22.4768 51.1682 21.6955Z" fill="url(#paint0_linear_512_23535)"/>
                            <path d="M45.2765 30.0295L52.0848 23.2212C52.2786 23.0274 52.5432 22.917 52.8202 22.917H89.889C92.1911 22.917 94.0557 24.7816 94.0557 27.0837V81.2503C94.0557 83.5524 92.1911 85.417 89.889 85.417H10.7223C8.42025 85.417 6.55566 83.5524 6.55566 81.2503V32.292C6.55566 31.717 7.02233 31.2503 7.59733 31.2503H42.3307C43.4348 31.2503 44.4952 30.8107 45.2765 30.0295Z" fill="url(#paint1_linear_512_23535)"/>
                            <defs>
                                <linearGradient id="paint0_linear_512_23535" x1="50.3057" y1="13.9747" x2="50.3057" y2="31.2018" gradientUnits="userSpaceOnUse">
                                     <stop stop-color="#EBA600"/>
                                    <stop offset="1" stop-color="#C28200"/>
                                </linearGradient>
                                <linearGradient id="paint1_linear_512_23535" x1="50.3057" y1="22.6128" x2="50.3057" y2="85.3816" gradientUnits="userSpaceOnUse">
                                    <stop stop-color="#FFD869"/>
                                    <stop offset="1" stop-color="#FEC52B"/>
                                </linearGradient>
                            </defs>
                        </svg>
                        <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">OSDS</label>
                    </button>
                </div>
            </div>
            <!--Timeline-->
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72 w-[1214px]" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="p-4 ml-10">
                                    <div class="flex items-center">
                                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-all-search" class="sr-only">checkbox</label>                                        
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Office
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Message
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    
                                </th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Text
                                </th>
                                <td class="px-6 py-4">
                                    Text
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Text
                                </th>
                                <td class="px-6 py-4">
                                    Text
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Text
                                </th>
                                <td class="px-6 py-4">
                                    Text
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                </td>
                            </tr>
                           <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Text
                                </th>
                                <td class="px-6 py-4">
                                    Text
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Text
                                </th>
                                <td class="px-6 py-4">
                                    Text
                                </td>
                                <td class="flex items-center px-6 py-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z" />
                                    </svg>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div> 
            </div>
            <!--Track-->
            <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800 ml-72 w-[1214px]" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                <p class="text-sm text-gray-500 dark:text-gray-400">This is the <strong class="font-medium text-gray-800 dark:text-white"> Track </strong>tab.</p>
            </div>
            <!--Completed-->
            <div class="hidden p-4 rounded-lg ml-72 w-[1214px]" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-black bg-white hover:bg-black hover:text-white border border-black font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Accounting <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
                </button>

                <!-- Dropdown menu -->
                <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Budget Call</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Payment Request</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Others</a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection