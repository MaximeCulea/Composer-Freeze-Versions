<?php namespace MaximeCulea\ComposerScripts\ComposerFreezeVersions;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Plugin\Capability\CommandProvider;
use Composer\Plugin\Capable;
use Composer\Plugin\PluginInterface;

class FreezeVersions implements PluginInterface, Capable, CommandProvider {

	/**
	 * @var Composer
	 */
	private $composer;

	/**
	 * @var IOInterface
	 */
	private $io;

	public function activate( Composer $composer, IOInterface $io ) {
		$this->composer = $composer;
		$this->io       = $io;
	}

	public function deactivate( Composer $composer, IOInterface $io ) {
	}

	public function uninstall( Composer $composer, IOInterface $io ) {
	}

	public function getCapabilities() {
		return [ 'Composer\Plugin\Capability\CommandProvider' => __NAMESPACE__ . '\\FreezeVersions' ];
	}

	public function getCommands() {
		return [ new Command\FreezeVersionsCommand() ];
	}
}