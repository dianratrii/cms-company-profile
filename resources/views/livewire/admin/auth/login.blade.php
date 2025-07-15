<div class="card max-w-[370px] w-full">
    <form action="#" class="card-body flex flex-col gap-5 p-10" id="sign_in_form" method="get">
        <div class="text-center mb-2.5">
            <h3 class="text-lg font-semibold text-gray-900 leading-none mb-2.5">
                Sign in
            </h3>
            <div class="flex items-center justify-center font-medium">
       <span class="text-2sm text-gray-600 me-1.5">
        Need an account?
       </span>
                <a class="text-2sm link" href="html/demo1/authentication/classic/sign-up.html">
                    Sign up
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-1">
            <label class="form-label text-gray-900">
                Email
            </label>
            <input class="input" placeholder="email@email.com" type="text" value=""/>
        </div>
        <div class="flex flex-col gap-1">
            <div class="flex items-center justify-between gap-1">
                <label class="form-label text-gray-900">
                    Password
                </label>
                <a class="text-2sm link shrink-0" href="html/demo1/authentication/classic/reset-password/enter-email.html">
                    Forgot Password?
                </a>
            </div>
            <label class="input" data-toggle-password="true">
                <input name="user_password" placeholder="Enter Password" type="password" value=""/>
                <button class="btn btn-icon" data-toggle-password-trigger="true">
                    <i class="ki-filled ki-eye text-gray-500 toggle-password-active:hidden">
                    </i>
                    <i class="ki-filled ki-eye-slash text-gray-500 hidden toggle-password-active:block">
                    </i>
                </button>
            </label>
        </div>
        <label class="checkbox-group">
            <input class="checkbox checkbox-sm" name="check" type="checkbox" value="1"/>
            <span class="checkbox-label">
       Remember me
      </span>
        </label>
        <button class="btn btn-primary flex justify-center grow">
            Sign In
        </button>
    </form>
</div>
