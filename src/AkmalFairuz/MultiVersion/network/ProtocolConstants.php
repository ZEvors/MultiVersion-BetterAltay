<?php

declare(strict_types=1);

namespace AkmalFairuz\MultiVersion\network;

use pocketmine\network\mcpe\protocol\ProtocolInfo;

class ProtocolConstants{

    public const PROTOCOL_1_21_93 = 819;
    public const PROTOCOL_1_21_90 = 818;
	public const PROTOCOL_1_21_80 = 800;
	public const PROTOCOL_1_21_70 = 786;
	public const PROTOCOL_1_21_60 = 776;
	public const PROTOCOL_1_21_50 = 766;
	public const PROTOCOL_1_21_40 = 748;
	public const PROTOCOL_1_21_30 = 729;
	public const PROTOCOL_1_21_20 = 712;
	public const PROTOCOL_1_21_2 = 686;
	public const PROTOCOL_1_21_0 = 685;
	public const PROTOCOL_1_20_80 = 671;
	public const PROTOCOL_1_20_70 = 662;
	public const PROTOCOL_1_20_60 = 649;
	public const PROTOCOL_1_20_50 = 630;
    public const BEDROCK_1_18_0 = 475;
    public const BEDROCK_1_17_40 = 471;
    public const BEDROCK_1_17_30 = 465;
    public const BEDROCK_1_17_10 = 448;
    public const BEDROCK_1_17_0 = 440;
    public const BEDROCK_1_16_220 = 431;

    public const MINECRAFT_VERSION = [
        self::PROTOCOL_1_21_93, => "1.21.93",
        self::PROTOCOL_1_21_90, => "1.21.90",
        self::PROTOCOL_1_21_80, => "1.21.80",
	    self::PROTOCOL_1_21_70, => "1.21.70",
		self::PROTOCOL_1_21_60, => "1.21.60",
		self::PROTOCOL_1_21_50, => "1.21.50",
		self::PROTOCOL_1_21_40, => "1.21.40",
		self::PROTOCOL_1_21_30, => "1.21.30",
		self::PROTOCOL_1_21_20, => "1.21.20",
		self::PROTOCOL_1_21_2, => "1.21.2",
		self::PROTOCOL_1_21_0, => "1.21.0",
		self::PROTOCOL_1_20_80, => "1.20.80",
		self::PROTOCOL_1_20_70, => "1.20.70",
		self::PROTOCOL_1_20_60, => "1.20.60",
		self::PROTOCOL_1_20_50, => "1.20.50",
        self::BEDROCK_1_18_0, => "1.18.0",
        self::BEDROCK_1_17_40, => "1.17.40",
        self::BEDROCK_1_17_30, => "1.17.30",
        self::BEDROCK_1_17_10, => "1.17.10",
        self::BEDROCK_1_17_0, => "1.17.0",
        self::BEDROCK_1_16_220 => "1.16.220",
        ProtocolInfo::CURRENT_PROTOCOL => ProtocolInfo::MINECRAFT_VERSION_NETWORK
    ];

    public const SUPPORTED_PROTOCOLS = [
        self::PROTOCOL_1_21_93,
        self::PROTOCOL_1_21_80,
	    self::PROTOCOL_1_21_70,
		self::PROTOCOL_1_21_60,
		self::PROTOCOL_1_21_50,
		self::PROTOCOL_1_21_40,
		self::PROTOCOL_1_21_30,
		self::PROTOCOL_1_21_20,
		self::PROTOCOL_1_21_2,
		self::PROTOCOL_1_21_0,
		self::PROTOCOL_1_20_80,
		self::PROTOCOL_1_20_70,
		self::PROTOCOL_1_20_60,
		self::PROTOCOL_1_20_50,
        self::BEDROCK_1_18_0,
        self::BEDROCK_1_17_40,
        self::BEDROCK_1_17_30,
        self::BEDROCK_1_17_10,
        self::BEDROCK_1_17_0,
        self::BEDROCK_1_16_220,
        ProtocolInfo::CURRENT_PROTOCOL
    ];
}
