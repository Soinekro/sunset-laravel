<div class="container m-auto">
    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
        <div class="border-t border-gray-200"></div>
        </div>
    </div>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
            <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Dejanos un mensaje</h3>
            <p class="mt-1 text-sm text-gray-600">
                Utilice una dirección permanente donde pueda recibir correo.
            </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <form action="#" method="POST">
            <div class="shadow overflow-hidden sm:rounded-md">
                <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                    <label for="nombres" class="block text-sm font-medium text-gray-700">Nombres </label>
                    <input type="text" name="nombres" id="nombres" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('nombres')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                    <label for="apellidos" class="block text-sm font-medium text-gray-700">Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('apellidos')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Direccion de Correo</label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    @error('email')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                        @enderror
                    </div>
                    <div class="col-span-6 sm:col-span-4">
                        <label for="mensaje" class="block text-sm font-medium text-gray-700">Mensaje</label>
                        <textarea type="text" rows="3" id="mensaje" name="mensaje"  class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        </textarea>
                    </div>

                    <div class="col-span-6 sm:col-span-4">
                        <label for="ciudad" class="block text-sm font-medium text-gray-700">ciudad</label>
                        <input type="text" name="ciudad" id="ciudad" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                            @error('ciudad')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                            @enderror
                    </div>

                    <div class="col-span-6">
                    <label for="direccion" class="block text-sm font-medium text-gray-700">Direccion</label>
                    <input type="text" name="direccion" id="direccion" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('direccion')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                        @enderror
                    </div>


                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="provincia" class="block text-sm font-medium text-gray-700">Provincia</label>
                    <input type="text" name="provincia" id="provincia" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                        @error('provincia')
                            <p><strong class=" font-mono text-red-500">{{$message}}</strong></p>
                        @enderror
            </div>

                </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    Enviar
                </button>
                </div>
            </div>
            </form>
        </div>
        </div>
    </div>
</div>
