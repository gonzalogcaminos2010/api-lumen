<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.tailwindcss.com"></script>

        <title>Laravel</title>



   
    </head>
    <body class="bg-gray-100 text-gray">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-3 my-10">
                @foreach ($productos as $producto)
                <div class="bg-white hover:bg-blue-100 border border-gray-200 p-5">
    
                   <h2 class="font-bold text-lg mb-4"> {{ $producto->nombre }} </h2> 
                   <p class="text-xs"> {{ $producto->descripcion }} </p>
                   <p class="text-xs"> {{ $producto->precio }} </p>
                   
                    
              
                    
                
                
                </div>
            @endforeach

            </div>
            {{ $productos->links() }}
        </div>
      
        
     
    </body>
</html>
