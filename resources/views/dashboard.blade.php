<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Cards Row -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
                    @foreach ($total_data['cards'] as $card)
                        <div style="background-color: {{ $card['bg'] }};" class="p-4 rounded-lg flex flex-col justify-center border border-black/5 shadow-sm transition-transform hover:scale-105 duration-300">
                            <div class="flex items-center gap-2 text-gray-800 mb-1">
                                {!! $card['icon'] !!}
                                <span class="text-sm font-medium">{{ $card['nama'] }}</span>
                            </div>
                            <div class="text-3xl font-bold text-gray-900">{{ $card['jumlah'] }}</div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Chart Section -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <div class="text-center font-bold text-gray-600 text-sm mb-6">Weekly Orders and Revenue</div>
                <div class="relative h-96 w-full">
                    <canvas id="weeklyChart"></canvas>
                </div>
            </div>

            <!-- Orders Table Section -->
            <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-100">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Recent Orders</h3>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 border-b">
                            <tr>
                                <th scope="col" class="px-6 py-3">Order Number</th>
                                <th scope="col" class="px-6 py-3">Name</th>
                                <th scope="col" class="px-6 py-3">Date</th>
                                <th scope="col" class="px-6 py-3">Total</th>
                                <th scope="col" class="px-6 py-3">Payment</th>
                                <th scope="col" class="px-6 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($total_data['orders'] as $order)
                            <tr class="bg-white border-b hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{ $order['order_number'] }}</td>
                                <td class="px-6 py-4">{{ $order['name'] }}</td>
                                <td class="px-6 py-4">{{ $order['created_at'] }}</td>
                                <td class="px-6 py-4 font-semibold text-gray-900">Rp {{ number_format($order['total'], 0, ',', '.') }}</td>
                                <td class="px-6 py-4">{{ $order['payment'] }}</td>
                                <td class="px-6 py-4">
                                    @if($order['status'] == 'Selesai')
                                        <span class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded border border-green-400">{{ $order['status'] }}</span>
                                    @elseif($order['status'] == 'Diproses')
                                        <span class="bg-blue-100 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded border border-blue-400">{{ $order['status'] }}</span>
                                    @else
                                        <span class="bg-yellow-100 text-yellow-800 text-xs font-medium px-2.5 py-0.5 rounded border border-yellow-300">{{ $order['status'] }}</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ctx = document.getElementById('weeklyChart').getContext('2d');
            
            // Initial data from controller
            const initialChartData = @json($total_data['chart']);
            
            const data = {
                labels: initialChartData.labels,
                datasets: [
                    {
                        label: 'Total Orders',
                        data: initialChartData.orders,
                        borderColor: '#62b2ac', // Teal
                        backgroundColor: 'transparent',
                        tension: 0.4,
                        yAxisID: 'y',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#62b2ac',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        borderWidth: 2
                    },
                    {
                        label: 'Total Revenue',
                        data: initialChartData.revenue,
                        borderColor: '#db6786', // Pink
                        backgroundColor: 'transparent',
                        tension: 0.4,
                        yAxisID: 'y1',
                        pointBackgroundColor: '#fff',
                        pointBorderColor: '#db6786',
                        pointBorderWidth: 2,
                        pointRadius: 4,
                        borderWidth: 2
                    }
                ]
            };

            const config = {
                type: 'line',
                data: data,
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    animation: {
                        duration: 1000,
                        easing: 'linear'
                    },
                    interaction: {
                        mode: 'index',
                        intersect: false,
                    },
                    plugins: {
                        legend: {
                            position: 'top',
                            labels: {
                                usePointStyle: false,
                                boxWidth: 30,
                                boxHeight: 12,
                                font: {
                                    size: 11
                                },
                                color: '#6b7280'
                            }
                        },
                        tooltip: {
                            enabled: true
                        }
                    },
                    scales: {
                        x: {
                            grid: {
                                display: true,
                                color: '#f3f4f6',
                                drawBorder: false,
                            },
                            ticks: {
                                display: false // Hide x-axis text
                            }
                        },
                        y: {
                            type: 'linear',
                            display: true,
                            position: 'left',
                            title: {
                                display: true,
                                text: 'Amount',
                                color: '#9ca3af',
                                font: { size: 12 }
                            },
                            grid: {
                                color: '#f3f4f6',
                                drawBorder: false,
                            },
                            min: 0,
                            max: 15,
                            ticks: {
                                stepSize: 1,
                                color: '#9ca3af'
                            }
                        },
                        y1: {
                            type: 'linear',
                            display: true,
                            position: 'right',
                            title: {
                                display: true,
                                text: 'Revenue',
                                color: '#9ca3af',
                                font: { size: 12 }
                            },
                            grid: {
                                drawOnChartArea: false,
                                drawBorder: false,
                            },
                            min: 100000,
                            max: 1000000,
                            ticks: {
                                stepSize: 100000,
                                color: '#9ca3af',
                                callback: function(value) {
                                    return 'Rp ' + value.toLocaleString('id-ID');
                                }
                            }
                        }
                    }
                }
            };

            const myChart = new Chart(ctx, config);

            // Animate Chart (Bergerak-gerak)
            setInterval(() => {
                const datasets = myChart.data.datasets;
                
                // Add new random data point
                const newOrder = Math.floor(Math.random() * 10) + 1; // Random between 1-10
                const newRevenue = Math.floor(Math.random() * 600000) + 200000; // Random between 200k-800k
                
                datasets[0].data.push(newOrder);
                datasets[1].data.push(newRevenue);
                myChart.data.labels.push(''); // Add empty label
                
                // Remove oldest data point to keep it moving
                datasets[0].data.shift();
                datasets[1].data.shift();
                myChart.data.labels.shift();
                
                // Update chart
                myChart.update();
            }, 2000); // Bergerak tiap 2 detik
        });
    </script>
</x-app-layout>
