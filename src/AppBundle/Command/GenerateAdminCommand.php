<?php
namespace AppBundle\Command;

use Sensio\Bundle\GeneratorBundle\Command\GenerateDoctrineCrudCommand;
use Sensio\Bundle\GeneratorBundle\Generator\DoctrineCrudGenerator;

use Symfony\Component\HttpKernel\Bundle\BundleInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Sensio\Bundle\GeneratorBundle\Command\Helper\DialogHelper;
use Sensio\Bundle\GeneratorBundle\Generator\Generator;


class GenerateAdminCommand extends GenerateDoctrineCrudCommand
{
    protected $generator;
 
    protected function configure()
    {
        parent::configure();
 
        $this->setName('generate:doctrine:crudpanel');
      
        $this->setDescription('Generator');
    }
    protected function getsGenerator(BundleInterface $bundle = null)
    {
        if (null === $this->generator) {
            $this->generator = new DoctrineCrudGenerator
                    ($this->getContainer()->get('filesystem'), __DIR__.'/../Resources/skeleton/crud');
        }
 
        return $this->generator;
    }
    protected function getSkeletonDirs(BundleInterface $bundle = null)
    {
        $skeletonDirs = array();

        if (isset($bundle) && is_dir($dir = $bundle->getPath().'/Resources/skeleton/crud')) {
            $skeletonDirs[] = $dir;
        }

        if (is_dir($dir = $this->getContainer()->get('kernel')->getRootdir().'/Resources/skeleton/crud')) {
            $skeletonDirs[] = $dir;
        }

        $skeletonDirs[] = __DIR__.'/../Resources/skeleton';
        $skeletonDirs[] = __DIR__.'/../Resources';

        return $skeletonDirs;
    }
     protected function getGenerator(BundleInterface $bundle = null)
    {
        if (null === $this->generator) {
            $this->generator = $this->createGenerator();
            $this->generator->setSkeletonDirs($this->getSkeletonDirs($bundle));
        }

        return $this->generator;
    }
    
}