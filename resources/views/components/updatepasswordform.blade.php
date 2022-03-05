<form action="{{ route('password.update') }}" method="post">
    @method('put')
    @csrf

<div class="sign-in-form-password mb-2">
    <label for="">Current Password</label>
    <div class="relative">
        <input id="password-input" class="shadow rounded-lg focus:ring-1 focus:ring-blue-400 appearance-none border mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="current_password" name="current_password" type="password" placeholder="">
        <span class="">
        <svg id="close-password" class="hidden close-password w-5 h-5 absolute bottom-5 right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>
        <svg id="show-password" class="show-password w-5 h-5 absolute bottom-5 right-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
        </span>
    </div>
    @error('current_password')
    <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
        {{ $message }}
    </div>
    @enderror
</div>

<div class="sign-in-form-password mb-2">
    <label for="">New Password</label>
    <input class="shadow rounded-lg appearance-none border focus:ring-1 focus:ring-blue-400 mt-2 w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" type="password" name="password_confirmation" id="password_confirmation">
    @error('password_confirmation')
    <div id="validationServerUsernameFeedback" class="invalid-feedback text-red-600">
        {{ $message }}
    </div>
    @enderror
</div>



{{-- <div class="flex justify-between mb-8 items-center">
    <div class="remember-me">
        <input class="w-4" type="checkbox" name="remember" id="remember">
        <label for="remember">Remember me</label>
    </div>

    <div class="forgot-password text-blue-600 font-semibold">
        <a href="">Forgot your password?</a>
    </div>
</div> --}}

<div class="submit-button text-white font-semibold">
    <button class="bg-black p-2 w-full text-center rounded-lg" type="submit">Update Password</button>
</div>
</form>
