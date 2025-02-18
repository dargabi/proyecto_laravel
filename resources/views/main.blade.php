<x-layouts.layout>
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-enterprise-blue to-enterprise-dark-blue p-8 text-center text-enterprise-white rounded-lg mb-8">
        <h2 class="text-3xl font-bold">Gabriel Urbano Garcia</h2>
        <p class="text-xl mt-4">Laravel</p>
    </div>

    <!-- Madrid Time Timer -->
    <div class="text-center mt-8">
        <h3 class="text-2xl font-bold text-enterprise-dark-blue mb-4">Hola Manuel como te gusto el contador de Nicole te puse la hora que es, no es lo mismo pero es parecido :)</h3>
        <div class="text-3xl font-mono text-enterprise-blue" id="madrid-time">
            <!-- Madrid time will be displayed here -->
        </div>
    </div>

    <!-- Script for displaying Madrid time -->
    <script>
        function updateMadridTime() {
            // Create a new date object in Madrid's timezone (CET/CEST)
            const options = {
                timeZone: 'Europe/Madrid',
                hour: '2-digit',
                minute: '2-digit',
                second: '2-digit',
                hour12: false, // 24-hour format
            };

            const timeInMadrid = new Intl.DateTimeFormat('es-ES', options).format(new Date());

            // Display the time
            document.getElementById('madrid-time').textContent = timeInMadrid;
        }

        // Update time every second
        setInterval(updateMadridTime, 1000);

        // Initial time display
        updateMadridTime();
    </script>
</x-layouts.layout>
