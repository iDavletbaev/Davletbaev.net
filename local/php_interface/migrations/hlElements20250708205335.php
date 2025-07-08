<?php

namespace Sprint\Migration;


class hlElements20250708205335 extends Version
{
    protected $author = "ilnurdav";

    protected $description   = "";

    protected $moduleVersion = "5.3.2";

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $this->getExchangeManager()
             ->HlblockElementsImport()
             ->setLimit(20)
             ->execute(function ($item) {
                 $this->getHelperManager()
                      ->Hlblock()
                      ->saveElementWithEqualKeys(
                          $item['hlblock_id'],
                          $item['fields'],
                          ['UF_DAV_NAME', 'UF_DAV_VALUE', 'UF_DAV_TYPE']
                      );
             });
    }

    /**
     * @throws Exceptions\MigrationException
     * @throws Exceptions\RestartException
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function down()
    {
    }


}
