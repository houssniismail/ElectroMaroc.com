<?php
if(isset($_POST['submit'])){
    $category = categoryController::ajouterCategory();
}
$newLogin = AdminController::logincontroller();
if(!$_SESSION['emailAdmin']){
  Redirect::to('loginAdmin');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>add category</title>
</head>
<body>
<div>
  <section>
<nav class="flex justify-between bg-gray-900 text-white w-screen w-[100vw]">
      <div class="px-5 xl:px-12 py-6 flex w-full items-center">
        <a class="text-3xl font-bold font-heading" href="#">
          <!-- <img class="h-9" src="logo.png" alt="logo"> -->
          ELECTRO<span class="text-rose-800">MAROC</span>
        </a>
        <!-- Nav Links -->
        <ul class="hidden md:flex px-4 mx-auto font-semibold font-heading space-x-12">
          <li><a class="hover:text-gray-200" href="./dashboard">dashpord</a></li>
          <li><a class="hover:text-gray-200" href="./add">add Product</a></li>
          <li><a class="hover:text-gray-200" href="./addCategory">add category</a></li>
          <li><a class="hover:text-gray-200" href="./category">show all category</a></li>
          <li><a class="hover:text-gray-200" href="./ProductAdmin">show all product</a></li>
        </ul>
        <!-- Header Icons -->
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

    <form action="" method="POST" enctype="multipart/form-data">
      <div class="border w-[30vw] py-[20px] ml-auto mr-auto mt-[200px] rounded bg-gray-200">
        <div  class="text-center my-[10px]">
        <h1>Add category</h1>
        </div>
      <div class="grid justify-center ">
        <div>
        <input class="rounded w-[25vw] h-[30px]" type="text" name="nom" placeholder="name ...">
        </div>
        <div>
        <input class="rounded w-[25vw] mt-[50px] h-[30px]"  type="text" name="description" placeholder="description ...">
        </div>
        <div>
        <input class="rounded w-[25vw] mt-[50px] h-[30px]" type="file" name="image">
        </div>
        </div>
        <div class="flex justify-center ml-auto mr-auto mt-[50px] w-[25vw]">
      <button type="submit" name="submit" class=" ml- auto mr-auto py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
      
      <!-- Secondary -->
      <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50"><a href="./dashboard">Cancel</a></button>
    </div>
    </div>
    </form>
</body>
</html>