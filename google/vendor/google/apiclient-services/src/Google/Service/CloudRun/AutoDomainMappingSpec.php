<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_CloudRun_AutoDomainMappingSpec extends Google_Model
{
    public $certificateMode;
    public $expansionType;
    public $forceOverride;

    public function setCertificateMode($certificateMode)
    {
        $this->certificateMode = $certificateMode;
    }

    public function getCertificateMode()
    {
        return $this->certificateMode;
    }

    public function setExpansionType($expansionType)
    {
        $this->expansionType = $expansionType;
    }

    public function getExpansionType()
    {
        return $this->expansionType;
    }

    public function setForceOverride($forceOverride)
    {
        $this->forceOverride = $forceOverride;
    }

    public function getForceOverride()
    {
        return $this->forceOverride;
    }
}
