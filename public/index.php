<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy Shop - Affordable Online Shopping for Everyone</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js" integrity="sha512-Ysw1DcK1P+uYLqprEAzNQJP+J4hTx4t/3X2nbVwszao8wD+9afLjBQYjz7Uk4ADP+Er++mJoScI42ueGtQOzEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css" integrity="sha512-rd0qOHVMOcez6pLWPVFIv7EfSdGKLt+eafXh4RO/12Fgr41hDQxfGvoi1Vy55QIVcQEujUE1LQrATCLl2Fs+ag==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://i.icomoon.io/public/temp/0023105fa6/e-commerce/style.css">
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const swiper = new Swiper('#hero .swiper', {
                slidesPerView: 1,
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                    pauseOnMouseEnter: true,
                }
            });
        })
        document.addEventListener("DOMContentLoaded", () => {
            const swiper = new Swiper('#new_arrivals .swiper', {
                slidesPerView: 2,
                spaceBetween: 30,
                loop: true,
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                autoplay: {
                    delay: 5000,
                    pauseOnMouseEnter: true,
                },
                breakpoints: {
                    640: {
                        slidesPerView: 3
                    },
                    768: {
                        slidesPerView: 4
                    },
                    1024: {
                        slidesPerView: 5
                    },
                    1280: {
                        slidesPerView: 6
                    }
                }
            });
        })
    </script>
</head>

