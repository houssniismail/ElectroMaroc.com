<?php
if(isset($_POST['submit'])){
    $addNewProduct = ProductController::AddConProduc();
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
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">image</label>
        <input type="file" name="image" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>
      <div>
        <label for="job" class="text-sm text-gray-700 block mb-1 font-medium">name</label>
        <input type="text" name="name" class="bg-gray-100 border border-gray-200 rounded py-1 px-3 block focus:ring-blue-500 focus:border-blue-500 text-gray-700 w-full"/>
      </div>


    </div>

    <div class="space-x-4 mt-8">
      <button type="submit" name="submit" class="py-2 px-4 bg-blue-500 text-white rounded hover:bg-blue-600 active:bg-blue-700 disabled:opacity-50">Save</button>

      <!-- Secondary -->
      <button class="py-2 px-4 bg-white border border-gray-200 text-gray-600 rounded hover:bg-gray-100 active:bg-gray-200 disabled:opacity-50">Cancel</button>
    </div>
  </form>
</div>

    
</body>
</html>