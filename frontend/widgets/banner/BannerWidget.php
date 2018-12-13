<?
namespace frontend\widgets\banner;

use Yii;
use yii\bootstrap\Widget;

class BannerWidget extends widget
{
	public $items = [];

	public function init()
	{
		if (empty($this->items)) {
			$this->items = [
				[
					'label' => 'demo', 
					'image_url' => '/statics/images/banner/java.jpg', 
					'url' => ['site/view'],
					'html' => 'Java基础',
					'active' => 'active',
				],
				[
					'label' => 'demo', 
					'image_url' => '/statics/images/banner/spring.jpg', 
					'url' => ['site/view'],
					'html' => 'Spring源码阅读',
					'active' => '',
				],
				[
					'label' => 'demo', 
					'image_url' => '/statics/images/banner/jvm.jpg', 
					'url' => ['site/view'],
					'html' => 'JVM虚拟机垃圾回收机制',
					'active' => '',
				],
			];
		}
		
	}

	public function run()
	{
		$data['items'] = $this->items;
		return $this->render('index', ['data' => $data]);
	}
}