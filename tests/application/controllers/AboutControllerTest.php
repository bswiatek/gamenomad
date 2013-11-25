<?php



class AboutControllerTest extends ControllerTestCase
{
	/*public function testDoesAccountControllerExist()
	{
		$this->dispatch('/about');
		$this->assertController('About');
	}*/
	public function testExactlyThreeHotGamesAreDisplayed()
	{
		$this->dispatch('about/contact');
		$this->assertQueryCount('ul#hottest > li', 3);
	}
}




