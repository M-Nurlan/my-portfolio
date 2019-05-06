<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\Display\DisplayInterface;
use SleepingOwl\Admin\Contracts\Form\FormInterface;
use SleepingOwl\Admin\Section;

use AdminColumn;
use AdminColumnEditable;
use AdminDisplay;
use AdminForm;
use AdminFormElement;
use SleepingOwl\Admin\Contracts\Initializable;

/**
 * Class Clients
 *
 * @property \App\Blog $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Blogs extends Section implements Initializable
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Blogs';

    /**
     * @var string
     */
    protected $alias = 'blogs';


    public function initialize()
    {
        // Добавление пункта меню и счетчика кол-ва записей в разделе
        $this->addToNavigation($priority = 500, function() {
            return \App\Blog::count();
        });

        $this->creating(function($config, \Illuminate\Database\Eloquent\Model $model) {
            //...
        });
    }

    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        return AdminDisplay::table()->with('user')
            ->setHtmlAttribute('class', 'table-primary')
            ->setColumns(
                AdminColumnEditable::text('id', '#')->setWidth('30px'),
                AdminColumnEditable::text('user.name', 'Login')->setWidth('100px'),
                AdminColumnEditable::text('user.email', 'E-mail'),
                AdminColumnEditable::text('title', 'Title'),
                AdminColumnEditable::text('text', 'Text')
            )->paginate(20);
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        // remove if unused
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return AdminForm::panel()->addBody([
            AdminFormElement::hidden('user_id')->setDefaultValue(\Auth::id()),
            AdminFormElement::text('title', 'Title')->required(),
            AdminFormElement::wysiwyg('text', 'Text')->required(),
            AdminFormElement::image('image', 'Image')->required()

        ]);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // remove if unused
    }
}
