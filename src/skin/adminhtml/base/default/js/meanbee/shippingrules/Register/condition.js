'use strict';
(function (ShippingRules) {

    ShippingRules.Register.condition = new ShippingRules.Register;
    ShippingRules.Register.condition.add = function (key, child) {
        if (!this.has(key) && (new child) instanceof ShippingRules.Condition) {
            this.children[key] = child;
        }
        return this;
    };
    ShippingRules.Register.condition.getAsOptions = function (context) {
        let categorised = Object.keys(this.children).map(key => {
            return {
                [this.children[key].getCategory(context)]: Object.keys(this.children[key].getVariables()).map(variable =>
                    (<option value={variable} data-register-key={key}>{this.children[key].getVariables()[variable].label}</option>))
            };
        }).reduce((accumulator, current) => {
            let k = Object.keys(current)[0];
            return Object.assign(accumulator, accumulator[k] ? {[k]: [...accumulator[k], ...current[k]]} : {[k]: current[k]});
        });
        return Object.keys(categorised).map(category => (
            <optgroup label={category}>
                {categorised[category]}
            </optgroup>
        ));
    };

})(Meanbee.ShippingRules);