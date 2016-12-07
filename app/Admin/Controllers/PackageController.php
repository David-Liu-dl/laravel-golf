<?php

namespace App\Admin\Controllers;

use App\Package;

use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class PackageController extends Controller
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

            $content->header('Lessons');
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

            $content->header('Lesson - '.$id);
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

            $content->header('Lessons');
            $content->body($this->form());
        });
    }
//
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Package::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->column('title');
            $grid->priority();
            $grid->description();
            $grid->column('features');
            $grid->video_url()->value(function ($video_url){
                return "<p style='width:100px;word-break: break-all;word-wrap: break-word;'>$video_url</p>";
            });
            $grid->pic_url()->value(function ($pic_url) {
                return "<img style='max-height:150px;max-width:150px' src='/storage/$pic_url'>";
            });
            $grid->price()->value(function ($price) {
                return number_format($price, 2);
            });
            $grid->created_at()->sortable();
            $grid->paginate(15);
            $grid->disableExport();
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Package::class, function (Form $form) {
            $form->text('title', 'Title');
            $form->number('priority', 'Priority');
            $form->textarea('description', 'Description');
            $form->textarea('features', 'Features');
            $form->url('video_url', 'Video URL(embed)');
            $form->image('pic_url', 'Picture');
            $form->number('price', 'Price');
        });
    }
}
