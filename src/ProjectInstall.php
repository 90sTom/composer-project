<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui\Install;
use Composer\Composer;
use Composer\Installer;
use Composer\IO\IOInterface;
use Composer\Plugin\PluginInterface;
/**
 * Description of ProjectInstall
 *
 * @author Administrator
 */
class ProjectInstall implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $manager = $composer->getInstallationManager();

        //框架核心
        $manager->addInstaller(new ThinkFramework($io, $composer));

        //单元测试
        $manager->addInstaller(new ThinkTesting($io, $composer));

        //扩展
        $manager->addInstaller(new ThinkExtend($io, $composer));

    }
}
