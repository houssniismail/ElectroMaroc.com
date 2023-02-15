<?php
if(isset($_POST['Submit'])){
  $newclient = ClientsController::registrerClients();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register</title>
</head>
<body>
    <!-- component -->
    <form action="" method="POST">
<div class="min-h-screen p-6 bg-gray-100 flex items-center justify-center">
  <div class="container max-w-screen-lg mx-auto">
    <div>
      <div class="bg-white rounded shadow-lg p-4 px-4 md:p-8 mb-6">
        <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 lg:grid-cols-3">
          <div class="text-gray-600">
            <p>Veuillez remplir tous les champs.</p>
          </div>
          <div class="lg:col-span-2">
            <div class="grid gap-4 gap-y-2 text-sm grid-cols-1 md:grid-cols-5">
              <div class="md:col-span-5">
                <label for="nom">nom</label>
                <input type="text" name="nom" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ex:nnnnn"/>
              </div>

              <div class="md:col-span-5">
                <label for="prenom">prenom</label>
                <input type="text" name="prenom" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ex: nnnnnn"/>
              </div>

              <div class="md:col-span-3">
                <label for="Tele">Tele</label>
                <input type="text" name="Tele" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="0000000000"/>
              </div>

              <div class="md:col-span-2">
                <label for="adriss">adriss</label>
                <input type="text" name="adriss" class="h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ex:hay plateau safi"/>
              </div>

              <div class="md:col-span-1">
                <label for="ville">ville</label>
                <input type="text" name="ville" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ex:Safi"/>
              </div>

              <div class="md:col-span-1">
                <label for="email">email</label>
                <input type="email" name="email" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder="Ex:Email@gmail.com"/>
              </div>

              <div class="md:col-span-1">
                <label for="password">password</label>
                <input type="password" name="password" class="transition-all flex items-center h-10 border mt-1 rounded px-4 w-full bg-gray-50" placeholder=""/>
              </div>

              <div class="md:col-span-5 text-right">
                <div class="inline-flex items-end">
                  <button name="Submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
</body>
</html>