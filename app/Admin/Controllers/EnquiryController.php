<?php

namespace App\Admin\Controllers;

use App\Enquiry;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class EnquiryController extends Controller
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

            $content->header('Enquiries');
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

            $content->header('Enquiry - '.$id);
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

            $content->header('Enquiry');
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
        return Admin::grid(Enquiry::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->name();
            $grid->email();
            $grid->phone();
            $grid->types();
            $grid->comment();
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
        return Admin::form(Enquiry::class, function (Form $form) {
            $form->text('name', 'Name');
            $form->text('phone', 'Phone');
            $form->email('email', 'Email');
            $form->text('types', 'Types');
            $form->textarea('comment', 'Comment');
        });
    }
}
