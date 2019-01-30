
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"


ZEPHIR_INIT_CLASS(Lucklrj_Math_Irr) {

	ZEPHIR_REGISTER_CLASS(Lucklrj\\Math, Irr, lucklrj, math_irr, lucklrj_math_irr_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Lucklrj_Math_Irr, getIRR) {

	zend_string *_2;
	zend_ulong _1;
	zend_bool positive = 0, negative = 0, _8, contLoop = 0, _9, _15$$9;
	zephir_fcall_cache_entry *_11 = NULL, *_12 = NULL, *_14 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS, iterMax = 0, iteration = 0;
	double guess, resultRate = 0, epsMax = 0, newRate = 0;
	zval *values_param = NULL, *guess_param = NULL, index, value, *_0, resultValue, irr_result_deriv, epsRate, _3$$4, _4$$5, _5$$5, _6$$3, _7$$3, _10$$9, _16$$9, _13$$10;
	zval values, dates;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&values);
	ZVAL_UNDEF(&dates);
	ZVAL_UNDEF(&index);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&resultValue);
	ZVAL_UNDEF(&irr_result_deriv);
	ZVAL_UNDEF(&epsRate);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$3);
	ZVAL_UNDEF(&_10$$9);
	ZVAL_UNDEF(&_16$$9);
	ZVAL_UNDEF(&_13$$10);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &values_param, &guess_param);

	ZEPHIR_OBS_COPY_OR_DUP(&values, values_param);
	if (!guess_param) {
		guess = 0.1;
	} else {
	if (UNEXPECTED(Z_TYPE_P(guess_param) != IS_DOUBLE)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'guess' must be a double") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	guess = Z_DVAL_P(guess_param);
	}


	ZEPHIR_INIT_VAR(&dates);
	array_init(&dates);
	positive = 0;
	negative = 0;
	zephir_is_iterable(&values, 0, "lucklrj/math/irr.zep", 35);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&values), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&index);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&index, _2);
		} else {
			ZVAL_LONG(&index, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		if (ZEPHIR_IS_LONG(&index, 0)) {
			ZEPHIR_INIT_NVAR(&_3$$4);
			ZVAL_LONG(&_3$$4, 0);
			zephir_array_append(&dates, &_3$$4, PH_SEPARATE, "lucklrj/math/irr.zep", 21);
		} else {
			zephir_array_fetch_long(&_4$$5, &dates, (zephir_get_numberval(&index) - 1), PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 23 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&_5$$5);
			ZVAL_LONG(&_5$$5, (zephir_get_numberval(&_4$$5) + 365));
			zephir_array_append(&dates, &_5$$5, PH_SEPARATE, "lucklrj/math/irr.zep", 23);
		}
		zephir_array_fetch(&_6$$3, &values, &index, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 26 TSRMLS_CC);
		if (ZEPHIR_GT_LONG(&_6$$3, 0)) {
			positive = 1;
		}
		zephir_array_fetch(&_7$$3, &values, &index, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 29 TSRMLS_CC);
		if (ZEPHIR_LT_LONG(&_7$$3, 0)) {
			negative = 1;
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&index);
	_8 = positive == 0;
	if (!(_8)) {
		_8 = negative == 0;
	}
	if (_8) {
		RETURN_MM_STRING("");
	}
	resultRate = guess;
	epsMax = 0.0000000001;
	iterMax = 50;
	iteration = 1;
	contLoop = 1;
	while (1) {
		_9 = contLoop;
		if (_9) {
			_9 = (iteration < iterMax);
		}
		if (!(_9)) {
			break;
		}
		ZVAL_DOUBLE(&_10$$9, resultRate);
		ZEPHIR_CALL_METHOD(&resultValue, this_ptr, "irrresult", &_11, 1, &values, &dates, &_10$$9);
		zephir_check_call_status();
		ZVAL_DOUBLE(&_10$$9, resultRate);
		ZEPHIR_CALL_METHOD(&irr_result_deriv, this_ptr, "irrresultderiv", &_12, 2, &values, &dates, &_10$$9);
		zephir_check_call_status();
		if (!ZEPHIR_IS_LONG(&irr_result_deriv, 0)) {
			ZEPHIR_INIT_LNVAR(_13$$10);
			div_function(&_13$$10, &resultValue, &irr_result_deriv TSRMLS_CC);
			newRate = (double) ((resultRate - zephir_get_numberval(&_13$$10)));
		} else {
			newRate = (resultRate - (double) 0);
		}
		ZVAL_DOUBLE(&_10$$9, (newRate - resultRate));
		ZEPHIR_CALL_FUNCTION(&epsRate, "abs", &_14, 3, &_10$$9);
		zephir_check_call_status();
		resultRate = newRate;
		_15$$9 = (ZEPHIR_GT_DOUBLE(&epsRate, epsMax));
		if (_15$$9) {
			ZEPHIR_CALL_FUNCTION(&_16$$9, "abs", &_14, 3, &resultValue);
			zephir_check_call_status();
			_15$$9 = ZEPHIR_GT_DOUBLE(&_16$$9, epsMax);
		}
		contLoop = _15$$9;
		iteration = (iteration + 1);
	}
	if (contLoop) {
		RETURN_MM_STRING("");
	}
	RETURN_MM_DOUBLE(resultRate);

}

PHP_METHOD(Lucklrj_Math_Irr, irrResult) {

	zend_long i = 0, values_lenth = 0;
	double rate;
	zval *values_param = NULL, *dates_param = NULL, *rate_param = NULL, result, r, _0$$3, _1$$3, _2$$3, _3$$3, _4$$3, _5$$3, _6$$3, _7$$3;
	zval values, dates;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&values);
	ZVAL_UNDEF(&dates);
	ZVAL_UNDEF(&result);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &values_param, &dates_param, &rate_param);

	ZEPHIR_OBS_COPY_OR_DUP(&values, values_param);
	ZEPHIR_OBS_COPY_OR_DUP(&dates, dates_param);
	if (UNEXPECTED(Z_TYPE_P(rate_param) != IS_DOUBLE)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'rate' must be a double") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	rate = Z_DVAL_P(rate_param);


	ZEPHIR_OBS_VAR(&result);
	zephir_array_fetch_long(&result, &values, 0, PH_NOISY, "lucklrj/math/irr.zep", 96 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&r);
	ZVAL_DOUBLE(&r, (rate + (double) 1));
	i = 1;
	values_lenth = zephir_fast_count_int(&values TSRMLS_CC);
	while (1) {
		if (!(i < values_lenth)) {
			break;
		}
		zephir_array_fetch_long(&_0$$3, &values, i, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 106 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_1$$3);
		zephir_array_fetch_long(&_2$$3, &dates, i, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 106 TSRMLS_CC);
		zephir_array_fetch_long(&_3$$3, &dates, 0, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 106 TSRMLS_CC);
		ZEPHIR_INIT_LNVAR(_4$$3);
		zephir_sub_function(&_4$$3, &_2$$3, &_3$$3);
		ZVAL_DOUBLE(&_5$$3, zephir_safe_div_zval_long(&_4$$3, 365 TSRMLS_CC));
		zephir_pow_function(&_1$$3, &r, &_5$$3);
		ZEPHIR_SINIT_NVAR(_6$$3);
		div_function(&_6$$3, &_0$$3, &_1$$3 TSRMLS_CC);
		ZEPHIR_INIT_LNVAR(_7$$3);
		zephir_add_function(&_7$$3, &result, &_6$$3);
		ZEPHIR_CPY_WRT(&result, &_7$$3);
		i = (i + 1);
	}
	RETURN_CCTOR(&result);

}

