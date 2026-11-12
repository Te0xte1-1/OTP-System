<?php $__env->startSection('title', 'Sign in Page'); ?>
<?php $__env->startSection('content'); ?>
    <div class="p-3">
        <div class="bg-[#FFFFFF] w-80 p-5 border border-1xl border-gray-300 shadow-xl rounded-xl">
            <h4 class="text-gray-900 text-center capitalize font-semibold">
                welcome back
            </h4>
            <p class="text-black text-center capitalize text-sm whitespace-normal tracking-wide mt-2 leading-6">
                access your orders wishlist and exclusive by logging in
            </p>
            <br />
            <div class="group-label">
                <label for="E-mail" class="font-semibold text-sm text-gray-900 capitalize mr-4">Email</label>
                <br />
                <input type="email" name="email" id="email" placeholder="Enter Your Email"
                    class="px-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white focus:bg-white" />
            </div>
            <br />
            <div class="group-label">
                <label for="password" class="font-semibold text-sm text-gray-900 capitalize mr-4">password</label>
                <br />
                <input type="password" name="password" id="password" placeholder="Enter Your Password"
                    class="px-2 text-sm rounded-xl border border-gray-200 text-gray-900 bg-gray-50 w-full focus:outline-gray-400 focus:bg-white focus:bg-white" />
            </div>
            <br />
            <div class="flex justify-between">
                <div class="">
                    <label for="checkbox" class="font-bold text-gray-500 capitalize">Remember Me</label>
                    <input type="checkbox" name="checkbox" id="checkbox" />
                    <br />
                    <br />
                </div>
                <div class="">
                    <label for="checkbox" class="font-bold text-red-500 capitalize">Forget Password</label>
                </div>
            </div>
            <button
                class="bg-indigo-700 text-white p-1 w-full font-bold rounded-xl border border-gray-500 border-1xl hover:bg-indigo-800 hover:text-gray-200 hover:border-indigo-900">
                Submit
            </button>
            <h6 class="text-gray-900 ">OR</h6>
            <ul>
                <li class="my-5 text-center">
                    <a href="#" class="bg-[#E6E6E6] font-semibold text-sm p-2 rounded-xl">containue with
                        Google</a>
                </li>
                <li class="my-5 text-center">
                    <a href="#" class="bg-[#E6E6E6] font-semibold text-sm p-2 rounded-xl">containue with Apple</a>
                </li>
            </ul>
        </div>
    </div>
    

<?php echo $__env->make('layout.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
<?php echo $__env->make('layout.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\OTP-System\resources\views/sign_in.blade.php ENDPATH**/ ?>