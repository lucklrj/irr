namespace Lucklrj\Math;

class Irr{
    public function getIRR(array! values, float! guess = 0.1) ->float|string
    {
        // Credits: algorithm inspired by Apache OpenOffice

        // Initialize dates and check that values contains at least one positive value and one negative value
        array dates;
        bool positive;
        bool negative;
        var index;
        var value;

        let dates    = [];
        let positive = false;
        let negative = false;

        for index, value in values {
            if index == 0 {
                let dates[] = 0;
            }else{
                let dates[] = dates[index - 1] + 365;
            }

            if values[index] > 0 {
                let positive = true;
            }
            if values[index] < 0 {
                let negative = true;
            }
        }

        // Return error if values does not contain at least one positive value and one negative value
        if (positive == false || negative == false) {
            return "";
        }

        // Initialize guess and resultRate
        float resultRate;
        let resultRate = guess;

        // Set maximum epsilon for end of iteration
        float epsMax;
        let epsMax = 0.0000000001;

        // Set maximum number of iterations
        int iterMax;
        let iterMax = 50;

        // Implement Newton's method

        int iteration;
        let iteration = 1;

        bool contLoop;
        let contLoop  = true;

        var resultValue;
        var irr_result_deriv;

        float newRate;

        var epsRate;
        //float resultRate;
        //bool contLoop;

        while contLoop && (iteration < iterMax) {

            let resultValue      = this->irrResult(values, dates, resultRate);
            let irr_result_deriv = this->irrResultDeriv(values, dates, resultRate);
            if irr_result_deriv != 0{
                let newRate = resultRate - (resultValue / irr_result_deriv);
            } else {
                let newRate = resultRate - 0;
            }

            let epsRate          = abs(newRate - resultRate);
            let resultRate       = newRate;
            let contLoop         = (epsRate > epsMax) && (abs(resultValue) > epsMax);

            let iteration = iteration + 1;
        }

        if contLoop {
            return "";
        }

        // Return internal rate of return
        return resultRate;
    }

    // Calculates the resulting amount
    private function irrResult(array! values, array! dates, float! rate)
    {
        var result = values[0];
        var r;
        int i;
        int values_lenth;

        let r      = rate + 1;
        let i =1;
        let values_lenth = count(values);

        while i < values_lenth {
            let result = result +  values[i] / pow(r, ($dates[i] - dates[0]) / 365);
            let i = i + 1;
        }
        return result;
    }

    // Calculates the first derivation
    private function irrResultDeriv(array! values, array! $dates, float! rate)
    {
        var result;
        var r;
        int i;
        int values_lenth;

        let r      = rate + 1;
        let result = 0;
        let i = 1;
        float frac;
        let values_lenth = count(values);

        while i< values_lenth {
            let frac   = (dates[i] - dates[0]) / 365;
            let result = result - frac * values[i] / pow(r, frac + 1);
            let i = i + 1;
        }
        return result;
    }
}