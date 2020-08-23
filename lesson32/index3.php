<?php
$window = new GtkWindow();

$fixed = new GtkFixed(); //灵活定位

$window->add($fixed);

$button = new GtkButton("click me");

$button->set_size_request(80, 35); //大小控制
$button->set_tooltip_text("Button widget"); //鼠标放上显示 类似hover

$button->connect('clicked', function () {
    $md = new GtkMessageDialog($window, Gtk::DIALOG_MODAL, Gtk::MESSAGE_INFO, Gtk::BUTTONS_OK, "Download completed.");
    $md->set_title("Information");
    $md->run();
    $md->destroy();
});

$fixed->put($button, 50, 50); //定位

$window->set_default_size(400, 400);

$window->set_title("gtk window");

$window->show_all();

function shutdown()
{
    gtk::main_quit();
}
$window->connect('destroy', 'shutdown');

gtk::main();
