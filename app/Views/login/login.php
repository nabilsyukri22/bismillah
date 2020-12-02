<?= $this->extend('layout/templateLoginRegisterReset') ?>

<?php
$visibility = 'hidden'; // bisa diisi hidden untuk menonaktifkan
?>

<?= $this->section('content') ?>
<!-- konten  -->
<div class="flex flex-col justify-center flex-grow">
    <div class="block md:flex mx-auto w-11/12 ">

        <div class="bg-cover bg-center w-1/2" style="background-image: url(/img/illus-02-02.png)"></div>

        <div class="flex flex-col flex-grow items-center py-5 px-1 bg-white shadow-2xl rounded-xl md:-ml-2">
            <div class="font-bold font-sans text-xl mb-8 mt-5"> LOGIN USER</div>

            <!-- tulisan kalo akun yang dimasukkan salah untuk saat ini masih ke hidden, untuk mengnonaktifkan bisa mengisi 'hidden' pada variabel visibility di text php -->
            <div class=" w-11/12 md:w-9/12 mb-2 text-center text-sm md:text-base bg-red-200 text-red-600 font-semibold p-1 rounded-lg <?= $visibility ?>">Username/password was wrong!</div>
            <!-- tulisan kalo akun yang dimasukkan salah -->


            <form action="" class="flex flex-col items-center w-full">
                <!-- username -->
                <div class="flex w-11/12 md:w-9/12 mb-4 ">
                    <label for="username" class="my-auto"> Username&nbsp;:</label>
                    <div class="flex-grow ml-4 ">
                        <input type="text" name=" username" id="username" placeholder="username" autocomplete="off" class="shadow-md border-2 w-full h-10 rounded-lg px-3 py-2 focus:outline-none border-gray-200 focus:border-gray-700 placeholder-gray-700 text-sm align-middle" required>
                    </div>
                </div>
                <!-- username -->

                <!-- password  -->
                <div class="flex w-11/12 md:w-9/12 mb-4 ">
                    <label for="password" class="my-auto"> Password&nbsp;&nbsp;:</label>
                    <div class="flex-grow ml-4 ">
                        <input type="password" name=" password" id="password" placeholder="type your password" autocomplete="off" class="shadow-md border-2 w-full h-10 rounded-lg px-3 py-2 focus:outline-none border-gray-200 focus:border-gray-700 placeholder-gray-700 text-sm align-middle" required>
                    </div>
                </div>
                <!-- password  -->

                <!-- Remember Me -->
                <div class="flex w-11/12 md:w-9/12 mb-4 ">
                    <div class="w-20 "></div>
                    <div class="flex flex-grow ml-4 ">
                        <input type="checkbox" name="rememberMe" id="rememberMe" value="rememberMe" class="my-auto">
                        <label for="rememberMe" class="ml-3 text-sm">Remember me</label>
                    </div>
                </div>
                <!-- Remember Me -->

                <!-- submit + forgot your password -->
                <div class="flex w-11/12 md:w-9/12 mb-4 ">
                    <div class=" w-20 "></div>
                    <div class="flex flex-grow ml-2 justify-between">
                        <input type="submit" value="Login" id="submit" class="text-xs my-auto text-white font-bold hover:from-blue-500 hover:to-indigo-600 py-2 px-10cursor-pointer focus:outline-none bg-gradient-to-r from-blue-500 to-indigo-500 py-2 px-8 ml-4 rounded-md">
                        <div class="text-blue-500 my-auto mr-2 ml-1 text-sm"> <a href="/reset/lama">Forgot your password?</a></div>
                    </div>
                </div>
                <!-- submit + forgot your password -->

            </form>

            <div class="flex w-11/12 md:w-9/12 justify-center mb-4 ">
                <div class="flex-grow my-auto">
                    <hr class="bg-gray-500">
                </div>
                <div class="mx-6 text-lg">ATAU</div>
                <div class="flex-grow my-auto">
                    <hr class="bg-gray-500">
                </div>
            </div>

            <!-- login with sipadu -->
            <a href="/login/sipadu">
                <div class=" flex py-2 px-6 border-2 border-blue-500 rounded-lg mb-4 hover:border-blue-700 hover:bg-blue-100">
                    <img src="/img/logo.png" alt="" class="w-6 h-6">
                    <div class="ml-2 my-auto text-blue-500 hover:text-blue-700 font-semibold"> Login with SIPADU</div>
                </div>
            </a>
            <!-- login with sipadu -->

            <!-- login with google -->
            <a href="">
                <div class=" flex py-2 px-6 border-2 border-blue-500 rounded-lg hover:border-blue-700 hover:bg-blue-100">
                    <img src="/img/search.png" alt="" class="w-6 h-6">
                    <div class="ml-2 my-auto text-blue-500 hover:text-blue-700 font-semibold"> Login with Google</div>
                </div>
            </a>
            <!-- login with google -->


        </div>
    </div>
</div>
<!-- konten -->
<?= $this->endSection() ?>