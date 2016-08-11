<?php
return array(
    'servers' => array(
        array(
            'hostname' => '192.168.1.110',
            'port' => '11213',
            'weight' => '1',
        )
    ),

    'rules' => array(
        'act1' => array(
            'rule1' => array(
                'field' => 'ip',
                'type' => 'active',
                'period' => 30,//单位秒
                'limit_num' => 3,
                'white' => array(
                    '192.168.1.1',
                ),
            ),
            'rule2' => array(
                'field' => 'id',
                'type' => 'fixed',
                'period' => 3000,
                'limit_num' => 30,
                'white' => array(
                    1, 2, 3,
                ),
            ),
        ),
        'act2' => array(
            'rule1' => array(
                'field' => 'id',
                'type' => 'fixed',
                'period' => 600,
                'limit_num' => 6,
                'white' => array(
                    1, 2, 3
                ),
            ),
        ),
    )
);
