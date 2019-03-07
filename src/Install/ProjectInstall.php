<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui\Install;
use Composer\Script\Event;
/**
 * Description of ProjectInstall
 *
 * @author Administrator
 */
class ProjectInstall
{
    public static function install(Event $event){
        mkdir("test");
    }
}
