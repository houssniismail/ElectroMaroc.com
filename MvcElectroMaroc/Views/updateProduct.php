<?php
if(isset($_POST['update'])){
    ProductController::updateProduct();
}
$newLogin = AdminController::logincontroller();
if(!$_SESSION['emailAdmin']){
  Redirect::to('loginAdmin');
}
$data = ProductController::AficherOneProduct();
var_dump($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
<div>
  <section>
<nav class="flex justify-between bg-gray-900 text-white w-screen">
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
    <div class="p-8 rounded border border-gray-200">
    <form action="" method="POST" enctype="multipart/form-data">
    <div class="mt-8 space-y-6">
      <div>
        <label for="name" class="text-sm text-gray-700 block mb-1 font-medium">reference</label>
        <input type="text" name="reference" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="email" class="text-sm text-gray-700 block mb-1 font-medium">libelle</label>
        <input type="text" name="libelle" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">CodeBar</label>
        <input type="text" name="CodeBar" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">prixdAchat</label>
        <input type="text" name="prixdAchat" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">prixFinal</label>
        <input type="text" name="prixFinal" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">prixdOfer</label>
        <input type="text" name="prixdOfer" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">description</label>
        <input type="text" name="description" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">for_category</label>
        <input type="text" name="for_category" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">name</label>
        <input type="text" name="name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
    </div>
    <div class="space-x-4 mt-8">
      <button type="submit" name="update" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>
      <!-- Secondary -->
      <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50"><a href="./dashboard">Cancel</a></button>
    </div>
  </form>
</div>
</body>
</html>