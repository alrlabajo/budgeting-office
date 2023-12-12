@extends('layouts.navigation')
@section('content')
<x-app-layout>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <div class="left-72 top-[100px] absolute flex-col justify-start items-start gap-y-0 inline-flex">
        <div class="w-32 h-9 justify-start items-center gap-2.5 inline-flex">
            <div class="justify-start items-center gap-2.5 flex">
                <div class="text-black text-xl font-normal font-inter leading-9 left-[20px] top-[100px] ">Accounting</div>
                <div class="w-6 h-6 relative"></div>
            </div>
        </div>
        <!--Buttons-->
        <div class="h-9 justify-end items-center gap-3 flex ml-[45rem]">
            <button type="button" class="h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex text-white text-xs font-medium font-['Inter'] leading-normal">
                <svg class="w-5 h-5 relative" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_3072_3144)">
                        <path d="M9.67976 8.40245V13.1486M7.30669 10.7755H12.0528M3.35158 16.3127H16.0079C16.4275 16.3127 16.8299 16.146 17.1266 15.8493C17.4233 15.5526 17.59 15.1502 17.59 14.7306V6.82041C17.59 6.40082 17.4233 5.99843 17.1266 5.70173C16.8299 5.40504 16.4275 5.23836 16.0079 5.23836H9.73513C9.47456 5.23702 9.21835 5.17132 8.98927 5.04713C8.7602 4.92293 8.56535 4.74407 8.42203 4.52644L7.7734 3.57722C7.63008 3.35959 7.43523 3.18073 7.20615 3.05653C6.97708 2.93233 6.72087 2.86664 6.4603 2.8653H3.35158C2.93199 2.8653 2.52959 3.03197 2.2329 3.32867C1.93621 3.62536 1.76953 4.02776 1.76953 4.44734V14.7306C1.76953 15.6008 2.48145 16.3127 3.35158 16.3127Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_3072_3144">
                            <rect width="18.9845" height="18.9845" fill="white" transform="translate(0.1875 0.492249)" />
                        </clipPath>
                    </defs>
                </svg>
                New Folder
            </button>
            <button type="button" class="h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex text-white text-xs font-medium font-['Inter'] leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_3072_6571)">
                        <path d="M9.58748 8.40252V13.1487M9.58748 8.40252L7.21441 10.7756M9.58748 8.40252L11.9605 10.7756M3.25929 16.3127H15.9157C16.3352 16.3127 16.7376 16.1461 17.0343 15.8494C17.331 15.5527 17.4977 15.1503 17.4977 14.7307V6.82047C17.4977 6.40089 17.331 5.99849 17.0343 5.7018C16.7376 5.4051 16.3352 5.23842 15.9157 5.23842H9.64285C9.38227 5.23708 9.12607 5.17139 8.89699 5.04719C8.66791 4.92299 8.47306 4.74413 8.32975 4.5265L7.68111 3.57728C7.5378 3.35965 7.34294 3.18079 7.11387 3.05659C6.88479 2.9324 6.62859 2.8667 6.36801 2.86536H3.25929C2.83971 2.86536 2.43731 3.03204 2.14062 3.32873C1.84393 3.62542 1.67725 4.02782 1.67725 4.4474V14.7307C1.67725 15.6008 2.38917 16.3127 3.25929 16.3127Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_3072_6571">
                            <rect width="18.9845" height="18.9845" fill="white" transform="translate(0.0947266 0.492249)" />
                        </clipPath>
                    </defs>
                </svg>
                File Upload
            </button>
            <button type="button" class="h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex text-white text-xs font-medium font-['Inter'] leading-normal">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                    <g clip-path="url(#clip0_3072_6571)">
                        <path d="M9.58748 8.40252V13.1487M9.58748 8.40252L7.21441 10.7756M9.58748 8.40252L11.9605 10.7756M3.25929 16.3127H15.9157C16.3352 16.3127 16.7376 16.1461 17.0343 15.8494C17.331 15.5527 17.4977 15.1503 17.4977 14.7307V6.82047C17.4977 6.40089 17.331 5.99849 17.0343 5.7018C16.7376 5.4051 16.3352 5.23842 15.9157 5.23842H9.64285C9.38227 5.23708 9.12607 5.17139 8.89699 5.04719C8.66791 4.92299 8.47306 4.74413 8.32975 4.5265L7.68111 3.57728C7.5378 3.35965 7.34294 3.18079 7.11387 3.05659C6.88479 2.9324 6.62859 2.8667 6.36801 2.86536H3.25929C2.83971 2.86536 2.43731 3.03204 2.14062 3.32873C1.84393 3.62542 1.67725 4.02782 1.67725 4.4474V14.7307C1.67725 15.6008 2.38917 16.3127 3.25929 16.3127Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_3072_6571">
                            <rect width="18.9845" height="18.9845" fill="white" transform="translate(0.0947266 0.492249)" />
                        </clipPath>
                    </defs>
                </svg>
                Folder Upload
            </button>
            <div class="w-6 h-6 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M12.8608 16.9846V12.9846M12.8608 8.98456H12.8708M22.8608 12.9846C22.8608 18.5074 18.3837 22.9846 12.8608 22.9846C7.33799 22.9846 2.86084 18.5074 2.86084 12.9846C2.86084 7.46171 7.33799 2.98456 12.8608 2.98456C18.3837 2.98456 22.8608 7.46171 22.8608 12.9846Z" stroke="#434343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
        </div>
        <div class="justify-start items-center gap-2.5 flex">
            <div class="text-black text-xl font-normal font-inter leading-9 left-[20px] top-[100px] ">Folders</div>
        </div>
        <!--Folders-->
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
                <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Budget Call</label>
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
                <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Budget Call</label>
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
                <label class="text-gray-500 text-xs font-medium font-['Inter'] leading-none">Budget Call</label>
            </button>
        </div>        
    </div>
</x-app-layout>
@endsection