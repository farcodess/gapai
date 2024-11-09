<div style="overflow: hidden; position: relative;">
    <style>
        .glow-on-hover {
            transition: box-shadow 0.3s ease;
        }

        .glow-on-hover:hover, 
        .glow-on-hover:focus {
            box-shadow: 0 0 8px rgba(0, 255, 255, 0.7), 0 0 20px rgba(0, 255, 255, 0.5);
        }

        .glow-on-hover:active {
            box-shadow: 0 0 10px rgba(0, 255, 255, 0.9), 0 0 30px rgba(0, 255, 255, 0.7);
        }

        .lingkaran1 {
            position: absolute;
            top: -190px; 
            left: -170px; 
            width: 480px;
            height: 480px;
            background: #6696b1;
            border-radius: 50%;
            z-index: 0; 
        }

        .lingkaran2 {
            position: absolute;
            bottom: -220px; 
            right: -50px;
            width: 500px;
            height: 500px;
            background: #6696b1;
            border-radius: 50%; 
            z-index: 0; 
        }

        .lingkaran3 {
            position: absolute;
            left: 380px;
            bottom: 893px;
            width: 80px;
            height: 80px;
            background: #d4d4d4;
            border-radius: 100%;
        }

        .lingkaran4 {
            position: absolute;
            left: 1892px;
            bottom: 220px;
            width: 60px;
            height: 60px;
            background: #719599;
            border-radius: 100%;
        }

        .lingkaran5 {
            position: absolute;
            left: 1780px;
            bottom: 275px;
            width: 80px;
            height: 80px;
            background: #d4d4d4;
            border-radius: 100%;
        }
    </style>

    <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="select-none relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20 h-00 ">
                <div class="max-w-md mx-auto">
                    <div class="mt-10">    
                        <img class="select-none relative py-2 w-59 h-32 mx-auto mb-5left-4 -top-6" src="{{ URL('img/logos.png') }}" alt="">
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <div class="relative">
                                <svg class="absolute left-0 -ml-14 mt-1" width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <g id="Iconly/Curved/Profile">
                                            <g id="Profile">
                                                <path id="Stroke 1" fill-rule="evenodd" clip-rule="evenodd" d="M11.8445 21.6618C8.15273 21.6618 5 21.0873 5 18.7865C5 16.4858 8.13273 14.3618 11.8445 14.3618C15.5364 14.3618 18.6891 16.4652 18.6891 18.766C18.6891 21.0658 15.5564 21.6618 11.8445 21.6618Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                <path id="Stroke 3" fill-rule="evenodd" clip-rule="evenodd" d="M11.8372 11.1735C14.26 11.1735 16.2236 9.2099 16.2236 6.78718C16.2236 4.36445 14.26 2.3999 11.8372 2.3999C9.41452 2.3999 7.44998 4.36445 7.44998 6.78718C7.4418 9.20172 9.3918 11.1654 11.8063 11.1735C11.8172 11.1735 11.8272 11.1735 11.8372 11.1735Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                                <input autocomplete="off" id="email" name="email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                                <label for="email" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm select-none">Username</label>
                            </div>
                            <br class="select-none">
                            <div class="relative flex">
                                <svg class="absolute left-0 -ml-14 mt-0" width="35px" height="35px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                    <g id="SVGRepo_iconCarrier">
                                        <path d="M15.6807 14.5869C19.1708 14.5869 22 11.7692 22 8.29344C22 4.81767 19.1708 2 15.6807 2C12.1907 2 9.3615 4.81767 9.3615 8.29344C9.3615 9.90338 10.0963 11.0743 10.0963 11.0743L2.45441 18.6849C2.1115 19.0264 1.63143 19.9143 2.45441 20.7339L3.33616 21.6121C3.67905 21.9048 4.54119 22.3146 5.2466 21.6121L6.27531 20.5876C7.30403 21.6121 8.4797 21.0267 8.92058 20.4412C9.65538 19.4167 8.77362 18.3922 8.77362 18.3922L9.06754 18.0995C10.4783 19.5045 11.7128 18.6849 12.1537 18.0995C12.8885 17.075 12.1537 16.0505 12.1537 16.0505C11.8598 15.465 11.272 15.465 12.0067 14.7333L12.8885 13.8551C13.5939 14.4405 15.0439 14.5869 15.6807 14.5869Z" stroke="#1C274C" stroke-width="1.5" stroke-linejoin="round"></path>
                                        <path opacity="0.5" d="M17.8851 8.29353C17.8851 9.50601 16.8982 10.4889 15.6807 10.4889C14.4633 10.4889 13.4763 9.50601 13.4763 8.29353C13.4763 7.08105 14.4633 6.09814 15.6807 6.09814C16.8982 6.09814 17.8851 7.08105 17.8851 8.29353Z" stroke="#1C274C" stroke-width="1.5"></path>
                                    </g>
                                </svg>
                                <input autocomplete="off" id="password" name="password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900 focus:outline-none focus:borer-rose-600" required />
                                <label for="password" class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm select-none">Password</label>
                            </div>
                            <div class="relative ">
                                <button class="bg-cyan-400 shadow-lg shadow-cyan-400/30 text-white rounded-md px-2 py-1 text-sm w-full mt-4 size-10 glow-on-hover">Submit</button>
                            </div>
                            <a href="register" class="select-none text-center text-gray-600 text-1xl relative top-5 left-5 font-semibold" style="text-align: center; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Don't have an account? <span class="font-semibold text-blue-500">Sign Up</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="lingkaran1"></div>
        <div class="lingkaran2"></div>
        <div class="lingkaran3"></div>
        <div class="lingkaran4"></div>
        <div class="lingkaran5"></div>

        <!-- Add SVG icon here -->
        <div class="absolute top-4 right-4">
            <a href="dashboard"><svg width="45px" height="45px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M20 12H4M4 12L10 6M4 12L10 18" stroke="#1C274C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg></a>
        </div>
        
    </div>
</div>
