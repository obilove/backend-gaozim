<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\Vendor;
use App\Models\Carrier;
use App\Models\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    /**
     * Display all orders
     */
    public function index()
    {
        $orders = Order::with([
            'user',
            'vendor',
            'carrier',
            'warehouse'
        ])->latest()->paginate(20);

        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show create form
     */
    public function create()
    {
        $users = User::all();
        $vendors = Vendor::all();
        $carriers = Carrier::all();
        $warehouses = Warehouse::all();

        return view('admin.orders.create', compact(
            'users',
            'vendors',
            'carriers',
            'warehouses'
        ));
    }

    /**
     * Store order
     */
    public function store(Request $request)
    {
        $request->validate([

            'user_id' => 'required|exists:users,id',

            'vendor_id' => 'nullable|exists:vendors,id',

            'carrier_id' => 'nullable|exists:carriers,id',

            'warehouse_id' => 'nullable|exists:warehouses,id',

            'sender' => 'required|string|max:255',
            'sender_address' => 'required',
            'sender_phone' => 'required',
            'sender_email' => 'required|email',

            'receiver' => 'required|string|max:255',
            'receiver_address' => 'required',
            'receiver_phone' => 'required',
            'receiver_email' => 'required|email',

            'delivery_type' => 'required|in:send,receive',

            'item' => 'required',

            'payment_type' => 'nullable|in:wallet,card,cash',

            'worth' => 'nullable|numeric',

            'amount' => 'nullable|numeric',

            'expected_delivery_date' => 'nullable|date',
        ]);

        $order = Order::create([

            'uuid' => Str::uuid(),

            'tracker' => strtoupper(Str::random(10)),

            'user_id' => $request->user_id,

            'vendor_id' => $request->vendor_id,

            'carrier_id' => $request->carrier_id,

            'warehouse_id' => $request->warehouse_id,

            'sender' => $request->sender,

            'sender_address' => $request->sender_address,

            'sender_phone' => $request->sender_phone,

            'sender_email' => $request->sender_email,

            'receiver' => $request->receiver,

            'receiver_address' => $request->receiver_address,

            'receiver_phone' => $request->receiver_phone,

            'receiver_email' => $request->receiver_email,

            'delivery_type' => $request->delivery_type,

            //'total_route' => $request->total_route, (number of transloading)

            'item' => $request->item,

            'fragile' => $request->fragile ? true : false,

            'item_size' => $request->item_size,

            'pickup_request_id' => $request->pickup_request_id,

            'duration' => $request->duration,

            'expected_delivery_date' => $request->expected_delivery_date,

            'status' => $request->status ?? 'pending',

            'slat' => $request->slat,

            'slog' => $request->slog,

            'rlat' => $request->rlat,

            'rlog' => $request->rlog,

            'route' => $request->route,

            'process' => $request->process,

            'payment_type' => $request->payment_type,

            'worth' => $request->worth ?? 0,

            'amount' => $request->amount ?? 0,
        ]);

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Order created successfully');
    }

    /**
     * Show single order
     */
    public function show($id)
    {
        $order = Order::with([
            'user',
            'vendor',
            'carrier',
            'warehouse'
        ])->findOrFail($id);

        return view('admin.orders.show', compact('order'));
    }

    /**
     * Show edit form
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);

        $users = User::all();
        $vendors = Vendor::all();
        $carriers = Carrier::all();
        $warehouses = Warehouse::all();

        return view('admin.orders.edit', compact(
            'order',
            'users',
            'vendors',
            'carriers',
            'warehouses'
        ));
    }

    /**
     * Update order
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([

            'user_id' => 'required|exists:users,id',

            'vendor_id' => 'nullable|exists:vendors,id',

            'carrier_id' => 'nullable|exists:carriers,id',

            'warehouse_id' => 'nullable|exists:warehouses,id',

            'sender' => 'required|string|max:255',

            'sender_address' => 'required',

            'sender_phone' => 'required',

            'sender_email' => 'required|email',

            'receiver' => 'required|string|max:255',

            'receiver_address' => 'required',

            'receiver_phone' => 'required',

            'receiver_email' => 'required|email',

            'delivery_type' => 'required|in:send,receive',

            'payment_type' => 'nullable|in:wallet,card,cash',
        ]);

        $order->update([

            'user_id' => $request->user_id,

            'vendor_id' => $request->vendor_id,

            'carrier_id' => $request->carrier_id,

            'warehouse_id' => $request->warehouse_id,

            'sender' => $request->sender,

            'sender_address' => $request->sender_address,

            'sender_phone' => $request->sender_phone,

            'sender_email' => $request->sender_email,

            'receiver' => $request->receiver,

            'receiver_address' => $request->receiver_address,

            'receiver_phone' => $request->receiver_phone,

            'receiver_email' => $request->receiver_email,

            'delivery_type' => $request->delivery_type,

            'item' => $request->item,

            'fragile' => $request->fragile ? true : false,

            'item_size' => $request->item_size,

            'pickup_request_id' => $request->pickup_request_id,

            'duration' => $request->duration,

            'expected_delivery_date' => $request->expected_delivery_date,

            'status' => $request->status,

            'slat' => $request->slat,

            'slog' => $request->slog,

            'rlat' => $request->rlat,

            'rlog' => $request->rlog,

            'route' => $request->route,

            'process' => $request->process,

            'payment_type' => $request->payment_type,

            'worth' => $request->worth ?? 0,

            'amount' => $request->amount ?? 0,
        ]);

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Order updated successfully');
    }

    /**
     * Delete order
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);

        $order->delete();

        return redirect()
            ->route('admin.orders.index')
            ->with('success', 'Order deleted successfully');
    }

    /**
     * Track order
     */
    public function track()
    {
        return view('admin.orders.track');
    }

    public function showtrack($tracker)
    {
        $order = Order::where('tracker', $tracker)
            ->firstOrFail();

        return view('admin.orders.show-track', compact('order'));
    }
    
}