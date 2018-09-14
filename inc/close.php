<?php
/**
 * @author Matthew McNaney <mcnaney at gmail dot com>
 * @version $Id$
 */
Block::show();

if (Current_User::allow('block')) {

    $key = \Canopy\Key::getCurrent();
    if (\Canopy\Key::checkKey($key)) {
        require_once PHPWS_SOURCE_DIR . 'mod/block/class/Block_Admin.php';
        Block_Admin::form($key);
    }
}
