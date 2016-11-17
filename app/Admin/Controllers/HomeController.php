<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Column;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Widgets\Box;
use Encore\Admin\Widgets\Chart\Bar;
use Encore\Admin\Widgets\Chart\Doughnut;
use Encore\Admin\Widgets\Chart\Line;
use Encore\Admin\Widgets\Chart\Pie;
use Encore\Admin\Widgets\Chart\PolarArea;
use Encore\Admin\Widgets\Chart\Radar;
use Encore\Admin\Widgets\Collapse;
use Encore\Admin\Widgets\InfoBox;
use Encore\Admin\Widgets\Tab;
use Encore\Admin\Widgets\Table;

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
                $row->column(4, new InfoBox('', 'file', 'green', '/admin/orders', 'Orders'));
                $row->column(4, new InfoBox('', 'file', 'purple', '/admin/packages', 'Courses'));
            });
            
        });
    }
}
