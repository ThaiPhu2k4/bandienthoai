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

class Google_Service_AndroidEnterprise_AppState extends Google_Collection
{
    protected $collection_key = 'keyedAppState';
    protected $keyedAppStateType = 'Google_Service_AndroidEnterprise_KeyedAppState';
    protected $keyedAppStateDataType = 'array';
    public $packageName;

    /**
     * @param Google_Service_AndroidEnterprise_KeyedAppState
     */
    public function setKeyedAppState($keyedAppState)
    {
        $this->keyedAppState = $keyedAppState;
    }

    /**
     * @return Google_Service_AndroidEnterprise_KeyedAppState
     */
    public function getKeyedAppState()
    {
        return $this->keyedAppState;
    }

    public function setPackageName($packageName)
    {
        $this->packageName = $packageName;
    }

    public function getPackageName()
    {
        return $this->packageName;
    }
}
