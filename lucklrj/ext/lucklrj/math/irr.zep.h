
extern zend_class_entry *lucklrj_math_irr_ce;

ZEPHIR_INIT_CLASS(Lucklrj_Math_Irr);

PHP_METHOD(Lucklrj_Math_Irr, getIRR);
PHP_METHOD(Lucklrj_Math_Irr, irrResult);
PHP_METHOD(Lucklrj_Math_Irr, irrResultDeriv);

ZEND_BEGIN_ARG_INFO_EX(arginfo_lucklrj_math_irr_getirr, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, values, 0)
	ZEND_ARG_INFO(0, guess)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_lucklrj_math_irr_irrresult, 0, 0, 3)
	ZEND_ARG_ARRAY_INFO(0, values, 0)
	ZEND_ARG_ARRAY_INFO(0, dates, 0)
	ZEND_ARG_INFO(0, rate)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_lucklrj_math_irr_irrresultderiv, 0, 0, 3)
	ZEND_ARG_ARRAY_INFO(0, values, 0)
	ZEND_ARG_ARRAY_INFO(0, dates, 0)
	ZEND_ARG_INFO(0, rate)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(lucklrj_math_irr_method_entry) {
	PHP_ME(Lucklrj_Math_Irr, getIRR, arginfo_lucklrj_math_irr_getirr, ZEND_ACC_PUBLIC)
	PHP_ME(Lucklrj_Math_Irr, irrResult, arginfo_lucklrj_math_irr_irrresult, ZEND_ACC_PRIVATE)
	PHP_ME(Lucklrj_Math_Irr, irrResultDeriv, arginfo_lucklrj_math_irr_irrresultderiv, ZEND_ACC_PRIVATE)
	PHP_FE_END
};
