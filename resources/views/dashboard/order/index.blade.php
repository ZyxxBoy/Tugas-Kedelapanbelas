<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Order') }}
        </h2>
        <!-- DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
        <!-- SweetAlert2 CSS -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil',
                        text: '{{ session('success') }}',
                        timer: 3000,
                        showConfirmButton: false
                    });
                </script>
            @endif

            @if(session('error'))
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Gagal',
                        text: '{{ session('error') }}',
                    });
                </script>
            @endif

            <div class="mb-4 flex justify-end">
                <!-- Jika ada tombol tambah order, letakkan di sini -->
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 overflow-x-auto">
                    <table id="orderTable" class="w-full whitespace-no-wrap display">
                        <thead>
                            <tr class="text-left font-bold border-b border-gray-200">
                                <th class="px-6 py-3">No</th>
                                <th class="px-6 py-3">ID / Customer</th>
                                <th class="px-6 py-3">Tanggal</th>
                                <th class="px-6 py-3">Total</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3 text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $order)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="px-6 py-4">{{ $loop->iteration }}</td>
                                <td class="px-6 py-4">
                                    <div class="font-medium text-gray-900">{{ $order->name ?? 'User ' . ($order->user_id ?? '') }}</div>
                                    <div class="text-xs text-gray-500">Order ID: {{ $order->id ?? $order->order_number ?? '' }}</div>
                                </td>
                                <td class="px-6 py-4">{{ $order->created_at ? $order->created_at->format('d M Y H:i') : '-' }}</td>
                                <td class="px-6 py-4 font-semibold">
                                    Rp {{ number_format($order->total ?? 0, 0, ',', '.') }}
                                </td>
                                <td class="px-6 py-4">
                                    @php
                                        $status = $order->status ?? 'Menunggu';
                                    @endphp
                                    @if(strtolower($status) == 'selesai')
                                        <span class="text-green-600 font-bold">{{ $status }}</span>
                                    @elseif(strtolower($status) == 'diproses')
                                        <span class="text-blue-600 font-bold">{{ $status }}</span>
                                    @else
                                        <span class="text-yellow-600 font-bold">{{ $status }}</span>
                                    @endif
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center space-x-4">
                                        <a href="#" class="text-blue-500 hover:text-blue-700 font-semibold">Detail</a>
                                        <button type="button" onclick="confirmDelete({{ $order->id ?? 0 }})" class="text-red-500 hover:text-red-700 font-semibold">Hapus</button>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="6" class="px-6 py-4 text-center text-gray-500">
                                    Belum ada data order.
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Hidden Form for Delete -->
    <form id="deleteForm" method="POST" class="hidden">
        @csrf
        @method('DELETE')
    </form>

    <!-- jQuery and DataTables JS -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        const baseUrl = "{{ url('dasboard/order') }}";

        function confirmDelete(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Order yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#ef4444',
                cancelButtonColor: '#6b7280',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    const form = document.getElementById('deleteForm');
                    form.action = baseUrl + '/' + id;
                    form.submit();
                }
            })
        }

        $(document).ready(function() {
            $('#orderTable').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.13.6/i18n/id.json"
                }
            });
        });
    </script>
</x-app-layout>
