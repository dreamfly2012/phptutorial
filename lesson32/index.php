<?php


use UI\Window;
use UI\Size;
use UI\Controls\Button;
use UI\Controls\Grid;
use UI\Controls\Box;

$window = new Window('php GUI', new Size(400, 400));

class mybtn extends Button
{
    //private $window;

    public function __construct($text, $window)
    {
        $this->window = $window;
        parent::__construct($text);
    }
    public function onClick()
    {
        $this->window->msg('消息标题', '消息内容');
    }
}

//$btn = new mybtn("按钮", $window);

$btn = new mybtn('你好', $window);

$grid = new Grid();

$grid->append($btn, 0, 0, 1, 1, true, Grid::Center, false, Grid::Fill);

$errorButton = new class ("Error Box", $window) extends Button
{
    public function __construct(string $text, Window $window)
    {
        $this->window = $window;

        parent::__construct($text);
    }

    public function onClick()
    {
        $this->window->error(
            "This message box describes an error",
            "More detailed information can be shown here."
        );
    }

    private $window;
};

$grid->append($errorButton, 0, 0, 2, 1, false, Grid::Center, false, Grid::Fill);

$window->add($grid);
$window->setMargin(true);
$window->show();

UI\run();
