<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Exercício</title>
</head>
<body>
  <div class="flex justify-center items-center bg-gray-200 h-screen">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm h-fit">
            <form id="contact-form" action="submit.php" method="post">
              <div class="form-group mb-6">
                <label for="whats" class="form-label inline-block mb-2 text-gray-700">whatsapp</label>
                <input  name="whats" type="text"  data-mask_ique="phone" class="form-control block
                  w-full
                  px-3
                  py-1.5
                  text-base
                  font-normal
                  text-gray-700
                  bg-white bg-clip-padding
                  border border-solid border-gray-300
                  rounded
                  transition
                  ease-in-out
                  m-0
                  focus:text-gray-700 focus:bg-white focus:border-indigo-600 focus:outline-none" id="whats"
                  placeholder="Seu whatsapp">
              </div>
              <button type="submit" id="sendForm" class="
                px-6
                py-2.5
                bg-indigo-600
                text-white
                font-medium
                text-xs
                leading-tight
                uppercase
                rounded
                shadow-md
                hover:bg-indigo-700 hover:shadow-lg
                focus:bg-indigo-700 focus:shadow-lg focus:outline-none focus:ring-0
                active:bg-indigo-800 active:shadow-lg
                transition
                duration-150
                ease-in-out">Enviar</button>
            </form>
          </div>
    </div>

    <script src="main.js">
    </script>
</body>

</html>