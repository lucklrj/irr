<?php return array (
  0 => 
  array (
    'type' => 'namespace',
    'name' => 'Lucklrj\\Math',
    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
    'line' => 3,
    'char' => 5,
  ),
  1 => 
  array (
    'type' => 'class',
    'name' => 'Irr',
    'abstract' => 0,
    'final' => 0,
    'definition' => 
    array (
      'methods' => 
      array (
        0 => 
        array (
          'visibility' => 
          array (
            0 => 'public',
          ),
          'type' => 'method',
          'name' => 'getIRR',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'values',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 4,
              'char' => 41,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'guess',
              'const' => 0,
              'data-type' => 'double',
              'mandatory' => 1,
              'default' => 
              array (
                'type' => 'double',
                'value' => '0.1',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 4,
                'char' => 61,
              ),
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 4,
              'char' => 61,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'array',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'dates',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 9,
                  'char' => 20,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 10,
              'char' => 12,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'positive',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 10,
                  'char' => 22,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 11,
              'char' => 12,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'negative',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 11,
                  'char' => 22,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 12,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'index',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 12,
                  'char' => 18,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 13,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'value',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 13,
                  'char' => 18,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 15,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'dates',
                  'expr' => 
                  array (
                    'type' => 'empty-array',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 15,
                    'char' => 26,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 15,
                  'char' => 26,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 16,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'positive',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 16,
                    'char' => 29,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 16,
                  'char' => 29,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 17,
              'char' => 11,
            ),
            7 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'negative',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'false',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 17,
                    'char' => 29,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 17,
                  'char' => 29,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 19,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'for',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'values',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 19,
                'char' => 36,
              ),
              'key' => 'index',
              'value' => 'value',
              'reverse' => 0,
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'index',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 20,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 20,
                      'char' => 27,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 20,
                    'char' => 27,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'dates',
                          'expr' => 
                          array (
                            'type' => 'int',
                            'value' => '0',
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 21,
                            'char' => 32,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 21,
                          'char' => 32,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 22,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable-append',
                          'operator' => 'assign',
                          'variable' => 'dates',
                          'expr' => 
                          array (
                            'type' => 'add',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'dates',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 23,
                                'char' => 36,
                              ),
                              'right' => 
                              array (
                                'type' => 'sub',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'index',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 23,
                                  'char' => 43,
                                ),
                                'right' => 
                                array (
                                  'type' => 'int',
                                  'value' => '1',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 23,
                                  'char' => 46,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 23,
                                'char' => 46,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 23,
                              'char' => 48,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '365',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 23,
                              'char' => 53,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 23,
                            'char' => 53,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 23,
                          'char' => 53,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 24,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 26,
                  'char' => 14,
                ),
                1 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'greater',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'values',
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 26,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'index',
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 26,
                        'char' => 28,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 26,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 26,
                      'char' => 34,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 26,
                    'char' => 34,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'positive',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 27,
                            'char' => 36,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 27,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 28,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 29,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'less',
                    'left' => 
                    array (
                      'type' => 'array-access',
                      'left' => 
                      array (
                        'type' => 'variable',
                        'value' => 'values',
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 29,
                        'char' => 22,
                      ),
                      'right' => 
                      array (
                        'type' => 'variable',
                        'value' => 'index',
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 29,
                        'char' => 28,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 29,
                      'char' => 30,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 29,
                      'char' => 34,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 29,
                    'char' => 34,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'negative',
                          'expr' => 
                          array (
                            'type' => 'bool',
                            'value' => 'true',
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 30,
                            'char' => 36,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 30,
                          'char' => 36,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 31,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 32,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 35,
              'char' => 10,
            ),
            9 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'list',
                'left' => 
                array (
                  'type' => 'or',
                  'left' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'positive',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 35,
                      'char' => 23,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 35,
                      'char' => 32,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 35,
                    'char' => 32,
                  ),
                  'right' => 
                  array (
                    'type' => 'equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'negative',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 35,
                      'char' => 44,
                    ),
                    'right' => 
                    array (
                      'type' => 'bool',
                      'value' => 'false',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 35,
                      'char' => 51,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 35,
                    'char' => 51,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 35,
                  'char' => 51,
                ),
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 35,
                'char' => 53,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 36,
                    'char' => 20,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 37,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 40,
              'char' => 13,
            ),
            10 => 
            array (
              'type' => 'declare',
              'data-type' => 'double',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'resultRate',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 40,
                  'char' => 25,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 41,
              'char' => 11,
            ),
            11 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'resultRate',
                  'expr' => 
                  array (
                    'type' => 'variable',
                    'value' => 'guess',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 41,
                    'char' => 31,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 41,
                  'char' => 31,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 44,
              'char' => 13,
            ),
            12 => 
            array (
              'type' => 'declare',
              'data-type' => 'double',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'epsMax',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 44,
                  'char' => 21,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 45,
              'char' => 11,
            ),
            13 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'epsMax',
                  'expr' => 
                  array (
                    'type' => 'double',
                    'value' => '0.0000000001',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 45,
                    'char' => 34,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 45,
                  'char' => 34,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 48,
              'char' => 11,
            ),
            14 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'iterMax',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 48,
                  'char' => 20,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 49,
              'char' => 11,
            ),
            15 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'iterMax',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '50',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 49,
                    'char' => 25,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 49,
                  'char' => 25,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 53,
              'char' => 11,
            ),
            16 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'iteration',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 53,
                  'char' => 22,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 54,
              'char' => 11,
            ),
            17 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'iteration',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 54,
                    'char' => 26,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 54,
                  'char' => 26,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 56,
              'char' => 12,
            ),
            18 => 
            array (
              'type' => 'declare',
              'data-type' => 'bool',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'contLoop',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 56,
                  'char' => 22,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 57,
              'char' => 11,
            ),
            19 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'contLoop',
                  'expr' => 
                  array (
                    'type' => 'bool',
                    'value' => 'true',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 57,
                    'char' => 29,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 57,
                  'char' => 29,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 59,
              'char' => 11,
            ),
            20 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'resultValue',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 59,
                  'char' => 24,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 60,
              'char' => 11,
            ),
            21 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'irr_result_deriv',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 60,
                  'char' => 29,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 62,
              'char' => 13,
            ),
            22 => 
            array (
              'type' => 'declare',
              'data-type' => 'double',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'newRate',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 62,
                  'char' => 22,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 64,
              'char' => 11,
            ),
            23 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'epsRate',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 64,
                  'char' => 20,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 68,
              'char' => 13,
            ),
            24 => 
            array (
              'type' => 'while',
              'expr' => 
              array (
                'type' => 'and',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'contLoop',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 68,
                  'char' => 25,
                ),
                'right' => 
                array (
                  'type' => 'list',
                  'left' => 
                  array (
                    'type' => 'less',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'iteration',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 68,
                      'char' => 38,
                    ),
                    'right' => 
                    array (
                      'type' => 'variable',
                      'value' => 'iterMax',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 68,
                      'char' => 47,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 68,
                    'char' => 47,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 68,
                  'char' => 49,
                ),
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 68,
                'char' => 49,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'resultValue',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 70,
                          'char' => 41,
                        ),
                        'name' => 'irrResult',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 70,
                              'char' => 58,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 70,
                            'char' => 58,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'dates',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 70,
                              'char' => 65,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 70,
                            'char' => 65,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'resultRate',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 70,
                              'char' => 77,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 70,
                            'char' => 77,
                          ),
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 70,
                        'char' => 78,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 70,
                      'char' => 78,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 71,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'irr_result_deriv',
                      'expr' => 
                      array (
                        'type' => 'mcall',
                        'variable' => 
                        array (
                          'type' => 'variable',
                          'value' => 'this',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 71,
                          'char' => 41,
                        ),
                        'name' => 'irrResultDeriv',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 71,
                              'char' => 63,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 71,
                            'char' => 63,
                          ),
                          1 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'dates',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 71,
                              'char' => 70,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 71,
                            'char' => 70,
                          ),
                          2 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'variable',
                              'value' => 'resultRate',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 71,
                              'char' => 82,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 71,
                            'char' => 82,
                          ),
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 71,
                        'char' => 83,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 71,
                      'char' => 83,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 72,
                  'char' => 14,
                ),
                2 => 
                array (
                  'type' => 'if',
                  'expr' => 
                  array (
                    'type' => 'not-equals',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'irr_result_deriv',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 72,
                      'char' => 34,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 72,
                      'char' => 37,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 72,
                    'char' => 37,
                  ),
                  'statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'newRate',
                          'expr' => 
                          array (
                            'type' => 'sub',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'resultRate',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 73,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'list',
                              'left' => 
                              array (
                                'type' => 'div',
                                'left' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'resultValue',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 73,
                                  'char' => 57,
                                ),
                                'right' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'irr_result_deriv',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 73,
                                  'char' => 75,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 73,
                                'char' => 75,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 73,
                              'char' => 76,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 73,
                            'char' => 76,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 73,
                          'char' => 76,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 74,
                      'char' => 13,
                    ),
                  ),
                  'else_statements' => 
                  array (
                    0 => 
                    array (
                      'type' => 'let',
                      'assignments' => 
                      array (
                        0 => 
                        array (
                          'assign-type' => 'variable',
                          'operator' => 'assign',
                          'variable' => 'newRate',
                          'expr' => 
                          array (
                            'type' => 'sub',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'resultRate',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 75,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'int',
                              'value' => '0',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 75,
                              'char' => 45,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 75,
                            'char' => 45,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 75,
                          'char' => 45,
                        ),
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 76,
                      'char' => 13,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 78,
                  'char' => 15,
                ),
                3 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'epsRate',
                      'expr' => 
                      array (
                        'type' => 'fcall',
                        'name' => 'abs',
                        'call-type' => 1,
                        'parameters' => 
                        array (
                          0 => 
                          array (
                            'parameter' => 
                            array (
                              'type' => 'sub',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'newRate',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 78,
                                'char' => 48,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'resultRate',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 78,
                                'char' => 60,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 78,
                              'char' => 60,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 78,
                            'char' => 60,
                          ),
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 78,
                        'char' => 61,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 78,
                      'char' => 61,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 79,
                  'char' => 15,
                ),
                4 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'resultRate',
                      'expr' => 
                      array (
                        'type' => 'variable',
                        'value' => 'newRate',
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 79,
                        'char' => 43,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 79,
                      'char' => 43,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 80,
                  'char' => 15,
                ),
                5 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'contLoop',
                      'expr' => 
                      array (
                        'type' => 'and',
                        'left' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'greater',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'epsRate',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 80,
                              'char' => 45,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'epsMax',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 80,
                              'char' => 53,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 80,
                            'char' => 53,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 80,
                          'char' => 56,
                        ),
                        'right' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'greater',
                            'left' => 
                            array (
                              'type' => 'fcall',
                              'name' => 'abs',
                              'call-type' => 1,
                              'parameters' => 
                              array (
                                0 => 
                                array (
                                  'parameter' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'resultValue',
                                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                    'line' => 80,
                                    'char' => 74,
                                  ),
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 80,
                                  'char' => 74,
                                ),
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 80,
                              'char' => 76,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'epsMax',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 80,
                              'char' => 84,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 80,
                            'char' => 84,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 80,
                          'char' => 85,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 80,
                        'char' => 85,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 80,
                      'char' => 85,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 82,
                  'char' => 15,
                ),
                6 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'iteration',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'iteration',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 82,
                          'char' => 39,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 82,
                          'char' => 42,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 82,
                        'char' => 42,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 82,
                      'char' => 42,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 83,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 85,
              'char' => 10,
            ),
            25 => 
            array (
              'type' => 'if',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'contLoop',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 85,
                'char' => 21,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'return',
                  'expr' => 
                  array (
                    'type' => 'string',
                    'value' => '',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 86,
                    'char' => 20,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 87,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 90,
              'char' => 14,
            ),
            26 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'resultRate',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 90,
                'char' => 26,
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 91,
              'char' => 5,
            ),
          ),
          'return-type' => 
          array (
            'type' => 'return-type',
            'list' => 
            array (
              0 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'double',
                'mandatory' => 0,
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 4,
                'char' => 70,
              ),
              1 => 
              array (
                'type' => 'return-type-parameter',
                'data-type' => 'string',
                'mandatory' => 0,
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 5,
                'char' => 5,
              ),
            ),
            'void' => 0,
            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
            'line' => 5,
            'char' => 5,
          ),
          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
          'line' => 4,
          'last-line' => 94,
          'char' => 19,
        ),
        1 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'irrResult',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'values',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 94,
              'char' => 45,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'dates',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 94,
              'char' => 59,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'rate',
              'const' => 0,
              'data-type' => 'double',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 94,
              'char' => 72,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'array-access',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'values',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 96,
                      'char' => 28,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '0',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 96,
                      'char' => 30,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 96,
                    'char' => 31,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 96,
                  'char' => 31,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 97,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'r',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 97,
                  'char' => 14,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 98,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 98,
                  'char' => 14,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 99,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'values_lenth',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 99,
                  'char' => 25,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 101,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'r',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rate',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 101,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 101,
                      'char' => 30,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 101,
                    'char' => 30,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 101,
                  'char' => 30,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 102,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 102,
                    'char' => 17,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 102,
                  'char' => 17,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 103,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'values_lenth',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'count',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'values',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 103,
                          'char' => 40,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 103,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 103,
                    'char' => 41,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 103,
                  'char' => 41,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 105,
              'char' => 13,
            ),
            7 => 
            array (
              'type' => 'while',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'i',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 105,
                  'char' => 17,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'values_lenth',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 105,
                  'char' => 32,
                ),
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 105,
                'char' => 32,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'result',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'result',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 106,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'div',
                          'left' => 
                          array (
                            'type' => 'array-access',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'values',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 106,
                              'char' => 42,
                            ),
                            'right' => 
                            array (
                              'type' => 'variable',
                              'value' => 'i',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 106,
                              'char' => 44,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 106,
                            'char' => 46,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'pow',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'r',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 106,
                                  'char' => 53,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 106,
                                'char' => 53,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'div',
                                  'left' => 
                                  array (
                                    'type' => 'list',
                                    'left' => 
                                    array (
                                      'type' => 'sub',
                                      'left' => 
                                      array (
                                        'type' => 'array-access',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'dates',
                                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                          'line' => 106,
                                          'char' => 61,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'i',
                                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                          'line' => 106,
                                          'char' => 63,
                                        ),
                                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                        'line' => 106,
                                        'char' => 65,
                                      ),
                                      'right' => 
                                      array (
                                        'type' => 'array-access',
                                        'left' => 
                                        array (
                                          'type' => 'variable',
                                          'value' => 'dates',
                                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                          'line' => 106,
                                          'char' => 72,
                                        ),
                                        'right' => 
                                        array (
                                          'type' => 'int',
                                          'value' => '0',
                                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                          'line' => 106,
                                          'char' => 74,
                                        ),
                                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                        'line' => 106,
                                        'char' => 75,
                                      ),
                                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                      'line' => 106,
                                      'char' => 75,
                                    ),
                                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                    'line' => 106,
                                    'char' => 77,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '365',
                                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                    'line' => 106,
                                    'char' => 82,
                                  ),
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 106,
                                  'char' => 82,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 106,
                                'char' => 82,
                              ),
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 106,
                            'char' => 83,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 106,
                          'char' => 83,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 106,
                        'char' => 83,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 106,
                      'char' => 83,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 107,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'i',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'i',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 107,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 107,
                          'char' => 26,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 107,
                        'char' => 26,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 107,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 108,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 109,
              'char' => 14,
            ),
            8 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 109,
                'char' => 22,
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 110,
              'char' => 5,
            ),
          ),
          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
          'line' => 94,
          'last-line' => 113,
          'char' => 20,
        ),
        2 => 
        array (
          'visibility' => 
          array (
            0 => 'private',
          ),
          'type' => 'method',
          'name' => 'irrResultDeriv',
          'parameters' => 
          array (
            0 => 
            array (
              'type' => 'parameter',
              'name' => 'values',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 113,
              'char' => 50,
            ),
            1 => 
            array (
              'type' => 'parameter',
              'name' => 'dates',
              'const' => 0,
              'data-type' => 'array',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 113,
              'char' => 64,
            ),
            2 => 
            array (
              'type' => 'parameter',
              'name' => 'rate',
              'const' => 0,
              'data-type' => 'double',
              'mandatory' => 1,
              'reference' => 0,
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 113,
              'char' => 77,
            ),
          ),
          'statements' => 
          array (
            0 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'result',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 115,
                  'char' => 19,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 116,
              'char' => 11,
            ),
            1 => 
            array (
              'type' => 'declare',
              'data-type' => 'variable',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'r',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 116,
                  'char' => 14,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 117,
              'char' => 11,
            ),
            2 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'i',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 117,
                  'char' => 14,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 118,
              'char' => 11,
            ),
            3 => 
            array (
              'type' => 'declare',
              'data-type' => 'int',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'values_lenth',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 118,
                  'char' => 25,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 120,
              'char' => 11,
            ),
            4 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'r',
                  'expr' => 
                  array (
                    'type' => 'add',
                    'left' => 
                    array (
                      'type' => 'variable',
                      'value' => 'rate',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 120,
                      'char' => 27,
                    ),
                    'right' => 
                    array (
                      'type' => 'int',
                      'value' => '1',
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 120,
                      'char' => 30,
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 120,
                    'char' => 30,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 120,
                  'char' => 30,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 121,
              'char' => 11,
            ),
            5 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'result',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '0',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 121,
                    'char' => 23,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 121,
                  'char' => 23,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 122,
              'char' => 11,
            ),
            6 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'i',
                  'expr' => 
                  array (
                    'type' => 'int',
                    'value' => '1',
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 122,
                    'char' => 18,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 122,
                  'char' => 18,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 123,
              'char' => 13,
            ),
            7 => 
            array (
              'type' => 'declare',
              'data-type' => 'double',
              'variables' => 
              array (
                0 => 
                array (
                  'variable' => 'frac',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 123,
                  'char' => 19,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 124,
              'char' => 11,
            ),
            8 => 
            array (
              'type' => 'let',
              'assignments' => 
              array (
                0 => 
                array (
                  'assign-type' => 'variable',
                  'operator' => 'assign',
                  'variable' => 'values_lenth',
                  'expr' => 
                  array (
                    'type' => 'fcall',
                    'name' => 'count',
                    'call-type' => 1,
                    'parameters' => 
                    array (
                      0 => 
                      array (
                        'parameter' => 
                        array (
                          'type' => 'variable',
                          'value' => 'values',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 124,
                          'char' => 40,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 124,
                        'char' => 40,
                      ),
                    ),
                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                    'line' => 124,
                    'char' => 41,
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 124,
                  'char' => 41,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 126,
              'char' => 13,
            ),
            9 => 
            array (
              'type' => 'while',
              'expr' => 
              array (
                'type' => 'less',
                'left' => 
                array (
                  'type' => 'variable',
                  'value' => 'i',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 126,
                  'char' => 16,
                ),
                'right' => 
                array (
                  'type' => 'variable',
                  'value' => 'values_lenth',
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 126,
                  'char' => 31,
                ),
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 126,
                'char' => 31,
              ),
              'statements' => 
              array (
                0 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'frac',
                      'expr' => 
                      array (
                        'type' => 'div',
                        'left' => 
                        array (
                          'type' => 'list',
                          'left' => 
                          array (
                            'type' => 'sub',
                            'left' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'dates',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 127,
                                'char' => 32,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'i',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 127,
                                'char' => 34,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 127,
                              'char' => 36,
                            ),
                            'right' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'dates',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 127,
                                'char' => 43,
                              ),
                              'right' => 
                              array (
                                'type' => 'int',
                                'value' => '0',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 127,
                                'char' => 45,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 127,
                              'char' => 46,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 127,
                            'char' => 46,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 127,
                          'char' => 48,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '365',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 127,
                          'char' => 53,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 127,
                        'char' => 53,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 127,
                      'char' => 53,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 128,
                  'char' => 15,
                ),
                1 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'result',
                      'expr' => 
                      array (
                        'type' => 'sub',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'result',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 128,
                          'char' => 33,
                        ),
                        'right' => 
                        array (
                          'type' => 'div',
                          'left' => 
                          array (
                            'type' => 'mul',
                            'left' => 
                            array (
                              'type' => 'variable',
                              'value' => 'frac',
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 128,
                              'char' => 40,
                            ),
                            'right' => 
                            array (
                              'type' => 'array-access',
                              'left' => 
                              array (
                                'type' => 'variable',
                                'value' => 'values',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 128,
                                'char' => 48,
                              ),
                              'right' => 
                              array (
                                'type' => 'variable',
                                'value' => 'i',
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 128,
                                'char' => 50,
                              ),
                              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                              'line' => 128,
                              'char' => 52,
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 128,
                            'char' => 52,
                          ),
                          'right' => 
                          array (
                            'type' => 'fcall',
                            'name' => 'pow',
                            'call-type' => 1,
                            'parameters' => 
                            array (
                              0 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'variable',
                                  'value' => 'r',
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 128,
                                  'char' => 59,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 128,
                                'char' => 59,
                              ),
                              1 => 
                              array (
                                'parameter' => 
                                array (
                                  'type' => 'add',
                                  'left' => 
                                  array (
                                    'type' => 'variable',
                                    'value' => 'frac',
                                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                    'line' => 128,
                                    'char' => 66,
                                  ),
                                  'right' => 
                                  array (
                                    'type' => 'int',
                                    'value' => '1',
                                    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                    'line' => 128,
                                    'char' => 69,
                                  ),
                                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                  'line' => 128,
                                  'char' => 69,
                                ),
                                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                                'line' => 128,
                                'char' => 69,
                              ),
                            ),
                            'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                            'line' => 128,
                            'char' => 70,
                          ),
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 128,
                          'char' => 70,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 128,
                        'char' => 70,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 128,
                      'char' => 70,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 129,
                  'char' => 15,
                ),
                2 => 
                array (
                  'type' => 'let',
                  'assignments' => 
                  array (
                    0 => 
                    array (
                      'assign-type' => 'variable',
                      'operator' => 'assign',
                      'variable' => 'i',
                      'expr' => 
                      array (
                        'type' => 'add',
                        'left' => 
                        array (
                          'type' => 'variable',
                          'value' => 'i',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 129,
                          'char' => 23,
                        ),
                        'right' => 
                        array (
                          'type' => 'int',
                          'value' => '1',
                          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                          'line' => 129,
                          'char' => 26,
                        ),
                        'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                        'line' => 129,
                        'char' => 26,
                      ),
                      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                      'line' => 129,
                      'char' => 26,
                    ),
                  ),
                  'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                  'line' => 130,
                  'char' => 9,
                ),
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 131,
              'char' => 14,
            ),
            10 => 
            array (
              'type' => 'return',
              'expr' => 
              array (
                'type' => 'variable',
                'value' => 'result',
                'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
                'line' => 131,
                'char' => 22,
              ),
              'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
              'line' => 132,
              'char' => 5,
            ),
          ),
          'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
          'line' => 113,
          'last-line' => 133,
          'char' => 20,
        ),
      ),
      'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
      'line' => 3,
      'char' => 5,
    ),
    'file' => '/www/start-zephir/lucklrj/lucklrj/math/irr.zep',
    'line' => 3,
    'char' => 5,
  ),
);