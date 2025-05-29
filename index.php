<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Reserva de Salas</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Sistema de Reserva de Salas</h1>
        <div class="bg-white shadow-md rounded my-6 overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Sala</th>
                        <th class="w-2/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Descrição</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Reservado por</th>
                        <th class="w-1/5 py-2 px-4 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">Data e Hora</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala A101</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Reunião de planejamento</td>
                        <td class="py-2 px-4 text-sm text-gray-700">João Silva</td>
                        <td class="py-2 px-4 text-sm text-gray-700">22/05/2024 14:00</td>
                    </tr>
                    <tr class="border-b bg-gray-50">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala B202</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Workshop de Marketing</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Maria Oliveira</td>
                        <td class="py-2 px-4 text-sm text-gray-700">21/05/2024 09:00</td>
                    </tr>
                    <tr class="border-b">
                        <td class="py-2 px-4 text-sm text-gray-700">Sala C303</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Treinamento de TI</td>
                        <td class="py-2 px-4 text-sm text-gray-700">Carlos Souza</td>
                        <td class="py-2 px-4 text-sm text-gray-700">20/05/2024 16:00</td>
                    </tr>
                    <!-- Adicione mais linhas conforme necessário -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>