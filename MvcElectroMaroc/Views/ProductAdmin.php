<?php
$data = ProductController::getAllProduct();

if(isset($_POST['delete'])){
  ProductController::deleteproduit();
}
$newLogin = AdminController::logincontroller();
if(!$_SESSION['emailAdmin']){
  Redirect::to('loginAdmin');
}


if(isset($_POST['update'])){
  $result = ProductController::AficherOneProduct();
  var_dump($result);
}
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
<div class="mt-8 ml-8">
<a href="http://localhost/MvcElectroMaroc/add" class="mt-8 relativ px-6 py-3 text-blue-100 no-underline bg-blue-500 rounded hover:bg-blue-600 hover:underline hover:text-blue-200">Add</a>
</div>
<div class="flex flex-col">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full text-center">
          <thead class="border-b bg-gray-800">
            <tr>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                id
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              reference
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              libelle
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              codeBar
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              prix_achat
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              prix_final
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              prix_ofer
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              description
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              category
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              image
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              name
              </th>
              <th scope="col" class="text-sm font-medium text-white px-6 py-4">
              Actions
              </th>
            </tr>
          </thead class="border-b">
          <tbody>
            <?php foreach($data as $ele):?>
            <tr class="bg-white border-b">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"><?php echo $ele['id'];?> </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['reference'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['libelle'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['codeBar'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['prix_achat'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['prix_final'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['prix_ofer'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['description'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['category'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                <button>
                <img src="<?php echo $ele['image'];?> " width="50px" alt="">
                </button>
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
              <?php echo $ele['name'];?> 
              </td>
              <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
               <div class="flex justify-end gap-4">
              <form action="" method="POST">
              <input type="text" name="id" value="<?php  echo $ele['id'];?>">
              <button type="submit" name="delete">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                fill="none"
                viewBox="0 0 24 24"
                stroke-width="1.5"
                stroke="currentColor"
                class="h-6 w-6"
                x-tooltip="tooltip"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"
                />
              </svg>
       
              </button>
            </form>
            <form method="POST">
              <input type="text" name="id" value="<?php  echo $ele['id'];?>">
             <button type="submit" name="update">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="currentColor"
                    class="h-6 w-6"
                    x-tooltip="tooltip"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"
                    />
                     </svg>
                </button>
               </form>
             </div>
           </td>
            </tr class="bg-white border-b">
            <?php endforeach;?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
</body>
</html>