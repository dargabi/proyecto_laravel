<x-layouts.layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                    Editar Alumno
                </h1>
                <a href="{{ route('alumnos.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Volver al listado
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg p-6">
                <form action="{{ route('alumnos.update', $alumno) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <x-input-label for="nombre" :value="__('Nombre')" />
                        <x-text-input id="nombre" type="text" name="nombre" :value="old('nombre', $alumno->nombre)" required class="w-full" />
                        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="apellidos" :value="__('Apellidos')" />
                        <x-text-input id="apellidos" type="text" name="apellidos" :value="old('apellidos', $alumno->apellidos)" required class="w-full" />
                        <x-input-error :messages="$errors->get('apellidos')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" type="email" name="email" :value="old('email', $alumno->email)" required class="w-full" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="edad" :value="__('Edad')" />
                        <x-text-input id="edad" type="number" name="edad" :value="old('edad', $alumno->edad)" class="w-full" />
                        <x-input-error :messages="$errors->get('edad')" class="mt-2" />
                    </div>

                    <div class="mb-4">
                        <x-input-label for="direccion" :value="__('Dirección')" />
                        <x-text-input id="direccion" type="text" name="direccion" :value="old('direccion', $alumno->direccion)" class="w-full" />
                        <x-input-error :messages="$errors->get('direccion')" class="mt-2" />
                    </div>

                    <div class="mb-6">
                        <x-input-label for="telefono" :value="__('Teléfono')" />
                        <x-text-input id="telefono" type="text" name="telefono" :value="old('telefono', $alumno->telefono)" class="w-full" />
                        <x-input-error :messages="$errors->get('telefono')" class="mt-2" />
                    </div>

                    <div class="flex justify-end">
                        <button type="submit" class="px-5 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center">
                            <i class="fas fa-save mr-2"></i> Actualizar Alumno
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.layout>
