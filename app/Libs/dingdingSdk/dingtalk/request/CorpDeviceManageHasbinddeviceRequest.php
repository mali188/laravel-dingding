<?php
/**
 * dingtalk API: dingtalk.corp.device.manage.hasbinddevice request
 * 
 * @author auto create
 * @since 1.0, 2018.07.25
 */
class CorpDeviceManageHasbinddeviceRequest
{
	/** 
	 * 设备产品类型 产品编码：M1：9 C1：14 M2：15 D1：24
	 **/
	private $deviceServiceId;
	
	private $apiParas = array();
	
	public function setDeviceServiceId($deviceServiceId)
	{
		$this->deviceServiceId = $deviceServiceId;
		$this->apiParas["device_service_id"] = $deviceServiceId;
	}

	public function getDeviceServiceId()
	{
		return $this->deviceServiceId;
	}

	public function getApiMethodName()
	{
		return "dingtalk.corp.device.manage.hasbinddevice";
	}
	
	public function getApiParas()
	{
		return $this->apiParas;
	}
	
	public function check()
	{
		
		RequestCheckUtil::checkNotNull($this->deviceServiceId,"deviceServiceId");
	}
	
	public function putOtherTextParam($key, $value) {
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}
}
