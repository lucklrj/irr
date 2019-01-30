[
    {
        "type": "namespace",
        "name": "Lucklrj\\Math",
        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
        "line": 3,
        "char": 5
    },
    {
        "type": "class",
        "name": "Irr",
        "abstract": 0,
        "final": 0,
        "definition": {
            "methods": [
                {
                    "visibility": [
                        "public"
                    ],
                    "type": "method",
                    "name": "getIRR",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "values",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 4,
                            "char": 41
                        },
                        {
                            "type": "parameter",
                            "name": "guess",
                            "const": 0,
                            "data-type": "double",
                            "mandatory": 1,
                            "default": {
                                "type": "double",
                                "value": "0.1",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 4,
                                "char": 61
                            },
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 4,
                            "char": 61
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "array",
                            "variables": [
                                {
                                    "variable": "dates",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 9,
                                    "char": 20
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 10,
                            "char": 12
                        },
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "positive",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 10,
                                    "char": 22
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 11,
                            "char": 12
                        },
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "negative",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 11,
                                    "char": 22
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 12,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "index",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 12,
                                    "char": 18
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 13,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "value",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 13,
                                    "char": 18
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 15,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "dates",
                                    "expr": {
                                        "type": "empty-array",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 15,
                                        "char": 26
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 15,
                                    "char": 26
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 16,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "positive",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 16,
                                        "char": 29
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 16,
                                    "char": 29
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 17,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "negative",
                                    "expr": {
                                        "type": "bool",
                                        "value": "false",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 17,
                                        "char": 29
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 17,
                                    "char": 29
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 19,
                            "char": 11
                        },
                        {
                            "type": "for",
                            "expr": {
                                "type": "variable",
                                "value": "values",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 19,
                                "char": 36
                            },
                            "key": "index",
                            "value": "value",
                            "reverse": 0,
                            "statements": [
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "index",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 20,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 20,
                                            "char": 27
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 20,
                                        "char": 27
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable-append",
                                                    "operator": "assign",
                                                    "variable": "dates",
                                                    "expr": {
                                                        "type": "int",
                                                        "value": "0",
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 21,
                                                        "char": 32
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 21,
                                                    "char": 32
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 22,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable-append",
                                                    "operator": "assign",
                                                    "variable": "dates",
                                                    "expr": {
                                                        "type": "add",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "dates",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 23,
                                                                "char": 36
                                                            },
                                                            "right": {
                                                                "type": "sub",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "index",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 23,
                                                                    "char": 43
                                                                },
                                                                "right": {
                                                                    "type": "int",
                                                                    "value": "1",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 23,
                                                                    "char": 46
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 23,
                                                                "char": 46
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 23,
                                                            "char": 48
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "365",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 23,
                                                            "char": 53
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 23,
                                                        "char": 53
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 23,
                                                    "char": 53
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 24,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 26,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "greater",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "values",
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 26,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "index",
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 26,
                                                "char": 28
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 26,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 26,
                                            "char": 34
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 26,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "positive",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 27,
                                                        "char": 36
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 27,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 28,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 29,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "less",
                                        "left": {
                                            "type": "array-access",
                                            "left": {
                                                "type": "variable",
                                                "value": "values",
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 29,
                                                "char": 22
                                            },
                                            "right": {
                                                "type": "variable",
                                                "value": "index",
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 29,
                                                "char": 28
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 29,
                                            "char": 30
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 29,
                                            "char": 34
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 29,
                                        "char": 34
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "negative",
                                                    "expr": {
                                                        "type": "bool",
                                                        "value": "true",
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 30,
                                                        "char": 36
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 30,
                                                    "char": 36
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 31,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 32,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 35,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "list",
                                "left": {
                                    "type": "or",
                                    "left": {
                                        "type": "equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "positive",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 35,
                                            "char": 23
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 35,
                                            "char": 32
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 35,
                                        "char": 32
                                    },
                                    "right": {
                                        "type": "equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "negative",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 35,
                                            "char": 44
                                        },
                                        "right": {
                                            "type": "bool",
                                            "value": "false",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 35,
                                            "char": 51
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 35,
                                        "char": 51
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 35,
                                    "char": 51
                                },
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 35,
                                "char": 53
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 36,
                                        "char": 20
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 37,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 40,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "double",
                            "variables": [
                                {
                                    "variable": "resultRate",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 40,
                                    "char": 25
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 41,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "resultRate",
                                    "expr": {
                                        "type": "variable",
                                        "value": "guess",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 41,
                                        "char": 31
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 41,
                                    "char": 31
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 44,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "double",
                            "variables": [
                                {
                                    "variable": "epsMax",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 44,
                                    "char": 21
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 45,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "epsMax",
                                    "expr": {
                                        "type": "double",
                                        "value": "0.0000000001",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 45,
                                        "char": 34
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 45,
                                    "char": 34
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 48,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "iterMax",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 48,
                                    "char": 20
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 49,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "iterMax",
                                    "expr": {
                                        "type": "int",
                                        "value": "50",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 49,
                                        "char": 25
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 49,
                                    "char": 25
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 53,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "iteration",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 53,
                                    "char": 22
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 54,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "iteration",
                                    "expr": {
                                        "type": "int",
                                        "value": "1",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 54,
                                        "char": 26
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 54,
                                    "char": 26
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 56,
                            "char": 12
                        },
                        {
                            "type": "declare",
                            "data-type": "bool",
                            "variables": [
                                {
                                    "variable": "contLoop",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 56,
                                    "char": 22
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 57,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "contLoop",
                                    "expr": {
                                        "type": "bool",
                                        "value": "true",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 57,
                                        "char": 29
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 57,
                                    "char": 29
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 59,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "resultValue",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 59,
                                    "char": 24
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 60,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "irr_result_deriv",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 60,
                                    "char": 29
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 62,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "double",
                            "variables": [
                                {
                                    "variable": "newRate",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 62,
                                    "char": 22
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 64,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "epsRate",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 64,
                                    "char": 20
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 68,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "and",
                                "left": {
                                    "type": "variable",
                                    "value": "contLoop",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 68,
                                    "char": 25
                                },
                                "right": {
                                    "type": "list",
                                    "left": {
                                        "type": "less",
                                        "left": {
                                            "type": "variable",
                                            "value": "iteration",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 68,
                                            "char": 38
                                        },
                                        "right": {
                                            "type": "variable",
                                            "value": "iterMax",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 68,
                                            "char": 47
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 68,
                                        "char": 47
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 68,
                                    "char": 49
                                },
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 68,
                                "char": 49
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "resultValue",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 70,
                                                    "char": 41
                                                },
                                                "name": "irrResult",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 70,
                                                            "char": 58
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 70,
                                                        "char": 58
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "dates",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 70,
                                                            "char": 65
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 70,
                                                        "char": 65
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "resultRate",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 70,
                                                            "char": 77
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 70,
                                                        "char": 77
                                                    }
                                                ],
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 70,
                                                "char": 78
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 70,
                                            "char": 78
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 71,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "irr_result_deriv",
                                            "expr": {
                                                "type": "mcall",
                                                "variable": {
                                                    "type": "variable",
                                                    "value": "this",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 71,
                                                    "char": 41
                                                },
                                                "name": "irrResultDeriv",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 71,
                                                            "char": 63
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 71,
                                                        "char": 63
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "dates",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 71,
                                                            "char": 70
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 71,
                                                        "char": 70
                                                    },
                                                    {
                                                        "parameter": {
                                                            "type": "variable",
                                                            "value": "resultRate",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 71,
                                                            "char": 82
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 71,
                                                        "char": 82
                                                    }
                                                ],
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 71,
                                                "char": 83
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 71,
                                            "char": 83
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 72,
                                    "char": 14
                                },
                                {
                                    "type": "if",
                                    "expr": {
                                        "type": "not-equals",
                                        "left": {
                                            "type": "variable",
                                            "value": "irr_result_deriv",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 72,
                                            "char": 34
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 72,
                                            "char": 37
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 72,
                                        "char": 37
                                    },
                                    "statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "newRate",
                                                    "expr": {
                                                        "type": "sub",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "resultRate",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 73,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "list",
                                                            "left": {
                                                                "type": "div",
                                                                "left": {
                                                                    "type": "variable",
                                                                    "value": "resultValue",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 73,
                                                                    "char": 57
                                                                },
                                                                "right": {
                                                                    "type": "variable",
                                                                    "value": "irr_result_deriv",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 73,
                                                                    "char": 75
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 73,
                                                                "char": 75
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 73,
                                                            "char": 76
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 73,
                                                        "char": 76
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 73,
                                                    "char": 76
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 74,
                                            "char": 13
                                        }
                                    ],
                                    "else_statements": [
                                        {
                                            "type": "let",
                                            "assignments": [
                                                {
                                                    "assign-type": "variable",
                                                    "operator": "assign",
                                                    "variable": "newRate",
                                                    "expr": {
                                                        "type": "sub",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "resultRate",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 75,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "int",
                                                            "value": "0",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 75,
                                                            "char": 45
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 75,
                                                        "char": 45
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 75,
                                                    "char": 45
                                                }
                                            ],
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 76,
                                            "char": 13
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 78,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "epsRate",
                                            "expr": {
                                                "type": "fcall",
                                                "name": "abs",
                                                "call-type": 1,
                                                "parameters": [
                                                    {
                                                        "parameter": {
                                                            "type": "sub",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "newRate",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 78,
                                                                "char": 48
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "resultRate",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 78,
                                                                "char": 60
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 78,
                                                            "char": 60
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 78,
                                                        "char": 60
                                                    }
                                                ],
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 78,
                                                "char": 61
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 78,
                                            "char": 61
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 79,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "resultRate",
                                            "expr": {
                                                "type": "variable",
                                                "value": "newRate",
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 79,
                                                "char": 43
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 79,
                                            "char": 43
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 80,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "contLoop",
                                            "expr": {
                                                "type": "and",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "greater",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "epsRate",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 80,
                                                            "char": 45
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "epsMax",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 80,
                                                            "char": 53
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 80,
                                                        "char": 53
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 80,
                                                    "char": 56
                                                },
                                                "right": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "greater",
                                                        "left": {
                                                            "type": "fcall",
                                                            "name": "abs",
                                                            "call-type": 1,
                                                            "parameters": [
                                                                {
                                                                    "parameter": {
                                                                        "type": "variable",
                                                                        "value": "resultValue",
                                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                        "line": 80,
                                                                        "char": 74
                                                                    },
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 80,
                                                                    "char": 74
                                                                }
                                                            ],
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 80,
                                                            "char": 76
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "epsMax",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 80,
                                                            "char": 84
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 80,
                                                        "char": 84
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 80,
                                                    "char": 85
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 80,
                                                "char": 85
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 80,
                                            "char": 85
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 82,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "iteration",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "iteration",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 82,
                                                    "char": 39
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 82,
                                                    "char": 42
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 82,
                                                "char": 42
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 82,
                                            "char": 42
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 83,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 85,
                            "char": 10
                        },
                        {
                            "type": "if",
                            "expr": {
                                "type": "variable",
                                "value": "contLoop",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 85,
                                "char": 21
                            },
                            "statements": [
                                {
                                    "type": "return",
                                    "expr": {
                                        "type": "string",
                                        "value": "",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 86,
                                        "char": 20
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 87,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 90,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "resultRate",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 90,
                                "char": 26
                            },
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 91,
                            "char": 5
                        }
                    ],
                    "return-type": {
                        "type": "return-type",
                        "list": [
                            {
                                "type": "return-type-parameter",
                                "data-type": "double",
                                "mandatory": 0,
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 4,
                                "char": 70
                            },
                            {
                                "type": "return-type-parameter",
                                "data-type": "string",
                                "mandatory": 0,
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 5,
                                "char": 5
                            }
                        ],
                        "void": 0,
                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                        "line": 5,
                        "char": 5
                    },
                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                    "line": 4,
                    "last-line": 94,
                    "char": 19
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "irrResult",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "values",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 94,
                            "char": 45
                        },
                        {
                            "type": "parameter",
                            "name": "dates",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 94,
                            "char": 59
                        },
                        {
                            "type": "parameter",
                            "name": "rate",
                            "const": 0,
                            "data-type": "double",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 94,
                            "char": 72
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "expr": {
                                        "type": "array-access",
                                        "left": {
                                            "type": "variable",
                                            "value": "values",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 96,
                                            "char": 28
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "0",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 96,
                                            "char": 30
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 96,
                                        "char": 31
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 96,
                                    "char": 31
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 97,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 97,
                                    "char": 14
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 98,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "i",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 98,
                                    "char": 14
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 99,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "values_lenth",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 99,
                                    "char": 25
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 101,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "variable",
                                            "value": "rate",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 101,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 101,
                                            "char": 30
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 101,
                                        "char": 30
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 101,
                                    "char": 30
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 102,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "i",
                                    "expr": {
                                        "type": "int",
                                        "value": "1",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 102,
                                        "char": 17
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 102,
                                    "char": 17
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 103,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "values_lenth",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "values",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 103,
                                                    "char": 40
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 103,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 103,
                                        "char": 41
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 103,
                                    "char": 41
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 105,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "variable",
                                    "value": "i",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 105,
                                    "char": 17
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "values_lenth",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 105,
                                    "char": 32
                                },
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 105,
                                "char": 32
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "result",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 106,
                                                    "char": 33
                                                },
                                                "right": {
                                                    "type": "div",
                                                    "left": {
                                                        "type": "array-access",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "values",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 106,
                                                            "char": 42
                                                        },
                                                        "right": {
                                                            "type": "variable",
                                                            "value": "i",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 106,
                                                            "char": 44
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 106,
                                                        "char": 46
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "pow",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "r",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 106,
                                                                    "char": 53
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 106,
                                                                "char": 53
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "div",
                                                                    "left": {
                                                                        "type": "list",
                                                                        "left": {
                                                                            "type": "sub",
                                                                            "left": {
                                                                                "type": "array-access",
                                                                                "left": {
                                                                                    "type": "variable",
                                                                                    "value": "dates",
                                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                    "line": 106,
                                                                                    "char": 61
                                                                                },
                                                                                "right": {
                                                                                    "type": "variable",
                                                                                    "value": "i",
                                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                    "line": 106,
                                                                                    "char": 63
                                                                                },
                                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                "line": 106,
                                                                                "char": 65
                                                                            },
                                                                            "right": {
                                                                                "type": "array-access",
                                                                                "left": {
                                                                                    "type": "variable",
                                                                                    "value": "dates",
                                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                    "line": 106,
                                                                                    "char": 72
                                                                                },
                                                                                "right": {
                                                                                    "type": "int",
                                                                                    "value": "0",
                                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                    "line": 106,
                                                                                    "char": 74
                                                                                },
                                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                                "line": 106,
                                                                                "char": 75
                                                                            },
                                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                            "line": 106,
                                                                            "char": 75
                                                                        },
                                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                        "line": 106,
                                                                        "char": 77
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "365",
                                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                        "line": 106,
                                                                        "char": 82
                                                                    },
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 106,
                                                                    "char": 82
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 106,
                                                                "char": 82
                                                            }
                                                        ],
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 106,
                                                        "char": 83
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 106,
                                                    "char": 83
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 106,
                                                "char": 83
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 106,
                                            "char": 83
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 107,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "i",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "i",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 107,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 107,
                                                    "char": 26
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 107,
                                                "char": 26
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 107,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 108,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 109,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 109,
                                "char": 22
                            },
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 110,
                            "char": 5
                        }
                    ],
                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                    "line": 94,
                    "last-line": 113,
                    "char": 20
                },
                {
                    "visibility": [
                        "private"
                    ],
                    "type": "method",
                    "name": "irrResultDeriv",
                    "parameters": [
                        {
                            "type": "parameter",
                            "name": "values",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 113,
                            "char": 50
                        },
                        {
                            "type": "parameter",
                            "name": "dates",
                            "const": 0,
                            "data-type": "array",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 113,
                            "char": 64
                        },
                        {
                            "type": "parameter",
                            "name": "rate",
                            "const": 0,
                            "data-type": "double",
                            "mandatory": 1,
                            "reference": 0,
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 113,
                            "char": 77
                        }
                    ],
                    "statements": [
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "result",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 115,
                                    "char": 19
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 116,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "variable",
                            "variables": [
                                {
                                    "variable": "r",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 116,
                                    "char": 14
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 117,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "i",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 117,
                                    "char": 14
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 118,
                            "char": 11
                        },
                        {
                            "type": "declare",
                            "data-type": "int",
                            "variables": [
                                {
                                    "variable": "values_lenth",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 118,
                                    "char": 25
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 120,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "r",
                                    "expr": {
                                        "type": "add",
                                        "left": {
                                            "type": "variable",
                                            "value": "rate",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 120,
                                            "char": 27
                                        },
                                        "right": {
                                            "type": "int",
                                            "value": "1",
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 120,
                                            "char": 30
                                        },
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 120,
                                        "char": 30
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 120,
                                    "char": 30
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 121,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "result",
                                    "expr": {
                                        "type": "int",
                                        "value": "0",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 121,
                                        "char": 23
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 121,
                                    "char": 23
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 122,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "i",
                                    "expr": {
                                        "type": "int",
                                        "value": "1",
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 122,
                                        "char": 18
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 122,
                                    "char": 18
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 123,
                            "char": 13
                        },
                        {
                            "type": "declare",
                            "data-type": "double",
                            "variables": [
                                {
                                    "variable": "frac",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 123,
                                    "char": 19
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 124,
                            "char": 11
                        },
                        {
                            "type": "let",
                            "assignments": [
                                {
                                    "assign-type": "variable",
                                    "operator": "assign",
                                    "variable": "values_lenth",
                                    "expr": {
                                        "type": "fcall",
                                        "name": "count",
                                        "call-type": 1,
                                        "parameters": [
                                            {
                                                "parameter": {
                                                    "type": "variable",
                                                    "value": "values",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 124,
                                                    "char": 40
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 124,
                                                "char": 40
                                            }
                                        ],
                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                        "line": 124,
                                        "char": 41
                                    },
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 124,
                                    "char": 41
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 126,
                            "char": 13
                        },
                        {
                            "type": "while",
                            "expr": {
                                "type": "less",
                                "left": {
                                    "type": "variable",
                                    "value": "i",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 126,
                                    "char": 16
                                },
                                "right": {
                                    "type": "variable",
                                    "value": "values_lenth",
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 126,
                                    "char": 31
                                },
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 126,
                                "char": 31
                            },
                            "statements": [
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "frac",
                                            "expr": {
                                                "type": "div",
                                                "left": {
                                                    "type": "list",
                                                    "left": {
                                                        "type": "sub",
                                                        "left": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "dates",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 127,
                                                                "char": 32
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "i",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 127,
                                                                "char": 34
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 127,
                                                            "char": 36
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "dates",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 127,
                                                                "char": 43
                                                            },
                                                            "right": {
                                                                "type": "int",
                                                                "value": "0",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 127,
                                                                "char": 45
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 127,
                                                            "char": 46
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 127,
                                                        "char": 46
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 127,
                                                    "char": 48
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "365",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 127,
                                                    "char": 53
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 127,
                                                "char": 53
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 127,
                                            "char": 53
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 128,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "result",
                                            "expr": {
                                                "type": "sub",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "result",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 128,
                                                    "char": 33
                                                },
                                                "right": {
                                                    "type": "div",
                                                    "left": {
                                                        "type": "mul",
                                                        "left": {
                                                            "type": "variable",
                                                            "value": "frac",
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 128,
                                                            "char": 40
                                                        },
                                                        "right": {
                                                            "type": "array-access",
                                                            "left": {
                                                                "type": "variable",
                                                                "value": "values",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 128,
                                                                "char": 48
                                                            },
                                                            "right": {
                                                                "type": "variable",
                                                                "value": "i",
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 128,
                                                                "char": 50
                                                            },
                                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                            "line": 128,
                                                            "char": 52
                                                        },
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 128,
                                                        "char": 52
                                                    },
                                                    "right": {
                                                        "type": "fcall",
                                                        "name": "pow",
                                                        "call-type": 1,
                                                        "parameters": [
                                                            {
                                                                "parameter": {
                                                                    "type": "variable",
                                                                    "value": "r",
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 128,
                                                                    "char": 59
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 128,
                                                                "char": 59
                                                            },
                                                            {
                                                                "parameter": {
                                                                    "type": "add",
                                                                    "left": {
                                                                        "type": "variable",
                                                                        "value": "frac",
                                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                        "line": 128,
                                                                        "char": 66
                                                                    },
                                                                    "right": {
                                                                        "type": "int",
                                                                        "value": "1",
                                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                        "line": 128,
                                                                        "char": 69
                                                                    },
                                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                    "line": 128,
                                                                    "char": 69
                                                                },
                                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                                "line": 128,
                                                                "char": 69
                                                            }
                                                        ],
                                                        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                        "line": 128,
                                                        "char": 70
                                                    },
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 128,
                                                    "char": 70
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 128,
                                                "char": 70
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 128,
                                            "char": 70
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 129,
                                    "char": 15
                                },
                                {
                                    "type": "let",
                                    "assignments": [
                                        {
                                            "assign-type": "variable",
                                            "operator": "assign",
                                            "variable": "i",
                                            "expr": {
                                                "type": "add",
                                                "left": {
                                                    "type": "variable",
                                                    "value": "i",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 129,
                                                    "char": 23
                                                },
                                                "right": {
                                                    "type": "int",
                                                    "value": "1",
                                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                    "line": 129,
                                                    "char": 26
                                                },
                                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                                "line": 129,
                                                "char": 26
                                            },
                                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                            "line": 129,
                                            "char": 26
                                        }
                                    ],
                                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                    "line": 130,
                                    "char": 9
                                }
                            ],
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 131,
                            "char": 14
                        },
                        {
                            "type": "return",
                            "expr": {
                                "type": "variable",
                                "value": "result",
                                "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                                "line": 131,
                                "char": 22
                            },
                            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                            "line": 132,
                            "char": 5
                        }
                    ],
                    "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
                    "line": 113,
                    "last-line": 133,
                    "char": 20
                }
            ],
            "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
            "line": 3,
            "char": 5
        },
        "file": "\/www\/start-zephir\/lucklrj\/lucklrj\/math\/irr.zep",
        "line": 3,
        "char": 5
    }
]