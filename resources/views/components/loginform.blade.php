<form action="{{ route('login.authenticate') }}" method="post">
    @csrf

    <div class="sign-in-form-email mb-4">
        <label for="">Email Address</label>
        <input value="{{ old('email') }}" class="shadow rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="email" name="email" id="email">
        @error('email')
        <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="sign-in-form-password mb-4">
        <label for="">Password</label>
        <div class="relative">
            <input id="password-input" class="shadow rounded-lg appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" name="password" type="password" placeholder="">
            <span class="">
            <svg id="close-password" class="hidden close-password w-5 h-5 absolute bottom-5 right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
            <svg id="show-password" class="show-password w-5 h-5 absolute bottom-5 right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
            </span>
        </div>
        @error('password')
        <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="flex items-center mb-4">
        <input type="checkbox" id="remember_me" name="remember_me" class=" text-primary-500 shadow-sm focus:outline-none border-gray-200 rounded w-[18px] h-[18px] ring-offset-0 focus:ring-offset-0 focus:ring-0 focus:shadow-none">
        <span class="ml-2 text-sm text-black select-none">Remember me</span>
    </div>

    <div class="flex justify-between mb-8 items-center">
        <div class="remember-me text-blue-600 font-semibold">
            <a href="/register">
                <span>Register Here</span>
            </a>
        </div>

        <div class="forgot-password text-blue-600 font-semibold">
            <a href="">Forgot your password?</a>
        </div>
    </div>

    <div class="submit-button text-white">
        <button class="bg-blue-700 p-2 w-full text-center rounded-lg" type="submit">Sign In</button>
    </div>
</form>
