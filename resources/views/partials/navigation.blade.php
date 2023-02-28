    {{-- 
        Las {{ }}} hacer referencia a blade
        El metodo route nos direcciona a la vista que le indiquemos.
        No colocamos la ruta completa por que laravel sabe donde buscar y el tipo de archivo que es.
        En este caso y normalmente se coloca el nombre de la ruta que se definicio con la propiedad name
        en el archivo web.php

        Una vez que la navegación esta separada podemos acceder a ella por medio de un include
    --}}

    <nav>
        <ul>
            <li><a href="{{ route('nameRouteWelcome') }}">Home</a></li>
            <li><a href="{{ route('nameRouteBlog') }}">Blog</a></li>
            <li><a href="{{ route('nameRouteAbout') }}">About</a></li>
            <li><a href="{{ route('nameRouteContact') }}">Contacto</a></li>
        </ul>
    </nav>
