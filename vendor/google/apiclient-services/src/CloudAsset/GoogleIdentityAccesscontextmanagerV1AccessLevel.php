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

namespace Google\Service\CloudAsset;

class GoogleIdentityAccesscontextmanagerV1AccessLevel extends \Google\Model
{
  protected $basicType = GoogleIdentityAccesscontextmanagerV1BasicLevel::class;
  protected $basicDataType = '';
  protected $customType = GoogleIdentityAccesscontextmanagerV1CustomLevel::class;
  protected $customDataType = '';
  public $description;
  public $name;
  public $title;

  /**
   * @param GoogleIdentityAccesscontextmanagerV1BasicLevel
   */
  public function setBasic(GoogleIdentityAccesscontextmanagerV1BasicLevel $basic)
  {
    $this->basic = $basic;
  }
  /**
   * @return GoogleIdentityAccesscontextmanagerV1BasicLevel
   */
  public function getBasic()
  {
    return $this->basic;
  }
  /**
   * @param GoogleIdentityAccesscontextmanagerV1CustomLevel
   */
  public function setCustom(GoogleIdentityAccesscontextmanagerV1CustomLevel $custom)
  {
    $this->custom = $custom;
  }
  /**
   * @return GoogleIdentityAccesscontextmanagerV1CustomLevel
   */
  public function getCustom()
  {
    return $this->custom;
  }
  public function setDescription($description)
  {
    $this->description = $description;
  }
  public function getDescription()
  {
    return $this->description;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  public function getName()
  {
    return $this->name;
  }
  public function setTitle($title)
  {
    $this->title = $title;
  }
  public function getTitle()
  {
    return $this->title;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleIdentityAccesscontextmanagerV1AccessLevel::class, 'Google_Service_CloudAsset_GoogleIdentityAccesscontextmanagerV1AccessLevel');