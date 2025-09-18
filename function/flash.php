<?php
session_start();
function create_flash_message(string $type, string $message, string $name)
{
    if (isset($_SESSION["FLASH MESSAGE"][$name])) {
        unset($_SESSION["FLASH MESSAGE"][$name]);
    }
    $_SESSION["FLASH MESSAGE"][$name] = ['type' => $type, 'message' => $message];
}

function format_flash_message(array $flash_message)
{
    return sprintf('<div class="alert alert-%s">%s</div>', $flash_message['type'], $flash_message['message']);
}

function display_flash_message(string $name)
{
    if (!isset($_SESSION['FLASH MESSAGE'][$name])) {
        return;
    }
    $flash_message = $_SESSION['FLASH MESSAGE'][$name];
    unset($_SESSION['FLASH MESSAGE'][$name]);
    echo format_flash_message($flash_message);
}
function display_all_flash_message()
{
    if (!isset($_SESSION['FLASH MESSAGE'])) {
        return;
    }
    $flash_messages = $_SESSION['FLASH MESSAGE'];
    unset($_SESSION['FLASH MESSAGE']);
    foreach ($flash_messages as $flash_message) {
        echo format_flash_message($flash_message);
    }
}

function flash(string $name = '', string $type = '', string $message = '')
{
    if ($name !== '' && $type !== '' && $message !== '') {
        create_flash_message($type, $message, $name);
    } elseif ($name !== '' && $type === '' && $message === '') {
        display_flash_message($name);
    } elseif ($name === '' && $type === '' && $message === '') {
        display_all_flash_message();
    }
}
?>