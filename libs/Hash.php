<?php
class Hash{
	//Hash::create('md5','passwordhere','SaltIfHereIsOne');
	public static function create($algo, $data, $salt){
		$context=hash_init($algo, HASH_HMAC, $salt);
		hash_update($context,$data);
		
		return hash_final($context);
	}
}
?>