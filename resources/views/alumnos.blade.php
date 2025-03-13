<x-layouts.layout>
    <div class="container mx-auto px-4 py-8">
        <!-- Title and Add Button Section -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-4xl font-bold text-gray-800 dark:text-gray-200">
                Listado de Alumnos
            </h1>
            <a href="{{ route('alumnos.create') }}" class="px-6 py-3 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 shadow-md hover:shadow-lg transition-all duration-300 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                </svg>
                Añadir Alumno
            </a>
        </div>

        <!-- Flash Messages -->
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        <!-- Alumnos Table -->
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
            @if($alumnos->count() > 0)
                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                    <thead class="bg-gray-50 dark:bg-gray-700">
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Apellidos</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Edad</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                        @foreach($alumnos as $alumno)
                            <tr class="hover:bg-gray-50 dark:hover:bg-gray-700">
                                <td class="px-6 py-4 whitespace-nowrap">{{ $alumno->nombre }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $alumno->apellidos }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $alumno->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $alumno->edad ?? 'N/A' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <div class="flex space-x-2">
                                        <a href="{{ route('alumnos.show', $alumno) }}" class="px-3 py-1 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors duration-300">
                                            <i class="fas fa-eye mr-1"></i> Ver
                                        </a>
                                        <a href="{{ route('alumnos.edit', $alumno) }}" class="px-3 py-1 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition-colors duration-300">
                                            <i class="fas fa-edit mr-1"></i> Editar
                                        </a>
                                        <form action="{{ route('alumnos.destroy', $alumno) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-3 py-1 bg-red-600 text-white rounded-md hover:bg-red-700 transition-colors duration-300" onclick="return confirm('¿Estás seguro de que deseas eliminar este alumno?')">
                                                <i class="fas fa-trash-alt mr-1"></i> Eliminar
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="px-6 py-4">
                    {{ $alumnos->links() }}
                </div>
            @else
                <div class="px-6 py-4 text-center text-gray-500 dark:text-gray-400">
                    No hay alumnos registrados. ¡Añade uno!
                </div>
            @endif
        </div>
    </div>
</x-layouts.layout>
