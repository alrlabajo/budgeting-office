@extends('layouts.navigation')
@section('content')
<x-app-layout>
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <div class="left-72 top-[100px] absolute flex-col justify-start items-start gap-y-0 inline-flex">
        <div class="w-32 h-9 justify-start items-center gap-2.5 inline-flex">
            <div class="justify-start items-center gap-2.5 flex">
                <div class="text-black text-lg font-normal font-inter leading-9 left-[20px] top-[100px] ">Accounting</div>
                <div class="w-6 h-6 relative"></div>
            </div>
        </div>
        <!--Buttons-->
        <div class="w-96 h-9 justify-start items-center gap-3 inline-flex ml-[500px]">
            <div class="w-32 h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex">
                <div class="w-5 h-5 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_3072_3144)">
                            <path d="M9.67976 8.40245V13.1486M7.30669 10.7755H12.0528M3.35158 16.3127H16.0079C16.4275 16.3127 16.8299 16.146 17.1266 15.8493C17.4233 15.5526 17.59 15.1502 17.59 14.7306V6.82041C17.59 6.40082 17.4233 5.99843 17.1266 5.70173C16.8299 5.40504 16.4275 5.23836 16.0079 5.23836H9.73513C9.47456 5.23702 9.21835 5.17132 8.98927 5.04713C8.7602 4.92293 8.56535 4.74407 8.42203 4.52644L7.7734 3.57722C7.63008 3.35959 7.43523 3.18073 7.20615 3.05653C6.97708 2.93233 6.72087 2.86664 6.4603 2.8653H3.35158C2.93199 2.8653 2.52959 3.03197 2.2329 3.32867C1.93621 3.62536 1.76953 4.02776 1.76953 4.44734V14.7306C1.76953 15.6008 2.48145 16.3127 3.35158 16.3127Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3072_3144">
                                <rect width="18.9845" height="18.9845" fill="white" transform="translate(0.1875 0.492249)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="text-white text-xs font-medium font-['Inter'] leading-normal">New Folder</div>
            </div>
            <div class="w-32 h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 inline-flex">
                <div class="w-5 h-5 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path d="M11.2154 2.07428V6.82042H15.9615M9.63336 9.98451V14.7306M9.63336 9.98451L12.0064 12.3576M9.63336 9.98451L7.26029 12.3576M11.6109 2.07428H4.88722C4.46764 2.07428 4.06524 2.24096 3.76855 2.53765C3.47186 2.83434 3.30518 3.23674 3.30518 3.65633V16.3127C3.30518 16.7323 3.47186 17.1347 3.76855 17.4314C4.06524 17.7281 4.46764 17.8947 4.88722 17.8947H14.3795C14.7991 17.8947 15.2015 17.7281 15.4982 17.4314C15.7949 17.1347 15.9615 16.7323 15.9615 16.3127V6.42491L11.6109 2.07428Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="text-white text-xs font-medium font-['Inter'] leading-normal">File upload</div>
            </div>
            <div class="w-40 h-9 px-4 py-2 bg-indigo-800 rounded-md shadow justify-center items-center gap-2 flex">
                <div class="w-5 h-5 relative">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <g clip-path="url(#clip0_3072_6571)">
                            <path d="M9.58748 8.40252V13.1487M9.58748 8.40252L7.21441 10.7756M9.58748 8.40252L11.9605 10.7756M3.25929 16.3127H15.9157C16.3352 16.3127 16.7376 16.1461 17.0343 15.8494C17.331 15.5527 17.4977 15.1503 17.4977 14.7307V6.82047C17.4977 6.40089 17.331 5.99849 17.0343 5.7018C16.7376 5.4051 16.3352 5.23842 15.9157 5.23842H9.64285C9.38227 5.23708 9.12607 5.17139 8.89699 5.04719C8.66791 4.92299 8.47306 4.74413 8.32975 4.5265L7.68111 3.57728C7.5378 3.35965 7.34294 3.18079 7.11387 3.05659C6.88479 2.9324 6.62859 2.8667 6.36801 2.86536H3.25929C2.83971 2.86536 2.43731 3.03204 2.14062 3.32873C1.84393 3.62542 1.67725 4.02782 1.67725 4.4474V14.7307C1.67725 15.6008 2.38917 16.3127 3.25929 16.3127Z" stroke="#FAFAFA" stroke-width="1.58521" stroke-linecap="round" stroke-linejoin="round"/>
                        </g>
                        <defs>
                            <clipPath id="clip0_3072_6571">
                                <rect width="18.9845" height="18.9845" fill="white" transform="translate(0.0947266 0.492249)"/>
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="text-white text-xs font-medium font-inter leading-normal">Folder upload</div>
            </div>
            <div class="w-6 h-6 relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25" fill="none">
                    <path d="M12.8608 16.9846V12.9846M12.8608 8.98456H12.8708M22.8608 12.9846C22.8608 18.5074 18.3837 22.9846 12.8608 22.9846C7.33799 22.9846 2.86084 18.5074 2.86084 12.9846C2.86084 7.46171 7.33799 2.98456 12.8608 2.98456C18.3837 2.98456 22.8608 7.46171 22.8608 12.9846Z" stroke="#434343" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </div>
        </div>
    </div>
</x-app-layout>
@endsection