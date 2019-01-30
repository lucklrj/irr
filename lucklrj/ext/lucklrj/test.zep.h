
extern zend_class_entry *lucklrj_test_ce;

ZEPHIR_INIT_CLASS(Lucklrj_Test);

PHP_METHOD(Lucklrj_Test, say);

ZEND_BEGIN_ARG_INFO_EX(arginfo_lucklrj_test_say, 0, 0, 1)
	ZEND_ARG_INFO(0, str)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(lucklrj_test_method_entry) {
	PHP_ME(Lucklrj_Test, say, arginfo_lucklrj_test_say, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
