
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/memory.h"


ZEPHIR_INIT_CLASS(Lucklrj_Test) {

	ZEPHIR_REGISTER_CLASS(Lucklrj, Test, lucklrj, test, lucklrj_test_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Lucklrj_Test, say) {

	zval *str_param = NULL;
	zval str;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&str);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &str_param);

	if (UNEXPECTED(Z_TYPE_P(str_param) != IS_STRING && Z_TYPE_P(str_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'str' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(str_param) == IS_STRING)) {
		zephir_get_strval(&str, str_param);
	} else {
		ZEPHIR_INIT_VAR(&str);
		ZVAL_EMPTY_STRING(&str);
	}


	RETURN_CTOR(&str);

}

