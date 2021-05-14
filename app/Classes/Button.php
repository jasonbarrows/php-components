<?php

namespace App\Classes;

class Button extends \App\Classes\BaseComponent {
    public $title = '';
    public $class = '';

    public function __construct($props) {
        if (array_key_exists('title', $props)) {
            $this->title = $props['title'];
            unset($props['title']);
        }

        if (array_key_exists('class', $props)) {
            $this->class = $props['class'];
            unset($props['class']);
        }

        parent::__construct($props);
    }

    public function render() { ?>
        <button class="px-4 py-2 bg-gray-100 border <?php echo $this->class; ?>" <?php echo $this->getAttributes(); ?>>
            <?php echo $this->title; ?>
        </button>
    <?php }
}
