<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Middleware\LockScreenMiddleware;
use App\Models\Announcement;
use App\Models\Collection;
use App\Models\Customer;
use App\Models\Department;
use App\Models\Expense;
use App\Models\Fee;
use App\Models\Language;
use App\Models\Menu;
use App\Models\OauthSocial;
use App\Models\Order;
use App\Models\Route;
use App\Models\Setting;
use App\Models\User;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware([LockScreenMiddleware::class]);
    }

    public function index()
    {
        if (auth()->user()->roles()->count() == 0 && ! isSuperAdmin())
            return redirect('/');

        $currentMonth = date('Y-m-d');
        // $expenseSum = Expense::query()->whereRaw("DATE(created_date) >= '{$currentMonth}'")->sum('value');
        // $collectionSum = Collection::query()->whereRaw("DATE(created_date) >= '{$currentMonth}'")->sum('value');
        // $FeeSum = Fee::query()->whereRaw("DATE(created_at) >= '{$currentMonth}'")->sum('customer_value');
        // $orderCount = Order::query()->whereRaw("DATE(created_date) >= '{$currentMonth}'")->count();
        // $tables['customers']         = ['count' => Customer::count()      , 'color' => 'info'];
        // $tables['orders']   = ['count' => $orderCount, 'color' => 'warning'];
        // $tables['expenses']        = ['count' => $expenseSum.' ج.م'     , 'color' => 'danger'];
        // $tables['collections']        = ['count' => $collectionSum .' ج.م'    , 'color' => 'primary'];
        // $tables['fees']        = ['count' => $FeeSum .' ج.م'    , 'color' => 'success'];

        // $before3Day = Carbon::now()->subDays(3)->toDateTimeString();
        // $ordersAlerts = Order::query();
        // $ordersAlerts->where(function($q)use($before3Day){
        //     $q->whereRaw("alert_date >= '{$before3Day}'");
        // });
        // $ordersAlerts = $ordersAlerts->count();
        // $alerts['ordersAlert'] = ['title'=>'تبيهات الطلبات','count'=>$ordersAlerts,'color'=>'warning','route'=>routeHelper('orders.index').'?alert=1'];
        $tables = [];
        $alerts = [];
        $icons = Menu::select('icon', 'name->en as name')->pluck('icon', 'name')->toArray();
        return view('backend.home.index', compact('tables', 'icons','alerts'));
    }
}
