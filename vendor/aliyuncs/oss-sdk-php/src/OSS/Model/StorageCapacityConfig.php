<?php
 namespace OSS\Model; class StorageCapacityConfig implements XmlConfig { public function __construct($storageCapacity) { $this->storageCapacity = $storageCapacity; } public function parseFromXml($strXml) { throw new OssException("Not implemented."); } public function serializeToXml() { $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><BucketUserQos></BucketUserQos>'); $xml->addChild('StorageCapacity', strval($this->storageCapacity)); return $xml->asXML(); } function __toString() { return $this->serializeToXml(); } public function setStorageCapacity($storageCapacity) { $this->storageCapacity = $storageCapacity; } public function getStorageCapacity() { return $this->storageCapacity; } private $storageCapacity = 0; }