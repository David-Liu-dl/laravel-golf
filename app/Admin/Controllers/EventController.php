<?php

namespace App\Admin\Controllers;

use App\Event;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class EventController extends Controller
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

            $content->header('Events');
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

            $content->header('Event - '.$id);
//
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

            $content->header('Event');
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
        return Admin::grid(Event::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title();
            $grid->priority();

            $grid->price();
            $grid->address();
            $grid->introduction();
            $grid->availability()->value(function ($availability) {
                return $availability > 0 ? 'Y' : 'N';
            });
            $grid->date();
            $grid->coverImg()->value(function ($pic_url) {
                return $pic_url ? "<img style='max-height:150px;max-width:150px' src='/storage/$pic_url'>" : null;
            });
            $grid->originalImg()->value(function ($pic_url) {
                return $pic_url ? "<img style='max-height:150px;max-width:150px' src='/storage/$pic_url'>" : null;
            });
            $grid->created_at();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Event::class, function (Form $form) {

            $form->text('title', 'Title');
            $form->number('priority', 'Priority');
            $form->number('price', 'Price');
            $form->text('address', 'Address');
            $form->textarea('introduction', 'Introduction');
            $form->radio('availability', 'Availability')->values(['0'=>'No', '1'=>'Yes'])->default('0');
            $form->date('date', 'Date');
            $form->image('coverImg', 'Cover Image');
            $form->image('originalImg', 'Original Image');
        });
    }
}
