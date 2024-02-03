<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RLsolutions</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="css/style.css">

</head>

<body class="dark:bg-slate-900 dark:text-white">
    <h1 class="uppercase text-[1.3rem] text-center my-[2rem]">Insercion de datos</h1>


    <div class="flex justify-center items-center">
        <div class="">
            <div class="">
                <form class="space-y-[16px]" action="" method="post" enctype="multipart/form-data">


                    <div class="flex items-center justify-center">
                        <label for="imagen" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded cursor-pointer">
                            Seleccionar imagen
                        </label>
                        <input type="file" id="imagen" name="imagen" accept="image/*" class="hidden">
                    </div>



                    <div class="flex justify-between w-[330px]">
                        <label for="">Nombre</label>
                        <input type="text" placeholder="Nombre del producto">
                    </div>

                    <div class="flex justify-between w-[330px]">
                        <label for="">Marca</label>
                        <input type="text">
                    </div>

                    <div class="flex justify-between w-[330px]">
                        <label for="">Precio</label>
                        <input type="text">
                    </div>

                    <div class="flex justify-between w-[330px]">
                        <label for="">Cantidad</label>
                        <input type="text">
                    </div>

                    <div class="flex justify-between w-[330px]">
                        <label for="" title="Cantidad Maxima del producto">Cantidad Max.</label>
                        <input type="text">
                    </div>
                    <div class="flex justify-between w-[330px]">
                        <label for="" title="Cantidad Minima del producto">Cantidad Max.</label>
                        <input type="text">
                    </div>
                    <div class="flex justify-between w-[330px]">
                        <label for="">Cantidad Max.</label>
                        <input type="text">
                    </div>
                    <div class="flex justify-between w-[330px]">
                        <label for="">Cantidad Max.</label>
                        <input type="text">
                    </div>


                </form>
            </div>
        </div>
    </div>

    <script src="js/tailwind.js"></script>
    <script src="js/main.js"></script>
</body>

</html>