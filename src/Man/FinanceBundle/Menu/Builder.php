<?php
// src/Man/FinanceBundle/Menu/Builder.php
namespace Man\FinanceBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware
{
    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem('root');

        $decinc = $menu->addChild('ลดต้นลดดอก', array('route' => 'man_finance_test'));
			$decinc->addChild('เพิ่มการ์ดใหม่', array());
			$decinc->addChild('ค้นหาการ์ด', array());
			$decinc->addChild('ผู้ค้างชำระ', array());
			$decinc->addChild('ผู้ค้างชำระแยกตามพื้นที่', array());
			$decinc->addChild('กำหนดนัดหมาย', array());
			$decinc->addChild('เปอร์เซ็นต์ภาระหนี้', array());
        $finance = $menu->addChild('ไฟแนนซ์', array('route' => 'man_finance_test'));
			$finance->addChild('เพิ่มการ์ดใหม่', array());
			$finance->addChild('ค้นหาการ์ด', array());
			$finance->addChild('ผู้ค้างชำระ', array());
			$finance->addChild('ผู้ค้างชำระแยกตามพื้นที่', array());
			$finance->addChild('กำหนดนัดหมาย', array());		
        $service = $menu->addChild('งานบริการ', array('route' => 'man_finance_test'));
			$service->addChild('ออกบิล', array());
			$service->addChild('บอลที่บันทึกไว้', array());
			$service->addChild('วันครบกำหนด', array());
        $customer = $menu->addChild('ลูกค้า', array('route' => 'man_finance_test'));
			$customer->addChild('เพิ่มลูกค้าใหม่', array());
			$customer->addChild('รายชื่อลูกค้า', array());
        $report = $menu->addChild('รายงาน', array('route' => 'man_finance_test'));
			$report->addChild('ยอดแยกตามพนักงาน', array());
			$report->addChild('ยอดเแยกตามประเภทบริการ', array());
			$report->addChild('ยอดแยกตามสาขา', array());
	
						
        // ... add more children

        return $menu;
    }
}