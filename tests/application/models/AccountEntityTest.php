<?php

class AboutEntityTest extends ModelTestCase
{
	public function testCanSaveAndRetrieveUser()
	{
		$account = new \Entities\Account;
		$account->setUsername('wjgilmore-test');
		$account->setEmail('example@swiatek.biz');
		$account->setPassword('json');
		$account->setZip('23452');
		$account->setConfirmed(1);
		$this->em->persist($account);
		$this->em->flush();
		
		$account = $this->em->getRepository('Entities\Account')->findOneByUsername('wjgilmore-test');
		$this->assertEquals('wjgilmore-test', $account->getUsername());
	}
}