<x-layouts.layout>
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-3xl font-bold text-gray-800 dark:text-gray-200">
                    Detalles del Alumno
                </h1>
                <a href="{{ route('alumnos.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center">
                    <i class="fas fa-arrow-left mr-2"></i> Volver al listado
                </a>
            </div>

            <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                <div class="p-6">
                    <div class="mb-4">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Nombre:</h2>
                        <p class="text-xl">{{ $alumno->nombre }} {{ $alumno->apellidos }}</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Email:</h2>
                        <p class="text-xl">{{ $alumno->email }}</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Edad:</h2>
                        <p class="text-xl">{{ $alumno->edad ?? 'No especificada' }}</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Dirección:</h2>
                        <p class="text-xl">{{ $alumno->direccion ?? 'No especificada' }}</p>
                    </div>

                    <div class="mb-4">
                        <h2 class="text-lg font-semibold text-gray-700 dark:text-gray-300">Teléfono:</h2>
                        <p class="text-xl">{{ $alumno->telefono ?? 'No especificado' }}</p>
                    </div>

                    <div class="flex space-x-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                        <a href="{{ route('alumnos.edit', $alumno) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center">
                            <i class="fas fa-edit mr-2"></i> Editar
                        </a>
                        <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center" onclick="return confirm('¿Estás seguro de que deseas eliminar este alumno?')">
                                <i class="fas fa-trash-alt mr-2"></i> Eliminar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layouts.layout>
