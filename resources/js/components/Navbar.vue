<template>
    <body>

        </div>
        <main>
            <div class="container mx-auto">
                <!-- youtube iframe with progressive enhancement (extra queries after the url to optimize the embed) -->
                <vue-plyr>
                    <div class="plyr__video-embed">
                        <iframe
                            src="https://www.youtube.com/embed/bTqVqk7FSmY?iv_load_policy=3&modestbranding=1&playsinline=1&showinfo=0&rel=0&enablejsapi=1"
                            allowfullscreen
                            allowtransparency
                            allow="autoplay"
                        >
                        </iframe>
                    </div>
                </vue-plyr>
            </div>
            <div class="container mx-auto">
                <!--
  Tailwind UI components require Tailwind CSS v1.8 and the @tailwindcss/ui plugin.
  Read the documentation to get started: https://tailwindui.com/documentation
-->
                <div class="py-12 bg-white">
                    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="lg:text-center">
                            <h3
                                class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10"
                            >
                                Hàng ngàn người đang sử dụng dịch vụ in ảnh thẻ
                                online của chúng tôi
                            </h3>
                            <p
                                class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto"
                            >
                                Lorem ipsum dolor sit amet consect adipisicing
                                elit. Possimus magnam voluptatum cupiditate
                                veritatis in accusamus quisquam.
                            </p>
                        </div>

                        <div class="mt-10">
                            <ul
                                class="md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10"
                            >
                                <li>
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white"
                                            >
                                                <!-- Heroicon name: globe-alt -->
                                                <svg
                                                    class="h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4
                                                class="text-lg leading-6 font-medium text-gray-900"
                                            >
                                                Giao hàng tận nơi
                                            </h4>
                                            <p
                                                class="mt-2 text-base leading-6 text-gray-500"
                                            >
                                                Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit.
                                                Maiores impedit perferendis
                                                suscipit eaque, iste dolor
                                                cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-10 md:mt-0">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white"
                                            >
                                                <!-- Heroicon name: scale -->
                                                <svg
                                                    class="h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4
                                                class="text-lg leading-6 font-medium text-gray-900"
                                            >
                                                In bằng ảnh điện thoại
                                            </h4>
                                            <p
                                                class="mt-2 text-base leading-6 text-gray-500"
                                            >
                                                Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit.
                                                Maiores impedit perferendis
                                                suscipit eaque, iste dolor
                                                cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-10 md:mt-0">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white"
                                            >
                                                <!-- Heroicon name: lightning-bolt -->
                                                <svg
                                                    class="h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M13 10V3L4 14h7v7l9-11h-7z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4
                                                class="text-lg leading-6 font-medium text-gray-900"
                                            >
                                                Chất lượng
                                            </h4>
                                            <p
                                                class="mt-2 text-base leading-6 text-gray-500"
                                            >
                                                Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit.
                                                Maiores impedit perferendis
                                                suscipit eaque, iste dolor
                                                cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                                <li class="mt-10 md:mt-0">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <div
                                                class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white"
                                            >
                                                <!-- Heroicon name: annotation -->
                                                <svg
                                                    class="h-6 w-6"
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    fill="none"
                                                    viewBox="0 0 24 24"
                                                    stroke="currentColor"
                                                >
                                                    <path
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <div class="ml-4">
                                            <h4
                                                class="text-lg leading-6 font-medium text-gray-900"
                                            >
                                                Tiện lợi
                                            </h4>
                                            <p
                                                class="mt-2 text-base leading-6 text-gray-500"
                                            >
                                                Lorem ipsum, dolor sit amet
                                                consectetur adipisicing elit.
                                                Maiores impedit perferendis
                                                suscipit eaque, iste dolor
                                                cupiditate blanditiis ratione.
                                            </p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto">
                <!-- Full width column -->
                <div class="flex mb-4">
                    <div class="w-full h-12 flex justify-center">
                        <button
                            class="bg-yellow-400 hover:bg-yellow-500 text-gray-800 font-bold py-4 px-20 rounded inline-flex items-center"
                        >
                            <svg
                                class="fill-current w-4 h-4 mr-2"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                            >
                                <path
                                    d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z"
                                />
                            </svg>
                            <span>Tải ảnh lên</span>
                        </button>
                    </div>
                </div>
            </div>
        </main>

 
    </body>
</template>

<script>
export default {
    data() {
        return {
            isOpen: false
        };
    }
};
</script>
