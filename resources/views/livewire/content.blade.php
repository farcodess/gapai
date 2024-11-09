<div>
    <div style="overflow: hidden; position: relative;"> <!-- Add overflow hidden and position relative here -->
        <style>
    
            .lingkaran1 {
                position: absolute;
                bottom: 500px; /* Adjust if needed */
                left: -280px; /* Adjust if needed */
                width: 450px;
                height: 450px;
                background: #6696b1;
                border-radius: 50%; /* Changed from 100% to 50% for proper circle */
                z-index: 0; /* Positioned behind content */
            }
    
            .lingkaran2 {
                position: absolute;
                bottom: 50px; 
                right: -290px; /* Adjust to fit your view */
                width: 500px;
                height: 500px;
                background: #6696b1;
                border-radius: 50%; /* Changed from 100% to 50% for proper circle */
                z-index: 0; /* Positioned behind content */
            }
    
           
            .lingkaran5{
                position: absolute;
                left: 1620px;
                bottom: 140px;
                width: 80px;
                height: 80px;
                background: #d4d4d4;
                border-radius: 100%;
            }
        </style>
    
        <div class= "min-h-screen  bg-white py-6  justify-center sm:py-12 select-none">
            <div class=" container mx-auto mt-20 flex flex-row items-center text-center relative">
               
        
            <h1 class="relative left-16 bottom-44" style="font-family: 'Montserrat', sans-serif; font-weight: 600; font-size: 48px; line-height: 1.2; color: #333333;">

                <span style="position: relative; right:67px; color: #1e3a8a;">Know </span><span style="position:relative; right: 67px;  bold;">Yourself</span><br>
                <span style="color: #1e3a8a;">Know </span><span style="font-weight: bold;">Your Potential</span>
              

            </h1>
            <div class="flex flex-row h-20 ">
            <div>
            <img class=" w-20 h-auto relative bottom-12 right-96 " src="{{ URL('img/Assesment.png') }}" alt="">
            {{-- <h1 class="text-center">Assessment</h1> --}}
            </div>
            <img class=" w-20 h-auto relative bottom-14 right-80 " src="{{ URL('img/profil.png') }}" alt="">
            <img class=" w-20 h-auto relative bottom-12 right-64 " src="{{ URL('img/teacher.png') }}" alt="">
          
           </div>

              
            
           <img class="select-none relative max-w-3xl py-2  h-auto mx-auto mb-5 left-36 bottom-10" src="{{ URL('img/bro.png') }}" alt="">

           
        </div>
        <div class="lingkaran1"></div>
        <div class="lingkaran2"></div>
        <div class="lingkaran3"></div>
        <div class="lingkaran4"></div>
        <div class="lingkaran5"></div>


        
    
        
    </div>
   
       
   
   

    
</div>
