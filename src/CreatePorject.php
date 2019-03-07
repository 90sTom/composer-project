<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace YangXiaoHui\Install;
use Composer\Package\PackageInterface;
use Composer\Repository\InstalledRepositoryInterface;
/**
 * Description of CreatePorject
 *
 * @author Administrator
 */
class CreatePorject extends LibraryInstaller
{
    public function install(InstalledRepositoryInterface $repo, PackageInterface $package)
    {
        parent::install($repo, $package);
        $this->filesystem->removeDirectory($this->getInstallPath($package) . DIRECTORY_SEPARATOR . 'tests');
    }

    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {

        if ($this->composer->getPackage()) {
            $extra = $this->composer->getPackage()->getExtra();
            if (!empty($extra['yang-xiao-hui'])) {
                return $extra['yang-xiao-hui'];
            }
        }

        return 'project';
    }

    public function update(InstalledRepositoryInterface $repo, PackageInterface $initial, PackageInterface $target)
    {
        parent::update($repo, $initial, $target);
      
        $this->filesystem->removeDirectory($this->getInstallPath($target) . DIRECTORY_SEPARATOR . 'tests');
    }

    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'yang-xiao-hui' === $packageType;
    }
}