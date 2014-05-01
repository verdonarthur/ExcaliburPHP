<?php

/**
 * @author 
 * @copyright (c) 2014, Arthur Verdon
 * 
 * 
 */

/**
 * Description of test
 *
 */
class test extends controller{

    public $template = 'template_app.php';

    public function db() {
        $this->orm();
    }

    public function html() {
        $this->orm();
    }

    public function orm() {
        $this->template->set_var('title', 'Exemple sur l\'ORM');
        $this->template->set_var('menu', view::get_content('vertical_menu.php'));
        $this->template->set_var('content', view::get_content('test/orm.php'));
        $this->template->forge();
    }

}