<body>
    <header>
        <ul class="flex h-16 py-2 md:h-20 md:py-4 items-center gap-3 lg:gap-5 px-1 md:px-2 lg:px-5 shadow-sm">
            <li class="w-24 md:w-32 lg:w-40 h-full">
                <img src="/images/logo.png" alt="Logo" class="w-full h-full object-contain">
            </li>
            <li class="flex-1 h-full">
                <form action="/search" class="h-full relative">
                    <input type="text" name="q" id="q" class="bg-gray-100 focus:bg-white shadow-sm max-w-[800px] w-full rounded h-full pl-12 placeholder:text-gray-400 outline-none" placeholder="What are you looking for?">
                    <label for="q" class="absolute top-0 left-0 w-12 h-full flex items-center justify-center text-center text-gray-400"><i class="fa-solid fa-magnifying-glass"></i></label>
                </form>
            </li>
            <li class="shrink-0 text-lg lg:text-xl"><i class="fa-solid fa-cart-shopping"></i></li>
            <li class="shrink-0 text-lg lg:text-xl"><i class="fa-regular fa-heart"></i></li>
            <li class="shrink-0 px-2 lg:px-4 hidden sm:block"><span class="block w-0.5 h-10 bg-slate-300"></span></li>
            <li class="shrink-0 h-20">
                <button class="flex items-center gap-2 lg:px-2 transition-all hover:bg-gray-100 h-full">
                    <div class="h-10 w-10 rounded-full bg-cyan-600"></div>
                    <div class="hidden md:block">
                        <div class="text-xs text-gray-500">Welcome Back!</div>
                        <div class="font-bold text-lg">John Doe</div>
                    </div>
                    <div><i class="fa-solid fa-chevron-down"></i></div>
                </button>
            </li>
        </ul>
    </header>
    <div id="hero">
        <div class="swiper w-full h-[350px] sm:h-[400px] md:h-[500px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="/images/hero/hero-1.jpg" alt="Hero" class="block object-cover h-full w-full"></div>
                <div class="swiper-slide"><img src="/images/hero/hero-2.jpg" alt="Hero" class="block object-cover h-full w-full"></div>
                <div class="swiper-slide"><img src="/images/hero/hero-3.jpg" alt="Hero" class="block object-cover h-full w-full"></div>
                <div class="swiper-slide"><img src="/images/hero/hero-4.jpg" alt="Hero" class="block object-cover h-full w-full"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <main class="max-w-screen-xl w-full mx-auto overflow-hidden">
        <div id="categories" class="py-6 sm:py-8 md:py-10">
            <h2 class="mb-6 sm:mb-8 md:mb-10 flex items-center gap-4 justify-center">
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
                <span class="text-2xl font-display text-cyan-600 font-semibold">Categories</span>
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
            </h2>
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-5 px-1">
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-furniture text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Furniture</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-clothes text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Clothing</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-health text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Health & Beauty</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-kitchen text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Home & Kitchen</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-watch text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Accessories</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-electronics text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Electronics</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-sports text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Sports</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-book text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Books</span>
                </a>
                <a href="#" class="block text-sm sm:text-base rounded-lg border border-cyan-600 p-2 h-14 sm:h-16 flex items-center transition-all hover:bg-gray-100">
                    <span class="icon-lego text-cyan-600 text-2xl sm:text-3xl mr-2"></span>
                    <span>Toys & Games</span>
                </a>
            </div>
        </div>
        <div id="new_arrivals" class="py-6 sm:py-8 md:py-10">
            <h2 class="mb-6 sm:mb-8 md:mb-10 flex items-center gap-4 justify-center">
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
                <span class="text-2xl font-display text-cyan-600 font-semibold">New Arrivals</span>
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
            </h2>
            <div class="swiper w-full">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-1.jpg" alt="Running Shoes" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Shoes</span>
                                <span class="text-lg font-bold ml-auto">$35.00</span>
                            </div>
                            <h3 class="text-lg font-semibold">Running Shoes</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-2.jpg" alt="Daily Journal" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Books</span>
                                <span class="text-lg font-bold ml-auto">$8.65</span>
                            </div>
                            <h3 class="text-lg font-semibold">Daily Journal</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-3.jpg" alt="Bottle of Water" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Sports</span>
                                <span class="text-lg font-bold ml-auto">$3.15</span>
                            </div>
                            <h3 class="text-lg font-semibold">Bottle of Water</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-4.jpg" alt="4 Blocks of Soup" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Health</span>
                                <span class="text-lg font-bold ml-auto">$2.99</span>
                            </div>
                            <h3 class="text-lg font-semibold">4 Blocks of Soup</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-5.jpg" alt="Summer Shoes" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Shoes</span>
                                <span class="text-lg font-bold ml-auto">$16.00</span>
                            </div>
                            <h3 class="text-lg font-semibold">Summer Shoes</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-6.jpg" alt="Face Wash" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Health</span>
                                <span class="text-lg font-bold ml-auto">$12.00</span>
                            </div>
                            <h3 class="text-lg font-semibold">Face Wash</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-7.jpg" alt="Colorful Flowers" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Furniture</span>
                                <span class="text-lg font-bold ml-auto">$2.50</span>
                            </div>
                            <h3 class="text-lg font-semibold">Colorful Flowers</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-8.jpg" alt="Golden Jewlery" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Accessories</span>
                                <span class="text-lg font-bold ml-auto">$49.99</span>
                            </div>
                            <h3 class="text-lg font-semibold">Golden Jewlery</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-9.jpg" alt="Bright Colors Shoes" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Shoes</span>
                                <span class="text-lg font-bold ml-auto">$32.50</span>
                            </div>
                            <h3 class="text-lg font-semibold">Bright Colors Shoes</h3>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div>
                            <div class="relative pt-[100%] overflow-hidden rounded-lg mb-2">
                                <img src="/images/products/product-10.jpg" alt="4 Coffee Mugs" class="absolute inset-0 block object-cover w-full h-full">
                            </div>
                            <div class="flex items-center">
                                <span class="text-sm text-gray-400 font-medium italic underline">Kitchen</span>
                                <span class="text-lg font-bold ml-auto">$5.00</span>
                            </div>
                            <h3 class="text-lg font-semibold">4 Coffee Mugs</h3>
                        </div>
                    </div>

                </div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
        <div id="banner_1" class="pt-[60%] md:pt-[40%] lg:pt-[28.12%] relative overflow-hidden rounded mb-10">
            <img src="/images/banner-1.jpg" alt="Banner" class="absolute w-full h-full object-cover inset-0">
            <div class="absolute inset-0 w-full h-full bg-gradient-to-l from-black to-black/20 flex items-center justify-end p-10">
                <h1 class="w-4/5 md:w-2/3 lg:w-1/2 font-display text-white font-bold text-right uppercase text-4xl md:text-5xl lg:text-6xl leading-tight">enjoy a big screen in your living room</h1>
            </div>
        </div>
        <div class="flex gap-5 sm:h-[400px] md:h-[600px] lg:h-[800px] mb-10 flex-wrap sm:flex-nowrap">
            <div class="w-full sm:w-2/5 bg-cyan-400 rounded-lg h-full flex sm:flex-col items-center sm:gap-10">
                <img src="/images/delivery.png" alt="Watch" class="w-1/2">
                <h3 class="w-1/2 sm:w-full text-white text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-bold px-5 leading-tight">Your Style,<br>Delivered.<br>Exclusively<br>Online.</h3>
            </div>
            <div class="flex-1 overflow-hidden flex flex-col h-full max-h-full gap-5">
                <div class="h-60 sm:h-1/2 md:h-2/5 rounded-lg bg-gray-100 flex">
                    <img src="/images/watch.png" alt="Watch" class="h-full">
                    <div class="flex-1 flex flex-col justify-center gap-0 md:gap-1 lg:gap-2 px-2 lg:px-5 items-start">
                        <div class="font-light text-sm sm:text-base md:text-lg lg:text-xl">Timeless Elegance</div>
                        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl">Discover our accessories collection</h3>
                        <a href="#" class="overflow-hidden group relative py-2 lg:py-3 px-4 rounded bg-cyan-500 font-medium text-white lg:mt-5">
                            <span class="absolute w-full h-full left-0 top-full group-hover:top-0 transition-all bg-cyan-600"></span>
                            <span class="relative">Shop Now</span>
                        </a>
                    </div>
                </div>
                <div class="h-60 sm:flex-1 overflow-hidden rounded-lg bg-gray-100/50 flex items-center">
                    <div class="flex-1 flex flex-col justify-center gap-0 md:gap-1 lg:gap-2 px-2 lg:px-5 items-start">
                        <div class="font-light text-sm sm:text-base md:text-lg lg:text-xl">Find your perfect pair</div>
                        <h3 class="font-bold text-2xl md:text-3xl lg:text-4xl">Explore our shoes collection</h3>
                        <a href="#" class="overflow-hidden group relative py-2 lg:py-3 px-4 rounded bg-cyan-500 font-medium text-white lg:mt-5">
                            <span class="absolute w-full h-full left-0 top-full group-hover:top-0 transition-all bg-cyan-600"></span>
                            <span class="relative">Shop Now</span>
                        </a>
                    </div>
                    <img src="/images/shoe.png" alt="Watch" class="h-2/3">
                </div>
            </div>
        </div>
        <div>
            <h2 class="mb-10 flex items-center gap-4 justify-center">
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
                <span class="text-2xl font-display text-cyan-600 font-semibold">Featured Deals</span>
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
            </h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-10">
                <div class="rounded-lg bg-blue-500 p-3 md:p-5 flex gap-3 md:gap-5 lg:gap-10">
                    <div class="flex-1 flex flex-col items-start">
                        <img src="images/logo-white.png" alt="Logo White" class="w-40 mb-5">
                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-teal-100">Welcome offer just for you</h3>
                        <p class="font-light text-teal-100 my-2 sm:my-3 md:my-5 text:sm sm:text-base md:text-lg">Enjoy a special descount on your first purchase.</p>
                        <a href="#" class="overflow-hidden group relative py-2 lg:py-3 px-4 rounded bg-cyan-500 font-medium text-white mt-5">
                            <span class="absolute w-full h-full left-0 top-full group-hover:top-0 transition-all bg-cyan-600"></span>
                            <span class="relative">Shop Now</span>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="/images/shopping-bags.png" class="w-40 lg:w-48">
                    </div>
                </div>
                <div class="rounded-lg bg-cyan-500 p-3 md:p-5 flex gap-3 md:gap-5">
                    <div class="flex-1 flex flex-col items-start">
                        <img src="images/logo-white.png" alt="Logo White" class="w-40 mb-5">
                        <h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-white">Free delivery offer awaiting for you</h3>
                        <p class="font-light text-white my-2 sm:my-3 md:my-5 text:sm sm:text-base md:text-lg">Free delivery on all the electronics.</p>
                        <a href="#" class="overflow-hidden group relative py-2 lg:py-3 px-4 rounded bg-blue-500 font-medium text-white mt-5">
                            <span class="absolute w-full h-full left-0 top-full group-hover:top-0 transition-all bg-blue-600"></span>
                            <span class="relative">Shop Now</span>
                        </a>
                    </div>
                    <div class="flex justify-center items-center">
                        <img src="/images/free-delivery.png" class="w-40 lg:w-60">
                    </div>
                </div>
            </div>
        </div>
        <div id="brapy-6 sm:py-8 md:nds" class="py-10">
            <h2 class="mb-10 flex items-center gap-4 justify-center">
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
                <span class="text-2xl font-display text-cyan-600 font-semibold">Brands</span>
                <span class="text-sm text-gray-500 flex gap-0.5 items-center">
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                    <i class="fa-solid fa-ellipsis-vertical"></i>
                </span>
            </h2>
            <div class="grid grid-cols-3 sm:grid-cols-4 md:grid-cols-5 lg:grid-cols-6 gap-5">
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/armani.png" alt="Armani" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/asus.png" alt="Asus" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/blackberry.png" alt="BlackBerry" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/boss.png" alt="Boss" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/burton.png" alt="Burton" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/calvin.png" alt="Calvin" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/converse.png" alt="Converse" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/fila.png" alt="Fila" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/htc.png" alt="Converse" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/lenovo.png" alt="Lenovo" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/samsung.png" alt="Samsung" class="w-full h-full object-cover">
                </a>
                <a href="#" class="block rounded-lg border p-5 h-28 flex items-center transition-all hover:border-black">
                    <img src="/images/brands/sony.png" alt="Sony" class="w-full h-full object-cover">
                </a>
            </div>
        </div>
    </main>
    <footer>
        <div class="bg-cyan-50">
            <div class="max-w-screen-xl w-full mx-auto flex py-10 flex items-center flex-wrap lg:flex-nowrap justify-center lg:justify-start">
                <div class="w-full lg:mr-auto mb-2 lg:mb-0 text-center lg:text-left">
                    <div class="text-lg md:text-xl lg:text-2xl font-bold mb-2">We're always here to help</div>
                    <div class="font-light text-gray-500 md:text-lg lg:text-lg">You can get help by choosing from any of these options</div>
                </div>
                <div class="flex w-full sm:w-auto justify-center mb-2 sm:mb-0 sm:justify-start">
                    <div class="text-cyan-500 flex justify-center items-center text-center text-xl md:text-2xl lg:text-3xl"><span class="icon-question"></span></div>
                    <div class="px-2 md:px-3 lg:px-4">
                        <div class="font-light text-gray-500 mb-1">Help Center</div>
                        <div class="font-medium whitespace-nowrap">help.********.com</div>
                    </div>
                </div>
                <div class="flex w-full sm:w-auto justify-center mb-2 sm:mb-0 sm:justify-start">
                    <div class="text-cyan-500 flex justify-center items-center text-center text-xl md:text-2xl lg:text-3xl"><span class="icon-phone"></span></div>
                    <div class="px-2 md:px-3 lg:px-4">
                        <div class="font-light text-gray-500 mb-1">Phone</div> 
                        <div class="font-medium whitespace-nowrap">+2126 12 345 678</div>
                    </div>
                </div>
                <div class="flex w-full sm:w-auto justify-center mb-2 sm:mb-0 sm:justify-start">
                    <div class="text-cyan-500 flex justify-center items-center text-center text-xl md:text-2xl lg:text-3xl"><span class="icon-mail"></span></div>
                    <div class="px-2 md:px-3 lg:px-4">
                        <div class="font-light text-gray-500 mb-1">Email Support</div>
                        <div class="font-medium whitespace-nowrap">online@********.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-screen-xl w-full mx-auto">
            <div class="py-10 grid grid-cols-1 sm:grid-cols-2">
                <div class="flex flex-col sm:items-start items-center mb-5 sm:mb-0">
                    <img src="/images/logo.png" alt="Logo" class="h-16 mb-5 sm:mb-10">
                    <div class="text-gray-500 flex gap-5 text-2xl pl-1">
                        <a href="#"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    </div>
                </div>
                <div class="grid grid-cols-3">
                    <div class="flex flex-col gap-5 pl-1">
                        <div class="font-bold">Menu</div>
                        <a href="#">Link Page</a>
                        <a href="#">Link Page</a>
                    </div>
                    <div class="flex flex-col gap-5 pl-1">
                        <div class="font-bold">Menu</div>
                        <a href="#">Link Page</a>
                        <a href="#">Link Page</a>
                    </div>
                    <div class="flex flex-col gap-5 pl-1">
                        <div class="font-bold">Menu</div>
                        <a href="#">Link Page</a>
                        <a href="#">Link Page</a>
                        <a href="#">Link Page</a>
                    </div>
                </div>
            </div>
            <div class="flex items-center text-sm sm:text-base md:text-lg py-5 sm:py-10">
                <div class="mr-auto">&copy; 2024. All right reserved.</div>
                <div class="flex gap-3 sm:gap-10">
                    <a href="#">Terms</a>
                    <a href="#">Cookies</a>
                    <a href="#">Privacy Policy</a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>