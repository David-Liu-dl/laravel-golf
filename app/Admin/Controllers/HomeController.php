<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\InfoBox;

class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('GOLF');
            $content->description('Management');

            $content->row(function ($row) {
                $row->column(4, new InfoBox('', 'file', 'aqua', '/admin/users', 'Users'));
                $row->column(4, new InfoBox('', 'file', 'yellow', '/admin/enquires', 'Enquires'));
                $row->column(4, new InfoBox('', 'file', 'red', '/admin/events', 'Events'));
                $row->column(4, new InfoBox('', 'file', 'green', '/admin/orders', 'Bookings'));
                $row->column(4, new InfoBox('', 'file', 'purple', '/admin/packages', 'Lessons'));
                $row->column(4, new InfoBox('', 'file', 'purple', '/admin/dayopenhours', 'Schedule'));
            });
            
        });
    }
}
