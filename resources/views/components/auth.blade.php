<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>||</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>
<body>
    <div class="wrapper w-full">
        <div class="flex justify-between">
            <div class="left-section w-1/2 p-20">
                <div class="back text-blue-600 font-semibold mb-10">
                    <a class="flex items-center" href="/">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg>
                        <span class="ml-2">Back To Home</span>
                    </a>

                </div>
                <div class="logo w-full">
                    <img class="w-10" src="{{ asset('image/profile1.jpg') }}" alt="">
                </div>

                <div class="sign-in-text font-bold text-black mb-4 text-3xl">
                    <h1>Sign In To Your Account</h1>
                </div>

            <x-loginform/>
            </div>
            <div class="right-section w-1/2">
                <img class="w-full bg-cover" src="https://source.unsplash.com/1920x2000/?webdevelopment" alt="">
            </div>
        </div>
    </div>

    <script>
        let showPassword = document.getElementById("show-password");
       let passwordInput = document.getElementById("password-input");
       let closePassword = document.getElementById("close-password");

       showPassword.addEventListener("click" , function(){
         if(passwordInput.type == "password"){
           passwordInput.type = 'text';
           showPassword.classList.add("hidden");
           closePassword.classList.remove("hidden")
         }
       });

       closePassword.addEventListener("click" , function(){
         if(passwordInput.type == "text"){
           passwordInput.type = 'password';
           closePassword.classList.add("hidden")
           showPassword.classList.remove("hidden")
         }
       });
   </script>
</body>

</html>

@include('sweetalert::alert')
