<?php

namespace MulkiAqi192\JoinUI;

use pocketmine\Server;
use pocketmine\Player;

use pocketmime\plugin\PluginBase;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class main extends PluginBase implements Listener {

	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}


	public function onJoin(PlayerJoinEvent $event){
		$player = $event->getPlayer();

		$this->openMyForm($player);
	}

	public function openMyForm($player){
		$api = $this->getServer()->getPluginManager()->getPlugin("FormAPI");
		$form = $api->createSimpleForm(function (Player $player, int $data = null){
			$result = $data;
			if($result === null){
				return true;
			}
			switch($result){
				case 0:
					
				break;
			}
		});
		$form->setTitle("§l§eJedi§cMasters");
		$form->setContent("§aWelcome to my §cserver!\n§aServer news: §bThis is new server UwU\n§aServer media: §cNo Media UwU");
		// Use \n if you want to make some spaceses!
		$form->addButton("Close");
		$form->sendToPlayer($player);
		return $form;
	}

}