<!doctype html>
<?php
require 'code.php';
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Header-Sarted---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <header>

        <!--------------------------------------------------- Main Logo Section Started -------------------------------------------------------->

        <section class="main_logo_section ">
            <div
                class="main_logo_div flex items-center w-full justify-evenly text-[12px] mt-[40px] mb-[58px] md:mb-[60px]">
                <a href="">
                    <img class="main_logo_img w-32 m-auto" src="img/new-new-logo2.png" alt="">
                </a>
            </div>
        </section>

        <!--------------------------------------------------- Main Logo Section Over ---------------------------------------------------------->

        <!--------------------------------------------------- Stepper Section Started ---------------------------------------------------------->
        <section>
            <div class="stepper w-full">
                <div class="flex md:hidden border mx-[30px] p-[10px] mb-[30px] rounded-[10px]">
                    <div class="h-[60px] w-[60px]">
                        <svg class="CircularProgressbar " viewBox="0 0 100 100" data-test-id="CircularProgressbar">
                            <path class="CircularProgressbar-trail" d="
                            M 50,50
                            m 0,-46
                            a 46,46 0 1 1 0,92
                            a 46,46 0 1 1 0,-92
                          " stroke-width="8" fill-opacity="0"
                                style="stroke: rgb(214, 214, 214); stroke-linecap: butt; stroke-dasharray: 289.027px, 289.027px; stroke-dashoffset: 0px;">
                            </path>
                            <path class="CircularProgressbar-path" d="
                            M 50,50
                            m 0,-46
                            a 46,46 0 1 1 0,92
                            a 46,46 0 1 1 0,-92
                          " stroke-width="8" fill-opacity="0"
                                style="stroke: rgb(28, 215, 97); stroke-linecap: butt; transition-duration: 0.5s; stroke-dasharray: 289.027px, 289.027px; stroke-dashoffset: 192.684px;">
                            </path><text class="CircularProgressbar-text" x="50" y="50"
                                style="fill: rgb(28, 215, 97); font-size: 16px;">1 of 3</text>
                        </svg>
                    </div>
                    <div class="flex-grow flex items-center justify-center flex-col">
                        <div class="text-right font-bold text-[16px]">Design</div>
                        <div class="text-right text-[12px]">
                            "Next:""Add contact details"
                        </div>
                    </div>

                </div>

                <div class="hidden md:flex justify-center">
                    <div class="flex gap-[10px] items-center mb-[22px] md:mb-[49px]">
                        <div
                            class="bg-electricGreen h-[17px] w-[17px] md:h-[23px] md:w-[23px] flex items-center justify-center rounded-full text-white text-[10px]">
                            1</div>
                        <div class="text-electricGreen text-[8px] md:text-[18px]">Design</div>
                        <div class="mr-[15px] ml-[5px] text-[#BEBEBE] text-[13px] md:text-[18px]">-></div>
                    </div>
                    <div class="flex gap-[10px] items-center mb-[22px] md:mb-[49px]">
                        <div id="round-step2"
                            class="bg-[#BEBEBE]  h-[17px] w-[17px] md:h-[23px] md:w-[23px] flex items-center justify-center rounded-full text-white text-[10px]">
                            2</div>
                        <div id="second-step-text" class="text-[#BEBEBE] text-[8px] md:text-[18px]">Add contact details
                        </div>
                        <div class="mr-[15px] ml-[5px] text-[#BEBEBE] text-[13px] md:text-[18px]">-></div>
                    </div>
                    <div class="flex gap-[10px] items-center mb-[22px] md:mb-[49px]">
                        <div id="round-step3"
                            class="bg-[#BEBEBE] h-[17px] w-[17px] md:h-[23px] md:w-[23px] flex items-center justify-center rounded-full text-white text-[10px]">
                            3</div>
                        <div id="third-step-text" class="text-[#BEBEBE] text-[8px] md:text-[18px]">Save to wallet</div>
                    </div>
                </div>

            </div>


        </section>
        <!--------------------------------------------------- Stepper Section Over ---------------------------------------------------------->

    </header>
    <!---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Header-Over---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->

    <div class="flex flex-col items-center" id="fist_second_step">

        <!------------------------------------------------- Section 3 started ------------------------------------------------------------->

        <section class="section_3">
            <div
                class="hidden md:block text-[25px] md:text-[50px] heading-[58px] font-[700] mb-[12px] md:mb-[17px] text-center max-w-[682px] px-[30px]">
                Create sample card</div>
            <div
                class="hidden md:block text-[16px] heading-[25px] mb-[38px] md:mb-[40px] font-[400] text-center max-w-[287px] md:max-w-full">
                Design a sample Doorway and save it to your digital wallet</div>
            <div
                class="block md:hidden text-[25px] md:text-[50px] heading-[58px] font-[700] mb-[12px] md:mb-[17px] text-center max-w-[682px] px-[30px]">
                Create sample card</div>
            <div
                class="block md:hidden text-[16px] heading-[25px] mb-[38px] md:mb-[40px] font-[400] text-center max-w-[287px] md:max-w-full">
                Design a sample Doorway and save it to your digital wallet</div>
        </section>

        <!----------------------------------------------------- Section 3 Over ------------------------------------------------------------->

        <!------------------------------------------------- Section 4 started ------------------------------------------------------------->

        <section class="section_4 mb-[80px] md:mb-[250px] w-full">
            <div class="flex flex-col md:flex-row gap-[44px] md:gap-[75px] items-center md:items-start justify-center">
                <div class="flex flex-col items-center">
                    <div id="overlay" class="overlay ">
                        <div class="overlay-content">
                            <img id="overlay-image" src="" alt="Overlay Image">
                            <button onclick="closeOverlay()" class="close-btn">Close</button>
                        </div>
                    </div>

                    <div class="m-auto w-[285px]" id="find-company-branding-div">
                        <div class="w-[285px] mb-[22px]">
                            <div data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                                type="button"
                                class="bg-[rgb(30 215 97)] text-white cursor-pointer text-[15px] font-[500] heading-[14px] rounded-[5px] py-[12px] md:py-[14px] text-center"
                                style="background-color: rgb(30, 215, 97);">
                                Find Company Branding</div>
                        </div>

                        <a href="#" class="text-electricGreen cursor-pointer  mb-[46px] text-center w-full inline-block"
                            onclick="openOverlay('img/Design-Your-Doorway-Diagram-1.png')">View design guide -></a>
                    </div>

                    <div
                        class="flex flex-col md:flex-row gap-[44px] md:gap-[75px] items-center md:items-start justify-center">
                        <div class="w-[330px]">
                            <div class="flex md:hidden justify-center">
                                <div id="view-card-btn"
                                    class="border border-black py-[8px] px-[20px] rounded-[4px] flex items-center gap-[7px] cursor-pointer text-[15px] "
                                    onclick="show_div()">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em" height="1em"
                                        fill="currentColor">
                                        <path
                                            d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z">
                                        </path>
                                        <path
                                            d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z">
                                        </path>
                                    </svg>
                                    view Card
                                </div>
                            </div>
                            <div id="responsive-card" class="hidden md:block">
                                <div class="relative" style="max-width: 330px;">
                                    <div id="profile" role="tabpanel" aria-labelledby="profile-tab"
                                        class="visible w-[330px] shadow-lg text-white rounded-2xl"
                                        style="background-color: rgb(30, 215, 97);">
                                        <div class="flex flex-col h-full justify-between pb-6">
                                            <div class=" mt-3 ml-3 w-1/6"><span
                                                    class="block sm:w-5 mt-3 ml-3 w-1/6"><svg id="card-first-svg"
                                                        version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                        x="0" y="0" viewBox="0 0 429.6 687.2">
                                                        <path
                                                            d="M56.7 61.8c.7-1.9 1.3-3.6 1.8-5.1 100.4-39.6 212.1-39.7 312.6 0 .6 1.6 1.2 3.4 1.9 5.3 3.2 9.6 7.6 24 12 42.8 8.8 37.7 17.7 93.2 17.7 163.4s-8.9 125.7-17.7 163.4c-4.4 18.9-8.8 33.3-12 42.8-.7 2-1.3 3.8-1.9 5.3-100.4 39.6-212.2 39.6-312.6 0-.5-1.5-1.1-3.2-1.8-5.1-3.2-9.3-7.6-23.5-12-42.2C35.9 395.1 27 339.7 27 268.3S35.9 141.4 44.7 104c4.4-18.6 8.8-32.8 12-42.2z"
                                                            style="fill: none; stroke: rgb(255, 255, 255); stroke-width: 54;">
                                                        </path>
                                                        <path fill="#ffffff"
                                                            d="M61.9 539.8c99.1 34 206.7 34 305.8 0 8.2 23.9-4.5 50.2-29.1 56.3-81.3 20.1-166.3 20.1-247.6 0-24.6-6.1-37.3-32.4-29.1-56.3z"
                                                            style="fill-rule: evenodd; clip-rule: evenodd;"></path>
                                                        <path fill="#ffffff"
                                                            d="M92.1 626.3c80.6 20.1 164.8 20.1 245.4 0 6.1 24.5-8.8 49.6-33.7 53.7-58.9 9.6-119 9.6-177.9 0-25-4.1-39.9-29.2-33.8-53.7z"
                                                            style="fill-rule: evenodd; clip-rule: evenodd;"></path>
                                                        <path fill="#ffffff"
                                                            d="M297.3 231.6c20.2 0 36.6 16.4 36.6 36.6 0 20.2-16.4 36.6-36.6 36.6-20.2 0-36.6-16.4-36.6-36.6-.1-20.2 16.3-36.6 36.6-36.6z">
                                                        </path>
                                                    </svg></span></div>
                                            <div
                                                class="items-center justify-center overflow-hidden flex aspect-[1033/407] my-[15px]">
                                                <span class="flex items-center px-6 w-full aspect-[3/1]">
                                                    <div class="mx-auto w-2/3"><svg id="card-second-svg"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.7 31.2">
                                                            <path fill="#ffffff"
                                                                d="M-73.4-24.1h5c1.4 0 2.6-.2 3.7-.6 1.1-.4 2-.9 2.7-1.7.7-.7 1.3-1.6 1.7-2.6.4-1 .6-2.2.6-3.6 0-1.3-.2-2.4-.5-3.5-.4-1-.9-1.9-1.6-2.7-.7-.8-1.6-1.3-2.7-1.7-1.1-.4-2.3-.6-3.8-.6h-5v17zm-4.6 3.9V-45h9.6c1.9 0 3.6.3 5.2.8s3 1.3 4.2 2.4c1.2 1 2.1 2.3 2.7 3.9.7 1.5 1 3.3 1 5.3 0 1.8-.3 3.5-.9 5.1-.6 1.5-1.4 2.8-2.5 3.9s-2.5 1.9-4.1 2.5c-1.6.6-3.5.9-5.6.9H-78zm24.8-9.4c0-1.4.3-2.7.8-3.9.5-1.2 1.2-2.3 2.1-3.2.9-.9 2-1.6 3.3-2.1 1.3-.5 2.6-.8 4.1-.8 1.5 0 2.9.3 4.2.8 1.3.5 2.4 1.2 3.3 2.1.9.9 1.6 2 2.1 3.2.5 1.2.8 2.5.8 3.9s-.3 2.7-.8 3.9c-.5 1.2-1.2 2.3-2.1 3.2-.9.9-2 1.6-3.3 2.1-1.3.5-2.7.8-4.2.8s-2.9-.3-4.1-.8c-1.3-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-1.9-2.1-3.2-.7-1.2-.9-2.5-.9-3.9zm4.4 0c0 .9.2 1.7.5 2.5.3.7.7 1.4 1.3 1.9.5.5 1.2 1 1.9 1.3.7.3 1.5.5 2.3.5.8 0 1.6-.1 2.3-.4.7-.3 1.3-.7 1.9-1.3.5-.5 1-1.2 1.3-1.9.3-.8.5-1.6.5-2.5 0-.9-.2-1.7-.5-2.4-.3-.8-.7-1.4-1.3-1.9-.5-.5-1.2-1-1.9-1.3-.7-.3-1.5-.5-2.3-.5-.8 0-1.6.2-2.3.5-.7.3-1.3.7-1.9 1.3-.5.5-1 1.2-1.3 1.9-.3.6-.5 1.4-.5 2.3zm19-3.9c-.5 1.2-.8 2.5-.8 3.9s.3 2.7.8 3.9c.5 1.2 1.2 2.3 2.1 3.2.9.9 2 1.6 3.2 2.1 1.3.5 2.6.8 4.1.8 1.5 0 2.9-.3 4.2-.8 1.3-.5 2.4-1.2 3.3-2.1.9-.9 1.6-1.9 2.1-3.2.5-1.2.8-2.5.8-3.9s-.3-2.7-.8-3.9c-.5-1.2-1.2-2.3-2.1-3.2-.9-.9-2-1.6-3.3-2.1-1.3-.5-2.6-.8-4.2-.8-1.5 0-2.9.3-4.1.8-1.3.5-2.4 1.2-3.3 2.1-.8 1-1.5 2-2 3.2zm4.1 6.4c-.3-.8-.5-1.6-.5-2.5s.2-1.7.5-2.5c.3-.7.7-1.4 1.3-1.9.5-.5 1.2-1 1.9-1.3.7-.3 1.5-.5 2.3-.5.8 0 1.6.2 2.3.5.7.3 1.3.7 1.9 1.3.5.5 1 1.2 1.3 1.9.3.7.5 1.6.5 2.4 0 .9-.2 1.7-.5 2.5s-.7 1.4-1.3 1.9c-.5.5-1.2 1-1.9 1.3-.7.3-1.5.4-2.3.4-.8 0-1.6-.2-2.3-.5-.7-.3-1.3-.7-1.9-1.3-.5-.3-1-1-1.3-1.7zm29.7-8L2.6-39c-1.2 0-2.2.2-3.1.6-1 .4-1.8 1-2.4 1.6l-.4-2.2h-3.6v18.7h4.4v-9c0-1 .1-1.8.4-2.6.3-.7.6-1.3 1.1-1.8.5-.5 1.1-.9 1.8-1.1.7-.3 1.5-.4 2.3-.4l.9.1zM35.3-39h-4.8l-4.3 12.9h-.1L22-38.8h-3.3l-4.1 12.7h-.1L10.2-39H5.4l6.7 18.7h4l4.2-12 4.3 12h4L35.3-39zm4.3 9.4c0 .9.2 1.7.5 2.5s.7 1.4 1.3 1.9c.5.5 1.2 1 1.9 1.3.7.3 1.5.4 2.4.4.8 0 1.6-.1 2.3-.4.7-.3 1.4-.7 1.9-1.3.5-.5 1-1.2 1.3-1.9.3-.8.5-1.6.5-2.5 0-.9-.2-1.7-.5-2.4-.3-.8-.7-1.4-1.3-1.9-.5-.5-1.2-1-1.9-1.3-.7-.3-1.5-.5-2.3-.5s-1.6.2-2.4.5c-.7.3-1.4.7-1.9 1.3-.5.5-1 1.2-1.3 1.9-.3.7-.5 1.5-.5 2.4zm-4.4 0c0-1.4.2-2.7.7-3.9.5-1.2 1.2-2.3 2-3.2.9-.9 1.9-1.6 3.2-2.1 1.2-.5 2.6-.8 4.1-.8.7 0 1.4.1 2 .2.6.1 1.2.3 1.8.6.6.2 1.1.5 1.5.8.5.3.9.6 1.3 1l.3-2.1h3.8v18.7h-3.8l-.3-2.1c-.4.4-.8.7-1.3 1-.5.3-1 .6-1.5.8-.5.2-1.1.4-1.8.5-.6.1-1.3.2-2 .2-1.5 0-2.9-.3-4.1-.8-1.2-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-1.9-2-3.2-.4-.8-.7-2.1-.7-3.5zM77.7-39H73l-5.3 12.8-.2-.9-5-11.9h-4.9l7.7 18-3.3 7.2h4.8L77.7-39z"
                                                                transform="translate(78 45)"
                                                                style="fill-rule: evenodd; clip-rule: evenodd;"></path>
                                                        </svg>

                                                    </div>
                                                </span>
                                            </div>
                                            <div class="mb-12">
                                                <div class="px-6">
                                                    <div id="responseDiv" class="text-[12px] uppercase text-white">
                                                        Chief Networking Officer</div>
                                                    <div class="flex gap-x-2">
                                                        <div id="responseDiv2"
                                                            class="text-2xl capitalize  font-extralight text-white">Jane
                                                        </div>
                                                        <div id="responseDiv3"
                                                            class="text-2xl capitalize font-extralight text-white">
                                                            Appleseed</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="bg-white mx-auto rounded-md card-qrcode max-w-[138px] p-[5px]">
                                                <svg height="128" width="128" viewBox="0 0 61 61">
                                                    <path fill="#FFFFFF" d="M0,0 h61v61H0z"
                                                        shape-rendering="crispEdges"></path>
                                                    <path fill="#000000"
                                                        d="M0 0h7v1H0zM16 0h1v1H16zM19 0h1v1H19zM24 0h1v1H24zM32 0h1v1H32zM36 0h1v1H36zM41 0h3v1H41zM45 0h1v1H45zM49 0h1v1H49zM51 0h2v1H51zM54,0 h7v1H54zM0 1h1v1H0zM6 1h1v1H6zM8 1h1v1H8zM10 1h3v1H10zM15 1h5v1H15zM21 1h1v1H21zM23 1h7v1H23zM33 1h6v1H33zM40 1h1v1H40zM44 1h1v1H44zM46 1h2v1H46zM49 1h1v1H49zM51 1h2v1H51zM54 1h1v1H54zM60,1 h1v1H60zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM9 2h2v1H9zM12 2h2v1H12zM16 2h1v1H16zM18 2h2v1H18zM22 2h1v1H22zM24 2h3v1H24zM28 2h3v1H28zM33 2h1v1H33zM36 2h2v1H36zM40 2h2v1H40zM47 2h1v1H47zM50 2h3v1H50zM54 2h1v1H54zM56 2h3v1H56zM60,2 h1v1H60zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h2v1H8zM11 3h3v1H11zM15 3h6v1H15zM24 3h2v1H24zM27 3h1v1H27zM30 3h1v1H30zM32 3h1v1H32zM36 3h2v1H36zM41 3h1v1H41zM43 3h1v1H43zM45 3h1v1H45zM47 3h4v1H47zM52 3h1v1H52zM54 3h1v1H54zM56 3h3v1H56zM60,3 h1v1H60zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM12 4h3v1H12zM21 4h1v1H21zM24 4h9v1H24zM35 4h3v1H35zM39 4h4v1H39zM44 4h2v1H44zM47 4h1v1H47zM49 4h3v1H49zM54 4h1v1H54zM56 4h3v1H56zM60,4 h1v1H60zM0 5h1v1H0zM6 5h1v1H6zM8 5h1v1H8zM12 5h1v1H12zM14 5h1v1H14zM18 5h2v1H18zM21 5h1v1H21zM23 5h1v1H23zM25 5h4v1H25zM32 5h4v1H32zM38 5h1v1H38zM41 5h1v1H41zM44 5h1v1H44zM46 5h2v1H46zM50 5h1v1H50zM54 5h1v1H54zM60,5 h1v1H60zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h1v1H14zM16 6h1v1H16zM18 6h1v1H18zM20 6h1v1H20zM22 6h1v1H22zM24 6h1v1H24zM26 6h1v1H26zM28 6h1v1H28zM30 6h1v1H30zM32 6h1v1H32zM34 6h1v1H34zM36 6h1v1H36zM38 6h1v1H38zM40 6h1v1H40zM42 6h1v1H42zM44 6h1v1H44zM46 6h1v1H46zM48 6h1v1H48zM50 6h1v1H50zM52 6h1v1H52zM54,6 h7v1H54zM9 7h1v1H9zM14 7h1v1H14zM17 7h5v1H17zM23 7h1v1H23zM25 7h1v1H25zM28 7h1v1H28zM32 7h2v1H32zM35 7h1v1H35zM40 7h3v1H40zM47 7h1v1H47zM50 7h1v1H50zM52 7h1v1H52zM0 8h5v1H0zM6 8h4v1H6zM11 8h1v1H11zM13 8h1v1H13zM15 8h1v1H15zM18 8h1v1H18zM24 8h1v1H24zM27 8h8v1H27zM36 8h1v1H36zM38 8h1v1H38zM41 8h3v1H41zM45 8h1v1H45zM47 8h2v1H47zM50 8h4v1H50zM55 8h1v1H55zM57 8h1v1H57zM59 8h1v1H59zM4 9h2v1H4zM8 9h1v1H8zM10 9h2v1H10zM15 9h1v1H15zM17 9h8v1H17zM28 9h6v1H28zM35 9h3v1H35zM41 9h2v1H41zM44 9h1v1H44zM47 9h3v1H47zM51 9h1v1H51zM53 9h2v1H53zM56 9h1v1H56zM60,9 h1v1H60zM0 10h3v1H0zM4 10h3v1H4zM11 10h1v1H11zM13 10h1v1H13zM20 10h1v1H20zM22 10h3v1H22zM26 10h2v1H26zM29 10h1v1H29zM34 10h1v1H34zM36 10h1v1H36zM38 10h2v1H38zM41 10h2v1H41zM45 10h2v1H45zM49 10h1v1H49zM51 10h2v1H51zM54 10h2v1H54zM59,10 h2v1H59zM0 11h1v1H0zM5 11h1v1H5zM7 11h4v1H7zM12 11h2v1H12zM16 11h1v1H16zM18 11h3v1H18zM23 11h2v1H23zM26 11h2v1H26zM29 11h2v1H29zM33 11h2v1H33zM39 11h2v1H39zM42 11h1v1H42zM44 11h2v1H44zM47 11h2v1H47zM50 11h1v1H50zM55 11h2v1H55zM0 12h1v1H0zM2 12h1v1H2zM4 12h1v1H4zM6 12h2v1H6zM12 12h1v1H12zM15 12h1v1H15zM18 12h4v1H18zM23 12h3v1H23zM27 12h1v1H27zM29 12h1v1H29zM31 12h1v1H31zM33 12h4v1H33zM38 12h1v1H38zM41 12h2v1H41zM45 12h6v1H45zM52 12h2v1H52zM55 12h1v1H55zM58 12h1v1H58zM60,12 h1v1H60zM0 13h1v1H0zM2 13h1v1H2zM4 13h2v1H4zM7 13h1v1H7zM9 13h1v1H9zM14 13h1v1H14zM17 13h1v1H17zM19 13h1v1H19zM21 13h1v1H21zM23 13h2v1H23zM31 13h2v1H31zM35 13h3v1H35zM41 13h4v1H41zM47 13h3v1H47zM51 13h1v1H51zM54 13h1v1H54zM57 13h2v1H57zM0 14h1v1H0zM3 14h1v1H3zM5 14h2v1H5zM9 14h2v1H9zM12 14h1v1H12zM16 14h5v1H16zM22 14h1v1H22zM25 14h1v1H25zM27 14h2v1H27zM31 14h1v1H31zM33 14h1v1H33zM38 14h1v1H38zM41 14h1v1H41zM43 14h2v1H43zM46 14h3v1H46zM51 14h3v1H51zM55 14h1v1H55zM58,14 h3v1H58zM0 15h1v1H0zM2 15h1v1H2zM4 15h1v1H4zM7 15h4v1H7zM12 15h2v1H12zM15 15h4v1H15zM21 15h2v1H21zM24 15h2v1H24zM29 15h2v1H29zM35 15h1v1H35zM39 15h3v1H39zM44 15h3v1H44zM48 15h3v1H48zM52 15h3v1H52zM3 16h2v1H3zM6 16h1v1H6zM9 16h3v1H9zM17 16h2v1H17zM20 16h1v1H20zM22 16h1v1H22zM24 16h2v1H24zM28 16h3v1H28zM35 16h2v1H35zM39 16h1v1H39zM43 16h1v1H43zM45 16h5v1H45zM51 16h1v1H51zM53 16h3v1H53zM57 16h1v1H57zM60,16 h1v1H60zM8 17h1v1H8zM10 17h1v1H10zM12 17h2v1H12zM15 17h1v1H15zM19 17h1v1H19zM21 17h1v1H21zM23 17h1v1H23zM25 17h1v1H25zM28 17h2v1H28zM31 17h2v1H31zM35 17h2v1H35zM39 17h1v1H39zM41 17h5v1H41zM47 17h1v1H47zM51 17h1v1H51zM53 17h7v1H53zM1 18h1v1H1zM4 18h3v1H4zM9 18h1v1H9zM11 18h1v1H11zM13 18h2v1H13zM18 18h3v1H18zM27 18h1v1H27zM33 18h2v1H33zM36 18h3v1H36zM46 18h2v1H46zM49 18h2v1H49zM53 18h2v1H53zM60,18 h1v1H60zM0 19h1v1H0zM3 19h2v1H3zM7 19h1v1H7zM9 19h1v1H9zM12 19h4v1H12zM17 19h2v1H17zM23 19h1v1H23zM26 19h1v1H26zM30 19h1v1H30zM34 19h1v1H34zM36 19h2v1H36zM39 19h2v1H39zM42 19h3v1H42zM46 19h1v1H46zM52 19h5v1H52zM59 19h1v1H59zM1 20h1v1H1zM3 20h2v1H3zM6 20h1v1H6zM11 20h2v1H11zM15 20h4v1H15zM20 20h1v1H20zM25 20h1v1H25zM27 20h3v1H27zM31 20h3v1H31zM36 20h1v1H36zM41 20h1v1H41zM47 20h3v1H47zM51 20h2v1H51zM54 20h1v1H54zM57,20 h4v1H57zM1 21h1v1H1zM4 21h1v1H4zM8 21h6v1H8zM17 21h1v1H17zM23 21h5v1H23zM31 21h3v1H31zM35 21h2v1H35zM41 21h2v1H41zM47 21h1v1H47zM49 21h1v1H49zM51 21h1v1H51zM53 21h4v1H53zM0 22h7v1H0zM9 22h1v1H9zM12 22h1v1H12zM14 22h4v1H14zM20 22h2v1H20zM23 22h2v1H23zM26 22h2v1H26zM29 22h2v1H29zM33 22h1v1H33zM35 22h2v1H35zM38 22h1v1H38zM40 22h2v1H40zM44 22h1v1H44zM46 22h2v1H46zM49 22h2v1H49zM52 22h2v1H52zM56 22h1v1H56zM59,22 h2v1H59zM2 23h1v1H2zM4 23h2v1H4zM7 23h1v1H7zM9 23h2v1H9zM13 23h1v1H13zM15 23h1v1H15zM19 23h1v1H19zM26 23h2v1H26zM29 23h7v1H29zM37 23h1v1H37zM39 23h5v1H39zM45 23h1v1H45zM49 23h1v1H49zM52 23h1v1H52zM54 23h2v1H54zM60,23 h1v1H60zM1 24h1v1H1zM3 24h1v1H3zM6 24h1v1H6zM8 24h2v1H8zM15 24h1v1H15zM17 24h1v1H17zM19 24h1v1H19zM27 24h2v1H27zM30 24h1v1H30zM33 24h2v1H33zM36 24h1v1H36zM43 24h1v1H43zM47 24h2v1H47zM50 24h4v1H50zM55 24h1v1H55zM57 24h1v1H57zM59 24h1v1H59zM0 25h1v1H0zM2 25h3v1H2zM7 25h2v1H7zM10 25h6v1H10zM18 25h1v1H18zM22 25h3v1H22zM27 25h4v1H27zM33 25h1v1H33zM36 25h1v1H36zM40 25h1v1H40zM42 25h1v1H42zM44 25h1v1H44zM47 25h1v1H47zM49 25h1v1H49zM53 25h2v1H53zM56 25h2v1H56zM60,25 h1v1H60zM0 26h1v1H0zM3 26h2v1H3zM6 26h7v1H6zM19 26h1v1H19zM21 26h2v1H21zM25 26h3v1H25zM29 26h1v1H29zM31 26h1v1H31zM34 26h3v1H34zM38 26h2v1H38zM41 26h1v1H41zM44 26h5v1H44zM51 26h1v1H51zM54 26h1v1H54zM56 26h1v1H56zM58,26 h3v1H58zM2 27h1v1H2zM13 27h1v1H13zM16 27h1v1H16zM21 27h3v1H21zM26 27h1v1H26zM29 27h2v1H29zM32 27h1v1H32zM37 27h1v1H37zM39 27h2v1H39zM42 27h1v1H42zM44 27h1v1H44zM48 27h1v1H48zM55 27h2v1H55zM59 27h1v1H59zM1 28h1v1H1zM3 28h6v1H3zM10 28h1v1H10zM12 28h2v1H12zM16 28h4v1H16zM23 28h2v1H23zM27 28h6v1H27zM35 28h3v1H35zM42 28h2v1H42zM46 28h13v1H46zM0 29h1v1H0zM2 29h3v1H2zM8 29h3v1H8zM12 29h1v1H12zM14 29h2v1H14zM18 29h2v1H18zM23 29h4v1H23zM28 29h1v1H28zM32 29h1v1H32zM37 29h1v1H37zM40 29h4v1H40zM47 29h1v1H47zM49 29h1v1H49zM51 29h2v1H51zM56 29h2v1H56zM59 29h1v1H59zM1 30h2v1H1zM4 30h1v1H4zM6 30h1v1H6zM8 30h1v1H8zM12 30h2v1H12zM17 30h5v1H17zM23 30h3v1H23zM27 30h2v1H27zM30 30h1v1H30zM32 30h2v1H32zM36 30h1v1H36zM38 30h2v1H38zM41 30h1v1H41zM44 30h3v1H44zM48 30h1v1H48zM52 30h1v1H52zM54 30h1v1H54zM56 30h1v1H56zM58,30 h3v1H58zM1 31h2v1H1zM4 31h1v1H4zM8 31h1v1H8zM10 31h1v1H10zM13 31h1v1H13zM18 31h1v1H18zM20 31h1v1H20zM24 31h1v1H24zM27 31h2v1H27zM32 31h1v1H32zM40 31h6v1H40zM48 31h1v1H48zM50 31h3v1H50zM56 31h1v1H56zM60,31 h1v1H60zM2 32h1v1H2zM4 32h7v1H4zM15 32h1v1H15zM18 32h4v1H18zM23 32h2v1H23zM27 32h7v1H27zM35 32h2v1H35zM38 32h2v1H38zM41 32h3v1H41zM46 32h3v1H46zM51 32h7v1H51zM59,32 h2v1H59zM1 33h1v1H1zM3 33h1v1H3zM8 33h1v1H8zM11 33h4v1H11zM16 33h1v1H16zM19 33h1v1H19zM24 33h3v1H24zM28 33h2v1H28zM31 33h3v1H31zM35 33h2v1H35zM39 33h5v1H39zM45 33h1v1H45zM47 33h2v1H47zM52 33h2v1H52zM55 33h1v1H55zM57 33h1v1H57zM60,33 h1v1H60zM0 34h1v1H0zM3 34h4v1H3zM8 34h1v1H8zM10 34h1v1H10zM12 34h1v1H12zM15 34h2v1H15zM18 34h2v1H18zM23 34h3v1H23zM27 34h1v1H27zM29 34h2v1H29zM32 34h5v1H32zM38 34h2v1H38zM41 34h1v1H41zM43 34h1v1H43zM45 34h2v1H45zM49 34h3v1H49zM54 34h1v1H54zM59,34 h2v1H59zM0 35h1v1H0zM2 35h4v1H2zM9 35h1v1H9zM11 35h1v1H11zM14 35h1v1H14zM16 35h1v1H16zM19 35h1v1H19zM21 35h1v1H21zM24 35h5v1H24zM34 35h1v1H34zM39 35h6v1H39zM51 35h1v1H51zM54 35h1v1H54zM56 35h1v1H56zM2 36h2v1H2zM5 36h2v1H5zM9 36h3v1H9zM16 36h3v1H16zM20 36h2v1H20zM25 36h1v1H25zM27 36h4v1H27zM35 36h2v1H35zM39 36h1v1H39zM42 36h1v1H42zM47 36h2v1H47zM51 36h1v1H51zM53 36h3v1H53zM57 36h2v1H57zM60,36 h1v1H60zM0 37h6v1H0zM10 37h2v1H10zM14 37h1v1H14zM17 37h1v1H17zM19 37h1v1H19zM22 37h3v1H22zM26 37h3v1H26zM30 37h2v1H30zM33 37h1v1H33zM37 37h1v1H37zM39 37h1v1H39zM41 37h3v1H41zM48 37h2v1H48zM51 37h2v1H51zM54 37h2v1H54zM0 38h2v1H0zM3 38h1v1H3zM6 38h2v1H6zM9 38h2v1H9zM12 38h2v1H12zM15 38h2v1H15zM18 38h1v1H18zM21 38h1v1H21zM25 38h6v1H25zM33 38h1v1H33zM35 38h1v1H35zM43 38h2v1H43zM46 38h6v1H46zM54 38h1v1H54zM56 38h1v1H56zM58,38 h3v1H58zM1 39h1v1H1zM5 39h1v1H5zM7 39h3v1H7zM11 39h1v1H11zM13 39h2v1H13zM17 39h3v1H17zM21 39h1v1H21zM23 39h1v1H23zM26 39h4v1H26zM31 39h1v1H31zM33 39h1v1H33zM35 39h2v1H35zM39 39h2v1H39zM46 39h1v1H46zM49 39h1v1H49zM53 39h1v1H53zM60,39 h1v1H60zM1 40h2v1H1zM4 40h1v1H4zM6 40h6v1H6zM13 40h1v1H13zM15 40h2v1H15zM18 40h1v1H18zM25 40h4v1H25zM30 40h2v1H30zM33 40h4v1H33zM45 40h1v1H45zM47 40h3v1H47zM51 40h1v1H51zM54 40h4v1H54zM60,40 h1v1H60zM0 41h2v1H0zM3 41h3v1H3zM10 41h1v1H10zM12 41h3v1H12zM17 41h4v1H17zM22 41h3v1H22zM27 41h3v1H27zM32 41h2v1H32zM35 41h3v1H35zM39 41h1v1H39zM42 41h2v1H42zM45 41h1v1H45zM47 41h3v1H47zM54 41h1v1H54zM1 42h1v1H1zM3 42h1v1H3zM6 42h2v1H6zM9 42h4v1H9zM16 42h1v1H16zM20 42h1v1H20zM23 42h2v1H23zM26 42h2v1H26zM29 42h1v1H29zM31 42h2v1H31zM34 42h1v1H34zM38 42h2v1H38zM41 42h1v1H41zM43 42h4v1H43zM49 42h1v1H49zM52 42h3v1H52zM60,42 h1v1H60zM2 43h1v1H2zM4 43h1v1H4zM8 43h1v1H8zM10 43h5v1H10zM16 43h1v1H16zM19 43h2v1H19zM24 43h3v1H24zM34 43h2v1H34zM37 43h1v1H37zM40 43h1v1H40zM42 43h1v1H42zM44 43h2v1H44zM47 43h2v1H47zM50 43h1v1H50zM52 43h2v1H52zM55 43h1v1H55zM59,43 h2v1H59zM0 44h1v1H0zM2 44h1v1H2zM4 44h1v1H4zM6 44h7v1H6zM15 44h6v1H15zM24 44h2v1H24zM27 44h4v1H27zM32 44h1v1H32zM35 44h3v1H35zM42 44h2v1H42zM47 44h2v1H47zM51 44h2v1H51zM54 44h5v1H54zM60,44 h1v1H60zM0 45h1v1H0zM2 45h2v1H2zM7 45h2v1H7zM10 45h1v1H10zM13 45h2v1H13zM23 45h2v1H23zM27 45h4v1H27zM32 45h1v1H32zM36 45h1v1H36zM41 45h2v1H41zM44 45h1v1H44zM49 45h1v1H49zM51 45h4v1H51zM57,45 h4v1H57zM0 46h1v1H0zM4 46h1v1H4zM6 46h3v1H6zM12 46h6v1H12zM22 46h1v1H22zM24 46h1v1H24zM26 46h5v1H26zM33 46h1v1H33zM35 46h2v1H35zM38 46h1v1H38zM43 46h2v1H43zM46 46h1v1H46zM48 46h1v1H48zM51 46h1v1H51zM53 46h2v1H53zM56 46h2v1H56zM59,46 h2v1H59zM0 47h1v1H0zM4 47h2v1H4zM7 47h1v1H7zM9 47h2v1H9zM16 47h1v1H16zM19 47h4v1H19zM26 47h2v1H26zM29 47h1v1H29zM31 47h1v1H31zM33 47h1v1H33zM37 47h2v1H37zM40 47h1v1H40zM42 47h3v1H42zM46 47h1v1H46zM48 47h1v1H48zM50 47h7v1H50zM60,47 h1v1H60zM5 48h3v1H5zM10 48h2v1H10zM13 48h1v1H13zM17 48h2v1H17zM20 48h1v1H20zM22 48h1v1H22zM24 48h2v1H24zM27 48h1v1H27zM30 48h2v1H30zM33 48h1v1H33zM35 48h3v1H35zM39 48h1v1H39zM41 48h1v1H41zM43 48h1v1H43zM45 48h4v1H45zM50 48h2v1H50zM53 48h1v1H53zM56 48h2v1H56zM60,48 h1v1H60zM0 49h3v1H0zM7 49h2v1H7zM12 49h2v1H12zM15 49h1v1H15zM19 49h1v1H19zM21 49h1v1H21zM23 49h1v1H23zM26 49h1v1H26zM28 49h1v1H28zM31 49h1v1H31zM39 49h1v1H39zM41 49h2v1H41zM44 49h2v1H44zM47 49h1v1H47zM49 49h1v1H49zM53 49h3v1H53zM58,49 h3v1H58zM2 50h5v1H2zM10 50h1v1H10zM17 50h2v1H17zM22 50h1v1H22zM27 50h1v1H27zM30 50h5v1H30zM36 50h4v1H36zM41 50h1v1H41zM46 50h1v1H46zM48 50h1v1H48zM54 50h1v1H54zM56 50h2v1H56zM59,50 h2v1H59zM0 51h3v1H0zM4 51h1v1H4zM8 51h1v1H8zM10 51h3v1H10zM15 51h1v1H15zM18 51h3v1H18zM23 51h1v1H23zM25 51h1v1H25zM28 51h2v1H28zM31 51h1v1H31zM33 51h2v1H33zM38 51h1v1H38zM40 51h1v1H40zM42 51h1v1H42zM44 51h1v1H44zM51 51h2v1H51zM54 51h1v1H54zM56 51h2v1H56zM59 51h1v1H59zM0 52h4v1H0zM6 52h7v1H6zM14 52h2v1H14zM18 52h3v1H18zM25 52h1v1H25zM28 52h9v1H28zM38 52h1v1H38zM41 52h2v1H41zM45 52h1v1H45zM47 52h2v1H47zM51 52h6v1H51zM58 52h2v1H58zM8 53h3v1H8zM19 53h1v1H19zM22 53h1v1H22zM24 53h5v1H24zM32 53h1v1H32zM35 53h3v1H35zM39 53h4v1H39zM44 53h1v1H44zM51 53h2v1H51zM56 53h4v1H56zM0 54h7v1H0zM8 54h3v1H8zM12 54h1v1H12zM14 54h2v1H14zM17 54h1v1H17zM19 54h1v1H19zM21 54h1v1H21zM23 54h2v1H23zM27 54h2v1H27zM30 54h1v1H30zM32 54h2v1H32zM36 54h1v1H36zM38 54h2v1H38zM41 54h1v1H41zM43 54h1v1H43zM45 54h3v1H45zM50 54h1v1H50zM52 54h1v1H52zM54 54h1v1H54zM56 54h1v1H56zM59,54 h2v1H59zM0 55h1v1H0zM6 55h1v1H6zM9 55h2v1H9zM12 55h1v1H12zM14 55h2v1H14zM19 55h1v1H19zM21 55h1v1H21zM25 55h1v1H25zM28 55h1v1H28zM32 55h1v1H32zM35 55h1v1H35zM39 55h2v1H39zM42 55h1v1H42zM45 55h1v1H45zM51 55h2v1H51zM56 55h1v1H56zM60,55 h1v1H60zM0 56h1v1H0zM2 56h3v1H2zM6 56h1v1H6zM8 56h2v1H8zM11 56h1v1H11zM14 56h4v1H14zM19 56h1v1H19zM27 56h6v1H27zM34 56h1v1H34zM36 56h4v1H36zM45 56h1v1H45zM47 56h2v1H47zM50 56h8v1H50zM60,56 h1v1H60zM0 57h1v1H0zM2 57h3v1H2zM6 57h1v1H6zM8 57h2v1H8zM13 57h2v1H13zM18 57h1v1H18zM21 57h5v1H21zM27 57h1v1H27zM29 57h3v1H29zM33 57h1v1H33zM36 57h2v1H36zM40 57h1v1H40zM42 57h1v1H42zM48 57h2v1H48zM52 57h2v1H52zM55 57h1v1H55zM60,57 h1v1H60zM0 58h1v1H0zM2 58h3v1H2zM6 58h1v1H6zM8 58h1v1H8zM10 58h2v1H10zM13 58h1v1H13zM16 58h1v1H16zM18 58h2v1H18zM21 58h1v1H21zM30 58h1v1H30zM34 58h1v1H34zM36 58h4v1H36zM41 58h1v1H41zM45 58h5v1H45zM51 58h1v1H51zM53 58h3v1H53zM60,58 h1v1H60zM0 59h1v1H0zM6 59h1v1H6zM8 59h5v1H8zM15 59h1v1H15zM17 59h2v1H17zM21 59h2v1H21zM25 59h2v1H25zM28 59h1v1H28zM33 59h1v1H33zM35 59h1v1H35zM37 59h5v1H37zM44 59h5v1H44zM52 59h4v1H52zM60,59 h1v1H60zM0 60h7v1H0zM8 60h5v1H8zM14 60h5v1H14zM24 60h2v1H24zM27 60h1v1H27zM30 60h2v1H30zM35 60h3v1H35zM42 60h1v1H42zM47 60h3v1H47zM51 60h1v1H51zM53 60h1v1H53zM57,60 h4v1H57z"
                                                        shape-rendering="crispEdges"></path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab"
                                        class=" hidden w-[330px] shadow-lg text-white rounded-2xl"
                                        style="background-color: rgb(30, 215, 97);">
                                        <div class="flex flex-col h-full justify-between pb-6 w-full">
                                            <div class="relative mt-[16px] mr-[16px] ml-[16px]">
                                                <div class="mb-[16px]">
                                                    <div class="flex flex-row items-center">
                                                        <div class="h-[32px] mr-[16px]">
                                                            <div class=" rounded-full h-[32px] w-[32px] m-0 flex">
                                                                <div class="block w-full p-2"><svg id="card-third-svg"
                                                                        version="1.1" id="Layer_1"
                                                                        xmlns="http://www.w3.org/2000/svg" x="0" y="0"
                                                                        viewBox="0 0 429.6 687.2">
                                                                        <path
                                                                            d="M56.7 61.8c.7-1.9 1.3-3.6 1.8-5.1 100.4-39.6 212.1-39.7 312.6 0 .6 1.6 1.2 3.4 1.9 5.3 3.2 9.6 7.6 24 12 42.8 8.8 37.7 17.7 93.2 17.7 163.4s-8.9 125.7-17.7 163.4c-4.4 18.9-8.8 33.3-12 42.8-.7 2-1.3 3.8-1.9 5.3-100.4 39.6-212.2 39.6-312.6 0-.5-1.5-1.1-3.2-1.8-5.1-3.2-9.3-7.6-23.5-12-42.2C35.9 395.1 27 339.7 27 268.3S35.9 141.4 44.7 104c4.4-18.6 8.8-32.8 12-42.2z"
                                                                            style="fill: none; stroke: rgb(255, 255, 255); stroke-width: 54;">
                                                                        </path>
                                                                        <path fill="#ffffff"
                                                                            d="M61.9 539.8c99.1 34 206.7 34 305.8 0 8.2 23.9-4.5 50.2-29.1 56.3-81.3 20.1-166.3 20.1-247.6 0-24.6-6.1-37.3-32.4-29.1-56.3z"
                                                                            style="fill-rule: evenodd; clip-rule: evenodd;">
                                                                        </path>
                                                                        <path fill="#ffffff"
                                                                            d="M92.1 626.3c80.6 20.1 164.8 20.1 245.4 0 6.1 24.5-8.8 49.6-33.7 53.7-58.9 9.6-119 9.6-177.9 0-25-4.1-39.9-29.2-33.8-53.7z"
                                                                            style="fill-rule: evenodd; clip-rule: evenodd;">
                                                                        </path>
                                                                        <path fill="#ffffff"
                                                                            d="M297.3 231.6c20.2 0 36.6 16.4 36.6 36.6 0 20.2-16.4 36.6-36.6 36.6-20.2 0-36.6-16.4-36.6-36.6-.1-20.2 16.3-36.6 36.6-36.6z">
                                                                        </path>
                                                                    </svg></div>
                                                            </div>
                                                        </div>
                                                        <div style="color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="flex gap-x-2">
                                                        <div id="responseDiv5"
                                                            class="mt-[24px] capitalize text-[32px] leading-[40px] font-normal"
                                                            style="color: rgb(255, 255, 255);">Jane</div>
                                                        <div id="responseDiv6"
                                                            class="mt-[24px] capitalize text-[32px] leading-[40px] font-normal"
                                                            style="color: rgb(255, 255, 255);">Appleseed</div>
                                                    </div>
                                                    <div id="responseDiv4"
                                                        class="mt-[16px] uppercase text-[16px] font-normal"
                                                        style="color: rgb(255, 255, 255);">Chief Networking Officer
                                                    </div>
                                                </div>
                                                <div class="mt-[12px] mb-[12px]">
                                                    <div
                                                        class="bg-white mx-auto card-qrcode max-w-fit p-[16px] rounded-[16px] shadow-[0_4px_5px_0px_rgba(0,0,0,0.14)_0_1px_10px_0px_rgba(0,0,0,0.12)_0_2px_4px-1px_rgba(0,0,0,0.2)]">
                                                        <svg height="128" width="128" viewBox="0 0 61 61">
                                                            <path fill="#FFFFFF" d="M0,0 h61v61H0z"
                                                                shape-rendering="crispEdges"></path>
                                                            <path fill="#000000"
                                                                d="M0 0h7v1H0zM8 0h1v1H8zM16 0h1v1H16zM19 0h1v1H19zM24 0h1v1H24zM32 0h1v1H32zM36 0h1v1H36zM41 0h3v1H41zM45 0h1v1H45zM49 0h1v1H49zM51 0h2v1H51zM54,0 h7v1H54zM0 1h1v1H0zM6 1h1v1H6zM9 1h2v1H9zM14 1h1v1H14zM16 1h1v1H16zM19 1h2v1H19zM25 1h1v1H25zM28 1h1v1H28zM30 1h1v1H30zM32 1h1v1H32zM34 1h1v1H34zM37 1h1v1H37zM39 1h4v1H39zM45 1h2v1H45zM48 1h2v1H48zM51 1h2v1H51zM54 1h1v1H54zM60,1 h1v1H60zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM8 2h1v1H8zM15 2h1v1H15zM21 2h1v1H21zM26 2h2v1H26zM29 2h1v1H29zM34 2h1v1H34zM39 2h1v1H39zM41 2h3v1H41zM45 2h8v1H45zM54 2h1v1H54zM56 2h3v1H56zM60,2 h1v1H60zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h2v1H8zM11 3h3v1H11zM15 3h6v1H15zM24 3h2v1H24zM27 3h1v1H27zM30 3h1v1H30zM32 3h1v1H32zM36 3h2v1H36zM41 3h1v1H41zM43 3h1v1H43zM45 3h1v1H45zM47 3h4v1H47zM52 3h1v1H52zM54 3h1v1H54zM56 3h3v1H56zM60,3 h1v1H60zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM8 4h2v1H8zM11 4h3v1H11zM15 4h1v1H15zM17 4h2v1H17zM20 4h1v1H20zM23 4h1v1H23zM25 4h1v1H25zM28 4h6v1H28zM37 4h2v1H37zM40 4h1v1H40zM48 4h4v1H48zM54 4h1v1H54zM56 4h3v1H56zM60,4 h1v1H60zM0 5h1v1H0zM6 5h1v1H6zM9 5h3v1H9zM13 5h4v1H13zM22 5h3v1H22zM26 5h1v1H26zM28 5h1v1H28zM32 5h1v1H32zM35 5h11v1H35zM47 5h4v1H47zM54 5h1v1H54zM60,5 h1v1H60zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h1v1H14zM16 6h1v1H16zM18 6h1v1H18zM20 6h1v1H20zM22 6h1v1H22zM24 6h1v1H24zM26 6h1v1H26zM28 6h1v1H28zM30 6h1v1H30zM32 6h1v1H32zM34 6h1v1H34zM36 6h1v1H36zM38 6h1v1H38zM40 6h1v1H40zM42 6h1v1H42zM44 6h1v1H44zM46 6h1v1H46zM48 6h1v1H48zM50 6h1v1H50zM52 6h1v1H52zM54,6 h7v1H54zM11 7h1v1H11zM15 7h1v1H15zM19 7h1v1H19zM24 7h5v1H24zM32 7h1v1H32zM36 7h1v1H36zM38 7h3v1H38zM44 7h2v1H44zM48 7h1v1H48zM51 7h2v1H51zM0 8h4v1H0zM6 8h1v1H6zM8 8h1v1H8zM10 8h3v1H10zM16 8h1v1H16zM19 8h1v1H19zM21 8h2v1H21zM25 8h1v1H25zM28 8h5v1H28zM37 8h5v1H37zM46 8h2v1H46zM49 8h2v1H49zM53 8h1v1H53zM56 8h3v1H56zM60,8 h1v1H60zM4 9h2v1H4zM8 9h1v1H8zM10 9h2v1H10zM15 9h1v1H15zM17 9h8v1H17zM28 9h6v1H28zM36 9h2v1H36zM41 9h2v1H41zM44 9h1v1H44zM47 9h3v1H47zM51 9h1v1H51zM53 9h2v1H53zM56 9h1v1H56zM60,9 h1v1H60zM1 10h1v1H1zM3 10h2v1H3zM6 10h1v1H6zM8 10h1v1H8zM10 10h1v1H10zM12 10h4v1H12zM17 10h2v1H17zM21 10h2v1H21zM30 10h1v1H30zM32 10h4v1H32zM44 10h1v1H44zM46 10h5v1H46zM52 10h2v1H52zM55 10h3v1H55zM1 11h1v1H1zM3 11h3v1H3zM8 11h1v1H8zM15 11h1v1H15zM20 11h4v1H20zM25 11h2v1H25zM28 11h2v1H28zM31 11h1v1H31zM36 11h2v1H36zM43 11h2v1H43zM46 11h2v1H46zM49 11h4v1H49zM54 11h1v1H54zM56 11h3v1H56zM60,11 h1v1H60zM0 12h1v1H0zM3 12h2v1H3zM6 12h2v1H6zM10 12h1v1H10zM12 12h1v1H12zM15 12h1v1H15zM18 12h4v1H18zM23 12h3v1H23zM27 12h1v1H27zM29 12h1v1H29zM31 12h1v1H31zM33 12h4v1H33zM38 12h1v1H38zM41 12h2v1H41zM45 12h6v1H45zM52 12h2v1H52zM55 12h1v1H55zM58 12h1v1H58zM60,12 h1v1H60zM2 13h3v1H2zM7 13h3v1H7zM11 13h2v1H11zM15 13h1v1H15zM18 13h3v1H18zM26 13h2v1H26zM29 13h3v1H29zM33 13h1v1H33zM37 13h3v1H37zM43 13h1v1H43zM45 13h1v1H45zM49 13h2v1H49zM53 13h1v1H53zM56 13h1v1H56zM58,13 h3v1H58zM1 14h7v1H1zM13 14h1v1H13zM15 14h1v1H15zM17 14h1v1H17zM20 14h2v1H20zM24 14h1v1H24zM30 14h1v1H30zM34 14h1v1H34zM36 14h7v1H36zM44 14h2v1H44zM47 14h1v1H47zM49 14h1v1H49zM53 14h2v1H53zM57 14h1v1H57zM59 14h1v1H59zM0 15h1v1H0zM4 15h2v1H4zM7 15h4v1H7zM12 15h2v1H12zM15 15h4v1H15zM21 15h2v1H21zM24 15h2v1H24zM29 15h2v1H29zM35 15h1v1H35zM39 15h3v1H39zM44 15h3v1H44zM48 15h3v1H48zM52 15h3v1H52zM0 16h1v1H0zM2 16h1v1H2zM4 16h1v1H4zM6 16h1v1H6zM10 16h1v1H10zM12 16h1v1H12zM14 16h2v1H14zM21 16h3v1H21zM25 16h4v1H25zM32 16h2v1H32zM38 16h1v1H38zM41 16h4v1H41zM46 16h1v1H46zM49 16h2v1H49zM55 16h2v1H55zM59 16h1v1H59zM0 17h2v1H0zM3 17h3v1H3zM7 17h3v1H7zM16 17h1v1H16zM18 17h1v1H18zM22 17h3v1H22zM27 17h1v1H27zM29 17h2v1H29zM32 17h4v1H32zM37 17h1v1H37zM40 17h2v1H40zM44 17h1v1H44zM46 17h4v1H46zM52 17h2v1H52zM56 17h1v1H56zM59,17 h2v1H59zM6 18h2v1H6zM9 18h1v1H9zM11 18h1v1H11zM18 18h3v1H18zM27 18h1v1H27zM33 18h2v1H33zM36 18h3v1H36zM46 18h2v1H46zM49 18h2v1H49zM53 18h2v1H53zM60,18 h1v1H60zM0 19h3v1H0zM4 19h2v1H4zM7 19h2v1H7zM11 19h1v1H11zM14 19h1v1H14zM20 19h2v1H20zM24 19h1v1H24zM27 19h1v1H27zM29 19h1v1H29zM32 19h4v1H32zM37 19h2v1H37zM40 19h2v1H40zM43 19h1v1H43zM45 19h4v1H45zM50 19h3v1H50zM55 19h1v1H55zM57 19h1v1H57zM60,19 h1v1H60zM1 20h1v1H1zM6 20h2v1H6zM9 20h2v1H9zM13 20h2v1H13zM17 20h1v1H17zM19 20h4v1H19zM24 20h1v1H24zM29 20h2v1H29zM32 20h1v1H32zM34 20h1v1H34zM37 20h1v1H37zM39 20h5v1H39zM45 20h3v1H45zM55 20h1v1H55zM59 20h1v1H59zM4 21h1v1H4zM8 21h4v1H8zM14 21h1v1H14zM17 21h1v1H17zM23 21h5v1H23zM31 21h3v1H31zM35 21h2v1H35zM41 21h2v1H41zM47 21h1v1H47zM49 21h1v1H49zM51 21h1v1H51zM53 21h4v1H53zM1 22h1v1H1zM4 22h1v1H4zM6 22h1v1H6zM8 22h1v1H8zM11 22h2v1H11zM16 22h1v1H16zM18 22h1v1H18zM32 22h1v1H32zM39 22h2v1H39zM42 22h1v1H42zM45 22h2v1H45zM48 22h2v1H48zM51 22h2v1H51zM54 22h1v1H54zM57 22h1v1H57zM0 23h4v1H0zM5 23h1v1H5zM11 23h1v1H11zM16 23h1v1H16zM18 23h1v1H18zM21 23h2v1H21zM24 23h3v1H24zM28 23h2v1H28zM31 23h1v1H31zM35 23h2v1H35zM41 23h1v1H41zM46 23h1v1H46zM48 23h1v1H48zM51 23h1v1H51zM57 23h2v1H57zM1 24h1v1H1zM3 24h1v1H3zM6 24h1v1H6zM8 24h2v1H8zM15 24h1v1H15zM17 24h1v1H17zM19 24h1v1H19zM27 24h2v1H27zM30 24h1v1H30zM33 24h2v1H33zM36 24h1v1H36zM43 24h1v1H43zM47 24h2v1H47zM50 24h4v1H50zM55 24h1v1H55zM57 24h1v1H57zM59 24h1v1H59zM4 25h2v1H4zM7 25h1v1H7zM9 25h2v1H9zM13 25h1v1H13zM17 25h1v1H17zM20 25h3v1H20zM26 25h1v1H26zM28 25h1v1H28zM32 25h1v1H32zM35 25h1v1H35zM38 25h4v1H38zM45 25h1v1H45zM48 25h4v1H48zM59 25h1v1H59zM1 26h1v1H1zM6 26h1v1H6zM8 26h2v1H8zM11 26h1v1H11zM13 26h1v1H13zM15 26h2v1H15zM18 26h1v1H18zM24 26h1v1H24zM26 26h1v1H26zM28 26h3v1H28zM33 26h1v1H33zM35 26h1v1H35zM37 26h2v1H37zM40 26h5v1H40zM47 26h1v1H47zM49 26h1v1H49zM52 26h1v1H52zM55 26h3v1H55zM59 26h1v1H59zM2 27h1v1H2zM9 27h1v1H9zM13 27h1v1H13zM16 27h1v1H16zM21 27h3v1H21zM26 27h1v1H26zM29 27h2v1H29zM32 27h1v1H32zM37 27h1v1H37zM39 27h2v1H39zM42 27h1v1H42zM44 27h1v1H44zM48 27h1v1H48zM55 27h2v1H55zM59 27h1v1H59zM0 28h3v1H0zM4 28h8v1H4zM13 28h4v1H13zM19 28h3v1H19zM26 28h1v1H26zM28 28h6v1H28zM37 28h3v1H37zM41 28h1v1H41zM43 28h4v1H43zM49 28h1v1H49zM52 28h5v1H52zM58,28 h3v1H58zM1 29h1v1H1zM3 29h2v1H3zM8 29h3v1H8zM13 29h2v1H13zM16 29h1v1H16zM21 29h3v1H21zM26 29h3v1H26zM32 29h3v1H32zM36 29h1v1H36zM39 29h1v1H39zM41 29h1v1H41zM45 29h4v1H45zM52 29h1v1H52zM56 29h1v1H56zM58,29 h3v1H58zM1 30h2v1H1zM4 30h1v1H4zM6 30h1v1H6zM8 30h1v1H8zM12 30h2v1H12zM17 30h5v1H17zM23 30h3v1H23zM27 30h2v1H27zM30 30h1v1H30zM32 30h2v1H32zM36 30h1v1H36zM38 30h2v1H38zM41 30h1v1H41zM44 30h3v1H44zM48 30h1v1H48zM52 30h1v1H52zM54 30h1v1H54zM56 30h1v1H56zM58,30 h3v1H58zM0 31h2v1H0zM3 31h2v1H3zM8 31h8v1H8zM17 31h1v1H17zM21 31h1v1H21zM23 31h1v1H23zM26 31h1v1H26zM28 31h1v1H28zM32 31h2v1H32zM35 31h2v1H35zM38 31h3v1H38zM43 31h1v1H43zM47 31h1v1H47zM52 31h1v1H52zM56 31h2v1H56zM59 31h1v1H59zM0 32h9v1H0zM12 32h2v1H12zM16 32h1v1H16zM20 32h1v1H20zM22 32h2v1H22zM25 32h1v1H25zM28 32h5v1H28zM34 32h2v1H34zM37 32h2v1H37zM40 32h2v1H40zM45 32h1v1H45zM47 32h1v1H47zM49 32h1v1H49zM52 32h5v1H52zM58 32h2v1H58zM1 33h1v1H1zM3 33h1v1H3zM8 33h1v1H8zM11 33h4v1H11zM16 33h1v1H16zM19 33h1v1H19zM24 33h3v1H24zM28 33h2v1H28zM31 33h3v1H31zM35 33h2v1H35zM39 33h5v1H39zM45 33h1v1H45zM47 33h2v1H47zM52 33h2v1H52zM55 33h1v1H55zM57 33h1v1H57zM60,33 h1v1H60zM0 34h3v1H0zM4 34h1v1H4zM6 34h1v1H6zM9 34h3v1H9zM13 34h2v1H13zM16 34h2v1H16zM19 34h3v1H19zM25 34h2v1H25zM34 34h1v1H34zM42 34h3v1H42zM46 34h4v1H46zM53 34h1v1H53zM56 34h2v1H56zM0 35h3v1H0zM5 35h1v1H5zM7 35h1v1H7zM10 35h4v1H10zM15 35h1v1H15zM18 35h1v1H18zM22 35h1v1H22zM26 35h1v1H26zM30 35h2v1H30zM33 35h1v1H33zM36 35h2v1H36zM41 35h1v1H41zM44 35h3v1H44zM48 35h2v1H48zM52 35h1v1H52zM55 35h4v1H55zM60,35 h1v1H60zM2 36h10v1H2zM13 36h2v1H13zM16 36h3v1H16zM20 36h2v1H20zM25 36h1v1H25zM27 36h4v1H27zM35 36h2v1H35zM39 36h1v1H39zM42 36h1v1H42zM47 36h2v1H47zM51 36h1v1H51zM53 36h3v1H53zM57 36h2v1H57zM60,36 h1v1H60zM0 37h1v1H0zM4 37h2v1H4zM7 37h1v1H7zM9 37h4v1H9zM14 37h2v1H14zM18 37h5v1H18zM28 37h2v1H28zM31 37h2v1H31zM35 37h4v1H35zM43 37h3v1H43zM47 37h1v1H47zM49 37h2v1H49zM52 37h2v1H52zM55 37h3v1H55zM59,37 h2v1H59zM5 38h4v1H5zM19 38h1v1H19zM22 38h1v1H22zM24 38h1v1H24zM26 38h1v1H26zM31 38h1v1H31zM34 38h4v1H34zM39 38h2v1H39zM42 38h1v1H42zM44 38h2v1H44zM47 38h1v1H47zM50 38h1v1H50zM52 38h1v1H52zM55 38h3v1H55zM59 38h1v1H59zM1 39h1v1H1zM5 39h1v1H5zM7 39h3v1H7zM12 39h3v1H12zM17 39h3v1H17zM21 39h1v1H21zM23 39h1v1H23zM26 39h6v1H26zM33 39h1v1H33zM35 39h2v1H35zM39 39h2v1H39zM46 39h1v1H46zM49 39h1v1H49zM53 39h1v1H53zM60,39 h1v1H60zM0 40h2v1H0zM3 40h5v1H3zM10 40h1v1H10zM12 40h3v1H12zM16 40h2v1H16zM20 40h2v1H20zM23 40h3v1H23zM28 40h2v1H28zM31 40h3v1H31zM38 40h2v1H38zM41 40h2v1H41zM44 40h1v1H44zM49 40h2v1H49zM53 40h1v1H53zM55 40h1v1H55zM59 40h1v1H59zM5 41h1v1H5zM7 41h1v1H7zM9 41h1v1H9zM14 41h4v1H14zM20 41h2v1H20zM23 41h1v1H23zM25 41h1v1H25zM29 41h4v1H29zM34 41h1v1H34zM40 41h1v1H40zM46 41h2v1H46zM51 41h2v1H51zM55 41h1v1H55zM57 41h2v1H57zM60,41 h1v1H60zM1 42h1v1H1zM3 42h1v1H3zM6 42h2v1H6zM11 42h2v1H11zM16 42h1v1H16zM20 42h1v1H20zM23 42h2v1H23zM26 42h4v1H26zM31 42h2v1H31zM34 42h1v1H34zM36 42h1v1H36zM38 42h2v1H38zM41 42h1v1H41zM43 42h4v1H43zM49 42h1v1H49zM52 42h3v1H52zM60,42 h1v1H60zM0 43h1v1H0zM3 43h3v1H3zM13 43h1v1H13zM15 43h5v1H15zM21 43h1v1H21zM23 43h1v1H23zM25 43h1v1H25zM29 43h2v1H29zM32 43h3v1H32zM36 43h6v1H36zM51 43h2v1H51zM54 43h4v1H54zM1 44h1v1H1zM3 44h1v1H3zM6 44h1v1H6zM8 44h4v1H8zM13 44h1v1H13zM17 44h1v1H17zM20 44h3v1H20zM29 44h1v1H29zM31 44h5v1H31zM39 44h2v1H39zM45 44h3v1H45zM49 44h1v1H49zM56 44h1v1H56zM0 45h1v1H0zM2 45h2v1H2zM7 45h2v1H7zM13 45h2v1H13zM23 45h2v1H23zM27 45h4v1H27zM32 45h1v1H32zM36 45h1v1H36zM41 45h2v1H41zM44 45h1v1H44zM49 45h1v1H49zM51 45h4v1H51zM57,45 h4v1H57zM3 46h5v1H3zM9 46h1v1H9zM11 46h1v1H11zM13 46h1v1H13zM16 46h1v1H16zM18 46h1v1H18zM20 46h4v1H20zM28 46h1v1H28zM32 46h1v1H32zM39 46h1v1H39zM41 46h3v1H41zM45 46h3v1H45zM50 46h1v1H50zM1 47h2v1H1zM5 47h1v1H5zM12 47h2v1H12zM15 47h1v1H15zM18 47h1v1H18zM20 47h1v1H20zM24 47h3v1H24zM28 47h3v1H28zM34 47h1v1H34zM36 47h1v1H36zM38 47h2v1H38zM44 47h2v1H44zM49 47h2v1H49zM53 47h1v1H53zM56 47h3v1H56zM5 48h3v1H5zM10 48h2v1H10zM13 48h1v1H13zM17 48h2v1H17zM20 48h1v1H20zM22 48h1v1H22zM24 48h2v1H24zM27 48h1v1H27zM30 48h2v1H30zM33 48h1v1H33zM35 48h3v1H35zM39 48h1v1H39zM41 48h1v1H41zM43 48h1v1H43zM45 48h4v1H45zM50 48h2v1H50zM53 48h1v1H53zM56 48h2v1H56zM60,48 h1v1H60zM1 49h1v1H1zM3 49h1v1H3zM5 49h1v1H5zM7 49h1v1H7zM9 49h1v1H9zM11 49h1v1H11zM13 49h2v1H13zM17 49h4v1H17zM24 49h1v1H24zM27 49h7v1H27zM35 49h2v1H35zM38 49h1v1H38zM48 49h4v1H48zM55 49h4v1H55zM2 50h6v1H2zM9 50h1v1H9zM12 50h6v1H12zM19 50h1v1H19zM21 50h1v1H21zM24 50h2v1H24zM28 50h1v1H28zM32 50h1v1H32zM38 50h1v1H38zM40 50h4v1H40zM45 50h1v1H45zM49 50h1v1H49zM51 50h2v1H51zM55 50h2v1H55zM58 50h2v1H58zM0 51h3v1H0zM4 51h1v1H4zM8 51h1v1H8zM10 51h4v1H10zM15 51h1v1H15zM18 51h3v1H18zM23 51h1v1H23zM25 51h1v1H25zM28 51h2v1H28zM31 51h1v1H31zM33 51h2v1H33zM38 51h1v1H38zM40 51h1v1H40zM42 51h1v1H42zM44 51h1v1H44zM51 51h2v1H51zM54 51h1v1H54zM56 51h2v1H56zM59 51h1v1H59zM0 52h4v1H0zM6 52h2v1H6zM10 52h3v1H10zM17 52h1v1H17zM19 52h1v1H19zM21 52h1v1H21zM23 52h10v1H23zM34 52h1v1H34zM39 52h1v1H39zM44 52h1v1H44zM50 52h1v1H50zM52 52h7v1H52zM60,52 h1v1H60zM8 53h1v1H8zM11 53h1v1H11zM13 53h1v1H13zM15 53h2v1H15zM18 53h1v1H18zM21 53h1v1H21zM26 53h1v1H26zM28 53h1v1H28zM32 53h4v1H32zM41 53h1v1H41zM43 53h4v1H43zM48 53h2v1H48zM52 53h1v1H52zM56 53h1v1H56zM59,53 h2v1H59zM0 54h7v1H0zM9 54h3v1H9zM14 54h2v1H14zM17 54h1v1H17zM19 54h1v1H19zM21 54h1v1H21zM23 54h2v1H23zM27 54h2v1H27zM30 54h1v1H30zM32 54h2v1H32zM36 54h1v1H36zM38 54h2v1H38zM41 54h1v1H41zM43 54h1v1H43zM45 54h3v1H45zM50 54h1v1H50zM52 54h1v1H52zM54 54h1v1H54zM56 54h1v1H56zM59,54 h2v1H59zM0 55h1v1H0zM6 55h1v1H6zM10 55h1v1H10zM12 55h1v1H12zM17 55h4v1H17zM23 55h6v1H23zM32 55h2v1H32zM36 55h1v1H36zM38 55h1v1H38zM40 55h2v1H40zM44 55h1v1H44zM47 55h2v1H47zM50 55h1v1H50zM52 55h1v1H52zM56 55h2v1H56zM59 55h1v1H59zM0 56h1v1H0zM2 56h3v1H2zM6 56h1v1H6zM10 56h5v1H10zM17 56h2v1H17zM21 56h2v1H21zM24 56h2v1H24zM28 56h7v1H28zM38 56h1v1H38zM40 56h1v1H40zM42 56h2v1H42zM46 56h2v1H46zM49 56h2v1H49zM52 56h5v1H52zM58 56h1v1H58zM0 57h1v1H0zM2 57h3v1H2zM6 57h1v1H6zM8 57h2v1H8zM13 57h2v1H13zM18 57h1v1H18zM21 57h5v1H21zM27 57h1v1H27zM29 57h3v1H29zM33 57h1v1H33zM35 57h3v1H35zM40 57h1v1H40zM42 57h1v1H42zM48 57h2v1H48zM52 57h2v1H52zM55 57h1v1H55zM60,57 h1v1H60zM0 58h1v1H0zM2 58h3v1H2zM6 58h1v1H6zM8 58h2v1H8zM12 58h6v1H12zM19 58h2v1H19zM23 58h2v1H23zM26 58h2v1H26zM29 58h1v1H29zM32 58h4v1H32zM37 58h1v1H37zM42 58h1v1H42zM44 58h1v1H44zM46 58h1v1H46zM49 58h2v1H49zM55 58h3v1H55zM59 58h1v1H59zM0 59h1v1H0zM6 59h1v1H6zM8 59h1v1H8zM10 59h2v1H10zM13 59h1v1H13zM16 59h2v1H16zM19 59h1v1H19zM24 59h1v1H24zM26 59h2v1H26zM30 59h2v1H30zM34 59h3v1H34zM38 59h1v1H38zM41 59h4v1H41zM47 59h1v1H47zM49 59h1v1H49zM51 59h1v1H51zM53 59h1v1H53zM57 59h2v1H57zM0 60h7v1H0zM8 60h1v1H8zM11 60h2v1H11zM14 60h5v1H14zM24 60h2v1H24zM27 60h1v1H27zM30 60h2v1H30zM35 60h3v1H35zM42 60h1v1H42zM47 60h3v1H47zM51 60h1v1H51zM53 60h1v1H53zM57,60 h4v1H57z"
                                                                shape-rendering="crispEdges"></path>
                                                        </svg>
                                                    </div>
                                                    <p class="card-qrcode-text text-base mt-[8px] font-normal text-center"
                                                        style="color: rgb(255, 255, 255);">Save my contact details</p>
                                                </div><span class="items-center px-6 w-full block aspect-[3/1]">
                                                    <div class="mx-auto w-2/3"><svg id="card-fourth-svg"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155.7 31.2">
                                                            <path fill="#ffffff"
                                                                d="M-73.4-24.1h5c1.4 0 2.6-.2 3.7-.6 1.1-.4 2-.9 2.7-1.7.7-.7 1.3-1.6 1.7-2.6.4-1 .6-2.2.6-3.6 0-1.3-.2-2.4-.5-3.5-.4-1-.9-1.9-1.6-2.7-.7-.8-1.6-1.3-2.7-1.7-1.1-.4-2.3-.6-3.8-.6h-5v17zm-4.6 3.9V-45h9.6c1.9 0 3.6.3 5.2.8s3 1.3 4.2 2.4c1.2 1 2.1 2.3 2.7 3.9.7 1.5 1 3.3 1 5.3 0 1.8-.3 3.5-.9 5.1-.6 1.5-1.4 2.8-2.5 3.9s-2.5 1.9-4.1 2.5c-1.6.6-3.5.9-5.6.9H-78zm24.8-9.4c0-1.4.3-2.7.8-3.9.5-1.2 1.2-2.3 2.1-3.2.9-.9 2-1.6 3.3-2.1 1.3-.5 2.6-.8 4.1-.8 1.5 0 2.9.3 4.2.8 1.3.5 2.4 1.2 3.3 2.1.9.9 1.6 2 2.1 3.2.5 1.2.8 2.5.8 3.9s-.3 2.7-.8 3.9c-.5 1.2-1.2 2.3-2.1 3.2-.9.9-2 1.6-3.3 2.1-1.3.5-2.7.8-4.2.8s-2.9-.3-4.1-.8c-1.3-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-1.9-2.1-3.2-.7-1.2-.9-2.5-.9-3.9zm4.4 0c0 .9.2 1.7.5 2.5.3.7.7 1.4 1.3 1.9.5.5 1.2 1 1.9 1.3.7.3 1.5.5 2.3.5.8 0 1.6-.1 2.3-.4.7-.3 1.3-.7 1.9-1.3.5-.5 1-1.2 1.3-1.9.3-.8.5-1.6.5-2.5 0-.9-.2-1.7-.5-2.4-.3-.8-.7-1.4-1.3-1.9-.5-.5-1.2-1-1.9-1.3-.7-.3-1.5-.5-2.3-.5-.8 0-1.6.2-2.3.5-.7.3-1.3.7-1.9 1.3-.5.5-1 1.2-1.3 1.9-.3.6-.5 1.4-.5 2.3zm19-3.9c-.5 1.2-.8 2.5-.8 3.9s.3 2.7.8 3.9c.5 1.2 1.2 2.3 2.1 3.2.9.9 2 1.6 3.2 2.1 1.3.5 2.6.8 4.1.8 1.5 0 2.9-.3 4.2-.8 1.3-.5 2.4-1.2 3.3-2.1.9-.9 1.6-1.9 2.1-3.2.5-1.2.8-2.5.8-3.9s-.3-2.7-.8-3.9c-.5-1.2-1.2-2.3-2.1-3.2-.9-.9-2-1.6-3.3-2.1-1.3-.5-2.6-.8-4.2-.8-1.5 0-2.9.3-4.1.8-1.3.5-2.4 1.2-3.3 2.1-.8 1-1.5 2-2 3.2zm4.1 6.4c-.3-.8-.5-1.6-.5-2.5s.2-1.7.5-2.5c.3-.7.7-1.4 1.3-1.9.5-.5 1.2-1 1.9-1.3.7-.3 1.5-.5 2.3-.5.8 0 1.6.2 2.3.5.7.3 1.3.7 1.9 1.3.5.5 1 1.2 1.3 1.9.3.7.5 1.6.5 2.4 0 .9-.2 1.7-.5 2.5s-.7 1.4-1.3 1.9c-.5.5-1.2 1-1.9 1.3-.7.3-1.5.4-2.3.4-.8 0-1.6-.2-2.3-.5-.7-.3-1.3-.7-1.9-1.3-.5-.3-1-1-1.3-1.7zm29.7-8L2.6-39c-1.2 0-2.2.2-3.1.6-1 .4-1.8 1-2.4 1.6l-.4-2.2h-3.6v18.7h4.4v-9c0-1 .1-1.8.4-2.6.3-.7.6-1.3 1.1-1.8.5-.5 1.1-.9 1.8-1.1.7-.3 1.5-.4 2.3-.4l.9.1zM35.3-39h-4.8l-4.3 12.9h-.1L22-38.8h-3.3l-4.1 12.7h-.1L10.2-39H5.4l6.7 18.7h4l4.2-12 4.3 12h4L35.3-39zm4.3 9.4c0 .9.2 1.7.5 2.5s.7 1.4 1.3 1.9c.5.5 1.2 1 1.9 1.3.7.3 1.5.4 2.4.4.8 0 1.6-.1 2.3-.4.7-.3 1.4-.7 1.9-1.3.5-.5 1-1.2 1.3-1.9.3-.8.5-1.6.5-2.5 0-.9-.2-1.7-.5-2.4-.3-.8-.7-1.4-1.3-1.9-.5-.5-1.2-1-1.9-1.3-.7-.3-1.5-.5-2.3-.5s-1.6.2-2.4.5c-.7.3-1.4.7-1.9 1.3-.5.5-1 1.2-1.3 1.9-.3.7-.5 1.5-.5 2.4zm-4.4 0c0-1.4.2-2.7.7-3.9.5-1.2 1.2-2.3 2-3.2.9-.9 1.9-1.6 3.2-2.1 1.2-.5 2.6-.8 4.1-.8.7 0 1.4.1 2 .2.6.1 1.2.3 1.8.6.6.2 1.1.5 1.5.8.5.3.9.6 1.3 1l.3-2.1h3.8v18.7h-3.8l-.3-2.1c-.4.4-.8.7-1.3 1-.5.3-1 .6-1.5.8-.5.2-1.1.4-1.8.5-.6.1-1.3.2-2 .2-1.5 0-2.9-.3-4.1-.8-1.2-.5-2.3-1.2-3.2-2.1-.9-.9-1.6-1.9-2-3.2-.4-.8-.7-2.1-.7-3.5zM77.7-39H73l-5.3 12.8-.2-.9-5-11.9h-4.9l7.7 18-3.3 7.2h4.8L77.7-39z"
                                                                transform="translate(78 45)"
                                                                style="fill-rule: evenodd; clip-rule: evenodd;"></path>
                                                        </svg></div>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="w-full md:w-[285px]" id="first_page">
                            <div class="flex flex-col gap-[25px]">
                                <div
                                    class="text-navyBlue leading-regular flex cursor-default items-center gap-[5px] text-[15px] md:text-[13px] ">
                                    <div class="flex items-center gap-[5px] font-[500]">Your Device Type *</div>
                                </div>
                                <div class="flex flex-row gap-[10px] mt-[-20px]">



                                    <div class="w-[100%] text-center">

                                        <form action="code.php" method="POST" id="first_page_data"
                                            enctype="multipart/form-data">

                                            <input type="hidden" name="device_type" id="device_type_input"
                                                value="Apple">
                                            <ul class="inline-flex  gap-x-3" id="default-tab"
                                                data-tabs-toggle="#default-tab-content" role="tablist w-full">
                                                <li>
                                                    <button
                                                        class="rounded-[8px] focus:outline-none focus:ring-transparent  border border-lavender text-regular py-[10px] px-[45px] text-electricGreen border-[#1ED761] !text-[15px] flex-1"
                                                        data-tabs-target="#profile"
                                                        onclick="document.getElementById('device_type_input').value = 'Apple';"
                                                        type="button" role="tab" aria-controls="profile"
                                                        aria-selected="false">Apple</button>
                                                </li>
                                                <li>
                                                    <button
                                                        class="rounded-[8px] focus:outline-none focus:ring-transparent  border border-lavender text-regular py-[10px] px-[45px] text-electricGreen border-[#1ED761] text-[15px] flex-1"
                                                        data-tabs-target="#dashboard"
                                                        onclick="document.getElementById('device_type_input').value = 'Android';"
                                                        type="button" role="tab" aria-controls="dashboard"
                                                        aria-selected="false" role="presentation">Android</button>
                                                </li>

                                            </ul>
                                    </div>


                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500]">Background
                                        colour*
                                    </div>
                                    <div
                                        class="bg-[#F2F5F5] rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center cursor-pointer" onclick="document.getElementById('colorPicker').click()">
                                        <div class="grow h-full flex items-center">
                                            <div
                                                class="text-[16px] placeholder-gray-300 md:text-[14px] w-full rounded-regular leading-regular flex items-center justify-between h-full">
                                                <div class="flex items-center">
                                                    <input type="color" name="bg_color" id="colorPicker"
                                                        class="w-[22px] h-[22px] cursor-pointer mr-[8px] flex my-auto rounded-[10px]"
                                                        value="#1ED761">
                                                    <span id="colorCode"
                                                        class="text-[#304861] text-[15px] md:text-[13px] font-[500]">#1ED761</span>
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                                    height="1em" fill="currentColor"
                                                    class="w-[14px] h-[14px] text-[#BEBEBE]">
                                                    <path
                                                        d="M6.192 2.78c-.458-.677-.927-1.248-1.35-1.643a2.972 2.972 0 0 0-.71-.515c-.217-.104-.56-.205-.882-.02-.367.213-.427.63-.43.896-.003.304.064.664.173 1.044.196.687.556 1.528 1.035 2.402L.752 8.22c-.277.277-.269.656-.218.918.055.283.187.593.36.903.348.627.92 1.361 1.626 2.068.707.707 1.441 1.278 2.068 1.626.31.173.62.305.903.36.262.05.64.059.918-.218l5.615-5.615c.118.257.092.512.05.939-.03.292-.068.665-.073 1.176v.123h.003a1 1 0 0 0 1.993 0H14v-.057a1.01 1.01 0 0 0-.004-.117c-.055-1.25-.7-2.738-1.86-3.494a4.322 4.322 0 0 0-.211-.434c-.349-.626-.92-1.36-1.627-2.067-.707-.707-1.441-1.279-2.068-1.627-.31-.172-.62-.304-.903-.36-.262-.05-.64-.058-.918.219l-.217.216zM4.16 1.867c.381.356.844.922 1.311 1.632l-.704.705c-.382-.727-.66-1.402-.813-1.938a3.283 3.283 0 0 1-.131-.673c.091.061.204.15.337.274zm.394 3.965c.54.852 1.107 1.567 1.607 2.033a.5.5 0 1 0 .682-.732c-.453-.422-1.017-1.136-1.564-2.027l1.088-1.088c.054.12.115.243.183.365.349.627.92 1.361 1.627 2.068.706.707 1.44 1.278 2.068 1.626.122.068.244.13.365.183l-4.861 4.862a.571.571 0 0 1-.068-.01c-.137-.027-.342-.104-.608-.252-.524-.292-1.186-.8-1.846-1.46-.66-.66-1.168-1.32-1.46-1.846-.147-.265-.225-.47-.251-.607a.573.573 0 0 1-.01-.068l3.048-3.047zm2.87-1.935a2.44 2.44 0 0 1-.241-.561c.135.033.324.11.562.241.524.292 1.186.8 1.846 1.46.45.45.83.901 1.118 1.31a3.497 3.497 0 0 0-1.066.091 11.27 11.27 0 0 1-.76-.694c-.66-.66-1.167-1.322-1.458-1.847z">
                                                    </path>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500]">
                                        Strip image* (1033x407px)
                                    </div>
                                    <div
                                        class="img-show1 bg-[#F2F5F5] rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <div class="w-full max-w-[80vw]">
                                            <input type="file" accept="image/png, image/jpeg, image/jpg" id="fileInput"
                                                hidden name="strip_img"
                                                onchange="handleImageUpload(this, 'uploadedImage', 'img-space1')">

                                            <div id="img-space1"
                                                class="cursor-pointer h-[40px] flex items-center text-[#BEBEBE] justify-between"
                                                onclick="document.getElementById('fileInput').click()">
                                                <div
                                                    class="overflow-hidden text-ellipsis whitespace-nowrap text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-[#BEBEBE]">
                                                    .png or .jpeg files only
                                                </div>
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                                    height="1em" fill="currentColor" class="w-[14px] h-[12px]">
                                                    <path
                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                    </path>
                                                    <path
                                                        d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z">
                                                    </path>
                                                </svg>

                                            </div>
                                            <div id="above-img-div"
                                                class="cursor-pointer h-[40px] flex items-center text-[#BEBEBE] justify-between">
                                                <div for="fileInput" id="imageNameLabel"
                                                    class="hidden overflow-hidden text-ellipsis whitespace-nowrap text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black">
                                                </div>
                                                <svg id="close-svg" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 16 16" width="1em" height="1em" fill="currentColor"
                                                    class=" w-[14px] h-[12px]">
                                                    <path
                                                        d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <img src="" id="uploadedImage" alt="Uploaded Image" style="display: none;">
                                        </div>
                                    </div>

                                </div>

                            </div>
                            <div class="grow flex flex-col gap-[7px]">
                                <div class="text-[#304861] text-[15px] mt-6 md:text-[13px] font-[500] heading-[20px]">
                                    Top
                                    left icon* (1200x1200px)</div>
                                <div
                                    class="img-show1 bg-[#F2F5F5] rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                    <div class="w-full max-w-[80vw]">
                                        <input type="file" accept="image/png, image/jpeg, image/jpg" id="fileInput2"
                                            hidden enctype="multipart/form-data" name="top_icon"
                                            onchange="handleImageUpload(this, 'uploadedImage2', 'img-space2')">


                                        <div id="img-space2"
                                            class="cursor-pointer h-[40px] flex items-center text-[#BEBEBE] justify-between"
                                            onclick="document.getElementById('fileInput2').click()">
                                            <div
                                                class="overflow-hidden text-ellipsis whitespace-nowrap text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-[#BEBEBE]">
                                                .png or .jpeg files only
                                            </div>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                                height="1em" fill="currentColor" class="w-[14px] h-[12px]">
                                                <path
                                                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z">
                                                </path>
                                                <path
                                                    d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z">
                                                </path>
                                            </svg>
                                        </div>
                                        <div id="above-img-div2"
                                            class="cursor-pointer h-[40px] flex items-center text-[#BEBEBE] justify-between">
                                            <div for="fileInput2" id="imageNameLabel2"
                                                class="hidden overflow-hidden text-ellipsis whitespace-nowrap text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black">
                                            </div>
                                            <svg id="close-svg2" onclick="close_svg2()"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="1em"
                                                height="1em" fill="currentColor" class="w-[14px] h-[12px]">
                                                <path
                                                    d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z">
                                                </path>
                                            </svg>
                                        </div>
                                        <img src="" id="uploadedImage2" alt="Uploaded Image" style="display: none;">
                                    </div>
                                </div>

                            </div>
                            <div class="step_1 bg-[#BEBEBE] mt-6 w-full text-white cursor-pointer text-[15px] font-[500] heading-[14px] rounded-[5px] py-[12px] md:py-[14px] text-center "
                                onclick="hide_div()" id="add_contact_detail">
                                Add contact details</div>

                            <div class="m-auto max-w-[230px] text-[#BEBEBE] text-[9px] text-center mt-[30px]">
                                <strong>You are not creating a Doorway account.</strong>
                                <br>
                                <br>
                                By creating a card, you
                                accept Our <a href="" class="text-electricGreen hover:underline">Terms of
                                    Service </a>&<a href="" class="text-electricGreen hover:underline"> Privacy
                                    Policy</a>.
                            </div>
                        </div>

                        <div class="w-full md:w-[285px] hidden" id="second_page">
                            <div class="flex flex-col gap-[25px]">
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px] ">
                                        Job
                                        title*</div>
                                    <div
                                        class="bg-[#F2F5F5]  rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <input type="text"
                                            class="job_title w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                            placeholder="Chief Networking Officer" value="" name="job_title"
                                            id="job_title">
                                    </div>
                                    <small id="error_job_title" class="text-red-600"></small>
                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px] ">
                                        First Name*</div>
                                    <div
                                        class="bg-[#F2F5F5]  rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <input type="text"
                                            class="f_name w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                            placeholder="Evelyn" value="" name="f_name" id="f_name">
                                    </div>
                                    <small id="error_f_name" class="text-red-600"></small>
                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px] ">
                                        Last Name*</div>
                                    <div
                                        class="bg-[#F2F5F5]  rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <input type="text"
                                            class="l_name w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                            placeholder="Waugh" value="" name="l_name" id="last_name">
                                    </div>
                                    <small id="error_l_name" class="text-red-600"></small>
                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div
                                        class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px] email">
                                        Email*</div>
                                    <div
                                        class="bg-[#F2F5F5] rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <input type="email" name="email"
                                            class=" email w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                            placeholder="evelyn.waugh@gmail.com" value="" id="email">
                                    </div>
                                    <small id="emailErr" class="text-red-600"></small>
                                </div>
                                <div class="grow flex flex-col gap-[7px]">
                                    <div class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px]">How
                                        did you hear about us?*</div>
                                    <div
                                        class="bg-[#F2F5F5]  rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                                        <input type="text" name="reference"
                                            class="reference w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                            placeholder="" value="" id="reference">
                                    </div>
                                    <small id="error_reference" class="text-red-600"></small>
                                </div>
                                <button type="submit" name="save_first_page"
                                    class="bg-[#BEBEBE] text-white cursor-default text-[15px] font-[500] heading-[14px] rounded-[5px] py-[12px] md:py-[14px] text-center"
                                    id="save_first_page" onclick="show_last_stage()" disabled>
                                    Create</button>
                                </form>
                            </div>
                            <div class="m-auto max-w-[230px] text-[#BEBEBE] text-[9px] text-center mt-[30px]">
                                <strong>You are not creating a Doorway account.</strong><br><br>By creating a card, you
                                accept our&nbsp;<a href="#" target="_blank" rel="noreferrer"
                                    class="text-electricGreen hover:underline">Terms of
                                    Service</a>&nbsp;&amp;&nbsp;<a href="#" target="_blank" rel="noreferrer"
                                    class="text-electricGreen hover:underline">Privacy
                                    Policy</a>.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </div>
    <div class="third_step_page hidden flex flex-col items-center">
        <div
            class="hidden md:block text-[25px] md:text-[50px] heading-[58px] font-[700] mb-[12px] md:mb-[17px] text-center max-w-[682px] px-[30px]">
            Save to Wallet</div>
        <div
            class="hidden md:block text-[16px] heading-[25px] mb-[38px] md:mb-[40px] font-[400] text-center max-w-[287px] md:max-w-full">
        </div>
        <div
            class="block md:hidden text-[25px] md:text-[50px] heading-[58px] font-[700] mb-[12px] md:mb-[17px] text-center max-w-[682px] px-[30px]">
            Save to Wallet</div>
        <div
            class="block md:hidden text-[16px] heading-[25px] mb-[38px] md:mb-[40px] font-[400] text-center max-w-[287px] md:max-w-full">
        </div>
        <div class="mb-[80px] md:mb-[250px] w-full">
            <div class="flex flex-col md:flex-row gap-[44px] md:gap-[75px] items-center md:items-start justify-center">
                <div class="flex flex-col items-center">
                    <div class="flex-col items-center hidden sm:flex">
                        <div class="text-[16px] mt-[-40px] mb-[50px]">Scan QR code</div>
                        <div class="shadow-regular rounded-lg p-[35px]"><svg height="180" width="180"
                                viewBox="0 0 37 37">
                                <path fill="#FFFFFF" d="M0,0 h37v37H0z" shape-rendering="crispEdges"
                                    data-gtm-vis-recent-on-screen94227727_37="58223"
                                    data-gtm-vis-first-on-screen94227727_37="58223"
                                    data-gtm-vis-total-visible-time94227727_37="100"
                                    data-gtm-vis-has-fired94227727_37="1">
                                </path>
                                <path fill="#000000"
                                    d="M0 0h7v1H0zM8 0h2v1H8zM13 0h3v1H13zM17 0h1v1H17zM19 0h6v1H19zM28 0h1v1H28zM30,0 h7v1H30zM0 1h1v1H0zM6 1h1v1H6zM8 1h1v1H8zM10 1h1v1H10zM12 1h1v1H12zM15 1h1v1H15zM18 1h1v1H18zM22 1h5v1H22zM30 1h1v1H30zM36,1 h1v1H36zM0 2h1v1H0zM2 2h3v1H2zM6 2h1v1H6zM9 2h1v1H9zM13 2h1v1H13zM18 2h1v1H18zM23 2h1v1H23zM25 2h1v1H25zM28 2h1v1H28zM30 2h1v1H30zM32 2h3v1H32zM36,2 h1v1H36zM0 3h1v1H0zM2 3h3v1H2zM6 3h1v1H6zM8 3h4v1H8zM13 3h1v1H13zM17 3h1v1H17zM19 3h1v1H19zM22 3h1v1H22zM24 3h5v1H24zM30 3h1v1H30zM32 3h3v1H32zM36,3 h1v1H36zM0 4h1v1H0zM2 4h3v1H2zM6 4h1v1H6zM10 4h1v1H10zM14 4h1v1H14zM17 4h1v1H17zM19 4h1v1H19zM24 4h1v1H24zM27 4h2v1H27zM30 4h1v1H30zM32 4h3v1H32zM36,4 h1v1H36zM0 5h1v1H0zM6 5h1v1H6zM9 5h1v1H9zM11 5h5v1H11zM19 5h1v1H19zM21 5h2v1H21zM30 5h1v1H30zM36,5 h1v1H36zM0 6h7v1H0zM8 6h1v1H8zM10 6h1v1H10zM12 6h1v1H12zM14 6h1v1H14zM16 6h1v1H16zM18 6h1v1H18zM20 6h1v1H20zM22 6h1v1H22zM24 6h1v1H24zM26 6h1v1H26zM28 6h1v1H28zM30,6 h7v1H30zM8 7h1v1H8zM10 7h2v1H10zM14 7h4v1H14zM22 7h3v1H22zM27 7h2v1H27zM0 8h1v1H0zM2 8h2v1H2zM5 8h3v1H5zM9 8h3v1H9zM15 8h1v1H15zM17 8h2v1H17zM21 8h1v1H21zM24 8h1v1H24zM27 8h1v1H27zM30 8h1v1H30zM33 8h1v1H33zM35,8 h2v1H35zM0 9h1v1H0zM5 9h1v1H5zM7 9h3v1H7zM13 9h3v1H13zM18 9h3v1H18zM23 9h2v1H23zM26 9h1v1H26zM29 9h1v1H29zM35 9h1v1H35zM1 10h2v1H1zM6 10h2v1H6zM9 10h3v1H9zM16 10h2v1H16zM20 10h1v1H20zM22 10h4v1H22zM28 10h2v1H28zM31 10h2v1H31zM34 10h1v1H34zM0 11h1v1H0zM4 11h1v1H4zM7 11h1v1H7zM9 11h3v1H9zM13 11h1v1H13zM16 11h1v1H16zM18 11h2v1H18zM25 11h2v1H25zM28 11h2v1H28zM32 11h1v1H32zM34 11h1v1H34zM0 12h1v1H0zM5 12h3v1H5zM9 12h1v1H9zM14 12h4v1H14zM22 12h1v1H22zM24 12h3v1H24zM29 12h2v1H29zM32,12 h5v1H32zM0 13h1v1H0zM2 13h2v1H2zM5 13h1v1H5zM7 13h3v1H7zM12 13h4v1H12zM17 13h1v1H17zM19 13h1v1H19zM24 13h1v1H24zM26 13h3v1H26zM30 13h4v1H30zM36,13 h1v1H36zM0 14h3v1H0zM6 14h4v1H6zM11 14h1v1H11zM16 14h1v1H16zM19 14h1v1H19zM21 14h2v1H21zM24 14h3v1H24zM29 14h1v1H29zM32 14h1v1H32zM34 14h1v1H34zM0 15h1v1H0zM2 15h4v1H2zM8 15h1v1H8zM11 15h3v1H11zM19 15h5v1H19zM28 15h1v1H28zM30 15h3v1H30zM35,15 h2v1H35zM4 16h3v1H4zM9 16h2v1H9zM12 16h1v1H12zM18 16h2v1H18zM21 16h1v1H21zM24 16h5v1H24zM33 16h3v1H33zM2 17h1v1H2zM5 17h1v1H5zM7 17h1v1H7zM11 17h1v1H11zM18 17h1v1H18zM20 17h2v1H20zM23 17h1v1H23zM25 17h1v1H25zM27 17h2v1H27zM30 17h2v1H30zM33 17h1v1H33zM35,17 h2v1H35zM0 18h1v1H0zM3 18h4v1H3zM8 18h1v1H8zM10 18h4v1H10zM22 18h1v1H22zM27 18h2v1H27zM30 18h3v1H30zM35,18 h2v1H35zM4 19h1v1H4zM7 19h4v1H7zM12 19h2v1H12zM15 19h3v1H15zM19 19h1v1H19zM22 19h1v1H22zM24 19h1v1H24zM28 19h2v1H28zM31 19h3v1H31zM35 19h1v1H35zM1 20h3v1H1zM5 20h3v1H5zM9 20h1v1H9zM13 20h1v1H13zM15 20h3v1H15zM21 20h2v1H21zM26 20h4v1H26zM31 20h2v1H31zM36,20 h1v1H36zM0 21h6v1H0zM7 21h2v1H7zM11 21h1v1H11zM16 21h1v1H16zM18 21h4v1H18zM23 21h4v1H23zM28 21h2v1H28zM33 21h1v1H33zM35 21h1v1H35zM0 22h2v1H0zM5 22h2v1H5zM10 22h2v1H10zM13 22h1v1H13zM16 22h1v1H16zM22 22h3v1H22zM31 22h1v1H31zM35 22h1v1H35zM2 23h1v1H2zM5 23h1v1H5zM8 23h1v1H8zM10 23h1v1H10zM12 23h3v1H12zM18 23h1v1H18zM20 23h1v1H20zM23 23h4v1H23zM32 23h3v1H32zM36,23 h1v1H36zM0 24h1v1H0zM2 24h2v1H2zM6 24h3v1H6zM11 24h1v1H11zM13 24h5v1H13zM23 24h1v1H23zM25 24h1v1H25zM27 24h1v1H27zM29 24h4v1H29zM34 24h1v1H34zM36,24 h1v1H36zM1 25h4v1H1zM9 25h2v1H9zM13 25h2v1H13zM18 25h5v1H18zM25 25h1v1H25zM27 25h1v1H27zM29 25h2v1H29zM32 25h1v1H32zM35,25 h2v1H35zM1 26h6v1H1zM10 26h1v1H10zM12 26h2v1H12zM17 26h3v1H17zM21 26h1v1H21zM25 26h1v1H25zM28 26h1v1H28zM31 26h1v1H31zM33 26h1v1H33zM35 26h1v1H35zM0 27h1v1H0zM3 27h1v1H3zM7 27h2v1H7zM12 27h1v1H12zM15 27h1v1H15zM21 27h3v1H21zM26 27h1v1H26zM28 27h1v1H28zM30 27h1v1H30zM32 27h2v1H32zM36,27 h1v1H36zM2 28h2v1H2zM5 28h2v1H5zM12 28h2v1H12zM16 28h1v1H16zM18 28h1v1H18zM21 28h3v1H21zM25 28h2v1H25zM28 28h8v1H28zM8 29h1v1H8zM10 29h1v1H10zM12 29h1v1H12zM14 29h3v1H14zM20 29h6v1H20zM28 29h1v1H28zM32 29h1v1H32zM34 29h1v1H34zM36,29 h1v1H36zM0 30h7v1H0zM8 30h2v1H8zM12 30h2v1H12zM15 30h1v1H15zM17 30h2v1H17zM20 30h2v1H20zM25 30h1v1H25zM28 30h1v1H28zM30 30h1v1H30zM32 30h1v1H32zM34,30 h3v1H34zM0 31h1v1H0zM6 31h1v1H6zM8 31h3v1H8zM12 31h8v1H12zM23 31h1v1H23zM26 31h3v1H26zM32 31h1v1H32zM35 31h1v1H35zM0 32h1v1H0zM2 32h3v1H2zM6 32h1v1H6zM12 32h1v1H12zM14 32h1v1H14zM16 32h1v1H16zM20 32h2v1H20zM23 32h1v1H23zM26 32h1v1H26zM28 32h6v1H28zM35 32h1v1H35zM0 33h1v1H0zM2 33h3v1H2zM6 33h1v1H6zM8 33h2v1H8zM11 33h1v1H11zM14 33h3v1H14zM18 33h2v1H18zM21 33h1v1H21zM23 33h1v1H23zM25 33h1v1H25zM27 33h2v1H27zM30 33h1v1H30zM32 33h1v1H32zM35,33 h2v1H35zM0 34h1v1H0zM2 34h3v1H2zM6 34h1v1H6zM8 34h1v1H8zM10 34h2v1H10zM15 34h1v1H15zM20 34h1v1H20zM22 34h4v1H22zM27 34h4v1H27zM32 34h1v1H32zM34 34h1v1H34zM0 35h1v1H0zM6 35h1v1H6zM10 35h1v1H10zM12 35h4v1H12zM22 35h1v1H22zM25 35h1v1H25zM31 35h2v1H31zM34 35h1v1H34zM0 36h7v1H0zM8 36h3v1H8zM14 36h1v1H14zM17 36h1v1H17zM22 36h1v1H22zM24 36h3v1H24zM29 36h1v1H29zM32 36h1v1H32zM34,36 h3v1H34z"
                                    shape-rendering="crispEdges"></path>
                            </svg></div><a href="#" class="text-electricGreen text-[15px] mt-[50px]">Save via PC</a>
                        <div class="msg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </section>

    <!----------------------------------------------------- Section 4 Over ------------------------------------------------------------->
    </div>


    <!-- MODAL -->


    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class=" p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="md:w-[40vw] max-w-[560px] pb-5 pt-[5px] transform overflow-y-auto rounded-2xl bg-white p-6 text-left align-middle shadow-xl transition-all opacity-100 translate-y-0 sm:scale-100"
                id="headlessui-dialog-panel-:rn:" data-headlessui-state="open">
                <div class="w-full block">
                    <button type="button"
                        class="float-none block  end-2.5 text-gray-400 bg-transparent rounded-lg text-sm w-8 h-8 ms-auto justify-center items-center cursor-pointer"
                        data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <div class="w-[250px] m-auto flex flex-col gap-[20px]">
                    <div class="text-[#061C33] font-inter text-[21px] font-semibold leading-tight">Find company branding
                    </div>
                    <div class="grow flex flex-col gap-[7px]">
                        <div class="text-[#304861] text-[15px] md:text-[13px] font-[500] heading-[20px]">Company website
                            URL*</div>
                        <div
                            class="bg-[#F2F5F5] rounded-[5px] min-h-[55px] md:min-h-[40px] px-[11px] flex items-center">
                            <input type="url"
                                class="w-full h-full focus:outline-none focus:ring-transparent bg-transparent outline-none border-none p-0 text-[16px] placeholder-gray-300 md:text-[14px] heading-[20px] text-black"
                                placeholder="www.p&amp;p.com" value="" tabindex="0" id="websiteInput">
                        </div>
                        <small id="urlErrorMessage" class="text-red-500"></small>
                    </div>
                    <div class="w-full">
                        <div
                            class="colorless_btn bg-[#BEBEBE] text-white cursor-default text-[15px] font-[500] heading-[14px] rounded-[5px] py-[12px] md:py-[14px] text-center">
                            Find</div>
                        <div
                            class="green_btn bg-electricGreen text-white cursor-pointer text-[15px] font-[500] heading-[14px] rounded-[5px] py-[12px] md:py-[14px] text-center hidden">
                            Find</div>
                    </div>
                </div>



            </div>
        </div>
    </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js"></script>
    <script src="diable.js"></script>
    <script src="submit.js"></script>
    <script src="findbranding.js"></script>
</body>

</html>