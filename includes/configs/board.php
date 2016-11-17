<?
/*------------------------------------------------------------------------------
  BerryIO Board Configuration
------------------------------------------------------------------------------*/

// Determines which fields from /proc/cpuinfo should go in the hardware section
$GLOBALS['BOARD_SECTIONS'] = array(
  'Hardware' => 'Hardware',
  'Revision' => 'Hardware',
  'Serial'   => 'Hardware',
);

// Pi revision information based on the /proc/cpuinfo revision information
$GLOBALS['BOARD_PI_REVISIONS'] = array(
  '0002'   => array('Model' => 'B',    'Revision' => '1.0', 'Memory' => '256MB',  'Manufacturer' => 'Egoman'     ),
  '0003'   => array('Model' => 'B',    'Revision' => '1.0', 'Memory' => '256MB',  'Manufacturer' => 'Egoman', 'Notes' => 'Fuses mod and D14 removed', ),
  '0004'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Sony',      ),
  '0005'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Qisda',     ),
  '0006'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Egoman',    ),
  '0007'   => array('Model' => 'A',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Egoman',    ),
  '0008'   => array('Model' => 'A',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Sony',      ),
  '0009'   => array('Model' => 'A',    'Revision' => '2.0', 'Memory' => '256MB',  'Manufacturer' => 'Qisda',     ),
  '000d'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '512MB',  'Manufacturer' => 'Egoman',    ),
  '000e'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '512MB',  'Manufacturer' => 'Sony',      ),
  '000f'   => array('Model' => 'B',    'Revision' => '2.0', 'Memory' => '512MB',  'Manufacturer' => 'Qisda'      ),
  '0010'   => array('Model' => 'B+',   'Revision' => '1.0', 'Memory' => '512MB',  'Manufacturer' => 'Sony',      ),
  '0011'   => array('Model' => 'CM',   'Revision' => '1.0', 'Memory' => '512MB',  'Manufacturer' => 'Sony',      ),
  '0012'   => array('Model' => 'A+',   'Revision' => '1.1', 'Memory' => '256MB',  'Manufacturer' => 'Sony',      ),
  '0013'   => array('Model' => 'B+',   'Revision' => '1.2', 'Memory' => '512MB',  'Manufacturer' => '',          ),  
  '0014'   => array('Model' => 'CM',   'Revision' => '1.0', 'Memory' => '512MB',  'Manufacturer' => 'Embest',    ),  
  '0015'   => array('Model' => 'A+',   'Revision' => '1.1', 'Memory' => '512MB',  'Manufacturer' => 'Embest',    ),
  'a01040' => array('Model' => '2B',   'Revision' => '1.0', 'Memory' => '1024MB', 'Manufacturer' => '',          ),
  'a01041' => array('Model' => '2B',   'Revision' => '1.1', 'Memory' => '1024MB', 'Manufacturer' => 'Sony',      ),
  'a21041' => array('Model' => '2B',   'Revision' => '1.1', 'Memory' => '1024MB', 'Manufacturer' => 'Embest',    ),
  'a22042' => array('Model' => '2B',   'Revision' => '1.2', 'Memory' => '1024MB', 'Manufacturer' => 'Embest',    ),
  '900092' => array('Model' => 'Zero', 'Revision' => '1.2', 'Memory' => '512MB',  'Manufacturer' => 'Sony',      ),  
  '900093' => array('Model' => 'Zero', 'Revision' => '1.3', 'Memory' => '512MB',  'Manufacturer' => 'Sony',      ),
  '920093' => array('Model' => 'Zero', 'Revision' => '1.3', 'Memory' => '512MB',  'Manufacturer' => 'Embest',    ),
  'a02082' => array('Model' => '3B',   'Revision' => '1.2', 'Memory' => '1024MB', 'Manufacturer' => 'Sony',      ),  
  'a22082' => array('Model' => '3B',   'Revision' => '1.2', 'Memory' => '1024MB', 'Manufacturer' => 'Embest',    ),  
);
