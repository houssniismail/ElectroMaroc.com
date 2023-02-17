<?php
if(isset($_POST['login'])){
    $newLogin = ClientsController::loginClient();
}
if(!empty($_SESSION['email'])){
Redirect::to('index');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>login</title>
</head>
<body class="bg-black">
	<!-- navbar -->
<div class="flex flex-wrap h-screen" style="height: 87px;">
  <section class="relative mx-auto " >
      <!-- navbar -->
    <nav class="flex justify-between bg-gray-900 text-white w-screen">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <!-- <img class="h-9" src="logo.png" alt="logo"> -->
          ELECTRO<span class="text-rose-800">MAROC</span>
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="./index">Home</a></li>
          <li><a class="hover:text-gray-200" href="./products">products</a></li>
          <li><a class="hover:text-gray-200" href="#">catedory</a></li>
          <li><a class="hover:text-gray-200" href="./Contact">Contact</a></li>
        </ul>
        <!-- Header Icons -->
        <div class="hidden xl:flex items-center space-x-5 items-center">
        <?php
         if(empty($_SESSION['email'])){
          echo '<!-- Sign In / Register      -->
          <a class="flex items-center hover:text-gray-200" href="./login">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
          </a>';
         }else{
          echo '<a class="flex items-center hover:text-gray-200" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
            <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
            </span>
          </span>
         </a>
         <a class="flex items-center hover:text-gray-200" href="./login">
         <i class="fa-solid fa-arrow-right-from-bracket"></i>
         </a>
         ';
         }
         ?>          
        </div>
      </div>
      <!-- Responsive navbar -->
      <a class="xl:hidden flex mr-6 items-center" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
        </svg>
        <span class="flex absolute -mt-5 ml-4">
          <span class="animate-ping absolute inline-flex h-3 w-3 rounded-full bg-pink-400 opacity-75"></span>
          <span class="relative inline-flex rounded-full h-3 w-3 bg-pink-500">
          </span>
        </span>
      </a>
      <a class="navbar-burger self-center mr-12 xl:hidden" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hover:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
      </a>
    </nav>
    
  </section>
</div>
    <!-- component -->
     <form method="POST">
      <div class="flex-col w-[30vw] ml-auto mr-auto border bg-gray-900 rounded mt-36 p-8">
        <div >
        <input class="block ml-auto mr-auto w-full mt-12 h-12 rounded" type="text" name="email" placeholder="email ...">
        </div>
        <div>
        <input class="block ml-auto mr-auto w-full mt-12 h-12 rounded" type="password" name="password" placeholder="password ...">
        </div>
        <div class="w-full flex justify-start items-center justify-between">
        <button name="login" class="block border w-[60px] mt-12 h-[40px]  bg-rose-800 rounded text-white">login</button>
        <a href="./regester" class="text-gray-50 mt-[40px]">register</a>
        </div>
        
      </div>

     </form>
</body>
</html>