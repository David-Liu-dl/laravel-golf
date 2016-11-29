<?php

namespace App\Admin\Controllers;

use App\DayOpenHour;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class DayOpenHourController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('Schedule');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('Schedule');
            $content->description('Editing: '. $id . "th of week");

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('Schedule');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(DayOpenHour::class, function (Grid $grid) {
            $grid->disableBatchDeletion();
            $grid->disableCreation();
            $grid->rows(function ($row) {
                $row->actions('edit');
            });

            $grid->day_of_week();
            $grid->title();
            $grid->open_at();
            $grid->close_at();
            $grid->availability()->value(function ($availability) {
                return $availability > 0 ? 'Y' : 'N';
            });


        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(DayOpenHour::class, function (Form $form) {
            $form->time('open_at','Open at')->format('HH:00:00');
            $form->time('close_at','Close at')->format('HH:00:00');
            $form->radio('availability','isOpen')->values(['0'=>'No', '1'=>'Yes'])->default('1');
        });
    }
}
