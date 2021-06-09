/**
 * Interface:
 *   define([module], ()=> {
 *      expect([use case], () => {
 *          it(subject).equals(state);
 *      });
 * });
 */

const _ = (() => { 
    const test = () => {
        console.log("This framework is working.");
    }

    const it = (val) => {
        const equals = (expectedValue) => {
            if(val !== expectedValue){
                throw new Error(`${val} is not equal to ${expectedValue}`);
                return false;
            }
            return true;
        };

        return {
            equals,
        }
    }



    return {
        it,
        test,
    };
})();

module.exports = _;