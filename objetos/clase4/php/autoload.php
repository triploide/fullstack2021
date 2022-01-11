<?php

spl_autoload_register(function ($clase) {
    include __DIR__  . '/classes/' . $clase . '.php';
});
