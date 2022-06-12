<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Carbon\Carbon;
use Livewire\Component;

class AdminDashboardComponent extends Component
{
    public function render()
    {

        $orders = Order::orderBy('created_at', 'DESC')->get()->take(10);
        $totalOrders = Order::all()->count();
        $todayOrders = Order::where('created_at', Carbon::today())->count();
        $totalEarn = Order::all()->sum('total');
        return view('livewire.admin.admin-dashboard-component', [
            'orders' => $orders,
            'totalorders' => $totalOrders,
            'todayorders' => $todayOrders,
            'totalearn' => $totalEarn,
        ])->layout('layouts.main');
    }
}