PHP_METHOD(Lucklrj_Math_Irr, irrResultDeriv) {

	zend_long i = 0, values_lenth = 0;
	double rate, frac = 0, _5$$3;
	zval *values_param = NULL, *dates_param = NULL, *rate_param = NULL, result, r, _0$$3, _1$$3, _2$$3, _3$$3, _4$$3;
	zval values, dates;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&values);
	ZVAL_UNDEF(&dates);
	ZVAL_UNDEF(&result);
	ZVAL_UNDEF(&r);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &values_param, &dates_param, &rate_param);

	ZEPHIR_OBS_COPY_OR_DUP(&values, values_param);
	ZEPHIR_OBS_COPY_OR_DUP(&dates, dates_param);
	if (UNEXPECTED(Z_TYPE_P(rate_param) != IS_DOUBLE)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'rate' must be a double") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	rate = Z_DVAL_P(rate_param);


	ZEPHIR_INIT_VAR(&r);
	ZVAL_DOUBLE(&r, (rate + (double) 1));
	ZEPHIR_INIT_VAR(&result);
	ZVAL_LONG(&result, 0);
	i = 1;
	values_lenth = zephir_fast_count_int(&values TSRMLS_CC);
	while (1) {
		if (!(i < values_lenth)) {
			break;
		}
		zephir_array_fetch_long(&_0$$3, &dates, i, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 127 TSRMLS_CC);
		zephir_array_fetch_long(&_1$$3, &dates, 0, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 127 TSRMLS_CC);
		ZEPHIR_INIT_LNVAR(_2$$3);
		zephir_sub_function(&_2$$3, &_0$$3, &_1$$3);
		frac = zephir_safe_div_zval_long(&_2$$3, 365 TSRMLS_CC);
		zephir_array_fetch_long(&_0$$3, &values, i, PH_NOISY | PH_READONLY, "lucklrj/math/irr.zep", 128 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_3$$3);
		ZVAL_DOUBLE(&_4$$3, (frac + (double) 1));
		zephir_pow_function(&_3$$3, &r, &_4$$3);
		_5$$3 = (zephir_get_numberval(&result) - zephir_safe_div_long_zval((frac * zephir_get_numberval(&_0$$3)), &_3$$3 TSRMLS_CC));
		ZEPHIR_INIT_NVAR(&result);
		ZVAL_DOUBLE(&result, _5$$3);
		i = (i + 1);
	}
	RETURN_CCTOR(&result);

}

