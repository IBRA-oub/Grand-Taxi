<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ========== Tailwind Css ========  -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- ========== AwesomeFonts Css ========  -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/d0fb25e48c.js" crossorigin="anonymous"></script>
    <title>login</title>
</head>

<body>

    <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 py-5">
        <div class="bg-gray-100 text-gray-500 rounded-3xl shadow-xl w-full overflow-hidden" style="max-width:1000px">
            <div class="md:flex w-full">
                <div class="hidden md:block w-1/2 bg-white py-10 px-10">
                    <img src="https://img.freepik.com/vecteurs-libre/illustration-du-concept-connexion_114360-739.jpg?w=740&t=st=1707428812~exp=1707429412~hmac=bf8eb192162b60f29dc8e2a45c80b40775ef33a06978fc4308d37f4fb15839ee" alt="">
                </div>
                <div class="w-full md:w-1/2 py-10 px-5 md:px-10">
                    <div class="text-center mb-10">
                        <h1 class="font-bold text-3xl text-gray-900">Log in</h1>
                        <p>WELCOME BACK</p>
                    </div>
                    <div>
                      
                        <form action="{{route('login.action')}}" method="POST">
                            @csrf
                            
                            <div class="w-full px-3 mb-12">
                                <label for="" class="text-xs font-semibold px-1">email</label>
                                <div class="flex">
                                    <div
                                        class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                        <i class="mdi mdi-account-outline text-gray-400 text-lg"></i>
                                    </div>
                                    <input type="text" name="email"
                                        class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                        placeholder="John">
                                </div>
                                @error('email')
                                <p class="text-red-600">{{ $message }}</p>
                              @enderror
                            </div>

                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-12">
                                    <label for="" class="text-xs font-semibold px-1">Password</label>
                                    <div class="flex">
                                        <div
                                            class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center">
                                            <i class="mdi mdi-lock-outline text-gray-400 text-lg"></i>
                                        </div>
                                        <input type="password" name="password"
                                            class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-indigo-500"
                                            placeholder="************">
                                    </div>
                                    @error('password')
                                    <p class="text-red-600">{{ $message }}</p>
                                  @enderror
                                </div>
                            </div>
                            <div class="flex -mx-3">
                                <div class="w-full px-3 mb-5">
                                    <button type="submit"
                                        class="block w-full max-w-xs mx-auto bg-indigo-500 hover:bg-indigo-700 focus:bg-indigo-700 text-white rounded-lg px-3 py-3 font-semibold">Log
                                        In
                                    </button>
                                </div>
                            </div>
                           
                          
                        </form>
                        <p class="ml-20 mt-8"><a href="{{ route('register') }}"
                                class="text-blue-500 hover:text-blue-700 font-semibold">Need an account? Create an
                                account</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>