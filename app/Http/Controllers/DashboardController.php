<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        $total_data = [
            'cards' => [
                [
                    'nama' => 'Product',
                    'jumlah' => 100,
                    'icon' => '<svg class="w-5 h-5 text-[#6c2bd9]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>',
                    'bg' => '#e4d9ff'
                ],
                [
                    'nama' => 'Product Category',
                    'jumlah' => 10,
                    'icon' => '<svg class="w-5 h-5 text-[#3b5bd9]" fill="currentColor" viewBox="0 0 20 20"><path d="M5 3a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2V5a2 2 0 00-2-2H5zM5 11a2 2 0 00-2 2v2a2 2 0 002 2h2a2 2 0 002-2v-2a2 2 0 00-2-2H5zM11 5a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V5zM11 13a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" /></svg>',
                    'bg' => '#cdd8ff'
                ],
                [
                    'nama' => 'Order',
                    'jumlah' => 50,
                    'icon' => '<svg class="w-5 h-5 text-[#166534]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>',
                    'bg' => '#dcfce7'
                ],
                [
                    'nama' => 'User',
                    'jumlah' => 20,
                    'icon' => '<svg class="w-5 h-5 text-[#3730a3]" fill="currentColor" viewBox="0 0 20 20"><path d="M9 6a3 3 0 11-6 0 3 3 0 016 0zM17 6a3 3 0 11-6 0 3 3 0 016 0zM12.93 17c.046-.327.07-.66.07-1a6.97 6.97 0 00-1.5-4.33A5 5 0 0119 16v1h-6.07zM6 11a5 5 0 015 5v1H1v-1a5 5 0 015-5z" /></svg>',
                    'bg' => '#e0e7ff'
                ],
                [
                    'nama' => 'Product Clicks',
                    'jumlah' => 500,
                    'icon' => '<svg class="w-5 h-5 text-[#92400e]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path></svg>',
                    'bg' => '#fef3c7'
                ]
            ],
            'chart' => [
                'labels' => ['1', '2', '3', '4', '5', '6', '7'],
                'orders' => [5, 10, 5, 2, 5, 3, 1],
                'revenue' => [300000, 350000, 320000, 400000, 550000, 300000, 750000]
            ],
            'orders' => [
                [
                    'order_number' => 'ORD-20260601',
                    'name' => 'Budi Santoso',
                    'created_at' => '2026-06-01 10:30',
                    'total' => 150000,
                    'payment' => 'Transfer Bank',
                    'status' => 'Selesai',
                ],
                [
                    'order_number' => 'ORD-20260602',
                    'name' => 'Siti Aminah',
                    'created_at' => '2026-06-02 14:15',
                    'total' => 250000,
                    'payment' => 'E-Wallet',
                    'status' => 'Diproses',
                ],
                [
                    'order_number' => 'ORD-20260603',
                    'name' => 'Andi Wijaya',
                    'created_at' => '2026-06-03 09:00',
                    'total' => 500000,
                    'payment' => 'Kartu Kredit',
                    'status' => 'Menunggu Pembayaran',
                ],
                [
                    'order_number' => 'ORD-20260604',
                    'name' => 'Rina Melati',
                    'created_at' => '2026-06-05 16:45',
                    'total' => 75000,
                    'payment' => 'COD',
                    'status' => 'Selesai',
                ],
            ],
        ];
        
        return view('dashboard', compact('total_data'));
    }
}
