<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getCompanyId() 获取集团id
 * @method void setCompanyId(string $CompanyId) 设置集团id
 * @method integer getShopId() 获取店铺id
 * @method void setShopId(integer $ShopId) 设置店铺id
 * @method integer getZoneId() 获取区域ID
 * @method void setZoneId(integer $ZoneId) 设置区域ID
 * @method string getZoneName() 获取区域名称
 * @method void setZoneName(string $ZoneName) 设置区域名称
 * @method array getData() 获取每日人流量
 * @method void setData(array $Data) 设置每日人流量
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeZoneFlowDailyByZoneId返回参数结构体
 */
class DescribeZoneFlowDailyByZoneIdResponse extends AbstractModel
{
    /**
     * @var string 集团id
     */
    public $CompanyId;

    /**
     * @var integer 店铺id
     */
    public $ShopId;

    /**
     * @var integer 区域ID
     */
    public $ZoneId;

    /**
     * @var string 区域名称
     */
    public $ZoneName;

    /**
     * @var array 每日人流量
     */
    public $Data;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param string $CompanyId 集团id
     * @param integer $ShopId 店铺id
     * @param integer $ZoneId 区域ID
     * @param string $ZoneName 区域名称
     * @param array $Data 每日人流量
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ZoneDayFlow();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}