@extends('layout.master')
@section('middle_content')
    <div class="bg-cream" id="home">
        <div class="max-w-screen-xl px-8 mx-auto flex flex-col lg:flex-row items-start">
            <!--Left Col-->
            <div
                class="flex flex-col w-full lg:w-6/12 justify-center lg:pt-24 items-start text-center lg:text-left mb-5 md:mb-0">
                <h1 data-aos="fade-right" data-aos-once="true" class="my-4 text-5xl font-bold leading-tight text-darken">
                    <span class="text-yellow-500">Agricultural Products</span> Selling and Buying is getting easier
                </h1>
                <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="leading-normal text-2xl mb-8">
                    Agrolink
                    is the best shopping site in Ethiopia for agricultural products only</p>
                <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700"
                    class="w-full md:flex items-center justify-center lg:justify-start md:space-x-5">
                    <button
                        class="lg:mx-0 bg-yellow-500 text-white text-xl font-bold rounded-full py-4 px-9 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        <a href="{{ route('login') }}">Join for free</a>
                    </button>
                    <div
                        class="flex items-center justify-center space-x-3 mt-5 md:mt-0 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                        <button class="bg-white w-14 h-14 rounded-full flex items-center justify-center">
                            <svg class="w-5 h-5 ml-2" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.5751 12.8097C23.2212 13.1983 23.2212 14.135 22.5751 14.5236L1.51538 27.1891C0.848878 27.5899 5.91205e-07 27.1099 6.25202e-07 26.3321L1.73245e-06 1.00123C1.76645e-06 0.223477 0.848877 -0.256572 1.51538 0.14427L22.5751 12.8097Z"
                                    fill="#23BDEE" />
                            </svg>
                        </button>
                        <span class="cursor-pointer">Watch how it works</span>
                    </div>
                </div>
            </div>
            <!--Right Col-->
            <div class="w-full lg:w-6/12 lg:-mt-10 relative" id="girl">
                <div data-aos="fade-up" data-aos-delay="400" data-aos-once="true"
                    class="absolute top-20 right-10 sm:right-24 sm:top-28 md:top-36 md:right-32 lg:top-32 lg:right-16 floating">
                    <img src="https://i.pinimg.com/564x/9c/91/55/9c9155a1cfa4d40546b25e18a6879dd6.jpg"
                        style="border-radius: 20px;" alt="">
                </div>
            </div>
        </div>
        <br><br>
    </div>
    <!-- container -->
    <div class="container px-4 lg:px-8 mx-auto max-w-screen-xl text-gray-700 overflow-x-hidden" id="feature">


        <!-- All-In-One Cloud Software. -->
        <div data-aos="flip-up" class="max-w-xl mx-auto text-center mt-24">
            <h1 class="font-bold text-darken my-3 text-2xl">All-In-One <span class="text-yellow-500">Cloud
                    Shopping.</span></h1>
            <p class="leading-relaxed text-gray-500">Agrolink is one powerful Online shopping systems software suite that
                combines all
                the tools needed to run a successful Workbench or Growth.</p>
        </div>
        <!-- card -->
        <div class="grid md:grid-cols-3 gap-14 md:gap-5 mt-20">
            <div data-aos="fade-up" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #5B72EE;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 33 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.75 23H8.25V28.75H24.75V23ZM32.3984 9.43359L23.9852 0.628906C23.5984 0.224609 23.0742 0 22.5242 0H22V11.5H33V10.952C33 10.3859 32.7852 9.83789 32.3984 9.43359ZM19.25 12.2188V0H2.0625C0.919531 0 0 0.961328 0 2.15625V43.8438C0 45.0387 0.919531 46 2.0625 46H30.9375C32.0805 46 33 45.0387 33 43.8438V14.375H21.3125C20.1781 14.375 19.25 13.4047 19.25 12.2188ZM5.5 6.46875C5.5 6.07164 5.80766 5.75 6.1875 5.75H13.0625C13.4423 5.75 13.75 6.07164 13.75 6.46875V7.90625C13.75 8.30336 13.4423 8.625 13.0625 8.625H6.1875C5.80766 8.625 5.5 8.30336 5.5 7.90625V6.46875ZM5.5 12.2188C5.5 11.8216 5.80766 11.5 6.1875 11.5H13.0625C13.4423 11.5 13.75 11.8216 13.75 12.2188V13.6562C13.75 14.0534 13.4423 14.375 13.0625 14.375H6.1875C5.80766 14.375 5.5 14.0534 5.5 13.6562V12.2188ZM27.5 39.5312C27.5 39.9284 27.1923 40.25 26.8125 40.25H19.9375C19.5577 40.25 19.25 39.9284 19.25 39.5312V38.0938C19.25 37.6966 19.5577 37.375 19.9375 37.375H26.8125C27.1923 37.375 27.5 37.6966 27.5 38.0938V39.5312ZM27.5 21.5625V30.1875C27.5 30.9817 26.8847 31.625 26.125 31.625H6.875C6.11531 31.625 5.5 30.9817 5.5 30.1875V21.5625C5.5 20.7683 6.11531 20.125 6.875 20.125H26.125C26.8847 20.125 27.5 20.7683 27.5 21.5625Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Product Listings and Marketplace</h1>
                <p class="px-4 text-gray-500">A searchable database of agricultural products such as crops, livestock,
                    seeds, fertilizers, equipment, etc</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="150" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #F48C06;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M12 0C11.0532 0 10.2857 0.767511 10.2857 1.71432V5.14285H13.7142V1.71432C13.7142 0.767511 12.9467 0 12 0Z"
                            fill="#F5F5FC" />
                        <path
                            d="M36 0C35.0532 0 34.2856 0.767511 34.2856 1.71432V5.14285H37.7142V1.71432C37.7143 0.767511 36.9468 0 36 0Z"
                            fill="#F5F5FC" />
                        <path
                            d="M42.8571 5.14282H37.7143V12C37.7143 12.9468 36.9468 13.7143 36 13.7143C35.0532 13.7143 34.2857 12.9468 34.2857 12V5.14282H13.7142V12C13.7142 12.9468 12.9467 13.7143 11.9999 13.7143C11.0531 13.7143 10.2856 12.9468 10.2856 12V5.14282H5.14285C2.30253 5.14282 0 7.44535 0 10.2857V42.8571C0 45.6974 2.30253 48 5.14285 48H42.8571C45.6975 48 48 45.6974 48 42.8571V10.2857C48 7.44535 45.6975 5.14282 42.8571 5.14282ZM44.5714 42.8571C44.5714 43.8039 43.8039 44.5714 42.857 44.5714H5.14285C4.19605 44.5714 3.42854 43.8039 3.42854 42.8571V20.5714H44.5714V42.8571Z"
                            fill="#F5F5FC" />
                        <path
                            d="M13.7142 23.9999H10.2857C9.33889 23.9999 8.57138 24.7674 8.57138 25.7142C8.57138 26.661 9.33889 27.4285 10.2857 27.4285H13.7142C14.661 27.4285 15.4285 26.661 15.4285 25.7142C15.4285 24.7674 14.661 23.9999 13.7142 23.9999Z"
                            fill="#F5F5FC" />
                        <path
                            d="M25.7143 23.9999H22.2857C21.3389 23.9999 20.5714 24.7674 20.5714 25.7142C20.5714 26.661 21.3389 27.4285 22.2857 27.4285H25.7143C26.6611 27.4285 27.4286 26.661 27.4286 25.7142C27.4286 24.7674 26.6611 23.9999 25.7143 23.9999Z"
                            fill="#F5F5FC" />
                        <path
                            d="M37.7143 23.9999H34.2857C33.3389 23.9999 32.5714 24.7674 32.5714 25.7142C32.5714 26.661 33.3389 27.4285 34.2857 27.4285H37.7143C38.6611 27.4285 39.4286 26.661 39.4286 25.7142C39.4286 24.7674 38.661 23.9999 37.7143 23.9999Z"
                            fill="#F5F5FC" />
                        <path
                            d="M13.7142 30.8571H10.2857C9.33889 30.8571 8.57138 31.6246 8.57138 32.5714C8.57138 33.5182 9.33889 34.2857 10.2857 34.2857H13.7142C14.661 34.2857 15.4285 33.5182 15.4285 32.5714C15.4285 31.6246 14.661 30.8571 13.7142 30.8571Z"
                            fill="#F5F5FC" />
                        <path
                            d="M25.7143 30.8571H22.2857C21.3389 30.8571 20.5714 31.6246 20.5714 32.5714C20.5714 33.5182 21.3389 34.2857 22.2857 34.2857H25.7143C26.6611 34.2857 27.4286 33.5182 27.4286 32.5714C27.4286 31.6246 26.6611 30.8571 25.7143 30.8571Z"
                            fill="#F5F5FC" />
                        <path
                            d="M37.7143 30.8571H34.2857C33.3389 30.8571 32.5714 31.6246 32.5714 32.5714C32.5714 33.5182 33.3389 34.2857 34.2857 34.2857H37.7143C38.6611 34.2857 39.4286 33.5182 39.4286 32.5714C39.4285 31.6246 38.661 30.8571 37.7143 30.8571Z"
                            fill="#F5F5FC" />
                        <path
                            d="M13.7142 37.7142H10.2857C9.33889 37.7142 8.57138 38.4817 8.57138 39.4286C8.57138 40.3754 9.33889 41.1428 10.2857 41.1428H13.7142C14.661 41.1428 15.4285 40.3753 15.4285 39.4284C15.4285 38.4816 14.661 37.7142 13.7142 37.7142Z"
                            fill="#F5F5FC" />
                        <path
                            d="M25.7143 37.7142H22.2857C21.3389 37.7142 20.5714 38.4817 20.5714 39.4285C20.5714 40.3754 21.3389 41.1429 22.2857 41.1429H25.7143C26.6611 41.1429 27.4286 40.3754 27.4286 39.4285C27.4286 38.4817 26.6611 37.7142 25.7143 37.7142Z"
                            fill="#F5F5FC" />
                        <path
                            d="M37.7143 37.7142H34.2857C33.3389 37.7142 32.5714 38.4817 32.5714 39.4285C32.5714 40.3754 33.3389 41.1429 34.2857 41.1429H37.7143C38.6611 41.1429 39.4286 40.3754 39.4286 39.4285C39.4286 38.4817 38.661 37.7142 37.7143 37.7142Z"
                            fill="#F5F5FC" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken">Crop Monitoring and Management Tools</h1>
                <p class="px-4 text-gray-500">Real-time weather forecasts and historical data to help farmers plan and
                    manage their operations effectively</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="300" class="bg-white shadow-xl p-6 text-center rounded-xl">
                <div style="background: #29B9E7;"
                    class="rounded-full w-16 h-16 flex items-center justify-center mx-auto shadow-lg transform -translate-y-12">
                    <svg class="w-6 h-6 text-white" viewBox="0 0 55 44" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8.25 19.25C11.2836 19.25 13.75 16.7836 13.75 13.75C13.75 10.7164 11.2836 8.25 8.25 8.25C5.21641 8.25 2.75 10.7164 2.75 13.75C2.75 16.7836 5.21641 19.25 8.25 19.25ZM46.75 19.25C49.7836 19.25 52.25 16.7836 52.25 13.75C52.25 10.7164 49.7836 8.25 46.75 8.25C43.7164 8.25 41.25 10.7164 41.25 13.75C41.25 16.7836 43.7164 19.25 46.75 19.25ZM49.5 22H44C42.4875 22 41.1211 22.6102 40.1242 23.5984C43.5875 25.4977 46.0453 28.9266 46.5781 33H52.25C53.7711 33 55 31.7711 55 30.25V27.5C55 24.4664 52.5336 22 49.5 22ZM27.5 22C32.8195 22 37.125 17.6945 37.125 12.375C37.125 7.05547 32.8195 2.75 27.5 2.75C22.1805 2.75 17.875 7.05547 17.875 12.375C17.875 17.6945 22.1805 22 27.5 22ZM34.1 24.75H33.3867C31.5992 25.6094 29.6141 26.125 27.5 26.125C25.3859 26.125 23.4094 25.6094 21.6133 24.75H20.9C15.4344 24.75 11 29.1844 11 34.65V37.125C11 39.4023 12.8477 41.25 15.125 41.25H39.875C42.1523 41.25 44 39.4023 44 37.125V34.65C44 29.1844 39.5656 24.75 34.1 24.75ZM14.8758 23.5984C13.8789 22.6102 12.5125 22 11 22H5.5C2.46641 22 0 24.4664 0 27.5V30.25C0 31.7711 1.22891 33 2.75 33H8.41328C8.95469 28.9266 11.4125 25.4977 14.8758 23.5984Z"
                            fill="white" />
                    </svg>
                </div>
                <h1 class="font-medium text-xl mb-3 lg:px-14 text-darken lg:h-14 pt-3">Knowledge Sharing and Education</h1>
                <p class="px-4 text-gray-500">Articles and tutorials: Educational content on various topics such as farming
                    techniques, crop cultivation, livestock management, sustainable agriculture practices, etc. </p>
            </div>
        </div>
        <br><br><br id="co">
        <!-- trusted by -->
        <div class="max-w-4xl mx-auto">
            <h1 class="text-center mb-3 text-gray-400 font-medium">Trusted by 50+ Companies creating a Partnership</h1> <br>
            <div class="grid grid-cols-3 lg:grid-cols-6 gap-4 justify-items-center">
                <img class="h-10" src="img/company/AwashBank.svg">
                <img class="h-10" src="img/company/ChapaLogo.svg">
                <img class="h-10" src="img/company/HibretBank.svg">
                <img class="h-10 transform translate-y-2" src="img/company/RideLogo.svg">
                <img class="h-10" src="img/company/Telebirr.svg">
                <img class="h-10" src="img/company/EthiopianAgricultural.svg">
            </div>
        </div>


        <!-- lorem -->
        <div class="mt-28" id="about">
            <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
                <h1 class="text-3xl font-bold mb-4">What is<span class="text-yellow-500"> Agrolink?</span></h1>
                <p class="text-gray-500">Our agricultural website is a comprehensive platform designed to empower farmers,
                    agricultural businesses,
                    and enthusiasts alike. Through our platform, you can explore a wide range of agricultural products, from
                    crops and
                    livestock to equipment and supplies. Whether you're looking to buy or sell, our marketplace connects you
                    with trusted
                    sellers and buyers, making transactions seamless and secure.</p>
            </div>
            <div data-aos="fade-up"
                class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
                <div class="relative md:w-5/12">
                    <img class="rounded-2xl" src="img/vegetables.jpg" alt="">
                    <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">StartBuying</h1>
                            <button
                                class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                                <a href="{{ route('register') }}">Create An account</a> </button>
                        </div>
                    </div>
                </div>
                <div class="relative md:w-5/12">
                    <img class="rounded-2xl" src="img/ethiopia.jpeg" alt="">
                    <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">For sellers
                            </h1>
                            <button
                                class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                                style="background: rgba(35, 189, 238, 0.9)"><a href="{{ route('login') }}">Send a
                                    request</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="md:flex mt-40 md:space-x-10 items-start">
            <div data-aos="fade-down" class="md:w-7/12 relative">
                <div style="background: #33EFA0" class="w-32 h-32 rounded-full absolute z-0 left-4 -top-12 animate-pulse">
                </div>
                <div style="background: #33D9EF;" class="w-5 h-5 rounded-full absolute z-0 left-36 -top-12 animate-ping">
                </div>
                <img class="relative z-50 floating" src="img/phone.png" alt="">
                <div style="background: #5B61EB;"
                    class="w-36 h-36 rounded-full absolute z-0 right-16 -bottom-1 animate-pulse"></div>
                <div style="background: #F56666;"
                    class="w-5 h-5 rounded-full absolute z-0 right-52 bottom-1 animate-ping"></div>
            </div>
            <div data-aos="fade-down" class="md:w-5/12 mt-20 md:mt-0 text-gray-500">
                <h1 class="text-2xl font-semibold text-darken lg:pr-40">An <span class="text-yellow-500">Attractive
                        interface</span> designed for the our customers</h1>
                <div class="flex items-center space-x-5 my-5">
                    <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 27 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                            <rect y="14.1816" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                            <rect x="14.7727" width="11.8182" height="11.8182" rx="2" fill="#2F327D" />
                            <rect x="14.7727" y="14.1816" width="11.8182" height="11.8182" rx="2"
                                fill="#F48C06" />
                        </svg>
                    </div>
                    <p>Enhanced User Experience (UX)</p>
                </div>
                <div class="flex items-center space-x-5 my-5">
                    <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 28 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="6" width="20" height="20" rx="2" fill="#2F327D" />
                            <rect width="21.2245" height="21.2245" rx="2" fill="#F48C06" />
                        </svg>
                    </div>
                    <p>Personalization and Customization.</p>
                </div>
                <div class="flex items-center space-x-5 my-5">
                    <div class="flex-shrink bg-white shadow-lg rounded-full p-3 flex items-center justify-center">
                        <svg class="w-4 h-4" viewBox="0 0 30 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M4.5 11.375C6.15469 11.375 7.5 9.91758 7.5 8.125C7.5 6.33242 6.15469 4.875 4.5 4.875C2.84531 4.875 1.5 6.33242 1.5 8.125C1.5 9.91758 2.84531 11.375 4.5 11.375ZM25.5 11.375C27.1547 11.375 28.5 9.91758 28.5 8.125C28.5 6.33242 27.1547 4.875 25.5 4.875C23.8453 4.875 22.5 6.33242 22.5 8.125C22.5 9.91758 23.8453 11.375 25.5 11.375ZM27 13H24C23.175 13 22.4297 13.3605 21.8859 13.9445C23.775 15.0668 25.1156 17.093 25.4062 19.5H28.5C29.3297 19.5 30 18.7738 30 17.875V16.25C30 14.4574 28.6547 13 27 13ZM15 13C17.9016 13 20.25 10.4559 20.25 7.3125C20.25 4.16914 17.9016 1.625 15 1.625C12.0984 1.625 9.75 4.16914 9.75 7.3125C9.75 10.4559 12.0984 13 15 13ZM18.6 14.625H18.2109C17.2359 15.1328 16.1531 15.4375 15 15.4375C13.8469 15.4375 12.7688 15.1328 11.7891 14.625H11.4C8.41875 14.625 6 17.2453 6 20.475V21.9375C6 23.2832 7.00781 24.375 8.25 24.375H21.75C22.9922 24.375 24 23.2832 24 21.9375V20.475C24 17.2453 21.5812 14.625 18.6 14.625ZM8.11406 13.9445C7.57031 13.3605 6.825 13 6 13H3C1.34531 13 0 14.4574 0 16.25V17.875C0 18.7738 0.670312 19.5 1.5 19.5H4.58906C4.88438 17.093 6.225 15.0668 8.11406 13.9445Z"
                                fill="#2F327D" />
                        </svg>
                    </div>
                    <p>Accessibility and Inclusivity</p>
                </div>
            </div>
        </div>

        <!-- Tools For Buyers -->
        <div class="flex flex-col md:flex-row items-center md:space-x-10 mt-16">
            <div data-aos="fade-right" class="md:w-1/2 lg:pl-14">
                <h1 class="text-darken font-semibold text-3xl lg:pr-56"><span class="text-yellow-500">Tools</span> Used
                </h1>
                <p class="text-gray-500 my-4 lg:pr-32">Class has a dynamic set of teaching tools built to be deployed
                    Optimizely is an experimentation platform that enables you to test and optimize different elements of
                    your website, such as layout, design, content, and functionality. </p>
            </div>
            <img data-aos="fade-left" class="md:w-3/2" width="400" src="img/corn.png">
        </div>


        <!-- Latest News and Resources -->
        <div data-aos="zoom-in" class="mt-16 text-center">
            <h1 class="text-darken text-2xl font-semibold">Latest News and Resources</h1>
            <p class="text-gray-500 my-5">See the developments that have occurred to Skillines in the world</p>
        </div>
        <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">
            <div class="lg:w-6/12">
                <img class="w-full mb-6" src="img/water.jpeg">
                <span class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">NEWS</span>
                <h1 class="text-gray-800 font-semibold my-3 text-xl">Title: Ethiopia Launches
                    Ambitious Green Energy Initiative to Tackle Climate Change
                </h1>
                <p class="text-gray-500 mb-3">In a bold move to combat climate change and promote sustainable development,
                    Ethiopia has announced the launch of a groundbreaking green energy initiative</p>
                <a href="https://www.capitalethiopia.com/2024/04/26/green-energy-summit-promotes-collaboration-and-innovation/"
                    class="underline">Read more</a>
            </div>
            <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="img/dam.jpeg">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">PRESS
                                News</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Hydropower Development</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">Ethiopia plans to continue its investments
                            in hydropower projects, leveraging its rivers and water resources to generate clean and reliable
                            electricity.</p>
                    </div>
                </div>
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="img/solar.jpeg">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Solar Energy Expansion</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">The initiative aims to accelerate the
                            deployment of solar energy systems across the country, particularly in rural and off-grid areas,
                            to improve access to electricity and reduce reliance on traditional fuels.</p>
                    </div>
                </div>
                <div class="flex space-x-5">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="img/geothermal.jpeg">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">NEWS</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">Geothermal Exploration</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">The initiative includes plans to explore
                            and develop Ethiopia's geothermal energy resources, tapping into the country's geothermal
                            hotspots to produce clean and sustainable energy.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
            <div class="absolute inset-x-0 top-[-10rem] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]"
                aria-hidden="true">
                <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-40rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <div class="mx-auto max-w-2xl text-center">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Contact sales</h2>
                <p class="mt-2 text-lg leading-8 text-gray-600">Aute magna irure deserunt veniam aliqua magna enim
                    voluptate.</p>
            </div>
            <form action="#" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                    <div>
                        <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">First
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="first-name" id="first-name" autocomplete="given-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div>
                        <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Last
                            name</label>
                        <div class="mt-2.5">
                            <input type="text" name="last-name" id="last-name" autocomplete="family-name"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="company" class="block text-sm font-semibold leading-6 text-gray-900">Company</label>
                        <div class="mt-2.5">
                            <input type="text" name="company" id="company" autocomplete="organization"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                        <div class="mt-2.5">
                            <input type="email" name="email" id="email" autocomplete="email"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">Phone
                            number</label>
                        <div class="relative mt-2.5">
                            <div class="absolute inset-y-0 left-0 flex items-center">
                                <label for="country" class="sr-only">Country</label>
                                <select id="country" name="country"
                                    class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input type="tel" name="phone-number" id="phone-number" autocomplete="tel"
                                class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="message" class="block text-sm font-semibold leading-6 text-gray-900">Message</label>
                        <div class="mt-2.5">
                            <textarea name="message" id="message" rows="4"
                                class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                    </div>
                    <div class="flex gap-x-4 sm:col-span-2">
                        <div class="flex h-6 items-center">
                            <!-- Enabled: "bg-indigo-600", Not Enabled: "bg-gray-200" -->
                            <button type="button"
                                class="bg-gray-200 flex w-8 flex-none cursor-pointer rounded-full p-px ring-1 ring-inset ring-gray-900/5 transition-colors duration-200 ease-in-out focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                role="switch" aria-checked="false" aria-labelledby="switch-1-label">
                                <span class="sr-only">Agree to policies</span>
                                <!-- Enabled: "translate-x-3.5", Not Enabled: "translate-x-0" -->
                                <span aria-hidden="true"
                                    class="translate-x-0 h-4 w-4 transform rounded-full bg-white shadow-sm ring-1 ring-gray-900/5 transition duration-200 ease-in-out"></span>
                            </button>
                        </div>
                        <label class="text-sm leading-6 text-gray-600" id="switch-1-label">
                            By selecting this, you agree to our
                            <a href="#" class="font-semibold text-indigo-600">privacy&nbsp;policy</a>.
                        </label>
                    </div>
                </div>
                <div class="mt-10">
                    <button type="submit"
                        class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Let's
                        talk</button>
                </div>
            </form>
        </div>
    </div>
    <!-- .container -->
@endsection
